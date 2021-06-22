<div class="full_bg">
      <!-- header inner -->
         <div class="section">
            <!-- carousel code -->
            <div id="banner1" class="carousel slide slider_main">
                <div class="carousel-inner">
                  <!-- first slide -->
                  <div class="carousel-item active">
                     <div class="carousel-caption cuplle">
                        <div class="container">
                           <div class="row">
                              <div class="col-md-10">
                                 <div class="photog">
                                    <h1>Login</h1>
                                    <div class="col-md-6">
                                    <?php echo $this->session->flashdata('pesan')?>
                                    <form method="POST" action="<?php echo base_url('welcome')?>" id="request" class="main_form">               
                     <div class="row">
                        <div class="col-md-10 ">
                           <input class="contactus" placeholder="Username" type="type" name="uname_user" >
                           <?php echo form_error('uname_user','<div class="text-danger small" ml-3>')?> 
                        </div>
                        <div class="col-md-10">
                           <input class="contactus" placeholder="Password" type="type" name="pass_user">  
                           <?php echo form_error('pass_user','<div class="text-danger small" ml-3>')?>                        
                        </div>
                        <div class="col-md-10">
                        <button type="submit" class="subsci_btn">Login</button>
                     </div>
                  </form>
               </div>
                                 
                           </div>
                        </div>
                     </div>
                  </div>
                  
               </div>
              
               </a>
            </div>
         </div>
      </div>
      <!-- end banner -->
    