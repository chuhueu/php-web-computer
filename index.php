<?php include('./partials-front/menu.php') ?>
<!--MAIN-->
<main>
    <div class="cart">
        <a href="./cart.php" class="a-cart"><i class="fas fa-shopping-cart"></i></a>
        <p class="p-cart">Co <strong id="cart-count">0</strong> sản phẩm</p>
    </div>
    <!--- Image Slider -->
    <section class="banner-home">
        <div class="container">
            <div class="row padding">
                <div class="col-md-8">
                    <div class="owl-carousel owl-theme">
                        <a href="#"><img src="./images/Ads/1.png"></a>
                        <a href="#"><img src="./images/Ads/6.png"></a>
                        <a href="#"><img src="./images/Ads/2.png"></a>
                        <a href="#"><img src="./images/Ads/3.png"></a>
                        <a href="#"><img src="./images/Ads/4.png"></a>
                        <a href="#"><img src="./images/Ads/5.png"></a>
                    </div>
                </div>
                <div class="col-md-4 banner-right">
                    <a href="#"><img src="./images/Ads/1-right.png"></a>
                    <a href="#"><img src="./images/Ads/1_right.png"></a>
                </div>
            </div>
        </div>
    </section>

    <!--Products-->
    <section class="product-home">
        <div class="container">
            <!--LAPTOP HOT-->
            <div class="pro-head d-flex">
                <div class="title">
                    <h3><a href="#">LAPTOP HOT</a></h3>
                </div>
            </div>
            <!--Product list-->
            <div class="product-list">
                <div class="product-items">
                    <div class="row padding">
                        <?php
                        $sql = "SELECT * FROM tbl_product WHERE category_id=1 LIMIT 4";
                        $res = mysqli_query($connection, $sql);
                        $count = mysqli_num_rows($res);
                        if ($count > 0) {
                            while ($rows = mysqli_fetch_assoc($res)) {
                                $id = $rows['id'];
                                $title = $rows['title'];
                                $image_name = $rows['image_name'];
                                $description = $rows['description'];
                                $price = $rows['price'];
                                $product_code = $rows['product_code'];
                        ?>
                                <div class="item text-center col-md-6 col-lg-3">
                                    <form action="" class="form-submit">
                                        <input type="hidden" class="p-id" value="<?php echo $id ?>">
                                        <input type="hidden" class="p-title" value="<?php echo $title ?>">
                                        <button class="p-img p-button addItem">
                                            <img src="./images/product/<?php echo $image_name ?>" class="img-fluid">
                                            <?php echo $description ?>
                                        </button>
                                        <input type="hidden" class="p-description" value="<?php echo $description ?>">
                                        <input type="hidden" class="pimg" value="<?php echo $image_name ?>">
                                        <p class="p-price"><?php echo $price ?>0.000đ</p>
                                        <input type="hidden" class="price" value="<?php echo $price ?>">
                                        <input type="hidden" class="p-code" value="<?php echo $product_code ?>">
                                    </form>
                                </div>
                        <?php
                            }
                        }
                        ?>

                    </div>
                    <!--CAMERA-->
                    <div class="pro-head d-flex">
                        <div class="title">
                            <h3><a href="#">CAMERA HOT</a></h3>
                        </div>
                    </div>
                    <!--Product list-->
                    <div class="product-list">
                        <div class="product-items">
                            <div class="row padding">
                                <?php
                                $sql = "SELECT * FROM tbl_product WHERE category_id=2 LIMIT 4";
                                $res = mysqli_query($connection, $sql);
                                $count = mysqli_num_rows($res);
                                if ($count > 0) {
                                    while ($rows = mysqli_fetch_assoc($res)) {
                                        $id = $rows['id'];
                                        $title = $rows['title'];
                                        $image_name = $rows['image_name'];
                                        $description = $rows['description'];
                                        $price = $rows['price'];
                                        $product_code = $rows['product_code'];
                                ?>
                                        <div class="item text-center col-md-6 col-lg-3">
                                            <form action="" class="form-submit">
                                                <input type="hidden" class="p-id" value="<?php echo $id ?>">
                                                <input type="hidden" class="p-title" value="<?php echo $title ?>">
                                                <button class="p-img p-button addItem">
                                                    <img src="./images/product/<?php echo $image_name ?>" class="img-fluid">
                                                    <?php echo $description ?>
                                                </button>
                                                <input type="hidden" class="p-description" value="<?php echo $description ?>">
                                                <input type="hidden" class="pimg" value="<?php echo $image_name ?>">
                                                <span class="p-old-price">1.597.000</span>
                                                <span class="p-discount">-18%</span>
                                                <p class="p-price"><?php echo $price ?>0.000đ</p>
                                                <input type="hidden" class="price" value="<?php echo $price ?>">
                                                <input type="hidden" class="p-code" value="<?php echo $product_code ?>">
                                            </form>
                                        </div>
                                <?php
                                    }
                                }
                                ?>
                                <!--<div class="item text-center col-md-6 col-lg-3">
                                    <a href="#" class="p-img"><img src="./images/product/CAME0241.png" class="img-fluid"></a>
                                    <a href="#" class="p-name">
                                        Mã SP: CAME0257 <br>
                                        Camera Dahua DH-HAC-T1A21P
                                    </a>
                                    <div class="price" >
                                        <span class="p-old-price">1.597.000</span>
                                        <span class="p-discount">-18%</span>
                                        <p class="p-price">1.310.000</p>
                                    </div>
                                </div>
                                -->

                                <!--LAPTOP GAMING-->
                                <div class="pro-head d-flex">
                                    <div class="title">
                                        <h3><a href="#">LAPTOP GAMING</a></h3>
                                    </div>
                                </div>
                                <!--Product list-->
                                <div class="product-list">
                                    <div class="product-items">
                                        <div class="row padding">
                                            <?php
                                            $sql = "SELECT * FROM tbl_product WHERE category_id=3 LIMIT 4";
                                            $res = mysqli_query($connection, $sql);
                                            $count = mysqli_num_rows($res);
                                            if ($count > 0) {
                                                while ($rows = mysqli_fetch_assoc($res)) {
                                                    $id = $rows['id'];
                                                    $title = $rows['title'];
                                                    $image_name = $rows['image_name'];
                                                    $description = $rows['description'];
                                                    $price = $rows['price'];
                                                    $product_code = $rows['product_code'];
                                            ?>
                                                    <div class="item text-center col-md-6 col-lg-3">
                                                        <form action="" class="form-submit">
                                                            <input type="hidden" class="p-id" value="<?php echo $id ?>">
                                                            <input type="hidden" class="p-title" value="<?php echo $title ?>">
                                                            <button class="p-img p-button addItem">
                                                                <img src="./images/product/<?php echo $image_name ?>" class="img-fluid">
                                                                <?php echo $description ?>
                                                            </button>
                                                            <input type="hidden" class="p-description" value="<?php echo $description ?>">
                                                            <input type="hidden" class="pimg" value="<?php echo $image_name ?>">
                                                            <p class="p-price"><?php echo $price ?>0.000đ</p>
                                                            <input type="hidden" class="price" value="<?php echo $price ?>">
                                                            <input type="hidden" class="p-code" value="<?php echo $product_code ?>">
                                                        </form>
                                                    </div>

                                            <?php
                                                }
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
    </section>
</main>
<?php include('./partials-front/footer.php') ?>