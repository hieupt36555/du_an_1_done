<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Đơn Hàng</h1>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Danh sách Đơn Hàng</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  
                  <tr>
                    <th>Mã Đơn Hàng</th>
                    <th>Khách Hàng</th>
                    <th>Ngày Mua Hàng</th>
                    <th>Tổng tiền</th>
                    <th>Trạng thái</th>
                    <th>Chức Năng</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                  <?php foreach ($listhd as $hd):
                    extract($hd);
                    $ttdh=get_ttdh($hd['trang_thai']);
                    $kh=$hd["ho_ten"].'
                    <br> '.$hd["email"].'
                    <br> '.$hd["dia_chi"].'
                    <br> '.$hd["sdt"];
                    ?>
                    <td>Apple_<?php echo $hd['id_hoa_don']; ?></td>
                    <td><?php echo $kh ?></td>
                    <td><?php echo $hd['ngay_dat_hang']; ?></td>
                    <td><?= number_format($tong_tien, 0, ',', '.') ?>VNĐ</td>
                    <td><?= $ttdh ?></td>
                    <td><div class="btn-group">
                      <a class="btn btn-outline-success" href="index.php?act=detaildh&id=<?php echo $hd["id_hoa_don"]; ?>" role="button">Xem</a>
                      <a class="btn btn-outline-secondary" href="index.php?act=suahd&id=<?php echo $hd["id_hoa_don"]; ?>" role="button">Cập Nhật</a>
                      <a class="btn btn-outline-danger" href="index.php?act=xoahd&id=<?php echo $hd["id_hoa_don"]; ?>" role="button">Xóa</a>

                    </div></td>
                  </tr>
                  <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
       
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>