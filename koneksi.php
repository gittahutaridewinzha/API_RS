<?php

$koneksi = mysqli_connect("localhost", "root", "", "db_rs");

if($koneksi){

	// echo "Database berhasil konek";
	
} else {
	echo "gagal Connect";
}

?>