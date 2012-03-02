<?php
App::uses('AppController', 'Controller');
/**
 * Cabins Controller
 *
 * @property Cabin $Cabin
 */
class CabinsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Cabin->recursive = 0;
		$this->set('cabins', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Cabin->id = $id;
		if (!$this->Cabin->exists()) {
			throw new NotFoundException(__('Invalid cabin'));
		}
		$this->set('cabin', $this->Cabin->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Cabin->create();
			if ($this->Cabin->save($this->request->data)) {
				$this->Session->setFlash(__('The cabin has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cabin could not be saved. Please, try again.'));
			}
		}
		$aircrafts = $this->Cabin->Aircraft->find('list');
		$this->set(compact('aircrafts'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Cabin->id = $id;
		if (!$this->Cabin->exists()) {
			throw new NotFoundException(__('Invalid cabin'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Cabin->save($this->request->data)) {
				$this->Session->setFlash(__('The cabin has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cabin could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Cabin->read(null, $id);
		}
		$aircrafts = $this->Cabin->Aircraft->find('list');
		$this->set(compact('aircrafts'));
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
		$this->Cabin->id = $id;
		if (!$this->Cabin->exists()) {
			throw new NotFoundException(__('Invalid cabin'));
		}
		if ($this->Cabin->delete()) {
			$this->Session->setFlash(__('Cabin deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Cabin was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
