<?php
require __DIR__ . '/config/koneksi.php';
require __DIR__ . '/templates/header.php';

$search = trim($_GET['search'] ?? '');
$where = '';

if ($search !== '') {
    $where = "WHERE nama LIKE '%$search%'";
}

// Ambil Data Produk
$sql = "SELECT * FROM products $where";
$result = $conn->query($sql)->fetch_all(MYSQLI_ASSOC);

// var_dump($result[0]['nama'])
?>

<h1 style="text-align: center; margin-bottom:30px; font-weight:bold;">Mau Beli Apa Hari Ini?</h1>
<section>
    <div class="top-bar container">
        <form action="" class="d-flex gap-3 search">
            <input type="text" name="search" class="form-control" placeholder="Cari produk..." value="<?= $search; ?>">
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
    </div>
    <div style="padding:0px 14px; align-items:end;">
        <div style="background-color: #e3e3e3; height:2px; border-radius:5px; width:auto"></div>
    </div>
    <ul class="product-list container">
        <?php foreach ($result as $produk): ?>
            <li class="card p-2 gap-1">
                <img src="<?= $produk['image'] ?? $img_placeholder; ?>" alt="<?= $produk['image']; ?>" class="image-product"><br>
                <div class="nama-harga">
                    <!-- Attack Defender -->
                    <div class="nama" style="font-weight: bold; text-align:start"> <?= htmlspecialchars($produk['nama']); ?> </div>
                    <div class="harga" style="font-weight:bold; color:green; margin-bottom:8px; text-align:end; min-width:max-content; margin-left:4px"> Rp <?= number_format($produk['harga'], 0, ",", "."); ?> </div>
                </div>
                <div class="card-action">
                    <button class="btn btn-primary" style="width: 100%">Buy</button>
                    <a href="/produk/edit.php?id=<?= $produk['id']; ?>" class="card-item btn btn-warning" style="width: 100%">Edit</a>
                    <a href="/produk/proses/delete.php?id=<?= $produk['id']; ?>" class="card-item btn btn-danger" style="width: 100%">Delete</a>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>
</section>

<!-- Next Tugas bikin card produk -->

<?php
require __DIR__ . '/templates/footer.php';
?>