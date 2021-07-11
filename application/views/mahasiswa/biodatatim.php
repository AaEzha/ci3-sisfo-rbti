
  
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
                  <?php echo anchor('mahasiswa/biodatatim/input','<button class="btn btn-sm btn-primary mb-3"></i> Tambah Proposal </button> ')?>

                  <?php $no=1; foreach($biodatatim as $bt) :  ?>

                        <div class="alert alert-danger col-md-12" role="alert">
                        <i class="fas fa-user-friends"></i><h3>A. Hustler</h3></div>

                        <!-- nama hustler -->
                        <div class="row">
                        <div class="col-md-10 form-group mb-3">
                        <label><h4>NAMA HUSTLER</h4></label>
                        <input type="text" class="form-control" id="nama_hustler" name="nama_hustler" value="<?php echo strtoupper ($bt->nama_hustler); ?>" disabled> 
                        </div>
                        <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <?php echo anchor('mahasiswa/biodatatim/update/'.$bt->id_biodatatim,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?>
                        </div>
                        <div class="col-md-1 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <br>
                        <?php echo anchor('mahasiswa/biodatatim/status/'.$bt->id_biodatatim,'<div class="btn btn=sm btn-success">
                           <i class="fa fa-info"></i></div>')?>
                       </div>
                        </div>

                        <!-- alamat hustler -->
                        <div class="row">
                        <div class="col-md-10 form-group mb-3">
                        <label for="textarea"><h4>ALAMAT HUSTLER</h4></label>
                        <textarea type="text" rows="5" name="alamat_hustler" class="form-control" disabled> <?php echo $bt->alamat_hustler?></textarea>
                        </div>
                        <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <?php echo anchor('mahasiswa/biodatatim/update/'.$bt->id_biodatatim,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?>
                        </div>
                        <div class="col-md-1 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <br>
                        <?php echo anchor('mahasiswa/biodatatim/status/'.$bt->id_biodatatim,'<div class="btn btn=sm btn-success">
                           <i class="fa fa-info"></i></div>')?>
                       </div>
                        </div>


                         <!-- telp  hustler -->
                         <div class="row">
                        <div class="col-md-10 form-group mb-3">
                        <label><h4>TELPON HUSTLER</h4></label>
                        <input type="text" class="form-control" id="telp_hustler" name="telp_hustler" value="<?php echo $bt->telp_hustler ?>" disabled> 
                        </div>
                        <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <?php echo anchor('mahasiswa/biodatatim/update/'.$bt->id_biodatatim,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?>
                        </div>
                        <div class="col-md-1 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <br>
                        <?php echo anchor('mahasiswa/biodatatim/status/'.$bt->id_biodatatim,'<div class="btn btn=sm btn-success">
                           <i class="fa fa-info"></i></div>')?>
                       </div>
                        </div>


                         <!-- email hustler -->
                         <div class="row"><div class="col-md-10 form-group mb-3">
                        <label><h4>EMAIL HUSTLER</h4></label>
                        <input type="text" class="form-control" id="email_hustler" name="email_hustler" value="<?php echo $bt->email_hustler ?>" disabled> 
                        </div>
                        <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <?php echo anchor('mahasiswa/biodatatim/update/'.$bt->id_biodatatim,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?>
                        </div>
                        <div class="col-md-1 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <br>
                        <?php echo anchor('mahasiswa/biodatatim/status/'.$bt->id_biodatatim,'<div class="btn btn=sm btn-success">
                           <i class="fa fa-info"></i></div>')?>
                       </div>
                        </div>


                         <!-- tugas hustler -->
                         <div class="row">
                        <div class="col-md-10 form-group mb-3">
                        <label for="textarea"><h4>TUGAS HUSTLER</h4></label>
                        <textarea type="text" rows="5" name="tugas_hustler" class="form-control" disabled> <?php echo $bt->tugas_hustler?></textarea>
                        </div>
                        <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <?php echo anchor('mahasiswa/biodatatim/update/'.$bt->id_biodatatim,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?>
                        </div>
                        <div class="col-md-1 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <br>
                        <?php echo anchor('mahasiswa/biodatatim/status/'.$bt->id_biodatatim,'<div class="btn btn=sm btn-success">
                           <i class="fa fa-info"></i></div>')?>
                       </div>
                        </div>

                        

                        <!--hipster -->
                        <div class="alert alert-danger col-md-12" role="alert">
                        <i class="fas fa-user-friends"></i><h3>B. Hipster</h3></div>
                        <br>

                          <!-- nama hipster -->
                          <div class="row">
                        <div class="col-md-10 form-group mb-3">
                        <label><h4>NAMA hipster</h4></label>
                        <input type="text" class="form-control" id="nama_hipster" name="nama_hipster" value="<?php echo strtoupper ($bt->nama_hipster); ?>" disabled> 
                        </div>
                        <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <?php echo anchor('mahasiswa/biodatatim/update/'.$bt->id_biodatatim,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?>
                        </div>
                        <div class="col-md-1 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <br>
                        <?php echo anchor('mahasiswa/biodatatim/status/'.$bt->id_biodatatim,'<div class="btn btn=sm btn-success">
                           <i class="fa fa-info"></i></div>')?>
                       </div>
                        </div>

                        <!-- alamat hipster -->
                        <div class="row">
                        <div class="col-md-10 form-group mb-3">
                        <label for="textarea"><h4>ALAMAT hipster</h4></label>
                        <textarea type="text" rows="5" name="alamat_hipster" class="form-control" disabled> <?php echo $bt->alamat_hipster?></textarea>
                        </div>
                        <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <?php echo anchor('mahasiswa/biodatatim/update/'.$bt->id_biodatatim,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?>
                        </div>
                        <div class="col-md-1 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <br>
                        <?php echo anchor('mahasiswa/biodatatim/status/'.$bt->id_biodatatim,'<div class="btn btn=sm btn-success">
                           <i class="fa fa-info"></i></div>')?>
                       </div>
                        </div>


                         <!-- telp  hipster -->
                         <div class="row">
                        <div class="col-md-10 form-group mb-3">
                        <label><h4>TELPON hipster</h4></label>
                        <input type="text" class="form-control" id="telp_hipster" name="telp_hipster" value="<?php echo $bt->telp_hipster ?>" disabled> 
                        </div>
                        <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <?php echo anchor('mahasiswa/biodatatim/update/'.$bt->id_biodatatim,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?>
                        </div>
                        <div class="col-md-1 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <br>
                        <?php echo anchor('mahasiswa/biodatatim/status/'.$bt->id_biodatatim,'<div class="btn btn=sm btn-success">
                           <i class="fa fa-info"></i></div>')?>
                       </div>
                        </div>


                         <!-- email hipster -->
                         <div class="row"><div class="col-md-10 form-group mb-3">
                        <label><h4>EMAIL hipster</h4></label>
                        <input type="text" class="form-control" id="email_hipster" name="email_hipster" value="<?php echo $bt->email_hipster ?>" disabled> 
                        </div>
                        <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <?php echo anchor('mahasiswa/biodatatim/update/'.$bt->id_biodatatim,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?>
                        </div>
                        <div class="col-md-1 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <br>
                        <?php echo anchor('mahasiswa/biodatatim/status/'.$bt->id_biodatatim,'<div class="btn btn=sm btn-success">
                           <i class="fa fa-info"></i></div>')?>
                       </div>
                        </div>


                         <!-- tugas hipster -->
                         <div class="row">
                        <div class="col-md-10 form-group mb-3">
                        <label for="textarea"><h4>TUGAS hipster</h4></label>
                        <textarea type="text" rows="5" name="tugas_hipster" class="form-control" disabled> <?php echo $bt->tugas_hipster?></textarea>
                        </div>
                        <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <?php echo anchor('mahasiswa/biodatatim/update/'.$bt->id_biodatatim,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?>
                        </div>
                        <div class="col-md-1 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <br>
                        <?php echo anchor('mahasiswa/biodatatim/status/'.$bt->id_biodatatim,'<div class="btn btn=sm btn-success">
                           <i class="fa fa-info"></i></div>')?>
                       </div>
                        </div>

                        
                         <!-- tugas hacker -->
                        <div class="alert alert-danger col-md-12" role="alert">
                        <i class="fas fa-user-friends"></i><h3>C. Hacker</h3></div>
                        <br>

                         <!-- nama hacker -->
                         <div class="row">
                        <div class="col-md-10 form-group mb-3">
                        <label><h4>NAMA hacker</h4></label>
                        <input type="text" class="form-control" id="nama_hacker" name="nama_hacker" value="<?php echo strtoupper ($bt->nama_hacker); ?>" disabled> 
                        </div>
                        <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <?php echo anchor('mahasiswa/biodatatim/update/'.$bt->id_biodatatim,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?>
                        </div>
                        <div class="col-md-1 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <br>
                        <?php echo anchor('mahasiswa/biodatatim/status/'.$bt->id_biodatatim,'<div class="btn btn=sm btn-success">
                           <i class="fa fa-info"></i></div>')?>
                       </div>
                        </div>

                        <!-- alamat hacker -->
                        <div class="row">
                        <div class="col-md-10 form-group mb-3">
                        <label for="textarea"><h4>ALAMAT hacker</h4></label>
                        <textarea type="text" rows="5" name="alamat_hacker" class="form-control" disabled> <?php echo $bt->alamat_hacker?></textarea>
                        </div>
                        <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <?php echo anchor('mahasiswa/biodatatim/update/'.$bt->id_biodatatim,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?>
                        </div>
                        <div class="col-md-1 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <br>
                        <?php echo anchor('mahasiswa/biodatatim/status/'.$bt->id_biodatatim,'<div class="btn btn=sm btn-success">
                           <i class="fa fa-info"></i></div>')?>
                       </div>
                        </div>


                         <!-- telp  hacker -->
                         <div class="row">
                        <div class="col-md-10 form-group mb-3">
                        <label><h4>TELPON hacker</h4></label>
                        <input type="text" class="form-control" id="telp_hacker" name="telp_hacker" value="<?php echo $bt->telp_hacker ?>" disabled> 
                        </div>
                        <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <?php echo anchor('mahasiswa/biodatatim/update/'.$bt->id_biodatatim,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?>
                        </div>
                        <div class="col-md-1 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <br>
                        <?php echo anchor('mahasiswa/biodatatim/status/'.$bt->id_biodatatim,'<div class="btn btn=sm btn-success">
                           <i class="fa fa-info"></i></div>')?>
                       </div>
                        </div>


                         <!-- email hacker -->
                         <div class="row"><div class="col-md-10 form-group mb-3">
                        <label><h4>EMAIL hacker</h4></label>
                        <input type="text" class="form-control" id="email_hacker" name="email_hacker" value="<?php echo $bt->email_hacker ?>" disabled> 
                        </div>
                        <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <?php echo anchor('mahasiswa/biodatatim/update/'.$bt->id_biodatatim,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?>
                        </div>
                        <div class="col-md-1 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <br>
                        <?php echo anchor('mahasiswa/biodatatim/status/'.$bt->id_biodatatim,'<div class="btn btn=sm btn-success">
                           <i class="fa fa-info"></i></div>')?>
                       </div>
                        </div>


                         <!-- tugas hacker -->
                         <div class="row">
                        <div class="col-md-10 form-group mb-3">
                        <label for="textarea"><h4>TUGAS hacker</h4></label>
                        <textarea type="text" rows="5" name="tugas_hacker" class="form-control" disabled> <?php echo $bt->tugas_hacker?></textarea>
                        </div>
                        <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <?php echo anchor('mahasiswa/biodatatim/update/'.$bt->id_biodatatim,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?>
                        </div>
                        <div class="col-md-1 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <br>
                        <?php echo anchor('mahasiswa/biodatatim/status/'.$bt->id_biodatatim,'<div class="btn btn=sm btn-success">
                           <i class="fa fa-info"></i></div>')?>
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
      <!-- end cases -->