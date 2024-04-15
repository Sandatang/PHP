<?php

class DatabaseConnection{
    public $conn;

    function __construct()
    {
        $conn = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);

        if(!$conn){
            die("<h1> Error database not connected </h1>");
        }

        return $this->conn = $conn;
    }
}

?>