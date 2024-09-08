<?php
 
$koneksi=mysqli_connect("localhost","root","","manz_lapor");

$query = mysqli_query($koneksi, "SELECT max(Id_tanggapan) as kodeTerbesar FROM tanggapan");
$data = mysqli_fetch_array($query);
$kode = $data['kodeTerbesar'];
 
$urutan = (int) substr($kode, 3, 3);
 
// bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
$urutan++;
 
$huruf = "TGP";
$kode = $huruf . sprintf("%02s", $urutan);
echo $kode;

?>