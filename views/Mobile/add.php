<?php include(VIEWS . 'inc' . DS . 'header.php'); ?>

<h1 class="text-center  mt-5 mb-2 py-3">Add New Mobile </h1>

<div class="container">
    <div class="row">
        <div class="col-8 mx-auto">

            <?php if (isset($success)) : ?>
                <h3 class="alert alert-success text-center"><?php echo $success; ?></h3>
            <?php endif; ?>

            <form class="p-5 border mb-5" method="POST" action="<?php url('mobile/store'); ?>">
                <div class="form-group">
                    <label for="Mobile_name">Mobile Name</label>
                    <input type="text" required name="Mobile_name" class="form-control" id="Mobile_name">
                </div>
                <div class="form-group">
                    <label for="Mobile_price">Mobile Price</label>
                    <input type="text" required class="form-control" name="Mobile_price" id="Mobile_price">
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" required class="form-control" name="description" id="description">
                </div>

                <div class="form-group">
                    <label for="Front_Cam">Front Camera</label>
                    <input type="text" required class="form-control" name="Front_Cam" id="Front_Cam">
                </div>

                <div class="form-group">
                    <label for="Back_Cam">Back Camera</label>
                    <input type="text" required class="form-control" name="Back_Cam" id="Back_Cam">
                </div>

                <div class="form-group">
                    <label for="CPU">CPU</label>
                    <input type="text" required class="form-control" name="CPU" id="CPU">
                </div>

                <div class="form-group">
                    <label for="RAM">RAM</label>
                    <input type="text" required class="form-control" name="RAM" id="RAM">
                </div>

                <div class="form-group">
                    <label for="Battery">Battery</label>
                    <input type="text" required class="form-control" name="Battery" id="Battery">
                </div>

                <div class="form-group">
                    <label for="Brand_id">Brand ID</label>
                    <input type="text" required class="form-control" name="Brand_id" id="Brand_id">
                </div>

                <div class="form-group">
                    <label for="Mobile_pic">Mobile picture</label>
                    <input type="text" required class="form-control" name="Mobile_pic" id="Mobile_pic">
                </div>
                <button type="add" name="add" class="btn btn-primary">Add</button>
            </form>

        </div>
    </div>
</div>

<?php include(VIEWS . 'inc' . DS . 'footer.php'); ?>