<?php
class RecordsController extends AppController{
	public $helpers = array('Html', 'Form');
	

	public function index() {
		$this->set('records', $this->paginate('Record'));
	}

}
?>