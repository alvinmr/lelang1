<?php

$host = 'us-cdbr-east-02.cleardb.com';
$user = 'b2855f1ea468df';
$password = '99e409f4';
$db = 'heroku_336cb94e119e4f5';
$base_url = 'localhost';

$koneksi = mysqli_connect($host, $user, $password, $db) or die('koneksi gagal');
