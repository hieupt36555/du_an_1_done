<div class="header_bottom bottom_four sticky-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="main_menu header_position">
                            <nav>
                                <ul>
                                    <li><a href="index.php">Trang chủ</a>
                                    </li>
                                    <?php foreach ($listdm as $dm): ?>
                                    <li class="mega_items"><a href="index.php?act=sanpham&id=<?php echo $dm['id_danh_muc']?>"><?php echo $dm['ten_danh_muc']?></a>
                                    </li>
                                    <?php endforeach; ?>
                                    <li><a href="index.php?act=tintuc">Tin Tức</a>
                                    </li>
                                    </li>
                                    <li><a href="index.php?act=lienhe"> Liên hệ</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                </div>
            </div>
        </div>
<div class="discount_area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="discount_text">
                            <p>Giảm giá tất cả các sản phẩm mới nhân dịp khai trương</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--header area end-->



    <!--slider area start-->
    <section class="slider_section slider_two mb-50">
 
        <div class="slider_area owl-carousel">
        <?php foreach ($listbanner as $bn): ?>
            <div class="single_slider d-flex align-items-center" data-bgimg="app/upload/<?php echo $bn['img']?>">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="slider_content">

                                <a class="button" href="<?php echo $bn['link']?>">Mua Ngay</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <?php endforeach; ?>
        </div>

    </section>
    <!--slider area end-->

    <!--banner area start-->
    <section class="banner_area mb-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="banner_container">
                        <div class="single_banner">
                            <div class="banner_thumb">
                                <a href="#"><img src="public/images/4.png" alt=""></a>
                                <div class="banner_text">

                                </div>
                            </div>
                        </div>
                        <div class="single_banner">
                            <div class="banner_thumb">
                                <a href="#"><img src="public/images/5.jpeg" alt=""></a>
                                <div class="banner_text">


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--banner area end-->

    <!--product area start-->
    
    <section class="product_area mb-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <h2><span> <strong>iPhone</strong></span></h2>
                    </div>
                 
                    <div class="product_carousel product_column4 owl-carousel">
                    <?php foreach ($listsp as $sp):
                       extract($sp);?>
                    <?php
                    if ($id_danh_muc==16){
                    ?>
                        <div class="single_product">
                            <div class="product_name">
                                <h3><a href="index.php?act=sanphamchitiet&id=<?php echo $sp['id_san_pham']?>"><?php echo $sp['ten_san_pham']?></a></h3>

                            </div>
                            <div class="product_thumb">
                                <a class="primary_img" href="index.php?act=sanphamchitiet&id=<?php echo $sp['id_san_pham']?>"><img
                                        src="app/upload/<?php echo $sp['img']?>" alt=""></a>

                                <div class="label_product">
                                    <span class="label_sale">-17%</span>
                                </div>


                            </div>
                            <div class="product_content">
                                <div class="product_ratings">
                                    <ul>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product_footer d-flex align-items-center">
                                    <div class="price_box">
                                        <span class="regular_price"><?= number_format($gia, 0, ',', '.') ?>VNĐ
                                        </span>
                                    </div>
                                    <div class="add_to_cart">
                                        <form action="index.php?act=addtocart" method="POST">
                                            <input type="hidden" name="id_san_pham" value="<?php echo $sp['id_san_pham']?>">
                                            <input type="hidden" name="ten_san_pham" value="<?php echo $sp['ten_san_pham']?>">
                                            <input type="hidden" name="img" value="<?php echo $sp['img']?>">
                                            <input type="hidden" name="dung_luong" value="<?php echo $sp['dung_luong']?>">
                                            <input type="hidden" name="gia" value="<?php echo $sp['gia']?>">
                                            <input type="submit" class="lnr lnr-cart" name="addtocart" value="Mua">
                                        </form>
                                 
                                    </div>
                                </div>
                           
                                <div class="bar_percent">

                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                              <?php endforeach ?>
                     
                    </div>
           
                </div>
            </div>

        </div>
    </section>
    <!--product area end-->

    <!--featured categories area start-->
    <section class="product_area mb-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <h2><span> <strong>iPad</strong></span></h2>
                    </div>
                  
                    <div class="product_carousel product_column4 owl-carousel">
                    <?php foreach ($listsp as $sp):
                       extract($sp);?>
                    <?php
                    if ($id_danh_muc==22){
                    ?>
                        <div class="single_product">
                            <div class="product_name">
                                <h3><a href="index.php?act=sanphamchitiet&id=<?php echo $sp['id_san_pham']?>"><?php echo $sp['ten_san_pham']?></a></h3>

                            </div>
                            <div class="product_thumb">
                                <a class="primary_img" href="index.php?act=sanphamchitiet&id=<?php echo $sp['id_san_pham']?>"><img
                                        src="app/upload/<?php echo $sp['img']?>" alt=""></a>

                                <div class="label_product">
                                    <span class="label_sale">-17%</span>
                                </div>


                            </div>
                            <div class="product_content">
                                <div class="product_ratings">
                                    <ul>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product_footer d-flex align-items-center">
                                    <div class="price_box">
                                        <span class="regular_price"><?= number_format($gia, 0, ',', '.') ?>VNĐ
                                        </span>
                                    </div>
                                    <div class="add_to_cart">
                                        <form action="index.php?act=addtocart" method="POST">
                                            <input type="hidden" name="id_san_pham" value="<?php echo $sp['id_san_pham']?>">
                                            <input type="hidden" name="ten_san_pham" value="<?php echo $sp['ten_san_pham']?>">
                                            <input type="hidden" name="img" value="<?php echo $sp['img']?>">
                                            <input type="hidden" name="dung_luong" value="<?php echo $sp['dung_luong']?>">
                                            <input type="hidden" name="gia" value="<?php echo $sp['gia']?>">
                                            <input type="submit" class="lnr lnr-cart" name="addtocart" value="Mua">
                                        </form>
                                    </div>
                                </div>
                              
                                <div class="bar_percent">

                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                     
                     <?php endforeach ?>
                    </div>
           
                </div>
            </div>

        </div>
    </section>

    <!--product area start-->
    <section class="product_area mb-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <h2><span> <strong>MacBook</strong></span></h2>
                    </div>
               
                    <div class="product_carousel product_column4 owl-carousel">
                    <?php foreach ($listsp as $sp):
                       extract($sp);?>
                    <?php
                    if ($id_danh_muc==19){
                    ?>
                        <div class="single_product">
                            <div class="product_name">
                                <h3><a href="index.php?act=sanphamchitiet&id=<?php echo $sp['id_san_pham']?>"><?php echo $sp['ten_san_pham']?></a></h3>

                            </div>
                            <div class="product_thumb">
                                <a class="primary_img" href="index.php?act=sanphamchitiet&id=<?php echo $sp['id_san_pham']?>"><img
                                        src="app/upload/<?php echo $sp['img']?>" alt=""></a>

                                <div class="label_product">
                                    <span class="label_sale">-17%</span>
                                </div>


                            </div>
                            <div class="product_content">
                                <div class="product_ratings">
                                    <ul>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product_footer d-flex align-items-center">
                                    <div class="price_box">
                                        <span class="regular_price"><?= number_format($gia, 0, ',', '.') ?>VNĐ
                                        </span>
                                    </div>
                                    <div class="add_to_cart">
                                        <form action="index.php?act=addtocart" method="POST">
                                            <input type="hidden" name="id_san_pham" value="<?php echo $sp['id_san_pham']?>">
                                            <input type="hidden" name="ten_san_pham" value="<?php echo $sp['ten_san_pham']?>">
                                            <input type="hidden" name="img" value="<?php echo $sp['img']?>">
                                            <input type="hidden" name="dung_luong" value="<?php echo $sp['dung_luong']?>">
                                            <input type="hidden" name="gia" value="<?php echo $sp['gia']?>">
                                            <input type="submit" class="lnr lnr-cart" name="addtocart" value="Mua">
                                        </form>
                                    </div>
                                </div>
                                <!-- <div class="quantity_progress">
                                    <p class="product_sold">Sold: <span>199</span></p>
                                    <p class="product_available">Availabe: <span>9800</span></p>
                                </div> -->
                                <div class="bar_percent">

                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                     
                     <?php endforeach ?>
                    </div>
                  
                </div>
            </div>

        </div>
    </section>
    <!--product area end-->

    <!--product area start-->
    <section class="product_area mb-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <h2><span> <strong>Watch</strong></span></h2>
                    </div>
                   
                    <div class="product_carousel product_column4 owl-carousel">
                    <?php foreach ($listsp as $sp):
                       extract($sp);?>
                    <?php
                    if ($id_danh_muc==23){
                    ?>
                        <div class="single_product">
                            <div class="product_name">
                                <h3><a href="index.php?act=sanphamchitiet&id=<?php echo $sp['id_san_pham']?>"><?php echo $sp['ten_san_pham']?></a></h3>

                            </div>
                            <div class="product_thumb">
                                <a class="primary_img" href="index.php?act=sanphamchitiet&id=<?php echo $sp['id_san_pham']?>"><img src="app/upload/<?php echo $sp['img']?>" alt=""></a>

                                <div class="label_product">
                                    <span class="label_sale">-17%</span>
                                </div>


                            </div>
                            <div class="product_content">
                                <div class="product_ratings">
                                    <ul>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product_footer d-flex align-items-center">
                                    <div class="price_box">
                                        <span class="regular_price"><?= number_format($gia, 0, ',', '.') ?>VNĐ
                                        </span>
                                    </div>
                                    <div class="add_to_cart">
                                    <form action="index.php?act=addtocart" method="POST">
                                            <input type="hidden" name="id_san_pham" value="<?php echo $sp['id_san_pham']?>">
                                            <input type="hidden" name="ten_san_pham" value="<?php echo $sp['ten_san_pham']?>">
                                            <input type="hidden" name="img" value="<?php echo $sp['img']?>">
                                            <input type="hidden" name="dung_luong" value="<?php echo $sp['dung_luong']?>">
                                            <input type="hidden" name="gia" value="<?php echo $sp['gia']?>">
                                            <input type="submit" class="lnr lnr-cart" name="addtocart" value="Mua">
                                        </form>
                                    </div>
                                </div>
                                <!-- <div class="quantity_progress">
                                    <p class="product_sold">Sold: <span>199</span></p>
                                    <p class="product_available">Availabe: <span>9800</span></p>
                                </div> -->
                                <div class="bar_percent">

                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                     
                     <?php endforeach ?>
                    </div>
                    
                </div>
            </div>

        </div>
    </section>
    
    <!--product area end-->

    <!--brand area start-->
    <div class="brand_area mb-42">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="brand_container owl-carousel">
                        <div class="single_brand">
                            <a href="#"><img src="public/images/brand.png" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="public/images/brand1.png" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="public/images/brand2.png" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="public/images/brand3.png" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="public/images/brand4.png" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="public/images/brand2.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--brand area end-->

    <!--blog area start-->
    <section class="blog_section mb-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <h2><span> <strong>Tin</strong>Tức</span></h2>
                    </div>
                    <div class="blog_carousel blog_column4 owl-carousel">
                    <?php foreach ($listtt as $tt):?>    
                        <div class="single_blog">
                            <div class="blog_thumb">
                                <a href="index.php?act=tintucchitiet&id=<?php echo $tt['id_tin_tuc']?>"><img src="app/upload/<?php echo $tt['img']?>" alt=""></a>
                            </div>
                            <div class="blog_content">
                                <div class="date_post">
                                    <span><?php echo $tt['ngay_dang']?></span>
                                </div>
                                <h3><a href="index.php?act=tintucchitiet&id=<?php echo $tt['id_tin_tuc']?>"><?php echo $tt['tieu_de']?></a></h3>
                                <div style="height: 70px;" class="overflow-y-hidden"><?php echo $tt['noi_dung']?></div>
                                <!-- <div class="blog_desc">
                                    
                                </div> -->
                            </div>
                        </div>
                                     
                    <?php endforeach ?>  
                    </div>
                </div>
            </div>
        </div>
    </section>