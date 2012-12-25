<p>Search</p>
<?php
    echo $this->Form->create('Record', array('action' => 'find'));
    echo $this->Form->input('Search.name', array('type'=>'text'));
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