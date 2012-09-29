<?php
App::uses('AppController', 'Controller');
/**
 * Routes Controller
 *
 * @property Route $Route
 */
class RoutesController extends AppController {
	var $components = array('RequestHandler');
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Route->recursive = 0;
		$this->set('routes', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Route->id = $id;
		if (!$this->Route->exists()) {
			throw new NotFoundException(__('Invalid route'));
		}
		$this->set('route', $this->Route->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Route->create();
			if ($this->Route->save($this->request->data)) {
				$this->Session->setFlash(__('The route has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The route could not be saved. Please, try again.'));
			}
		}
		$startAirports = $this->Route->StartAirport->find('list');
		$endAirports = $this->Route->EndAirport->find('list');
		$this->set(compact('startAirports', 'endAirports'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Route->id = $id;
		if (!$this->Route->exists()) {
			throw new NotFoundException(__('Invalid route'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Route->save($this->request->data)) {
				$this->Session->setFlash(__('The route has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The route could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Route->read(null, $id);
		}
		$startAirports = $this->Route->StartAirport->find('list');
		$endAirports = $this->Route->EndAirport->find('list');
		$this->set(compact('startAirports', 'endAirports'));
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
		$this->Route->id = $id;
		if (!$this->Route->exists()) {
			throw new NotFoundException(__('Invalid route'));
		}
		if ($this->Route->delete()) {
			$this->Session->setFlash(__('Route deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Route was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
	public function ajaxServicedAirport($departure_airport)
	{
		//$this->autoRender = FALSE;
		$arrival_data = $this->Route->servicedAirportData($departure_airport);
		$this->set('airport_data', $arrival_data);
		$this->set('Direction', 'Arrival');
		//$returnVal = $this->AirportOptions->createOptions('arrival_data', $arrival_data);
		//echo $returnVal;
	}
	

}
