<?php
function pdo_get_connection()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    try {
        $conn = new PDO("mysql:host=$servername;dbname=duan1", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}
// Thành công đữ liệu
function pdo_execute($sql)
{
    $sql_args = array_slice(func_get_args(), 1);
    try {
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);

    } catch (PDOException $e) {
        throw $e;
    } finally {
        unset($conn);
    }
}
function pdo_execute_return_lastInsertId($sql)
{
    $sql_args = array_slice(func_get_args(), 1);
    try {
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
        return $conn->lastInsertId();

    } catch (PDOException $e) {
        throw $e;
    } finally {
        unset($conn);
    }
}
// truy vấn nhiều dữ liệu
function pdo_query($sql)
{
    $sql_args = array_slice(func_get_args(), 1);

    try {
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
        $rows = $stmt->fetchAll();
        return $rows;
    } catch (PDOException $e) {
        throw $e;
    } finally {
        unset($conn);
    }
}
// truy vấn  1 dữ liệu
function pdo_query_one($sql)
{
    $sql_args = array_slice(func_get_args(), 1);
    try {
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        // đọc và hiển thị giá trị trong danh sách trả về
        return $row;
    } catch (PDOException $e) {
        throw $e;
    } finally {
        unset($conn);
    }
}
pdo_get_connection();
// truy vấn danh mục
function insert_danhmuc($tenloai, $mota)
{
    $sql = "INSERT INTO danh_muc(ten_danh_muc, mo_ta) VALUES ('$tenloai', '$mota')";
    pdo_execute($sql);
}

function delete_danhmuc($id)
{
    $sql = "DELETE FROM danh_muc WHERE id_danh_muc= '$id'";
    pdo_query($sql);
}

function loadAlldm()
{
    $sql = "SELECT * FROM danh_muc ORDER BY id_danh_muc ASC";
    $listdm = pdo_query($sql);
    return $listdm;
}

function loadOnedm($id)
{
    $sql = "SELECT * FROM danh_muc WHERE id_danh_muc = '$id'";
    $dm = pdo_query_one($sql);
    return $dm;
}

function update_danhmuc($id, $tenloai, $mota)
{
    $sql = "UPDATE danh_muc SET ten_danh_muc='$tenloai', mo_ta='$mota' WHERE id_danh_muc = '$id'";
    pdo_execute($sql);
}
// truy vấn chức vụ
function insert_phanquyen($chucnang, $mota)
{
    $sql = "INSERT INTO phan_quyen(ten_chuc_nang, mo_ta) VALUES ('$chucnang', '$mota')";
    pdo_execute($sql);
}

function delete_phanquyen($id)
{
    $sql = "DELETE FROM phan_quyen WHERE id_phan_quyen= '$id'";
    pdo_query($sql);
}

function loadAllpq()
{
    $sql = "SELECT * FROM phan_quyen ORDER BY id_phan_quyen DESC";
    $listpq = pdo_query($sql);
    return $listpq;
}

function loadOnepq($id)
{
    $sql = "SELECT * FROM phan_quyen WHERE id_phan_quyen = '$id'";
    $pq = pdo_query_one($sql);
    return $pq;
}

function update_phanquyen($id, $chucnang, $mota)
{
    $sql = "UPDATE phan_quyen SET ten_chuc_nang='$chucnang', mo_ta='$mota' WHERE id_phan_quyen = '$id'";
    pdo_execute($sql);
}

// truy vấn tài khoản
function insert_taikhoan($tendangnhap, $matkhau, $hoten,$hinhanh,$email,$sdt,$diachi, $trangthai, $idphanquyen)
{
$sql = "INSERT INTO tai_khoan(ten_dang_nhap, mat_khau, ho_ten, img, email, sdt, dia_chi, trang_thai,id_phan_quyen) 
VALUES ('$tendangnhap', '$matkhau', '$hoten','$hinhanh','$email','$sdt','$diachi','$trangthai','$idphanquyen')";
    pdo_execute($sql);
}

function insert_tkusser($tendangnhap, $matkhau, $hoten,$hinhanh,$email,$sdt,$diachi)
{
$sql = "INSERT INTO tai_khoan(ten_dang_nhap, mat_khau, ho_ten, img, email, sdt, dia_chi) 
VALUES ('$tendangnhap', '$matkhau', '$hoten','$hinhanh','$email','$sdt','$diachi')";
    pdo_execute($sql);
}

