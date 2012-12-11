<h1>Record qualifier: <?php echo h($record['Record']['qualifier']); ?></h1>
<p><?php echo $this->Html->link('Edit', array('action'=>'edit', $record['Record']['qualifier'])) ?>
</p>

<?php if(!is_null($record['Name'])) { ?>
<h3>Names:</h3>
<table>
    <tr>
        <th>Name</th>
        <th>Type</th>
        <th>Lang</th>
        <th>Valid from</th>
        <th>Valid to</th>
    </tr>

	
    <?php foreach ($record['Name'] as $name): ?>
    <tr>
    	<td><?php echo $name['name'] ?></td>
    	<td><?php echo $name['type'] ?></td>
    	<td><?php echo $name['lang'] ?></td>
    	<td><?php echo $name['BeginDocument']['document_date'] ?></td>
    	<td><?php echo $name['EndDocument']['document_date'] ?></td>
    </tr>
    <?php endforeach; ?>
    <?php unset($name); ?>

</table>
<?php } ?>

<?php if (!is_null($record['Location'])) { ?>
<h3>Locations:</h3>
<table>
	<tr>
		<th>Type</th>
		<th>Value</th>
		<th>Valid from</th>
		<th>Valid to</th>
		<th></th>
		<th></th>
	</tr>

	<?php foreach ($record['Location'] as $loc): ?>
	<tr>
		<td><?php echo $loc['location_type'] ?></td>
		<td>
			<?php 
				switch ($loc['location_type']) {
					case 'point':
						echo $loc['location_point'];
						break;
					
					default:
						echo 'unknown location type';
						break;
				}
			?>
		</td>
		<td><?php echo $loc['BeginDocument']['document_date'] ?></td>
		<td><?php echo $loc['EndDocument']['document_date'] ?></td>

		<td><?php echo $this->Html->link('View', array('controller'=>'locations', 'action'=>'view', $loc['id'])) ?></td>
		<td></td>
	</tr>
	<?php endforeach; ?>
	<?php unset($loc); ?>
</table>
<?php } ?>

<p>
	<?php echo $this->Form->postLink(
                'Delete',
                array('action' => 'delete', $record['Record']['qualifier']),
                array('confirm' => 'Are you sure?'));
            ?>
</p>