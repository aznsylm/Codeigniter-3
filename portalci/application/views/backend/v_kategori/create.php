<!DOCTYPE html>
<html>
<head>
    <title>Tambah Kategori</title>
</head>
<body>
    <h1>Tambah Kategori</h1>
    <form action="<?php echo site_url('kategori/store'); ?>" method="post">
        <label>Nama Kategori</label><br>
        <input type="text" name="nama_kategori" required><br><br>
        <button type="submit">Simpan</button>
        <a href="<?php echo site_url('kategori'); ?>">Batal</a>
    </form>
</body>
</html>
