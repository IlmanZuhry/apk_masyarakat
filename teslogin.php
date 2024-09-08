<?php
session_start();

class connection{
	public $host   ="localhost";
	public $user   ="root";
	public $pass   ="";
	public $dbname ="manz_lapor";
	public $manzconn;
	
	public function __construct(){
		$this->manzconn =mysqli_connect($this->host,$this->user,$this->pass,$this->dbname);
	}
	public function getconnection(){
		return $this->manzconn;
	}
}

/*class Register extends connection{
	public function registration($nik, $nama, $jk, $alamat,$username, $password,$telp,$confirmpassword)
	{
		$manzconn = $this->getconnection();

		$duplicate = mysqli_query($manzconn, "SELECT * FROM masyarakat WHERE username = '$username'");
		$kabupaten = preg_match('@Medan Deli@', $alamat);

		if(mysqli_num_rows($duplicate)>0)
		{
			return 10;
			// Akun sudah ada//
		}
		else{
			if($password == $confirmpassword && $kabupaten)
			{
				$query = "INSERT INTO masyarakat VALUES('$nik', '$nama', '$jk', '$alamat', '$username', '$password','$telp')";
				mysqli_query($manzconn, $query);
				return 1;
				// Registrasi berhasil
			}
			else{
				return 100;
				// Ada kesalahan pada process registrasi
			}
		}
	}
}*/

class Regis extends connection{
	
	public function regis($nik){
		$result=mysqli_query($this->manzconn,"SELECT *FROM masyarakat WHERE Nik ='$nik'");
		$row=mysqli_fetch_assoc ($result);
		
		if(mysqli_num_rows($result)>0)
		{
			if($nik ==$row["Nik"])
			{
				$this->Nik   =$row["Nik"];
				
				return 1;
			}
			else{
				return 10;
			}
		}
		else{
			return 100;
		}
	}
	public function Nikuser()
	{
		return $this->Nik;
	}
}


//login masyarakat
class Login extends connection{
	public $nik;
	public function signin($username,$password){
		$result=mysqli_query($this->manzconn,"SELECT *FROM masyarakat WHERE username ='$username'");
		$row=mysqli_fetch_assoc ($result);
		
		if(mysqli_num_rows($result)>0)
		{
			if($password ==$row["Password"])
			{
				$this->Nik   =$row["Nik"];
				
				return 1;
			}
			else{
				return 10;
			}
		}
		else{
			return 100;
		}
	}
	public function Nikuser()
	{
		return $this->Nik;
	}
}

//login petugas
class Loginptg extends connection{
	public $id;
	public $level;
	public function signinptg($username,$password){
		$result=mysqli_query($this->manzconn,"SELECT *FROM petugas WHERE Username ='$username'");
		$row=mysqli_fetch_assoc ($result);
		
		if(mysqli_num_rows($result)>0)
		{
			if($password ==$row["Password"])
			{
				$this->Id_petugas =$row["Id_petugas"];
				$this->Level=$row["Level"];
				return 1;
			}
			else{
				return 10;
			}
		}
		else{
			return 100;
		}
	}
	public function Iduser()
	{
		return $this->Id_petugas;
	}
	public function Leveluser()
	{
		return $this->Level;
	}
}


class Select extends connection{
	public function selectUserByNik($nik){
		$result=mysqli_query($this->manzconn,"SELECT *FROM masyarakat WHERE Nik='$nik'");
		return mysqli_fetch_assoc($result);
	}
	public function selectPtg($id){
		$result=mysqli_query($this->manzconn,"SELECT *FROM petugas WHERE Id_petugas='$id'");
		return mysqli_fetch_assoc($result);
	}
	function manzregis($nik,$username,$password){
		$query="UPDATE masyarakat SET Username='$username',Password='$password' WHERE Nik='$nik'";
		mysqli_query($this->manzconn,$query);
		echo"<script>
		alert('Registrasi sukses');
		    </script>";
	}
	
	public function manztampilDatanik($nik){
		$query=mysqli_query($this->manzconn,"SELECT *FROM pengaduan WHERE Nik='$nik' ");
		while($row=mysqli_fetch_array($query))
			$data[]=$row;
		return $data;
	}
}
?>