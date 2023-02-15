<?php

    if(isset($_COOKIE['id'])){  // cek, apakah ada cookie

        $id = $_COOKIE['id']; // masukan cookie id kedalam variabel id

        $koneksi = new PDO('mysql:host=localhost;dbname=latihan_autentikasi','root', ''); // koneksi

        $query = $koneksi->query("select * from user where id='$id'"); // mencari data berdasarkan id user, dari cookie

        $data = $query->fetch();

        if($data){ // jika data dari id tersebut ada

            // buat session
            session_start();

            $_SESSION['username'] = $data['username'];
            $_SESSION['password'] = $data['password'];

            // arahkan ke halaman home
            header('location: home.php');
        }else{

            // jika tidak, hapus cookie tersebut di halaman logout    jh
            header('location: logout.php');
        }
    }
?>

<html>
    <head></head>
    <body>
        <form action="proses_login.php" method="post">
            <div>
                <label>Username</label>
                <input type="text" name="username" />
            </div>

            <div>
                <label>Password</label>
                <input type="password" name="password" />
            </div>

            <div>
                <input type="checkbox" name="remember_me" /> Remember Me
            </div>

            <div>
                <button type="submit">Login</button>
            </div>
        </form>
    </body>
</html>