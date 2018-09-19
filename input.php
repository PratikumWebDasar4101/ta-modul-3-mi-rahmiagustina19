<?php 
session_start();

if (isset($_SESSION["username"]) && isset($_SESSION["password"])) {
	
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		
		<table>
			<form action="koneksi.php" method="post" enctype="multipart/form-data">
		<tr>
		<td>Nama User </td>
		<td>:</td>
		<td><input type="text" name="Nama_user"></td>
		</tr>
		<tr>
		<td>Nim </td>
		<td>:</td>
		<td><input type="text" name="Nim"></td>
		</tr>
		<tr>
			<td>Fakultas</td>
			<td>
				<select name="Fakultas" id="dropdown">
					<option value="">FTE</option>
					<option value="">FEB</option>
					<option value="">FKB</option>
					<option value="">FIK</option>
					<option value="">FRI</option>
					<option value="">FIF</option>
					<OPTION value="">FIT</OPTION>
				</select>
			</td>
			<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td>
				<input type="radio" name="Jenis_kelamin" value="laki-laki">Laki-laki
				<input type="radio" name="Jenis_kelamin" value="perempuan">Perempuan
				</td>
		</tr>
		<tr>
			<td>File Gambar</td>
			<td>:</td>
			<td>
			<input name="File_gbr" type="file" id="required" />
			<input type="submit" value="upload" />
		</td>
		</tr>
		</form>
	</table>
<a href="logout.php">Logout</a>
</body>
</html>
<?php 
}else {
	header("Location: login.php");
}
?>
