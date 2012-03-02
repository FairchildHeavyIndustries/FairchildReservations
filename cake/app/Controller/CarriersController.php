<?php
App::uses('AppController', 'Controller');
/**
 * Carriers Controller
 *
 * @property Carrier $Carrier
 */
class CarriersController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Carrier->recursive = 0;
		$this->set('carriers', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Carrier->id = $id;
		if (!$this->Carrier->exists()) {
			throw new NotFoundException(__('Invalid carrier'));
		}
		$this->set('carrier', $this->Carrier->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Carrier->create();
			if ($this->Carrier->save($this->request->data)) {
				$this->Session->setFlash(__('The carrier has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The carrier could not be saved. Please, try again.'));
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
		$this->Carrier->id = $id;
		if (!$this->Carrier->exists()) {
			throw new NotFoundException(__('Invalid carrier'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Carrier->save($this->request->data)) {
				$this->Session->setFlash(__('The carrier has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The carrier could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Carrier->read(null, $id);
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
		$this->Carrier->id = $id;
		if (!$this->Carrier->exists()) {
			throw new NotFoundException(__('Invalid carrier'));
		}
		if ($this->Carrier->delete()) {
			$this->Session->setFlash(__('Carrier deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Carrier was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
