<?php 

require __DIR__ . '/../config/koneksi.php';

// Ambil Data
$username = $_POST['username']; // pastikan pakai kurung siku
$password = $_POST['password'];

// Ambil data dari database berdasarkan username
$sql = "SELECT * FROM users WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->execute([$username]);

$user = $stmt->get_result()->fetch_assoc();

if (!$user) {
    header("location: {$_SERVER['HTTP_REFERER']}");
    exit();
}

// $password = password an diinput user | $user['password'] = hasil fetch dari database
if (!password_verify(!$password, !$user['password'])) {
    header("location: {$_SERVER['HTTP_REFERER']}");
    exit();
}

session_start();
$_SESSION['is_logged_in'] = true;
$_SESSION['username'] = $username;
header('location: /produk/index.php');

?>