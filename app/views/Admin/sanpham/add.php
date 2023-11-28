<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Sản Phẩm</h1>
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

                    <!-- /.card-header -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Nhập thông tin Sản Phẩm</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="index.php?act=addsp" method="POST" enctype="multipart/form-data">
                            
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInput">Tên Sản Phẩm</label>
                                    <input class="form-control" name="tensanpham" type="text" placeholder="Nhập tên sản phẩm">
                                </div>
                                <div class="form-group">
                                          <label for="exampleInputFile">Hình ảnh Sản Phẩm</label>
                                          <div class="input-group">
                                              <div class="custom-file">
                                                  <input type="file" class="custom-file-input"
                                                      id="exampleInputFile" name="hinhanh">
                                                  <label class="custom-file-label" for="exampleInputFile">Chọn ảnh</label>
                                              </div>
                                              <div class="input-group-append">
                                                  <span class="input-group-text">Tải lên</span>
                                              </div>
                                          </div>
                                      </div>
                                <div class="form-group">
                                    <label for="exampleInput">Giá</label>
                                    <input class="form-control" name="gia" type="text" placeholder="Nhập giá sản phẩm">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInput">Giá Gốc</label>
                                    <input class="form-control" name="giasale" type="text" placeholder="Nhập giá gốc">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInput">Màu</label>
                                    <input class="form-control" name="mau" type="text" placeholder="Nhập màu">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInput">Phiên Bản</label>
                                    <input class="form-control" name="dungluong" type="text" placeholder="Nhập phiên bản">
                                </div>
                                <div class="form-group">
                                    <label>Ngày Nhập</label>
                                    <input class="form-control" name="ngaynhap" type="date" placeholder="Nhập ngày">
                                </div>
                                <div class="form-group">
                                    <label>Mô tả</label>
                                    <textarea class="form-control" name="mota" rows="5" placeholder="Nhập mô tả ..."></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Danh mục</label>
                                    <select name="iddanhmuc" class="form-control">
                                    <?php foreach ($listdanhmuc as $danhmuc): ?>
                                        <option value="<?php echo $danhmuc['id_danh_muc']?>"><?php echo $danhmuc['ten_danh_muc']?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" name="themmoi" class="btn btn-primary">Thêm</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card-body -->


                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>