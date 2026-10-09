<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AeroDrive</title>

     <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
      
     <!-- CSS -->
      <link rel="stylesheet" href="style.css">

     <!--Bootstrap Icon-->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"> 
</head>
<body>

<!--HEADER-->
<header class="header">
    <div class="header-left">
        <div class="logo1"><i class="bi bi-car-front-fill"></i></div>
        <div class="nama-perusahaan">
            <h1>AeroDrive</h1>
            <p>Solusi Kredit Mobil Impian Anda</p>
        </div>
    </div>
    <div class="header-right">
        <span><i class="bi bi-telephone-fill me-2"></i>0888-0693-7012</span>
        <span><i class="bi bi-envelope-fill me-2"></i>aerodrive@car.com</span>
    </div>
</header>

<!--NAVBAR-->
<nav class="navbar navbar-expand-lg nav-custom">
     <div class="container-fluid"> 
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span> 
        </button> 
        <div class="collapse navbar-collapse justify-content-center" id="navbarMenu">
            <ul class="navbar-nav"> 
                <li class="nav-item"> 
                    <a class="nav-link active" href="#beranda">Beranda</a>
                </li> 
                <li class="nav-item"> 
                   <a class="nav-link" href="#tentang">Tentang Perusahaan</a> 
                </li> 
            </ul>
        </div>
    </div>
</nav>

<!--SLIDER-->
<section id="beranda">
    <div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./buggati.jpeg"  class="d-block w-100" alt="mobil">
      <div class="carousel-caption d-none d-md-block">
        <h2>Mobil Impian Anda</h2>
        <p>Dapatkan mobil impian dengan pembiayaan yang mudah dan cepat. </p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./buggati2.jpeg" class="d-block w-100" alt="mobil">
      <div class="carousel-caption d-none d-md-block">
        <h2>Mobil Impian Anda</h2>
        <p>Dapatkan mobil impian anda dengan pembiayaan ringan mudah dan cepat</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./buggati3.jpeg" class="d-block w-100" alt="mobil">
      <div class="carousel-caption d-none d-md-block">
        <h2>Berkendara dengan nyaman </h2>
        <p>Bersama aerodrive anda bisa berkendara dengan nyaman dan aman</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</section>

<!--TENTANG DAN GAMBAR-->
<div class="card-body">
  <section class="content-section" id="tentang">
    <div class="row">
      <div class="col-sm-6 mb-3 mb-sm-0">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Tentang Perusahaan</h5>
            <p class="card-text"> AeroDrive adalah firma kurasi hypercar premium yang lahir dari gairah mendalam terhadap kecepatan mutlak, teknik tingkat tinggi, dan kemewahan tanpa kompromi. Bugatti Chiron. Kami memahami bahwa membeli sebuah Bugatti bukan sekadar transaksi, melainkan sebuah pencapaian hidup dan investasi pada sebuah karya seni yang bergerak. Oleh karena itu, AeroDrive mendedikasikan diri untuk memberikan pengalaman kepemilikan yang sangat personal, rahasia, dan berkelas dunia.</p>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="">
          <div class="card-body">
            <img src="./bugg.jpeg" class="d-block w-100" alt="mobil">
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<?php
// Inisialisasi variabel untuk menampung nilai input agar tidak hilang saat submit
$nama = isset($_POST['nama']) ? $_POST['nama'] : '';
$hargamobil = isset($_POST['hargamobil']) ? $_POST['hargamobil'] : '';
$tenor = isset($_POST['tenor']) ? $_POST['tenor'] : '';
$dp = isset($_POST['dp']) ? $_POST['dp'] : '';
$error_msg = "";
$sukses = false;

