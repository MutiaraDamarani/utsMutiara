<!doctype HTML>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dasbord Admin</title>
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	
</head>
<body>
	<nav class="navbar-fixed-top navbar-inverse" style=>
		<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			<span class="sr-only">Toggle Nav</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#"></a>
		</div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li class="active"><img src="th.png"></li>
			<li><a href="index.php">DASBOARD ADMIN <span class="sr-only">(current)</span></a></li>
			
			<li><a href="tampil-laporan.php">INPUT DATA</a></li>
			<li><a href="logout.php">LOGOUT</a></li>

			</ul>
		</div>
		</div>
	</nav>	
	<body>
	<nav class="navbar navbar-inverse" style=>
		<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			<span class="sr-only">Toggle Nav</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#"></a>
		</div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li class="active"><img src="images web/logo2.png"></li>
			<li><a href="index.php">MENU <span class="sr-only">(current)</span></a></li>
			
			<li><a href="tampil-laporan.php">INPUT DATA</a></li>
			<li><a href="logout.php">LOGOUT</a></li>

			</ul>
		</div>
		</div>
	</nav>	
	
	<center><h3>DATABASE LAPORAN BARANG</h3>

<table border="2" width="1000px">
		<tr>
		<td>ID BARANG</td><td>KODE BARANG</td><td>NAMA BARANG</td><td>STOK AWAL</td><td>BARANG MASUK</td><td>BARANG KELUAR</td><td>STOK AKHIR</td>
		</tr>
		

<?php


include "koneksi.php";

$sql=$koneksi->query("select * from stok_barang order by id_barang ASC");

while($row= $sql->fetch_assoc()){
	?>

		<tr>
			<td><?php echo $row['id_barang']?></td>
			<td><?php echo $row['kode_barang']?> </td>
			<td><?php echo $row['nama_barang']?></td>
			<td><?php echo $row['stok_awal']?></td>
			<td><?php echo $row['barang_masuk']?> </td>
			<td><?php echo $row['barang_keluar']?></td>
			<td><?php echo $row['stok_akhir']?></td>
			<td>
		</tr>
<?php
}
?>

</table></center>


</body>
</html>
</body>
</html>
