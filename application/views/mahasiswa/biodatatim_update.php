
        
      <div class="container-fluid">
      <br>
    <br>
  

          
            <div class="alert alert-danger col-md-6" role="alert">
                <i class="fas fa-user-friends"></i><h2>UPDATE BIODATA TIM<h2></div>
                <?php foreach($biodatatim as $bt) : ?>   
        <form method="post" action="<?php echo base_url('mahasiswa/biodatatim/update_aksi')?>" enctype="multipart/form-data">
                    
        <div class="alert alert-danger col-md-6" role="alert">
            <i class="fas fa-user-friends"></i><h3>A. Hustler</h3></div>
            <div class="form-group col-md-6 ">
                <label><h4>NAMA HUSTLER</h4></label>
                <input type="text" style="text-transform:uppercase" name="nama_hustler" class="form-control" class="form-control" value="<?php echo $bt->nama_hustler?>"> 
                <input type="hidden" name="id_biodatatim" value="<?php echo $bt->id_biodatatim?>">
                <?php echo form_error('nama_hustler','<div class="text-danger small" ml-3>')?>
            </div>
       
            <div class="form-group col-md-6">
                <label for="textarea"><h4>ALAMAT HUSTLER</h4></label>
                <textarea type="text" rows="5" name="alamat_hustler" class="form-control"><?php echo $bt->alamat_hustler?></textarea>
                <?php echo form_error('alamat_hustler','<div class="text-danger small" ml-10>')?>
            </div>

            <div class="form-group col-md-6 ">
                <label><h4>TELP HUSTLER</h4></label>
                <input type="text"  name="telp_hustler" class="form-control" value="<?php echo $bt->telp_hustler?>">
                <?php echo form_error('telp_hustler','<div class="text-danger small" ml-3>')?>
            </div>

            <div class="form-group col-md-6 ">
                <label><h4>EMAIL HUSTLER</h4></label>
                <input type="text"  name="email_hustler" class="form-control" value="<?php echo $bt->email_hustler?>">
                <?php echo form_error('email_hustler','<div class="text-danger small" ml-3>')?>
            </div>

            <div class="form-group col-md-6">
                <label for="textarea"><h4>TUGAS HUSTLER</h4></label>
                <textarea type="" rows="5" name="tugas_hustler" class="form-control"><?php echo $bt->tugas_hustler?></textarea>
                <?php echo form_error('tugas_hustler','<div class="text-danger small" ml-10>')?>
            </div>

            <div class="alert alert-danger col-md-6" role="alert">
            <i class="fas fa-user-friends"></i><h3>B. Hipster</h3></div>
            <div class="form-group col-md-6 ">
                <label><h4>NAMA HIPSTER</h4></label>
                <input type="text" style="text-transform:uppercase" name="nama_hipster" class="form-control" class="form-control" value="<?php echo $bt->nama_hipster?>"> 
                <?php echo form_error('nama_hipster','<div class="text-danger small" ml-3>')?>
            </div>
       
            <div class="form-group col-md-6">
                <label for="textarea"><h4>ALAMAT HIPSTER</h4></label>
                <textarea type="" rows="5" name="alamat_hipster" class="form-control"><?php echo $bt->alamat_hipster?></textarea>
                <?php echo form_error('alamat_hipster','<div class="text-danger small" ml-10>')?>
            </div>

            <div class="form-group col-md-6 ">
                <label><h4>TELP HIPSTER</h4></label>
                <input type="text"  name="telp_hipster" class="form-control" value="<?php echo $bt->telp_hipster?>">
                <?php echo form_error('telp_hipster','<div class="text-danger small" ml-3>')?>
            </div>

            <div class="form-group col-md-6 ">
                <label><h4>EMAIL HIPSTER</h4></label>
                <input type="text"  name="email_hipster" class="form-control" value="<?php echo $bt->email_hipster?>">
                <?php echo form_error('email_hipster','<div class="text-danger small" ml-3>')?>
            </div>

            <div class="form-group col-md-6">
                <label for="textarea"><h4>TUGAS HIPSTER</h4></label>
                <textarea type="" rows="5" name="tugas_hipster" class="form-control"><?php echo $bt->tugas_hipster?></textarea>
                <?php echo form_error('tugas_hipster','<div class="text-danger small" ml-10>')?>
            </div>

        
            <div class="alert alert-danger col-md-6" role="alert">
            <i class="fas fa-user-friends"></i><h3>C. Hacker</h3></div>
            <div class="form-group col-md-6 ">
                <label><h4>NAMA HACKER</h4></label>
                <input type="text" style="text-transform:uppercase" name="nama_hacker" class="form-control" class="form-control" value="<?php echo $bt->nama_hacker?>"> 
                <?php echo form_error('nama_hustler','<div class="text-danger small" ml-3>')?>
            </div>
       
            <div class="form-group col-md-6">
                <label for="textarea"><h4>ALAMAT HACKER</h4></label>
                <textarea type="" rows="5" name="alamat_hacker" class="form-control"><?php echo $bt->alamat_hacker?></textarea>
                <?php echo form_error('alamat_hacker','<div class="text-danger small" ml-10>')?>
            </div>

            <div class="form-group col-md-6 ">
                <label><h4>TELP HACKER</h4></label>
                <input type="text"  name="telp_hacker" class="form-control" value="<?php echo $bt->telp_hacker?>">
                <?php echo form_error('telp_hacker','<div class="text-danger small" ml-3>')?>
            </div>

            <div class="form-group col-md-6 ">
                <label><h4>EMAIL HACKER</h4></label>
                <input type="text"  name="email_hacker" class="form-control" value="<?php echo $bt->email_hacker?>">
                <?php echo form_error('email_hacker','<div class="text-danger small" ml-3>')?>
            </div>

            <div class="form-group col-md-6">
                <label for="textarea"><h4>TUGAS HACKER</h4></label>
                <textarea type="" rows="5" name="tugas_hacker" class="form-control"><?php echo $bt->tugas_hacker?></textarea>
                <?php echo form_error('tugas_hacker','<div class="text-danger small" ml-10>')?>
            </div>



        
        </div>
        </div>
        </div>


            
                 



            <button type="submit" class='btn btn-primary'>Simpan</button>
            <br>
            <br>

        </form>

      
        </div>

        <?php endforeach; ?>

</div>
</div>