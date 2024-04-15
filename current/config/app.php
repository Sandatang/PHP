<?php

session_start();

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'intrams_system');

$db = new DatabaseConnection();

 function redirect($message, $path){
    $_SESSION['message'] = $message;
    header("Location: $path", true);
    exit(0);
 }

?>