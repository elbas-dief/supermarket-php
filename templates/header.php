<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $judul ?? "Toko Sederhana" ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    .product-list {
      display: grid;
      grid-template-columns: repeat(5, 1fr);
      text-wrap: wordwrap;
      gap: 1em;
    }

    .card {
      list-style-type: none;
      text-align: center;
      border-radius: 10px;
    }

    .image-product {
      border-radius: 10px;
    }

    .nama-harga {
      display: flex;
      flex-direction: row;
      justify-content: space-between;
    }

  </style>

</head>
<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="/toko-sederhana/index.php">Toko Sederhana</a>
    <div>
      <a class="btn btn-sm btn-outline-light" href="/toko-sederhana/produk/index.php">Produk</a>
    </div>
  </div>
</nav>

<div class="container py-4">