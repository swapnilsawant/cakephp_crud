<!-- File: /app/views/users/index.ctp -->

<?php echo $this->Html->link('Add New User',array('controller' => 'crud', 'action' => 'add_data')); ?>
<center><h1>Users Data</h1></center>

<table>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Class</th>
        <th>Gender</th>
    </tr>

    <?php foreach ($cruds as $user): ?>
    <tr>
		<td><?php echo $user['Crud']['id']; ?></td>
        <td><?php echo $user['Crud']['name']; ?></td>
        <td><?php echo $user['Crud']['class']; ?></td>
        <td><?php echo $user['Crud']['gender']; ?></td>
        <td>
        <?php echo $this->Html->link('Edit', array('action'=>'edit', $user['Crud']['id']));?> | 
        <?php echo $this->Html->link('Delete', array('action' => 'delete', $user['Crud']['id']), null, 'Are you sure?' )?>
		</td>
    </tr>
    <?php endforeach; ?>

</table>