
  
      <div class="cases">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage text_align_center ">
                     <h2>Review Produk</h2>
                     <p>Dalam pengisian, anda bebas mulai mengisi dari bab berapapun, dimanapun, dan kapanpun                                                                                                                                                                                                            </p>
                  </div>
               </div>
            </div>
            <div class="row d_flex" >
               <div class=" col-md-12" >
                  <div class="latest text_align_center" >
                  <?php echo anchor('mahasiswa/reviewproduk/input','<button class="btn btn-sm btn-primary mb-3"></i> Tambah Proposal </button> ')?>
                  <table class="table table-bordered table-stripped table-hover" >
                     <tr>
                           <th>NO</th>
                           <th>NAMA APLIKASI</th>
                           <th>DESKRRIPSI APLIKASI</th>
                           <th>LOGO APLIKASI</th>
                           <th>PREVIEW UI/UX -1</th>
                           <th>PREVIEW UI/UX -2</th>
                           <th>PREVIEW UI/UX -3</th>
                           <th>PREVIEW UI/UX -4</th>
                           <th>TAHUN PEMBUATAN</th>
                           <th>LINK VIDEO</th>
                           <th>LINK PRODUK</th>
                           <th>TEKNOLOGI YANG DIGUNAKAN</th>
                           <th colspan="2">AKSI</th>
                     </tr>

                     <?php $no=1; foreach($reviewproduk as $rp) :  ?>
                     <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo strtoupper ($rp->nama_solusi); ?></td>
                        <td><?php echo $rp->deskripsi_solusi ?></td>
                        <td><img src="<?php echo base_url().'assets/files/'.$rp->logo_solusi?>"></td>
                        <td><img src="<?php echo base_url().'assets/files/'.$rp->prev_ui1_solusi?>"></td>
                        <td><img src="<?php echo base_url().'assets/files/'.$rp->prev_ui2_solusi?>"></td>
                        <td><img src="<?php echo base_url().'assets/files/'.$rp->prev_ui3_solusi?>"></td>
                        <td><img src="<?php echo base_url().'assets/files/'.$rp->prev_ui4_solusi?>"></td>
                        <td><?php echo $rp->tahun_buat_solusi ?></td>
                        <td><?php echo $rp->link_vid_solusi ?></td>
                        <td><?php echo $rp->link_prod_solusi ?></td>
                        <td><?php echo $rp->teknologi_solusi ?></td>
                        <td width="10px"><?php echo anchor('mahasiswa/reviewproduk/update/'.$rp->id_solusi,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?></td>
                           <td width="10px"><?php echo anchor('mahasiswa/reviewproduk/delete/'.$rp->id_solusi,'<div class="btn btn=sm btn-danger">
                           <i class="fa fa-trash"></i></div>')?></td>
                     
                     </tr>
                     <?php endforeach; ?>

                  
                     </table>
                     <br>
                  </div>
                  <?php echo anchor('mahasiswa/eproposal','<button class="btn btn-sm btn-primary mb-3"></i> Back </button> ')?>
               </div>
               
            </div>
         </div>
      </div>
      <!-- end cases -->