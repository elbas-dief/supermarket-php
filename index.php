<?php
require __DIR__ . '/config/koneksi.php';
require __DIR__ . '/templates/header.php';


// Ambil Data Produk
$sql = "SELECT * FROM products";
$result = $conn->query($sql)->fetch_all(MYSQLI_ASSOC);

// var_dump($result[0]['nama'])
?>

<h1 style="text-align: center; margin-bottom:30px;">Daftar Produk</h1>

<ul class="product-list">
    <?php foreach ($result as $produk): ?>
        <li class="card p-2">
            <img src="<?= $produk['image']; ?>" alt="<?= $produk['image']; ?>" class="image-product"> <br>
            <div class="nama-harga">
                <div class="nama"> <?= $produk['nama']; ?> </div>
                <div class="harga"> Rp <?= $produk['harga']; ?> </div>
            </div>
            <button class="btn btn-primary">Buy</button>
        </li>
    <?php endforeach; ?>
</ul>

<!-- Next Tugas bikin card produk -->

<?php
require __DIR__ . '/templates/footer.php';
?>