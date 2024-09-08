<?php
require 'teslogin.php';
if(!empty($_SESSION["Nik"])){
	header("");
}

$login=new Login();
if(isset($_POST["submit"])){
	$result=$login->signin($_POST["username"],$_POST["password"]);
	
	if($result ==1){
		$_SESSION["Login"]=true;
		$_SESSION["nik"]=$login->Nikuser();
		
		if($_SESSION["nik"]){
			header("Location:dashboarduser.php");
		}
		
	}
	elseif($result == 10){
		echo "<script>alert('Wrong Password');</script>";
	}
	elseif($result == 100){
		echo "<script>alert('User Not Registered');</script>";
	}
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Login</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">

    

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<main class="form-signin">
  <form class="" action="login.php" method="post" >
    <img class="mb-4" src="gambar/logoo.png" alt="" width="77" height="57">
    <h1 class="h3 mb-3 fw-normal">Login</h1>
    <div class="form-floating">
      <input type="varchar" class="form-control" id="floatingInput" placeholder="name@example.com" name="username" required >
      <label for="floatingInput">Username</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password" required>
      <label for="floatingPassword">Password</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        
      </label>
    </div>
    <button type="submit"class="w-100 btn btn-lg btn-primary" name="submit">Sign in</button>
	<div class="checkbox mb-3">
     
    </div>
	<a href="regis.php"><button type="button"class="w-100 btn btn-lg btn-danger" name="submit">Register</button></a>
	<a href="index.php">Kembali</a>
    <p class="mt-5 mb-3 text-muted">&copy; Ilman Zuhry 2023</p>
  </form>
</main>


    
  </body>
</html>
