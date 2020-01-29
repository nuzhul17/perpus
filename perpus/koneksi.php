<?php
$servername = "localhost";
$user       = "root";
$password   = "";
$db         = "perpus";

$koneksi = mysqli_connect ($servername, $user, $password, $db);

if (mysqli_connect_errno()) 
{
	echo "Koneksi database Gagal :" .mysqli_connect_error();
}
          
?>