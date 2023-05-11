<?php

class Cart extends DB
{
    private $table = "cart_items";
    private $conn;
    public function __construct()
    {

        $this->conn = $this->connect();
    }
    public function addtoCart($data)
    {
        return $this->conn->insert($this->table, $data);
    }
    public function getAllItems()
    {

        return $this->conn->get($this->table);
    }
    public function deleteMobile($id)
    {
        $db = $this->conn->where('items_id', $id);
        return $db->delete($this->table);
    }
}