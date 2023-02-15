<?php
session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];


    $koneksi = new PDO('mysql:host=localhost;dbname=latihan_autentikasi','root', '');

    $query = $koneksi->query("select * from user where username='$username' and password='$password'");

    $data = $query->fetch();

    if($data){ // jika data ada
//        $_SESSION['sessid'] = hash('sha256', $data['username']);
        $_SESSION['username'] = $data['username'];
        $_SESSION['password'] = $data['password'];

        if(isset($_POST['remember_me'])){
          setcookie('id', $data['id'], time() + 3600);
        }

        header('location: home.php');
    }else{
        echo "username atau password tidak ditemukan";
    }

