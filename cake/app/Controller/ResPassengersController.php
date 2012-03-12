<?php
App::uses('AppController', 'Controller');
/**
 * ResPassengers Controller
 *
 * @property ResPassenger $ResPassenger
 */
class ResPassengersController extends AppController {

	public $helpers = array('Time');
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ResPassenger->recursive = 0;
		$this->set('resPassengers', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->ResPassenger->id = $id;
		if (!$this->ResPassenger->exists()) {
			throw new NotFoundException(__('Invalid res passenger'));
		}
		$this->set('resPassenger', $this->ResPassenger->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ResPassenger->create();
			if ($this->ResPassenger->save($this->request->data)) {
				$this->Session->setFlash(__('The res passenger has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The res passenger could not be saved. Please, try again.'));
			}
		}
		$reservations = $this->ResPassenger->Reservation->find('list');
		$this->set(compact('reservations'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->ResPassenger->id = $id;
		if (!$this->ResPassenger->exists()) {
			throw new NotFoundException(__('Invalid res passenger'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ResPassenger->save($this->request->data)) {
				$this->Session->setFlash(__('The res passenger has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The res passenger could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->ResPassenger->read(null, $id);
		}
		$reservations = $this->ResPassenger->Reservation->find('list');
		$this->set(compact('reservations'));
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
		$this->ResPassenger->id = $id;
		if (!$this->ResPassenger->exists()) {
			throw new NotFoundException(__('Invalid res passenger'));
		}
		if ($this->ResPassenger->delete()) {
			$this->Session->setFlash(__('Res passenger deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Res passenger was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
	
	public function passenger_details () {
		$this->Session->delete('Passengers');
		$this->render('passenger_details');
		
	}
	
	public function set_passenger_details () {
		
		$this->Session->write('Passengers', $this->request->data);
		/*
		$pax_index = 0;
		foreach ($this->Session->read('Passengers.ResPassenger') as $ResPasssenger) {
			$this->Session->write('Passengers.ResPassenger.' . $pax_index . '.birth_date', $this->Time->format('Y-m-d', $ResPassenger['birth_date']));
			$pax_index++; 
		}
		*/		
		$this->redirect('/res_cc_payments/payment_details');

		
	}
}
