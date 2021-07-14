
   
<!-- cases -->
<div class="cases">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage text_align_center ">
                  <h2>BAB 5</h2>
                     <h1>Business Plan</h1>
                     </div>                                                                                                                                                                                                     </p>
                  </div>
               </div>
            </div>
            <div class="row d_flex" >
               <div class=" col-md-12" >
                  <div class="latest text_align_center" >
                  <?php $no=1; foreach($averif5 as $bp) :  ?>
                    <form method="post" action="<?= base_url('dosen/daftarproposal/verifikasi5/'.$verif5['id_proposal']) ?>" enctype="multipart/form-data">  
                
                 

                    
                   <!-- CUSTOMER -->
                  <div class="row">
                        <div class="col-md-7 form-group mb-3">
                        <label for="textarea"><h4>5.1 CUSTOMER</h4></label>
                        <textarea id="content22" type="text" rows="7" name="cust_plan" class="form-control" disabled> <?php echo $bp->cust_plan?></textarea>
                        </div>
                        
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <select name="status_cust_plan">
                        <option disabled selected>---Pilih Status---</option>
                        <option value="Approve">Approve</option>
                        <option value="Revisi">Revisi</option></select>
                        </div>

                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="7" name="catcust_plan" class="form-control" > <?php echo $bp->catcust_plan?></textarea>
                        </div>
                        </div>
 

                  <!-- VALUE PROPOSITIONS -->
                  <div class="row">
                        <div class="col-md-7 form-group mb-3">
                        <label for="textarea"><h4>5.2 VALUE PROPOSITIONS</h4></label>
                        <textarea id="content23" type="text" rows="7" name="value_plan" class="form-control" disabled> <?php echo $bp->value_plan?></textarea>
                        </div>
                        
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <select name="status_value_plan">
                        <option disabled selected>---Pilih Status---</option>
                        <option value="Approve">Approve</option>
                        <option value="Revisi">Revisi</option></select>
                        </div>

                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="7" name="catvalue_plan" class="form-control" > <?php echo $bp->catvalue_plan?></textarea>
                        </div>
                        </div>


                  <!-- CHANNELS -->
                  <div class="row">
                        <div class="col-md-7 form-group mb-3">
                        <label for="textarea"><h4>5.3 CHANNELS</h4></label>
                        <textarea id="content24" type="text" rows="7" name="channels_plan" class="form-control" disabled> <?php echo $bp->channels_plan?></textarea>
                        </div>
                      
                        
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <select name="status_channels_plan">
                        <option disabled selected>---Pilih Status---</option>
                        <option value="Approve">Approve</option>
                        <option value="Revisi">Revisi</option></select>
                        </div>

                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="7" name="catchannels_plan" class="form-control" > <?php echo $bp->catchannels_plan?></textarea>
                        </div>
                        </div>

                  <!--RELATIONSHIPS -->
                  <div class="row">
                        <div class="col-md-7 form-group mb-3">
                        <label for="textarea"><h4>5.4 RELATIONSHIPS</h4></label>
                        <textarea id="content25"  type="text" rows="7" name="relation_plan" class="form-control" disabled> <?php echo $bp->relation_plan?></textarea>
                        </div>
                        
                        
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <select name="status_relation_plan">
                        <option disabled selected>---Pilih Status---</option>
                        <option value="Approve">Approve</option>
                        <option value="Revisi">Revisi</option></select>
                        </div>

                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="7" name="catrelation_plan" class="form-control"> <?php echo $bp->catrelation_plan?></textarea>
                        </div>
                        </div>


                   <!--KEY ACTIVITIES -->
                   <div class="row">
                        <div class="col-md-7 form-group mb-3">
                        <label for="textarea"><h4>5.5 KEY ACTIVITIES</h4></label>
                        <textarea id="content26" type="text" rows="7" name="key_act_plan" class="form-control" disabled> <?php echo $bp->key_act_plan?></textarea>
                        </div>
                       
                        
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <select name="status_keyact_plan">
                        <option disabled selected>---Pilih Status---</option>
                        <option value="Approve">Approve</option>
                        <option value="Revisi">Revisi</option></select>
                        </div>

                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="7" name="catkeyact_plan" class="form-control"> <?php echo $bp->catkeyact_plan?></textarea>
                        </div>
                        </div>

                  
                  <!--KEY RESOURCE -->
                  <div class="row">
                        <div class="col-md-7 form-group mb-3">
                        <label for="textarea"><h4>5.6 KEY RESOURCE</h4></label>
                        <textarea id="content27"  type="text" rows="7" name="key_res_plan" class="form-control" disabled> <?php echo $bp->key_res_plan?></textarea>
                        </div>
                       
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <select name="status_keyres_plan">
                        <option disabled selected>---Pilih Status---</option>
                        <option value="Approve">Approve</option>
                        <option value="Revisi">Revisi</option></select>
                        </div>

                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="7" name="catkeyres_plan" class="form-control" > <?php echo $bp->catkeyres_plan?></textarea>
                        </div>
                        </div>


                   <!--KEY PARTNERS-->
                   <div class="row">
                        <div class="col-md-7 form-group mb-3">
                        <label for="textarea"><h4>5.7 KEY PARTNERS</h4></label>
                        <textarea id="content28" type="text" rows="7" name="key_partner_plan" class="form-control" disabled> <?php echo $bp->key_partner_plan?></textarea>
                        </div>
                      
                        
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <select name="status_keypart_plan">
                        <option disabled selected>---Pilih Status---</option>
                        <option value="Approve">Approve</option>
                        <option value="Revisi">Revisi</option></select>
                        </div>

                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="7" name="catkeypart_plan" class="form-control" > <?php echo $bp->catkeypart_plan?></textarea>
                        </div>
                        </div>

                  <!--COST STRUCTURE-->
                  <div class="row">
                        <div class="col-md-7 form-group mb-3">
                        <label for="textarea"><h4>5.8 COST STRUCTURE</h4></label>
                        <textarea id="content29" type="text" rows="7" name="cost_plan" class="form-control" disabled> <?php echo $bp->cost_plan?></textarea>
                        </div>
                       
                        
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <select name="status_cost_plan">
                        <option disabled selected>---Pilih Status---</option>
                        <option value="Approve">Approve</option>
                        <option value="Revisi">Revisi</option></select>
                        </div>

                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="7" name="catcost_plan" class="form-control" > <?php echo $bp->catcost_plan?></textarea>
                        </div>
                        </div>


                  
                  <!--REVENUE STREAMS-->
                  <div class="row">
                        <div class="col-md-7 form-group mb-3">
                        <label for="textarea"><h4>5.9 REVENUE STREAMS</h4></label>
                        <textarea id="content30" type="text" rows="7" name="revenue_plan" class="form-control" disabled> <?php echo $bp->revenue_plan?></textarea>
                        </div>
                       
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <select name="status_revenue_plan">
                        <option disabled selected>---Pilih Status---</option>
                        <option value="Approve">Approve</option>
                        <option value="Revisi">Revisi</option></select>
                        </div>

                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="7" name="catrevenue_plan" class="form-control" > <?php echo $bp->catrevenue_plan?></textarea>
                        </div>
                        </div>
                  


                
       
                     <?php endforeach; ?>

                  
                     <button type="submit" class='btn btn-primary'>Simpan</button>
                     
                     <br>
                     <br>
                     
                  </div>
                 
                  <script>
                // Replace the <textarea id="editor1"> with a CKEditor 4
                // instance, using default configuration.
                CKEDITOR.replace( 'content22' );
                CKEDITOR.replace( 'content23' );
                CKEDITOR.replace( 'content24' );
                CKEDITOR.replace( 'content25' );
                CKEDITOR.replace( 'content26' );
                CKEDITOR.replace( 'content27' );
                CKEDITOR.replace( 'content28' );
                CKEDITOR.replace( 'content29' );
                CKEDITOR.replace( 'content30' );
               </script>
               </div>
               
            </div>
         </div>
      </div>
      <!-- end cases -->