<?php

include('../config/app.php');
include_once('../controller/EmployeeController.php');

// UPDATE
if (isset($_POST['save-update'])) {
    $id = $_POST['empno'];
    $data = [
        'empno' => $_POST['empno'],
        'fname' => $_POST['firstname'],
        'lname' => $_POST['lastname'],
        'mname' => $_POST['middlename'],
        'position' => $_POST['position'],
        'department' => $_POST['department'],
    ];


    $update = new EmployeeController;
    $result = $update->update((int)$id, $data);

    if($result){
        redirect($result, "../view.php");
    }else{
        redirect("Something went wrong try again later.", "update.php");
    }
}

?>