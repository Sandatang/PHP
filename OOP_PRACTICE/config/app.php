<?php
session_start();

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'attendance');

define('SITE_URL', 'localhost/skilltestpractice/oop_practice/');

include('DatabaseConnection.php');
$db = new DatabaseConnection;

function base_url($path){
    echo SITE_URL.$path;
}

function redirect($message, $page){
    // $redirectTo = SITE_URL.$page;
    $_SESSION['message'] = $message;
    header("Location: $page", true);
    exit(0);
}

?>