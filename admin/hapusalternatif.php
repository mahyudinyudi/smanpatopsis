<?php
include ("konfig/koneksi.php");

$s=mysqli_query($con,"delete from alternatif where id_alternatif='$_GET[id]' ");

if($s){
	echo "<script>alert('Berhasil dihapus'); window.open('index.php?a=alternatif&k=alternatif','_self');</script>";
}

?>