<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<div class="container-fluid">
  <h3>Belanja Online</h3>
  <hr>
	<div class="row">
		<div class="col-md-5">
      <form method="POST" action="form_belanja.php">
        <div class="form-group row">
          <label for="customer" class="col-4 col-form-label">Customer</label> 
          <div class="col-8">
            <input id="customer" name="customer" placeholder="Nama Customer" type="text" required="required" class="form-control">
          </div>
        </div>
        <div class="form-group row">
        <label class="col-4">Pilih Produk</label> 
        <div class="col-8">
            <div class="form-check form-check-inline">
                <input name="produk" id="Produk Pilihan_0" type="radio" class="form-check-input" value="TV" required="required"> 
                <label for="Produk Pilihan_0" class="form-check-label">TV</label>
            </div>
            <div class="form-check form-check-inline">
                <input name="produk" id="Produk Pilihan_1" type="radio" class="form-check-input" value="KULKAS" required="required"> 
                <label for="Produk Pilihan_1" class="form-check-label">KULKAS</label>
            </div>
            <div class="form-check form-check-inline">
                <input name="produk" id="Produk Pilihan_2" type="radio" class="form-check-input" value="MESIN CUCI" required="required"> 
                <label for="Produk Pilihan_2" class="form-check-label">MESIN CUCI</label>
            </div>
        </div>
        </div>
        <div class="form-group row">
          <label for="Jumlah" class="col-4 col-form-label">Jumlah</label> 
          <div class="col-4">
            <input id="Jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control" required="required">
          </div>
        </div> 
        <div class="form-group row">
          <div class="offset-4 col-8">
            <button name="proses" type="submit" class="btn btn-success">Kirim</button>
          </div>
        </div>
      </form>
		</div>
    <div class="col-md-3">
    </div>
		<div class="col-md-4 daf_harga">
      <table class="table">
          <tr class="table-primary">
            <td>Daftar Harga</td>
          </tr>
          <tr>
            <td>TV : 4.200.000</td>
          </tr>
          <tr>
            <td>Kulkas : 3.100.000</td>
          </tr>
          <tr>
            <td>Mesin Cuci : 3.800.000</td>
          </tr>
          <tr class="table-primary">
            <td>Harga Dapat Berubah Setiap Saat</td>
          </tr>
      </table>
		</div>
	</div>
  <div class="row">
    <div class="col-md-12">
      


      <?php
      $proses = $_POST["proses"];
      $costumer = $_POST["customer"];
      $produk = $_POST["produk"];
      $jumlah = $_POST["jumlah"];
      
      echo '<br> Nama Customer : ' . $costumer;
      echo '<br> Produk Pilihan : ' . $produk;
      echo '<br> Jumlah Beli : ' . $jumlah;
      
      switch ($produk) {  
        case $produk == "TV":
          echo "<br> Total Belanja : Rp. ". $jumlah * 4200000;
          break;
      
        case $produk == "KULKAS":
          echo "<br> Total Belanja : Rp. ". $jumlah * 3100000;
          break;
      
        case $produk == "MESIN CUCI":
          echo "<br> Total Belanja : Rp. ". $jumlah * 3800000;
          break;
      
        default:
          echo "Tidak Dapat Diinput";
          break;
      }
      ?>

    </div>
  </div>
</div>
</body>
</html>
