
  
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

                  <table class="table table-bordered table-stripped table-hover" >
                  <?php $no=1; foreach($biodatatim as $bt) :  ?>
                     <tr>
                           <th>NAMA HUSTLER</th>
                           <td><?php echo strtoupper ($bt->nama_hustler); ?></td>
                           <td width="10px"><?php echo anchor('mahasiswa/biodatatim/update/'.$bt->id_biodatatim,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?></td>
                           <td width="10px"><?php echo anchor('mahasiswa/biodatatim/status/'.$bt->id_biodatatim,'<div class="btn btn=sm btn-success">
                           <i class="fa fa-info"></i></div>')?></td>
                     
                     
                     </tr>
                     <tr>
                           <th>ALAMAT HUSTLER</th>
                           <td><?php echo $bt->alamat_hustler ?></td>
                           <td width="10px"><?php echo anchor('mahasiswa/biodatatim/update/'.$bt->id_biodatatim,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?></td>
                           <td width="10px"><?php echo anchor('mahasiswa/biodatatim/status/'.$bt->id_biodatatim,'<div class="btn btn=sm btn-success">
                           <i class="fa fa-info"></i></div>')?></td>
                     
                     

                     </tr>
                     <tr>
                           <th>TELP HUSTLER</th>
                           <td><?php echo $bt->telp_hustler ?></td>
                           <td width="10px"><?php echo anchor('mahasiswa/biodatatim/update/'.$bt->id_biodatatim,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?></td>
                           <td width="10px"><?php echo anchor('mahasiswa/biodatatim/status/'.$bt->id_biodatatim,'<div class="btn btn=sm btn-success">
                           <i class="fa fa-info"></i></div>')?></td>
                     
                     

                     </tr>
                     <tr>
                           <th>EMAIL HUSTLER</th>
                           <td><?php echo $bt->email_hustler ?></td>
                           <td width="10px"><?php echo anchor('mahasiswa/biodatatim/update/'.$bt->id_biodatatim,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?></td>
                           <td width="10px"><?php echo anchor('mahasiswa/biodatatim/status/'.$bt->id_biodatatim,'<div class="btn btn=sm btn-success">
                           <i class="fa fa-info"></i></div>')?></td>
                     
                     

                     </tr>
                     <tr>
                           <th>TUGAS HUSTLER</th>
                           <td><?php echo $bt->tugas_hustler ?></td>
                           <td width="10px"><?php echo anchor('mahasiswa/biodatatim/update/'.$bt->id_biodatatim,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?></td>
                           <td width="10px"><?php echo anchor('mahasiswa/biodatatim/status/'.$bt->id_biodatatim,'<div class="btn btn=sm btn-success">
                           <i class="fa fa-info"></i></div>')?></td>
                     
                     

                     </tr>
                     <tr>
                           <th>NAMA HIPSTER</th>
                           <td><?php echo strtoupper ($bt->nama_hipster); ?></td>
                           <td width="10px"><?php echo anchor('mahasiswa/biodatatim/update/'.$bt->id_biodatatim,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?></td>
                           <td width="10px"><?php echo anchor('mahasiswa/biodatatim/status/'.$bt->id_biodatatim,'<div class="btn btn=sm btn-success">
                           <i class="fa fa-info"></i></div>')?></td>
                     
                     

                     </tr>
                     <tr>
                           <th>ALAMAT HIPSTER</th>
                           <td><?php echo $bt->alamat_hipster ?></td>
                           <td width="10px"><?php echo anchor('mahasiswa/biodatatim/update/'.$bt->id_biodatatim,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?></td>
                           <td width="10px"><?php echo anchor('mahasiswa/biodatatim/status/'.$bt->id_biodatatim,'<div class="btn btn=sm btn-success">
                           <i class="fa fa-info"></i></div>')?></td>
                     
                     

                     </tr>
                     <tr>
                           <th>TELP HIPSTER</th>
                           <td><?php echo $bt->telp_hipster ?></td>
                           <td width="10px"><?php echo anchor('mahasiswa/biodatatim/update/'.$bt->id_biodatatim,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?></td>
                           <td width="10px"><?php echo anchor('mahasiswa/biodatatim/status/'.$bt->id_biodatatim,'<div class="btn btn=sm btn-success">
                           <i class="fa fa-info"></i></div>')?></td>
                     
                     

                     </tr>
                     <tr>
                           <th>EMAIL HIPSTER</th>
                           <td><?php echo $bt->email_hipster ?></td>
                           <td width="10px"><?php echo anchor('mahasiswa/biodatatim/update/'.$bt->id_biodatatim,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?></td>
                           <td width="10px"><?php echo anchor('mahasiswa/biodatatim/status/'.$bt->id_biodatatim,'<div class="btn btn=sm btn-success">
                           <i class="fa fa-info"></i></div>')?></td>
                     
                     

                     </tr>
                     <tr>
                           <th>TUGAS HIPSTER</th>
                           <td><?php echo $bt->tugas_hipster ?></td>
                           <td width="10px"><?php echo anchor('mahasiswa/biodatatim/update/'.$bt->id_biodatatim,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?></td>
                           <td width="10px"><?php echo anchor('mahasiswa/biodatatim/status/'.$bt->id_biodatatim,'<div class="btn btn=sm btn-success">
                           <i class="fa fa-info"></i></div>')?></td>
                     
                     

                     </tr>
                     <tr>
                           <th>NAMA HACKER</th>
                           <td><?php echo strtoupper ($bt->nama_hacker); ?></td>
                           <td width="10px"><?php echo anchor('mahasiswa/biodatatim/update/'.$bt->id_biodatatim,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?></td>
                           <td width="10px"><?php echo anchor('mahasiswa/biodatatim/status/'.$bt->id_biodatatim,'<div class="btn btn=sm btn-success">
                           <i class="fa fa-info"></i></div>')?></td>
                     
                     

                     </tr>
                     <tr>
                           <th>ALAMAT HACKER</th>
                           <td><?php echo $bt->alamat_hacker ?></td>
                           <td width="10px"><?php echo anchor('mahasiswa/biodatatim/update/'.$bt->id_biodatatim,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?></td>
                           <td width="10px"><?php echo anchor('mahasiswa/biodatatim/status/'.$bt->id_biodatatim,'<div class="btn btn=sm btn-success">
                           <i class="fa fa-info"></i></div>')?></td>
                     
                     

                     </tr>
                     <tr>
                           <th>TELP HACKER</th>
                           <td><?php echo $bt->telp_hacker ?></td>
                           <td width="10px"><?php echo anchor('mahasiswa/biodatatim/update/'.$bt->id_biodatatim,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?></td>
                           <td width="10px"><?php echo anchor('mahasiswa/biodatatim/status/'.$bt->id_biodatatim,'<div class="btn btn=sm btn-success">
                           <i class="fa fa-info"></i></div>')?></td>
                     
                     

                     </tr>
                     <tr>
                           <th>EMAIL HACKER</th>
                           <td><?php echo $bt->email_hacker ?></td>
                           <td width="10px"><?php echo anchor('mahasiswa/biodatatim/update/'.$bt->id_biodatatim,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?></td>
                           <td width="10px"><?php echo anchor('mahasiswa/biodatatim/status/'.$bt->id_biodatatim,'<div class="btn btn=sm btn-success">
                           <i class="fa fa-info"></i></div>')?></td>
                     
                     

                     </tr>
                     <tr>
                           <th>TUGAS HACKER</th>
                           <td><?php echo $bt->tugas_hacker ?></td>
                           <td width="10px"><?php echo anchor('mahasiswa/biodatatim/update/'.$bt->id_biodatatim,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?></td>
                           <td width="10px"><?php echo anchor('mahasiswa/biodatatim/status/'.$bt->id_biodatatim,'<div class="btn btn=sm btn-success">
                           <i class="fa fa-info"></i></div>')?></td>
                      
                     

                     </tr>
                    
                      
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