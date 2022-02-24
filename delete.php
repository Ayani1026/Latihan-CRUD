<?php

include_once("connect.php");

$idhapus = $_GET['id'];
$query = "DELETE from pembelian where id_pembelian = $idhapus";

// lakukan query
mysqli_query($mysqli, $query);

// alihkan ke halaman utama
header("Location: index.php");
