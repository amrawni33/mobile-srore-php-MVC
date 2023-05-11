<?php include(VIEWS . 'inc' . DS . 'header.php'); ?>

<h1 class="text-center  my-5 py-3">View All Mobiles </h1>

<div class="container">
    <div class="row">
        <div class="col-10 mx-auto p-4 border mb-5">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Mobile_Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Description</th>
                        <th scope="col">CPU</th>
                        <th scope="col">RAM</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>

                    <?php $i = 1; ?>
                    <?php foreach ($Mobiles as $row) :  ?>
                        <tr>
                            <td> <?php echo $i;
                                    $i++; ?></td>
                            <td><?php echo $row['Mobile_name']; ?></td>
                            <td><?php echo $row['Mobile_price']; ?> <b class="float-right"> $ </b></td>
                            <td class="text-center"><?php echo $row['description']; ?></td>
                            <td><?php echo $row['CPU']; ?></td>
                            <td><?php echo $row['RAM']; ?></td>
                            <td>
                                <a href="<?php url('Mobile/edit/' . $row['Mobile_id']) ?>" class="btn btn-info">Edit</a>
                            </td>
                            <td>
                                <a href="<?php url('Mobile/delete/' . $row['Mobile_id']) ?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include(VIEWS . 'inc' . DS . 'footer.php'); ?>