function delete_taikhoan($id)
{
    $sql = "DELETE FROM tai_khoan WHERE id_tai_khoan= '$id'";
    pdo_query($sql);
}


function dangnhap($ten_dang_nhap,$mat_khau) {
    $sql="SELECT * FROM tai_khoan WHERE ten_dang_nhap='$ten_dang_nhap' and mat_khau ='$mat_khau'";
    $taikhoan = pdo_query_one($sql);
    return $taikhoan;
}

function dangxuat() {
    if (isset($_SESSION['ten_dang_nhap'])) {
        unset($_SESSION['ten_dang_nhap']);
    }
}

function taikhoan_one_admin($id)
{
    
    $sql = "SELECT id_tai_khoan,ten_dang_nhap, mat_khau, ho_ten, img, email, sdt, dia_chi,trang_thai, ten_chuc_nang FROM tai_khoan 
    INNER JOIN phan_quyen ON tai_khoan.id_phan_quyen = phan_quyen.id_phan_quyen where id_tai_khoan = '$id'";
    $listtk = pdo_query_one($sql);
    return $listtk;
}


function check_email($email)
{
    $sql = "SELECT * FROM tai_khoan where email='$email'";
    $email = pdo_query_one($sql);
    return $email;
}

function update_taikhoan($id, $tendangnhap, $matkhau, $hoten,$hinhanh,$email,$sdt,$diachi,$trangthai,$idphanquyen)
{
    $sql = "UPDATE tai_khoan SET ten_dang_nhap='$tendangnhap',mat_khau='$matkhau',ho_ten='$hoten',img='$hinhanh',email='$email',sdt='$sdt',dia_chi='$diachi',trang_thai='$trangthai',id_phan_quyen='$idphanquyen'
    WHERE id_tai_khoan = '$id'";
    pdo_execute($sql);
}

function update_client($id, $tendangnhap, $hoten,$hinhanh,$email,$sdt,$diachi)
{
    $sql = "UPDATE tai_khoan SET ten_dang_nhap='$tendangnhap',ho_ten='$hoten',img='$hinhanh',email='$email',sdt='$sdt',dia_chi='$diachi' WHERE id_tai_khoan = '$id'";
    pdo_execute($sql);
}


function loadAll_taikhoan($tukhoa="",$idphanquyen=0)
{
    $sql = "SELECT * FROM tai_khoan WHERE 1";
    if ($tukhoa != "") {
        $sql .= " AND ten_dang_nhap LIKE '%$tukhoa%'";
    }

    if ($idphanquyen > 0) {
        $sql .= " AND id_phan_quyen = '$idphanquyen'";
    }

    $sql .= " ORDER BY id_tai_khoan DESC";

    $listtaikhoan = pdo_query($sql);
    return $listtaikhoan;
}



// truy vấn sản phẩm
function insert_sanpham($tensanpham,$hinhanh, $gia, $giasale, $mau, $dungluong, $ngaynhap, $motasp, $iddanhmuc)
{
    $sql = "INSERT INTO san_pham(ten_san_pham,img,gia,gia_sale,mau,dung_luong,ngay_nhap, mo_ta_sp, id_danh_muc ) VALUES ('$tensanpham','$hinhanh','$gia','$giasale','$mau','$dungluong', '$ngaynhap', '$motasp', '$iddanhmuc')";
    pdo_execute($sql);
}

function delete_sanpham($id)
{
    $sql = "DELETE FROM san_pham WHERE id_san_pham= '$id'";
    pdo_query($sql);
}

function loadsp()
{
    $sql = "SELECT * FROM san_pham";
    $listsp = pdo_query($sql);
    return $listsp;
}

function loadsp_danhmuc($iddanhmuc)
{
    $sql = "SELECT * FROM san_pham WHERE id_danh_muc='$iddanhmuc'";
    $listsp = pdo_query($sql);
    return $listsp;
}

