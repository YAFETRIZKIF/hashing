<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>HASH PASSWORD</title>
</head>
<body>
<!--- MEMASUKKAN TEKS PASSWORD YANG AKAN DIHASHING--->
<form method="POST" action="">
<input type="text" name="password_hash"><br><br>
<!---kolom input--->
Masukkan Password :<input type="submit" name="proses" value="proses">
</form> 
</body>
</html>

<?php
error_reporting(0);
if(isset($_POST['proses'])){
	$password = $_POST['password_hash'];
	$hash = password_hash($password, PASSWORD_DEFAULT); /* perintah pemrosesan menggunakan algoritma password_hash */
	echo "password : ".$_POST['password_hash']; /* menampilkan password yang akan di hashing */
	echo "<br>Hasil hash : ".$hash; /* menampilkan hasil hashing */
}
?>