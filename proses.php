<?php
include 'koneksi.php';
$nama = $_POST['nama'];

$sql = "insert into sekolah_skincare values ('$nama')";
$query = mysql_query($koneksi, $sql);

if (!$query) {
    die(mysqli_error($koenksi));    
}

header("location: index.php");