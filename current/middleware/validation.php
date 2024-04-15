<?php

include('../config/app.php');
include('../controller/EventController.php');

// ADD
if(isset($_POST['add-btn'])){
    $data = [
        'name' => $_POST['name'],
        'email' => $_POST['email'],
        'password' => $_POST['password'],
    ];

    $controller = new EventController();
    $result = $controller->addUser($data);

    if($result){
        redirect('added successfully', '../client/index.php');
    }else{
        redirect('Somethign went wrong, try again later', 'add.php');
    }

}


?>