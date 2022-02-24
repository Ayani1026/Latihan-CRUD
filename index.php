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
        <h3 class="mb-0 mt-4">Daftar Menu</h3>
        <a type="button" class="btn btn-primary" style="float: right;" href="add.php">Tambah</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jumlah Produk</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include_once("connect.php");

                $no = 1;
                $hasil = mysqli_query($mysqli, "SELECT * from pembelian");
                ?>
                <?php while ($row = mysqli_fetch_array($hasil)) : ?>
                    <tr>
                        <th scope="row"><?= $no++ ?></th>
                        <td><?= $row['nama'] ?></td>
                        <td><?= $row['jumlah_produk'] ?></td>
                        <td><?= $row['harga'] ?></td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                <a type="button" class="btn btn-danger hapus" href="delete.php?id=<?= $row['id_pembelian'] ?>">Hapus</a>
                                <a type="button" class="btn btn-warning edit" href="edit.php?id=<?= $row['id_pembelian'] ?>">Edit</a>
                            </div>
                        </td>
                    </tr>
                <?php endwhile ?>
            </tbody>
        </table>
    </div>

</body>

</html>