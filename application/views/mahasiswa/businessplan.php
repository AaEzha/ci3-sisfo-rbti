
      <div class="cases">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage text_align_center ">
                     <h2>Business Plan</h2>
                     <p>Dalam pengisian, anda bebas mulai mengisi dari bab berapapun, dimanapun, dan kapanpun                                                                                                                                                                                                            </p>
                  </div>
               </div>
            </div>
            <div class="row d_flex" >
               <div class=" col-md-12" >
                  <div class="latest text_align_center" >
                  <?php echo anchor('mahasiswa/businessplan/input','<button class="btn btn-sm btn-primary mb-3"></i> Tambah Proposal </button> ')?>

                  
                  <table class="table table-bordered table-stripped table-hover" >
                     <tr>
                           <th>NO</th>
                           <th>CUSTOMER</th>
                           <th>VALUE PROPOSITIONS</th>
                           <th>CHANNELS</th>
                           <th>RELATIONSHIPS</th>
                           <th>KEY ACTIVITIES</th>
                           <th>KEY RESOURCE</th>
                           <th>KEY PARTNERS</th>
                           <th>COST STRUCTURE</th>
                           <th>REVENUE STREAMS</th>
                           <th colspan="2">AKSI</th>
                     </tr>

                     <?php $no=1; foreach($businessplan as $bp) :  ?>
                     <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $bp->cust_plan ?></td>
                        <td><?php echo $bp->value_plan ?></td>
                        <td><?php echo $bp->channels_plan ?></td>
                        <td><?php echo $bp->relation_plan ?></td>
                        <td><?php echo $bp->key_act_plan ?></td>
                        <td><?php echo $bp->key_res_plan ?></td>
                        <td><?php echo $bp->key_partner_plan ?></td>
                        <td><?php echo $bp->cost_plan ?></td>
                        <td><?php echo $bp->revenue_plan ?></td>
                        <td width="10px"><?php echo anchor('mahasiswa/businessplan/update/'.$bp->id_plan,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?></td>
                           <td width="10px"><?php echo anchor('mahasiswa/businessplan/delete/'.$bp->id_plan,'<div class="btn btn=sm btn-danger">
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