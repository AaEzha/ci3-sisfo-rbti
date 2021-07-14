 
    <!-- cases -->
      <div class="cases">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage text_align_center ">
                  <h2>BAB 1</h2>
                     <h1>Start-Up</h1>
                     <p>Dalam pengisian, anda bebas mulai mengisi dari bab berapapun, dimanapun, dan kapanpun                                                                                                                                                                                                            </p>
                  </div>
               </div>
            </div> 
            <div class="row d_flex" >
               <div class=" col-md-12" >
                  <div class="latest text_align_center" >
                  <?php echo ($startup)?'':anchor('mahasiswa/startup/input','<button class="btn btn-sm btn-primary mb-3"></i> Tambah Proposal </button> ')?>
                  
                  <?php $no=1; foreach($startup as $su) :  ?>

                  <!-- nama perusahaan -->
                  <div class="row">
                        <div class="col-md-6 form-group mb-3">
                        <label><h4>1.1 NAMA PERUSAHAAN</h4></label>
                        <input type="text" class="form-control" id="nama_start_up" name="nama_start_up" value="<?php echo strtoupper ($su->nama_start_up); ?>" disabled> 
                        </div>
                        <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <?php echo anchor('mahasiswa/startup/update/'.$su->id_start_up,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?>
                        </div>
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <input type="text" class="form-control" id="status_nama_su" name="status_nama_su" value="<?php echo ($su->status_nama_su); ?>" disabled> 
                       </div>
                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="1" name="catnama_su" class="form-control" disabled> <?php echo $su->catnama_su?></textarea>
                        </div>
                        </div>

                  <!-- visi perusahaan -->
                  <div class="row">
                        <div class="col-md-6 form-group mb-3">
                        <label for="textarea"><h4>1.2 VISI START UP</h4></label>
                        <textarea id="content7" type="text" rows="7" name="visi_start_up" class="form-control" disabled> <?php echo $su->visi_start_up ?></textarea>
                        </div>
                        <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <?php echo anchor('mahasiswa/startup/update/'.$su->id_start_up,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?>
                        </div>
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <input type="text" class="form-control" id="status_visi_su" name="status_visi_su" value="<?php echo ($su->status_visi_su); ?>" disabled> 
                       </div>
                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="7" name="catvisi_su" class="form-control" disabled> <?php echo $su->catvisi_su?></textarea>
                        </div>
                        </div>


                  <!-- misi perusahaan -->
                  <div class="row">
                        <div class="col-md-6 form-group mb-3">
                        <label for="textarea"><h4>1.3 MISI START UP</h4></label>
                        <textarea id="content8" type="text" rows="7" name="misi_start_up" class="form-control" disabled> <?php echo $su->misi_start_up ?></textarea>
                        </div>
                        <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <?php echo anchor('mahasiswa/startup/update/'.$su->id_start_up,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?>
                        </div>
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <input type="text" class="form-control" id="status_misi_su" name="status_misi_su" value="<?php echo ($su->status_misi_su); ?>" disabled> 
                       </div>
                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="7" name="catmisi_su" class="form-control" disabled> <?php echo $su->catmisi_su?></textarea>
                        </div>
                        </div>


                      <!-- struktur perusahaan -->
                        <div class="row">
                        <div class="col-md-6 form-group mb-3">
                        <label><h4>1.4 STRUKTUR ORGANISASI</h4></label>
                        <br>
                        <img src="<?php echo base_url().'assets/files/'.$su->struktur_start_up?>" class="img-thumbnail" width="450px"></div>
                        <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <?php echo anchor('mahasiswa/startup/update/'.$su->id_start_up,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?>
                        </div>
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <input type="text" class="form-control" id="status_struktur_su" name="status_struktur_su" value="<?php echo ($su->status_struktur_su); ?>" disabled> 
                       </div>
                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="1" name="catstruktur_su" class="form-control" disabled> <?php echo $su->catstruktur_su?></textarea>
                        </div>
                        </div>
 
                     <!-- logo perusahaan -->
                     <div class="row">
                        <div class="col-md-6 form-group mb-3">
                        <label><h4>1.5 LOGO PERUSAHAAN</h4></label>
                        <br>
                        <img src="<?php echo base_url().'assets/files/'.$su->logo_start_up?>" class="img-thumbnail" width="450px"></div>
                        <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <?php echo anchor('mahasiswa/startup/update/'.$su->id_start_up,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?>
                        </div>
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <input type="text" class="form-control" id="status_logo_su" name="status_logo_su" value="<?php echo ($su->status_logo_su); ?>" disabled> 
                       </div>
                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="1" name="catlogo_su" class="form-control" disabled> <?php echo $su->catlogo_su?></textarea>
                        </div>
                        </div>


                    <!-- tagline perusahaan -->
                    <div class="row">
                        <div class="col-md-6 form-group mb-3">
                        <label><h4>1.6 TAGLINE PERUSAHAAN</h4></label>
                        <input type="text" class="form-control" id="tagline_start_up" name="tagline_start_up" value="<?php echo strtoupper ($su->tagline_start_up); ?>" disabled> 
                        </div>
                        <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <?php echo anchor('mahasiswa/startup/update/'.$su->id_start_up,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?>
                        </div>
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <input type="text" class="form-control" id="status_tagline_su" name="status_tagline_su" value="<?php echo ($su->status_tagline_su); ?>" disabled> 
                       </div>
                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="1" name="cattagline_su" class="form-control" disabled> <?php echo $su->cattagline_su?></textarea>
                        </div>
                        </div>

                  
                     <?php endforeach; ?>
                     </table>
                     <br>
                   </div>
                 <?php echo anchor('mahasiswa/eproposal/','<button class="btn btn-sm btn-primary mb-3"></i> Back </button> ')?>
               </div>
               <script>
                // Replace the <textarea id="editor1"> with a CKEditor 4
                // instance, using default configuration.
                CKEDITOR.replace( 'content7' );
                CKEDITOR.replace( 'content8' );
                
            </script>
            </div>
         </div>
      </div>
      <!-- end cases -->