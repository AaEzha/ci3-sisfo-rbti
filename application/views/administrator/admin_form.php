<div class="container-fluid">

<div class="alert alert-success" role="alert">
        <i class="fas fa-user-friends"></i>Tambah User</div>

<form method="post" action="<?php echo base_url('administrator/admin/input_aksi')?>">
    <div class="form-group">
        <label>USERNAME USER</label>
        <input type="text" name="uname_user" placeholder="Masukkan Username User" class="form-control">
        <?php echo form_error('uname_user','<div class="text-danger small" ml-3>')?>
    </div>

    <div class="form-group">
        <label>PASSWORD USER</label>
        <input type="text" name="pass_user" placeholder="Masukkan Password User" class="form-control">
        <?php echo form_error('pass_user','<div class="text-danger small" ml-3>')?>
    </div>

    <div class="form-group">
        <label>NAMA USER</label>
        <input type="text" name="nama_user" placeholder="Masukkan Nama User" class="form-control">
        <?php echo form_error('nama_user','<div class="text-danger small" ml-3>')?>
    </div>

    <div class="form-group">
                <label>HAK AKSES</label>
                 <select name="hak_akses" class="form-control" value="<?php echo $adm->hak_akses?>" placeholder="Masukkan Kelas Mahasiswa">
                 <option value="">Masukkan Hak Akses</option>
		         <option value="1">Admin</option>
		         <option value="2">Dosen</option>
		         <option value="3">Mahasiswa</option>
	            </select>
                 <?php echo form_error('hak_akses','<div class="text-danger small" ml-3>')?>
         </div>

    <button type="submit" class='btn btn-primary'>Simpan</button>

</form>

</div>