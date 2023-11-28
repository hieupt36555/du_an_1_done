<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from htmldemo.net/autima/autima/index-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 Nov 2023 01:21:39 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>H2L Mobile</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS 
    ========================= -->
    <!--bootstrap min css-->
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <!--owl carousel min css-->
    <link rel="stylesheet" href="public/css/owl.carousel.min.css">
    <!--slick min css-->
    <link rel="stylesheet" href="public/css/slick.css">
    <!--magnific popup min css-->
    <link rel="stylesheet" href="public/css/magnific-popup.css">
    <!--font awesome css-->
    <link rel="stylesheet" href="public/css/font.awesome.css">
    <!--ionicons min css-->
    <link rel="stylesheet" href="public/css/ionicons.min.css">
    <!--animate css-->
    <link rel="stylesheet" href="public/css/animate.css">
    <!--jquery ui min css-->
    <link rel="stylesheet" href="public/css/jquery-ui.min.css">
    <!--slinky menu css-->
    <link rel="stylesheet" href="public/css/slinky.menu.css">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="public/css/plugins.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="public/css/style.css">

    <!--modernizr min js here-->
    <script src="public/js/vendor/modernizr-3.7.1.min.js"></script>

</head>

<body>

    <!-- Main Wrapper Start -->
    <!--header area start-->
    <header class="header_area header_padding">
        <!--header top start-->
        <div class="header_top">
            <div class="container">
                <div class="top_inner">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6">
                            <div class="follow_us">
                                <label>Follow Us:</label>
                                <ul class="follow_link">
                                    <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                    <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                    <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                                    <li><a href="#"><i class="ion-social-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="top_right text-end">
                                <ul>
                                    <li class="top_links"><a href="index.php?act=taikhoan">
                                            Tài Khoản</a>
                                    </li>
                                    <!-- <li class="language"><a href="index.php?act=dangnhap">Đăng Nhập</a>
                                    </li>
                                    <li class="currency"><a href="index.php?act=dangky">Đăng Ký</a>
                                    </li> -->


                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--header top start-->

        <!--header middel start-->
        <div class="header_middle">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-3">
                        <div class="logo">
                            <a href="index.php"><img src="public/images/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9">
                        <div class="middel_right">
                           <div class="search-container">
                                <form action="index.php?act=sanpham" method="POST" >
                                    <div class="search_box">
                                        <input placeholder="Tìm kiếm sản phẩm..." type="text" name="tukhoa">
                                        <button type="submit" name="timkiem" ><i class="ion-ios-search-strong"></i></button>
                                    </div>
                                </form>
                            </div>
                            <div class="middel_right_info">
                                <div class="mini_cart_wrapper">
                                    <a href="index.php?act=viewcart"><span class="lnr lnr-cart"></span>Giỏ Hàng </a>
                                    <span class="cart_quantity">2</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--header middel end-->

        <!--mini cart-->
        <!-- <div class="mini_cart">
            <div class="cart_close">
                <div class="cart_text">
                    <h3>cart</h3>
                </div>
                <div class="mini_cart_close">
                    <a href="javascript:void(0)"><i class="ion-android-close"></i></a>
                </div>
            </div>
            <div class="cart_item">
                <div class="cart_img">
                    <a href="#"><img src="public/images/iphone-11-128gb.jpeg" alt=""></a>
                </div>
                <div class="cart_info">
                    <a href="#">Iphone 11 128GB</a>

                    <span class="quantity">Qty: 1</span>
                    <span class="price_cart">$60.00</span>

                </div>
                <div class="cart_remove">
                    <a href="#"><i class="ion-android-close"></i></a>
                </div>
            </div>
            <div class="cart_item">
                <div class="cart_img">
                    <a href="#"><img src="public/images/product2.jpg" alt=""></a>
                </div>
                <div class="cart_info">
                    <a href="#">Koss Porta Pro On Ear Headphones </a>
                    <span class="quantity">Qty: 1</span>
                    <span class="price_cart">$69.00</span>
                </div>
                <div class="cart_remove">
                    <a href="#"><i class="ion-android-close"></i></a>
                </div>
            </div>
            <div class="mini_cart_table">
                <div class="cart_total">
                    <span>Sub total:</span>
                    <span class="price">$138.00</span>
                </div>
                <div class="cart_total mt-10">
                    <span>total:</span>
                    <span class="price">$138.00</span>
                </div>
            </div>

            <div class="mini_cart_footer">
                <div class="cart_button">
                    <a href="cart.html">View cart</a>
                </div>
                <div class="cart_button">
                    <a class="active" href="checkout.html">Checkout</a>
                </div>

            </div>

        </div> -->
        <!--mini cart end-->

        <!--header bottom satrt-->
      