<?php 
global $koneksi;
$nameserver='localhost';
$username='root';
$password='';
$namedb='webdinas';
$koneksi=mysqli_connect($nameserver,$username,$password,$namedb);
if(!$koneksi)
{
	die("koneksi-error".mysqli_connect_error());
}
?>
