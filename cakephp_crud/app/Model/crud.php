<!-- File: /app/Model/user.php -->
<?php
class Cruddata extends AppModel {
  //  var $name = 'User';

    
    var $validate = array(

    	// validate user first_name
        'name' => array(
            'rule' => 'notEmpty',
            'message' => 'Please enter your name.' 
        ),

        // validate user last_name
        'class' => array(
            'rule' => 'notEmpty',
            'message' => 'Please enter your class.' 
        ),

		// validate user email
        'gender' => array(
            'rule' => 'notEmpty',
            'message' => 'Please select your gender.' 
        )


    );
}
?>