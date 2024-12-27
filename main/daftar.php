<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wisata Batur - Situ Cipanten</title>
    <link rel="stylesheet" href="../asset/CSS/pemesanan.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <header>
        <div class="logo">WISATA <span>BATUR</span></div>
        <nav>
            <a href="../main/index.php">Home</a>
            <a href="../main/index.php#kontak-form">Kontak</a>
            <a href="#">Pemesanan</a>
			<a href="../main/daftar.php">Daftar</a>
        </nav>
    </header>


<?php
include '../lib/koneksi.php';

$sql = "SELECT * FROM pemesanan where is_deleted = 0 order by created_at desc";

$query = mysqli_query($db,$sql);

if(mysqli_num_rows($query)==0)
{
    echo 'tidak ada'; exit;
}else{
    $detail = mysqli_fetch_row($query);
?>
<h1 class="text-center py-4">Daftar Pemesanan</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama Pemesan</th>
      <th scope="col">Nomor HP</th>
      <th scope="col">Tanggal Berangkat</th>
      <th scope="col">Total Tagihan</th>
      <th scope="col">Detail</th>
    </tr>
  </thead>
  <tbody>
      <?php
      $co = 1;
      while($detail = mysqli_fetch_assoc($query)){
      ?>
    <tr>
      <th scope="row"><?=$co?></th>
      <td><?=$detail['nama_pemesanan']?></td>
      <td><?=$detail['hp_pemesan']?></td>
      <td><?=$detail['waktu_wisata']?></td>
      <td><?=$detail['total_tagihan']?></td>
      <td><a href="detail.php?id_pemesanan=<?=$detail['id_pemesanan']?>">Detail</a> 
      <a href="edit.php?id_pemesanan=<?=$detail['id_pemesanan']?>">Edit</a> 
      <a href="hapus.php?id_pemesanan=<?=$detail['id_pemesanan']?>">Hapus</a></td>
    </tr>
        <?php
        $co++;
        }
        ?>
  </tbody>
</table>
<?php
} 
?>

<footer class="footer">
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