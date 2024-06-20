<!-- Debug Data -->


<!--Form-->
<form method="post" action="<?php echo site_url('berita/update/' . $edit['id_berita']); ?>" enctype="multipart/form-data">
    <label>Judul Berita</label><br>
    <input type="text" name="judul_berita" class="" placeholder="Masukan Judul Berita" value="<?php echo isset($edit['judul_berita']) ? $edit['judul_berita'] : ''; ?>" required oninvalid="this.setCustomValidity('Judul Berita Harus Di Isi')" oninput="setCustomValidity('')"><p></p>

    <label>Tanggal</label><br>
    <input type="date" name="tgl_berita" class="" value="<?php echo isset($edit['tgl_berita']) ? $edit['tgl_berita'] : ''; ?>" required oninvalid="this.setCustomValidity('Tanggal Berita Harus Di Isi')" oninput="setCustomValidity('')"><p></p>

    <label>Jam</label><br>
    <input type="time" name="jam_berita" class="" value="<?php echo isset($edit['jam_berita']) ? $edit['jam_berita'] : ''; ?>" required oninvalid="this.setCustomValidity('Jam Berita Harus Di Isi')" oninput="setCustomValidity('')"><p></p>

    <label>Kategori</label><br>
    <select name="id_kategori" class="" required>
        <option value="<?php echo isset($edit['id_kategori']) ? $edit['id_kategori'] : 0; ?>"><?php echo isset($edit['nama_kategori']) ? $edit['nama_kategori'] : '- Pilih Kategori -'; ?></option>
        <?php foreach ($kategori as $r): ?>
            <option value="<?php echo $r['id_kategori']; ?>"><?php echo $r['nama_kategori']; ?></option>
        <?php endforeach; ?>
    </select><p></p>

    <label>Isi Berita</label><br>
    <textarea name="isi_berita" class="" id="" placeholder="isi Berita" rows="20" cols="80" required><?php echo isset($edit['isi_berita']) ? $edit['isi_berita'] : ''; ?></textarea><p></p>

    <?php if (isset($edit['img_berita']) && !empty($edit['img_berita'])): ?>
        <img src="<?php echo base_url('assets/img_berita/' . $edit['img_berita']); ?>" width="400" height="300"><br>
    <?php endif; ?>
    <label>Ganti Foto</label><br>
    <input type="file" name="img_berita"><p></p>

    <button class="" type="submit">Perbaharui</button>
    <a href="<?php echo site_url('admin'); ?>"><button class="" type="button">Batal</button></a>
</form>
<!--EndForm-->
