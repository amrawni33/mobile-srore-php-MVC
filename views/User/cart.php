<?php include(VIEWS . 'inc/userheader.php'); ?>

<div class="cart_page">
    <table>
        <tr>
            <th>Product</th>
            <th>Subtotal</th>
        </tr>
        <?php $total_price = 0; ?>
        <?php foreach ($items as $row) :  ?>
            <?php 
            $total_price += $row['Mobile_price']; ?>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="<?php echo $row['Mobile_pic']; ?>">
                        <div>
                            <p><?php echo $row['Mobile_name']; ?></p>
                            <small>$ <?php echo $row['Mobile_price']; ?></small>
                            <br>
                            <a href="<?php url('user/cartitemdelete/'. $row['items_id']); ?>">Remove</a>
                        </div>
                    </div>
                </td>
                <td>$ <?php echo $row['Mobile_price']; ?></td>
            </tr>
        <?php endforeach; ?>
            


    </table>

    <div class="total-price">
        <table>
            <tr>
                <td>Subtotal</td>
                <td>$<?php echo $total_price; ?></td>
            </tr>
        </table>
    </div>

</div>


<?php include(VIEWS . 'inc/userfooter.php'); ?>