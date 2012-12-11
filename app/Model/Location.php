<?php 
class Location extends AppModel{
	public $useTable = 'location';

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