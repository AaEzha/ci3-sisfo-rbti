<div class="container-fluid">
    <div class="alert alert-success" role="alert">
        <i class="fas fa-user-friends"></i>Update Mahasiswa</div>


        <?php foreach ($mahasiswa as $mhs) : ?>

            <form method="post" action="<?php echo base_url('administrator/mahasiswa/update_aksi')?>">
            
            <div class="form-group">
                <label>NIM Mahasiswa</label>
                <input type="text" name="nim_mhs" class="form-control" value="<?php echo $mhs->nim_mhs?>">
                <input type="hidden" name="id_mhs" value="<?php echo $mhs->id_mhs?>">
            </div>

            <div class="form-group">
                <label>Password Mahasiswa</label>
                <input type="text" name="pass_mhs" class="form-control" value="<?php echo $mhs->pass_mhs?>">
            </div>

            <div class="form-group">
                <label>Nama Mahasiswa</label>
                <input type="text" name="nama_mhs" class="form-control" value="<?php echo $mhs->nama_mhs?>">
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
        
        <?php endforeach; ?>


</div>