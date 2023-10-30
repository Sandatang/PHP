<?php

class DatabaseConnection {
    
    public $conn;
    
    public function __construct()
    {
        $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

        if(!$conn)
        {
            die("<h1>Database connection failed</h2>");
        }
        
        // echo "connected successfully";
        return $this->conn = $conn;
    }
}

?>