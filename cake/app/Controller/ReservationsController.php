<?php
App::uses('AppController', 'Controller');
/**
 * Reservations Controller
 *
 * @property Reservation $Reservation
 */
class ReservationsController extends AppController {


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
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Reservation->create();
			if ($this->Reservation->save($this->request->data)) {
				$this->Session->setFlash(__('The reservation has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The reservation could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Reservation->id = $id;
		if (!$this->Reservation->exists()) {
			throw new NotFoundException(__('Invalid reservation'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Reservation->save($this->request->data)) {
				$this->Session->setFlash(__('The reservation has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The reservation could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Reservation->read(null, $id);
		}
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
		$this->Reservation->id = $id;
		if (!$this->Reservation->exists()) {
			throw new NotFoundException(__('Invalid reservation'));
		}
		if ($this->Reservation->delete()) {
			$this->Session->setFlash(__('Reservation deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Reservation was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
	
	public function confirm_booking ()
	{
		$booking = array('Reservation' => array(
			'pnr' => 'NEW'//,
			//'is_active' => '1'
			));
		$booking = $booking + $this->Session->read('Passengers');
		$booking = $booking + $this->Session->read('Flights');
		$booking = $booking + $this->Session->read('Fares');
		$booking = $booking + $this->Session->read('Payments');
				
		$this->Reservation->create();
		if ($this->Reservation->saveAssociated($booking)) {
			$this->Session->setFlash(__('The reservation has been saved'));
			$this->redirect(array('action' => 'index'));
		} else {
			$this->Session->setFlash(__('The reservation could not be saved. Please, try again.'));
			$this->redirect(array('action' => 'index'));
		}
		
	}
}
