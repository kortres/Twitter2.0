<?php
$servername = "localhost";
$database = "twitter";
$username = "root";
$password = "";

// Устанавливаем соединение
$conn = mysqli_connect($servername, $username, $password, $database);

// Проверяем соединение
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}

?>