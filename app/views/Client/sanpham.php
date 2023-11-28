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
<div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="index.php">Trang Chủ</a></li>
                            <li>Sản Phẩm </li>
                  
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--shop  area start-->
    <div class="shop_area shop_fullwidth">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!--shop wrapper start-->
                    <!--shop toolbar start-->
                    <div class="shop_title">
                        <h1 style="margin-bottom: 40px;">shop</h1>
                    </div>
                    <div class="shop_toolbar_wrapper">
                       
                        <div class=" niceselect_option">

                            <form class="select_option" action="#">
                                <select name="orderby" id="short">

                                    <option selected value="1">Sort by average rating</option>
                                    <option value="2">Sort by popularity</option>
                                    <option value="3">Sort by newness</option>
                                    <option value="4">Sort by price: low to high</option>
                                    <option value="5">Sort by price: high to low</option>
                                    <option value="6">Product Name: Z</option>
                                </select>
                            </form>


                        </div>
                    
                    </div>
              
                    <!--shop toolbar end-->

                    <div class="row shop_wrapper">
                    <?php
                foreach ($listsp as $sp):
                    extract($sp);?>
                        <div class="col-lg-3 col-md-4 col-12 ">
                            <div class="single_product">
                                <div class="product_name grid_name">
                                    <h3><a href="index.php?act=sanphamchitiet&id=<?php echo $sp['id_san_pham']?>"><?php echo $sp['ten_san_pham']?></a></h3>
                                  
                                </div>
                                <div class="product_thumb">
                                    <a class="primary_img" href="index.php?act=sanphamchitiet&id=<?php echo $sp['id_san_pham']?>"><img src="app/upload/<?php echo $sp['img']?>" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">-47%</span>
                                    </div>
                                    <div class="action_links">
                                        <ul>
                                            <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                            <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                            <li class="compare"><a href="compare.html" title="compare"><span class="lnr lnr-sync"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_content grid_content">
                                    <div class="content_inner">
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
                                                <span class="current_price"><?= number_format($gia, 0, ',', '.') ?>VNĐ</span>
                                                <span class="old_price"><?= number_format($gia_sale, 0, ',', '.') ?>VNĐ</span>
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
                                    </div>
                                </div>
                           </div>
                        </div>
                        <?php endforeach ?>
                    </div>
          

                    <div class="shop_toolbar t_bottom">
                        <div class="pagination">
                            <ul>
                                <li class="current">1</li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li class="next"><a href="#">next</a></li>
                                <li><a href="#">>></a></li>
                            </ul>
                        </div>
                    </div>
                    <!--shop toolbar end-->
                    <!--shop wrapper end-->
                </div>
            </div>
        </div>
    </div>