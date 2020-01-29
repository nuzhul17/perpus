<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Pinjam</title>
  </head>
  <body>
         
      <div class="card text-center">
        <div class="card-header">
          <ul class="nav nav-tabs card-header-tabs">
            <li class="nav-item">
              <a class="nav-link " href="buku.php">Buka</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pinjam.php">Peminjaman</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="anggota.php">Anggota</a>
            </li>
          </ul>
        </div>
        <div class="card-body">
          <table class="table table-bordered" style="margin-bottom: 50px">
            <a href="pinjam_buku.php" class="btn btn-primary" style="margin-right:1200px" >Pinjam Buku</a>
            <br>
            <br>
            
              <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Tanggal Pinjam Buku</th>
                        <th scope="col">Jumlah Pinjam</th>
                        <th scope="col">Tanggal Kembali</th>
                        <th scope="col">Nama Peminjam</th>
                        <th scope="col">Buku</th>
                      </tr>
                    </thead>

				<tbody>
					<?php 
					include "koneksi.php";
					$sql	= mysqli_query ($koneksi, "select * from pinjam,buku,anggota
					where pinjam.ID_ANGGOTA = anggota.NIM and
					pinjam.KODE_BUKU = buku.KODE_BUKU and pinjam.kembali = 1
					 order by ID_PINJAM");
					$no = 1;
					while ($data=mysqli_fetch_array($sql)) {
					?>			
					        <tr class="odd gradeX">
					            <td><?php echo $no?></td>
					            <td><?php echo $data['TANGGAL_PINJAM'];?></td>
								<td><?php echo $data['JUMLAH_PINJAM'];?></td>
								<td><?php echo $data['TANGGAL_KEMBALI'];?></td>
								<td><?php echo $data['ID_ANGGOTA'];?></td>
								<td class="center"><?php echo $data['JUDUL_BUKU'];?></td>
																
					            <td class="center"><a href="edit_pinjam.php?id=<?php echo $data['ID_PINJAM']; ?>" > Edit </a> 
					            <a href="kembali_buku.php?id=<?php echo $data['ID_PINJAM']; ?>" onClick = "return confirm('Apakah Anda ingin mengembalikan  <?php echo $data['JUDUL_BUKU']; ?>?')"> Kembalikan </a></td>
					        </tr>
															
					<?php $no++; }?>
				</tbody>
			</table>
									
				<table class="table table-bordered">
				
                  <p><h2><center>Buku Yang Sudah Di Kembalikan</center></h2></p>
                  <br>
                  <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Tanggal Pinjam Buku</th>
                        <th scope="col">Jumlah Pinjam</th>
                        <th scope="col">Tanggal Kembali</th>
                        <th scope="col">Nama Peminjam</th>
                        <th scope="col">Buku</th>
                      </tr>
                    </thead>


					<tbody>
						<?php 
						include "koneksi.php";
						$sql	= mysqli_query ($koneksi, "select * from pinjam,buku,anggota
						where pinjam.ID_ANGGOTA = anggota.NIM and
						pinjam.KODE_BUKU = buku.KODE_BUKU and pinjam.kembali = 2
						 order by ID_PINJAM");
						$no = 1;
						while ($data=mysqli_fetch_array($sql)) {
						?>			
						    <tr class="odd gradeX">
						        <td><?php echo $no?></td>
						        <td><?php echo $data['TANGGAL_PINJAM'];?></td>
								<td><?php echo $data['JUMLAH_PINJAM'];?></td>
								<td><?php echo $data['TANGGAL_KEMBALI'];?></td>
								<td><?php echo $data['ID_ANGGOTA'];?></td>
								<td class="center"><?php echo $data['JUDUL_BUKU'];?></td>
																	
						        <td class="center"><a href="hapus_pinjam.php?id=<?php echo $data['ID_PINJAM']; ?>" onClick = "return confirm('Apakah Anda ingin mengapus  <?php echo $data['ID_PINJAM']; ?>?')"> Hapus</a> </td>
						    </tr>
																
						<?php $no++; }?>
					</tbody>
					
				</table>
			</div>
</body>
</html>