
      <div class="row d_flex" >
               <div class=" col-md-12" >
                  <div class="latest text_align_center" >
                  <table class="table table-bordered table-stripped table-hover" >
    

        <div class="alert alert-danger col-md-6" role="alert">
                <i class="fas fa-user-friends"></i><h2>REVIEW PRODUK<h2></div>

        <form method="post" action="<?php echo base_url('mahasiswa/reviewproduk/input_aksi')?>" enctype="multipart/form-data">
        
                <input type="hidden" name="nim_start_up"  class="form-control" value="<?php echo $this->session->uname_user ?>">
            </div>
            <div class="form-group col-md-6 ">
                <label><h4>NAMA APLIKASI</h4></label>
                <input type="text"  name="nama_solusi" placeholder="Masukkan Nama Aplikasi Start-Up Anda" style="text-transform:uppercase" class="form-control">
                <?php echo form_error('nama_solusi','<div class="text-danger small" ml-3>')?>
            </div>

            <div class="form-group col-md-6">
                <label for="textarea"><h4>DESKRIPSI APLIKASI</h4></label>
                <textarea type="" rows="5" name="deskripsi_solusi" placeholder="Masukkan Deskripsi Aplikasi Start-Up Anda" class="form-control"></textarea>
                <?php echo form_error('deskripsi_solusi','<div class="text-danger small" ml-10>')?>
            </div>

            <div class="form-group col-md-6">
            <label><h4>LOGO APLIKASI</h4></label>
            </div>      
            <div class="form-group col-md-6">
                <input type="file" name="logo_solusi" id="img" accept="image/*" class="custom-file-input">
                <label class="custom-file-label" for="customFile">Pilih File Logo Aplikasi</label>
                <?php echo form_error('logo_solusi','<div class="text-danger small" ml-10>')?>
            </div>
            <div class="form-group col-md-6">
            <label><h4>PREVIEW UI/UX-1</h4></label>
            </div>      
            <div class="form-group col-md-6">
                <input type="file" name="prev_ui1_solusi"  id="img" accept="image/*"  class="custom-file-input">
                <label class="custom-file-label" for="customFile">Pilih File Preview UI/UX - 1</label>
                <?php echo form_error('prev_ui1_solusi','<div class="text-danger small" ml-3>')?>
            </div>
            <div class="form-group col-md-6">
            <label><h4>PREVIEW UI/UX-2</h4></label>
            </div>      
            <div class="form-group col-md-6">
                <input type="file" name="prev_ui2_solusi"  id="img" accept="image/*"  class="custom-file-input">
                <label class="custom-file-label" for="customFile">Pilih File Preview UI/UX - 2</label>
                <?php echo form_error('prev_ui2_solusi','<div class="text-danger small" ml-3>')?>
            </div>
            <div class="form-group col-md-6">
            <label><h4>PREVIEW UI/UX-3</h4></label>
            </div>      
            <div class="form-group col-md-6">
                <input type="file" name="prev_ui3_solusi"  id="img" accept="image/*"  class="custom-file-input">
                <label class="custom-file-label" for="customFile">Pilih File Preview UI/UX - 3</label>
                <?php echo form_error('prev_ui3_solusi','<div class="text-danger small" ml-3>')?>
            </div>
            <div class="form-group col-md-6">
            <label><h4>PREVIEW UI/UX-4</h4></label>
            </div>      
            <div class="form-group col-md-6">
                <input type="file" name="prev_ui4_solusi"  id="img" accept="image/*"  class="custom-file-input">
                <label class="custom-file-label" for="customFile">Pilih File Preview UI/UX - 4</label>
                <?php echo form_error('prev_ui4_solusi','<div class="text-danger small" ml-3>')?>
            </div>
            <div class="form-group col-md-6 ">
                <label><h4>TAHUN PEMBUATAN</h4></label>
                <input type="number" name="tahun_buat_solusi" placeholder="Masukkan Tahun Pembuatan Aplikasi Start-Up Anda" class="form-control">
                <?php echo form_error('tahun_buat_solusi','<div class="text-danger small" ml-3>')?>
            </div>
            <div class="form-group col-md-6 ">
                <label><h4>LINK VIDEO APLIKASI</h4></label>
                <input type="text" name="link_vid_solusi" placeholder="Masukkan Link VIdeo Aplikasi Start-Up Anda"  class="form-control">
                <?php echo form_error('link_vid_solusi','<div class="text-danger small" ml-3>')?>
            </div>
            <div class="form-group col-md-6 ">
                <label><h4>LINK PRODUK APLIKASI</h4></label>
                <input type="text" name="link_prod_solusi" placeholder="Masukkan Link Produk Aplikasi Start-Up Anda" class="form-control">
                <?php echo form_error('link_prod_solusi','<div class="text-danger small" ml-3>')?>
            </div>
            <div class="form-group col-md-6">
                <label for="textarea"><h4>TEKNOLOGI YANG DIGUNAKAN</h4></label>
                <textarea type="" rows="5" name="teknologi_solusi" placeholder="Masukkan Teknologi yang digunakan dalam Aplikasi Start-Up Anda" class="form-control"></textarea>
                <?php echo form_error('teknologi_solusi','<div class="text-danger small" ml-10>')?>
            </div>


            <button type="submit" class='btn btn-primary'>Simpan</button>
            <br>
            <br>

        </form>

      
        </div>
        </div>