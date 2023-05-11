<?php
include_once('APP/models/homeItems.php');
class HomeController
{

    public function index()
    {

        $db = new Homeproduct();
        $data['mobiles'] = $db->getAllProducts();
        View::load('home', $data);
    }
}
