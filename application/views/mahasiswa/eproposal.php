
   
  
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
                           <th>TEMA PROPOSAL</th>
                           <th>BAB <br>1</th>
                           <th>BAB <br> 2</th>
                           <th>BAB 3</th>
                           <th>BAB 4</th>
                           <th>BAB 5</th>
                           <th colspan="2">AKSI</th>
               
                     </tr>  
 
                     <?php $no=1; foreach($masterproposal as $mp) :  ?>
                     <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $mp->nim_mhs ?></td>
                        <td><?php echo $mp->judul_proposal ?></td>
                        <td><?php echo $mp->tema_proposal ?></td>
                        <td width="10px"><?php echo anchor('mahasiswa/startup/index/'.$mp->id_proposal,'<div class="btn btn=sm btn-primary" data-toggle="tooltip" data-placement="top" title="START UP">
                           <i class="fa fa-pencil"></i></div>') ?></td>
                        <td width="10px"><?php echo anchor('mahasiswa/biodatatim/index/'.$mp->id_proposal,'<div class="btn btn=sm btn-primary" data-toggle="tooltip" data-placement="top" title="BIODATA TIM">
                           <i class="fa fa-pencil"></i></div>') ?></td>
                        <td width="10px"><?php echo anchor('mahasiswa/reviewproduk/index/'.$mp->id_proposal,'<div class="btn btn=sm btn-primary" data-toggle="tooltip" data-placement="top" title="REVIEW PRODUK">
                           <i class="fa fa-pencil"></i></div>') ?></td>
                        <td width="10px"><?php echo anchor('mahasiswa/paperpitching/index/'.$mp->id_proposal,'<div class="btn btn=sm btn-primary" data-toggle="tooltip" data-placement="top" title="PAPER PITCHING">
                           <i class="fa fa-pencil"></i></div>') ?></td>
                        <td width="10px"><?php echo anchor('mahasiswa/businessplan/index/'.$mp->id_proposal,'<div class="btn btn=sm btn-primary" data-toggle="tooltip" data-placement="top" title="BUSINESS PLAN">
                           <i class="fa fa-pencil"></i></div>') ?></td>
                        <td width="10px"><?php  echo anchor('mahasiswa/cetak/cetakProposal/'.$mp->id_proposal,'<div class="btn btn=sm btn-success" data-toggle="tooltip" data-placement="top" title="CETAK PDF">
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