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
                            <li>Liên Hệ</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--contact map start-->
    <div class="contact_map mt-30">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="map-area">
                        <div id="googleMap"> <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5157.478832284617!2d105.74548357556515!3d21.037052059778077!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313455e940879933%3A0xcf10b34e9f1a03df!2zVHLGsOG7nW5nIENhbyDEkeG6s25nIEZQVCBQb2x5dGVjaG5pYw!5e1!3m2!1svi!2s!4v1700497615791!5m2!1svi!2s" width="1160" height="460" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--contact map end-->

    <!--contact area start-->
    <div class="contact_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="contact_message content">
                        <h3>Liên hệ với chúng tôi</h3>
                        <p>Năm 2023, H2L_Mobile trở thành đại lý ủy quyền của Apple. Chúng tôi phát triển chuỗi cửa hàng tiêu chuẩn và Apple Mono Store nhằm mang đến trải nghiệm tốt nhất về sản phẩm và dịch vụ của Apple cho người dùng Việt Nam.</p>
                        <ul>
                            <li><i class="fa fa-fax"></i> Địa chỉ : Số 13 Trịnh Văn Bô, Nam Từ Liêm, Hà Nội</li>
                            <li><i class="fa fa-phone"></i> <a href="#">hhai03@gmail.com</a></li>
                            <li><i class="fa fa-envelope-o"></i><a href="tel:0917555305">0352441179</a> </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="contact_message form">
                        <h3>Thông Tin Liên Hệ</h3>
                        <form action="index.php?act=lienhe" method="POST" >
                            <p>
                                <label> Họ Tên</label>
                                <input name="hoten" placeholder="Họ Tên *" type="text">
                            </p>
                            <p>
                                <label> Email</label>
                                <input name="email" placeholder="Email *" type="email">
                            </p>
                            <p>
                                <label> Số Điện Thoại</label>
                                <input name="sodienthoai" placeholder="Số điện thoại *" type="text">
                            </p>
                            <div class="contact_textarea">
                                <label> Nội Dung</label>
                                <textarea name="noidung" placeholder="Nội dung *" name="message" class="form-control2"></textarea>
                            </div>
                            <input value="Gửi" name='gui' type="submit">
                            <!-- <p class="form-messege"></p> -->
                        </form>
                        

                    </div>
                    <?php
if (isset($thongbao) && $thongbao != "") {
    echo '<div class="container-fluid"><div class="alert alert-success" role="alert">' . $thongbao . '</div></div>';
}
?>
                </div>
            </div>
        </div>
    </div>