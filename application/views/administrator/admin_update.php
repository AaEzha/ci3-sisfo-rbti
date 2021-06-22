<div class="container-fluid">
    <div class="alert alert-success" role="alert">
        <i class="fas fa-user-friends"></i>Update Admin</div>


        <?php foreach ($admin as $adm) : ?>

            <form method="post" action="<?php echo base_url('administrator/admin/update_aksi')?>">
            
            <div class="form-group">
                <label>Username User</label>
                <input type="text" name="uname_user" class="form-control" value="<?php echo $adm->uname_user?>">
                <input type="hidden" name="id_user" value="<?php echo $adm->id_user?>">
            </div>

            <div class="form-group">
                <label>Password User</label>
                <input type="text" name="pass_user" class="form-control" value="<?php echo $adm->pass_user?>">
            </div>

            <div class="form-group">
                <label>Nama User</label>
                <input type="text" name="nama_user" class="form-control" value="<?php echo $adm->nama_user?>">
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
        
        <?php endforeach; ?>


</div>