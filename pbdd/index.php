<!DOCTYPE html>
<html>
<head>
	<title>Menu Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>
	<div class="kotak_login">
		<center><img src="pointer.png"width="200px" height="100px"></center></br>
		<form action="cek_login.php" method="post">
			<input type="text" name="username" class="form_login" placeholder="Username" required="required">
			<input type="password" name="password" class="form_login" placeholder="Password" required="required">
			<input type="submit" class="tombol_login" value="LOGIN">
		</form>
		
	</div>
</body>
</html>