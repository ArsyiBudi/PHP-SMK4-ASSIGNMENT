<?php 
    
    session_start();

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'db_pwpb19';

    $mysql = mysqli_connect($host, $user, $pass, $db) or die('tidak dapat koneksi ke database');
?>