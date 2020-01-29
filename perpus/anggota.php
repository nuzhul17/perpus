<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Anggota</title>
  </head>
  <body>
         
      <div class="card text-center">
        <div class="card-header">
          <ul class="nav nav-tabs card-header-tabs">
            <li class="nav-item">
              <a class="nav-link " href="anggota.php">Anggota</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="buku.php">Buku</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pinjam.php">Pinjam</a>
            </li>
          </ul>
        </div>
        <div class="card-body">

        <table class="table table-bordered">
        <a href="input_anggota.php" class="btn btn-primary" style="margin-right:1200px"> Input Anggota</a>
         <br> <br>
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Id_Anggota</th>
                    <th scope="col">Nama Anggota</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">TTL</th>
                    <th scope="col">Status</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                                    
									
				<tbody>
						<?php 
						include "koneksi.php";
						$sql= mysqli_query ($koneksi, "select * from anggota order by id_anggota");
						$no = 1;
						while ($data=mysqli_fetch_array($sql)) {
						?>			
				            <tr class="odd gradeX">
				                <td><?php echo $no?></td>
				                <td><?php echo $data['id_anggota'];?></td>
								<td><?php echo $data['nm_anggota'];?></td>
								<td><?php echo $data['alamat'];?></td>
								<td><?php echo $data['ttl_anggota'];?></td>
								<td class="center"><?php echo $data['status_anggota'];?></td>
								<td class="center"><a href="edit_anggota.php?id=<?php echo $data['id_anggota']; ?>"  > Edit </a>
								<a href="hapus_anggota.php?id=<?php echo $data['id_anggota']; ?>" onClick = "return confirm('Apakah Anda ingin mengapus  <?php echo $data['nm_anggota']; ?>?')"> Hapus</a></td>
				            </tr>
						<?php $no++; }?>
				</tbody>
		</table>
</body>
</html>