<?php 
class RecordReference extends AppModel{
	public $useTable = 'record_reference';

	$belongsTo = array(
			'RecordFrom' => array(
					'className' => 'Record',
					'foreignKey' => 'record_from_qualifier'
				),
			'RecordTo' => array(
					'className' => 'Record',
					'foreignKey' => 'record_to_qualifier'
				)
		);
}

?>