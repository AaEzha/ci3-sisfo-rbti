
      <div class="row d_flex" >
               <div class=" col-md-12" >
                  <div class="latest text_align_center" >
                  <table class="table table-bordered table-stripped table-hover" >
    

        <div class="alert alert-danger col-md-6" role="alert">
                <i class="fas fa-user-friends"></i><h2>BUSINESS PLAN</h2></div>

        <form method="post" action="<?php echo base_url('mahasiswa/businessplan/input_aksi')?>" enctype="multipart/form-data">
        
                <input type="hidden" name="nim_plan"  class="form-control" value="<?php echo $this->session->uname_user ?>">
            </div>

            
           
            <div class="form-group col-md-6 ">
                <label><h4>CUSTOMER</h4></label>
                <input type="text"  name="cust_plan" placeholder="Masukkan Customer Perusahan Start-Up Anda" class="form-control">
                <?php echo form_error('cust_plan','<div class="text-danger small" ml-3>')?>
            </div>

            <div class="form-group col-md-6 ">
                <label><h4>VALUE PROPOSITIONS</h4></label>
                <input type="text"  name="value_plan" placeholder="Masukkan Value Propositions Perusahan Start-Up Anda" class="form-control">
                <?php echo form_error('value_plan','<div class="text-danger small" ml-3>')?>
            </div>
            
            <div class="form-group col-md-6 ">
                <label><h4>CHANNELS</h4></label>
                <input type="text"  name="channels_plan" placeholder="Masukkan Channels Perusahan Start-Up Anda"  class="form-control">
                <?php echo form_error('channels_plan','<div class="text-danger small" ml-3>')?>
            </div>
            
            <div class="form-group col-md-6 ">
                <label><h4>RELATIONSHIPS</h4></label>
                <input type="text"  name="relation_plan" placeholder="Masukkan Relationships Perusahan Start-Up Anda" class="form-control">
                <?php echo form_error('relation_plan','<div class="text-danger small" ml-3>')?>
            </div>

            <div class="form-group col-md-6 ">
                <label><h4>KEY ACTIVITIES</h4></label>
                <input type="text"  name="key_act_plan" placeholder="Masukkan Key Activities Perusahan Start-Up Anda"  class="form-control">
                <?php echo form_error('key_act_plan','<div class="text-danger small" ml-3>')?>
            </div>

            <div class="form-group col-md-6 ">
                <label><h4>KEY RESOURCE</h4></label>
                <input type="text"  name="key_res_plan" placeholder="Masukkan Key Resource Perusahan Start-Up Anda"  class="form-control">
                <?php echo form_error('key_res_plan','<div class="text-danger small" ml-3>')?>
            </div>

            <div class="form-group col-md-6 ">
                <label><h4>KEY PARTNERS</h4></label>
                <input type="text"  name="key_partner_plan" placeholder="Masukkan Key Partner Perusahan Start-Up Anda" class="form-control">
                <?php echo form_error('key_partner_plan','<div class="text-danger small" ml-3>')?>
            </div>

            <div class="form-group col-md-6 ">
                <label><h4>COST STRUCTURE</h4></label>
                <input type="text"  name="cost_plan" placeholder="Masukkan Cost Strucuture Perusahan Start-Up Anda"class="form-control">
                <?php echo form_error('cost_plan','<div class="text-danger small" ml-3>')?>
            </div>

            <div class="form-group col-md-6 ">
                <label><h4>REVENUE STREAMS</h4></label>
                <input type="text"  name="revenue_plan" placeholder="Masukkan Revenue Streams Perusahan Start-Up Anda" class="form-control">
                <?php echo form_error('revenue_plan','<div class="text-danger small" ml-3>')?>
            </div>

            
            <button type="submit" class='btn btn-primary'>Simpan</button>
            <br>
            <br>

        </form>

      
        </div>
        </div>