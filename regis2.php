<?php
require 'teslogin.php';
$select=new Select();

if(!empty($_SESSION["nik"])){
	$user=$select->selectUserByNik($_SESSION["nik"]);
}
else{
	header("Location:regis.php");
}
?>


<?php
							
                            if(isset($_POST['submit']))
                            {
                                $nik      =$_POST['nik'];
                                $username     =$_POST['username'];
	                            $password     =$_POST['password'];
	                            $select->manzregis($nik,$username,$password);
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
  <form class="" action="regis2.php" method="post" >
    <img class="mb-4" src="gambar/logoo.png" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Register</h1>
    <div class="form-floating">
      <input type="varchar" class="form-control" id="floatingInput" value="<?php echo $user["Nik"];?>" name="nik" readonly >
      <label for="floatingInput">Nik</label>
    </div>
    <div class="form-floating">
      <input type="varchar" class="form-control" id="floatingInput" value="<?php echo $user["Nama"];?>" name="nama" readonly >
      <label for="floatingInput">Nama</label>
    </div>
	<div class="form-floating">
      <input type="varchar" class="form-control" id="floatingInput" value="<?php echo $user["Jenis_kelamin"];?>" name="jk" readonly >
      <label for="floatingInput">Jenis Kelamin</label>
    </div>
	<div class="form-floating">
      <input type="varchar" class="form-control" id="floatingInput" value="<?php echo $user["Alamat"];?>" name="alamat" readonly >
      <label for="floatingInput">Alamat</label>
    </div>
	<div class="form-floating">
      <input type="varchar" class="form-control" id="floatingInput" value="<?php echo $user["No_Telp"];?>" name="no" readonly >
      <label for="floatingInput">No Telpon</label>
    </div>
	<div class="form-floating">
      <input type="varchar" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?php echo $user["Username"];?>" name="username" required >
      <label for="floatingInput">Username</label>
    </div>
	<div class="form-floating">
      <input type="password" class="form-control" id="floatingInput" placeholder="Password" value="<?php echo $user["Password"];?>" name="password" required>
      <label for="floatingInput">Password</label>
    </div>

    <button type="submit"class="w-100 btn btn-lg btn-primary" name="submit">Sign in</button>
	<div class="checkbox mb-3">
      <label>
        
      </label>
    </div>
	<a href="login.php" type="submit"class="w-100 btn btn-lg btn-danger" >Login</button></a>
    <p class="mt-5 mb-3 text-muted">&copy; Ilman Zuhry 2023</p>
  </form>
</main>


    
  </body>
</html>
