<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header("location:login.php");
    }


    echo $_COOKIE['id'];
?>

<h1>Home</h1>
<a href="logout.php">Logout</a>