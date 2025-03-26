<?php
$host = 'localhost';
$dbname = 'aibregistration';
$username = 'root';  // 替换为您的数据库用户名
$password = '';      // 替换为您的数据库密码

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->exec("SET NAMES utf8mb4");
} catch(PDOException $e) {
    die("連接失敗: " . $e->getMessage());
}
?>