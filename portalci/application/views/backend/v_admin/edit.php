<form action="<?php echo site_url('Admin/update/'.$edit['kd_admin']); ?>" method="post">
    <label>Kode Admin</label><br>
    <input type="text" name="kd_admin" disabled value="<?php echo $edit['kd_admin']; ?>"><p></p>
    <input type="text" name="kd_admin" hidden value="<?php echo $edit['kd_admin']; ?>"><p></p>
    <label>Nama Admin</label><br>
    <input type="text" name="nama_admin" value="<?php echo $edit['nama_admin']; ?>"><p></p>
    <label>Email Admin</label><br>
    <input type="email" name="email_admin" value="<?php echo $edit['email_admin']; ?>"><p></p>
    <label>No Hp</label><br>
    <input type="tel" name="hp_admin" value="<?php echo $edit['hp_admin']; ?>"><p></p>
    <label>Password</label><br>
    <input type="password" name="pswd_admin" value="<?php echo $edit['pswd_admin']; ?>"><p></p>
    <button type="submit" name="button">Perbaharui</button>
    <a href="<?php echo site_url('Admin'); ?>"><button type="button" name="button">Batal</button></a>
</form>
