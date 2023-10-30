<?php
class EmployeeController{
    
    public $conn;

    public function __construct()
    {
        $db = new DatabaseConnection;
        $this->conn = $db->conn;
        
    }

    public function view()
    {
        $query = "SELECT * FROM employee";
        $result = $this->conn->query($query);
        if($result->num_rows > 0){
            return $result;
        }else{
            return false;
        }
    }

    public function registration($clientData)
    {
        $data = "'". implode("','", $clientData) ."'";
        $query = "INSERT INTO employee (empNo, empFname, empMname, empLname, empPosition, empDept) VALUES ($data)";
        $result = $this->conn->query($query);
        if (!$result) {
            return false;
        }
        return true;
    }

    public function update($id , $clientData)
    {
        $empFName = $clientData['fname'];   
        $empLName = $clientData['lname'];   
        $empMName = $clientData['mname'];   
        $position = $clientData['position'];   
        $department = $clientData['department'];   

        $query = "UPDATE employee SET empFName='$empFName', empMName='$empMName', empLName='$empLName', empPosition='$position', empDept='$department' WHERE empNo = '$id' LIMIT 1";
        $result = $this->conn->query($query);
        if($result){
            return true;
        }
        return false;

    }

    public function toEdit($id)
    {
        $query = "SELECT * FROM employee WHERE empNo = $id LIMIT 1";
        $result = $this->conn->query($query);
        if($result->num_rows == 1){
            $data = $result->fetch_assoc();
            return $data;
        }else{
            return false;
        }
    }

    public function isUserExist($id)
    {
        $checkUser = "SELECT empNo FROM employee WHERE empNo = $id LIMIT 1";
        $result = $this->conn->query($checkUser);

        if($result->num_rows > 0){
            return true;
        }

        return false;
    }

    
}
