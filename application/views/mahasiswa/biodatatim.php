
  
     <!-- cases -->
     <div class="cases">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage text_align_center ">
                     <h2>BAB 2</h2>
                     <h1>Biodata Tim</h1>
                     <p>Dalam pengisian, anda bebas mulai mengisi dari bab berapapun, dimanapun, dan kapanpun
                                                                                                                                                                                                                              </p>
                  </div>
               </div>
            </div>
            <div class="row d_flex" >
               <div class=" col-md-12" >
                  <div class="latest text_align_center" >
                  <?php echo ($biodatatim)?'': anchor('mahasiswa/biodatatim/input','<button class="btn btn-sm btn-primary mb-3"></i> Tambah Proposal </button> ')?>

                  <?php $no=1; foreach($biodatatim as $bt) :  ?>

                        <div class="alert alert-danger col-md-12" role="alert">
                        <i class="fas fa-user-friends"></i><h3>A. Hustler</h3></div>

                        <!-- nama hustler -->
                        <div class="row">
                        <div class="col-md-6 form-group mb-3">
                        <label><h4>2.1 NAMA HUSTLER</h4></label>
                        <input type="text" class="form-control" id="nama_hustler" name="nama_hustler" value="<?php echo strtoupper ($bt->nama_hustler); ?>" disabled> 
                        </div>
                        <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <?php echo anchor('mahasiswa/biodatatim/update/'.$bt->id_biodatatim,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?>
                        </div>
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <input type="text" class="form-control" id="status_nama_hustler" name="status_nama_hustler" value="<?php echo ($bt->status_nama_hustler); ?>" disabled> 
                       </div>
                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="1" name="catnama_hustler" class="form-control" disabled> <?php echo $bt->catnama_hustler?></textarea>
                        </div>
                        </div>

                        <!-- alamat hustler -->
                        <div class="row">
                        <div class="col-md-6 form-group mb-3">
                        <label for="textarea"><h4>2.2 ALAMAT HUSTLER</h4></label>
                        <textarea id="content1" type="text" rows="5" name="alamat_hustler" class="form-control" disabled> <?php echo $bt->alamat_hustler?></textarea>
                        </div>
                        <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <?php echo anchor('mahasiswa/biodatatim/update/'.$bt->id_biodatatim,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?>
                        </div>
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <input type="text" class="form-control" id="status_alamat_hustler" name="status_alamat_hustler" value="<?php echo ($bt->status_alamat_hustler); ?>" disabled> 
                       </div>
                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="5" name="catalamat_hustler" class="form-control" disabled> <?php echo $bt->catalamat_hustler?></textarea>
                        </div>
                        </div>


                         <!-- telp  hustler -->
                         <div class="row">
                        <div class="col-md-6 form-group mb-3">
                        <label><h4>2.3 TELPON HUSTLER</h4></label>
                        <input type="text" class="form-control" id="telp_hustler" name="telp_hustler" value="<?php echo $bt->telp_hustler ?>" disabled> 
                        </div>
                        <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <?php echo anchor('mahasiswa/biodatatim/update/'.$bt->id_biodatatim,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?>
                        </div>
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <input type="text" class="form-control" id="status_telp_hustler" name="status_telp_hustler" value="<?php echo ($bt->status_telp_hustler); ?>" disabled> 
                       </div>
                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="1" name="cattelp_hustler" class="form-control" disabled> <?php echo $bt->cattelp_hustler?></textarea>
                        </div>
                        </div>


                         <!-- email hustler -->
                         <div class="row"><div class="col-md-6 form-group mb-3">
                        <label><h4>2.4 EMAIL HUSTLER</h4></label>
                        <input type="text" class="form-control" id="email_hustler" name="email_hustler" value="<?php echo $bt->email_hustler ?>" disabled> 
                        </div>
                        <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <?php echo anchor('mahasiswa/biodatatim/update/'.$bt->id_biodatatim,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?>
                        </div>
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <input type="text" class="form-control" id="status_email_hustler" name="status_email_hustler" value="<?php echo ($bt->status_email_hustler); ?>" disabled> 
                       </div>
                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="1" name="catemail_hustler" class="form-control" disabled> <?php echo $bt->catemail_hustler?></textarea>
                        </div>
                        </div>


                         <!-- tugas hustler -->
                         <div class="row">
                        <div class="col-md-6 form-group mb-3">
                        <label for="textarea"><h4>2.5 TUGAS HUSTLER</h4></label>
                        <textarea id="content2" rows="5" name="tugas_hustler" class="form-control" disabled> <?php echo $bt->tugas_hustler?></textarea>
                        </div>
                        <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <?php echo anchor('mahasiswa/biodatatim/update/'.$bt->id_biodatatim,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?>
                        </div>
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <input type="text" class="form-control" id="status_tugas_hustler" name="status_tugas_hustler" value="<?php echo ($bt->status_tugas_hustler); ?>" disabled> 
                       </div>
                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="5" name="cattugas_hustler" class="form-control" disabled> <?php echo $bt->cattugas_hustler?></textarea>
                        </div>
                        </div>

                        

                        <!--hipster -->
                        <div class="alert alert-danger col-md-12" role="alert">
                        <i class="fas fa-user-friends"></i><h3>B. Hipster</h3></div>
                        <br>

                          <!-- nama hipster -->
                          <div class="row">
                        <div class="col-md-6 form-group mb-3">
                        <label><h4>2.6 NAMA HIPSTER</h4></label>
                        <input type="text" class="form-control" id="nama_hipster" name="nama_hipster" value="<?php echo strtoupper ($bt->nama_hipster); ?>" disabled> 
                        </div>
                        <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <?php echo anchor('mahasiswa/biodatatim/update/'.$bt->id_biodatatim,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?>
                        </div>
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <input type="text" class="form-control" id="status_nama_hipster" name="status_nama_hipster" value="<?php echo ($bt->status_nama_hipster); ?>" disabled> 
                       </div>
                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="1" name="catnama_hipster" class="form-control" disabled> <?php echo $bt->catnama_hipster?></textarea>
                        </div>
                        </div>

                        <!-- alamat hipster -->
                        <div class="row">
                        <div class="col-md-6 form-group mb-3">
                        <label for="textarea"><h4>2.7 ALAMAT HIPSTER</h4></label>
                        <textarea id="content3" type="text" rows="5" name="alamat_hipster" class="form-control" disabled> <?php echo $bt->alamat_hipster?></textarea>
                        </div>
                        <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <?php echo anchor('mahasiswa/biodatatim/update/'.$bt->id_biodatatim,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?>
                        </div>
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <input type="text" class="form-control" id="status_alamat_hipster" name="status_alamat_hipster" value="<?php echo ($bt->status_alamat_hipster); ?>" disabled> 
                       </div>
                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="5" name="catalamat_hipster" class="form-control" disabled> <?php echo $bt->catalamat_hipster?></textarea>
                        </div>
                        </div>


                         <!-- telp  hipster -->
                         <div class="row">
                        <div class="col-md-6 form-group mb-3">
                        <label><h4>2.8 TELPON HIPSTER</h4></label>
                        <input type="text" class="form-control" id="telp_hipster" name="telp_hipster" value="<?php echo $bt->telp_hipster ?>" disabled> 
                        </div>
                        <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <?php echo anchor('mahasiswa/biodatatim/update/'.$bt->id_biodatatim,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?>
                        </div>
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <input type="text" class="form-control" id="status_telp_hipster" name="status_telp_hipster" value="<?php echo ($bt->status_telp_hipster); ?>" disabled> 
                       </div>
                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="1" name="cattelp_hipster" class="form-control" disabled> <?php echo $bt->cattelp_hipster?></textarea>
                        </div>
                        </div>


                         <!-- email hipster -->
                         <div class="row"><div class="col-md-6 form-group mb-3">
                        <label><h4>2.9 EMAIL HIPSTER</h4></label>
                        <input type="text" class="form-control" id="email_hipster" name="email_hipster" value="<?php echo $bt->email_hipster ?>" disabled> 
                        </div>
                        <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <?php echo anchor('mahasiswa/biodatatim/update/'.$bt->id_biodatatim,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?>
                        </div>
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <input type="text" class="form-control" id="status_email_hipster" name="status_email_hipster" value="<?php echo ($bt->status_email_hipster); ?>" disabled> 
                       </div>
                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="1" name="catemail_hipster" class="form-control" disabled> <?php echo $bt->catemail_hipster?></textarea>
                        </div>
                        </div>


                         <!-- tugas hipster -->
                         <div class="row">
                        <div class="col-md-6 form-group mb-3">
                        <label for="textarea"><h4>2.10 TUGAS HIPSTER</h4></label>
                        <textarea id="content4" type="text" rows="5" name="tugas_hipster" class="form-control" disabled> <?php echo $bt->tugas_hipster?></textarea>
                        </div>
                        <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <?php echo anchor('mahasiswa/biodatatim/update/'.$bt->id_biodatatim,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?>
                        </div>
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <input type="text" class="form-control" id="status_tugas_hipster" name="status_tugas_hipster" value="<?php echo ($bt->status_tugas_hipster); ?>" disabled> 
                       </div>
                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="5" name="cattugas_hipster" class="form-control" disabled> <?php echo $bt->cattugas_hipster?></textarea>
                        </div>
                        </div>

                        
                         <!-- tugas hacker -->
                        <div class="alert alert-danger col-md-12" role="alert">
                        <i class="fas fa-user-friends"></i><h3>C. Hacker</h3></div>
                        <br>

                         <!-- nama hacker -->
                         <div class="row">
                        <div class="col-md-6 form-group mb-3">
                        <label><h4>2.11 NAMA HACKER</h4></label>
                        <input type="text" class="form-control" id="nama_hacker" name="nama_hacker" value="<?php echo strtoupper ($bt->nama_hacker); ?>" disabled> 
                        </div>
                        <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <?php echo anchor('mahasiswa/biodatatim/update/'.$bt->id_biodatatim,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?>
                        </div>
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <input type="text" class="form-control" id="status_nama_hacker" name="status_nama_hacker" value="<?php echo ($bt->status_nama_hacker); ?>" disabled> 
                       </div>
                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="1" name="catnama_hacker" class="form-control" disabled> <?php echo $bt->catnama_hacker?></textarea>
                        </div>
                        </div>

                        <!-- alamat hacker -->
                        <div class="row">
                        <div class="col-md-6 form-group mb-3">
                        <label for="textarea"><h4>2.12 ALAMAT HACKER</h4></label>
                        <textarea id="content5" type="text" rows="5" name="alamat_hacker" class="form-control" disabled> <?php echo $bt->alamat_hacker?></textarea>
                        </div>
                        <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <?php echo anchor('mahasiswa/biodatatim/update/'.$bt->id_biodatatim,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?>
                        </div>
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <input type="text" class="form-control" id="status_alamat_hacker" name="status_alamat_hacker" value="<?php echo ($bt->status_alamat_hacker); ?>" disabled> 
                       </div>
                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="5" name="catalamat_hacker" class="form-control" disabled> <?php echo $bt->catalamat_hacker?></textarea>
                        </div>
                        </div>


                         <!-- telp  hacker -->
                         <div class="row">
                        <div class="col-md-6 form-group mb-3">
                        <label><h4>2.13 TELPON HACKER</h4></label>
                        <input type="text" class="form-control" id="telp_hacker" name="telp_hacker" value="<?php echo $bt->telp_hacker ?>" disabled> 
                        </div>
                        <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <?php echo anchor('mahasiswa/biodatatim/update/'.$bt->id_biodatatim,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?>
                        </div>
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <input type="text" class="form-control" id="status_telp_hacker" name="status_telp_hacker" value="<?php echo ($bt->status_telp_hacker); ?>" disabled> 
                       </div>
                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="1" name="cattelp_hacker" class="form-control" disabled> <?php echo $bt->cattelp_hacker?></textarea>
                        </div>
                        </div>


                         <!-- email hacker -->
                         <div class="row"><div class="col-md-6 form-group mb-3">
                        <label><h4>2.14 EMAIL HACKER</h4></label>
                        <input type="text" class="form-control" id="email_hacker" name="email_hacker" value="<?php echo $bt->email_hacker ?>" disabled> 
                        </div>
                        <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <?php echo anchor('mahasiswa/biodatatim/update/'.$bt->id_biodatatim,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?>
                        </div>
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <input type="text" class="form-control" id="status_email_hacker" name="status_email_hacker" value="<?php echo ($bt->status_email_hacker); ?>" disabled> 
                       </div>
                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="1" name="catemail_hacker" class="form-control" disabled> <?php echo $bt->catemail_hacker?></textarea>
                        </div>
                        </div>


                         <!-- tugas hacker -->
                         <div class="row">
                        <div class="col-md-6 form-group mb-3">
                        <label for="textarea"><h4>2.15 TUGAS HACKER</h4></label>
                        <textarea id="content6" type="text" rows="5" name="tugas_hacker" class="form-control" disabled> <?php echo $bt->tugas_hacker?></textarea>
                        </div>
                        <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <?php echo anchor('mahasiswa/biodatatim/update/'.$bt->id_biodatatim,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?>
                        </div>
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <input type="text" class="form-control" id="status_tugas_hacker" name="status_tugas_hacker" value="<?php echo ($bt->status_tugas_hacker); ?>" disabled> 
                       </div>
                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="5" name="cattugas_hacker" class="form-control" disabled> <?php echo $bt->cattugas_hacker?></textarea>
                        </div>
                        </div>
                  
                    
                      
                     <?php endforeach; ?>
                     
                     </table>
                     <br>
                     
                  </div>
                  <br>
                     <?php echo anchor('mahasiswa/eproposal','<button class="btn btn-sm btn-primary mb-3"></i> Back </button> ')?>
                     
               </div>
               
            </div>
         </div>
      </div>

      <script>
                // Replace the <textarea id="editor1"> with a CKEditor 4
                // instance, using default configuration.
                CKEDITOR.replace( 'content1' );
                CKEDITOR.replace( 'content2' );
                CKEDITOR.replace( 'content3' );
                CKEDITOR.replace( 'content4' );
                CKEDITOR.replace( 'content5' );
                CKEDITOR.replace( 'content6' );
            </script>
        
      <!-- end cases -->