<?php 

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'bangku';

$koneksi = new mysqli_connect($host, $user, $pass, $db);

if($koneksi){
	echo "connected";
}

 ?>