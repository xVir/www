<?php 
class Record extends AppModel{
	public $useTable = 'record';
	public $primaryKey = 'qualifier';
	public $recursive = 2;

	public $hasMany = array(
			'Name' => array(
					'className' => 'Name',
					'foreignKey' => 'qualifier',
					'dependent' => true
				),
			'Location' => array(
					'className' => 'Location',
					'foreignKey' => 'qualifier',
					'dependent' => true
				)
		);

}

?>