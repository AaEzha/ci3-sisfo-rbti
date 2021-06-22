 
    <!-- cases -->
      <div class="cases">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage text_align_center ">
                     <h2>Start-Up</h2>
                     <p>Dalam pengisian, anda bebas mulai mengisi dari bab berapapun, dimanapun, dan kapanpun                                                                                                                                                                                                            </p>
                  </div>
               </div>
            </div>
            <div class="row d_flex" >
               <div class=" col-md-12" >
                  <div class="latest text_align_center" >
                  <?php echo anchor('mahasiswa/startup/input','<button class="btn btn-sm btn-primary mb-3"></i> Tambah Proposal </button> ')?>
                  <table class="table table-bordered table-stripped table-hover" >
                     <tr>
                           <th>NO</th>
                           <th>NAMA PERUSAHAAN</th>
                           <th>VISI PERUSAHAAN</th>
                           <th>MISI PERUSAHAAN</th>
                           <th>STRUKTUR ORGANISASI</th>
                           <th>LOGO PERUSAHAAN</th>
                           <th>TAGLINE PERUSAHAAN</th>
                           <th colspan="2">AKSI</th>
                     </tr>

                     <?php $no=1; foreach($startup as $su) :  ?>
                     <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo strtoupper ($su->nama_start_up); ?></td>
                        <td><?php echo $su->visi_start_up ?></td>
                        <td><?php echo $su->misi_start_up ?></td>
                        <td><img src="<?php echo base_url().'assets/files/'.$su->struktur_start_up?>" style="width:20%;"></td>
                        <td><img src="<?php echo base_url().'assets/files/'.$su->logo_start_up?>" style="width:20%;"></td>
                        <td><?php echo strtoupper ($su->tagline_start_up) ?></td>
                        <td width="10px"><?php echo anchor('mahasiswa/startup/update/'.$su->id_start_up,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?></td>
                           <td width="10px"><?php echo anchor('mahasiswa/startup/delete/'.$su->id_start_up,'<div class="btn btn=sm btn-danger">
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