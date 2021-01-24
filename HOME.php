<?php

include "KONEKSI-DATABASE.php";
require 'vendor/autoload.php';
use Carbon\Carbon;
$jamdinding
 = Carbon::now();
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="CSS/HOME.css">
</head>
<body>
	
	<!-- HEADER -->
	<div class="container">
		<div class="topbar">
			<div class="img">
				<img src="FOTO/logogaming.png"  height="100%" width="200">
			</div>

			<div class="img2">
				
			</div>

			<div class="navbar">
				<ul>
					<li class="link-navigasi"><a class='link-navigasi' href="HOME.php">HOME</a></li>
					<li class="link-navigasi"><a  class='link-navigasi'href="WISHLIST.php">CART</a></li>
					<?php
					$penggunaBelumLogin = !isset($_SESSION["username"]);
					if ($penggunaBelumLogin) {
						echo "<li><a class='link-navigasi' href='LOGIN.php'>LOGIN</a></li>";
					} else {
						echo "<li><a class='link-navigasi' href='AKUN.php'>AKUN</a></li>";
						echo "<li><a class='link-navigasi' href='LOGOUT.php'>LOGOUT</a></li>";
					}
					?>
				</ul>
			</div>
		</div>
	</div>

	<!-- CONTENT1 -->
	<div class="container3">

		

	</div>


	<!-- CONTENT2 -->
	<div class="container2">
		<div class="layoutimgbarang">
			<form method="post">
				<div class="imgbarang">
					<img src="FOTO/keyboardgaming.png" width="10%" class="img3">
					<p class="p"><b>Keyboard Gaming</b><br><b>US$ 2.500</b></p>

					<button class="button" type="submit" name="button1">Add to Cart</button>

					<br>

				</div>


				<div class="imgbarang">
					<img src="FOTO/mousegaming.png" width="10%" class="img3">
					<p class="p2"><b>Mouse Gaming</b><br><b>US$ 500.000</b></p>

					<button class="button2" type="submit" name="button2">Add to Cart</button>

				</div>

				<div class="imgbarang">
					<img src="FOTO/CASING.png" width="10%" class="img3">
					<p class="p2"><b>Casing Komputer</b><br><b>US$ 700.000</b></p>

					<button class="button" type="submit" name="button3">Add to Cart</button>

				</div>


				<div class="imgbarang">
					<img src="FOTO/KURSI.png" width="10%" class="img3">
					<p class="p2"><b>Gaming Chair</b><br><b>US$ 3.000.000</b></p>

					<button class="button2" type="submit" name="button4">Add to Cart</button>
				</form>
			</div>		
			
		</div>
	</div>

	<!-- PHP -->

	<?php
	// Pesan antar halaman
	if (isset($_SESSION["pesan"])) {
		echo "<script>window.alert('" . $_SESSION["pesan"] . "');</script>";
		unset($_SESSION["pesan"]);
	}
	
	if (isset($_POST['button1'])) {
		if (isset($_SESSION['username'])) {
			$q1 = mysqli_query($koneksiDatabase, "SELECT harga from barang where id_barang = '1'");
			$harga=mysqli_fetch_array($q1);
			$q2= mysqli_query($koneksiDatabase,"SELECT id_pelanggan from pelanggan where username = '".$_SESSION['username']."'");
			$idpel=mysqli_fetch_array($q2);
			$butt1=mysqli_query($koneksiDatabase, "insert into detailpembelian values ('".$idpel['id_pelanggan']."','1','1', '".$harga['harga']."') ");
			if ($butt1) {
				echo "<script>window.alert(' BERHASIL ');</script>";
				$_SESSION['pilihan'] = 1;
			}
			else{
				echo "<script>window.alert(' SALAH ');</script>";
			}
		}else {
			echo "<script>window.alert(' Maaf anda belum Login ');</script>";
		}

	}else if (isset($_POST['button2'])){
		if (isset($_SESSION['username'])) {
			$q1 = mysqli_query($koneksiDatabase, "SELECT harga from barang where id_barang = '2'");
			$harga=mysqli_fetch_array($q1);
			$q2= mysqli_query($koneksiDatabase,"SELECT id_pelanggan from pelanggan where username = '".$_SESSION['username']."'");
			$idpel=mysqli_fetch_array($q2);
			$butt2=mysqli_query($koneksiDatabase, "insert into detailpembelian values ('".$idpel['id_pelanggan']."','2','1', '".$harga['harga']."') ");
			if ($butt2) {
				echo "<script>window.alert(' BERHASIL ');</script>";
				$_SESSION['pilihan'] = 2;
			}
			else{
				echo "<script>window.alert(' SALAH ');</script>";
			}
		}else {
			echo "<script>window.alert(' Maaf anda belum Login ');</script>";
		}
	}else if (isset($_POST['button3'])){
		if (isset($_SESSION['username'])) {
			$q1 = mysqli_query($koneksiDatabase, "SELECT harga from barang where id_barang = '3'");
			$harga=mysqli_fetch_array($q1);
			$q2= mysqli_query($koneksiDatabase,"SELECT id_pelanggan from pelanggan where username = '".$_SESSION['username']."'");
			$idpel=mysqli_fetch_array($q2);
			$butt3=mysqli_query($koneksiDatabase, "insert into detailpembelian values ('".$idpel['id_pelanggan']."','3','1', '".$harga['harga']."') ");
			if ($butt3) {
				echo "<script>window.alert(' BERHASIL  ');</script>";
				$_SESSION['pilihan'] = 3;
			}
			else{
				echo "<script>window.alert(' SALAH ');</script>";
			}
		}else {
			echo "<script>window.alert(' Maaf anda belum Login ');</script>";
		}
	}else if (isset($_POST['button4'])){
		if (isset($_SESSION['username'])) {
			$q1 = mysqli_query($koneksiDatabase, "SELECT harga from barang where id_barang = '4'");
			$harga=mysqli_fetch_array($q1);
			$q2= mysqli_query($koneksiDatabase,"SELECT id_pelanggan from pelanggan where username = '".$_SESSION['username']."'");
			$idpel=mysqli_fetch_array($q2);
			$butt4=mysqli_query($koneksiDatabase, "insert into detailpembelian values ('".$idpel['id_pelanggan']."','4','1', '".$harga['harga']."') ");
			if ($butt4) {
				echo "<script>window.alert(' BERHASIL ');</script>";
				$_SESSION['pilihan'] = 4;
			}
			else{
				echo "<script>window.alert(' SALAH ');</script>";
			}
		}else {
			echo "<script>window.alert(' Maaf anda belum Login ');</script>";
		}
	}
	
	?>

	<script src="JS/HOME.js" type="text/javascript">
	</script>

<footer>
                <div class="copyright" align="center">
                    <span>Time : <?php echo "$jamdinding"; ?></span>
                </div>
            </footer> 
</body>
</html>