<?php
App::uses('AppController', 'Controller');
/**
 * ResFlights Controller
 *
 * @property ResFlight $ResFlight
 */
class ResFlightsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ResFlight->recursive = 1;
		//debug($this->paginate());
		$this->set('resFlights', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->ResFlight->id = $id;
		if (!$this->ResFlight->exists()) {
			throw new NotFoundException(__('Invalid res flight'));
		}
		$this->set('resFlight', $this->ResFlight->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ResFlight->create();
			if ($this->ResFlight->save($this->request->data)) {
				$this->Session->setFlash(__('The res flight has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The res flight could not be saved. Please, try again.'));
			}
		}
		$reservations = $this->ResFlight->Reservation->find('list');
		$flights = $this->ResFlight->Flight->find('list');
		$cabins = $this->ResFlight->Cabin->find('list');
		$this->set(compact('reservations', 'flights', 'cabins'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->ResFlight->id = $id;
		if (!$this->ResFlight->exists()) {
			throw new NotFoundException(__('Invalid res flight'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ResFlight->save($this->request->data)) {
				$this->Session->setFlash(__('The res flight has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The res flight could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->ResFlight->read(null, $id);
		}
		$reservations = $this->ResFlight->Reservation->find('list');
		$flights = $this->ResFlight->Flight->find('list');
		$cabins = $this->ResFlight->Cabin->find('list');
		$this->set(compact('reservations', 'flights', 'cabins'));
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
		$this->ResFlight->id = $id;
		if (!$this->ResFlight->exists()) {
			throw new NotFoundException(__('Invalid res flight'));
		}
		if ($this->ResFlight->delete()) {
			$this->Session->setFlash(__('Res flight deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Res flight was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
