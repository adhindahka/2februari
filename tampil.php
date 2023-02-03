<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TABEL DATA</title>
</head>
<body>
    <h2>DAFTAR DATA</h2>
    <a href="tambah.php"><input type="button" value="Tambah"></a>
    <table border = "1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Gender</th>
            <th>Jurusan</th>
            <th>Asal Sekolah</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Kapasitas</th>
            <th>Terisi</th>
            <th>Aksi</th>
        </tr>

    <?php
    include "koneksi.php";
    $query = mysqli_query($koneksi, "SELECT * FROM tb_jurusan INNER JOIN tb_peserta ON 
    tb_jurusan.jurusan_id = tb_peserta.jurusan_id");

    $no = 1;
    foreach ($query as $row):

    ?>

    <tr>
        <td><?= $no++; ?></td>
        <td><?= $row['nama']; ?></td>
        <td><?= $row['gender']; ?></td>
        <td><?= $row['jurusan']; ?></td>
        <td><?= $row['asalsekolah']; ?></td>
        <td><?= $row['tempatlahir']; ?></td>
        <td><?= $row['tanggallahir']; ?></td>
        <td><?= $row['kapasitas']; ?></td>
        <td><?= $row['terisi']; ?></td>
        <td>
        <a href="edit.php?jurusan_id=<?= $row['jurusan_id']; ?>">Edit</a> |
        <a href="hapus.php?jurusan_id=<?= $row['jurusan_id']; ?>">Hapus</a>
    </td>
    </tr>

    <?php endforeach; ?>
    </table>
</body>
</html>
 </body>
</html>