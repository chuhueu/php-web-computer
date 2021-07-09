<?php include('./config/constants.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website - L08</title>
    <!--Bootstrap and fontawesome and Jquery-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <!--style less-->
    <link rel="stylesheet/less" type="text/css" href="./css/style.less?v=<?php echo time(); ?>">
    <script src="//cdn.jsdelivr.net/npm/less@3.13" ></script>
    <!--Carousel-->
    <!--CSS-->
    <link rel="stylesheet" href="./OwlCarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="./OwlCarousel/owl.theme.default.min.css">
    <!--JS-->
    <script src="./OwlCarousel/jquery.min.js"></script>
    <script src="./OwlCarousel/owl.carousel.min.js"></script>
</head>

<body>
    <!--Header-->
    <header class="bg-light">
        <div class="container">
            <div class="top-header d-flex">
                <div class="flex-left p-2">
                    <span><i class="fas fa-map-marker-alt"></i> 141 Đường chiến thắng,Q.Thanh Trì,Hà Nội |</span>
                    <span><i class="fas fa-phone-volume"></i>Hotline: <b>033 4567 89</b></span>
                </div>
                <div class="flex-right ml-auto p-2">
                    <a href="#">Điều khoản </a>
                    <a href="#">Liên hệ</a>
                    <a href="">Giỏ Hàng <i class="fa fa-shopping-cart"></i></a>
                </div>
            </div>
        </div>
        <!--Navigation-->
        <nav class="navbar navbar-expand-md navbar-light">
            <div class="container ">
                <a href="#" class="navbar-brand"><img
                        src="https://laptoptitan.vn/wp-content/uploads/2020/07/logo-laptop-titan.svg"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link " id="navbarDropdown" role="button" data-toggle="dropdown" href="#">
                                <i class="fas fa-laptop"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a href="#" class="dropdown-item"><b>LAPTOP CHÍNH HÃNG</b></a>
                                <div class="dropdown-divider"></div>
                                <a href="" class="dropdown-item">Laptop Asus</a>
                                <a href="" class="dropdown-item">Laptop Dell</a>
                                <a href="" class="dropdown-item">Laptop HP</a>
                                <a href="" class="dropdown-item">Laptop MSI</a>
                                <a href="" class="dropdown-item">Laptop Acer</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" id="navbarDropdown" role="button" data-toggle="dropdown" href="#">
                                <i class="fas fa-camera"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a href="#" class="dropdown-item"><b>CAMERA MỚI</b></a>
                                <div class="dropdown-divider"></div>
                                <a href="" class="dropdown-item">Camera Dahua</a>
                                <a href="" class="dropdown-item">Camera IMOU</a>
                                <a href="" class="dropdown-item">Camera Xiaomi</a>
                                <a href="" class="dropdown-item">Camera Kbone</a>
                                <a href="" class="dropdown-item">Camera Mini</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" id="navbarDropdown" data-toggle="dropdown" role="button" href="#">
                                <i class="fas fa-desktop"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a href="#" class="dropdown-item"><b>PC CHINH HANG</b></a>
                                <div class="dropdown-divider"></div>
                                <a href="" class="dropdown-item">PC chơi game</a>
                                <a href="" class="dropdown-item">PC văn phòng</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" id="navbarDropdown" role="button" data-toggle="dropdown" href="#">
                                <i class="far fa-plus-square"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a href="#" class="dropdown-item"><b>PHỤ KIỆN CHÍNH HÃNG</b></a>
                                <div class="dropdown-divider"></div>
                                <a href="" class="dropdown-item">CPU AMD</a>
                                <a href="" class="dropdown-item">CARD đồ họa- VGA Nividia</a>
                                <a href="" class="dropdown-item">Ổ cứng SSD, HDD</a>
                                <a href="" class="dropdown-item">RAM</a>
                            </div>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>