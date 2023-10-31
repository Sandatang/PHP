<?php
include('../config/app.php');
include_once('../controller/EmployeeController.php');

// DELETE
if(isset($_POST['delete-btn'])){
    $id = $_POST['delete-btn'];
    $delete = new EmployeeController;
    $result = $delete->delete($id);

    if($result){
        redirect("Deleted successfully", "../view.php");
    }else{
        redirect("Something went wrong try again later.", "../view.php");
    }
}
