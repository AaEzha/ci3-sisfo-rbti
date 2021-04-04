<div class="container-fluid">
    <div class="alert alert-success" role="alert">
        <i class="fas fa-user-friends"></i>Update Dosen</div>


        <?php foreach ($dosen as $dsn) : ?>

            <form method="post" action="<?php echo base_url('administrator/dosen/update_aksi')?>">
            
            <div class="form-group">
                <label>Username Dosen</label>
                <input type="text" name="uname_dosen" class="form-control" value="<?php echo $dsn->uname_dosen?>">
                <input type="hidden" name="id_dosen" value="<?php echo $dsn->id_dosen?>">
            </div>

            <div class="form-group">
                <label>Password Dosen</label>
                <input type="text" name="pass_dosen" class="form-control" value="<?php echo $dsn->pass_dosen?>">
            </div>

            <div class="form-group">
                <label>Nama Dosen</label>
                <input type="text" name="nama_dosen" class="form-control" value="<?php echo $dsn->nama_dosen?>">
            </div>

            <button type="submit" class='btn btn-primary'>Simpan</button>
                
        </form>
        
        <?php endforeach; ?>


</div>