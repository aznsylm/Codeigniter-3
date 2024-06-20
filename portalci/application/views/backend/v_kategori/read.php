<!DOCTYPE html>
<html>
<head>
    <title>Daftar Kategori</title>
</head>
<body>
    <h1>Daftar Kategori</h1>
    <a href="<?php echo site_url('kategori/create'); ?>"><button type="button" name="button" title="Tambah Kategori">Tambah</button></a>
    <a href="<?php echo site_url('Home'); ?>"><button type="button" name="button" title="kembali ke Beranda">Kembali</button></a>
    <table border="1" style="margin-top: 10px;">
        <tr>
            <th>ID Kategori</th>
            <th>Nama Kategori</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($kategori as $kat): ?>
        <tr>
            <td><?php echo $kat['id_kategori']; ?></td>
            <td><?php echo $kat['nama_kategori']; ?></td>
            <td>
                <a href="<?php echo site_url('kategori/edit/'.$kat['id_kategori']); ?>">Edit</a>
                <a href="<?php echo site_url('kategori/delete/'.$kat['id_kategori']); ?>" onclick="return confirm('Yakin ingin menghapus kategori ini?');">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
