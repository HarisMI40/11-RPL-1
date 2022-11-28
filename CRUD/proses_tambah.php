<?php
$nama = $_POST['nama'];
$gambar = $_POST['gambar'];

$koneksi = new PDO("mysql:host=localhost;dbname=11rpl", "root", "");
$query = $koneksi->query("insert into siswa values ('', '$nama','$gambar')");
if($query){
    header("Location:tampil.php");
}