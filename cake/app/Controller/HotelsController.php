<?php
App::uses('AppController', 'Controller');
/**
 * Hotels Controller
 *
 * @property Hotel $Hotel
 */
class HotelsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Hotel->recursive = 0;
		$this->set('hotels', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Hotel->id = $id;
		if (!$this->Hotel->exists()) {
			throw new NotFoundException(__('Invalid hotel'));
		}
		$this->set('hotel', $this->Hotel->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Hotel->create();
			if ($this->Hotel->save($this->request->data)) {
				$this->Session->setFlash(__('The hotel has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hotel could not be saved. Please, try again.'));
			}
		}
		$cities = $this->Hotel->City->find('list');
		$reservations = $this->Hotel->Reservation->find('list');
		$this->set(compact('cities', 'reservations'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Hotel->id = $id;
		if (!$this->Hotel->exists()) {
			throw new NotFoundException(__('Invalid hotel'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Hotel->save($this->request->data)) {
				$this->Session->setFlash(__('The hotel has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hotel could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Hotel->read(null, $id);
		}
		$cities = $this->Hotel->City->find('list');
		$reservations = $this->Hotel->Reservation->find('list');
		$this->set(compact('cities', 'reservations'));
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
		$this->Hotel->id = $id;
		if (!$this->Hotel->exists()) {
			throw new NotFoundException(__('Invalid hotel'));
		}
		if ($this->Hotel->delete()) {
			$this->Session->setFlash(__('Hotel deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Hotel was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
