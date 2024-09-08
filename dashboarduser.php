<?php
require 'teslogin.php';
$select=new Select();

if(!empty($_SESSION["nik"])){
	$user=$select->selectUserByNik($_SESSION["nik"]);
}
else{
	header("Location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>User - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
	<style>
	.satu{
		font-size:15px;
		font-weight:bold;
	}
	.dua{
		font-size:17px;
		font-weight:bold;
	}
	.tiga{
		font-size:20px;
		font-weight:bold;
	}
	</style>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <div class="sidebar-brand-icon rotate-down-10">
                    <img class="logo" src="gambar/logoo.png" alt="" width="70" height="57">
                </div>
                <div class="sidebar-brand-text mx-2">Manz Report.ID</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="dashboarduser.php">
                    <i class="fa fa-home" aria-hidden="true"></i>
                    <span>Home</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="pengaduan.php">
                    <i class="fas fa-fw fa-save"></i>
                    <span>Pengaduan</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="tampiluser.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Data aduan</span></a>
            </li>
			
          


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar -->
                    <h5>SELAMAT DATANG MASYARAKAT | <b>MEDAN DELI</b></h5>


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Masyarakat</span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#profilModal">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Content Row -->

                
                                    <!-- Card Body -->
<font color="black">
                           <h1 class="tiga">  &ensp;   Aplikasi Pelaporan Pengaduan Masyarakat merupakan aplikasi yang dapat dipergunakan</h1>
						  <h1 class="tiga">  &ensp;oleh masyarakat untuk menyampaikan pengaduan atau keluhan mengenai pelayanan publik tertentu.</h1>
<h1 class="tiga">  &ensp;Aplikasi ini dapat diakses melalui website pada laptop maupun komputer</h1>
<br>

<h1 class="dua">  &ensp;Alur kerja Aplikasi Pelaporan Pengaduan Masyarakat ini yakni :</h1>
<h1 class="dua">  &ensp;
1. Pelaporan</h1>
<h1 class="dua"> &ensp;&ensp; &ensp;Masyarakat umum dapat mengirimkan laporan pada aplikasi ini dengan mudah melalui laptop atau komputer. </h1>
<h1 class="dua"> &ensp;&ensp; &ensp;Laporan kemudian diverifikasi terlebih dahulu oleh Petugas untuk kejelasan dan kelengkapan Laporan Pengaduan,</h1>
<h1 class="dua"> &ensp;&ensp; &ensp;dan selanjutnya akan diproses paling lambat 3 hari setelah pelaporan dilakukan.
</h1>
<h1 class="dua"> &ensp;
2. Tindak Lanjut Pelaporan</h1>
<h1 class="dua"> &ensp;&ensp; &ensp;Aplikasi ini akan menunjukkan data laporan yang sudah dikirimkan pada salah satu menu di aplikasi ini.</h1> 
<h1 class="dua"> &ensp;&ensp; &ensp;Petugas akan memberikan tanggapan dan status laporan pengaduan menjadi 'Proses'.</h1> 
<h1 class="dua"> &ensp;&ensp; &ensp;Petugas akan memproses pelaporan ke instansi terkait dengan laporan pengaduan yang dibuat </h1>

<h1 class="dua"> &ensp;
3. Penutupan Laporan</h1>
<h1 class="dua"> &ensp;&ensp; &ensp;Laporan dianggap selesai apabila sudah terdapat tindak lanjut dari instansi terkait pada laporan,dan telah berjalan 10 hari.</h1> 
<h1 class="dua"> &ensp;&ensp; &ensp;Setelah tindak lanjut dilakukan tanpa adanya pelaporan tambahan dari pelapor.Laporan pengaduan telah selesai</h1>
<h1 class="dua"> &ensp;&ensp; &ensp;ditandai dengan status laporan pengaduan menjadi 'Selesai' dan petugas memberikan tanggapan bahwa laporan telah selesai</h1>
<br>
<h1 class="satu"> &ensp;Penjelasan status di laporan pengaduan:</h1>
<h1 class="satu"> &ensp;- '0'       =Laporan anda sudah terkirim namun belum dilakukan tindak lanjut oleh petugas seperti penjelasan di atas</h1>
<h1 class="satu"> &ensp;- 'Proses'  =Laporan anda sedang di proses oleh instansi terkait</h1>
<h1 class="satu"> &ensp;- 'Selesai' =Laporan anda sudah selesai,laporan ditutup</h1>
</font>
                <!-- End of Main Content -->

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Ilman Zuhry Hartarto 2023</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>


        <!-- Profil Modal-->
<div class="modal fade" id="profilModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"><b>Profil   |&ensp;<?php echo $user["Username"];?></b></h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
					<div class="modal-body"><b>Nik :<?php echo $user["Nik"];?></b></div>
                    <div class="modal-body"><b>Nama :<?php echo $user["Nama"];?></b></div>
					<div class="modal-body"><b>Jenis Kelamin :<?php echo $user["Jenis_kelamin"];?></b></div>
					<div class="modal-body"><b>Alamat :<?php echo $user["Alamat"];?></b></div>
					<div class="modal-body"><b>No Telp :<?php echo $user["No_Telp"];?></b></div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>


        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Logout</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Apakah anda yakin untuk Logout</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                        <a class="btn btn-primary" href="logout.php">Logout</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="vendor/chart.js/Chart.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="js/demo/chart-area-demo.js"></script>
        <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>