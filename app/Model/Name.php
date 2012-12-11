<?php 
class Name extends AppModel{
	public $useTable = 'name';

	public $belongsTo = array(
			'BeginDocument' => array(
					'className' => 'Document',
					'foreignKey' => 'begin_document_id'
				),

			'EndDocument' => array(
					'className' => 'Document',
					'foreignKey' => 'end_document_id'
				)
		);
}

?>