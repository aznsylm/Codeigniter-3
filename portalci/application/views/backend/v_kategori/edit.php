<!DOCTYPE html>
<html>
<head>
    <title>Edit Kategori</title>
</head>
<body>
    <h1>Edit Kategori</h1>
    <form action="<?php echo site_url('kategori/update/'.$kategori['id_kategori']); ?>" method="post">
        <label>Nama Kategori</label><br>
        <input type="text" name="nama_kategori" value="<?php echo $kategori['nama_kategori']; ?>" required><br><br>
        <button type="submit">Perbaharui</button>
        <a href="<?php echo site_url('kategori'); ?>">Batal</a>
    </form>
</body>
</html>
