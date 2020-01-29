<?php
include "koneksi.php";

$tgl = date('Y-m-d');

$query = "update meminjam set tgl_kembali = '$tgl', kembali = '2'
			where ID_PINJAM	='$_GET[id]'";

$hasil = mysqli_query($koneksi, $query);

if ($koneksi) 
{
	echo "<script>alert('Buku Sudah Dikembalikan');
	document.location.href='pinjam.php'</script>\n";
} 
else 
{
	echo "<script>alert('gagal');
	document.location.href='pinjam.php'</script>\n";
}
?>