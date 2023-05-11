<?php

class User extends DB
{

    private $table = "Customers";
    private $conn;

    public function __construct()
    {

        $this->conn = $this->connect();
    }
    public function addCustomer($data)
    {
        return $this->conn->insert($this->table, $data);
    }
    public function selectOneRow($email)
    {
        $db = $this->conn->where("Customer_email", $email);
        return $db->getOne($this->table);
    }
    public function getAllProducts()
    {

        return $this->conn->get("mobiles");
    }
}