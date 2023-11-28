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
                            <li><a href="index.php?act=viewcart">Giỏ Hàng</a></li><li><a href="index.php?act=bill">Thông tin đơn hàng</a></li>
                            <li>Đơn Hàng</li>
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
            <div class="coupon_area">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="coupon_code right">
                                <h3>Thông tin đơn hàng</h3>
                                <div class="card-body">
                                <?php
                                if(isset($hoadon) && is_array($hoadon)){
                                    extract($hoadon);
                                }
                                ?>
                                    <div class="form-group">
                                      <label for="inputEstimatedBudget">Tên Khách Hàng: <?php echo $hoadon['ho_ten'] ?></label>
                                    </div>
                                    <div class="form-group">
                                      <label for="inputSpentBudget">Số Điện Thoại: <?php echo $hoadon['sdt'] ?></label>
                                    </div>
                                    <div class="form-group">
                                      <label for="inputEstimatedDuration">Email: <?php echo $hoadon['email'] ?></label>
                                    </div>
                                    <div class="form-group">
                                      <label for="inputEstimatedDuration">Địa Chỉ: <?php echo $hoadon['dia_chi'] ?></label>
                                    </div>
                                     <div class="form-group">
                                     <label for="inputEstimatedDuration">Phương Thức Thanh Toán: <?php echo $hoadon['pttt'] ?></label>
                                    </div>
                                    <div class="form-group">
                                     <label for="inputEstimatedDuration">Mã Đơn Hàng: Apple_<?php echo $hoadon['id_hoa_don'] ?></label>
                                    </div>
                                    <div class="form-group">
                                     <label for="inputEstimatedDuration">Ngày đặt hàng: <?php echo $hoadon['ngay_dat_hang'] ?></label>
                                    </div>
                                    <div class="form-group">
                                     <label for="inputEstimatedDuration">Tổng đơn hàng: <?= number_format($tong_tien, 0, ',', '.') ?>VNĐ</label>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="table_desc wishlist">
                            <div class="cart_page table-responsive">
                                <table>
                                    <thead>
                                        <tr>
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
                                        ?>
                                    <tr>
                                  
                                            <td class="product_thumb"><a href="#"><img style="width: 100px; object-fit: contain;" src="app/upload/<?= $cart[2]?>" alt=""></a></td>
                                            <td class="product_name"><a href="#"><?= $cart[1]?></a></td>
                                            <td class="product_name"><a href="#"><?= $cart[3]?></a></td>
                                            <td class="product-price"><?=number_format($cart[4], 0, ',', '.') ?>VNĐ</td>
                                            <td class="product-price"><?=number_format($thanhtien, 0, ',', '.') ?>VNĐ</td>
                                         
                                        </tr>
                                        <?php
                                        $i+=1;      ?>
                                    <?php
                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
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