<?php
class NamesController extends AppController{
	public $helpers = array('Html', 'Form', 'Session');
	public $components = array('Session');

	public function view($id = null) {
		//debug($this->Name->read(null, $id));
		
		$this->set('name', $this->Name->read(null, $id));
	}
}
?>