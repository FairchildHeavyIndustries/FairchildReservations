<?php
App::uses('AppController', 'Controller');
/**
 * Fees Controller
 *
 * @property Fee $Fee
 */
class FeesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Fee->recursive = 0;
		$this->set('fees', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Fee->id = $id;
		if (!$this->Fee->exists()) {
			throw new NotFoundException(__('Invalid fee'));
		}
		$this->set('fee', $this->Fee->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Fee->create();
			if ($this->Fee->save($this->request->data)) {
				$this->Session->setFlash(__('The fee has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The fee could not be saved. Please, try again.'));
			}
		}
		$reservations = $this->Fee->Reservation->find('list');
		$this->set(compact('reservations'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Fee->id = $id;
		if (!$this->Fee->exists()) {
			throw new NotFoundException(__('Invalid fee'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Fee->save($this->request->data)) {
				$this->Session->setFlash(__('The fee has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The fee could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Fee->read(null, $id);
		}
		$reservations = $this->Fee->Reservation->find('list');
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
		$this->Fee->id = $id;
		if (!$this->Fee->exists()) {
			throw new NotFoundException(__('Invalid fee'));
		}
		if ($this->Fee->delete()) {
			$this->Session->setFlash(__('Fee deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Fee was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
