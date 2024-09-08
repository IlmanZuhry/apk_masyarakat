<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laporan Tanggapan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style>
        .mx-auto {
            width: 1000px
        }

        .card {
            margin-top: 30px;
        }
    </style>
</head>

<body>
    <div class="mx-auto">
        <div class="card">
		
            <div class="card-header text-white bg-secondary">
                Laporan Tanggapan
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Id Tanggapan</th>
                            <th scope="col">Id Pengaduan</th>
                            <th scope="col">Tanggal Tanggapan</th>
                            <th scope="col">Tanggapan</th>
                            <th scope="col">Id Petugas</th>
							<th scope="col">Status</th>
							
							
                        </tr>
                    <tbody>
                        
						
						<?php
                        include 'manzzkonek.php';
                        $db = new manz();
                        $db->connectMySQL();
						if (isset($_GET['op'])) {
                            if ($_GET['op'] == 'hapus') {
                                $id = $_GET['Id'];
                                $db->manzhapusData1($id);
                            }
						}
							?>


                        <?php                            
                        
                       
                        $arrayData = $db->manztampilData3();
                        $i = 1;
                        foreach ($arrayData as $data) {
                            $idtgp      = $data['Id_tanggapan'];
                            $idpgn    = $data['Id_pengaduan'];
                            $tgl   = $data['Tgl_tanggapan'];
                            $tgp  = $data['Tanggapan'];
							$idptg   = $data['Id_petugas'];
                            $status   = $data['Status'];
                        ?>
                        <tr>
                            <th scope="data"><?php echo $i++ ?></th>
                            <td scope="row"><?php echo $idtgp ?></td>
                            <td scope="row"><?php echo $idpgn ?></td>
                            <td scope="row"><?php echo $tgl ?></td>
                            <td scope="row"><?php echo $tgp ?></td>
							<td scope="row"><?php echo $idptg ?></td>
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