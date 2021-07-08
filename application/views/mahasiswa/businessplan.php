
      <div class="cases">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage text_align_center ">
                  <h2>BAB 5</h2>
                     <h1>Business Plan</h1>
                     <p>Dalam pengisian, anda bebas mulai mengisi dari bab berapapun, dimanapun, dan kapanpun                                                                                                                                                                                                            </p>
                  </div>
               </div>
            </div>
            <div class="row d_flex" >
               <div class=" col-md-12" >
                  <div class="latest text_align_center" >
                  <?php echo anchor('mahasiswa/businessplan/input','<button class="btn btn-sm btn-primary mb-3"></i> Tambah Proposal </button> ')?>

                   
                  <table class="table table-bordered table-stripped table-hover" >
                  <?php $no=1; foreach($businessplan as $bp) :  ?>
                     <tr>
                           <th>CUSTOMER</th>
                           <td><?php echo $bp->cust_plan ?></td>
                           <td width="10px"><?php echo anchor('mahasiswa/businessplan/update/'.$bp->id_plan,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?></td>
                           <td width="10px"><?php echo anchor('mahasiswa/businessplan/status/'.$bp->id_plan,'<div class="btn btn=sm btn-success">
                           <i class="fa fa-info"></i></div>')?></td>
                     

                           </tr>
                     <tr>
                           <th>VALUE PROPOSITIONS</th>
                           <td><?php echo $bp->value_plan ?></td>
                           <td width="10px"><?php echo anchor('mahasiswa/businessplan/update/'.$bp->id_plan,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?></td>
                           <td width="10px"><?php echo anchor('mahasiswa/businessplan/status/'.$bp->id_plan,'<div class="btn btn=sm btn-success">
                           <i class="fa fa-info"></i></div>')?></td>
                     

                           </tr>
                     <tr>
                           <th>CHANNELS</th>
                           <td><?php echo $bp->channels_plan ?></td>
                           <td width="10px"><?php echo anchor('mahasiswa/businessplan/update/'.$bp->id_plan,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?></td>
                           <td width="10px"><?php echo anchor('mahasiswa/businessplan/status/'.$bp->id_plan,'<div class="btn btn=sm btn-success">
                           <i class="fa fa-info"></i></div>')?></td>
                     

                           </tr>
                     <tr>
                           <th>RELATIONSHIPS</th>
                           <td><?php echo $bp->relation_plan ?></td>
                           <td width="10px"><?php echo anchor('mahasiswa/businessplan/update/'.$bp->id_plan,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?></td>
                           <td width="10px"><?php echo anchor('mahasiswa/businessplan/status/'.$bp->id_plan,'<div class="btn btn=sm btn-success">
                           <i class="fa fa-info"></i></div>')?></td>
                     

                           </tr>
                     <tr>
                           <th>KEY ACTIVITIES</th>
                           <td><?php echo $bp->key_act_plan ?></td>
                           <td width="10px"><?php echo anchor('mahasiswa/businessplan/update/'.$bp->id_plan,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?></td>
                           <td width="10px"><?php echo anchor('mahasiswa/businessplan/status/'.$bp->id_plan,'<div class="btn btn=sm btn-success">
                           <i class="fa fa-info"></i></div>')?></td>
                     

                           </tr>
                     <tr>
                           <th>KEY RESOURCE</th>
                           <td><?php echo $bp->key_res_plan ?></td>
                           <td width="10px"><?php echo anchor('mahasiswa/businessplan/update/'.$bp->id_plan,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?></td>
                           <td width="10px"><?php echo anchor('mahasiswa/businessplan/status/'.$bp->id_plan,'<div class="btn btn=sm btn-success">
                           <i class="fa fa-info"></i></div>')?></td>
                     

                           </tr>
                     <tr>
                           <th>KEY PARTNERS</th>
                           <td><?php echo $bp->key_partner_plan ?></td>
                           <td width="10px"><?php echo anchor('mahasiswa/businessplan/update/'.$bp->id_plan,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?></td>
                           <td width="10px"><?php echo anchor('mahasiswa/businessplan/status/'.$bp->id_plan,'<div class="btn btn=sm btn-success">
                           <i class="fa fa-info"></i></div>')?></td>
                     

                           </tr>
                     <tr>
                           <th>COST STRUCTURE</th>
                           <td><?php echo $bp->cost_plan ?></td>
                           <td width="10px"><?php echo anchor('mahasiswa/businessplan/update/'.$bp->id_plan,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?></td>
                           <td width="10px"><?php echo anchor('mahasiswa/businessplan/status/'.$bp->id_plan,'<div class="btn btn=sm btn-success">
                           <i class="fa fa-info"></i></div>')?></td>
                     

                           </tr>
                     <tr>
                           <th>REVENUE STREAMS</th>
                           <td><?php echo $bp->revenue_plan ?></td>
                           <td width="10px"><?php echo anchor('mahasiswa/businessplan/update/'.$bp->id_plan,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?></td>
                           <td width="10px"><?php echo anchor('mahasiswa/businessplan/status/'.$bp->id_plan,'<div class="btn btn=sm btn-success">
                           <i class="fa fa-info"></i></div>')?></td>
                     
                     </tr>
       
                     <?php endforeach; ?>

                  
                     </table>
                  </div>
                  <?php echo anchor('mahasiswa/eproposal/','<button class="btn btn-sm btn-primary mb-3"></i> Back </button> ')?>
               </div>
               
            </div>
         </div>
      </div>
      <!-- end cases -->