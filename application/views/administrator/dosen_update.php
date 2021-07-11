<div class="container-fluid">
    <div class="alert alert-success" role="alert">
        <i class="fas fa-user-friends"></i>Update Dosen</div>


        
        <form method="post" action="<?php echo base_url('administrator/dosen/update/'.$dosen['id_dosen'])?>">
        <div class="form-group">
                <label>Username Dosen</label>
                <input type="text" name="uname_dosen" class="form-control" value="<?php echo $dosen['uname_dosen']?>" disabled>
                <input type="hidden" name="id_dosen" value="<?php echo $dosen['id_dosen']?>">
            </div> 

            <div class="form-group">
                <label>Nama Dosen</label>
                <input type="text" name="nama_dosen" class="form-control" value="<?php echo $dosen['nama_dosen']?>">
            </div>

            <button type="submit" class='btn btn-primary'>Simpan</button>
        </form>
        


</div>