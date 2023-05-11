<?php include(VIEWS . 'inc/userheader.php'); ?>



<form class="sign-up" action="<?php url('user/sign'); ?>" method="post">
    <div class="login _box">
        <h1 class="sign">sign up</h1>

        <input type="text" name="userName" placeholder=" Enter userName" id="userName" autocomplete="off"><br>
        <input type="text" name="ssn" placeholder=" Enter SSN" id="userName" autocomplete="off"><br>
        <input type="text" name="location" placeholder=" Enter your location " id="userName" autocomplete="off"><br>
        <input type="text" name="code" placeholder=" Enter post code " id="userName" autocomplete="off"><br>

        <!-- <label>E_mail</label> -->
        <input type="text" placeholder="    Enter E-mail" name="log_email"><br>
        <!-- <label>password</label> -->
        <input type="password" placeholder="    Enter password " name="log_pass"><br>
        <div class="btn">
            <input type="submit" value="sign up" name="submit" required style="margin: 0,0,auto;">
        </div>
        <p class="para_2" style="color: white;">arleady have an account? <a href="<?php url('user/login'); ?>"> login now</a></p>
    </div>

    <?php include(VIEWS . 'inc/userfooter.php'); ?>