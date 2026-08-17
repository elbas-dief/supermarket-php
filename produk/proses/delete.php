<?php

require __DIR__ . '/../../config/koneksi.php';

$id = $_GET['id'];
$sql = "DELETE FROM products WHERE id=$id";
$conn->query($sql);

header ("location: /index.php");

?>