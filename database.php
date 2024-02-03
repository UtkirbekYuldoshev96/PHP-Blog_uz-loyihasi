<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = 'php_blog';

try {
      // agar postsql bo'lsa === > pgsql === deb yoziladi
      $pdo = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
      // set the PDO error mode to exception
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      // echo "Connected successfully";
} catch (PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
}
?>