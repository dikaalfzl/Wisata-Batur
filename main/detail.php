<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wisata Batur - Situ Cipanten</title>
    <link rel="stylesheet" href="../asset/CSS/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <header class="fixed-top d-print-none">
        <div class="logo">WISATA <span>BATUR</span></div>
        <nav>
            <a href="#title-section">Home</a>
            <a href="#kontak-form">Kontak</a>
            <a href="../main/pemesanan.php">Pemesanan</a>
            <a href="../main/daftar.php">Daftar</a>
        </nav>
    </header>    

	<section class="title-section py-5 d-print-none" id="title-section">
        <h3>WISATA</h3>
        <h1>SITU CIPANTEN</h1>
    </section>
    
	<?php
include '../lib/koneksi.php';

$id_pemesanan = htmlentities($_GET['id_pemesanan']);

$sql = "SELECT * FROM pemesanan where id_pemesanan = '$id_pemesanan' and is_deleted=0";

$query = mysqli_query($db,$sql);

if(mysqli_num_rows($query)==0)
{
    echo 'tidak ada'; exit;
}else{
    $detail = mysqli_fetch_row($query);
?>

<main class="flex-shrink-0">
  <div class="container">
    <form method="post" action="proses.php">
<div class="card mt-2">
  <div class="card-header bg-dark text-white">
    Detail Pemesanan Paket Wisata #<?=$detail[0]?>
  </div>
  <div class="card-body">
	<div class="mb-3">
	  <label for="nama_pemesanan" class="form-label">Nama Lengkap</label>
	  <div id="nama_pemesan"><?=$detail[1]?></div>
	</div>
	<div class="mb-3">
	  <label for="hp_pemesan" class="form-label">Nomor Handphone</label>
	  <div id="hp_pemesan"><?=$detail[2]?></div>
	</div>
	<div class="mb-3">
	  <label for="waktu_wisata" class="form-label">Waktu Mulai Perjalanan</label>
	  <div id="waktu_wisata"><?=$detail[3]?></div>
	</div>
	<div class="mb-3">
	  <label for="hari_wisata" class="form-label">Hari Wisata</label>
	  <div id="hari_wisata"><?=$detail[4]?></div>
	</div>
	<div class="mb-3">
	    <div class="form-check">
		  <input class="form-check-input" type="checkbox" name="pesan_tiket" value="1" id="pesan_tiket" <?=($detail[5]==1)?'checked':''?> disabled>
		  <label class="form-check-label" for="pesan_tiket">
			Tiket Masuk (Rp. 10.000)
		  </label>
		</div>
	</div>
	<div class="mb-3">
	    <div class="form-check">
		  <input class="form-check-input" type="checkbox" name="kapal_dayung" value="1" id="kapal_dayung" <?=($detail[6]==1)?'checked':''?> disabled>
		  <label class="form-check-label" for="kapal_dayung">
			Kapal Dayung (Rp. 10.000)
		  </label>
		</div>
	</div>
	<div class="mb-3">
	    <div class="form-check">
		  <input class="form-check-input" type="checkbox" name="ayunan" value="1" id="ayunan" <?=($detail[7]==1)?'checked':''?> disabled>
		  <label class="form-check-label" for="ayunan">
			Ayunan (Rp. 5.000)
		  </label>
		</div>
	</div>
	<div class="mb-3">
	    <div class="form-check">
		  <input class="form-check-input" type="checkbox" name="bebek_goes" value="1" id="bebek_goes" <?=($detail[8]==1)?'checked':''?> disabled>
		  <label class="form-check-label" for="bebek_goes">
			Bebek Goes (Rp. 20.000)
		  </label>
		</div>
	</div>
	<div class="mb-3">
	    <div class="form-check">
		  <input class="form-check-input" type="checkbox" name="sepeda_gantung" value="1" id="sepeda_gantung" <?=($detail[9]==1)?'checked':''?> disabled>
		  <label class="form-check-label" for="sepeda_gantung">
			Sepeda Gantung (Rp. 25.000)
		  </label>
		</div>
	</div>
	<div class="mb-3">
	    <div class="form-check">
		  <input class="form-check-input" type="checkbox" name="pelampung" value="1" id="pelampung" <?=($detail[10]==1)?'checked':''?> disabled>
		  <label class="form-check-label" for="pelampung">
			Pelampung (Rp. 10.000)
		  </label>
		</div>
	</div>
	<div class="mb-3">
	  <label for="jumlah_peserta" class="form-label">Jumlah Peserta</label>
	   <div id="jumlah_peserta"><?=$detail[11]?></div>
	 </div>
	<div class="mb-3">
	  <label for="total" class="form-label">Total Tagihan</label>
	  <div id="total">Rp. <?=number_format($detail[12],0,',','.')?></div>
	</div>
	<div class="mb-3">
	  <label for="created_at" class="form-label">Waktu Pemesanan</label>
	  <div id="created_at"><?=$detail[13]?></div>
	</div>
  </div>
  <div class="card-footer d-print-none">
    <a href="pemesanan.php?aksi=pesan" class="btn btn-primary">Buat Pesanan Baru</a>
	<a href="#" onclick="window.print()" class="btn btn-success">Cetak</a>
  </div>
</div>
<?php } ?>

     

    <footer class="footer d-print-none">
        <div class="footer-container">
            <div class="footer-logo">
                <span>WISATA <span class="highlight">BATUR</span></span>
            </div>
            <nav class="footer-nav">
                <a href="#">About Us</a>
                <a href="#">Stories</a>
                <a href="#kontak-form">Contact</a>
                <a href="#">Privacy Policy</a>
                <a href="#">Terms</a>
            </nav>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>
