<?php
require __DIR__ . '/../config/koneksi.php';
require __DIR__ . '/../templates/header.php';
?>

<form action="./store.php" method="post" enctype="multipart/form-data">
    <div>
        <label for="name">Nama</label>
        <input type="text" name="nama" id="nama">
    </div>
    <div>
        <label for="harga">Harga</label>
        <input type="number" name="harga" id="harga">
    </div>
    <div>
        <label for="stock">Stock</label>
        <input type="number" name="stock" id="stock">
    </div>
    <div>
        <label for="kategori">Kategori</label>
        <select name="kategori" id="kategori">
            <option value="">-- Pilih Kategori --</option>
            <option value="Buah">Buah</option>
            <option value="Sayur">Sayur</option>
            <option value="Minuman">Minuman</option>
            <option value="Sembako">Sembako</option>
            <option value="Sabun">Sabun</option>
            <option value="Snack">Snack/option>
            <option value="Bumbu">Bumbu</option>
        </select>
    </div>
    <div>
        <label for="image">Upload Image</label>
        <input type="file" name="image" id="image">
    </div>
    <button type="submit">submit</button>
</form>

<?php
require __DIR__ . '/../templates/footer.php';
?>