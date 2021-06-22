
  
      <div class="cases">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage text_align_center ">
                     <h2>Paper Pitching</h2>
                     <p>Dalam pengisian, anda bebas mulai mengisi dari bab berapapun, dimanapun, dan kapanpun                                                                                                                                                                                                            </p>
                  </div>
               </div>
            </div>
            <div class="row d_flex" >
               <div class=" col-md-12" >
                  <div class="latest text_align_center" >
                  <?php echo anchor('mahasiswa/paperpitching/input','<button class="btn btn-sm btn-primary mb-3"></i> Tambah Proposal </button> ')?>
                  <table class="table table-bordered table-stripped table-hover" >
                     <tr>
                           <th>NO</th>
                           <th>LATAR BELAKANG</th>
                           <th>PERMASALAHAN YANG INGIN DIATASI</th>
                           <th>SOLUSI YANG DITAWARKAN</th>
                           <th>PROGRESS USAHA</th>
                           <th>COMPETITOR USAHA</th>
                           <th>USAHA SERUPA</th>
                           <th>TARGET PENGGUNA</th>
                           <th>DATA YANG DIGUNAKAN</th>
                           <th>PROSES BISNIS</th>
                           <th>PROSES BISNIS (GAMBAR)</th>
                           <th>TAHAPAN MEWUJUDKAN SOLUSI</th>
                           <th>KELEBIHAN DARI SOLUSI ANDA</th>
                           <th colspan="2">AKSI</th>
                     </tr>

                     <?php $no=1; foreach($paperpitching as $pp) :  ?>
                     <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $pp->latar_belakang_pp ?></td>
                        <td><?php echo $pp->permasalahan_pp ?></td>
                        <td><?php echo $pp->solusi_pp ?></td>
                        <td><?php echo $pp->progres_pp ?></td>
                        <td><?php echo $pp->kompetitor_pp ?></td>
                        <td><?php echo $pp->kompetitor2_pp ?></td>
                        <td><?php echo $pp->target_pp ?></td>
                        <td><?php echo $pp->data_pp ?></td>
                        <td><?php echo $pp->proses_bisnis_pp ?></td>
                        <td><img src="<?php echo base_url().'assets/files/'.$pp->proses_bisnis2_pp?>"></td>
                        <td><?php echo $pp->tahapan_pp ?></td>
                        <td><?php echo $pp->kelebihan_pp ?></td>
                                               
                        
                        <td width="10px"><?php echo anchor('mahasiswa/paperpitching/update/'.$pp->id_pp,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?></td>
                           <td width="10px"><?php echo anchor('mahasiswa/paperpitching/delete/'.$pp->id_pp,'<div class="btn btn=sm btn-danger">
                           <i class="fa fa-trash"></i></div>')?></td>
                     
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