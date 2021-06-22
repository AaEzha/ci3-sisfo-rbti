
      <div class="row d_flex" >
               <div class=" col-md-12" >
                  <div class="latest text_align_center" >
                  <table class="table table-bordered table-stripped table-hover" >
    

        <div class="alert alert-danger col-md-6" role="alert">
                <i class="fas fa-user-friends"></i><h2>PAPER PITCHING<h2></div>

        <form method="post" action="<?php echo base_url('mahasiswa/paperpitching/input_aksi')?>" enctype="multipart/form-data">
        
                <input type="hidden" name="nim_pp"  class="form-control" value="<?php echo $this->session->uname_user ?>">
            </div>

            
            <div class="form-group col-md-6">
                <label for="textarea"><h4>LATAR BELAKANG</h4></label>
                <textarea type="" rows="5" name="latar_belakang_pp" placeholder="Ceritakan tentang latar belakang anda dan co-founder anda (jjika ada)" class="form-control"></textarea>
                <?php echo form_error('latar_belakang_pp','<div class="text-danger small" ml-10>')?>
            </div>

            <div class="form-group col-md-6">
                <label for="textarea"><h4>PERMASALAHAN YANG INGIN DIATASI</h4></label>
                <textarea type="" rows="5" name="permasalahan_pp" placeholder="Permasalahan apa ingin anda atasi melalui usaha anda?" class="form-control"></textarea>
                <?php echo form_error('permasalahan_pp','<div class="text-danger small" ml-10>')?>
            </div>

            <div class="form-group col-md-6">
                <label for="textarea"><h4>SOLUSI YANG ADA TAWARKAN</h4></label>
                <textarea type="" rows="5" name="solusi_pp" placeholder="Solusi apa yang anda tawarkan untuk mengatasi masalah tersebut?" class="form-control"></textarea>
                <?php echo form_error('solusi_pp','<div class="text-danger small" ml-10>')?>
            </div>

            <div class="form-group col-md-6">
                <label for="textarea"><h4>PROGRES USAHA</h4></label>
                <textarea type="" rows="5" name="progres_pp" placeholder="Bagaimana progres/traction usaha anda sejauh ini?" class="form-control"></textarea>
                <?php echo form_error('progres_pp','<div class="text-danger small" ml-10>')?>
            </div>

            <div class="form-group col-md-6">
                <label for="textarea"><h4>KOMPETITOR USAHA</h4></label>
                <textarea type="" rows="5" name="kompetitor_pp" placeholder="Siapa saja kompetitor anda saat ini? Sebutkan" class="form-control"></textarea>
                <?php echo form_error('kompetitor_pp','<div class="text-danger small" ml-10>')?>
            </div>

            <div class="form-group col-md-6">
                <label for="textarea"><h4>USAHA SERUPA</h4></label>
                <textarea type="" rows="5" name="kompetitor2_pp" placeholder="Adakah usaha/serupa yang sukses? Baik di nasional atau internasional? Sebutkan" class="form-control"></textarea>
                <?php echo form_error('kompetitor2_pp','<div class="text-danger small" ml-10>')?>
            </div>

            <div class="form-group col-md-6">
                <label for="textarea"><h4>TARGET USAHA</h4></label>
                <textarea type="" rows="5" name="target_pp" placeholder="Siapa target pengguna solusi anda? Sebutkan" class="form-control"></textarea>
                <?php echo form_error('target_pp','<div class="text-danger small" ml-10>')?>
            </div>

            <div class="form-group col-md-6">
                <label for="textarea"><h4>DATA YANG DIGUNAKAN</h4></label>
                <textarea type="" rows="5" name="data_pp" placeholder="Data apa yang anda gunakan sehingga anda bisa menuliskan target pengguna dari solusi anda" class="form-control"></textarea>
                <?php echo form_error('data_pp','<div class="text-danger small" ml-10>')?>
            </div>

            <div class="form-group col-md-6">
                <label for="textarea"><h4>PROSES BISNIS</h4></label>
                <textarea type="" rows="5" name="proses_bisnis_pp" placeholder="Bagaimana proses bisnis dari aplikasi/solusi yang dibuat. Boleh dengan gambar" class="form-control"></textarea>
                <?php echo form_error('proses_bisnis_pp','<div class="text-danger small" ml-10>')?>
            </div>
            <div class="form-group col-md-6">
                <input type="file" name="proses_bisnis2_pp"  id="img" accept="image/*" placeholder="Masukkan Nama Dosen" class="custom-file-input">
                <label class="custom-file-label" for="customFile">Pilih File Proses Bisnis</label>
                <?php echo form_error('proses_bisnis2_pp','<div class="text-danger small" ml-3>')?>
            </div>

            <div class="form-group col-md-6">
                <label for="textarea"><h4>PROSES MEWUJUDKAN</h4></label>
                <textarea type="" rows="5" name="tahapan_pp" placeholder="Bagaimana proses/tahapan mewujudkan solusi yang akan anda buat" class="form-control"></textarea>
                <?php echo form_error('tahapan_pp','<div class="text-danger small" ml-10>')?>
            </div>

            <div class="form-group col-md-6">
                <label for="textarea"><h4>KELEBIHAN APLIKASI</h4></label>
                <textarea type="" rows="5" name="kelebihan_pp" placeholder="Kelebihan dari solusi/aplikasi yang ditawarkan daripada kompetitor (jika ada)" class="form-control"></textarea>
                <?php echo form_error('kelebihan_pp','<div class="text-danger small" ml-10>')?>
            </div>

        
            

            <button type="submit" class='btn btn-primary'>Simpan</button>
            <br>
            <br>

        </form>

      
        </div>
        </div>