<?php
include_once('controller/EmployeeController.php');

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
            redirect("Added successfully", 'view.php');
        } else {
            redirect("Something went wrong try again later.", "register.php");
        }
    }
}
