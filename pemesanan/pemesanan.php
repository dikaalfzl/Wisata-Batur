<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wisata Batur - Situ Cipanten</title>
    <link rel="stylesheet" href="../asset/CSS/pemesanan.css">
</head>
<body>
    <header>
        <div class="logo">WISATA <span>BATUR</span></div>
        <nav>
            <a href="../beranda/index.php">Home</a>
            <a href="../beranda/index.php#kontak-form">Kontak</a>
            <a href="#">Pemesanan</a>
        </nav>
    </header>

<main class="flex-shrink-0">
  <div class="container">
    <form method="post" action="proses.php">
<div class="card mt-2">
  <div class="card-header bg-dark text-white">
    Form Pemesanan Paket Wisata
  </div>
  <div class="card-body">
	<div class="mb-3">
	  <label for="nama_pemesanan" class="form-label">Nama Lengkap</label>
	  <input type="text" class="form-control" id="nama_pemesanan" name="nama_pemesanan" placeholder="Nama Lengkap Sesuai Tanda Pengenal" required>
	</div>
	<div class="mb-3">
	  <label for="hp_pemesan" class="form-label">Nomor Handphone</label>
	  <input type="text" class="form-control" id="hp_pemesan" name="hp_pemesan" placeholder="Nomor Handphone 08..." required>
	</div>
	<div class="mb-3">
	  <label for="waktu_wisata" class="form-label">Waktu Mulai Perjalanan</label>
	  <input type="date" class="form-control" id="waktu_wisata" name="waktu_wisata" placeholder="Waktu Mulai Perjalanan" required>
	</div>
	<div class="mb-3">
	  <label for="hari_wisata" class="form-label">Hari Wisata</label>
	  <input type="number" class="form-control" id="hari_wisata" value="1" name="hari_wisata" placeholder="Jumlah Hari Perjalanan" required>
	</div>
	<div class="mb-3">
	    <div class="form-check">
		  <input class="form-check-input" type="checkbox" name="pesan_tiket" value="1" id="pesan_tiket">
		  <label class="form-check-label" for="pesan_tiket">
			Tiket Masuk (Rp. 10.000)
		  </label>
		</div>
	</div>
	<div class="mb-3">
	    <div class="form-check">
		  <input class="form-check-input" type="checkbox" name="kapal_dayung" value="1" id="kapal_dayung">
		  <label class="form-check-label" for="kapal_dayung">
			Kapal Dayung (Rp. 10.000)
		  </label>
		</div>
	</div>
	<div class="mb-3">
	    <div class="form-check">
		  <input class="form-check-input" type="checkbox" name="ayunan" value="1" id="ayunan">
		  <label class="form-check-label" for="ayunan">
			Ayunan (Rp. 5.000)
		  </label>
		</div>
	</div>
	<div class="mb-3">
	    <div class="form-check">
		  <input class="form-check-input" type="checkbox" name="bebek_goes" value="1" id="bebek_goes">
		  <label class="form-check-label" for="bebek_goes">
			Bebek Goes (Rp. 20.000)
		  </label>
		</div>
	</div>
	<div class="mb-3">
	    <div class="form-check">
		  <input class="form-check-input" type="checkbox" name="sepeda_gantung" value="1" id="sepeda_gantung">
		  <label class="form-check-label" for="sepeda_gantung">
			Sepeda Gantung (Rp. 25.000)
		  </label>
		</div>
	</div>
	<div class="mb-3">
	    <div class="form-check">
		  <input class="form-check-input" type="checkbox" name="pelampung" value="1" id="pelampung">
		  <label class="form-check-label" for="pelampung">
			Pelampung (Rp. 10.000)
		  </label>
		</div>
	</div>

	<div class="mb-3">
	  <label for="jumlah_peserta" class="form-label">Jumlah Peserta</label>
	  <input type="number" class="form-control" id="jumlah_peserta" value="1" name="jumlah_peserta" placeholder="Jumlah Hari Perjalanan" required>
	</div>
	<div class="mb-3">
	  <label for="harga" class="form-label">Harga Paket</label>
	  <input type="number" class="form-control" id="harga" name="harga" placeholder="Harga Paket" readonly>
	</div>
	<div class="mb-3">
	  <label for="total" class="form-label">Total Tagihan</label>
	  <input type="number" class="form-control" id="total" name="total" placeholder="Total Paket" readonly>
	</div>
  </div>
  <div class="card-footer">
    <input type="submit" class="btn btn-primary" value="Simpan">
	<input type="reset" class="btn btn-danger" value="Ulangi">
  </div>
</div>
<script>
//tentukan konstanta biaya masing-masing
const pesan_tiket = 10000;
const kapal_dayung = 10000;
const ayunan = 5000;
const bebek_goes = 20000;
const sepeda_gantung = 25000;
const pelampung = 10000;

function updateTotalCost()
{
	//inisisi harga paket 0
	let totalCost = 0;
	
	//referensi dari checkbox
	const tiketCheckbox = document.getElementById('pesan_tiket');
	const kapalCheckbox = document.getElementById('kapal_dayung');
	const ayunCheckbox = document.getElementById('ayunan');
	const bebekCheckbox = document.getElementById('bebek_goes');
	const sepedaCheckbox = document.getElementById('sepeda_gantung');
	const lampungCheckbox = document.getElementById('pelampung');

	if(tiketCheckbox.checked)
	{
		totalCost+=pesan_tiket;
	}
	
	if(kapalCheckbox.checked)
	{
		totalCost+=kapal_dayung;
	}
	
	if(ayunCheckbox.checked)
	{
		totalCost+=ayunan;
	}
	
	if(bebekCheckbox.checked)
	{
		totalCost+=bebek_goes;
	}

	if(sepedaCheckbox.checked)
	{
		totalCost+=sepeda_gantung;
	}

	if(lampungCheckbox.checked)
	{
		totalCost+=pelampung;
	}
	
	document.getElementById('harga').value = totalCost;
}

function updateTotal()
{
	let TotalTagihan = 0;
	
	var hari_wisata = document.getElementById('hari_wisata').value;
	var jumlah_peserta = document.getElementById('jumlah_peserta').value;
	var harga = document.getElementById('harga').value;
	
	TotalTagihan = hari_wisata * jumlah_peserta * harga;
	
	document.getElementById('total').value = TotalTagihan;
}

document.getElementById('pesan_tiket').addEventListener('change', updateTotalCost);
document.getElementById('kapal_dayung').addEventListener('change', updateTotalCost);
document.getElementById('ayunan').addEventListener('change', updateTotalCost);
document.getElementById('bebek_goes').addEventListener('change', updateTotalCost);
document.getElementById('sepeda_gantung').addEventListener('change', updateTotalCost);
document.getElementById('pelampung').addEventListener('change', updateTotalCost);

document.getElementById('pesan_tiket').addEventListener('change', updateTotal);
document.getElementById('kapal_dayung').addEventListener('change', updateTotal);
document.getElementById('ayunan').addEventListener('change', updateTotal);
document.getElementById('bebek_goes').addEventListener('change', updateTotal);
document.getElementById('sepeda_gantung').addEventListener('change', updateTotal);
document.getElementById('pelampung').addEventListener('change', updateTotal);

document.getElementById('hari_wisata').addEventListener('change', updateTotalCost);
document.getElementById('jumlah_peserta').addEventListener('change', updateTotalCost);

document.getElementById('hari_wisata').addEventListener('change', updateTotal);
document.getElementById('jumlah_peserta').addEventListener('change', updateTotal);

updateTotalCost();
updateTotal();
</script>  </div>
</main>

<<footer class="footer">
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
</body>
</html>