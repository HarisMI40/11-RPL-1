<?php
$id = $_GET['id'];
$koneksi = new PDO("mysql:host=localhost;dbname=11rpl", "root", "");

$query = $koneksi->query("delete from siswa where id='$id'");

if($query){
    header("location: tampil.php");
}