<p>Search</p>
<?php
    echo $this->Form->create('Record', array('action' => 'find'));
    echo $this->Form->input('Search.name', array('label'=>'Name', 'type'=>'text'));
    echo $this->Form->input('Search.useDate', array('label'=>'Enable date', 'type'=>'checkbox'));
    echo $this->Form->input('Search.dateFrom', array('label'=>'Date From',
    	 'type'=>'date', 'dateFormat'=>'MY'));
    echo $this->Form->input('Search.dateTo', array('label'=>'Date To',
    	 'type'=>'date', 'dateFormat'=>'MY'));

    echo $this->Form->input('Search.useRegion', array('label'=>'Use region', 'type'=>'checkbox'));

    echo $this->GoogleMapV3->map(array('localize'=>false, 
    	'width'=>'500px', 
    	'height'=>'500px',
    	'regionSelectAllowed'=>true,
    	'regionSelectFieldName'=>"SearchRegion"));

    echo $this->Form->input('Search.region', array('type'=>'hidden'));

    echo $this->Form->end('Search');
?>


<?php if (isset($qualifiers)) { ?>

<?php //debug($qualifiers) ?>
	
<p>Search results:</p>

<table>
	<tr>
		<th>Qualifier</th>
		<th>Name</th>
	</tr>

	<?php foreach ($qualifiers as $q): ?>
	<?php $qualifier = $q[0]['qualifiers']; ?>
	<?php $name = $q[0]['names']; ?>
		<tr>
			<td><?php echo $this->Html->link($qualifier, array('controller'=>'records', 'action'=>'view', $qualifier)); ?></td>

			<td><?php echo $name ?></td>
		</tr>	
	<?php endforeach; ?>
	<?php unset($qualifier); ?>
    <?php unset($q); ?>
</table>

 <?php } ?>