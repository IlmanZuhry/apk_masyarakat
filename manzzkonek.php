<?php
class manz{
	var $ilmanhost = "localhost";
    var $user = "root";
    var $pass = "";
    var $dbname = "manz_lapor";
	var $koneksi ="";
	
	function __construct(){
		$this->koneksi=mysqli_connect($this->ilmanhost,$this->user,$this->pass,$this->dbname);
		if(mysqli_connect_errno()){
			echo"Koneksi gagal:".mysqli_connect_error();
		}
		
	}
	function connectMySQL(){
		$koneksi=mysqli_connect($this->ilmanhost,$this->user,$this->pass,$this->dbname);
		if(!$koneksi){
			die("Koneksi gagal:".mysqli_connect_error());
		}
	}
	function manzaddData1($id,$tgl,$nik,$nama,$isi,$foto,$status){
		$query="INSERT INTO pengaduan(Id_pengaduan,Tgl_pengaduan,Nik,Nama,Isi_laporan, Foto, Status)
		        VALUES('$id','$tgl','$nik','$nama','$isi','$foto','$status')";
		$hasil=mysqli_query($this->koneksi,$query);
        if($hasil)echo"<script>
		alert('Simpan data sukses');
		header('location:manzinput.php');
		    </script>";
        else echo "gagal";		
	}
	function upload($id,$tgl,$nik,$nama,$isi,$foto,$status){
	$tipe =$_FILES['foto']['type'];
	if(	$tipe != "image/jpg" AND
		$tipe != "image/jpeg" AND
		$tipe != "image/pjpeg" AND
		$tipe != "image/png" AND
		$tipe != "image/gif"
		)
	echo '<p><b>Upload Gagal</b></p>
		<p>Tipe file yang diperbolehkan jpg, jpeg, pjpeg, png atau gif.</p>
		<p><a href="pengaduan.php">ULANGI</p></p>';	
		
	
		
		$direktori="gambar/";
			//upload gambar
			move_uploaded_file($_FILES['foto']['tmp_name'],$direktori.$foto);
			
			//simpan data gambar
			mysqli_query($this->koneksi,"INSERT INTO pengaduan VALUES 
			                          ('$id', '$tgl', '$nik', '$nama','$isi','$foto','$status')")or die(mysqli_error($this->koneksi));
			echo"<script>
		alert('Simpan data sukses');
		header('location:pengaduan.php');
		    </script>";
		
	}
	function manztanggapan($idtgp,$idpgn,$tgl,$tgp,$idptg,$status){
		$query="INSERT INTO tanggapan(Id_tanggapan,Id_pengaduan,Tgl_tanggapan,Tanggapan,Id_petugas,Status)
		        VALUES('$idtgp','$idpgn','$tgl','$tgp','$idptg','$status')";
		$hasil=mysqli_query($this->koneksi,$query);
        if($hasil)echo"<script>
		alert('Simpan data sukses');
		header('location:manzinput.php');
		    </script>";
        else echo "gagal";		
	}
	function manztampilData1(){
		$query=mysqli_query($this->koneksi,"SELECT *FROM pengaduan WHERE Status='0' ");
		while($row=mysqli_fetch_array($query))
			$data[]=$row;
		return $data;
	}
	function manztampilData2(){
		$query=mysqli_query($this->koneksi,"SELECT *FROM pengaduan WHERE Status='Proses' ");
		while($row=mysqli_fetch_array($query))
			$data[]=$row;
		return $data;
	}
	function manztampilall(){
		$query=mysqli_query($this->koneksi,"SELECT *FROM pengaduan ");
		while($row=mysqli_fetch_array($query))
			$data[]=$row;
		return $data;
	}
	function manztampilDatanik($nik){
		$query=mysqli_query($this->koneksi,"SELECT *FROM pengaduan WHERE Nik='$nik' ");
		if(mysqli_num_rows($query)== 0){
			echo"<center>Tidak ada data tersedia</center>";
		}else{
		while($row=mysqli_fetch_array($query))
			$data[]=$row;
		return $data;
		}
	}
	function manztampilDatanik2($nik){
		$query=mysqli_query($this->koneksi,"SELECT pengaduan.Id_pengaduan, pengaduan.Tgl_pengaduan, pengaduan.Nik,pengaduan.Nama,pengaduan.Isi_laporan,pengaduan.Foto,pengaduan.Status,
		tanggapan.Id_tanggapan,tanggapan.Tgl_tanggapan,tanggapan.Tanggapan FROM pengaduan INNER JOIN tanggapan ON pengaduan.Id_pengaduan=tanggapan.Id_pengaduan WHERE pengaduan.Nik='$nik' ");
		if(mysqli_num_rows($query)== 0){
			echo"<center>Tidak ada data tersedia</center>";
		}else{
		while($row=mysqli_fetch_array($query))
			$data[]=$row;
		return $data;
		}
	}
	function manztampilData3(){
		$query=mysqli_query($this->koneksi,"SELECT *FROM tanggapan Id");
		while($row=mysqli_fetch_array($query))
			$data[]=$row;
		return $data;
	}
	function manztampilData4($id){
		$query=mysqli_query($this->koneksi,"SELECT *FROM tanggapan WHERE Id_pengaduan='$id'");
		if(mysqli_num_rows($query)== 0){
			echo"<center>Tidak ada data tersedia</center>";
		}else{
		while($row=mysqli_fetch_array($query))
			$data[]=$row;
		return $data;
		}
	}
	function manzupdateData1($id,$tgl,$nik,$nama,$isi,$status){
		$query="UPDATE pengaduan SET Id_pengaduan='$id',Tgl_pengaduan='$tgl',Nik='$nik',Nama='$nama',Isi_laporan='$isi',Status='$status' WHERE Id_pengaduan='$id'";
		mysqli_query($this->koneksi,$query);
		echo"<script>
		alert('Verifikasi data sukses');
		header('location:tampilpengaduan.php');
		    </script>";
	}
	function manzupdateData2($id,$status){
		$query="UPDATE pengaduan SET Status='$status'WHERE Id_pengaduan='$id'";
		mysqli_query($this->koneksi,$query);
		
	}
	function manzupdateData3($id,$tgp){
		$query="UPDATE tanggapan SET Tanggapan='$tgp'WHERE Id_pengaduan='$id'";
		mysqli_query($this->koneksi,$query);
		
	}
	function manzhapusData1($id){
		$query=mysqli_query($this->koneksi,"DELETE FROM pengaduan WHERE Id_pengaduan='$id'");
		echo"<script>
		alert('Hapus data sukses');
		header('location:tes.php');
		    </script>";
	}
	function kode(){
		$query = mysqli_query($this->koneksi, "SELECT max(Id_pengaduan) as kodeTerbesar FROM pengaduan");
$data = mysqli_fetch_array($query);
$kode = $data['kodeTerbesar'];
 
$urutan = (int) substr($kode, 2, 3);
 
// bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
$urutan++;
 
$huruf = "P";
$kode = $huruf . sprintf("%03s", $urutan);
echo $kode;
		
	}
	function codetgp(){
		$query = mysqli_query($this->koneksi, "SELECT max(Id_tanggapan) as kodeTerbesar FROM tanggapan");
$data = mysqli_fetch_array($query);
$kode = $data['kodeTerbesar'];
 
$urutan = (int) substr($kode, 3, 3);
 
// bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
$urutan++;
 
$huruf = "TGP";
$kode = $huruf . sprintf("%02s", $urutan);
echo $kode;
	}
	function manzbacaData1($field,$id){
		$query="SELECT *FROM pengaduan WHERE Id_pengaduan='$id'";
		$hasil=mysqli_query($this->koneksi,$query);
		$data=mysqli_fetch_array($hasil);
		if($field=='Id_pengaduan')
			return $data['Id_pengaduan'];
   else if($field=='Tgl_pengaduan')
	        return $data['Tgl_pengaduan'];
   else if($field=='Nik')
	        return $data['Nik'];
   else if($field=='Nama')
	        return $data['Nama'];
   else if($field=='Isi_laporan')
	        return $data['Isi_laporan'];
   else if($field=='Foto')
	        return $data['Foto'];
   else if($field=='Status')
	        return $data['Status'];
	}
	
	function manzbacaData2($field,$id){
		$query="SELECT *FROM tanggapan WHERE Id_pengaduan='$id'";
		$hasil=mysqli_query($this->koneksi,$query);
		$data=mysqli_fetch_array($hasil);
		if($field=='Id_pengaduan')
			return $data['Id_pengaduan'];
   else if($field=='Tgl_tanggapan')
	        return $data['Tgl_tanggapan'];
   else if($field=='Tanggapan')
	        return $data['Tanggapan'];
   else if($field=='Status')
	        return $data['Status'];
	}
	
}
?>