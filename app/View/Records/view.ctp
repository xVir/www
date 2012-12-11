<h1><?php echo h($record['Record']['qualifier']); ?></h1>
<p><?php echo $this->Html->link('Edit', array('action'=>'edit', $record['Record']['qualifier'])) ?>
</p>
<p>
	<?php echo $this->Form->postLink(
                'Delete',
                array('action' => 'delete', $record['Record']['qualifier']),
                array('confirm' => 'Are you sure?'));
            ?>
</p>