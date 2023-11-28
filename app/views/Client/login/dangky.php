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
                            <li>Đăng Ký</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->


    <!-- customer login start -->
    <div class="customer_login mt-32">
        
        <div class="container">
            <div class="row">
                <!--login area start-->
                <div class="col-lg-8 col-md-8">
                    <div class="account_form">
                        <h2>Đăng Ký</h2>
                        <form action="index.php?act=dangky" method="POST" enctype="multipart/form-data">
                            <p>
                                <label>Tên Đăng Nhập <span>*</span></label>
                                <input type="text" name="tendangnhap">
                            </p>
                            <p>
                                <label>Mật Khẩu <span>*</span></label>
                                <input type="password" name="matkhau">
                            </p>
                            <p>
                                <label>Họ Tên <span>*</span></label>
                                <input type="text" name="hoten">
                            </p>
                            <p>
                            <label for="exampleInputFile">Hình ảnh</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" name='hinhanh' class="custom-file-input" id="exampleInputFile">
                                                <label class="custom-file-label" for="exampleInputFile">Chọn ảnh</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text">Tải lên</span>
                                            </div>
                                        </div>
                            </p>
                            <p>
                            <label>Email</span>*</label>
                                <input type="email" name="email">
                            </p>
                            <p>
                            <label>Số Điện Thoại</span>*</label>
                                <input type="text" name="sdt">
                            </p>
                            <p>
                            <label>Địa Chỉ</span>*</label>
                                <input type="text" name="diachi">
                            </p>
                            <div class="login_submit">
                                <button name="dangky" type="submit">Đăng Ký</button>
                            </div>
                            <?php
                            if (isset($thongbao)&& $thongbao !='') {
                                echo $thongbao;
                            }
                            ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>