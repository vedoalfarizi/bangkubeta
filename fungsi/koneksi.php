<?php 

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'bangku';

$koneksi = new mysqli($host, $user, $pass, $db);

if($koneksi){
	echo "connected";
}

 ?>