
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
                            <li>Tài Khoản của Tôi</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!-- my account start  -->
    <section class="main_content_area">
        <div class="container">
            <div class="account_dashboard">
                <div class="row">
                    <div class="col-sm-12 col-md-3 col-lg-3">
                        <!-- Nav tabs -->
                        <div class="dashboard_tab_button">
                            <ul role="tablist" class="nav flex-column dashboard-list" id="nav-tab">
                                <li><a href="#dashboard" data-toggle="tab" class="nav-link active"></a></li>
                            </ul>
                            <ul role="tablist" class="nav flex-column dashboard-list">
                            <?php
                                if (isset($_SESSION['ten_dang_nhap']) && is_array($_SESSION['ten_dang_nhap'])) {
                                    extract($_SESSION['ten_dang_nhap']);?>
                                <?php if($id_phan_quyen==4){ ?>
                                <li><a href="app/views/admin/index.php" class="nav-link active">Truy Cập Trang Quản Trị</a></li>
                                <?php } ?>
                            <ul role="tablist" class="nav flex-column dashboard-list" id="nav-tab">
                                <li> <a href="#orders" data-toggle="tab" class="nav-link">Quản lý đơn hàng</a></li>
                                <li><a href="#account-details" data-toggle="tab" class="nav-link">Chi tiết tài khoản</a></li>
                            </ul>
                                <li><a href="index.php?act=dangxuat" class="nav-link">Đăng xuất</a></li>
                                <?php
                            }else{
                            ?>
                                <li><a href="index.php?act=dangnhap" class="nav-link">Đăng Nhập</a></li>
                                <li><a href="index.php?act=dangky" class="nav-link">Đăng Ký</a></li>
                            <?php }?>
                              
                            </ul>
                            <!-- <ul role="tablist" class="nav flex-column dashboard-list" id="nav-tab">
                                <li><a href="#dashboard" data-toggle="tab" class="nav-link active">Truy Cập Trang Quản Trị</a></li>
                                <li> <a href="#orders" data-toggle="tab" class="nav-link">Hóa Đơn</a></li>
                                <li><a href="#account-details" data-toggle="tab" class="nav-link">Chi tiết tài khoản</a></li>
                            </ul> -->
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-9 col-lg-9">
                        <!-- Tab panes -->
                        <div class="tab-content dashboard_content">
                            <div class="tab-pane fade show active" id="dashboard">
                                <h3>Tài Khoản </h3>
                                <?php
                                if (isset($_SESSION['ten_dang_nhap']) && is_array($_SESSION['ten_dang_nhap'])) {
                                    extract($_SESSION['ten_dang_nhap']);
                                    echo "Hello, ". $ten_dang_nhap;
                                }else{
                                    echo "Bạn chưa đăng nhập";
                                }
                                ?>
                            </div>
                            <div class="tab-pane fade" id="orders">
                                <h3 style="margin-top: 20px;">Đơn Hàng</h3>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Mã Đơn Hàng</th>
                                                <th>Ngày đặt hàng</th>
                                                <th>Tổng Tiền</th>
                                                <th>Trạng Thái</th>
                                                <th>Chức Năng</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            foreach ($listhoadon as $hd):
                                                extract($hd);
                                                $ttdh=get_ttdh($hd['trang_thai']);
                                                ?>
                                                
                                            <tr>
                                                <td>Apple_<?php echo $hd['id_hoa_don'] ?></td>
                                                <td><?php echo $hd['ngay_dat_hang'] ?></td>
                                                <td><?= number_format($tong_tien, 0, ',', '.') ?>VNĐ</td>
                                                <td><?= $ttdh ?></td>
                                                <td><a href="cart.html" class="view">view</a></td>
                                            </tr>
                                            <?php endforeach ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="account-details">
                                <h3 style="margin-top: 20px;">Chi tiết tài khoản </h3>
                                <div class="login">
                                    <div class="login_form_container">
                                        <div class="account_login_form">
                                            <form action="index.php?act=capnhat" method="POST" enctype="multipart/form-data">
                                            <?php
                                            if (isset($_SESSION['ten_dang_nhap']) && is_array($_SESSION['ten_dang_nhap'])) {
                                                extract($_SESSION['ten_dang_nhap']);?>
                                                <input type="hidden" name="id" value="<?= isset($id_tai_khoan) ? $id_tai_khoan : '' ?>">
                                                <label>Tên Đăng Nhập</label>
                                                <input type="text" value="<?php echo $ten_dang_nhap ?>" name="tendangnhap">
                                                <label>Họ Tên</label>
                                                <input type="text" value="<?php echo $ho_ten ?>" name="hoten">
                                                <label >Hình Ảnh</label>
                                                <input type="file" name="hinhanh">
                                                <img style="width: 100px; object-fit: contain;" src="app/upload/<?php echo $img ?>" alt="">
                                                <p></p>
                                                <label>Email</label>
                                                <input type="email" value="<?php echo $email ?>" name="email">
                                                <label>Số Điên Thoại</label>
                                                <input type="text" value="<?php echo $sdt ?>" name="sdt">
                                                <label>Địa Chỉ</label>
                                                <input type="text" value="<?php echo $dia_chi ?>" name="diachi">
                                            <?php
                                            }
                                            ?>
                                                <div class="save_button primary_btn default_button">
                                                    <button name="capnhat" type="submit">Cập Nhât</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>