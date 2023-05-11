<?php

class mobile extends DB
{

    private $table = "mobiles";
    private $conn;

    public function __construct()
    {

        $this->conn = $this->connect();
    }

    public function getAllMobiles()
    {

        return $this->conn->get($this->table);
    }

    public function addMobile($data)
    {
        return $this->conn->insert($this->table, $data);
    }

    public function deleteMobile($id)
    {
        $db = $this->conn->where('Mobile_id', $id);
        return $db->delete($this->table);
    }

    public function selectOneRow($id)
    {
        $db = $this->conn->where("Mobile_id", $id);
        return $db->getOne($this->table);
    }
    
    public function updateMobile($id, $data)
    {
        $db = $this->conn->where('Mobile_id', $id);
        return $db->update($this->table, $data);
    }
    public function select($id)
    {
        $db = $this->conn->where('Brand_id', $id);
        return $db->get($this->table);
    }
    public function selectOneRow1($id)
    {
        $db = $this->conn->where("Brand_id", $id);
        return $db->getOne("brands");
    }
}