<?php include(VIEWS . 'inc' . DS . 'header.php'); ?>

<h1 class="text-center  mt-5 mb-2 py-3">Edit Mobile </h1>
<div class="container">
    <div class="row">
        <div class="col-8 mx-auto">

            <?php if (isset($success)) : ?>
                <h3 class="alert alert-success text-center"><?php echo $success; ?></h3>
            <?php endif; ?>
            <form class="p-5 border mb-5" method="POST" action="<?php url('Mobile/update/' . $row["Mobile_id"]); ?>">
                <div class="form-group">
                    <label for="id">ID</label>
                    <input type="text" required value="<?php echo $row["Mobile_id"] ?>" name="Mobile_id" class="form-control" id="id">
                </div>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" required value="<?php echo $row["Mobile_name"] ?>" name="Mobile_name" class="form-control" id="name">
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" required value="<?php echo $row["Mobile_price"] ?>" class="form-control" name="Mobile_price" id="price">
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" required value="<?php echo $row["description"] ?>" class="form-control" name="description" id="description">
                </div>

                <div class="form-group">
                    <label for="Front Camera">Front Camera</label>
                    <input type="text" required value="<?php echo $row["Front_Cam"] ?>" class="form-control" name="Front_Cam" id="Front Camera">
                </div>

                <div class="form-group">
                    <label for="Back Camera">Back Camera</label>
                    <input type="text" required value="<?php echo $row["Back_Cam"] ?>" class="form-control" name="Back_Cam" id="Back Camera">
                </div>

                <div class="form-group">
                    <label for="CPU">CPU</label>
                    <input type="text" required value="<?php echo $row["CPU"] ?>" class="form-control" name="CPU" id="CPU">
                </div>

                <div class="form-group">
                    <label for="RAM">RAM</label>
                    <input type="text" required value="<?php echo $row["RAM"] ?>" class="form-control" name="RAM" id="RAM">
                </div>

                <div class="form-group">
                    <label for="Battery">Battery</label>
                    <input type="text" required value="<?php echo $row["Battery"] ?>" class="form-control" name="Battery" id="Battery">
                </div>

                <div class="form-group">
                    <label for="Brand ID">Brand ID</label>
                    <input type="text" required value="<?php echo $row["Brand_ID"] ?>" class="form-control" name="Brand_id" id="Brand ID">
                </div>

                <div class="form-group">
                    <label for="Mobile_pic">Mobile picture</label>
                    <input type="text" required value="<?php echo $row["Mobile_pic"] ?>" class="form-control" name="Mobile_pic" id="Mobile_pic">
                </div>
                <button type="edit" name="edit" class="btn btn-primary">Edit</button>
            </form>

        </div>
    </div>
</div>

<?php include(VIEWS . 'inc' . DS . 'footer.php') ?>