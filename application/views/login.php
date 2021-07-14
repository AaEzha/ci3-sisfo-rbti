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
                         
                        <div class="col-md-8 ">
                        <div class="titlepage text_align_center ">
                                   
                                    <div class="col-md-6">
                                    <?php echo $this->session->flashdata('pesan')?>
                                    <form method="POST" action="<?php echo base_url('welcome')?>" id="request" class="main_form">               
              
                       
                        <h2>LOGIN</h2>
                        <br>
                        <br>
                        <input class="contactus" placeholder="Username" type="type" name="uname_user" >
                           <?php echo form_error('uname_user','<div class="text-danger small" ml-3>')?>
                           <input class="contactus" placeholder="Password" type="password" name="pass_user">  
                           <?php echo form_error('pass_user','<div class="text-danger small" ml-3>')?>                        
                    
                        <button type="submit" class="subsci_btn">Login</button>
                     </div>
                  </form>
                     
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
    