<?php
class AirportsController extends AppController {

	var $name = 'Airports';

	function index() {
		$this->Airport->recursive = 0;
		$this->set('airports', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid airport', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('airport', $this->Airport->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Airport->create();
			if ($this->Airport->save($this->data)) {
				$this->Session->setFlash(__('The airport has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The airport could not be saved. Please, try again.', true));
			}
		}
		$cities = $this->Airport->City->find('list');
		$this->set(compact('cities'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid airport', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Airport->save($this->data)) {
				$this->Session->setFlash(__('The airport has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The airport could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Airport->read(null, $id);
		}
		$cities = $this->Airport->City->find('list');
		$this->set(compact('cities'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for airport', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Airport->delete($id)) {
			$this->Session->setFlash(__('Airport deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Airport was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
