<?php
if (is_array($onett)){
    extract($onett);
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
<div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="index.html">Trang Chủ</a></li>
                            <li><a href="index.php?act=tintuc">Tin Tức</a></li><li>Tin Tức Chi Tiết</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--blog body area start-->
    <div class="blog_details blog_padding mt-23">
        <div class="container">
            <div class="row">

                <div class="col-lg-9 col-md-12">
                    <!--blog grid area start-->
                    <div class="blog_details_wrapper">
                        <div class="blog_thumb">
                            <a href="#"><img src="app/upload/<?php echo $onett['img']?>" alt=""></a>
                        </div>
                        <div class="blog_content">
                            <h3 class="post_title"><?php echo $onett['tieu_de']?></h3>
                            <div class="post_meta">
                                
                                <span><i class="fa fa-calendar" aria-hidden="true"></i>  <?php echo $onett['ngay_dang']?>	</span>

                            </div>
                            <div class="post_content">
                               <p><?php echo $onett['noi_dung']?></p>
                            </div>
                            <div class="entry_content">
                                <div class="post_meta">
                                    <span>Tags: </span>
                                    <span><a href="#">, fashion</a></span>
                                    <span><a href="#">, t-shirt</a></span>
                                    <span><a href="#">, white</a></span>
                                </div>

                                <div class="social_sharing">
                                    <h3>share this post:</h3>
                                    <ul>
                                        <li><a href="#" title="facebook"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#" title="twitter"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#" title="pinterest"><i class="fa fa-pinterest"></i></a></li>
                                        <li><a href="#" title="google+"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#" title="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="related_posts">
                            <h3>Tin Tức</h3>
                            <div class="row">
                            <?php foreach ($listtt as $tt): ?>
                                <div class="col-lg-4 col-md-6">
                                    <div class="single_related">
                                        <div class="related_thumb">
                                            <img src="app/upload/<?php echo $tt['img']?>" alt="">
                                        </div>
                                        <div class="related_content">
                                            <h3><a href="index.php?act=tintucchitiet&id=<?php echo $tt['id_tin_tuc']?>"><?php echo $tt['tieu_de']?></a></h3>
                                            <span><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo $tt['ngay_dang']?> </span>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach;?>
                            </div>
                        </div>
               

                    </div>
                    <!--blog grid area start-->
                </div>
                <div class="col-lg-3 col-md-12">
                    <div class="blog_sidebar_widget">
                        
                        <div class="widget_list widget_post">
                        <h3>Sản Phẩm</h3>
                            <?php foreach ($listsptt as $sp): ?>
                            <div class="post_wrapper">
                                <div class="post_thumb">
                                    <a href="index.php?act=sanphamchitiet&id=<?php echo $sp['id_san_pham']?>"><img src="app/upload/<?php echo $sp['img']?>" alt=""></a>
                                </div>
                                <div class="post_info">
                                    <h3><a href="index.php?act=sanphamchitiet&id=<?php echo $sp['id_san_pham']?>"><?php echo $sp['ten_san_pham']?></a></h3>
                                    <span><?php echo $sp['ngay_nhap'] ?> </span>
                                </div>
                            </div>
                            <?php endforeach;?>
                        </div>
                        <div class="widget_list widget_categories">
                        <h3>Danh Mục</h3>
                            <?php foreach ($listdm as $dm): ?>
                            <ul>
                                <li><a href="index.php?act=sanpham&id=<?php echo $dm['id_danh_muc']?>"><?php echo $dm['ten_danh_muc']?></a></li>
                            </ul>
                            <?php endforeach;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>