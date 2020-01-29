<html>
<head>
</head>
<body>
<?php 
include "koneksi.php";
?>
<table width="700" border="1">
<tr>
<td colspan="2" align="center"><h1>Selamat Datang Di Sistem Perpustakaan</h1></td>
</tr>
<tr>
<td width = "200">
<ul>
<li><a href="buku.php">Buku</a></li>
<li><a href="pinjam.php">Peminjaman</a></li>
<li><a href="anggota.php">Anggota</a></li>
<ul>

</td>
<td width="500">
<form method="post" action="proses_edit_pinjam.php?id=<?php echo $_GET['id'];?>" >

<?php 
$id = $_GET['id'];
$sql = mysqli_query($koneksi,"select * from meminjam where ID_PINJAM=$id");
$data= mysqli_fetch_array($sql);
?>

<table border="0">
<tr>
<td>Nama Peminjam</td>
<td>:</td>
<td><?php

$kueri_anggota=mysqli_query($koneksi, "select * from anggota order by NIM") or die(mysqli_error());
?>
                                            <select name="anggota">
                                             <?php
 while (list($kode,$nama_status)=mysqli_fetch_array($kueri_anggota))
   {
?>
      <option  value="<?php echo $kode ?>"><?php echo $nama_status ?></option>
<?php
  }
?>
                                            </select></td>
</tr>
<tr>
<td>Judul Buku </td>
<td>:</td>
<td><?php

$kueri_buku=mysqli_query($koneksi, "select * from buku order by KODE_BUKU" ) or die(mysqli_error());
?>
                                            <select name="buku">
                                             <?php
 while (list($kode,$nama_status)=mysqli_fetch_array($kueri_buku))
   {
?>
      <option  value="<?php echo $kode ?>"><?php echo $nama_status ?></option>
<?php
  }
?>
                                            </select><td>
</tr>											
											

<tr>
<td></td>
<td></td>
<td><input type="submit" name="simpan" value="simpan"></td>
</tr>

</table>
</form>
</td>
</tr>
</table>

</body>
</html>