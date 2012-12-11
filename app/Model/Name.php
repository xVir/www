<?php 
class Name extends AppModel{
	public $useTable = 'name';
	public $recursive = 0;

	public $belongsTo = array(
			'BeginDocument' => array(
					'className' => 'Document',
					'foreignKey' => 'begin_document_id'
				),

			'EndDocument' => array(
					'className' => 'Document',
					'foreignKey' => 'end_document_id'
				),
			'Record' => array(
					'className' => 'Record',
					'foreignKey' => 'qualifier'
				)
		);
}

?>