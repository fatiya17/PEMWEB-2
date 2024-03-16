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
                    <h1>Tugas Praktikum</h1>
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
                            <h3 class="card-title">Praktikum 02</h3>

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
                            <h1 style="text-align: center;">ONLINE SHOP </h1>
                            <div class="group">
                                <form action="praktikum02.php" method="POST" style="margin: 50px" class="form">
                                    <div class="form-group row">
                                        <label for="customer" class="col-4 col-form-label">Customer</label>
                                        <div class="col-8">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="fa fa-address-book-o"></i>
                                                    </div>
                                                </div>
                                                <input id="customer" name="customer" placeholder="your name" type="text" class="form-control" required="required">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-4">Choose Product</label>
                                        <div class="col-8">
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="Cusion" required="required">
                                                <label for="produk_0" class="custom-control-label">Cusion</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="Foundation" required="required">
                                                <label for="produk_1" class="custom-control-label">Foundation</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="Lipstik" required="required">
                                                <label for="produk_2" class="custom-control-label">Lipstik</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="text" class="col-4 col-form-label">Jumlah Barang</label>
                                        <div class="col-8">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="fa fa-money"></i>
                                                    </div>
                                                </div>
                                                <input id="total" name="total" placeholder="total barang" type="text" class="form-control" required="required">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="offset-4 col-8">
                                            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </form>
                                <div class="harga">
                                    <table>
                                        <h4>Keterangan Harga Produk :</h4>
                                        <tr>
                                            <td>Cusion</td>
                                            <td>: 120.000</td>
                                        </tr>
                                        <tr>
                                            <td>Foundation</td>
                                            <td>: 96.000</td>
                                        </tr>
                                        <tr>
                                            <td>Lipstik</td>
                                            <td>: 65.000</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>

                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <?php
                            if (isset($_POST['submit'])) {
                                $customer = $_POST['customer'];
                                $produk = $_POST['produk'];
                                $total = $_POST['total'];
                                $cusion = 120000 * $total;
                                $pondation = 96000 * $total;
                                $lipstik = 65000 * $total;

                                echo "Nama Customer : " . $customer;
                                echo "<br>Produk Pilihan : " . $produk;
                                echo "<br>Jumlah Produk : " . $total;

                                switch ($produk) {
                                    case 'Cusion':
                                        echo "<br> Total Harga : " . $cusion;
                                        break;
                                    case 'Foundation':
                                        echo "<br> Total Harga : " . $pondation;
                                        break;
                                    case 'Lipstik':
                                        echo "<br> Total Harga : " . $lipstik;
                                        break;
                                }
                            }
                            ?>
                        </div>
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