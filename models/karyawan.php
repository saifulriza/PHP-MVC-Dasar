<?php
include('config/database.php');
function query(){
	$koneksi = koneksi();
	$query = 'Select * from karyawan';
	$result = mysqli_query($koneksi, $query);
	$hasil = mysqli_fetch_all($result, MYSQLI_ASSOC);
	return $hasil;
}

//echo '<pre>';
//print_r(query("Select * from karyawan"));
//echo '</pre>';
