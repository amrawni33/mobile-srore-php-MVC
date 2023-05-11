<?php

class MobileController
{

    public function index()
    {

        $db = new mobile();
        $data['Mobiles'] = $db->getAllMobiles();
        View::load('Mobile/index', $data);
    }
    public function add()
    {
        View::load('Mobile/add');
    }
    public function store()
    {
        //View::load('product/store');
        if (isset($_POST['add'])) {
            $name = $_POST['Mobile_name'];
            $description = $_POST['description'];
            $price = $_POST['Mobile_price'];
            $Front_Camera = $_POST['Front_Cam'];
            $Back_Camera = $_POST['Back_Cam'];
            $CPU = $_POST['CPU'];
            $RAM = $_POST['RAM'];
            $Battery = $_POST['Battery'];
            $Brand_ID = $_POST['Brand_id'];
            $Mobile_pic = $_POST['Mobile_pic'];
            

            $data = array(
                "Mobile_name" => $name,
                "Mobile_price" => $price,
                "description" => $description,
                "Front_Cam" => $Front_Camera,
                "Back_Cam" => $Back_Camera,
                "CPU" => $CPU,
                "RAM" => $RAM,
                "Battery" => $Battery,
                "Brand_ID" => $Brand_ID,
                "Mobile_pic" => $Mobile_pic

            );
            $db = new Mobile();

            if ($db->addMobile($data)) {
                View::load('Mobile/add', ["success" => "Mobile added successfuly."]);
            } else {
                View::load('Mobile/add');
            }
        }
    }
    public function delete($id)
    {
        $db = new Mobile();
        if ($db->deleteMobile($id)) {
            View::load('Mobile/delete', ["success" => "Mobile deleted successfuly."]);
        } else {
            View::load('Mobile/delete');
        }
    }

    public function edit($id)
    {

        $db = new Mobile();
        $row = $db->selectOneRow($id);
        $data["row"] = $row;
        if ($row) {
            View::load('Mobile/edit', $data);
        } else {
            echo "error";
        }
    }

    public function update($id)
    {
        if (isset($_POST['edit'])) {
            $name = $_POST['Mobile_name'];
            $description = $_POST['description'];
            $price = $_POST['Mobile_price'];
            $Front_Camera = $_POST['Front_Cam'];
            $Back_Camera = $_POST['Back_Cam'];
            $CPU = $_POST['CPU'];
            $RAM = $_POST['RAM'];
            $Battery = $_POST['Battery'];
            $Brand_ID = $_POST['Brand_id'];
            $Mobile_pic = $_POST['Mobile_pic'];


            $data = array(
                "Mobile_name" => $name,
                "Mobile_price" => $price,
                "description" => $description,
                "Front_Cam" => $Front_Camera,
                "Back_Cam" => $Back_Camera,
                "CPU" => $CPU,
                "RAM" => $RAM,
                "Battery" => $Battery,
                "Brand_ID" => $Brand_ID,
                "Mobile_pic" => $Mobile_pic
            );
            $db = new Mobile();

            if ($db->updateMobile($id, $data)) {
                View::load('Mobile/edit', ["success" => "Data updated successfuly.",'row' => $db->selectOneRow($id)]);
            } else {
                View::load('Mobile/edit',['row' => $db->selectOneRow($id)]);
            }
        }
    }
}