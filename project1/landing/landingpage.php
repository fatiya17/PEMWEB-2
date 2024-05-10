<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Heal Well</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
  <script src="https://unpkg.com/feather-icons"></script>
  <link rel="stylesheet" href="style2.css">

</head>

<body>
  <nav class=" navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
      <h4 class="navbar-brand">Heal Well</h4>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse text-right" id="navbarText">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#informasi">Information</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#galeri">Galery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#contact">Contact</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link active" id="loginid" href="../login/login.php">Login</a>
          </li>
        </ul>
      </div>
    </div>
    </div>
  </nav>

  <div class="container-fluid banner" id="home">
    <div class="container text-start">
      <br>
      <h2>Let's Get <span>Healthy</span></h2>
      <p>Health as Grace, Service as Charity</p>
      <a href="#contact">
        <button type="button" class="btn btn-danger btn-lg">Contact Us</button>
      </a>
    </div>
  </div>
  <!--layanan-->
  <div class="container-fluid contact pt-5 pb-5">
    <div class="container text-center">
      <h2 class="text-center mt-3" id="informasi">INFORMATION</h2>
      <div class="conten">
        <div class="row pt-4">
          <div class="col-md-4">
            <span class="lingkaran"><i class="fas fa-briefcase-medical fa-4x"></i></span>
            <h4 class="mt-3">Informasi Layanan</h4>

            <table class="table table-responsive table-bordered mt-5">
              <tr class="table-dark">
                <th>No</th>
                <th>Layanan Tersedia</th>
              </tr>
              <tr>
                <td>1</td>
                <td>Pemeriksaan kesehatan umum</td>
              </tr>
              <tr>
                <td>2</td>
                <td>Konsultasi dokter</td>
              </tr>
              <tr>
                <td>3</td>
                <td>Pelayanan gawat darurat</td>
              </tr>
              <tr>
                <td>4</td>
                <td>Check up</td>
              </tr>
              <tr>
                <td>5</td>
                <td>Konsultasi gigi</td>
              </tr>
            </table>
          </div>

          <div class="col-md-4">
            <span class="lingkaran"><i class="fas fa-calendar-check fa-4x"></i></span>
            <h4 class="mt-3">Jadwal Dokter</h4>
            <table class="table table-responsive table-bordered mt-5">
              <tr class="table-dark">
                <th>No</th>
                <th>Informasi Dokter</th>
              </tr>
              <tr>
                <td>1</td>
                <td>Dr. Ani (07.45 - 10.45)</td>
              </tr>
              <tr>
                <td>2</td>
                <td>Dr. John (08.00 - 13.00)</td>
              </tr>
              <tr>
                <td>3</td>
                <td>Dr. Sarah (12.00 - 16.00)</td>
              </tr>
              <tr>
                <td>4</td>
                <td>Dr. Robert (17.00 - 21.00)</td>
              </tr>
              <tr>
                <td>5</td>
                <td>Dr. Michael (standby)</td>
              </tr>
            </table>
          </div>
          <div class="col-md-4">
            <span class="lingkaran"><i class="fas fa-address-card fa-4x"></i></span>
            <h4 class="mt-3">Informasi Kontak</h4>
            <table class="table table-responsive table-bordered mt-5">
              <tr class="table-dark">
                <td>Email : healwell@gmail.com</td>
              </tr>
              <tr>
                <td>No.Telepon : 0823464+++</td>
              </tr>
              <tr class="table-dark">
                <td>Facebook : Heal Well</td>
              </tr>
              <tr>
                <td>Pusat : Magelang</td>
              </tr>
              <tr>
                <td class="table-dark">Customer Service : 1-222-345-678</td>
              </tr>
              <tr>
                <td>Instagram Puskesmas : heal_well</td>
              </tr>
            </table>
          </div>
        </div>
      </div>

      <!-- galeri -->
      <div class="container-fluid pt-5 pb-5 ">
        <div class="container text-center">
          <h2 text-center mt-3 id="galeri">GALERY</h2>
          <div class="conten">
            <div class="row pt-4 gx-4 gy-4">
              <div class="col-md-4">
                <div class="card crop-img">
                  <img src="img/doctor.jpg" class="card-img-top" width="200" height="200" />
                  <div class="card-body">
                    <h5 class="card-title">Dokter Spesialis</h5>

                  </div>
                </div>
              </div>

              <div class="col-md-4">
                <div class="card crop-img">
                  <img src="img/tensi.jpg" class="card-img-top" width="200" height="200" />
                  <div class="card-body">
                    <h5 class="card-title">Pengecekan Tensi</h5>

                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card crop-img">
                  <img src="img/room.jpg" class="card-img-top" width="200" height="200" />
                  <div class="card-body">
                    <h5 class="card-title">Ruang Inap</h5>

                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card crop-img">
                  <img src="img/medicalcek.jpg" class="card-img-top" width="200" height="200" />
                  <div class="card-body">
                    <h5 class="card-title">Dokter Anestesi</h5>

                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card crop-img">
                  <img src="img/tooth.jpg" class="card-img-top" width="200" height="200" />
                  <div class="card-body">
                    <h5 class="card-title">Perawatan Gigi</h5>

                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card crop-img">
                  <img src="img/perawat2.jpg" class="card-img-top" width="200" height="200" />
                  <div class="card-body">
                    <h5 class="card-title">Alat Optik</h5>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- kontak -->

    <?php
    require_once 'contact/index.php';
    ?>
    <br>
    <br>
    ?>
  </div>
  </div>

  <!--footer -->
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <title>Footer Design</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="footer/footer.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  </head>

  <body>

    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="footer-col">
            <h4>company</h4>
            <ul>
              <li><a href="#home">home</a></li>
              <li><a href="#galeri">galery</a></li>
              <li><a href="#informasi">information</a></li>
              <li><a href="#contact">contact us</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>get help</h4>
            <ul>
              <li><a href="#">FAQ</a></li>
              <li><a href="#informasi">Physician Information</a></li>
              <li><a href="#informasi">Contact Information</a></li>
              <li><a href="../login/login.php">Login</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>follow us</h4>
            <div class="social-links">
              <a href="https://www.facebook.com/sttterpadunurulfikri"><i class="fab fa-facebook-f"></i></a>
              <a href="https://twitter.com/STTTerpaduNF1"><i class="fab fa-twitter"></i></a>
              <a href="https://www.instagram.com/sttnf_official/"><i class="fab fa-instagram"></i></a>
              <a href="https://www.linkedin.com/in/sttterpadunf/"><i class="fab fa-linkedin-in"></i></a>
            </div>
          </div>
        </div>
      </div>
    </footer>

  </body>

  </html>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>