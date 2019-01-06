<?php
session_start();
$koneksi= new mysqli("localhost","root","","toko_online");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Toko Online</title>
	<link rel="stylesheet" href="admin/assets/css/bootstrap.css">
</head>
<body>


<nav class="navbar navbar-default">
	<div class="container">
	
	<ul class="nav navbar-nav">
		<li><a href="index.php">HOME</a></li>
		<li><a href="keranjang.php">Keranjang</a></li>
		<?php if (isset($_SESSION["pelanggan"])): ?>
			<li><a href="logout.php">LOGOUT</a></li>
		<?php else: ?>
			<li><a href="login.php">Login</a></li>
		<?php endif ?>
		<li><a href="checkout.php">Checkout</a></li>
	</ul>
	</div>
</nav>

<section class="konten">
	<div class="container">
	<h1>Barang Terbaru</h1>

	<div class="row">
		<?php $ambil = $koneksi->query("SELECT * FROM produk")?>
		<?php while ($perproduk = $ambil->fetch_assoc()){ ?>
		<div class="col-md-3">
			<div class="thumbnail">
				<img src="foto_produk/<?php echo $perproduk['foto_produk'];?>" alt="">
					<div class="caption">
						<h3><?php echo $perproduk['nama_produk'];?></h3>
						<h3></h3>
						<h5> Rp. <?php echo number_format($perproduk['harga_produk']); ?></h5>
						<a href="beli.php?id=<?php echo $perproduk['id_produk'];?> "class=btn btn-primary>Beli</a>
					</div>
				</div>
			</div>

			<?php } ?>

		</div>
		
	</div>
	
</section>

</body>
</html>