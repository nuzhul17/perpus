<?php
include "koneksi.php";

$nim    = $_POST['nim'];
$nama	= $_POST['nama'];
$alamat	= $_POST['alamat'];
$ttl	= $_POST['ttl'];
$status	= $_POST['status'];

mysqli_query($koneksi, 'insert into anggota(nm_anggota,alamat,ttl_anggota,status_anggota) values ("'.$nim.'","'.$nama.'","'.$alamat.'","'.$ttl.'","'.$status.'")');

if ($koneksi) 
{
	echo "<script>alert('data berhasil disimpan');
	document.location.href='anggota.php'</script>\n";
} 
else 
{
	echo "<script>alert('data gagal disimpan');
	document.location.href='input_anggota.php'</script>\n";
}
?>