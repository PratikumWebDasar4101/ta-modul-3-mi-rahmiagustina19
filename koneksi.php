<?php
$host="localhost";
$user="root";
$pass="";
$db="aplikasi";
$conn=mysqli_connect($host,$user,$pass,$db)
or die("Koneksi gagal");
try{
	$pdo = new PDO("mysql:host={$host}; dbname={$db};", $user,  $pass);
	$pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
	print "Koneksi atau query bermasalah : ".$e -> getMessage()."<br>";
	die();
}
$Nim=$_POST['Nim'];
$Nama_user=$_POST['Nama_user'];
$Fakultas=$_POST['Fakultas'];
$Jenis_kelamin=$_POST['Jenis_kelamin'];
$nama_foto=$_FILES['File_gbr']['name'];
$tmp_foto=$_FILES['File_gbr']['tmp_name'];
$dir_foto="upload/";
$target_foto=$dir_foto . $nama_foto;

if(!move_uploaded_file($tmp_foto, $target_foto)){
	die("Foto gagal diupload..!!");
}else {
	echo "berhasil";
$query = $pdo -> prepare("INSERT INTO database_ta4 VALUES ('$Nim','$Nama_user','$Fakultas','$Jenis_kelamin','$nama_foto')");
$query -> execute();
}
?>