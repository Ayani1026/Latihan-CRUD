<?php
if (isset($_POST['add'])) {

	include_once("connect.php");

	$nama = $_POST['nama'];
	$harga = $_POST['harga'];
	$jumlah_produk = $_POST['jumlah_produk'];
	$query = "INSERT into pembelian(nama, harga, jumlah_produk) values ('$nama', $harga, '$jumlah_produk')";

	// lakukan query
	mysqli_query($mysqli, $query);

	// alihkan ke halaman utama
	header("Location: index.php");
}
?>
<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>Apotek</title>
</head>

<body>
	<nav class="navbar navbar-light bg-warning">
		<div class="container">
			<span class="navbar-brand mb-0 h1">Apotek</span>
		</div>
	</nav>
	<div class="container">
		<h3 class="mb-0 mt-4">Tambah Daftar Menu</h3>
		<a type="button" class="btn btn-primary" href="index.php">Home</a>
		<form method="POST">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="staticBackdropLabel">Tambah data</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<div class="mb-3">
						<label for="nama" class="form-label">Nama</label>
						<input type="text" class="form-control" name="nama" id="nama">
						<label for="harga" class="form-label">Harga</label>
						<input type="number" class="form-control" name="harga" id="harga">
						<label for="jumlah_produk" class="form-label">Jumlah Produk</label>
						<input type="number" class="form-control" name="jumlah_produk" id="jumlah_produk">
						
					
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">batal</button>
					<button type="submit" class="btn btn-primary" name="add">simpan</button>
				</div>
			</div>
		</form>
	</div>

</body>

</html>