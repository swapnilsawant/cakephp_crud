<!-- File: /app/views/users/edit.ctp --> 

<h1>Edit User</h1>
<?php
    echo $this->Form->create('Crud', array('action' => 'edit'));
    echo $this->Form->input('id', array('type'=>'hidden'));
    echo $this->Form->input('name');
    echo $this->Form->input('class');
	echo $this->Form->input('gender');
	echo $this->Form->end('Update User');
?>