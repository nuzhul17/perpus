<?php
include "koneksi.php";

$nama	= $_POST['nama'];
$alamat	= $_POST['alamat'];
$ttl	= $_POST['ttl'];
$status	= $_POST['status'];

$query = "update anggota set nm_anggota	='$nama',
									alamat	='$alamat',
									ttl_anggota	='$ttl',
									status_anggota	='$status' 
									where id_anggota ='$_GET[id]'";

$hasil= mysqli_query($koneksi, $query);

if ($hasil) 
{
echo "<script>alert('data berhasil disimpan');
document.location.href='anggota.php'</script>\n";
} else {
echo "<script>alert('data gagal disimpan');
document.location.href='anggota.php'</script>\n";
}
?>