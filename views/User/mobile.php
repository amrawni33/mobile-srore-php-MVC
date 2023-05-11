<?php include(VIEWS . 'inc/userheader.php'); ?>

<div class="cards-container">

    <div class="product-details-img">
        <img src="<?php echo $row["Mobile_pic"] ?>" width="500px" height="500px">
    </div>

    <div class="product-details">
        <div class="main-info">
            <h2><?php echo $row["Mobile_name"] ?></h2>
            <hr>
            <h3>Price: <?php echo $row["Mobile_price"] ?>$</h3>
        </div>

        <p class="product-description">
            <?php echo $row["description"] ?>
        </p>

        <div class="specs">
            <p><b>Front-camera:</b> <?php echo $row["Front_Cam"] ?> </p>
            <p><b>Back-Camera:</b> <?php echo $row["Back_Cam"] ?> </p>
            <p><b>RAM:</b> <?php echo $row["RAM"] ?></p>
            <p><b>CPU:</b> <?php echo $row["CPU"] ?> </p>
            <p><b>Battery:</b> <?php echo $row["Battery"] ?></p>
        </div>

        <div class="btn">
            <?php $mobile_id = $row['Mobile_id']; ?>
            <button type="button"><a style="color :aliceblue;" href="<?php $_SESSION["logcheck"] == 1 ? url("User/cart/$mobile_id") : url("User/login"); ?>">Add to cart</a></button>
        </div>

    </div>

</div>



<?php include(VIEWS . 'inc/userfooter.php'); ?>