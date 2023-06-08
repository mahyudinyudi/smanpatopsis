<?php
session_start();

# check apakah ada akse post dari halaman login?, jika tidak kembali kehalaman depan
if( !isset($_POST['username']) ) { header('location:index.php'); exit(); }

# set nilai default dari error,
$error = '';

require ( 'config.php' );

$username = trim( $_POST['username'] );
$password = trim( $_POST['password'] );

if( strlen($username) < 2 )
{
	# jika ada error dari kolom username yang kosong
	$error = 'Username tidak boleh kosong';
}else if( strlen($password) < 2 )
{
	# jika ada error dari kolom password yang kosong
	$error = 'Password Tidak boleh kosong';
}else{

	# Escape String, ubah semua karakter ke bentuk string
	$username = $koneksi->escape_string($username);
	$password = $koneksi->escape_string($password);

	# SQL command untuk memilih data berdasarkan parameter $username dan $password yang 
	# di inputkan
	$sql = "SELECT id_login, nama, level FROM login
			WHERE username='$username' 
			AND password='$password' LIMIT 1";

	# melakukan perintah
	$query = $koneksi->query($sql);

	# check query
	if( !$query )
	{
		die( 'Oops!! Database gagal '. $koneksi->error );
	}

	# check hasil perintah
	if( $query->num_rows == 1 )
	{	
		# jika data yang dimaksud ada
		# maka ditampilkan
		$row =$query->fetch_assoc();
		
		# data nama disimpan di session browser
		$_SESSION['nama_user'] = $row['nama']; 
		$_SESSION['login'] = $row['id_login']; 
		$_SESSION['akses']	   = $row['level'];

		if( $row['level'] == 'admin')
		{
			# data hak Admin di set
			$_SESSION['saya_admin']= 'TRUE';
		}elseif( $row['level'] == 'manager')
		{
			# data hak Admin di set
			$_SESSION['saya_manager']= 'TRUE';
		}elseif( $row['level'] == 'marketing')
		{
			# data hak Admin di set
			$_SESSION['saya_marketing']= 'TRUE';
		}elseif( $row['level'] == 'cs')
		{
			# data hak Admin di set
			$_SESSION['saya_cs']= 'TRUE';
		}

		# menuju halaman sesuai hak akses
		header('location:./'.$_SESSION['akses'].'/');
		exit();

	}else{
		
		# jika data yang dimaksud tidak ada
		$error = 'Username dan Password Tidak ditemukan';
	}

}

if( !empty($error) )
{
	# simpan error pada session
	$_SESSION['error'] = $error;
	header('location:'.$url.'/index.php');
	exit();
}