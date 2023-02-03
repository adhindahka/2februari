<?php
include ("koneksi.php");

$id = $_GET['jurusan_id'];
$sql = "DELETE FROM tb_jurusan WHERE jurusan_id='$id'";
$sql = "DELETE FROM tb_peserta WHERE jurusan_id='$id'";

$query = mysqli_query($koneksi, $sql);

if($query){
    header('location:tampil.php');
} else {
    echo "gagal";
}
?>