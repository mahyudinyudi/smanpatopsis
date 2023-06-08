<div class="box-header">
    <h3 class="box-title">Data Kriteria</h3>
</div>
<div class="table-responsive">
<table class="table table-bordered table-striped">
<thead>
<tr>
<th>Id Kriteria</th>
<th>Nama Kriteria</th>
<th>Bobot</th>
<th>Nilai 1</th>
<th>Nilai 2</th>
<th>Nilai 3</th>
<th>Nilai 4</th>
<th>Nilai 5</th>
<th>Pilihan</th>
</tr>
</thead>
<tbody>
<?php
include ("konfig/koneksi.php");

$query=mysqli_query($con,"select * from kriteria");
while($row=mysqli_fetch_array($query)){
?>
<tr>
<td><?php echo $row['id_kriteria']; ?></td>
<td><?php echo $row['nama_kriteria']; ?></td>
<td><?php echo $row['bobot']; ?></td> 
<td><?php echo $row['poin1']; ?></td>
<td><?php echo $row['poin2']; ?></td>
<td><?php echo $row['poin3']; ?></td>
<td><?php echo $row['poin4']; ?></td>
<td><?php echo $row['poin5']; ?></td>
<td>
<a href="?a=kriteria&k=ubahk&id=<?php echo $row['id_kriteria']; ?>" class="btn btn-warning">Ubah</a>
<a href="hapus.php?id=<?php echo $row['id_kriteria']; ?>" class="btn btn-danger">Hapus</a>
</td>
</tr>
<?php
}
?>
</tbody>
</table>
</div>