<?php
// HALAMAN UPDATE DATA

// koneksi ke function
require "connect.php";

// koneksi ke database
$connection = mysqli_connect("localhost", "root", "", "apotek");

// ambil data database dari id yang sudah di GET.
$id = $_GET["id"];
// diberi [0] karena sebenarnya fungsi query ini mengembalikan array numerik baru di dalamnya ada array associative jadi harus dibuka dulu.
$mhs = query("SELECT * FROM pembelian WHERE id_pembelian = $id")[0];

//cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
	//cek data apakah berhasil diubah atau tidak dikarenakan php tidak memberikan pesan kesalahan di web. Menggunakan mysqli_affected_rows({koneksi}).
	if (ubah($_POST) > 0) {
		echo "
        <script>
            alert('data berhasil diubah');
            document.location.href='index.php';
        </script>";
	} else {
		echo "Gagal <br>";
	}
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
		<h3 class="mb-0 mt-4">Tambah Data</h3>
		<a type="button" class="btn btn-primary" href="index.php">Home</a>
		<form method="POST">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="staticBackdropLabel">Edit data</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<input type="hidden" name="id_pembelian" value="<?= $mhs['id_pembelian'] ?>">
					<div class="mb-3">
						<label for="Nama">Nama: </label>
						<input type="text" name="nama" id="Nama" required value="<?= $mhs['nama'] ?>">
						<label for="Jurusan">Harga: </label>
						<input type="text" name="harga" id="Jurusan" required value="<?= $mhs['harga'] ?>">
						<label for="Jurusan">Jumlah Produk: </label>
						<input type="text" name="jumlah_produk" id="Jurusan" required value="<?= $mhs['jumlah_produk'] ?>">
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">batal</button>
					<button type="submit" class="btn btn-primary" name="submit">simpan</button>
				</div>
			</div>
		</form>
	</div>

</body>

</html>