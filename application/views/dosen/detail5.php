<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>E-Proposal RBTI</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="<?php echo base_url()?>assets/css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="<?php echo base_url()?>assets/images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
       <link rel="stylesheet" href="<?php echo base_url()?>assets/css/owl.carousel.min.css"> 
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- end loader -->
      <!-- top -->
                    <!-- header -->
         <header class="header-area">
            <div class="left">
               <a href="Javascript:void(0)"><i class="fa fa-search" aria-hidden="true"></i></a>
            </div>
            <div class="right">
            <a href="<?php echo base_url('welcome/logout')?>"><i class="fa fa-sign-out" aria-hidden="true"></i>logout</a>
            </div>
            <div class="container">
               <div class="row d_flex">
                  <div class="col-sm-3 logo_sm">
                     <div class="logo">
                        <a href="index.html"></a>
                     </div>
                  </div>
                  <div class="col-lg-19 offset-lg-2 col-md-12 col-sm-9">
                     <div class="navbar-area">
                        <nav class="site-navbar">
                           <ul>
                              <li><a href="<?php echo base_url('/dosen/dashboard')?>">Home</a></li>
                              <li><a href="<?php echo base_url('/dosen/daftarmahasiswa')?>">Daftar Mahasiswa</a></li>
                              <li><a class="active" href="<?php echo base_url('/dosen/daftarproposal')?>">Daftar E-Proposal</a></li>
                              <li><a href="doctores.html">Profil</a></li>
                           </ul>
                           <button class="nav-toggler">
                           <span></span>
                           </button>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </header> 
      <!-- end header -->
   
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
                  <table class="table table-bordered table-stripped table-hover" >
                  <?php $no=1; foreach($detailpro5 as $d) :  ?>
                    
                    <tr>
                            <th>5.1 </th>
                           <th>CUSTOMER</th>
                           <td><?php echo $d->cust_plan ?></td>
                           <td width="10px"><?php echo anchor('dosen/daftarproposal/verifikasi/'.$d->id_plan,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-eye"></i></div>') ?></td>
                           <td width="10px"><?php echo anchor('dosen/daftarproposal/komen/'.$d->id_plan,'<div class="btn btn=sm btn-success">
                           <i class="fa fa-comment"></i></div>')?></td>

                           </tr>
                     <tr>
                     <th>5.2 </th>
                           <th>VALUE PROPOSITIONS</th>
                           <td><?php echo $d->value_plan ?></td>
                           <td width="10px"><?php echo anchor('dosen/daftarproposal/verifikasi/'.$d->id_plan,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-eye"></i></div>') ?></td>
                           <td width="10px"><?php echo anchor('dosen/daftarproposal/komen/'.$d->id_plan,'<div class="btn btn=sm btn-success">
                           <i class="fa fa-comment"></i></div>')?></td>

                           </tr>
                     <tr>
                     <th>5.3 </th>
                           <th>CHANNELS</th>
                           <td><?php echo $d->channels_plan ?></td>
                           <td width="10px"><?php echo anchor('dosen/daftarproposal/verifikasi/'.$d->id_plan,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-eye"></i></div>') ?></td>
                           <td width="10px"><?php echo anchor('dosen/daftarproposal/komen/'.$d->id_plan,'<div class="btn btn=sm btn-success">
                           <i class="fa fa-comment"></i></div>')?></td>

                           </tr>
                     <tr>
                     <th>5.4 </th>
                           <th>RELATIONSHIPS</th>
                           <td><?php echo $d->relation_plan ?></td>
                           <td width="10px"><?php echo anchor('dosen/daftarproposal/verifikasi/'.$d->id_plan,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-eye"></i></div>') ?></td>
                           <td width="10px"><?php echo anchor('dosen/daftarproposal/komen/'.$d->id_plan,'<div class="btn btn=sm btn-success">
                           <i class="fa fa-comment"></i></div>')?></td>

                           </tr>
                     <tr>
                     <th>5.5 </th>
                           <th>KEY ACTIVITIES</th>
                           <td><?php echo $d->key_act_plan ?></td>
                           <td width="10px"><?php echo anchor('dosen/daftarproposal/verifikasi/'.$d->id_plan,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-eye"></i></div>') ?></td>
                           <td width="10px"><?php echo anchor('dosen/daftarproposal/komen/'.$d->id_plan,'<div class="btn btn=sm btn-success">
                           <i class="fa fa-comment"></i></div>')?></td>

                           </tr>
                     <tr>
                     <th>5.6 </th>
                           <th>KEY RESOURCE</th>
                           <td><?php echo $d->key_res_plan ?></td>
                           <td width="10px"><?php echo anchor('dosen/daftarproposal/verifikasi/'.$d->id_plan,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-eye"></i></div>') ?></td>
                           <td width="10px"><?php echo anchor('dosen/daftarproposal/komen/'.$d->id_plan,'<div class="btn btn=sm btn-success">
                           <i class="fa fa-comment"></i></div>')?></td>

                           </tr>
                     <tr>
                     <th>5.7 </th>
                           <th>KEY PARTNERS</th>
                           <td><?php echo $d->key_partner_plan ?></td>
                           <td width="10px"><?php echo anchor('dosen/daftarproposal/verifikasi/'.$d->id_plan,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-eye"></i></div>') ?></td>
                           <td width="10px"><?php echo anchor('dosen/daftarproposal/komen/'.$d->id_plan,'<div class="btn btn=sm btn-success">
                           <i class="fa fa-comment"></i></div>')?></td>

                           </tr>
                     <tr>
                     <th>5.8 </th>
                           <th>COST STRUCTURE</th>
                           <td><?php echo $d->cost_plan ?></td>
                           <td width="10px"><?php echo anchor('dosen/daftarproposal/verifikasi/'.$d->id_plan,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-eye"></i></div>') ?></td>
                           <td width="10px"><?php echo anchor('dosen/daftarproposal/komen/'.$d->id_plan,'<div class="btn btn=sm btn-success">
                           <i class="fa fa-comment"></i></div>')?></td>

                           </tr>
                     <tr>
                     <th>5.9 </th>
                           <th>REVENUE STREAMS</th>
                           <td><?php echo $d->revenue_plan ?></td>
                           <td width="10px"><?php echo anchor('dosen/daftarproposal/verifikasi/'.$d->id_plan,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-eye"></i></div>') ?></td>
                           <td width="10px"><?php echo anchor('dosen/daftarproposal/komen/'.$d->id_plan,'<div class="btn btn=sm btn-success">
                           <i class="fa fa-comment"></i></div>')?></td>
                     </tr>
                            
                     

                     

                <?php endforeach; ?>

                  
                     
                     </table>
                     <?php echo anchor('dosen/daftarproposal','<button class="btn btn-sm btn-primary mb-3"></i> Back </button> ')?>
                   
                     <br>
                     <br>
                     
                  </div>
                 
                     
               </div>
               
            </div>
         </div>
      </div>
      <!-- end cases -->