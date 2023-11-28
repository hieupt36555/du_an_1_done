<?php
if (isset($hd) && is_array($hd)) {
    extract($hd);
}

?>
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
                    <div class="card">
                      <!-- /.card-header -->
                      <div class="card card-primary">
                        <div class="card-header">
                          <h3 class="card-title">Sửa Đơn Hàng</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                       
                        <form action="index.php?act=updatedh" method="POST" >
                          <div class="card-body">
                          <input type="hidden" name="id_hoa_don"  value="<?php echo $hd['id_hoa_don']?>"  >
                            <div class="form-group">
                              <label>Trạng Thái</label>
                              <select class="form-control" name="trang_thai" >
                                <option value="1" >Chờ xác nhận</option>
                                <option value="2" >Đang giao hàng</option>
                                <option value="3" >Giao thành công</option>
                              </select>
                            </div>
                          </div>
                          <!-- /.card-body -->
                            <?php
                             if (isset($thongbao) && $thongbao != "") {
                                 echo '<div class="container mt-3"><div class="alert alert-success" role="alert">' . $thongbao . '</div></div>';
                             }
                             ?>
                          <div class="card-footer">
                            <!-- <button type="submit" class="btn btn-primary">Thêm</button> -->
                            <input type="submit" class="btn btn-primary" value="Sửa" name="capnhat" >
                          </div>
                        </form>
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