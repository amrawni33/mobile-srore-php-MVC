<?php

class Homeproduct extends DB
{

    private $table = "brands";
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
