<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mobilz</title>
    <link rel="stylesheet" href="http://mobilz.com/assets/styles.css">
    <link rel="shortcut icon" type="image/x-icon" href="http://mobilz.com/assets/images/weblogo.png" />
</head>

<body>

    <header>
        <Ul>
            <li><a href="http://mobilz.com/">Home</a></li>
            <li><a href="<?php url('User/brand'); ?>">Brands</a></li>
            <li><a href="<?php url('User/about'); ?>">About</a></li>
            <li><a href="<?php $_SESSION["logcheck"] == 1 ? url("User/cart/0") : url("User/login"); ?>">my cart</a></li>
            <?php if ($_SESSION['user'] != "green") {
                echo "<li><a href=\"";
                url('User/login');
                echo "\">login</a></li>";
                echo "<li><a href=\"";
                url('User/signup');
                echo "\">sign up</a></li>";
            } else {
                echo "<li><a href=\"";
                url('User/logingOut');
                echo "\">log out</a></li>";
            } ?>

        </Ul>
    </header>

    <main>