<?php include(VIEWS . 'inc/userheader.php'); ?>

<div class="cards-container">




    <?php foreach ($brands as $row) :  ?>
        <?php $brand_id = $row['Brand_id']; ?>
        <div class="b-card">
            <a href="<?php url("User/branditems/$brand_id"); ?>">
                <div class="product-img">
                    <img src="<?php echo $row['Brand_pic'] ?>" alt="Cinque Terre">
                </div>
                <div class="product-info">
                    <h4><?php echo $row['Brand_name'] ?></h4>

                </div>
            </a>

        </div>
    <?php endforeach; ?>

</div>


<?php include(VIEWS . 'inc/userfooter.php'); ?>