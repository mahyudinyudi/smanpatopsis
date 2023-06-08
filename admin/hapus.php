<?php
include ("konfig/koneksi.php");
$query=mysqli_query($con,"delete from kriteria where id_kriteria='$_GET[id]'");

if($query){
	echo "<script>window.open('index.php?a=kriteria&k=kriteria','_self');</script>";
}else{
 echo $del"delete from kriteria where id_kriteria='$_GET[id]'";
}

?>