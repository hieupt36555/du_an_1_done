<?php
if (is_array($sp)){
    extract($sp);
}
?> 
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Chi tiết Sản Phẩm</h1>
        </div><!-- /.col -->

      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="card card-solid">
      <div class="card-body">
        <div class="row">
          <div class="col-12 col-sm-6">
            <h3 class="d-inline-block d-sm-none"><?php echo $sp['ten_san_pham']?></h3>
            <div class="col-12">
              <img src="../../upload/<?php echo $sp['img']?>" class="product-image" alt="Product Image">
            </div>
          
          </div>
          <div class="col-12 col-sm-6">
            <h3 class="my-3"><?php echo $sp['ten_san_pham']?></h3>

            <hr>
            <h4>Màu Sắc</h4>
            <div class="btn-group btn-group-toggle" data-toggle="buttons">
              <label class="btn btn-default text-center active">
                <input type="radio" name="color_option" id="color_option_a1" autocomplete="off" checked>
                <br>
                <i class="fas fa-circle fa-2x <?php echo $sp['mau']?>"></i>
              </label>
              <!-- <label class="btn btn-default text-center">
                <input type="radio" name="color_option" id="color_option_a4" autocomplete="off">
                Red
                <br>
                <i class="fas fa-circle fa-2x text-red"></i>
              </label> -->
              <!-- <label class="btn btn-default text-center">
                <input type="radio" name="color_option" id="color_option_a5" autocomplete="off">
                Orange
                <br>
                <i class="fas fa-circle fa-2x text-orange"></i>
              </label> -->
            </div>

            <h4 class="mt-3">Dung Lượng</h4>
            <div class="btn-group btn-group-toggle" data-toggle="buttons">
              <label class="btn btn-default text-center">
                <input type="radio" name="color_option" id="color_option_b1" autocomplete="off">
                <span class="text"><?php echo $sp['dung_luong']?></span>
                <br>
                
              </label>
            </div>

            <div class="bg-gray py-2 px-3 mt-4">
              <h2 class="mb-0">
              <?= number_format($gia, 0, ',', '.') ?>VNĐ
            
              </h2>
              <h4 class="mt-0">
                <small>Giá_gốc:  <?= number_format($gia_sale, 0, ',', '.') ?>VNĐ
                </small>
              </h4>
            </div>

            <div class="mt-4 product-share">
              <a href="#" class="text-gray">
                <i class="fab fa-facebook-square fa-2x"></i>
              </a>
              <a href="#" class="text-gray">
                <i class="fab fa-twitter-square fa-2x"></i>
              </a>
              <a href="#" class="text-gray">
                <i class="fas fa-envelope-square fa-2x"></i>
              </a>
              <a href="#" class="text-gray">
                <i class="fas fa-rss-square fa-2x"></i>
              </a>
            </div>

          </div>
        </div>
        <div class="row mt-4">
          <nav class="w-100">
            <div class="nav nav-tabs" id="product-tab" role="tablist">
              <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">Mô tả</a>

            </div>
          </nav>
          <div class="tab-content p-3" id="nav-tabContent">
            <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab">6,1”
             <?php echo $sp['mo_ta_sp']?>
            </div>

          </div>
        </div>
      </div>

      <!-- /.card-body -->
    </div>
    <!-- /.card -->

  </section>
  <!-- /.col -->
</div>