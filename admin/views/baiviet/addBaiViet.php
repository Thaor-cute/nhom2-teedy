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
                    <h1>Quản lý bài viết</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Thêm bài viết</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="<?= BASE_URL_ADMIN . '?act=them-bai-viet' ?>" method="post" enctype="multipart/form-data">
                            <div class="row card-body">
                                <div class="form-group col-12">
                                    <label>Tiêu đề bài viết</label>
                                    <input type="text" class="form-control" name="tieu_de" placeholder="Nhập tiêu đề bài viết">
                                    <?php if (isset($_SESSION['errors']['tieu_de'])) { ?>
                                        <p class="text-danger"><?= $_SESSION['errors']['tieu_de']; ?></p>
                                    <?php } ?>
                                </div>

                                <div class="form-group col-12">
                                    <label>Nội dung</label>
                                    <textarea class="form-control" name="noi_dung" placeholder="Nhập nội dung"></textarea>
                                    <?php if (isset($_SESSION['errors']['noi_dung'])) { ?>
                                        <p class="text-danger"><?= $_SESSION['errors']['noi_dung']; ?></p>
                                    <?php } ?>
                                </div>

                                <div class="form-group col-6">
                                    <label>ngày đăng</label>
                                    <input type="date" class="form-control" name="ngay_dang">
                                    <?php if (isset($_SESSION['errors']['ngay_dang'])) { ?>
                                        <p class="text-danger"><?= $_SESSION['errors']['ngay_dang']; ?></p>
                                    <?php } ?>
                                </div>

                                <div class="form-group col-6">
                                    <label>Hình ảnh bài viết</label>
                                    <input type="file" class="form-control" name="anh">
                                    <?php if (isset($_SESSION['errors']['anh'])) { ?>
                                        <p class="text-danger"><?= $_SESSION['errors']['anh']; ?></p>
                                    <?php } ?>
                                </div>


                                <div class="form-group col-12">
                                    <label>Trạng thái</label>
                                    <select class="form-control" name="trang_thai" id="exampleFormControlSelectl">
                                        <option selected disabled>Chọn trạng thái bài viết</option>
                                        <option value="1">Hiện</option>
                                        <option value="2">Ẩn</option>
                                    </select>

                                    <?php if (isset($_SESSION['errors']['trang_thai'])) { ?>
                                        <p class="text-danger"><?= $_SESSION['errors']['trang_thai']; ?></p>
                                    <?php } ?>
                                </div>

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                        </form>
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
<!-- /.content-wrapper -->

<!-- <footer> -->
<?php include './views/layout/footer.php'; ?>
<!-- End</footer>  -->

</body>

</html>