if (isset($_POST['hitung'])) {
    if (empty($nama)) {
        $error_msg = "Nama harus diisi!";
    } elseif (empty($hargamobil) || $hargamobil <= 0) {
        $error_msg = "Harga mobil harus diisi dengan angka yang valid!";
    } elseif (empty($tenor)) {
        $error_msg = "Silakan pilih tenor (tahun) terlebih dahulu!";
    } elseif (empty($dp)) {
        $error_msg = "Silakan pilih persentase DP terlebih dahulu!";
    } else {
        $sukses = true;
        $hargadpmobil = ($dp / 100) * $hargamobil;
        $lamaangsuran = $tenor * 12;
        $bunga = (20 / 100) * $hargamobil; 
        $jumlahangsuran = ($hargamobil + $bunga - $hargadpmobil) / $lamaangsuran;
    }
}
?>

<!--KALKULATOR DAN PERHITUNGAN-->
<section class="kalkulator">
 <h2>Perhitungan</h2>
 <br>
 
    <!-- Tampilkan Pesan Error jika ada -->
    <?php if (!empty($error_msg)): ?>
        <div class="alert alert-danger" role="alert" style="max-width: 400px;">
            <?php echo $error_msg; ?>
        </div>
    <?php endif; ?>

    <form action="" method="post">
        <label for="">Nama</label>
        <input type="text" name="nama" value="<?php echo htmlspecialchars($nama); ?>" required>

        <br> <br>
        <label for="">Harga Mobil</label>
        <input type="number" name="hargamobil" value="<?php echo htmlspecialchars($hargamobil); ?>" required>

        <p>Tenor</p>
        <input type="radio" name="tenor" value="1" <?php if ($tenor == 1) echo "checked"; ?> required>
        <label for="">1 Tahun</label>
        <input type="radio" name="tenor" value="2" <?php if ($tenor == 2) echo "checked"; ?>>
        <label for="">2 Tahun</label>
        <input type="radio" name="tenor" value="3" <?php if ($tenor == 3) echo "checked"; ?>>
        <label for="">3 Tahun</label>
        <input type="radio" name="tenor" value="4" <?php if ($tenor == 4) echo "checked"; ?>>
        <label for="">4 Tahun</label>
        <input type="radio" name="tenor" value="5" <?php if ($tenor == 5) echo "checked"; ?>>
        <label for="">5 Tahun</label>

        <br> <br>
        <label for="DP">DP</label>
        <select name="dp" id="" required>
            <option value="">-- Pilih DP --</option>
            <option value="10" <?php if ($dp == 10) echo "selected"; ?>>10%</option>
            <option value="20" <?php if ($dp == 20) echo "selected"; ?>>20%</option>
            <option value="30" <?php if ($dp == 30) echo "selected"; ?>>30%</option>
            <option value="40" <?php if ($dp == 40) echo "selected"; ?>>40%</option>
            <option value="50" <?php if ($dp == 50) echo "selected"; ?>>50%</option>
        </select>

        <br> <br>
        <input type="submit" value="Hitung" name="hitung">
    </form>
</section>

<?php if ($sukses): ?>
<div class="hasil">
 <h2>Hasil</h2>
 <br>
    <?php
    echo "Nama = " . htmlspecialchars($nama) . "<br> <br>";
    echo "Harga Mobil = Rp " . number_format($hargamobil, 0, ',', '.') . "<br> <br>";
    echo "Tenor = " . $tenor . " Tahun <br> <br>";
    echo "DP = " . $dp . "% <br> <br>";
    echo "Lama Angsuran = " . $lamaangsuran . " Bulan <br> <br>";
    echo "DP Mobil = Rp " . number_format($hargadpmobil, 0, ',', '.') . "<br> <br>";
    echo "Bunga = Rp " . number_format($bunga, 0, ',', '.') . "<br> <br>";
    echo "Angsuran per Bulan = Rp " . number_format($jumlahangsuran, 0, ',', '.') . "<br> <br>";
    ?>
</div>
<?php endif; ?>

<footer class="footer" id="kontak">
  <p>
    <b>AeroDrive</b>
  </p>
  <p>Solusi Kredit Mobil Impian Anda</p>
        <span><i class="bi bi-telephone-fill me-2"></i>0888-0693-7012</span>
        <span><i class="bi bi-envelope-fill me-2"></i>aerodrive@car.com</span>
</footer>

<!-- Bootstrap JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>