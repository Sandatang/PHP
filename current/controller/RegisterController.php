<?php

class RegisterController{
    public $db;

    function __construct()
    {
        $db = new DatabaseConnection();

        $this->db = $db->conn;
    }

    function addUser($data){
        $values = "'". implode("','", $data) ."'";
        $query = "INSERT INTO registration (userName,password,role) VALUES($values)";
        $result = $this->db->query($query);
        if($result->num_rows == 1){
            return $result->fetch_assoc();
        }
        return false;
    }

    function getAllUser(){
        $query = "SELECT * FROM employee";
        $result = $this->db->query($query);
        if($result->num_rows > 0){
            return $result;
        }
        return false;
    }
    function getOneUser($id){
        $query = "SELECT * FROM employee WHERE id = $id LIMIT 1";
        $result = $this->db->query($query);
        if($result->num_rows == 1){
            return $result->fetch_assoc();
        }
        return false;
    }

    function updateUser($id, $data){
        $fullname = $data['name']; 
        $email = $data['email']; 
        $password = $data['password']; 

        $query = "UPDATE employee SET fullname = '$fullname', email = '$email', password = '$password' WHERE id = $id";
        $result = $this->db->query($query);

        if($result){
            return true;
        }
        return false;
    }

    function deleteUser($id){
        $query = "DELETE FROM employee WHERE id = $id";
        $result = $this->db->query($query);
        if($result){
            return true;
        }
        return false;
    }

    function findOneUser($keyword){
        $query = "SELECT * FROM employee WHERE email = '$keyword' LIMIT 1";
        $result = $this->db->query($query);
        if($result->num_rows == 1){
            return $result;
        }
        return false;
    }

}

?>