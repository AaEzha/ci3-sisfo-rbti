
   
  
    <!-- cases -->
      <div class="cases">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage text_align_center ">
                     <h2>E-Proposal Rancangan Bisnis TI</h2>
                     <p>Dalam pengisian, anda bebas mulai mengisi dari bab berapapun, dimanapun, dan kapanpun                                                                                                                                                                                                            </p>
                     <br>
                     <?php echo anchor('mahasiswa/eproposal/input','<button class="btn btn-sm btn-primary mb-3"></i> Tambah Proposal </button> ')?>
                     <table class="table table-bordered table-stripped table-hover" >
                     <tr>
                           <th>NO</th>
                           <th>NIM MAHASISWA</th>
                           <th>JUDUL PROPOSAL</th>
                           <th colspan="7">AKSI</th>
               
                     </tr>

                     <?php $no=1; foreach($masterproposal as $mp) :  ?>
                     <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $mp->nim_mhs ?></td>
                        <td><?php echo $mp->judul_proposal ?></td>
                        <td width="10px"><?php echo anchor('mahasiswa/startup/index/'.$mp->id_proposal,'<div class="btn btn=sm btn-primary" data-toggle="tooltip" data-placement="top" title="BAB 1">
                           <i class="fa fa-plus"></i></div>') ?></td>
                        <td width="10px"><?php echo anchor('mahasiswa/businessplan/update/'.$mp->id_proposal,'<div class="btn btn=sm btn-primary" data-toggle="tooltip" data-placement="top" title="BAB 2">
                           <i class="fa fa-plus"></i></div>') ?></td>
                        <td width="10px"><?php echo anchor('mahasiswa/businessplan/update/'.$mp->id_proposal,'<div class="btn btn=sm btn-primary" data-toggle="tooltip" data-placement="top" title="BAB 3">
                           <i class="fa fa-plus"></i></div>') ?></td>
                        <td width="10px"><?php echo anchor('mahasiswa/businessplan/update/'.$mp->id_proposal,'<div class="btn btn=sm btn-primary" data-toggle="tooltip" data-placement="top" title="BAB 4">
                           <i class="fa fa-plus"></i></div>') ?></td>
                        <td width="10px"><?php echo anchor('mahasiswa/businessplan/update/'.$mp->id_proposal,'<div class="btn btn=sm btn-primary" data-toggle="tooltip" data-placement="top" title="BAB 5">
                           <i class="fa fa-plus"></i></div>') ?></td>
                        <td width="10px"><?php  echo anchor('mahasiswa/cetak/cetakProposal/'.$mp->id_proposal,'<div class="btn btn=sm btn-success">
                           <i class="fa fa-download"></i></div>') ?></td>
                        <td width="10px"><?php echo anchor('mahasiswa/eproposal/delete/'.$mp->id_proposal,'<div class="btn btn=sm btn-danger">
                           <i class="fa fa-trash"></i></div>') ?></td>
                           
                     </tr>
                     <?php endforeach; ?>

                  
                     </table>
                  </div>
                  <?php echo anchor('mahasiswa/eproposal','<button class="btn btn-sm btn-primary mb-3"></i> Back </button> ')?>
               </div>
               


                     </div>