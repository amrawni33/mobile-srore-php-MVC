<?php include(VIEWS . 'inc/userheader.php'); ?>
<html lang="en">



<body>


    <form class="sign-in" action="<?php url('User/loging'); ?>" method="post">
        <div class="login _box">
            <h1 class="sign">LOGIN </h1>
            <input name="userName" type="text" placeholder="   Enter username" id="userName" autocomplete="off">
            <!-- <label>password</label> -->
            <input type="password" placeholder="   Enter password " name="pass"><br>
            <div class="btn">
                <input type="submit" value="Login" name="login" required>
            </div>
            <p class="para_2" style="color: white;">don't have an account? <a href="<?php url('User/signup'); ?>"> sign up now </a></p>
        </div>

</body>

</html>
<?php include(VIEWS . 'inc/userfooter.php'); ?>