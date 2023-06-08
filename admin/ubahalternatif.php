<?php

include ("konfig/koneksi.php");

$id = $_GET['id'];

$s=mysqli_query($con, "select * from alternatif where id_alternatif='$id'");
$d=mysqli_fetch_array($s);

?>
<div class="box-header">
    <h3 class="box-title">Ubah Alternatif</h3>
</div>

<div class="box-body pad">
 <form action="" method="POST">
 
 <input type="text" name="id_alternatif" class="form-control" value="<?php echo $d['id_alternatif']; ?>" readonly>
 <br />
 <input type="text" name="nama_alternatif" class="form-control"  placeholder="Nama Alternatif" value="<?php echo $d['nm_alternatif']; ?>">
 <br />
 <input type="text" name="pilihan_alternatif" class="form-control"  placeholder="Pilihan Alternatif" value="<?php echo $d['kelas']; ?>">
 <br />
 <input type="submit" name="ubah" value="Ubah" class="btn btn-primary">
 <br />
 </form>
</div>
<?php
if(isset($_POST['ubah'])){
	$s=mysqli_query($con, "update alternatif set nm_alternatif='$_POST[nama_alternatif]', kelas='$_POST[pilihan_alternatif]' where id_alternatif='$_POST[id_alternatif]'");
	
	if($s){
		echo "<script>alert('Diubah'); window.open('index.php?a=alternatif&k=alternatif','_self');</script>";
	}
}

?>

