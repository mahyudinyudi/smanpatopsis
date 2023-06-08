<?php
session_start();
include ("konfig/koneksi.php");

?>

<div class="box-header">
    <h3 class="box-title " >Nilai Preferensi</h3>
</div>

<table class="table table-bordered table-responsive">
<thead>
<tr>
<th >Ranking</th>
<th >Nama</th>
<th >Kelas</th>
<th >V<sub>i</sub></th>
</tr>

</thead>
<tbody>
<?php
$i=1;
$a=mysqli_query($con,"select * from alternatif");
echo "<tr>";
$sortir=array();
while($da=mysqli_fetch_assoc($a)){

	
		
		$idalt=$da['id_alternatif'];
	
		//ambil nilai
			
			$n=mysqli_query($con,"select * from nilai_matrik where id_alternatif='$idalt'");
		
		$c=0;
		$ymax=array();
		while($dn=mysqli_fetch_assoc($n)){
			$idk=$dn['id_kriteria'];
			
			
			//nilai kuadrat
			
			$nilai_kuadrat=0;
			$k=mysqli_query($con,"select * from nilai_matrik where id_kriteria='$idk' ");
			while($dkuadrat=mysqli_fetch_assoc($k)){
				$nilai_kuadrat=$nilai_kuadrat+($dkuadrat['nilai']*$dkuadrat['nilai']);
			}

			//hitung jml alternatif
			$jml_alternatif=mysqli_query($con,"select * from alternatif");
			$jml_a=mysqli_num_rows($jml_alternatif);	
			//nilai bobot kriteria (rata")
			$bobot=0;
			$tnilai=0;
			
			$k2=mysqli_query($con,"select * from nilai_matrik where id_kriteria='$idk' ");
			while($dbobot=mysqli_fetch_assoc($k2)){
				$tnilai=$tnilai+$dbobot['nilai'];
			}	
			 $bobot=$tnilai/$jml_a;
			
			//nilai bobot input
			$b2=mysqli_query($con,"select * from kriteria where id_kriteria='$idk'");
			$nbot=mysqli_fetch_assoc($b2);
			$bot=$nbot['bobot'];
			
			
			$v=round(($dn['nilai']/sqrt($nilai_kuadrat))*$bot,4);

				$ymax[$c]=$v;
				$c++;
				$mak=max($ymax);
				$min=min($ymax);	
			
		}

		$i++;

}


foreach($_SESSION['dplus'] as $key=>$dxmin){
	$jarakm=$_SESSION['dmin'][$key];
	$id_alt=$_SESSION['id_alt'][$key];
	
	//nama alternatif
	$nama=mysqli_query($con,"select * from alternatif where id_alternatif='$id_alt'");
	$nm=mysqli_fetch_assoc($nama);
	
	$nilaid=$jarakm/($jarakm+$dxmin);
	
		$nilai=round($nilaid,4);
		
	
	//simpan ke tabel nilai preferensi
	$nama=$nm['nm_alternatif'];
	$kelas=$nm['kelas'];
	$sql2=mysqli_query($con,"insert into nilai_preferensi (nm_alternatif,kelas,nilai) values('$nama','$kelas','$nilai')");
	
	
}
 
 //ambil data sesuai dengan nilai tertinggi
 $i=1;
	$sql3=mysqli_query($con,"select * from nilai_preferensi order by nilai Desc");
	while($data3=mysqli_fetch_assoc($sql3)){
		echo "<tr>
		<td>".$i."</td>
		<td>$data3[nm_alternatif]</td>
		<td>$data3[kelas]</td>
		<td>$data3[nilai]</td>
		</tr>";
		
		$i++;
	}
 
 
 //kosongkan tabel nilai preferensi
 $del=mysqli_query($con,"delete from nilai_preferensi");

echo "</tr>";
?>

</tbody>
</table>