<?php

include ("konfig/koneksi.php");


$query = "SELECT max(id_kriteria) as idMaks FROM kriteria";
$hasil = mysqli_query($con, $query);
$data  = mysqli_fetch_array($hasil);
$nim = $data['idMaks'];

//mengatur 6 karakter sebagai jumalh karakter yang tetap
//mengatur 3 karakter untuk jumlah karakter yang berubah-ubah
$noUrut = (int) substr($nim, 2, 3);
$noUrut++;

//menjadikan 201353 sebagai 6 karakter yang tetap
$char = "kr";
//%03s untuk mengatur 3 karakter di belakang 201353
$IDbaru = $char . sprintf("%03s", $noUrut);

//ambil data \
$query=mysqli_query($con,"select * from kriteria where id_kriteria='$_GET[id]'");
$row=mysqli_fetch_assoc($query);


?>
<div class="box-header">
    <h3 class="box-title">Ubah Kriteria</h3>
</div>

<div class="box-body pad">
 <form action="" method="POST">
 
 <input type="text" name="id_kriteria" class="form-control" value="<?php echo $row['id_kriteria']; ?>" readonly>
 <br />
 <input type="text" name="nama_kriteria" class="form-control"  placeholder="Nama Kriteria" value="<?php echo $row['nama_kriteria']; ?>" >
 <br />
 <input type="text" name="bobot" class="form-control" placeholder="Bobot" value="<?php echo $row['bobot']; ?>">
 <br />
 <input type="text" name="poin1" class="form-control" placeholder="Poin 1" value="<?php echo $row['poin1']; ?>">
 <br />
 <input type="text" name="poin2" class="form-control" placeholder="Poin 2" value="<?php echo $row['poin2']; ?>">
 <br />
 <input type="text" name="poin3" class="form-control" placeholder="Poin 3" value="<?php echo $row['poin3']; ?>">
 <br />
 <input type="text" name="poin4" class="form-control" placeholder="Poin 4" value="<?php echo $row['poin4']; ?>">
 <br />
 <input type="text" name="poin5" class="form-control" placeholder="Poin 5" value="<?php echo $row['poin5']; ?>">
 <br />
 <input type="submit" name="ubah" value="Ubah" class="btn btn-primary">
 <br />
 </form>
</div>
<?php
if(isset($_POST['ubah'])){
	$query=mysqli_query($con, "update kriteria set nama_kriteria='$_POST[nama_kriteria]', bobot='$_POST[bobot]', poin1='$_POST[poin1]',poin2='$_POST[poin2]', poin3='$_POST[poin3]', poin4='$_POST[poin4]', poin5='$_POST[poin5]' where id_kriteria='$_POST[id_kriteria]'");
	
	if($query){
		echo "<script>alert('Diubah'); window.open('index.php?a=kriteria&k=kriteria','_self');</script>";
	}
}

?>

