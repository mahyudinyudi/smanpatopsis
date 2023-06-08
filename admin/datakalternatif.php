<div class="box-header">
    <h3 class="box-title">Data Siswa</h3>
</div>
<div class="table-responsive">
<table class="table table-bordered table-striped">
<thead>
<tr>
<th>NIS</th>
<th>Nama Siswa</th>
<th>Kelas</th>
</tr>
</thead>
<tbody>
<?php
include ("konfig/koneksi.php");

$query=mysqli_query($con, "select * from alternatif order by id_alternatif ASC");
while($row=mysqli_fetch_assoc($query)){
?>
<tr>
<td><?php echo $row['id_alternatif']; ?></td>
<td><?php echo $row['nm_alternatif']; ?></td>
<td><?php echo $row['kelas']; ?></td>
<td>
<a href="?a=alternatif&k=ubaha&id=<?php echo $row['id_alternatif']; ?>" class="btn btn-warning">Ubah</a>
<a href="hapusalternatif.php?id=<?php echo $row['id_alternatif']; ?>" class="btn btn-danger">Hapus</a>
</td>
</tr>
<?php
}
?>
</tbody>
</table>
</div>