<!doctype html public> 
    <html> 
    <head> 
           <title>Data Beasiswa</title> 
           <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
		   <script type="text/javascript" src="bootstrap.min.js"></script>
           <style type="text/css">
			#kiri
			{
			width:20%;
			float:left;
			}
		</style>
    </head> 
    <body> 		
        <div class="card ">
		  <div class="card-header text-center">
		   	<h1 style="color: grey;">BEASISWA FILKOM UNIVERSITAS BRAWIJAYA</h1>
		  </div>
		  <div class="card-body">
         
        <?php
 		$nama = $_POST['datanama'];
        $nim = $_POST['datanim'];
        $ipk = $_POST['dataipk'];
        $jenis = $_POST['jenis'];
        $email = $_POST['dataemail'];
        if (isset($_POST['sertifikat'])) {
        	$sertifikat = $_POST['sertifikat'];
        };
        $prodi = $_POST['prodi'];
        $kontribusi = $_POST['kontribusi'];
		
		$extension = strtolower(pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION));
		$photo = "uploaded." . $extension;
		if (file_exists($photo)) {
		unlink($photo);
		}
		move_uploaded_file($_FILES['foto']['tmp_name'], $photo);			        
							
		?>

        <div style="background: url(biru.jpg) no-repeat fixed; background-size: 2000px;" class="container">
				<div style="margin-top: 50px;" class="row">
					<div class="col-lg-12">
						<table>
							<tr>
								<p align="t"><i><b>Data anda telah dikirim...</b></i></p>
							</tr>
						</table>			
						<div id="kiri">
							<img width="70%" src="<?php echo $photo?>" >
						</div>
						<table style="margin-left: 100px;">
							<tr>
								<td style="width: 150px;">Nama</td>
								<td style="width: 70px;">:</td>
								<td><?php echo" $nama"; ?></td>
							</tr>
							<tr style="height: 50px;">
								<td style="width: 150px;">NIM</td>
								<td style="width: 70px;">:</td>
								<td><?php echo" $nim";?></td>
							</tr>
							<tr style="height: 50px">
								<td style="width: 150px;">IPK</td>
								<td style="width: 70px;">:</td>
								<td><?php echo" $ipk";?></td>
							</tr>
							<tr style="height: 50px;">								
								<td style="width: 150px;">Jenis Kelamin</td>
								<td style="width: 70px;">:</td>
								<td><?php echo" $jenis";?></td>
							</tr>
							<tr style="height: 50px;">								
								<td style="width: 150px;">Alamat Email</td>
								<td style="width: 70px;">:</td>
								<td><?php echo" $email";?></td>
							</tr>
							<tr style="height: 50px;">
								<td style="width: 150px;">Sertifikat</td>
								<td style="width: 70px;">:</td>
								<td>
									<?php 										
										if(!isset($_POST['sertifikat'])){
											echo"Tidak ada sertifikat";
										}
										else{
										foreach ($sertifikat as $value) {
        								echo"($value) ";
        								}
        							}	
        							?>
								</td>
							</tr>
							<tr style="height: 50px;">								
								<td style="width: 150px;">Prodi</td>
								<td style="width: 70px;">:</td>
								<td><?php echo" $prodi"?></td>
							</tr>
							</tr>
							<tr style="vertical-align: top;">								
								<td style="width: 150px;">Deskripsi</td>
								<td style="width: 70px;">:</td>
								<td><?php echo" $kontribusi"?></td>
							</tr>
						</table>
						<table>
							<tr>
								<br>
								<p><i><b>Pengumuman lebih lanjut akan kami beritahukan melalui email</b></i></p>
							</tr>
						</table>
					</div>
				</div>
			</div>
		  </div>
		  
        </div> 
        <div class="card-footer text-muted">
			    <img src="filkom.png" width="120"> 
		</div>
    </body> 
    </html>