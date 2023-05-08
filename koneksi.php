<?php 
// isi nama host, username mysql, dan password mysql anda
$databaseHost = "localhost";
$databaseName = "perpustakaan";
$databaseUsername = "root";
$databasePassword = "";
 
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 

//$host = mysqli_connect("localhost","root","");
 
// if($host){
// 	echo "koneksi host berhasil.<br/>";
// }else{
// 	echo "koneksi gagal.<br/>";
// }
// // isikan dengan nama database yang akan di hubungkan
//  $db = mysqli_select_db($host,"perpustakaan");
 
//  if($db){
//  	echo "koneksi database berhasil.";
//  }else{
//  	echo "koneksi database gagal.";
//  }
?>