<?php

include('../config/app.php');
include('../controller/RegisterController.php');

// ADD
if(isset($_POST['register-user'])){
    $data = [
        'userName' => $_POST['username'],
        'password' => $_POST['password'],
        'role' => $_POST['role'],
    ];

    if($_POST['password'] != $_POST['confirmpass']){
        redirect('Password not match', 'addEvent.php');
    }else{

        $controller = new RegisterController();
        $result = $controller->addUser($data);

        if($result){
            redirect('added successfully', '../client/index.php');
        }else{
            redirect('Somethign went wrong, try again later', 'add.php');
        }
    }

}


?>