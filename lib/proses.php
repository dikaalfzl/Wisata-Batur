<?php
include 'koneksi.php';

if(isset($_POST['nama_pemesanan'])){
    //eksekusi simpan
    //echo '<pre>';
    //var_dump($_POST);
    
    //definisikan setiap variabel
    $nama_pemesanan = htmlentities($_POST['nama_pemesanan']);
	$hp_pemesan = htmlentities($_POST['hp_pemesan']);
	$waktu_wisata = htmlentities($_POST['waktu_wisata']);
	$hari_wisata = htmlentities($_POST['hari_wisata']);
	$jumlah_peserta = htmlentities($_POST['jumlah_peserta']);
	$total_tagihan = htmlentities($_POST['total']);
	
	//pengkondisian jika salah satu paket tidak dipilih
	$pesan_tiket = isset($_POST['pesan_tiket'])?1:0;
	$kapal_dayung = isset($_POST['kapal_dayung'])?1:0;
	$ayunan = isset($_POST['ayunan'])?1:0;
	$bebek_goes = isset($_POST['bebek_goes'])?1:0;
    $sepeda_gantung = isset($_POST['sepeda_gantung'])?1:0;
    $pelampung = isset($_POST['pelampung'])?1:0;

	$sql = "INSERT INTO pemesanan (`nama_pemesanan`, `hp_pemesan`, `waktu_wisata`, `hari_wisata`, `pesan_tiket`, `kapal_dayung`, `ayunan`, `bebek_goes`, `sepeda_gantung`, `pelampung`, `jumlah_peserta`, `total_tagihan`) value ('$nama_pemesanan','$hp_pemesan','$waktu_wisata','$hari_wisata', '$pesan_tiket', '$kapal_dayung', '$ayunan', '$bebek_goes', '$sepeda_gantung', '$pelampung','$jumlah_peserta','$total_tagihan')";
	$query = mysqli_query($db,$sql);
	if($query){ 
	    // $id_pemesanan = mysqli_insert_id($db);
	    // header('Location: ../index.php?aksi=detail&id_pemesanan='.$id_pemesanan);
	    //echo $id_pemesanan;
        echo 'berhasil';
	}else{ echo 0; }
}else{
    //muncul pesan error
    echo 'Ngapain?';
}
?>