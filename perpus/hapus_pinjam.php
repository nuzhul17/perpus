<?php
include "koneksi.php";

$id	= $_GET['id'];


mysqli_query($koneksi,"delete from meminjam where id_pinjam='$id'");

if ($koneksi) 
{
echo "<script>alert('data berhasil dihapus');
document.location.href='pinjam.php'</script>\n";
} 
else 
{
echo "<script>alert('data gagal dihapus');
document.location.href='pinjam.php'</script>\n";
}
?>