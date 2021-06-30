<?php include('./partials-front/menu.php') ?>
<!--MAIN-->
<main>
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
                        $sql = "SELECT *
                                    FROM tbl_product p, tbl_category c
                                    WHERE p.category_id = c.id AND category LIKE '%hot%'
                                    LIMIT 4; ";
                        $res = mysqli_query($connection, $sql);
                        $count = mysqli_num_rows($res);
                        if ($count > 0) {
                            while ($rows = mysqli_fetch_assoc($res)) {
                                $image_name = $rows['image_name'];
                                $description = $rows['description'];
                                $price = $rows['price'];
                        ?>
                                <div class="item text-center col-md-6 col-lg-3">
                                    <a href="#" class="p-img"><img src="./images/Hot/<?php echo $image_name ?>" class="img-fluid"></a>
                                    <a href="#" class="p-name">
                                        <?php echo $description ?>
                                    </a>
                                    <p class="p-price"><?php echo $price ?>0.000đ</p>
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

                                <div class="item text-center col-md-6 col-lg-3">
                                    <a href="#" class="p-img"><img src="./images/Hot/CAME0241.jpg" class="img-fluid"></a>
                                    <a href="#" class="p-name">
                                        Mã SP: CAME0257 <br>
                                        Camera Dahua DH-HAC-T1A21P
                                    </a>
                                    <div class="price"  style="margin-top: 30px">
                                        <span class="p-old-price">1.597.000</span>
                                        <span class="p-discount">-18%</span>
                                        <p class="p-price">1.310.000</p>
                                    </div>
                                </div>
                                <div class="item text-center col-md-6 col-lg-3">
                                    <a href="#" class="p-img"><img src="./images/Hot/CAME0254.jpg" class="img-fluid"></a>
                                    <a href="#" class="p-name">
                                        Mã SP: CAME0241 <br>
                                        Camera Wifi Dahua Cue2 IPC C22EP
                                    </a>
                                    <div class="price" style="margin-top: 20px">
                                        <span class="p-old-price">1.750.000</span>
                                        <span class="p-discount">-34%</span>
                                        <p class="p-price">1.155.000</p>
                                    </div>
                                </div>
                                <div class="item text-center col-md-6 col-lg-3">
                                    <a href="#" class="p-img"><img src="./images/Hot/CAME0257.jpg" class="img-fluid"></a>
                                    <a href="#" class="p-name">
                                        Mã SP: CAME0254 <br>
                                        Camera Dahua DH-HAC-B2A21P
                                    </a>
                                    <div class="price" style="margin-top: 12px">
                                        <span class="p-old-price">1.675.000</span>
                                        <span class="p-discount">-11%</span>
                                        <p class="p-price">1.491.000</p>
                                    </div>
                                </div>
                                <div class="item text-center col-md-6 col-lg-3">
                                    <a href="#" class="p-img"><img src="./images/Hot/CAME0258.jpg" class="img-fluid"></a>
                                    <a href="#" class="p-name">
                                        Mã SP: CAME0258 <br>
                                        Camera Dahua DH-HAC-B1A21P
                                    </a>
                                    <div class="price" style="margin-top: 33px">
                                        <span class="p-old-price">1.531.000</span>
                                        <span class="p-discount">-10%</span>
                                        <p class="p-price">1.378.000</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

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
                                $sql = "SELECT *
                                            FROM tbl_product p, tbl_category c
                                            WHERE p.category_id = c.id AND category LIKE '%gaming%'
                                            LIMIT 4; ";
                                $res = mysqli_query($connection, $sql);
                                $count = mysqli_num_rows($res);
                                if ($count > 0) {
                                    while ($rows = mysqli_fetch_assoc($res)) {
                                        $image_name = $rows['image_name'];
                                        $description = $rows['description'];
                                        $price = $rows['price'];
                                ?>
                                        <div class="item text-center col-md-6 col-lg-3">
                                            <a href="#" class="p-img"><img src="./images/Gaming/<?php echo $image_name ?>" class="img-fluid"></a>
                                            <a href="#" class="p-name">
                                                <?php echo $description ?>
                                            </a>
                                            <p class="p-price"><?php echo $price ?>0.000đ</p>
                                        </div>

                                <?php
                                    }
                                }
                                ?>
                                <!--<div class="item text-center col-md-6 col-lg-3">
                                <a href="#" class="p-img"><img src="./images/Gaming/1.jpg" class="img-fluid"></a>
                                <a href="#" class="p-name">
                                    [Mới 100% Full Box] Laptop Acer Nitro 5 2021 AN515-45-R0B6 - AMD Ryzen 7
                                </a>
                                <p class="p-price">30.890.000đ</p>
                            </div>-->
                            </div>
                        </div>
                    </div>
    </section>
</main>
<?php include('./partials-front/footer.php') ?>