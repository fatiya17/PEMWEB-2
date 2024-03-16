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
                            <h3 class="card-title">Praktikum 03</h3>
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
                            <form action="praktikum03.php" method="POST">
                                <div class="form-group row">
                                    <label for="nim" class="col-4 col-form-label">NIM</label>
                                    <div class="col-8">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fa fa-adn"></i>n
                                                </div>
                                            </div>
                                            <input id="nim" name="nim" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nama" class="col-4 col-form-label">Nama</label>
                                    <div class="col-8">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fa fa-address-book"></i>
                                                </div>
                                            </div>
                                            <input id="nama" name="nama" type="text" required="required" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-4">Jenis Kelamin</label>
                                    <div class="col-8">
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input name="jenis_kelamin" id="jenis_kelamin_0" type="radio" required="required" class="custom-control-input" value="perempuan">
                                            <label for="jenis_kelamin_0" class="custom-control-label">Perempuan</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input name="jenis_kelamin" id="jenis_kelamin_1" type="radio" required="required" class="custom-control-input" value="laki">
                                            <label for="jenis_kelamin_1" class="custom-control-label">Laki - laki</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="prodi" class="col-4 col-form-label">Program Studi</label>
                                    <div class="col-8">
                                        <select id="prodi" name="prodi" class="custom-select" required="required">
                                            <option value="Teknik Informatika">Teknik Informatika</option>
                                            <option value="Sistem Informasi">Sistem Informasi</option>
                                            <option value="Bisnis Digital">Bisnis Digital</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-4">Keahlian</label>
                                    <div class="col-8">
                                        <div class="custom-control custom-checkbox custom-control-inline">
                                            <input name="keahlian" id="keahlian_0" type="checkbox" class="custom-control-input" value="HTML" required="required">
                                            <label for="keahlian_0" class="custom-control-label">HTML</label>
                                        </div>
                                        <div class="custom-control custom-checkbox custom-control-inline">
                                            <input name="keahlian" id="keahlian_1" type="checkbox" class="custom-control-input" value="CSS" required="required">
                                            <label for="keahlian_1" class="custom-control-label">CSS</label>
                                        </div>
                                        <div class="custom-control custom-checkbox custom-control-inline">
                                            <input name="keahlian" id="keahlian_2" type="checkbox" class="custom-control-input" value="Javascript" required="required">
                                            <label for="keahlian_2" class="custom-control-label">Javascript</label>
                                        </div>
                                        <div class="custom-control custom-checkbox custom-control-inline">
                                            <input name="keahlian" id="keahlian_3" type="checkbox" required="required" class="custom-control-input" value="Python">
                                            <label for="keahlian_3" class="custom-control-label">Python</label>
                                        </div>
                                        <div class="custom-control custom-checkbox custom-control-inline">
                                            <input name="keahlian" id="keahlian_4" type="checkbox" required="required" class="custom-control-input" value="RWD Bootsrap">
                                            <label for="keahlian_4" class="custom-control-label">RWD Bootsrap</label>
                                        </div>
                                        <div class="custom-control custom-checkbox custom-control-inline">
                                            <input name="keahlian" id="keahlian_5" type="checkbox" required="required" class="custom-control-input" value="Lainnya">
                                            <label for="keahlian_5" class="custom-control-label">Lainnya</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="domisili" class="col-4 col-form-label">Domisili</label>
                                    <div class="col-8">
                                        <select id="domisili" name="domisili" class="custom-select" required="required">
                                            <option value="Jakarta">Jakarta</option>
                                            <option value="Depok">Depok</option>
                                            <option value="Bogor">Bogor</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-4 col-form-label">Email</label>
                                    <div class="col-8">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fa fa-envelope-o"></i>
                                                </div>
                                            </div>
                                            <input id="email" name="email" type="text" class="form-control" required="required">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-4 col-8">
                                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <?php
                            if (isset($_POST['submit'])) {
                                $nim = $_POST['nim'];
                                $nama = $_POST['nama'];
                                $jenis_kelamin = $_POST['jenis_kelamin'];
                                $prodi = $_POST['prodi'];
                                $keahlian = $_POST['keahlian'];
                                $domisili = $_POST['domisili'];
                                $email = $_POST['email'];

                                echo "Terima kasih sudah mendaftar di IT Club Data Science";
                                echo "<br>Nama Lengkap : " . $nama;
                                echo "<br>NIM : " . $nim;
                                echo "<br>Jenis Kelamin : " . $jenis_kelamin;
                                echo "<br>Prodi : " . $prodi;
                                echo "<br>Keahlian : " . $keahlian;
                                echo "<br>Domisili : " . $domisili;
                                echo "<br>Email : " . $email;
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
</div>