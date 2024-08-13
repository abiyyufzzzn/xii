<?php
$koneksi = mysqli_connect('localhost','root','','sekolah_skincare');

$query = mysqli_query($koneksi, "select * from product");

while($data = mysqli_fetch_array($query)){
    echo $data["nama"] . "<br />";
    echo $data["id_kategori"];
    ?>
    <a href ="hapus.php?id=<?= $data['id'] ?>">Hapus</a>;
    <?php
    
}