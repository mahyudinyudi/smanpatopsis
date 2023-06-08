<!DOCTYPE html>
<html lang="en">
<head>
  <title>RSUD Kertosono</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Sistem Penunjang Keputusan Pemilihan Karyawan Teladan RSUD Kertosono</a>
    </div>
	
	<!--
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Page 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li>
        </ul>
      </li>
      <li><a href="#">Page 2</a></li>
    </ul>
	-->
	
	
    <ul class="nav navbar-nav navbar-right">
      <li><a href="../logout.php"><span class="glyphicon glyphicon-log-out"></span> Keluar</a></li>
    </ul>
  </div>
</nav>
 <?php
if(@$_GET['a']=='kriteria'){
	$active1='class="active"';
	$active2='';
	$active3='';
	$active4='';
}else if(@$_GET['a']=='alternatif'){
	$active1='';
	$active2='class="active"';
	$active3='';
	$active4='';
}else if(@$_GET['a']=='nilaimatrik'){
	$active1='';
	$active2='';
	$active3='class="active"';
	$active4='';
}else if(@$_GET['a']=='hasiltopsis'){
	$active1='';
	$active2='';
	$active3='';
	$active4='class="active"';
}else{
	$active1='';
	$active2='';
	$active3='';
	$active4='';
}	

?> 
  
<!-- TAB KIRI -->
<div class="col-sm-2">
<div class="panel-group">
  <div class="panel panel-default">
	<a href="?a=hasiltopsis&k=nilai_matriks"><button type="button" class="btn btn-default btn-block btn-lg">Hasil Ranking Karyawan</button></a>
  </div>
</div> 
</div>
<!-- /TAB KIRI -->  
  
  

  <div class="col-sm-10">
	
	
	<img src="../images/header.png" width="100%"/>
	
  
 <?php
 
 if(@$_GET['a']=='kriteria'){
	include ("kriteria.php");
 }else if(@$_GET['a']=='alternatif'){
	include ("alternatif.php");
 }else if(@$_GET['a']=='nilaimatrik'){
	include ("nilaimatrik.php");
 }else if(@$_GET['a']=='hasiltopsis'){
	include ("hasiltopsis.php");
 }
 
 
 
 
 
 
 

 ?>
 
 
 
</div>


</body>
</html>
