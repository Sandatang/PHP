<?php
include_once("controller/EmployeeController.php.php");

// UPDATE
if (isset($_POST['submit'])) {
    $id = $_POST['empNo'];
    $data = [
        'empno' => $_POST['employeeno'],
        'fname' => $_POST['firstname'],
        'lname' => $_POST['lastname'],
        'mname' => $_POST['middlename'],
        'position' => $_POST['position'],
        'department' => $_POST['department'],
    ];

    $update = new EmployeeController;
    $result = $update->update((int)$id, $data);
}

// INSERT
if (isset($_POST['submit'])) {
    $data = [
        'empno' => $_POST['employeeno'],
        'fname' => $_POST['firstname'],
        'lname' => $_POST['lastname'],
        'mname' => $_POST['middlename'],
        'position' => $_POST['position'],
        'department' => $_POST['department'],
    ];

    $register = new EmployeeController;


    $result_user = $register->isUserExist($data['empno']);
    if ($result_user) {
        redirect("employee already exist", "register.php");
    } else {
        $register_query = $register->registration($data);
        if ($register_query) {
            redirect("Added successfully", 'index.php');
        } else {
            redirect("Something went wrong try again later.", "register.php");
        }
    }
}
