<?php include(VIEWS . 'inc/userheader.php'); ?>



<h1 class="b-products-header">
    <figure>
        <img src="<?php echo $data1['Brand_pic'] ?>">
    </figure>
    <span><?php echo $data1['Brand_name'] ?> Phones</span>
</h1>

<div class="cards-container">
    <?php foreach ($data as $row) :  ?>
        <div class="card">
            <?php $mobile_id = $row['Mobile_id']; ?>
            <div class="product-img">
                <a href="<?php url("User/mobileDetails/$mobile_id"); ?>">
                    <img src="<?php echo $row['Mobile_pic'] ?>" alt="Cinque Terre" width="230px" height="280px">
                </a>
            </div>

            <div class="product-info">
                <a href="product.html">
                    <h4><?php echo $row['Mobile_name'] ?></h4>
                </a>

                <h4>Price: <?php echo $row['Mobile_price'] ?>$</h4>
            </div>

            <div class="btn">
                <button style="position: relative; left: -34%;" type="button"><a style="color :aliceblue;" href="<?php $_SESSION["logcheck"] == 1 ? url("User/cart/$mobile_id") : url("User/login"); ?>">Add to cart</a></button>
            </div>

        </div>
    <?php endforeach; ?>

</div>

<!-- <div style="width: 100%; background-color: red; height: 100px;"></div> -->


<?php include(VIEWS . 'inc/userfooter.php'); ?>