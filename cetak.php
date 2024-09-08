 <!doctype html>
                    <html lang="en">

                    <head>
                        <meta charset="utf-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1">
                        <title>Laporan Pengaduan</title>
                        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
                        <style>
                            .mx-auto {
                                width: 1050px
                            }

                            .card {
                                margin-top: 40px;
                            }
                        </style>
                    </head>

                    <body>
                        <div class="mx-auto">
                            <div class="card">
							
                                <div class="card-header text-white bg-dark">
                                    Laporan Pengaduan
                                </div>
								
                                <div class="card-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Id</th>
                                                <th scope="col">Tanggal Pengaduan</th>
                                                <th scope="col">Nik</th>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Isi Laporan</th>
                                                <th scope="col">Foto</th>
                                                <th scope="col">Status</th>
                                                

                                            </tr>
                                        <tbody>


                                            <?php
                                            include 'manzzkonek.php';
                                            $db = new manz();
                                            $db->connectMySQL();
                                            
                                            ?>
                                            <?php

                                            if (isset($_POST['simpan'])) {
                                                $id      = $_POST['id'];
                                                $tgl     = $_POST['tgl'];
                                                $nik     = $_POST['nik'];
                                                $nama    = $_POST['nama'];
                                                $isi     = $_POST['isi'];
                                                $status  = $_POST['status'];

                                                $db->manzupdateData1($id, $tgl, $nik, $nama, $isi, $status);
                                            }

                                            ?>


                                            <?php


                                            $arrayData = $db->manztampilall();
                                            $i = 1;
                                            foreach ($arrayData as $data) {
                                                $id      = $data['Id_pengaduan'];
                                                $tgl     = $data['Tgl_pengaduan'];
                                                $nik   = $data['Nik'];
                                                $nama  = $data['Nama'];
                                                $isi   = $data['Isi_laporan'];
                                                $foto   = $data['Foto'];
                                                $status  = $data['Status'];
                                            ?>
                                                <tr>
                                                    <th scope="data"><?php echo $i++ ?></th>
                                                    <td scope="row"><?php echo $id ?></td>
                                                    <td scope="row"><?php echo $tgl ?></td>
                                                    <td scope="row"><?php echo $nik ?></td>
                                                    <td scope="row"><?php echo $nama ?></td>
                                                    <td scope="row"><?php echo $isi ?></td>
                                                    <td align="center"><img src="gambar/<?php echo $data['Foto']; ?>" width="80" height="80"></td>
                                                    <td scope="row"><?php echo $status ?></td>
                                                    <td scope="row">
                                                        
                                                    </td>
                                                </tr>

                                                

                            <?php
                                            }
                            ?>
                            </tbody>
                            </thead>
                            </table>
							<script type="text/javascript" onclick="return">window.print();</script>
                            </div>



                        </div>
                </div>

                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>