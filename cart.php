<?php include('./partials-front/menu.php') ?>

<div class="container">
    <div class="nav">
        <a href="index.php">Trang chủ</a>
        <span>/</span>
        <a href="#">Giỏ hàng</a>
    </div>
    <?php
    if (isset($_SESSION['delete'])) {
        echo $_SESSION['delete'];
        unset($_SESSION['delete']);
    }
    ?>
    <table class="tbl-full">
        <tr>
            <th style="width: 5%">ID</th>
            <th style="width: 15%">Title</th>
            <th style="width: 40%">Description</th>
            <th class="text-center" style="width: 15%">Price</th>
            <th style="width: 5%">Quantity</th>
            <th class="text-center" style="width: 15%">Total</th>
            <th style="width: 5%">Delete</th>
        </tr>
        <?php
        $sql = "SELECT * FROM tbl_cart";
        $res = mysqli_query($connection, $sql);
        if ($res == true) {
            $count = mysqli_num_rows($res);
            if ($count > 0) {
                $total_price = 0;
                while ($rows = mysqli_fetch_assoc($res)) {
                    $cartID = $rows['cartID'];
                    $title = $rows['title'];
                    $description = $rows['description'];
                    $price = $rows['price'];
                    $image_name = $rows['image_name'];
                    $quantity = $rows['quantity'];
                    $total = $rows['total_price'];
                    $total_price += $total

        ?>
                    <tr>
                        <td><?php echo $cartID ?></td>
                        <input type="hidden" class="cartID" value="<?php echo $cartID ?>">
                        <td><?php echo $title ?></td>
                        <td class="d-flex align-items-center">
                            <img src="./images/product/<?php echo $image_name ?>" width="120">
                            <?php echo $description ?>
                        </td>
                        <td class="text-center"><b><?php echo $price ?>0.000đ</b></td>
                        <input type="hidden" class="price" value="<?php echo $price ?>">
                        <td>
                            <input type="number" name="quantity" class="form-control itemQty" value="<?php echo $quantity ?>">
                        </td>
                        <td class="text-center text-danger" id="total"><b><?php echo $total ?>0.000đ</b></td>
                        <td class="text-center"><a href="action.php?id=<?php echo $cartID ?>"><i class="fas fa-trash-alt"></i></a></td>
                    </tr>
        <?php
                }
            }
        }
        ?>
        <tr>
            <td colspan="3">
                <a href="index.php" class="btn btn-secondary"><i class="fas fa-cart-plus"></i>Continue Shopping</a>
            </td>
            <td colspan="2" class="text-center"><b>Total Price: </b> </td>
            <td class="text-center"><b><i class="fas fa-rupee-sign"></i><?php echo $total_price ?>0.000đ</b></td>
        </tr>
    </table>
</div>
<?php include('./partials-front/footer.php') ?>