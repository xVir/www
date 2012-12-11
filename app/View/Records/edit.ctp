<h1>Edit Record</h1>
<?php
    echo $this->Form->create('Record', array('action' => 'edit'));
    echo $this->Form->input('title');
    echo $this->Form->input('qualifier', array('type' => 'hidden'));
    echo $this->Form->end('Save Record');
?>