<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Belanja</title>
  <style>
    .group {
      display: flex;
      position: relative;
    }

    .form {
      flex: 3;
    }

    .harga {
      flex: 1;
      margin-top: 5%;
      font-size: 18px;
      border: 1px black solid;
      margin: 5%;
      padding: 20px;
    }

  </style>
</head>

<body>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <br>
  <h1 style="text-align: center;">ONLINE SHOP </h1>
  <div class="group">
    <form action="form_belanja.php" method="POST" style="margin: 50px" class="form">
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
  <hr>
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

</body>

</html>