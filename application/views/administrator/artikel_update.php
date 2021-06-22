<div class="container-fluid">
    <div class="alert alert-success" role="alert">
        <i class="fas fa-user-friends"></i>Update Artikel</div>


        <?php foreach ($artikel as $atk) : ?>

            <form method="post" action="<?php echo base_url('administrator/artikel/update_aksi')?>">
            
            <div class="form-group">
                <label>JUDUL ARTIKEL</label>
                <input type="text" name="judul_artikel" style="text-transform:uppercase" class="form-control" value="<?php echo $atk->judul_artikel?>">
                <input type="hidden" name="id_artikel" value="<?php echo $atk->id_artikel?>">
            </div>

            <div class="form-group">
                <label>ISI ARTIKEL</label>
                <input type="text" name="isi_artikel" class="form-control" value="<?php echo $atk->isi_artikel?>">
            </div>

            <div class="form-group">
            <label>FOTO ARTIKEL</label>
            </div>      
            <div class="form-group col-md-6">
                <input type="file" name="foto_artikel"  id="myFile" accept="image/*" placeholder="Foto Artikel" class="custom-file-input">
                <label class="custom-file-label" for="customFile">Masukkan Foto Artikel </label>
            </div>
            

            <button type="submit" class='btn btn-primary'>Simpan</button>
                
        </form>
        
        <?php endforeach; ?>


</div>