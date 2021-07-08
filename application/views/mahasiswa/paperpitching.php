
  
      <div class="cases">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage text_align_center ">
                     <h2>BAB 4</h2>
                     <h1>Paper Pitching</h1>
                     <p>Dalam pengisian, anda bebas mulai mengisi dari bab berapapun, dimanapun, dan kapanpun                                                                                                                                                                                                            </p>
                  </div>
               </div>
            </div>
            <div class="row d_flex" >
               <div class=" col-md-12" >
                  <div class="latest text_align_center" >
                  <?php echo anchor('mahasiswa/paperpitching/input','<button class="btn btn-sm btn-primary mb-3"></i> Tambah Proposal </button> ')?>
                  <table class="table table-bordered table-stripped table-hover" >
                  <?php $no=1; foreach($paperpitching as $pp) :  ?>
                     <tr>
                           <th>LATAR BELAKANG</th>
                           <td><?php echo $pp->latar_belakang_pp ?></td>
                           <td width="10px"><?php echo anchor('mahasiswa/paperpitching/update/'.$pp->id_pp,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?></td>
                           <td width="10px"><?php echo anchor('mahasiswa/paperpitching/status/'.$pp->id_pp,'<div class="btn btn=sm btn-success">
                           <i class="fa fa-info"></i></div>')?></td>
                     

                     </tr>
                     <tr>
                           <th>PERMASALAHAN YANG INGIN DIATASI</th>
                           <td><?php echo $pp->permasalahan_pp ?></td>
                           <td width="10px"><?php echo anchor('mahasiswa/paperpitching/update/'.$pp->id_pp,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?></td>
                           <td width="10px"><?php echo anchor('mahasiswa/paperpitching/status/'.$pp->id_pp,'<div class="btn btn=sm btn-success">
                           <i class="fa fa-info"></i></div>')?></td>
                     

                     </tr>
                     <tr>
                           <th>SOLUSI YANG DITAWARKAN</th>
                           <td><?php echo $pp->solusi_pp ?></td>
                           <td width="10px"><?php echo anchor('mahasiswa/paperpitching/update/'.$pp->id_pp,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?></td>
                           <td width="10px"><?php echo anchor('mahasiswa/paperpitching/status/'.$pp->id_pp,'<div class="btn btn=sm btn-success">
                           <i class="fa fa-info"></i></div>')?></td>
                     

                     </tr>
                     <tr>
                           <th>PROGRESS USAHA</th>
                           <td><?php echo $pp->progres_pp ?></td>
                           <td width="10px"><?php echo anchor('mahasiswa/paperpitching/update/'.$pp->id_pp,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?></td>
                           <td width="10px"><?php echo anchor('mahasiswa/paperpitching/status/'.$pp->id_pp,'<div class="btn btn=sm btn-success">
                           <i class="fa fa-info"></i></div>')?></td>
                     

                     </tr>
                     <tr>
                           <th>COMPETITOR USAHA</th>
                           <td><?php echo $pp->kompetitor_pp ?></td>
                           <td width="10px"><?php echo anchor('mahasiswa/paperpitching/update/'.$pp->id_pp,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?></td>
                           <td width="10px"><?php echo anchor('mahasiswa/paperpitching/status/'.$pp->id_pp,'<div class="btn btn=sm btn-success">
                           <i class="fa fa-info"></i></div>')?></td>
                     

                     </tr>
                     <tr>
                           <th>USAHA SERUPA</th>
                           <td><?php echo $pp->kompetitor2_pp ?></td>
                           <td width="10px"><?php echo anchor('mahasiswa/paperpitching/update/'.$pp->id_pp,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?></td>
                           <td width="10px"><?php echo anchor('mahasiswa/paperpitching/status/'.$pp->id_pp,'<div class="btn btn=sm btn-success">
                           <i class="fa fa-info"></i></div>')?></td>
                     

                     </tr>
                     <tr>
                           <th>TARGET PENGGUNA</th>
                           <td><?php echo $pp->target_pp ?></td>
                           <td width="10px"><?php echo anchor('mahasiswa/paperpitching/update/'.$pp->id_pp,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?></td>
                           <td width="10px"><?php echo anchor('mahasiswa/paperpitching/status/'.$pp->id_pp,'<div class="btn btn=sm btn-success">
                           <i class="fa fa-info"></i></div>')?></td>
                     

                     </tr>
                     <tr>
                           <th>DATA YANG DIGUNAKAN</th>
                           <td><?php echo $pp->data_pp ?></td>
                           <td width="10px"><?php echo anchor('mahasiswa/paperpitching/update/'.$pp->id_pp,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?></td>
                           <td width="10px"><?php echo anchor('mahasiswa/paperpitching/status/'.$pp->id_pp,'<div class="btn btn=sm btn-success">
                           <i class="fa fa-info"></i></div>')?></td>
                     

                     </tr>
                     <tr>
                           <th>PROSES BISNIS</th>
                           <td><?php echo $pp->proses_bisnis_pp ?></td>
                           <td width="10px"><?php echo anchor('mahasiswa/paperpitching/update/'.$pp->id_pp,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?></td>
                           <td width="10px"><?php echo anchor('mahasiswa/paperpitching/status/'.$pp->id_pp,'<div class="btn btn=sm btn-success">
                           <i class="fa fa-info"></i></div>')?></td>
                     

                     </tr>
                     <tr>
                           <th>PROSES BISNIS (GAMBAR)</th>
                           <td><img src="<?php echo base_url().'assets/files/'.$pp->proses_bisnis2_pp?>"></td>
                           <td width="10px"><?php echo anchor('mahasiswa/paperpitching/update/'.$pp->id_pp,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?></td>
                           <td width="10px"><?php echo anchor('mahasiswa/paperpitching/status/'.$pp->id_pp,'<div class="btn btn=sm btn-success">
                           <i class="fa fa-info"></i></div>')?></td>
                     
                        

                     </tr>
                     <tr>
                           <th>TAHAPAN MEWUJUDKAN SOLUSI</th>
                           <td><?php echo $pp->tahapan_pp ?></td>
                           <td width="10px"><?php echo anchor('mahasiswa/paperpitching/update/'.$pp->id_pp,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?></td>
                           <td width="10px"><?php echo anchor('mahasiswa/paperpitching/status/'.$pp->id_pp,'<div class="btn btn=sm btn-success">
                           <i class="fa fa-info"></i></div>')?></td>
                     

                     </tr>
                     <tr>
                           <th>KELEBIHAN DARI SOLUSI ANDA</th>
                           <td><?php echo $pp->kelebihan_pp ?></td>
                           <td width="10px"><?php echo anchor('mahasiswa/paperpitching/update/'.$pp->id_pp,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?></td>
                           <td width="10px"><?php echo anchor('mahasiswa/paperpitching/status/'.$pp->id_pp,'<div class="btn btn=sm btn-success">
                           <i class="fa fa-info"></i></div>')?></td>
                     

                     </tr>

                     <?php endforeach; ?>

                  
                     </table>
                  </div>
                  <?php echo anchor('mahasiswa/eproposal','<button class="btn btn-sm btn-primary mb-3"></i> Back </button> ')?>
               </div>
               
            </div>
         </div>
      </div>
      <!-- end cases -->