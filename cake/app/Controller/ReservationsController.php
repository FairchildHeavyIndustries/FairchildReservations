<?php
App::uses('AppController', 'Controller');
/**
 * Reservations Controller
 *
 * @property Reservation $Reservation
 */
class ReservationsController extends AppController {

/**
 * other models
 *
 * @var array
 */
	public $uses = array('Reservation');
	
	
/**
 * Pagination settings
 */

	public $paginate = array(
        'limit' => 25,
        'order' => array(
            'Reservation.id' => 'desc'
        )
    );
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Reservation->recursive = 0;
		$this->set('reservations', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Reservation->id = $id;
		if (!$this->Reservation->exists()) {
			throw new NotFoundException(__('Invalid reservation'));
		}
		$this->set('reservation', $this->Reservation->read(null, $id));
	}


/**
 * confirm_booking method
 *
 * Gets a new PNR, collates all the res_* data, and saves a booking object.
 * @param string $id
 * @return void
 */	
	public function confirm_booking ()
	{
		$booking = array('Reservation' => array(
			'pnr' => $this->generatePNR()
			));
		$booking = $booking + $this->Session->read('Passengers');
		$booking = $booking + $this->Session->read('Flights');
		$booking = $booking + $this->Session->read('Fares');
		$booking = $booking + $this->Session->read('Payments');
				
		$this->Reservation->create();
		if ($this->Reservation->saveAssociated($booking)) {
			$resId = $this->Reservation->getLastInsertId();
			$this->Session->setFlash(__('You reservation has been confirmed.'));
			$this->redirect('/Reservations/view/' . $resId);
			//return $this->redirect(array('action' => 'index'));
		} else {
			$this->Session->setFlash(__('The reservation could not be saved. Please, try again.'));
			debug($this->Reservation->validationErrors);
			//return $this->redirect(array('action' => 'index'));
			
		}
		
	}
	
/**
 * generatePNR method
 *
 * Generates a unique ALPHA record locator (PNR). 
 * @param string $id
 * @return string $newPNR
 */	

	public function generatePNR()
	{
		$characterMap = str_split('BCDFJHJKLMNPQRSTVWXYZ');
		$newPNR = "";
		
		$maxPNRArray = $this->Reservation->find('first', array(
			'fields'	=> array('Reservation.pnr as pnr'),
			'order'		=> array('Reservation.id DESC')
		));

		$maxPNR = $maxPNRArray['Reservation']['pnr'];
		
		if (strlen($maxPNR) < 6) {
			return "BBBBBB";
		}
		foreach (str_split($maxPNR) as $currLetter) {
			$numPNR[] = array_search($currLetter, $characterMap);
		}
		
		$numPNR[5] = $numPNR[5] + 1;

		for ($i=5; $i >= 0; $i--) { 
			if ($numPNR[$i] == 21) {
				$numPNR[$i] = 0;
				if ($i > 0) {
					$numPNR[$i-1] = ($numPNR[$i-1] + 1); 
				}
				
			}
		}
		
		foreach ($numPNR as $currKey) {
			$newPNR = $newPNR . $characterMap[$currKey];
		}

		return $newPNR;
	}
}
