<div class="container-fluid">

<div class="alert alert-success" role="alert">
        <i class="fas fa-user-friends"></i>Tambah Admin</div>

<form method="post" action="<?php echo base_url('administrator/admin/input_aksi')?>">
    <div class="form-group">
        <label>USERNAME ADMIN</label>
        <input type="text" name="uname_admin" placeholder="Masukkan Username Admin" class="form-control">
        <?php echo form_error('uname_admin','<div class="text-danger small" ml-3>')?>
    </div>

    <div class="form-group">
        <label>PASSWORD ADMIN</label>
        <input type="text" name="pass_admin" placeholder="Masukkan Password Admin" class="form-control">
        <?php echo form_error('pass_admin','<div class="text-danger small" ml-3>')?>
    </div>

    <div class="form-group">
        <label>NAMA ADMIN</label>
        <input type="text" name="nama_admin" placeholder="Masukkan Nama Admin" class="form-control">
        <?php echo form_error('nama_admin','<div class="text-danger small" ml-3>')?>
    </div>

    <button type="submit" class='btn btn-primary'>Simpan</button>

</form>

</div>