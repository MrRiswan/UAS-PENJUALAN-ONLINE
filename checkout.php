<?php
session_start();
$koneksi= new mysqli("localhost","root","","toko_online");
//jk tidak ada session pelanggan[blom llogin] maka dilarikan ke login php
if (!isset($_SESSION["pelanggan"]))
 {
	echo "<script>alert('Silakan Login');</script>";
	echo "<script>location='login.php';</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Checkout</title>
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

<pre>
	<?php print_r($_SESSION["pelanggan"]); ?>
</pre>
</body>
</html>