
      <div class="row d_flex" >
               <div class=" col-md-12" >
                  <div class="latest text_align_center" >
                  <table class="table table-bordered table-stripped table-hover" >
    

        <div class="alert alert-danger col-md-6" role="alert">
                <i class="fas fa-user-friends"></i><h2>START-UP<h2></div>

        <form method="post" action="<?php echo base_url('mahasiswa/startup/input_aksi')?>" enctype="multipart/form-data">
        
                <input type="hidden" name="nim_start_up"  class="form-control" value="<?php echo $this->session->uname_user ?>">
            </div>
            <div class="form-group col-md-6 ">
                <label><h4>NAMA PERUSAHAAN</h4></label>
                <input type="text"  name="nama_start_up" placeholder="Masukkan Nama Perusahan Start-Up Anda" style="text-transform:uppercase" class="form-control">
                <?php echo form_error('nama_start_up','<div class="text-danger small" ml-3>')?>
            </div>

            <div class="form-group col-md-6">
                <label for="textarea"><h4>VISI PERUSAHAAN</h4></label>
                <textarea type="" rows="5" name="visi_start_up" placeholder="Masukkan Visi Perusahaan Start-Up Anda" class="form-control"></textarea>
                <?php echo form_error('visi_start_up','<div class="text-danger small" ml-10>')?>
            </div>

            <div class="form-group col-md-6">
                <label for="textarea"><h4>MISI PERUSAHAAN</h4></label>
                <textarea type="" rows="5" name="misi_start_up" placeholder="Masukkan Misi Perusahaan Start-Up Anda" class="form-control"></textarea>
                <?php echo form_error('misi_start_up','<div class="text-danger small" ml-10>')?>
            </div>
            <div class="form-group col-md-6">
            <label><h4>STURKTUR ORGANISASI</h4></label>
            </div>      
            <div class="form-group col-md-6">
                <input type="file" name="struktur_start_up" id="img" accept="image/*" placeholder="Masukkan File Struktur Organisasi" class="custom-file-input">
                <label class="custom-file-label" for="customFile">Pilih File Struktur Organisasi</label>
                <?php echo form_error('struktur_start_up','<div class="text-danger small" ml-10>')?>
            </div>
            <div class="form-group col-md-6">
            <label><h4>LOGO PERUSAHAAN</h4></label>
            </div>      
            <div class="form-group col-md-6">
                <input type="file" name="logo_start_up"  id="img" accept="image/*" placeholder="Masukkan File Logo Perusahaan" class="custom-file-input">
                <label class="custom-file-label" for="customFile">Pilih File Logo Perusahaan</label>
                <?php echo form_error('logo_start_up','<div class="text-danger small" ml-3>')?>
            </div>
            <div class="form-group col-md-6 ">
                <label><h4>TAGLINE PERUSAHAAN</h4></label>
                <input type="text" name="tagline_start_up" placeholder="Masukkan Tagline Perusahan Start-Up Anda" style="text-transform:uppercase" class="form-control">
                <?php echo form_error('tagline_start_up','<div class="text-danger small" ml-3>')?>
            </div>

            <button type="submit" class='btn btn-primary'>Simpan</button>
            <br>
            <br>

        </form>

      
        </div>
        </div>