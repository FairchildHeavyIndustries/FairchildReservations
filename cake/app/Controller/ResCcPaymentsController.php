<?php
App::uses('AppController', 'Controller');
/**
 * ResCcPayments Controller
 *
 * @property ResCcPayment $ResCcPayment
 */
class ResCcPaymentsController extends AppController {

	public $uses = array('ResCcPayment', 'CardIssuer', 'Route', 'Tax', 'Fare');
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ResCcPayment->recursive = 0;
		$this->set('resCcPayments', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->ResCcPayment->id = $id;
		if (!$this->ResCcPayment->exists()) {
			throw new NotFoundException(__('Invalid res cc payment'));
		}
		$this->set('resCcPayment', $this->ResCcPayment->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ResCcPayment->create();
			if ($this->ResCcPayment->save($this->request->data)) {
				$this->Session->setFlash(__('The res cc payment has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The res cc payment could not be saved. Please, try again.'));
			}
		}
		$reservations = $this->ResCcPayment->Reservation->find('list');
		$cardIssuers = $this->ResCcPayment->CardIssuer->find('list');
		$this->set(compact('reservations', 'cardIssuers'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->ResCcPayment->id = $id;
		if (!$this->ResCcPayment->exists()) {
			throw new NotFoundException(__('Invalid res cc payment'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ResCcPayment->save($this->request->data)) {
				$this->Session->setFlash(__('The res cc payment has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The res cc payment could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->ResCcPayment->read(null, $id);
		}
		$reservations = $this->ResCcPayment->Reservation->find('list');
		$cardIssuers = $this->ResCcPayment->CardIssuer->find('list');
		$this->set(compact('reservations', 'cardIssuers'));
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
		$this->ResCcPayment->id = $id;
		if (!$this->ResCcPayment->exists()) {
			throw new NotFoundException(__('Invalid res cc payment'));
		}
		if ($this->ResCcPayment->delete()) {
			$this->Session->setFlash(__('Res cc payment deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Res cc payment was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
	
	
	public function price_breakdown()
	{
		foreach ($this->Session->read('Fares.ResFare') as $ResFare) {
			$currFare =  $this->Fare->find('all', array('conditions' => array('Fare.id' => $ResFare['fare_id'])));
			$currRoute = $this->Route->find('all', array('conditions' => array('Route.id' => $currFare[0]['Fare']['route_id'])));
			$currTax = $this->Tax->find('all', array('conditions' => array('Tax.route_id' => $currFare[0]['Fare']['route_id'])));
			$Price[] = array('Type' => 'Fare', 'Description' => $currRoute[0]['Route']['description'], 'amount' => $currFare[0]['Fare']['amount']);
			if ($currTax) {
				$Price[] = array('Type' => 'Tax', 'Description' => $currTax[0]['Tax']['name'], 'amount' => ($currTax[0]['Tax']['amount']) * ($currFare[0]['Fare']['amount']));
			}
		}
		return $Price;
	}
	
	public function total_price (array $breakdown)
	{
		foreach ($breakdown as $p) {
			$amount = $p['amount'];
			if (isset($total)) {
				$total += $amount;
			} else {
				$total = $amount;
			}
		}
		return $total;
	}
	
	public function payment_details () {
		
		$this->Session->delete('Payments');
		$card_issuers = $this->ResCcPayment->CardIssuer->find('list');
		
		$this->set('cardIssuers', $card_issuers);
		//$this->set('the_input', $this->request->data);	
		$breakdown = $this->price_breakdown();
		$total = $this->total_price($breakdown);
		$this->set('Pricing', $breakdown);
		$this->set('Total', $total);
		$this->render('payment_details');
	}
	
	public function set_cc_payment()
	{	
	
		$this->Session->write('Payments', $this->request->data);
		$this->redirect(array('action' => 'confirm_booking', 'controller' => 'Reservations'));
		
		
		
	}
}
