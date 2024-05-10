<?php
require_once 'header.php';
require_once 'sidebar.php';
?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Dashboard Website</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Default box -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">PUSKESMAS</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="container" style="display: flex; padding-left:30px;">
                                <div class="nav1" style="flex: 1;"><img src="dist/img/table obat.jpg" alt="" width="180%" style="border-radius: 20px;"></div>
                                <br>
                                <!-- main -->
                                <div class="nav2" style="flex: 2; padding-left: 250px">
                                    <!-- baris1 -->
                                    <div class="header"><img src="dist/img/monthly pasien.jpg" alt="" width="82%" style="border-radius: 20px;"></div>
                                    <br>
                                    <!-- baris2 -->
                                    <div class="footer"><img src="dist/img/penyakit.jpg" alt="" width="82%" style="border-radius: 20px;"></div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            Footer
                        </div>
                        <!-- /.card-footer-->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
require_once 'footer.php';
?>