
<html>
<head>
	<title>Data Prodi</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
		<?php 
	session_start();

	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:location:../index.php?pesan=gagal");
	}

	?>

	<br/>
	<br/>


	<div class="wrap">
		
		<nav class="menu">
			<ul>
				<li>
					<a href="#">Home</a>
				</li>
				<li>
					<a href="#">PBD</a>
				</li>
				<li>
					<a type="submit" value="<--logout" href="logout.php">LOGOUT</a>
				</li>
			</ul>
		</nav>
		<aside class="sidebar">
			<div class="widget">
				<h2>Keterangan Login</h2>
				<p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>
			</div>
			<div class="widget">
				<h2>Program Study</h2>
				<p>Manajemen Informatika</p>
			</div>
		</aside>
		<div class="blog">
			<div class="conteudo">
				<div class="post-info">
					Di Posting Oleh <b>Admin</b>
				</div>
<?php
require("sistem/koneksi.php");

$hub = open_connection();
$a = @$_GET["a"];
$id = @$_GET["id"];
$sql = @$_POST["sql"];
switch ($sql) {

	default:
			# code...
	read_data();
			break;
	}
mysqli_close($hub);
?>


<?php
function read_data()
{
	global $hub;
	$query = "select * from dt_prodi";
	$result = mysqli_query($hub, $query);?>

	<h2>Read Data Program Studi</h2>
	<table border="1" cellpadding="2" class="table1">
	<br><br>
		<tr class="re">
			<td>ID</td>
			<td>KODE</td>
			<td>NAMA PRODI</td>
			<td>AKREDITASI</td>
		</tr>

<?php while ($row=mysqli_fetch_array($result)) {?>
	<tr>
	<td><?php echo $row['idprodi'];?></td>
	<td><?php echo $row['kdprodi'];?></td>
	<td><?php echo $row['nmprodi'];?></td>
	<td><?php echo $row['akreditasi'];?></td>
	</tr>

	<?php } ?>
	</table>
	<?php } ?>
				
			</div>
		</div>
	</div>
 
</body>
</html>


