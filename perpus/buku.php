<html>
<head>
</head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

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
          <table class="table table-bordered" >
            <a href="input_buku.php" class="btn btn-primary" style="margin-right:1200px" >Input Buku</a>
            <br>
            <br>
              <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kode Buku</th>
                        <th scope="col">Judul Buku</th>
                        <th scope="col">Pengarang</th>
                        <th scope="col">jenis Buku</th>
                        <th scope="col">penerbit</th>
                        <th scope="col">Aksi</th>
                      </tr>
                </thead>

				<tbody>
					<?php 
					include "koneksi.php";
					$sql= mysqli_query ($koneksi, "select * from buku order by kd_buku");
					$no = 1;
					while ($data=mysqli_fetch_array($sql)) {
					?>			
	                    <tr class="odd gradeX">
	                        <td><?php echo $no?></td>
	                        <td><?php echo $data['kd_buku'];?></td>
							<td><?php echo $data['judul_buku'];?></td>
							<td><?php echo $data['pengarang'];?></td>
							<td><?php echo $data['jenis_buku'];?></td>
							<td class="center"><?php echo $data['penerbit'];?></td>
												
	                        <td class="center"><a href="edit_buku.php?id=<?php echo $data['kd_buku']; ?>" > Edit </a>
	                        <a href="hapus_buku.php?id=<?php echo $data['kd_buku']; ?>" onClick = "return confirm('Apakah Anda ingin mengapus  <?php echo $data['judul_buku']; ?>?')"> Hapus</a></td>
	                    </tr>
											
	                <?php $no++; }?>
                </tbody>
			</table>
		</div>
</body>
</html>