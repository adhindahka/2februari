 <DOCTYPE html>
    <html lang="en">
        <head>
<title>Form Edit</title>
</head>
<body>
    <?php
    include("koneksi.php");

    $id = $_GET['jurusan_id'];
    $query = mysqli_query($koneksi, "SELECT * FROM tb_peserta INNER JOIN tb_jurusan ON
    tb_jurusan.jurusan_id = tb_peserta.jurusan_id WHERE tb_peserta.id='$id'");

    while ($row = mysqli_fetch_array($query))
        ?>
        <table border="0">
            <form action="proses-edit.php" method="POST">
                <tr><h2>Edit Data</h2></tr>
                <input type="hidden" name="jurusan_id" value="<?php echo $row['jurusan_id']?>">

                <tr>
                    <td><label for="nama" value="<?php $row['nama']; ?>">Nama</label></td>
                    <td><input type="text" name="nama"></td>
    </tr>
    <tr>
        <td><label for="gender" value="<?php $row['gender']; ?>">Gender</label></td>
        <td><input type="text" name="gender"></td>
    </tr>
    <tr>
        <td><label for="jurusan" value="<?php $row['gender']; ?>">Jurusan</label></td>
        <td><input type="text" name="jurusan"></td>
    </tr>
    <tr>
        <td><label for="asalsekolah" value="<?php $row['asalsekolah']; ?>">Asal Sekolah</label></td>
        <td><input type="text" name="asalsekolah"></td>
    </tr>
    <tr>
        <td><label for="tempatlahir" value="<?php $row['tempatlahir']; ?>">Tempat Lahir</label></td>
        <td><input type="text" name="tempatlahir"></td>
    </tr>
    <tr>
        <td><label for="tanggallahir" value="<?php $row['tanggallahir']; ?>">Tanggal Lahir</label></td>
        <td><input type="date" name="tanggallahir"></td>
    </tr>
    <tr>
        <td><label for="kapasitas" value="<?php $row['kapasitas']; ?>">Kapasitas</label></td>
        <td><input type="text" name="kapasitas"></td>
    </tr>
    <tr>
         <td><label for="terisi" value="<?php $row['terisi']; ?>">Terisi</label></td>
        <td><input type="text" name="terisi"></td>
    </tr>

    <button type="submit" value="edit" name="edit">Simpan</button>
    </form>
    </table>
    <?php

    ?>
    </body>
    </html> 