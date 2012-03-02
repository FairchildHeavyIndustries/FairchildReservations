<?php
App::uses('AppController', 'Controller');
/**
 * Aircrafts Controller
 *
 * @property Aircraft $Aircraft
 */
class AircraftsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Aircraft->recursive = 0;
		$this->set('aircrafts', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Aircraft->id = $id;
		if (!$this->Aircraft->exists()) {
			throw new NotFoundException(__('Invalid aircraft'));
		}
		$this->set('aircraft', $this->Aircraft->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Aircraft->create();
			if ($this->Aircraft->save($this->request->data)) {
				$this->Session->setFlash(__('The aircraft has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The aircraft could not be saved. Please, try again.'));
			}
		}
		$cabins = $this->Aircraft->Cabin->find('list');
		$this->set(compact('cabins'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Aircraft->id = $id;
		if (!$this->Aircraft->exists()) {
			throw new NotFoundException(__('Invalid aircraft'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Aircraft->save($this->request->data)) {
				$this->Session->setFlash(__('The aircraft has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The aircraft could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Aircraft->read(null, $id);
		}
		$cabins = $this->Aircraft->Cabin->find('list');
		$this->set(compact('cabins'));
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
		$this->Aircraft->id = $id;
		if (!$this->Aircraft->exists()) {
			throw new NotFoundException(__('Invalid aircraft'));
		}
		if ($this->Aircraft->delete()) {
			$this->Session->setFlash(__('Aircraft deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Aircraft was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
