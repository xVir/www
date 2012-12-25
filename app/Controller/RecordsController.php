<?php
class RecordsController extends AppController{
	public $helpers = array('Html', 'Form', 'Session','GoogleMapV3');
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

	public function find(){
		if ($this->request->is('get')) {
			
		}
		else {
			$name = $this->request->data['Search']['name'];
			//debug('name='.$name);

			$qualifiers = $this->Record->Name->query('SELECT ("Name"."qualifier") as qualifiers, ("Name"."name") as names FROM "name" AS "Name" LEFT JOIN "public"."record" AS "Record" ON ("Name"."qualifier" = "Record"."qualifier") WHERE lower("Name"."name") LIKE \'%'.$name.'%\'');
	
			$this->set('qualifiers', $qualifiers);
		}
	}

}
?>