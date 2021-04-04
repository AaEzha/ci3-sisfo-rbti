<div class="container-fluid">
    <div class="alert alert-success" role="alert">
        <i class="fas fa-user-friends"></i>Update Admin</div>


        <?php foreach ($admin as $adm) : ?>

            <form method="post" action="<?php echo base_url('administrator/admin/update_aksi')?>">
            
            <div class="form-group">
                <label>Username Admin</label>
                <input type="text" name="uname_admin" class="form-control" value="<?php echo $adm->uname_admin?>">
                <input type="hidden" name="id_admin" value="<?php echo $adm->id_admin?>">
            </div>

            <div class="form-group">
                <label>Password Admin</label>
                <input type="text" name="pass_admin" class="form-control" value="<?php echo $adm->pass_admin?>">
            </div>

            <div class="form-group">
                <label>Nama Admin</label>
                <input type="text" name="nama_admin" class="form-control" value="<?php echo $adm->nama_admin?>">
            </div>

            <button type="submit" class='btn btn-primary'>Simpan</button>
                
        </form>
        
        <?php endforeach; ?>


</div>