<?php
App::uses('AppController', 'Controller');
/**
 * Flights Controller
 *
 * @property Flight $Flight
 */
class FlightsController extends AppController {
	private $outboundRadioName = 'sel_ob_fl';
	private $returnRadioName = 'sel_rt_fl';
	
/**
 * Default helper
 *
 * @var array
 */
	public $helpers = array('Text', 'Time', 'Number', );
	
/**
 * other models
 *
 * @var array
 */
	public $uses = array('Flight', 'Aircraft', 'Reservation', 'Cabin', 'ResFlight');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Flight->recursive = 0;
		$this->set('flights', $this->paginate());

		

	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Flight->id = $id;
		if (!$this->Flight->exists()) {
			throw new NotFoundException(__('Invalid flight'));
		}
		$this->set('flight', $this->Flight->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Flight->create();
			if ($this->Flight->save($this->request->data)) {
				$this->Session->setFlash(__('The flight has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The flight could not be saved. Please, try again.'));
			}
		}
		$carriers = $this->Flight->Carrier->find('list');
		$aircrafts = $this->Flight->Aircraft->find('list');
		$this->set(compact('carriers', 'aircrafts'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Flight->id = $id;
		if (!$this->Flight->exists()) {
			throw new NotFoundException(__('Invalid flight'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Flight->save($this->request->data)) {
				$this->Session->setFlash(__('The flight has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The flight could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Flight->read(null, $id);
		}
		$carriers = $this->Flight->Carrier->find('list');
		$aircrafts = $this->Flight->Aircraft->find('list');
		$this->set(compact('carriers', 'aircrafts'));
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Flight->id = $id;
		if (!$this->Flight->exists()) {
			throw new NotFoundException(__('Invalid flight'));
		}
		if ($this->Flight->delete()) {
			$this->Session->setFlash(__('Flight deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Flight was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

	/**
	 * available flights method
	 *
	 * @param string $departure_airport, string $arrival_airport, string $flight_date
	 * @return array $flights
	 */
	
	public function available_flights($departure_airport, $arrival_airport, $flight_date)
	{
		$departure_day = $this->weekday_from_date($flight_date);
		$this->Flight->recursive = 2;
		
		$flights = $this->Flight->find(
		 	'all', 
				array(
				
				'conditions' => array(
					'Flight.departure_airport' => $departure_airport,
					'Flight.arrival_airport' => $arrival_airport,
					'Flight.' . $departure_day => 1
				)
			)
		);
		
		$this->ResFlight->recursive = 2;
		$ResFlights = $this->ResFlight->find('all', array(
			'conditions'=> array(
				'ResFlight.date' => $this->date_to_sql_date($flight_date)
			)
		));

		$seatRequest = $this->Session->read('Search.number_of_passengers'); 
		$flightIndex=0;
		foreach ($flights as $flight) {

			$cabinIndex=0;
			foreach ($flight['Aircraft']['Cabin'] as $cabin) {
				$seatSold = 0;
				foreach ($ResFlights as $ResFlight) {
					
					if ($ResFlight['ResFlight']['flight_id'] == $flight['Flight']['id']  && $ResFlight['ResFlight']['cabin_id'] == $cabin['id']) {
						$seatSold = $seatSold + count($ResFlight['Reservation']['ResPassenger']);							
						
					}
				}
				if ($cabin['no_of_seat'] <= $seatSold + $seatRequest) {
				//$logMsg = 'flightid:' . $ResFlight['ResFlight']['flight_id'] . ' cabinId:' . $cabin['id'] . ' seats:' . (count($ResFlight['Reservation']['ResPassenger']) + $seatRequest) . ' flightIndex:' . $flightIndex . ' cabinIndex:' . $cabinIndex  ;
				//CakeLog::write('availlog', $logMsg);
				unset($flights[$flightIndex]['Aircraft']['Cabin'][$cabinIndex]);
				}	 
				$cabinIndex++;	
			}
			if (count($flights[$flightIndex]['Aircraft']['Cabin']) == 0) {
				
				unset($flights[$flightIndex]);
			}
			$flightIndex++;
		}
		
		//debug($flights);
		return $flights;
		
	}

/**
 * available_outbound_flights method
 *
 * @return void
 */
	public function outbound_flights() {
		$this->request_data_to_session();
		
		$this->Session->delete('Flights.ResFlight.0');
		$this->Session->delete('Fares.ResFare.0');
		
		$flights = $this->available_flights($this->Session->read('Search.departure_airport'), $this->Session->read('Search.arrival_airport'), $this->Session->read('Search.departure_date'));
 
		$cabins = $this->multi_array_unique($this->cabins_from_flights($flights));
		
		$this->set('cabins', $cabins);
		$this->set('airports', array(
			'from_airport' => $this->Session->read('Search.departure_airport'), 
			'to_airport' => $this->Session->read('Search.arrival_airport')
		));
		
		$this->set('flight_date', $this->Session->read('Search.departure_date'));
		$this->set('radio_name', $this->outboundRadioName);
		$this->set('action', 'set_outbound_flights');
		$this->set('flights', $flights);
		
		$this->render('available_flights');
		
		//debug($cabins);
		//debug($flights);
	}
	
	public function set_outbound_flights ()
	{

		list($flightId, $cabinId, $fareId) = explode('_', $this->request->data[$this->outboundRadioName]);
		
		$this->Session->write('Flights.ResFlight.0.flight_id', $flightId);
		$this->Session->write('Flights.ResFlight.0.cabin_id', $cabinId);
		$this->Session->write('Flights.ResFlight.0.date', $this->request->data['Flights']['date']);
		$this->Session->write('Fares.ResFare.0.fare_id', $fareId);
		
		if ($this->Session->read('Search.direction') == 'rt') {
			$this->redirect('return_flights');
		} else {
			$this->Session->delete('Flights.ResFlight.1');
			$this->Session->delete('Fares.ResFare.1');
			$this->redirect('/res_passengers/passenger_details');
		};
	}
/**
 * available_return_flights method
 *
 * @return void
 */
	public function return_flights() {
		$this->Session->delete('Flights.ResFlight.1');
		$this->Session->delete('Fares.ResFare.1');
		
		$flights = $this->available_flights($this->Session->read('Search.arrival_airport'), $this->Session->read('Search.departure_airport'), $this->Session->read('Search.arrival_date'));
		$cabins = $this->cabins_from_flights($flights);
		
		$this->set('cabins', $this->multi_array_unique($cabins));
		$this->set('airports', array(
			'from_airport' => $this->Session->read('Search.arrival_airport'), 
			'to_airport' => $this->Session->read('Search.departure_airport')
		));
		
		$this->set('flight_date', $this->Session->read('Search.arrival_date'));
		$this->set('radio_name', $this->returnRadioName);
		$this->set('action', 'set_return_flights');
		$this->set('flights', $flights);

		
		$this->render('available_flights');
	}

	public function set_return_flights ()
	{
		
		list($flightId, $cabinId, $fareId) = explode('_', $this->request->data['sel_rt_fl']);
		
		$this->Session->write('Flights.ResFlight.1.flight_id', $flightId);
		$this->Session->write('Flights.ResFlight.1.cabin_id', $cabinId);
		$this->Session->write('Flights.ResFlight.1.date', $this->request->data['Flights']['date']);
		$this->Session->write('Fares.ResFare.1.fare_id', $cabinId);
				
		$this->redirect('/res_passengers/passenger_details');
		
	}
}
