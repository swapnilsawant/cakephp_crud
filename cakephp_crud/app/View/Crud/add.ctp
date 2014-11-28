<!-- File: /app/views/users/add.ctp -->    

<h1>Add New User</h1>

<?php
echo $this->Form->create('Crud');
echo $this->Form->input('name');
echo $this->Form->input('class'); 
echo $this->Form->input('gender');
echo $this->Form->end('Save New User');
?>