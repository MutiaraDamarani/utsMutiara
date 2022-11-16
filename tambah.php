
<!doctype HTML>
<html>
<head>
	<title>INPUT LAPORAN BARANG</title>
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<center><h3> <b>Input LAPORAN BARANG</b></h3></center>
				<br>
				<form action="proses-tambah.php" method="POST">
					<div class="form-group">
						<label for="id_barang">id_barang</label>
						<input type="number" name="id_barang" class="form-control">
					</div>

					<div class="form-group">
						<label for="kode_barang">kode_barang</label>
						<input type="number" name="kode_barang" class="form-control">
					</div>
	
					<div class="form-group">
						<label for="nama_barang">nama_barang</label>
						<input name="nama_barang" class="form-control">
					</div>

					<div class="form-group">
						<label for="stok_awal">stok_awal</label>
						<textarea name="stok_awal" class="form-control">
						</textarea>
					</div>
					<div class="form-group">
						<label for="barang_masuk">barang_masuk</label>
						<textarea name="barang_masuk" class="form-control">
						</textarea>
					</div>
					<div class="form-group">
						<label for="barang_keluar">barang_keluar</label>
						<textarea name="barang_keluar" class="form-control">
						</textarea>
					</div>
					<div class="form-group">
						<label for="stok_akhir">stok_akhir</label>
						<textarea name="stok_akhir" class="form-control">
						</textarea>
					</div>




					<input type="submit" name="kirim" value="Simpan" class="btn btn-info">
					<input type="reset" name="kosongkan" value="kosongkan" class="btn btn-danger">

		<script src="bootstrap/js/jQuery.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>