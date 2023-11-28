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
                            <li>Giỏ Hàng</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--shopping cart area start -->
    <div class="wishlist_area mt-30">
        <div class="container">
            <form action="#">
                <div class="row">
                    <div class="col-12">
                        <div class="table_desc wishlist">
                            <div class="cart_page table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="product_remove">Thao Tác</th>
                                            <th class="product_thumb">Hình Ảnh</th>
                                            <th class="product_name">Tên sản phẩm</th>
                                            <th class="product_name">Phiên bản</th>
                                            <th class="product-price">Giá</th>
                                            <th class="product-price">Thành Tiền</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                    $tong=0;
                                    $i=0;
                                    foreach ($_SESSION['mycart'] as $cart){
                                        $thanhtien=intval($cart[4])*$cart[5];
                                        $tong+=$thanhtien;
                                    $xoasp='<a href="index.php?act=delcart&idcart='.$i.'"><input type="button" value="X"></a>';?>
                                    <tr>
                                            <td class="product_remove"><?= $xoasp?></td>
                                            <td class="product_thumb"><a href="#"><img style="width: 100px; object-fit: contain;" src="app/upload/<?= $cart[2]?>" alt=""></a></td>
                                            <td class="product_name"><a href="#"><?= $cart[1]?></a></td>
                                            <td class="product_name"><a href="#"><?= $cart[3]?></a></a></td>
                                            <td class="product-price"><?=number_format($cart[4], 0, ',', '.') ?>VNĐ</td>
                                            <td class="product-price"><?=number_format($thanhtien, 0, ',', '.') ?>VNĐ</td>
                                         
                                        </tr>
                                        <?php
                                        $i+=1;?>
                                       <?php
                                }?>
                                        <tr>
                                             <td colspan="4">Tổng hóa đơn</td>
                                             <td><?=number_format($tong, 0, ',', '.') ?>VNĐ</td>
                                             <td></td>
                                    </tr>
                           
                                    </tbody>
                                </table>
                            </div>
                           

                        </div>
                        <a href="index.php?act=bill"><input style="margin-bottom: 30px;" class="btn btn-warning" type="button" value="Đồng ý đặt hàng"></a>
                    </div>
                </div>

            </form>
            <div class="row">
                <div class="col-12">
                    <div class="wishlist_share">
                        <h4>Share on:</h4>
                        <ul>
                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                            <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                            <li><a href="#"><i class="fa fa-tumblr"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>