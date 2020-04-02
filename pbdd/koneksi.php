<?php
$koneksi = mysqli_connect("localhost","root","","multi_user");
function open_connection() {
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$dbname   = "multi_user";
	$koneksi  = mysqli_connect($hostname, $username, $password, $dbname);
	return $koneksi;
}
?>