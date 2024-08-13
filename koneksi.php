<?php

  //* buat koneksi
  $koneksi = mysqli_connect('localhost','root','','sekolah_skincare');

  // * perintah SQL
  $query = mysqli_query($koneksi, "select * from product");

  // * ambil data

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    <table border="1">
      <tr>
        <td>Nama</td>
        <td>Kategori</td>
      </tr>
      <?php while ($data = mysqli_fetch_array($query)){ ?>
        <tr>
          <td><?php echo $data ["nama"] ?></td>
          <td><?php echo $data ["id_kategori"] ?></td>
        </tr>
      <?php } ?>
    </table>
</body>
</html>