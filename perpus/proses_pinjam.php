<?php
include "koneksi.php";

$anggota	= $_POST['anggota'];
$buku		= $_POST['buku'];


mysqli_query($koneksi,'insert into pinjam(TANGGAL_PINJAM,JUMLAH_PINJAM,TANGGAL_KEMBALI,ID_ANGGOTA,KODE_BUKU,KEMBALI) values ("'.date('Y-m-d').'",1,"'.$tgl_kembali.'","'.$anggota.'","'.$buku.'",1)');

if ($koneksi) 
{
echo "<script>alert('data berhasil disimpan');
document.location.href='pinjam.php'</script>\n";
} else {
echo "<script>alert('data gagal disimpan');
document.location.href='pinjam.php'</script>\n";
}
?>