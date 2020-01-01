<?php
function koneksi(){
	$host = 'localhost';
	$nama = 'root';
	$pass = '';
	$db = 'mvc';
	return mysqli_connect($host, $nama, $pass, $db);
}

