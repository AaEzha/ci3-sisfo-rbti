<div class="container-fluid">
    <div class="alert alert-success" role="alert">
        <i class="fas fa-user-friends"></i>Update Mahasiswa</div>


       

            <form method="post" action="<?php echo base_url('administrator/mahasiswa/update/'.$mahasiswa['id_mhs'])?>">
            
            <div class="form-group">
                <label>NIM Mahasiswa</label>
                <input type="text" name="nim_mhs" class="form-control" value="<?php echo $mahasiswa['nim_mhs']?>">
                <input type="hidden" name="id_mhs" value="<?php echo $mahasiswa['id_mhs']?>">
            </div>


            <div class="form-group">
                <label>Nama Mahasiswa</label>
                <input type="text" name="nama_mhs" class="form-control" value="<?php echo $mahasiswa['nama_mhs']?>">
            </div>

            <div class="form-group">
        <label>KELAS MAHASISWA</label>
        <select name="kelas_mhs" class="form-control" placeholder="Masukkan Kelas Mahasiswa"  value="<?php echo $mahasiswa['kelas_mhs']?>">
        <option disabled selected>---Pilih Kelas---</option>
                <?php foreach ($kelas as $row) : ?>
                <option value="<?= $row['kelas'];?>" <?= ($mahasiswa['kelas_mhs'] == $row['kelas']) ? 'selected' : '' ?>><?= $row['kelas'];?></option>
                <?php endforeach; ?>
	</select>
        <?php echo form_error('kelas_mhs','<div class="text-danger small" ml-3>')?>
    </div>

    
    <div class="form-group">
        <label>DOSEN MAHASISWA</label>
        <select name="dosen_mhs" class="form-control" placeholder="Masukkan Dosen Mahasiswa"  value="<?php echo $mahasiswa['dosen_mhs']?>">
        <option disabled selected>---Pilih Dosen---</option>
                <?php foreach ($dosen as $row) : ?>
                <option value="<?= $row['uname_dosen'];?>" <?= ($mahasiswa['dosen_mhs'] == $row['uname_dosen']) ? 'selected' : '' ?>><?= $row['nama_dosen'];?></option>
                <?php endforeach; ?>
	</select>
        <?php echo form_error('kelas_mhs','<div class="text-danger small" ml-3>')?>
    </div>

            <button type="submit" class='btn btn-primary'>Simpan</button>
          
        </form>
        
        


</div>