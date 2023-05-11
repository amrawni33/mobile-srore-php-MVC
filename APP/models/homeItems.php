<?php

class Homeproduct extends DB {

    private $table = "mobiles";
    private $conn;

    public function __construct()
    {

        $this->conn = $this->connect();
    }

    public function getAllProducts()
    {

        return $this->conn->get($this->table);
    }

}