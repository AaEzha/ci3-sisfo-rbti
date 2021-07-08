

      <div class="row d_flex" >
               <div class=" col-md-12" >
                  <div class="latest text_align_center" >
                  <table class="table table-bordered table-stripped table-hover" >
    

        <div class="alert alert-danger col-md-6" role="alert">
                <i class="fas fa-user-friends"></i><h2>BIODATA TIM</h2></div>

        <form method="post" action="<?php echo base_url('mahasiswa/biodatatim/input_aksi')?>" enctype="multipart/form-data">
        
                <input type="hidden" name="nim_biodata"  class="form-control" value="<?php echo $this->session->uname_user ?>">
            </div>
            <div class="alert alert-danger col-md-6" role="alert">
            <i class="fas fa-user-friends"></i><h3>A. Hustler</h3></div>
            <div class="form-group col-md-6 ">
                <label><h4>NAMA HUSTLER</h4></label>
                <input type="text"  name="nama_hustler" placeholder="Masukkan Nama Hustler Perusahan Start-Up Anda" style="text-transform:uppercase" class="form-control">
                <?php echo form_error('nama_hustler','<div class="text-danger small" ml-3>')?>
            </div>

            <div class="form-group col-md-6">
                <label for="textarea"><h4>ALAMAT HUSTLER</h4></label>
                <textarea type="" rows="5" name="alamat_hustler" placeholder="Masukkan Alamat Hustler Perusahaan Start-Up Anda" class="form-control"></textarea>
                <?php echo form_error('alamat_hustler','<div class="text-danger small" ml-10>')?>
            </div>

            <div class="form-group col-md-6 ">
                <label><h4>TELP HUSTLER</h4></label>
                <input type="number"  name="telp_hustler" placeholder="Masukkan Telp Hustler Perusahan Start-Up Anda" class="form-control">
                <?php echo form_error('telp_hustler','<div class="text-danger small" ml-3>')?>
                <h6>(Hanya angka)</h6>
            </div>

            <div class="form-group col-md-6 ">
                <label><h4>EMAIL HUSTLER</h4></label>
                <input type="text"  name="email_hustler" placeholder="Masukkan E-Mail Hustler Perusahan Start-Up Anda"class="form-control">
                <?php echo form_error('email_hustler','<div class="text-danger small" ml-3>')?>
            </div>

            <div class="form-group col-md-6">
                <label for="textarea"><h4>TUGAS HUSTLER</h4></label>
                <textarea type="" rows="5" name="tugas_hustler" placeholder="Masukkan Tugas Hustler Perusahaan Start-Up Anda" class="form-control"></textarea>
                <?php echo form_error('tugas_hustler','<div class="text-danger small" ml-10>')?>
            </div>



            
            <div class="alert alert-danger col-md-6" role="alert">
            <i class="fas fa-user-friends"></i><h3>B. Hipster</h3></div>
            <div class="form-group col-md-6 ">
                <label><h4>NAMA HIPSTER</h4></label>
                <input type="text"  name="nama_hipster" placeholder="Masukkan Nama Hipster Perusahan Start-Up Anda" style="text-transform:uppercase" class="form-control">
                <?php echo form_error('nama_hipster','<div class="text-danger small" ml-3>')?>
            </div>

            <div class="form-group col-md-6">
                <label for="textarea"><h4>ALAMAT HIPSTER</h4></label>
                <textarea type="" rows="5" name="alamat_hipster" placeholder="Masukkan Alamat Hipster Perusahaan Start-Up Anda" class="form-control"></textarea>
                <?php echo form_error('alamat_hipster','<div class="text-danger small" ml-10>')?>
            </div>

            <div class="form-group col-md-6 ">
                <label><h4>TELP HIPSTER</h4></label>
                <input type="number"  name="telp_hipster" placeholder="Masukkan Telp Hipster Perusahan Start-Up Anda" class="form-control">
                <?php echo form_error('telp_hipster','<div class="text-danger small" ml-3>')?>
                <h6>(Hanya angka)</h6>
            </div>

            <div class="form-group col-md-6 ">
                <label><h4>EMAIL HIPSTER</h4></label>
                <input type="text"  name="email_hipster" placeholder="Masukkan E-Mail Hipster Perusahan Start-Up Anda"class="form-control">
                <?php echo form_error('email_hipster','<div class="text-danger small" ml-3>')?>
            </div>

            <div class="form-group col-md-6">
                <label for="textarea"><h4>TUGAS HIPSTER</h4></label>
                <textarea type="" rows="5" name="tugas_hipster" placeholder="Masukkan Tugas Hipster Perusahaan Start-Up Anda" class="form-control"></textarea>
                <?php echo form_error('tugas_hipster','<div class="text-danger small" ml-10>')?>
            </div>




            <div class="alert alert-danger col-md-6" role="alert">
            <i class="fas fa-user-friends"></i><h3>C. Hacker</h3></div>
            <div class="form-group col-md-6 ">
                <label><h4>NAMA HACKER</h4></label>
                <input type="text"  name="nama_hacker" placeholder="Masukkan Nama Hacker Perusahan Start-Up Anda" style="text-transform:uppercase" class="form-control">
                <?php echo form_error('nama_hacker','<div class="text-danger small" ml-3>')?>
            </div>

            <div class="form-group col-md-6">
                <label for="textarea"><h4>ALAMAT HACKER</h4></label>
                <textarea type="" rows="5" name="alamat_hacker" placeholder="Masukkan Alamat Hacker Perusahaan Start-Up Anda" class="form-control"></textarea>
                <?php echo form_error('alamat_hacker','<div class="text-danger small" ml-10>')?>
            </div>

            <div class="form-group col-md-6 ">
                <label><h4>TELP HACKER</h4></label>
                <input type="number"  name="telp_hacker" placeholder="Masukkan Telp Hacker Perusahan Start-Up Anda" class="form-control">
                <?php echo form_error('telp_hacker','<div class="text-danger small" ml-3>')?>
                <h6>(Hanya angka)</h6>
            </div>

            <div class="form-group col-md-6 ">
                <label><h4>EMAIL HACKER</h4></label>
                <input type="text"  name="email_hacker" placeholder="Masukkan E-Mail Hacker Perusahan Start-Up Anda"class="form-control">
                <?php echo form_error('email_hacker','<div class="text-danger small" ml-3>')?>
            </div>

            <div class="form-group col-md-6">
                <label for="textarea"><h4>TUGAS HACKER</h4></label>
                <textarea type="" rows="5" name="tugas_hacker" placeholder="Masukkan Tugas Hacker Perusahaan Start-Up Anda" class="form-control"></textarea>
                <?php echo form_error('tugas_hacker','<div class="text-danger small" ml-10>')?>
            </div>


            
            <button type="submit" class='btn btn-primary'>Simpan</button>
            <br>
            <br>

        </form>

      
        </div>
        </div>