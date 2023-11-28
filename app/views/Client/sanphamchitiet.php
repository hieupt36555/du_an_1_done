<?php
if (isset($_SESSION['ten_dang_nhap']) && is_array($_SESSION['ten_dang_nhap'])) {
    extract($_SESSION['ten_dang_nhap']);
}
if (is_array($sp)){
    extract($sp);
}
?> 
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
<div class="product_details mt-20">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product-details-tab">

                        <div id="img-1" class="zoomWrapper single-zoom">
                            <a href="#">
                                <img id="zoom1" src="app/upload/<?php echo $sp['img']?>" data-zoom-image="app/upload/<?php echo $sp['img']?>" alt="big-1">
                            </a>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product_d_right">
                        <form action="index.php?act=addtocart" method="POST">

                            <h1><?php echo $sp['ten_san_pham']?></h1>

                            <div class=" product_ratting">
                                <ul>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="review"><a href="#"> (Đánh Giá ) </a></li>
                                </ul>

                            </div>
                            <div class="price_box">
                                <span class="current_price"> <?= number_format($gia, 0, ',', '.') ?>VNĐ</span>
                                <p></p>
                                <span class="old_price"> <?= number_format($gia_sale, 0, ',', '.') ?>VNĐ</span>

                            </div>
                       
                            <div class="product_variant color">
                               
                                <label>Màu sắc</label>
                                <ul>
                                    
                                    <li class="<?php echo $sp['mau']?>"><a href="#"></a></li>
                                    
                                </ul>
                            </div>
                            <div class="product_variant color">
                               
                                <label>Phiên Bản</label>
                                <ul>
                                <a class="btn btn-dark" href="#" role="button"><?php echo $sp['dung_luong']?></a>
                                </ul>
                            </div>
                            <div class="product_meta">
                                <span>Tình trạng: <a href="#">Còn Hàng</a></span>
                            </div>
                            <div class="product_variant quantity">
                                <form action="index.php?act=addtocart" method="POST">
                                     <input type="hidden" name="id_san_pham" value="<?php echo $sp['id_san_pham']?>">
                                     <input type="hidden" name="ten_san_pham" value="<?php echo $sp['ten_san_pham']?>">
                                     <input type="hidden" name="img" value="<?php echo $sp['img']?>">
                                     <input type="hidden" name="dung_luong" value="<?php echo $sp['dung_luong']?>">
                                     <input type="hidden" name="gia" value="<?php echo $sp['gia']?>">
                                     <input type="submit" class="lnr lnr-cart" name="addtocart" value="Mua">
                                 </form>
                            </div>
                        </form>
                        <div class="priduct_social">
                            <ul>
                                <li><a class="facebook" href="#" title="facebook"><i class="fa fa-facebook"></i> Like</a></li>
                                <li><a class="twitter" href="#" title="twitter"><i class="fa fa-twitter"></i> tweet</a></li>
                                <li><a class="pinterest" href="#" title="pinterest"><i class="fa fa-pinterest"></i> save</a></li>
                                <li><a class="google-plus" href="#" title="google +"><i class="fa fa-google-plus"></i> share</a></li>
                                <li><a class="linkedin" href="#" title="linkedin"><i class="fa fa-linkedin"></i> linked</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--product details end-->

    <!--product info start-->
    <div class="product_d_info">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="product_d_inner">
                        <div class="product_info_button">
                            <ul class="nav" role="tablist" id="nav-tab">
                                <li>
                                    <a class="active" data-toggle="tab" href="#info" role="tab" aria-controls="info" aria-selected="false">Mô Tả</a>
                                </li>
                                
                                <li>
                                    <a data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Bình Luận</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="info" role="tabpanel">
                                <div class="product_info_content">
                                    <p><?php echo $sp['mo_ta_sp']?></p>
                                </div>
                            </div>
                       

                            <div class="tab-pane fade" id="reviews" role="tabpanel">
                                <!-- binh luan -->
                                <div class="reviews_wrapper">
                                    <div class="comment_title">
                                        <h2>Bình Luận </h2>   
                                    </div>
                                    <?php 
                                        foreach($listbl as $bl){
                                    ?>
                                     <div class="reviews_comment_box">
                                        <div class="comment_thmb">
                                            <img src="assets/img/blog/comment2.jpg" alt="">
                                        </div>
                                        <div class="comment_text">
                                            <div class="reviews_meta">
                                                <div class="star_rating">
                                                    <?php echo $bl['danh_gia']?> <br>
                                                    <a href="index.php?act=xoabl&id="<?php echo $bl['id_binh_luan'];?>></a>
                                                </div>
                                                <p><strong><?php echo $bl['ten_dang_nhap']?> </strong>--<?php echo $bl['ngay_binh_luan']?></p>
                                                <span><?php echo $bl['noi_dung'] ?></span> 
                                            </div>
                                        </div>                                      
                                    </div>
                                    <?php }
                                        ?>            
                                    <div class="product_review_form">
                                    <!-- //form gửi Bình Luận -->
                                    <?php if (isset($_SESSION['ten_dang_nhap']) && is_array($_SESSION['ten_dang_nhap'])){?>
                                        <form action="index.php?act=addbl" method="POST">
                                            <label for="">Đánh Giá Về Sản Phẩm</label> <br>                                          
                                           <Select  name="danh_gia" style="width:300px; text-align: center; margin-bottom: 10px; margin-top: 10px; border: 1px solid gray;" >
                                                <option  value="Tốt">Tốt</option>
                                                <option value="Khá">Khá</option>
                                                <option value="Tệ">Tệ</option>
                                            </Select>
                                            <div class="row">
                                                <div class="col-12">   
                                                    <textarea name="noi_dung" id="review_comment" placeholder="Nhập Nội Dung Bình Luận..." ></textarea>
                                            </div>
                                                <input type="hidden" name="id_tai_khoan" value="<?php echo $id_tai_khoan?>" > 
                                                <input type="hidden" name="ten_dang_nhap" value="<?php echo $ten_dang_nhap?>" > 
                                                <input type="hidden" name="id_san_pham" value="<?php echo $sp['id_san_pham']?>" > 
                                            </div>                                           
                                            <input type="submit" value="Gửi Bình Luận" name="gui" style="background-color: gray; color: ghostwhite; width: 200px; border-radius: 5px;" > 
                                            <!-- <button type="submit" name="gui">Gửi Bình Luận</button>                                       -->
                                        </form>
                                    <?php
                                    }
                                    ?>   
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--product info end-->

    <!--product area start-->
    <section class="product_area mb-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <h2><span> <strong>Sản</strong>Phẩm</span></h2>
                    </div>
                    <div class="product_carousel product_column5 owl-carousel">
                    <?php foreach ($listsp as $sp):
                       extract($sp);?>
                        <div class="single_product">
                            <div class="product_name">
                                <h3><a href="index.php?act=sanphamchitiet&id=<?php echo $sp['id_san_pham']?>"><?php echo $sp['ten_san_pham']?></a></h3>
                            </div>
                            <div class="product_thumb">
                                <a class="primary_img" href="index.php?act=sanphamchitiet&id=<?php echo $sp['id_san_pham']?>"><img src="app/upload/<?php echo $sp['img']?>" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">-17%</span>
                                </div>

                                <div class="action_links">
                                    <ul>
                                        <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                        <li class="wishlist"><a href="#" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                        <li class="compare"><a href="#" title="compare"><span class="lnr lnr-sync"></span></a></li>
                                    </ul>
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
                                        <span class="regular_price"><?= number_format($gia, 0, ',', '.') ?>VNĐ</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a href="#" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>

        </div>
    </section>