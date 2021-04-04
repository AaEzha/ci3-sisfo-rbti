<div class="container-fluid">

<div class="alert alert-success" role="alert">
        <i class="fas fa-user-friends"></i> Mahasiswa</div>

<form method="post" action="<?php echo base_url('administrator/mahasiswa/input_aksi')?>">
    <div class="form-group">
        <label>NIM MAHASISWA</label>
        <input type="text" name="nim_mhs" placeholder="Masukkan NIM Mahasiswa" class="form-control">
        <?php echo form_error('uname_mhs','<div class="text-danger small" ml-3>')?>
    </div>

    <div class="form-group">
        <label>PASSWORD MAHASISWA</label>
        <input type="text" name="pass_mhs" placeholder="Masukkan Password Mahasiswa" class="form-control">
        <?php echo form_error('pass_mhs','<div class="text-danger small" ml-3>')?>
    </div>

    <div class="form-group">
        <label>NAMA MAHASISWA</label>
        <input type="text" name="nama_mhs" placeholder="Masukkan Nama Mahasiswa" class="form-control">
        <?php echo form_error('nama_mhs','<div class="text-danger small" ml-3>')?>
    </div>

    <div class="form-group">
        <label>KELAS MAHASISWA</label>
        <select name="kelas_mhs" class="form-control" placeholder="Masukkan Kelas Mahasiswa">
        <option value="">Masukkan Kelas Mahasiswa</option>
		<option value="A">A</option>
		<option value="B">B</option>
		<option value="C">C</option>
        <option value="D">D</option>
	</select>
        <?php echo form_error('kelas_mhs','<div class="text-danger small" ml-3>')?>
    </div>

    <button type="submit" class='btn btn-primary'>Simpan</button>

</form>

</div>