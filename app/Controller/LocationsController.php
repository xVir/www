<?php
class LocationsController extends AppController{
	public $helpers = array('Html', 'Form', 'Session', 'GoogleMapV3');
	public $components = array('Session');

	public function view($id = null) {
		//debug($this->Location->read(null, $id));
		
		$this->set('loc', $this->Location->read(null, $id));
	}
}
?>