<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai Ujian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">WEB 02</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Reviw PHP
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Variable</a></li>
                            <li><a class="dropdown-item" href="#">Array</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">OOP</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            PHP5 OOP
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Objects & Classes</a></li>
                            <li><a class="dropdown-item" href="#">Constructor</a></li>
                            <li><a class="dropdown-item" href="#">Properties</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container">
        <h2 class="text-center">Form Nilai Ujian</h2>
        <br>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <form method="POST" action="tugas.php">
            <div class="form-group row">
                <label for="nim" class="col-4 col-form-label">NIM</label>
                <div class="col-8">
                    <input id="nim" name="nim" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="mata_kuliah" class="col-4 col-form-label">Mata Kuliah</label>
                <div class="col-8">
                    <select id="mata_kuliah" name="mata_kuliah" class="custom-select">
                        <option value="Jaringan Komputer">Jaringan Komputer</option>
                        <option value="Pemograman Web">Pemograman Web</option>
                        <option value="UI/UX">UI/UX</option>
                        <option value="PKN">PKN</option>
                        <option value="Bahasa Inggris">Bahasa Inggris</option>
                        <option value="Komunikasi Efektif">Komunikasi Efektif</option>
                        <option value="Basis Data">Basis Data</option>
                        <option value="Statistik Probabilitas">Statistik Probabilitas</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="niali" class="col-4 col-form-label">Nilai</label>
                <div class="col-8">
                    <input id="niali" name="nilai" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
            <hr>
            <?php
            if (isset($_POST["submit"])) {
                require_once "tugas_class.php";

                // Set nilai properti pada objek dari nilai yang diisi pada form
                $nim = $_POST["nim"];
                $mata_kuliah = $_POST["mata_kuliah"];
                $nilai = $_POST["nilai"];

                // Buat objek baru dari class bmiPasien
                $grade = new penilaian($nim, $mata_kuliah, $nilai);

                echo "<p>NIM: " . $nim . "</p>";
                echo "<p>Nama Mata Kuliah: " . $grade->mata_kuliah . "</p>";
                echo "<p>Nilai: " . $nilai . " </p>";
                echo "<p>Hasil Ujian: " . $grade->hasilujian() . "</p>";
                echo "<p>Grade: " . $grade->grade() . "</p>";
            }

            ?>
        </form>
        <hr>
        <footer>
            <b>Lab Pemograman Web Lanjutan</b>
            <p>Dosen Sirojul Munir</p><p>STT-NF-Kampus B</p>
        </footer>
</body>

</html>