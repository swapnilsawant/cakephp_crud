<!-- File: /app/Controller/users_controller.php -->
<?php
class CrudController extends AppController {

	var $name = 'Curd';

    // Display user data (R)
	function index()
    {
		$this->set('cruds', $this->Crud->find('all'));
	}

    // Add new user data function  (C)
	function add_data()
    {
        if (!empty($this->data)) {
            if ($this->Crud->save($this->data)) {
                $this->Session->setFlash('Your user data has been saved.');
                $this->redirect(array('action' => 'index'));
            }
        }
    }

    // Delete user data function (D)
    function delete($id)
    {
    	$this->Crud->delete($id);
        $this->Session->setFlash('The user with id: '.$id.' has been deleted.');
        $this->redirect(array('action'=>'index'));
    }

    

    //Update user data function (U)
    function edit($id = null) {
        $this->Crud->id = $id;
        if (empty($this->data))
        {
            $this->data = $this->Crud->read();
        }
        else 
        {
            if ($this->Crud->save($this->data)) 
            {
                $this->Session->setFlash('Your user with id: '.$id.' has been updated.');
                $this->redirect(array('action' => 'index'));
            }
        }
    }
}
?>