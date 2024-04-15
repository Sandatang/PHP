<?php

class EventController{
    public $db;

    function __construct()
    {
        $db = new DatabaseConnection();

        $this->db = $db;
    }

}

?>