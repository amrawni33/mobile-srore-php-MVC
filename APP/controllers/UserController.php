<?php


include_once('APP/models/brand.php');

class UserController
{

    public function brand()
    {

        $db = new Homeproduct();
        $data['brands'] = $db->getAllProducts();
        View::load('User/brands', $data);
    }

    function mobileDetails($id)
    {
        $db = new Mobile();
        $row = $db->selectOneRow($id);
        $data["row"] = $row;
        if ($row) {
            View::load('User/mobile', $data);
        } else {
            echo "error";
        }
    }

    function branditems($id)
    {
        $db = new Mobile();
        $row = $db->select($id);
        if ($row) {
            View::load('User/branditems', ['data' => $db->select($id), 'data1' => $db->selectOneRow1($id)]);
        } else {
            echo "error";
        }
    }
    public function signup()
    {
        View::load('User/signup');
    }
    public function sign()
    {
        if (isset($_POST['submit'])) {
            $Customer_name = $_POST['userName'];
            $Customer_Ssn = $_POST['ssn'];
            $Customer_location = $_POST['location'];
            $Customer_post_code = $_POST['code'];
            $Customer_email = $_POST['log_email'];
            $Customer_pass = $_POST['log_pass'];



            $data = array(
                "Customer_name" => $Customer_name,
                "Customer_Ssn" => $Customer_Ssn,
                "Customer_location" => $Customer_location,
                "Customer_post_code" => $Customer_post_code,
                "Customer_email" => $Customer_email,
                "Customer_pass" => $Customer_pass

            );
            $db = new User();

            if ($db->addCustomer($data)) {
                $_SESSION["user"] = "green";
                $db = new User();
                $data['mobiles'] = $db->getAllProducts();
                $_SESSION["user"] = "green";
                View::load('home', $data);
            } else {
                View::load('User/signup');
            }
        }
    }

    public function login(){
        View::load('User/login');
    }

    public function loging()
    {

        if (isset($_POST['login'])) {
            $Customer_email = $_POST['userName'];
            $Customer_pass = $_POST['pass'];
            $db = new User();
            $row = $db->selectOneRow($Customer_email);
            if($Customer_pass=="root"&& $Customer_email == "amrawni33@gmail.com"){
                $db = new mobile();
                $data['Mobiles'] = $db->getAllMobiles();
                View::load('Mobile/index', $data);
            } 
                else if (empty($Customer_email) || empty($Customer_pass)) {
                    echo '<script>alert("please fill the blanks")</script>';
                    View::load('User/login');
                } else if ($Customer_pass == $row['Customer_pass']) {
                    $db = new User();
                    $data['mobiles'] = $db->getAllProducts();
                    $_SESSION["user"] = "green";
                    $_SESSION["logcheck"] = 1;
                    View::load('home', $data);
                } else {
                    echo '<script>alert("Enter a proper password")</script>';
                    View::load('User/login');
                }
            
        }
    }
    public function logingOut(){
        $_SESSION['user'] = "red";
        $_SESSION["logcheck"] = 0;
        View::load('User/login');

    }

    /*cart */
    public function cart($id)
    {
        if($id>0)
        {   $db = new mobile();
            $row = $db->selectOneRow($id);
            $Check_id = 1;
            $mobile_name = $row['Mobile_name'];
            $mobile_pic = $row['Mobile_pic'];
            $mobile_price = $row['Mobile_price'];
            $mobile_id = $row['Mobile_id'];
            $data =array(
                "Check_id"=> $Check_id,
                "Mobile_name"=>$mobile_name,
                "Mobile_price" => $mobile_price,
                "Mobile_pic"=> $mobile_pic,
                "Mobile_id"=> $mobile_id,
            );
            $dbd = new cart();
            $dbd->addtoCart($data);
            $row=$dbd->getAllItems();
            $data['items']=$row;
            View::load('User/cart',$data);
        }
         else {
            $dbd = new cart();
            $row = $dbd->getAllItems();
            $data['items'] = $row;
            View::load('User/cart', $data);
         }
    }
    public function cartitemdelete($id){
        $db = new cart();
        $db->deleteMobile($id);
        $row = $db->getAllItems();
        $data['items'] = $row;
        View::load('User/cart', $data);
    }
    public function about(){
        View::load('User/about');
    }
}
