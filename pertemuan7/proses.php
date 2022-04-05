
<?php
include 'koneksi.php';

if(isset($_POST['submit'])){
    $mahasiswa_npm = $_POST['mahasiswa_npm'];
    $matakuliah_kodemk = $_POST['matakuliah_kodemk'];

   $query = mysqli_query($koneksi, "INSERT INTO krs SET mahasiswa_npm='$mahasiswa_npm', matakuliah_kodemk='$matakuliah_kodemk'");

    if ($query) {
    echo 'berhasil ditambahkan';
    header("Location:index.php");
    }
}else if(isset($_POST['update'])){

    $id = $_POST['id'];
    $mahasiswa_npm = $_POST['mahasiswa_npm'];
    $matakuliah_kodemk = $_POST['matakuliah_kodemk'];

    $query = mysqli_query($koneksi, "UPDATE krs SET id = '$id', mahasiswa_npm='$mahasiswa_npm', matakuliah_kodemk='$matakuliah_kodemk' WHERE id=$id");

    if ($query) {
    echo 'berhasil ditambahkan';
    header("Location:index.php");
    }

}else if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = mysqli_query($koneksi, "DELETE FROM krs where id=$id");
    header("Location:index.php");
}