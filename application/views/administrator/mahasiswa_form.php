<div class="container-fluid">

<div class="alert alert-success" role="alert">
        <i class="fas fa-user-friends"></i> Mahasiswa</div>

<form method="post" action="<?php echo base_url('administrator/mahasiswa/input_data')?>">
<div class="form-group col-md-6 ">
                <label><h4>NIM MAHASISWA</h4></label>
                <br>
                <select name="nim_mhs">
                <option disabled selected>---Pilih NIM---</option>
                <?php foreach ($nim as $row) : ?>
                <option value="<?= $row['uname_user'];?>"><?= $row['uname_user'];?></option>
                <?php endforeach; ?>
                </select>
               </div>


    <div class="form-group">
        <label>NAMA MAHASISWA</label>
        <input type="text" name="nama_mhs" placeholder="Masukkan Nama Mahasiswa" class="form-control">
        <?php echo form_error('nama_mhs','<div class="text-danger small" ml-3>')?>
    </div>

    <div class="form-group col-md-6 ">
                <label><h4>KELAS MAHASISWA</h4></label>
                <br>
                <select name="kelas_mhs">
                <option disabled selected>---Pilih Kelas---</option>
                <?php foreach ($kelas as $row) : ?>
                <option value="<?= $row['kelas'];?>"><?= $row['kelas'];?></option>
                <?php endforeach; ?>
                </select>
               </div>

               <div class="form-group col-md-6 ">
                <label><h4>DOSEN MAHASISWA</h4></label>
                <br>
                <select name="dosen_mhs">
                <option disabled selected>---Pilih Dosen---</option>
                <?php foreach ($dosen as $row) : ?>
                <option value="<?= $row['uname_dosen'];?>"><?= $row['nama_dosen'];?></option>
                <?php endforeach; ?>
                </select>
               </div>

    <button type="submit" class='btn btn-primary'>Simpan</button>

</form>

</div>