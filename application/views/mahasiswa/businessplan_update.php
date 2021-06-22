
        
      <div class="container-fluid">
      <br>
    <br>
  

          
            <div class="alert alert-danger col-md-6" role="alert">
                <i class="fas fa-user-friends"></i><h2>UPDATE BUSINESSPLSN<h2></div>
                <?php foreach($businessplan as $bp) : ?>   
        <form method="post" action="<?php echo base_url('mahasiswa/businessplan/update_aksi')?>" enctype="multipart/form-data">
        
            <div class="form-group col-md-6 ">
            <label><h4>CUSTOMER</h4></label>
                <input type="text" name="cust_plan" class="form-control" class="form-control" value="<?php echo $bp->cust_plan?>">
                <input type="hidden" name="id_plan" value="<?php echo $bp->id_plan?>">
                <?php echo form_error('cust_plan','<div class="text-danger small" ml-3>')?>
            </div>


            <div class="form-group col-md-6 ">
                <label><h4>VALUE PROPOSITIONS</h4></label>
                <input type="text"  name="value_plan" class="form-control" value="<?php echo $bp->value_plan?>">
                <?php echo form_error('value_plan','<div class="text-danger small" ml-3>')?>
            </div>
            
            <div class="form-group col-md-6 ">
                <label><h4>CHANNELS</h4></label>
                <input type="text"  name="channels_plan" value="<?php echo $bp->channels_plan?>" class="form-control">
                <?php echo form_error('channels_plan','<div class="text-danger small" ml-3>')?>
            </div>
            
            <div class="form-group col-md-6 ">
                <label><h4>RELATIONSHIPS</h4></label>
                <input type="text"  name="relation_plan" value="<?php echo $bp->relation_plan?>" class="form-control">
                <?php echo form_error('relation_plan','<div class="text-danger small" ml-3>')?>
            </div>

            <div class="form-group col-md-6 ">
                <label><h4>KEY ACTIVITIES</h4></label>
                <input type="text"  name="key_act_plan" value="<?php echo $bp->key_act_plan?>"  class="form-control">
                <?php echo form_error('key_act_plan','<div class="text-danger small" ml-3>')?>
            </div>

            <div class="form-group col-md-6 ">
                <label><h4>KEY RESOURCE</h4></label>
                <input type="text"  name="key_res_plan" value="<?php echo $bp->key_res_plan?>"  class="form-control">
                <?php echo form_error('key_res_plan','<div class="text-danger small" ml-3>')?>
            </div>

            <div class="form-group col-md-6 ">
                <label><h4>KEY PARTNERS</h4></label>
                <input type="text"  name="key_partner_plan" value="<?php echo $bp->key_partner_plan?>" class="form-control">
                <?php echo form_error('key_partner_plan','<div class="text-danger small" ml-3>')?>
            </div>

            <div class="form-group col-md-6 ">
                <label><h4>COST STRUCTURE</h4></label>
                <input type="text"  name="cost_plan" value="<?php echo $bp->cost_plan?>" class="form-control">
                <?php echo form_error('cost_plan','<div class="text-danger small" ml-3>')?>
            </div>

            <div class="form-group col-md-6 ">
                <label><h4>REVENUE STREAMS</h4></label>
                <input type="text"  name="revenue_plan" value="<?php echo $bp->revenue_plan?>" class="form-control">
                <?php echo form_error('revenue_plan','<div class="text-danger small" ml-3>')?>
            </div>

           



            <button type="submit" class='btn btn-primary'>Simpan</button>
            <br>
            <br>

        </form>

      
        </div>

        <?php endforeach; ?>

</div>
</div>