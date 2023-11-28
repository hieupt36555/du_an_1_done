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
                            <li>Tin Tức</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--blog area start-->
    <div class="blog_page_section blog_padding mt-23">
        <div class="container">
            <div class="row">
            
                <div class="col-lg-9 col-md-12">
                    <div class="blog_wrapper blog_fullwidth">
                        <?php
                            foreach ($listtt as $tt): extract($tt); ?>
                        <div class="single_blog">
                            <div class="blog_thumb_active owl-carousel">
                                <div class="single_blog_thumb">
                                    <a href="index.php?act=tintucchitiet&id=<?php echo $tt['id_tin_tuc']?>"><img src="app/upload/<?php echo $tt['img']?>" alt=""></a>
                                </div>
                            </div>
                            <div class="blog_content">
                                <h3><a href="index.php?act=tintucchitiet&id=<?php echo $tt['id_tin_tuc']?>"><?php echo $tt['tieu_de']?></a></h3>
                                <div class="blog_meta">
                                    <span class="post_date"><i class="fa-calendar fa"></i> <?php echo $tt['ngay_dang']?></span>
                                </div>
                             
                                <div class="readmore_button">
                                    <a href="index.php?act=tintucchitiet&id=<?php echo $tt['id_tin_tuc']?>">Xem ngay</a>
                                </div>
                            </div>
                        </div>
                        <?php endforeach ?>
                    </div>
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
    <!--blog area end-->