function loadAll_sanpham($tukhoa = "", $iddanhmuc = 0)
{
    $sql = "SELECT * FROM san_pham WHERE 1";

    if ($tukhoa != "") {
        $sql .= " AND ten_san_pham LIKE '%$tukhoa%'";
    }

    if ($iddanhmuc > 0) {
        $sql .= " AND id_danh_muc = '$iddanhmuc'";
    }

    $sql .= " ORDER BY id_san_pham DESC";

    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function loadAll_sanpham_tintuc()
{
    $sql = "SELECT * FROM san_pham WHERE 1 ORDER BY id_san_pham DESC LIMIT 0,6";
    $listsp = pdo_query($sql);
    return $listsp;
}

// function loadOne_sanpham($id)
// {
//     $sql = "SELECT * FROM san_pham WHERE id_san_pham = '$id'";
//     $sp = pdo_query_one($sql);
//     return $sp;
// }

function load_ten_dm($iddanhmuc)
{
    if ($iddanhmuc > 0) {
        $sql = "SELECT * FROM danh_muc WHERE id_danh_muc = '$iddanhmuc'";
        $dm = pdo_query_one($sql);
        extract($dm);
    } else {
        return "";
    }
}

function loadOne_sanpham($id)
{
    $sql = "SELECT * FROM san_pham WHERE id_san_pham = '$id'";
    $listonesp = pdo_query_one($sql);
    return $listonesp;
}
function loadOne_sanpham_cungloai($id, $id_danh_muc)
{
    $sql = "SELECT * FROM san_pham WHERE id_danh_muc = '$id_danh_muc' AND id_san_pham <> '$id'"; // where khác <>
    $listsp = pdo_query($sql);
    return $listsp;
}



function update_sanpham($id, $tensanpham,$hinhanh, $gia, $giasale,$mau, $dungluong, $ngaynhap, $motasp, $iddanhmuc)
{
    $sql = "UPDATE san_pham SET ten_san_pham='$tensanpham',img='$hinhanh',gia='$gia',gia_sale='$giasale',mau='$mau',dung_luong='$dungluong',ngay_nhap='$ngaynhap',mo_ta_sp='$motasp', id_danh_muc='$iddanhmuc' WHERE id_san_pham = '$id'";
    pdo_execute($sql);
}


// khuyến mại
function insert_khuyenmai($khuyenmai, $giatrikhuyenmai, $ngaybatdau, $ngayketthuc, $mota, $trangthai)
{
    $sql = "INSERT INTO khuyen_mai(ma_khuyen_mai, phan_tram_khuyen_mai, ngay_bat_dau, ngay_ket_thuc, mo_ta, trang_thai ) VALUE ('$khuyenmai','$giatrikhuyenmai','$ngaybatdau','$ngayketthuc','$mota','$trangthai')";
    pdo_execute($sql);
}
function delete_khuyenmai($id)
{
    $sql = "DELETE FROM khuyen_mai WHERE id_khuyen_mai= '$id'";
    pdo_query($sql);
}
function loadAllkm()
{
    $sql = "SELECT * FROM khuyen_mai ORDER BY id_khuyen_mai DESC";
    $listkhuyenmai = pdo_query($sql);
    return $listkhuyenmai;
}
function loadOnekm($idkhuyenmai)
{
    $sql = "SELECT * FROM khuyen_mai WHERE id_khuyen_mai = '$idkhuyenmai'";
    $km = pdo_query_one($sql);
    return $km;
}
function update_khuyenmai($id,$makhuyenmai, $giatri, $ngaybatdau, $ngayketthuc, $mota, $trangthai)
{
    $sql = "UPDATE khuyen_mai SET ma_khuyen_mai='$makhuyenmai',phan_tram_khuyen_mai='$giatri',ngay_bat_dau='$ngaybatdau',ngay_ket_thuc='$ngayketthuc',mo_ta='$mota', trang_thai='$trangthai' WHERE id_khuyen_mai = '$id'";
    pdo_execute($sql);
}
// tin tức
function insert_tintuc($tendanhmuc,$hinhanh,$ngaydang,$noidung)
{
    $sql= "INSERT INTO tin_tuc(tieu_de,img,ngay_dang,noi_dung) VALUE ('$tendanhmuc','$hinhanh','$ngaydang','$noidung')";
    pdo_execute($sql);
}
function delete_tintuc($id)
{
  $sql = "DELETE FROM tin_tuc WHERE id_tin_tuc= '$id'";
  pdo_query($sql);
}
function loadAlltt()
{
    $sql = "SELECT * FROM tin_tuc WHERE 1 ORDER BY id_tin_tuc DESC LIMIT 0,3";
    $listtintuc = pdo_query($sql);
    return $listtintuc;
}

function load_tintuc()
{
    $sql = "SELECT * FROM tin_tuc ORDER BY id_tin_tuc DESC ";
    $listtintuc = pdo_query($sql);
    return $listtintuc;
}

function loadOnett($id)
{
    $sql = "SELECT * FROM tin_tuc WHERE id_tin_tuc = '$id'";
    $tt = pdo_query_one($sql);
    return $tt;
}
function update_tintuc($id_tin_tuc,$tieude,$ngaydang,$noidung,$hinhanh)
{
    $sql = "UPDATE tin_tuc SET tieu_de='$tieude',ngay_dang='$ngaydang',noi_dung='$noidung',img = '$hinhanh'  WHERE id_tin_tuc = '$id_tin_tuc'";
    pdo_execute($sql);
}


function insert_banner($imgbanner,$link){
    $sql = "INSERT INTO banner(img, link) VALUES ('$imgbanner', '$link')";
    pdo_execute($sql);
}
function delete_banner($id_banner)
{
    $sql = "DELETE FROM banner WHERE id_banner= '$id_banner'";
    pdo_query($sql);
}
function load_all_banner(){
    $sql = "SELECT * FROM banner ORDER BY id_banner";
    $listbanner = pdo_query($sql);
    return $listbanner;
}
function loadOnebanner($id_banner)
{
    $sql = "SELECT * FROM banner WHERE id_banner = '$id_banner'";
    $bner = pdo_query_one($sql);
    return $bner;
}
function update_banner($id_banner, $imgbanner, $link){
    $sql="UPDATE banner set img='".$imgbanner."', link='".$link."' WHERE id_banner = ".$id_banner;
    pdo_execute($sql);
}
//end bannerr//
//binh luan//
function insert_binhluan($ten_dang_nhap,$danh_gia,$noi_dung,$ngay_binh_luan, $id_san_pham ,$id_tai_khoan){
    $sql = "INSERT INTO binh_luan(ten_dang_nhap, danh_gia, noi_dung, ngay_binh_luan, id_san_pham, id_tai_khoan) VALUES ('$ten_dang_nhap', '$danh_gia', '$noi_dung', '$ngay_binh_luan', '$id_san_pham', '$id_tai_khoan')";
    pdo_execute($sql);
}
function load_all_binh_luan_where($id){
    $sql = "SELECT * FROM binh_luan where id_san_pham = ".$id;
    $listbl = pdo_query($sql);
    return $listbl;
}
function load_all_binh_luan(){
    $sql = "SELECT * FROM binh_luan ORDER BY id_binh_luan DESC";
    $listbl = pdo_query($sql);
    return $listbl;
}
function loadOnebl($id_binh_luan)
{
    $sql = "SELECT * FROM binh_luan WHERE id_binh_luan = '$id_binh_luan'";
    $bl = pdo_query_one($sql);
    return $bl;
}
function delete_bl($id_binh_luan)
{
    $sql = "DELETE FROM binh_luan WHERE id_binh_luan= '$id_binh_luan'";
    pdo_query($sql);
}
function update_bl($id_binh_luan, $ten_dang_nhap, $danh_gia, $noi_dung, $ngay_binh_luan, $id_san_pham, $id_tai_khoan){
    $sql="update binh_luan set noi_dung='$noi_dung', danh_gia='$danh_gia' where id_binh_luan=".$id_binh_luan;
    pdo_execute($sql);
}
//end binh luan//
//hoa don//
// function insert_hoa_don($ho_ten,$sdt,$dia_chi,$ten_san_pham,$gia,$ma_khuyen_mai,$phuong_thuc_thanh_toan,$tong_tien,$trang_thai){
//     $sql = "INSERT INTO hoa_don(ho_ten,sdt,dia_chi,ten_san_pham,gia,ma_khuyen_mai,phuong_thuc_thanh_toan,tong_tien,trang_thai) VALUES ('$ho_ten','$sdt','$dia_chi','$ten_san_pham','$gia','$ma_khuyen_mai','$phuong_thuc_thanh_toan','$tong_tien','$trang_thai')";
//     pdo_execute($sql);
// }
function delete_hd($id_hoa_don)
{
    $sql = "DELETE FROM hoa_don WHERE id_hoa_don= '$id_hoa_don'";
    pdo_query($sql);
}
function load_all_hoa_don(){
    $sql = "SELECT * FROM hoa_don ORDER BY id_hoa_don DESC";
    $listhd = pdo_query($sql);
    return $listhd;
}
function load_one_hoa_don($id_hoa_don)
{
    $sql = "SELECT * FROM hoa_don WHERE id_hoa_don = '$id_hoa_don'";
    $hd = pdo_query_one($sql);
    return $hd;
}

function update_hd($id_hoa_don, $trang_thai){
    $sql="UPDATE hoa_don SET trang_thai='$trang_thai' WHERE id_hoa_don=".$id_hoa_don;
    pdo_execute($sql);
}
//end hoa don///

// lienhe
function insert_lienhe($hoten,$email,$sdt,$noidung){
    $sql = "INSERT INTO lien_he(ho_ten, email, sdt, noi_dung) VALUES ('$hoten', '$email', '$sdt', '$noidung')";
    pdo_execute($sql);
}
function loadalllienhe(){
    $sql = "SELECT * FROM lien_he ORDER BY id_lien_he DESC";
    $listlh = pdo_query($sql);
    return $listlh;
}
function loadOnelh($id)
{
    $sql = "SELECT * FROM lien_he WHERE id_lien_he = '$id'";
    $lh = pdo_query_one($sql);
    return $lh;
}
function delete_lh($id)
{
    $sql = "DELETE FROM lien_he WHERE id_lien_he= '$id'";
    pdo_query($sql);
}

function tongdonhang()
{
    $tong=0;
        foreach ($_SESSION['mycart'] as $cart){
            $thanhtien=intval($cart[4])*$cart[5];
            $tong+=$thanhtien;
       
        }
    return $tong;
}

function insert_hoadon($id_tai_khoan,$hoten, $sdt, $email, $diachi, $pttt, $ngaydathang, $tongdonhang){
    $sql = "insert into hoa_don(id_tai_khoan,ho_ten,sdt,email,dia_chi,pttt,ngay_dat_hang,tong_tien) values('$id_tai_khoan','$hoten', '$sdt', '$email', '$diachi', '$pttt', '$ngaydathang', '$tongdonhang')";
    return pdo_execute_return_lastInsertId($sql);
}
function insert_cart($id_tai_khoan, $id_san_pham, $img, $ten_san_pham, $gia, $dung_luong, $soluong, $thanh_tien,$id_hoa_don){
    $sql = "insert into cart(id_tai_khoan,id_san_pham,img,ten_san_pham,gia,dung_luong,soluong,thanh_tien,id_hoa_don) values('$id_tai_khoan', '$id_san_pham', '$img', '$ten_san_pham', '$gia', '$dung_luong', '$soluong', '$thanh_tien','$id_hoa_don')";
    return pdo_execute($sql);
}
function loadone_hoadon($id_hoa_don)
{
    $sql = "SELECT * FROM hoa_don WHERE id_hoa_don = '$id_hoa_don'";
    $listhd = pdo_query_one($sql);
    return $listhd;
}

function loadone_cart($id_hoa_don)
{
    $sql = "SELECT * FROM cart WHERE id_hoa_don = '$id_hoa_don'";
    $listhd = pdo_query_one($sql);
    return $listhd;
}

function loadall_hoadon($id_tai_khoan){
    $sql = "SELECT * FROM hoa_don WHERE id_tai_khoan= '$id_tai_khoan'";
    $listhoadon = pdo_query($sql);
    return $listhoadon;
}

function get_ttdh($n){
    switch ($n) {
        case '1':
            $tt="Chờ Xác Nhận";
            break;
        case '2':
            $tt="Đang Giao Hàng";
            break;
        case '3':
            $tt="Giao Thành Công";
            break;
        default:
            $tt="Chờ Xác Nhận";
            break;
    }
    return $tt;
}

?>