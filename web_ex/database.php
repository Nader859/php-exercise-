<?php
// اتصال بقاعدة البيانات
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "airline";
$mysqli = mysqli_connect($servername, $username, $password, $dbname);

// التحقق من وجود اتصال بنجاح
if (!$mysqli) {
    die("Connection failed: " . mysqli_connect_error());
}