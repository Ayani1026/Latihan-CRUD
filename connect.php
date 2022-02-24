<?php
$servername = "localhost";
$database = "apotek";
$username = "root";
$password = "";

$mysqli = mysqli_connect($servername, $username, $password, $database);

function query($query) {
    // koneksi php ke sql
    $connection = mysqli_connect("localhost", "root", "", "apotek");
    // ambil data sql dan disimpan ke variable
    $result = mysqli_query($connection, $query);
    // masukkan data sql ke var rows dengan perulangan
    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
        // data perulangan di dalam $row diappend ke $rows
        $rows[] = $row;
    }
    return $rows;
}

function ubah($method) {
    $connection = mysqli_connect("localhost", "root", "", "apotek");

    // data inputan dimasukkan ke variable
    $id = $method["id_pembelian"];
    $jumlah_produk = htmlspecialchars($method["jumlah_produk"]);
    $harga = htmlspecialchars($method["harga"]);
    $nama = htmlspecialchars($method["nama"]);
    
    


    // query update
    $query = "UPDATE pembelian SET 
              harga = '$harga',
              jumlah_produk = '$jumlah_produk',
              nama = '$nama'

              WHERE id_pembelian = $id";
   return mysqli_query($connection, $query);
    return mysqli_affected_rows($connection);
}
?>