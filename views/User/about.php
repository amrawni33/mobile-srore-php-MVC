<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> About Us</title>

    <style>
        header {
            background-color: rgb(64, 94, 230);
            border: 1px solid black;
            margin-bottom: 40px;
        }

        ul.head {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: rgb(64, 94, 230);
        }

        li.head {
            float: left;
            border-right: 1px solid #bbb;
        }

        li.head:last-child {
            border-left: 1px solid #bbb;
            float: right;
        }

        li a.head {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
    </style>
</head>

<body>


    <header>
        <Ul class="head">
            <li class="head"><a class="head" href="http://mobilz.com/">Home</a></li>
            <li class="head"><a class="head" href="<?php url('User/brand'); ?>">Brands</a></li>
            <li class="head"><a class="head" href="<?php url('User/about'); ?>">About</a></li>
            <li class="head"><a class="head" href="<?php url('User/cart/0'); ?>">my cart</a></li>
            <?php if ($_SESSION['user'] != "green") {
                echo "<li class=\"head\"><a class=\"head\" href=\"";
                url('User/login');
                echo "\">login</a></li>";
                echo "<li class=\"head\"><a  class=\"head\" href=\"";
                url('User/signup');
                echo "\">sign up</a></li>";
            } else {
                echo "<li class=\"head\"><a class=\"head\" href=\"";
                url('User/logingOut');
                echo "\">log out</a></li>";
            } ?>
        </Ul>
    </header>


    </div>
    <div style="text-align: center;">
        <h1>About US </h1>
    </div>
    <div class="content">
        <h2>Welcome to our smart store</h2>
        <p>Phone store has made its mark in the e-commerce world in 2012, as a cross-border shopping platform serving
            more than 180 countries.

            Through its website and app, Ubuy provides over hundresof brand-new, unique products from the best
            international brands in the US, the UK, and other countries.

            Ubuy enables seamless and confined payment methods as well as faster checkouts while amplifying the
            shopper's experience. As an International Shopping doorway, we bring quality products from luxury brands to
            customers' doorsteps from around the world with the assistance of the most trusted courier partners in the
            industry.</p>
    </div>

    <h2>Why choosing us：</h2>
    <ul style="background-color: white;">
        <li>Almost top recent years experience in mobile phones in al,ost brands .</li>
        <li>we have a long wantarry that satisfy our customers</li> <br>
        <li>Sufficient stock on your urgent demand.</li> <br>
        <li>Professional high quality service to solve your confusion.</li> <br>
        <li>Timely reply within 2 hours during working time.</li> <br>
    </ul>
    <h2>Who we are：</h2>
    <ul style="background-color: white;">
        <li> smart store is a reliable and professional electronic components supplier.</li> <br>
        <li>We can be No.1 in this field.</li> <br>
        <li>We are with great passion of it.</li> <br>
        <li>We know，we can gain what we seed.</li> <br>
        <li>We can surpass our competitors by achieving it.</li><br>
        <li> <b> Our customers will trust us and make long-term cooperation with us.</b></li> <br>
    </ul>

    </div>
    <div class="Team_work">
        <ul id="u">
            <h2>Team work</h2>
            <li class="li_T">
                <h3>Abdulmoneim Hamed</h3>
            </li>
            <li class="li_T">
                <h3>Abdurahman Abdelhady </h3>
            </li>
            <li class="li_T">
                <h3>Amr Awny </h3>
            </li>
            <li class="li_T">
                <h3>Fatma Ebrahim </h3>
            </li>
            <li class="li_T">
                <h3>Leqaa Mohamed </h3>
            </li>
            <li class="li_T">
                <h3>Doha Masoud</h3>
            </li>
        </ul>
    </div>

    </div>

    <div class="footer">
        &copy;copy right
    </div>
</body>

</html>