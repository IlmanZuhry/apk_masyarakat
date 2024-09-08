<?php
require 'teslogin.php';
if(!empty($_SESSION["Nik"])){
	header("");
}

$Regis=new Regis();
if(isset($_POST["submit"])){
	$result=$Regis->regis($_POST["nik"]);
	
	if($result ==1){
		$_SESSION["Regis"]=true;
		$_SESSION["nik"]=$Regis->Nikuser();
		
		if($_SESSION["nik"]){
			header("Location:regis2.php");
		}
		
	}
	elseif($result == 100){
		echo "<script>alert('Nik Tidak Terdaftar');</script>";
	}
}
?>

<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<title>Register</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<style>
		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
		}

		body {
			display: flex;
			justify-content: center;
			align-items: center;
			min-height: 100vh;
			background: deepskyblue;
		}

		.container {
			width: 100;
			display: flex;
			max-width: 850px;
			background: #fff;
			border-radius: 15px;
			box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
		}

		.regis {
			width: 600px;
		}

		form {
			width: 230px;
			margin: 60px auto;
		}

		/* h4 {
			margin: 20px;
			text-align: justify;
			font-weight: bolder;
			text-transform: uppercase;
		} */

		hr {
			border-top: 2px solid deepskyblue;
		}

		h5 {
			text-align: center;
			margin: 10px;
			font-size: larger;
			font-weight: bolder;
			text-transform: uppercase;

		}

		.right img {
			width: 500px;
			height: 100%;
			border-top-right-radius: 20px;
			border-bottom-right-radius: 20px;
		}

		form label {
			display: block;
			font-size: 15px;
			font-weight: 600;
		}

		input {
			width: 100%;
			margin: 2px;
			border: none;
			outline: none;
			padding: 8px;
			border-radius: 5px;
			border: 1px solid gray;
		}

		select {
			width: 100%;
			margin: 2px;
			border: none;
			outline: none;
			padding: 8px;
			border-radius: 5px;
			border: 1px solid gray;
		}

		button {
			border: none;
			outline: none;
			padding: 10px;
			width: 233px;
			color: white;
			font-size: 16px;
			cursor: pointer;
			margin-top: 20px;
			border-radius: 5px;
			background: deepskyblue;
		}

		button:hover {
			background: rgba(214, 86, 64, 1);
		}

		@media (max-width: 880px) {
			.container {
				width: 100%;
				max-width: 750px;
				margin-left: 20px;
				margin-right: 20px;
			}

			form {
				width: 300px;
				margin: 20px auto;
			}

			.regis {
				width:350px;
	background:rgb(45, 139, 226);
	margin:80px auto;
	padding:30px 20px;
	box-shadow:0px 0px 100px 4px #d6d6d6;
			}

			button {
				width: 100%;
			}

			.right img {
				width: 100%;
				height: 100%;
			}
		}
	</style>
</head>

<body>
	<div class="container">
		
		<div class="regis">
			<br>
		
			<form class="" action="regis.php" method="post" autocomplete="off">
				<h3>Registrasi Akun</h3>
				<hr>
				<h5>Register</h5>
				<label for="">Nik </label>
				<input type="text" name="nik" required value="">
				<button type="submit" name="submit">Register</button>
				<br> <br>
				<a href="login.php" class="btn btn-danger  btn-block width"  style="width: 233px;">Kembali</a>
			</form>
		</div>
		
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>