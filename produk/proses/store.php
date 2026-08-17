<?php 
require __DIR__ . '/../../config/koneksi.php';

$nama = $_POST['nama'];
$harga = $_POST['harga'];
$stock = $_POST['stock'];
$kategori = $_POST['kategori'];

// $filename = $_FILES['image']['name'];
// $tmp_name = $_FILES['image']['tmp_name'];

// $image_name = time() . '_' . $filename;
// $target_dir = __DIR__ . '/../assets' . $image_name;

// move_uploaded_file($tmp_name, $target_dir);

$sql = "INSERT INTO products(nama, harga, stock, kategori) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->execute([$nama, $harga, $stock, $kategori]);

// $conn->query($sql);

header("Location: /index.php")

?>