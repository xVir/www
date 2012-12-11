<?php
class RecordsController extends AppController{
	public $helpers = array('Html', 'Form', 'Session');
	public $components = array('Session');

	public function index() {
		$this->set('records', $this->paginate('Record'));
	}

	public function view($qualifier = null) {
		//debug($this->Record->read(null,$qualifier));
		
		$this->set('record', $this->Record->read(null, $qualifier));
	}

	public function add() {
		if ($this->request->is('post')) {
			$this->Record->create();
			if ($this->Record->save($this->request->data)) {
				$this->Session->setFlash('Your post has been saved.');
                $this->redirect(array('action' => 'index'));
			}
			else{
				$this->Session->setFlash('Unable to add record.');
			}
		}
	}

	public function edit($qualifier = null){
		$this->Record->qualifier = $qualifier;
		if ($this->request->is('get')) {
			$this->request->data = $this->Record->read();
		}
		else{
			if ($this->Record->save($this->request->data)) {
            	$this->Session->setFlash('Your Record has been updated.');
            	$this->redirect(array('action' => 'index'));
        	} else {
            	$this->Session->setFlash('Unable to update your Record.');
        	}
		}
	}

	public function delete($qualifier){
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}

		if ($this->Record->delete($qualifer)) {
			$this->Session->setFlash('The record with qualifer: ' . $qualifer . ' has been deleted.');
        	$this->redirect(array('action' => 'index'));
		}
	}

}
?>