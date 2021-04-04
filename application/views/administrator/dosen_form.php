<div class="container-fluid">

<div class="alert alert-success" role="alert">
        <i class="fas fa-user-friends"></i>Tambah Dosen</div>

<form method="post" action="<?php echo base_url('administrator/dosen/input_aksi')?>">
    <div class="form-group">
        <label>USERNAME DOSEN</label>
        <input type="text" name="uname_dosen" placeholder="Masukkan Username Dosen" class="form-control">
        <?php echo form_error('uname_dosen','<div class="text-danger small" ml-3>')?>
    </div>

    <div class="form-group">
        <label>PASSWORD DOSEN</label>
        <input type="text" name="pass_dosen" placeholder="Masukkan Password Dosen" class="form-control">
        <?php echo form_error('pass_dosen','<div class="text-danger small" ml-3>')?>
    </div>

    <div class="form-group">
        <label>NAMA DOSEN</label>
        <input type="text" name="nama_dosen" placeholder="Masukkan Nama Dosen" class="form-control">
        <?php echo form_error('nama_dosen','<div class="text-danger small" ml-3>')?>
    </div>

    <button type="submit" class='btn btn-primary'>Simpan</button>

</form>

</div>