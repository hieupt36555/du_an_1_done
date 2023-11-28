
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
                            <li>Đăng Nhập</li>
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
                <div class="col-lg-6 col-md-6">
                    <div class="account_form">
                        <h2>Đăng Nhập</h2>
                        <form action="index.php?act=dangnhap" method="POST">
                            <p>
                                <label>Tên Đăng Nhập <span>*</span></label>
                                <input name="ten_dang_nhap" type="text" required>
                            </p>
                            <p>
                                <label>Mật Khẩu <span>*</span></label>
                                <input name="mat_khau" type="password" required>
                            </p>
                            <div class="login_submit">
                          
                                    <a href="index.php?act=quenmk">Quên mật khẩu</a>
                               
                                <button name="dangnhap" type="submit">Đăng Nhập</button>
                            </div>
                            <?php
                            if (isset($loginMess)&& $loginMess !='') {
                                echo $loginMess;
                            }
                            ?>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>