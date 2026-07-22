<?php
$servername = "localhost";
$username = "root"; // genelde localde root olur
$password = ""; // XAMPP kullanıyorsan boş bırak
$database = "teknorium"; // veritabanı adın

$conn = new mysqli($servername, $username, $password, $database);

// Bağlantı kontrolü
if ($conn->connect_error) {
    die("Veritabanı bağlantı hatası: " . $conn->connect_error);
}
?>
