<?php

include ("konfig/koneksi.php");


$query = "SELECT max(id_alternatif) as idMaks FROM alternatif";
$hasil = mysqli_query($con, $query);
$data  = mysqli_fetch_array($hasil);
$nim = $data['idMaks'];

//mengatur 6 karakter sebagai jumalh karakter yang tetap
//mengatur 3 karakter untuk jumlah karakter yang berubah-ubah
$noUrut = (int) substr($nim, 2, 3);
$noUrut++;

//menjadikan 201353 sebagai 6 karakter yang tetap
$char = "al";
//%03s untuk mengatur 3 karakter di belakang 201353
$IDbaru = $char . sprintf("%03s", $noUrut);

?>
<div class="box-header">
    <h3 class="box-title">Tambah Alternatif</h3>
</div>

<div class="box-body pad">
 <form action="" method="POST">
 
 <input type="text" name="id_alternatif" class="form-control" placeholder="NIS">
 <br />
 <input type="text" name="nama_alternatif" class="form-control"  placeholder="Nama Kriteria" >
 <br />
 <input type="text" name="Kelas" class="form-control"  placeholder="Kelas" >
 <br />
 <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
 <br />
 </form>
</div>
<?php
if(isset($_POST['simpan'])){
	$s=mysqli_query($con,"insert into alternatif (id_alternatif,nm_alternatif,kelas) values('$_POST[id_alternatif]','$_POST[nama_alternatif]','$_POST[Kelas]')");
	
	if($s){
		echo "<script>alert('Disimpan'); window.open('index.php?a=alternatif&k=alternatif','_self');</script>";
	}
}

?>

