<?php
include "koneksi.php";


$anggota	= $_POST['anggota'];
$buku		= $_POST['buku'];
$tgl = date('Y-m-d');

$query = "update meminjam set TANGGAL_PINJAM ='$tgl',
							ID_ANGGOTA ='$anggota',
							KODE_BUKU	='$buku'
							where ID_PINJAM	='$_GET[id]'";

$hasil = mysqli_query($koneksi, $query);

if ($koneksi) 
{
	echo "<script>alert('data berhasil disimpan');
	document.location.href='pinjam.php'</script>\n";
} 
else 
{
	echo "<script>alert('data gagal disimpan');
	document.location.href='pinjam.php'</script>\n";
}
?>