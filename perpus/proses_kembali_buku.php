<?php
include "koneksi.php";



$query = "update pinjam set TANGGAL_KEMBALI ='date(Y-m-d)'
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