
        
      <div class="container-fluid">
      <br>
    <br>
  

      <?php foreach($startup as $su) : ?>       
            <div class="alert alert-danger col-md-6" role="alert">
                <i class="fas fa-user-friends"></i><h2>UPDATE START-UP<h2></div>

        <form method="post" action="<?php echo base_url('mahasiswa/startup/update_aksi')?>" enctype="multipart/form-data">
        
            <div class="form-group col-md-6 ">
                <label><h4>NAMA PERUSAHAAN</h4></label>
                <input type="text" name="nama_start_up" style="text-transform:uppercase" class="form-control" class="form-control" value="<?php echo $su->nama_start_up?>">
                <input type="hidden" name="id_start_up" value="<?php echo $su->id_start_up?>">
                <?php echo form_error('nama_start_up','<div class="text-danger small" ml-3>')?>
            </div>
 
            <div class="form-group col-md-6">
                <label for="textarea"><h4>VISI PERUSAHAAN</h4></label>
                <textarea type="" rows="5" name="visi_start_up" class="form-control"><?php echo $su->visi_start_up?></textarea>
                <?php echo form_error('visi_start_up','<div class="text-danger small" ml-10>')?>
            </div>

            <div class="form-group col-md-6">
                <label for="textarea"><h4>MISI PERUSAHAAN</h4></label>
                <textarea type="" rows="5" name="misi_start_up" class="form-control"><?php echo $su->misi_start_up?></textarea>
                <?php echo form_error('misi_start_up','<div class="text-danger small" ml-10>')?>
            </div>
            <div class="form-group col-md-6">
            <label><h4>STURKTUR ORGANISASI</h4></label>
            </div>      
            <div class="form-group col-md-6">
                <input type="file" name="struktur_start_up" id="customFile" value="<?php echo $su->struktur_start_up?>" class="custom-file-input">
                <label class="custom-file-label" for="customFile">Pilih File Struktur Organisasi</label>
                <?php echo form_error('struktur_start_up','<div class="text-danger small" ml-10>')?>
                <h6>(JPG/JPEG/TIFF/PNG Max 2 MB)</h6>
            </div>
            <div class="form-group col-md-6">
            <label><h4>LOGO PERUSAHAAN</h4></label>
            </div>      
            <div class="form-group col-md-6">
                <input type="file" name="logo_start_up" id="customFile" value="<?php echo $su->logo_start_up?>" class="custom-file-input">
                <label class="custom-file-label" for="customFile">Pilih File Logo Perusahaan</label>
                <?php echo form_error('loho_start_up','<div class="text-danger small" ml-3>')?>
                <h6>(JPG/JPEG/TIFF/PNG Max 2 MB)</h6>
            </div>
            <div class="form-group col-md-6 ">
                <label><h4>TAGLINE PERUSAHAAN</h4></label>
                <input type="text" name="tagline_start_up" style="text-transform:uppercase" class="form-control" value="<?php echo $su->tagline_start_up?>" class="form-control">
                <?php echo form_error('tagline_start_up','<div class="text-danger small" ml-3>')?>
            </div>

            <button type="submit" class='btn btn-primary'>Simpan</button>
            <br>
            <br>

        </form>

      
        </div>

        <?php endforeach; ?>

</div>
</div>