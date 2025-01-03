<!-- <head> -->
<?php include './views/layout/header.php'; ?>
<!-- </head> -->

<!-- navbar -->
<?php include './views/layout/navbar.php'; ?>
<!-- navbar -->

<!-- sidebar -->
<?php include './views/layout/sidebar.php'; ?>
<!-- sidebar -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Quản lý liên hệ</h1>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <!-- <div class="card-header">
              <a href="<?= BASE_URL_ADMIN . '?act=form-them-liem-he' ?>">
                 <button class="btn btn-success">Thêm liện</button> -->
            <!-- </a>
            </div> -->
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>STT</th>
                    <th>Email</th>
                    <th>Số điện thoại</th>
                    <th>Ngày tạo</th>
                    <th>Thao tác</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($listLienHe as $key => $lienHe) : ?>
                    <tr>
                      <td><?= $key + 1 ?></td>
                      <td><?= $lienHe['email'] ?></td>
                      <td><?= $lienHe['so_dien_thoai'] ?></td>
                      <td><?= $lienHe['ngay_tao'] ?></td>
                      <td>

                        <a href="<?= BASE_URL_ADMIN . '?act=chi-tiet-lien-he&id_lien_he=' . $lienHe['id'] ?>">
                          <button class="btn btn-primary"><i class="far fa-eye"></i></button>
                        </a>

                        <!-- <a href="<?= BASE_URL_ADMIN . '?act=form-sua-bai-viet&id_bai_viet=' . $baiViet['id'] ?>">
                          <button class="btn btn-warning"><i class="fas fa-user-cog"></i></button>
                        </a> -->

                        <a href="<?= BASE_URL_ADMIN . '?act=xoa-lien-he&id_lien_he=' . $lienHe['id'] ?>"
                          onclick="return confirm('Bạn có chắc muốn xóa liên hệ này không?')">
                          <button class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                        </a>
                      </td>
                    </tr>
                  <?php endforeach ?>
                </tbody>
                <tfoot>
                  <tr>
                    <th>STT</th>
                    <th>Email</th>
                    <th>Số điện thoại</th>
                    <th>Ngày tạo</th>
                    <th>Thao tác</th>
                  </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- <footer> -->
<?php include './views/layout/footer.php'; ?>
<!-- End</footer>  -->

<!-- Page specific script -->
<script>
  $(function() {
    $("#example1").DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>

</html>