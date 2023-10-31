<?php
include('../config/app.php');
include_once('../controller/EmployeeController.php');


//SEARCH
if(isset($_POST['search-btn'])){
    $id = $_POST['empno'];
    $_SESSION['search'] = 0;
    $search = new EmployeeController;
    $result = $search->isUserExist($id);
    if($result){
        $_SESSION['search'] = $id;
        redirect("Employee found." , "../employee/search.php");
    }else{
        redirect("Employee does not exist", "../employee/search.php");
    }
}

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
        redirect("Update successfully", "../employee/view.php");
    }else{
        redirect("Something went wrong try again later.", "../employee/update.php");
    }
}

// DELETE
if(isset($_POST['delete-btn'])){
    $id = $_POST['delete-btn'];
    $delete = new EmployeeController;
    $result = $delete->delete($id);

    if($result){
        redirect("Deleted successfully", "../employee/view.php");
    }else{
        redirect("Something went wrong try again later.", "../employee/view.php");
    }
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
            redirect("Added successfully", './view.php');
        } else {
            redirect("Something went wrong try again later.", "../register.php");
        }
    }
}

