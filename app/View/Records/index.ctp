<h2>Records</h2>
<p><?php echo $this->Html->link('Add Record', array('action' => 'add')) ?></p>
<table>
    <tr>
        <th>Qualifier</th>
    </tr>

    <!-- Here is where we loop through our $records array, printing out record info -->

    <?php foreach ($records as $record): ?>
    <tr>
        <td><?php echo $this->Html->link($record['Record']['qualifier'], array('controller'=>'records', 'action'=>'view', $record['Record']['qualifier'])); ?></td>
    </tr>
    <?php endforeach; ?>
    <?php unset($record); ?>

</table>

 <?php echo $this->Paginator->numbers(); ?>