<div class="container-fluid">

<div class="alert alert-success" role="alert">
        <i class="fas fa-user-friends"></i>Tambah Dosen</div>

<form method="post" action="<?php echo base_url('administrator/dosen/input_data')?>">
<div class="form-group col-md-6 ">
                <label><h4>USERNAME DOSEN</h4></label>
                <br>
                <select name="uname_dosen">
                <option disabled selected>---Pilih---</option>
                <?php foreach ($ud as $row) : ?>
                <option value="<?= $row['uname_user'];?>"><?= $row['uname_user'];?></option>
                <?php endforeach; ?>
                </select>
               </div>
 
    <div class="form-group">
        <label>NAMA DOSEN</label>
        <input type="text" name="nama_dosen" placeholder="Masukkan Nama Dosen" class="form-control">
        <?php echo form_error('nama_dosen','<div class="text-danger small" ml-3>')?>
    </div>

    <button type="submit" class='btn btn-primary'>Simpan</button>

</form>

</div>