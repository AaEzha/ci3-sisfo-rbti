
  
      <div class="cases">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage text_align_center ">
                     <h2>BAB 3</h2>
                     <h1>Review Produk</h1>
                     <p>Dalam pengisian, anda bebas mulai mengisi dari bab berapapun, dimanapun, dan kapanpun                                                                                                                                                                                                            </p>
                  </div>
               </div>
            </div>
            <div class="row d_flex" >
               <div class=" col-md-12" >
                  <div class="latest text_align_center" >
                  <?php echo anchor('mahasiswa/reviewproduk/input','<button class="btn btn-sm btn-primary mb-3"></i> Tambah Proposal </button> ')?>
                  <table class="table table-bordered table-stripped table-hover" >
                   <?php $no=1; foreach($reviewproduk as $rp) :  ?>
                     <tr>
                           <th>NAMA APLIKASI</th>
                           <td><?php echo strtoupper ($rp->nama_solusi); ?></td>
                           <td width="10px"><?php echo anchor('mahasiswa/reviewproduk/update/'.$rp->id_solusi,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?></td>
                           <td width="10px"><?php echo anchor('mahasiswa/reviewproduk/status/'.$rp->id_solusi,'<div class="btn btn=sm btn-success">
                           <i class="fa fa-trash"></i></div>')?></td>
                     

                     </tr>
                     <tr>
                           <th>DESKRRIPSI APLIKASI</th>
                           <td><?php echo $rp->deskripsi_solusi ?></td>
                           <td width="10px"><?php echo anchor('mahasiswa/reviewproduk/update/'.$rp->id_solusi,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?></td>
                           <td width="10px"><?php echo anchor('mahasiswa/reviewproduk/status/'.$rp->id_solusi,'<div class="btn btn=sm btn-success">
                           <i class="fa fa-trash"></i></div>')?></td>
                     

                     </tr>
                     <tr>      
                           <th>LOGO APLIKASI</th>
                           <td><img src="<?php echo base_url().'assets/files/'.$rp->logo_solusi?>"></td>
                           <td width="10px"><?php echo anchor('mahasiswa/reviewproduk/update/'.$rp->id_solusi,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?></td>
                           <td width="10px"><?php echo anchor('mahasiswa/reviewproduk/status/'.$rp->id_solusi,'<div class="btn btn=sm btn-success">
                           <i class="fa fa-trash"></i></div>')?></td>
                     
                        

                     </tr>
                     <tr>
                           <th>PREVIEW UI/UX -1</th>
                           <td><img src="<?php echo base_url().'assets/files/'.$rp->prev_ui1_solusi?>"></td>
                           <td width="10px"><?php echo anchor('mahasiswa/reviewproduk/update/'.$rp->id_solusi,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?></td>
                           <td width="10px"><?php echo anchor('mahasiswa/reviewproduk/status/'.$rp->id_solusi,'<div class="btn btn=sm btn-success">
                           <i class="fa fa-trash"></i></div>')?></td>
                     
                        
                        

                     </tr>
                     <tr>
                           <th>PREVIEW UI/UX -2</th>
                           <td><img src="<?php echo base_url().'assets/files/'.$rp->prev_ui2_solusi?>"></td>
                           <td width="10px"><?php echo anchor('mahasiswa/reviewproduk/update/'.$rp->id_solusi,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?></td>
                           <td width="10px"><?php echo anchor('mahasiswa/reviewproduk/status/'.$rp->id_solusi,'<div class="btn btn=sm btn-success">
                           <i class="fa fa-trash"></i></div>')?></td>
                     
                        

                     </tr>
                     <tr>
                           <th>PREVIEW UI/UX -3</th>
                           <td><img src="<?php echo base_url().'assets/files/'.$rp->prev_ui3_solusi?>"></td>
                           <td width="10px"><?php echo anchor('mahasiswa/reviewproduk/update/'.$rp->id_solusi,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?></td>
                           <td width="10px"><?php echo anchor('mahasiswa/reviewproduk/status/'.$rp->id_solusi,'<div class="btn btn=sm btn-success">
                           <i class="fa fa-trash"></i></div>')?></td>
                     
                        


                     </tr>
                     <tr>
                           <th>PREVIEW UI/UX -4</th>
                           <td><img src="<?php echo base_url().'assets/files/'.$rp->prev_ui4_solusi?>"></td>
                           <td width="10px"><?php echo anchor('mahasiswa/reviewproduk/update/'.$rp->id_solusi,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?></td>
                           <td width="10px"><?php echo anchor('mahasiswa/reviewproduk/status/'.$rp->id_solusi,'<div class="btn btn=sm btn-success">
                           <i class="fa fa-trash"></i></div>')?></td>
                     
                        
                     </tr>
                     <tr>
                           <th>TAHUN PEMBUATAN</th>
                           <td><?php echo $rp->tahun_buat_solusi ?></td>
                           <td width="10px"><?php echo anchor('mahasiswa/reviewproduk/update/'.$rp->id_solusi,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?></td>
                           <td width="10px"><?php echo anchor('mahasiswa/reviewproduk/status/'.$rp->id_solusi,'<div class="btn btn=sm btn-success">
                           <i class="fa fa-trash"></i></div>')?></td>
                     
                       

                     </tr>
                     <tr>
                           <th>LINK VIDEO</th>
                           <td><?php echo $rp->link_vid_solusi ?></td>
                           <td width="10px"><?php echo anchor('mahasiswa/reviewproduk/update/'.$rp->id_solusi,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?></td>
                           <td width="10px"><?php echo anchor('mahasiswa/reviewproduk/status/'.$rp->id_solusi,'<div class="btn btn=sm btn-success">
                           <i class="fa fa-trash"></i></div>')?></td>
                     
                        

                     </tr>
                     <tr>
                           <th>LINK PRODUK</th>
                           <td><?php echo $rp->link_prod_solusi ?></td>
                           <td width="10px"><?php echo anchor('mahasiswa/reviewproduk/update/'.$rp->id_solusi,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?></td>
                           <td width="10px"><?php echo anchor('mahasiswa/reviewproduk/status/'.$rp->id_solusi,'<div class="btn btn=sm btn-success">
                           <i class="fa fa-trash"></i></div>')?></td>
                     
                        

                     </tr>
                     <tr>
                           <th>TEKNOLOGI YANG DIGUNAKAN</th>
                           <td><?php echo $rp->teknologi_solusi ?></td>
                           <td width="10px"><?php echo anchor('mahasiswa/reviewproduk/update/'.$rp->id_solusi,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?></td>
                           <td width="10px"><?php echo anchor('mahasiswa/reviewproduk/status/'.$rp->id_solusi,'<div class="btn btn=sm btn-success">
                           <i class="fa fa-trash"></i></div>')?></td>
                     
                       

                     </tr>
                
                     <?php endforeach; ?>

                  
                     </table>
                     <br>
                  </div>
                  <?php echo anchor('mahasiswa/eproposal/','<button class="btn btn-sm btn-primary mb-3"></i> Back </button> ')?>
               </div>
               
            </div>
         </div>
      </div>
      <!-- end cases -->