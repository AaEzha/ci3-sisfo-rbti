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
                  <h2>BAB 4</h2>
                     <h1>Paper Pitching</h1>
                     </div>                                                                                                                                                                                                     </p>
                  </div>
               </div>
            </div>
            <div class="row d_flex" >
               <div class=" col-md-12" >
                  <div class="latest text_align_center" >
                  <table class="table table-bordered table-stripped table-hover" >
                  <?php $no=1; foreach($detailpro4 as $d) :  ?>
                    
                    <tr>
                    <th>4.1</th>
                           <th>LATAR BELAKANG</th>
                           <td><?php echo $d->latar_belakang_pp ?></td>
                            <td width="10px"><?php echo anchor('dosen/daftarproposal/verifikasi/'.$d->id_pp,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-eye"></i></div>') ?></td>
                           <td width="10px"><?php echo anchor('dosen/daftarproposal/komen/'.$d->id_pp,'<div class="btn btn=sm btn-success">
                           <i class="fa fa-comment"></i></div>')?></td>
                     

                     </tr>
                     <tr>
                     <th>4.2</th>
                           <th>PERMASALAHAN YANG INGIN DIATASI</th>
                           <td><?php echo $d->permasalahan_pp ?></td>
                            <td width="10px"><?php echo anchor('dosen/daftarproposal/verifikasi/'.$d->id_pp,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-eye"></i></div>') ?></td>
                           <td width="10px"><?php echo anchor('dosen/daftarproposal/komen/'.$d->id_pp,'<div class="btn btn=sm btn-success">
                           <i class="fa fa-comment"></i></div>')?></td>
                     

                     </tr>
                     <tr>
                     <th>4.3</th>
                           <th>SOLUSI YANG DITAWARKAN</th>
                           <td><?php echo $d->solusi_pp ?></td>
                            <td width="10px"><?php echo anchor('dosen/daftarproposal/verifikasi/'.$d->id_pp,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-eye"></i></div>') ?></td>
                           <td width="10px"><?php echo anchor('dosen/daftarproposal/komen/'.$d->id_pp,'<div class="btn btn=sm btn-success">
                           <i class="fa fa-comment"></i></div>')?></td>
                     

                     </tr>
                     <tr>
                     <th>4.4</th>
                           <th>PROGRESS USAHA</th>
                           <td><?php echo $d->progres_pp ?></td>
                            <td width="10px"><?php echo anchor('dosen/daftarproposal/verifikasi/'.$d->id_pp,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-eye"></i></div>') ?></td>
                           <td width="10px"><?php echo anchor('dosen/daftarproposal/komen/'.$d->id_pp,'<div class="btn btn=sm btn-success">
                           <i class="fa fa-comment"></i></div>')?></td>
                     

                     </tr>
                     <tr>
                     <th>4.5</th>
                           <th>COMPETITOR USAHA</th>
                           <td><?php echo $d->kompetitor_pp ?></td>
                            <td width="10px"><?php echo anchor('dosen/daftarproposal/verifikasi/'.$d->id_pp,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-eye"></i></div>') ?></td>
                           <td width="10px"><?php echo anchor('dosen/daftarproposal/komen/'.$d->id_pp,'<div class="btn btn=sm btn-success">
                           <i class="fa fa-comment"></i></div>')?></td>
                     

                     </tr>
                     <tr>
                     <th>4.6</th>
                           <th>USAHA SERUPA</th>
                           <td><?php echo $d->kompetitor2_pp ?></td>
                            <td width="10px"><?php echo anchor('dosen/daftarproposal/verifikasi/'.$d->id_pp,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-eye"></i></div>') ?></td>
                           <td width="10px"><?php echo anchor('dosen/daftarproposal/komen/'.$d->id_pp,'<div class="btn btn=sm btn-success">
                           <i class="fa fa-comment"></i></div>')?></td>
                     

                     </tr>
                     <tr>
                     <th>4.7</th>
                           <th>TARGET PENGGUNA</th>
                           <td><?php echo $d->target_pp ?></td>
                            <td width="10px"><?php echo anchor('dosen/daftarproposal/verifikasi/'.$d->id_pp,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-eye"></i></div>') ?></td>
                           <td width="10px"><?php echo anchor('dosen/daftarproposal/komen/'.$d->id_pp,'<div class="btn btn=sm btn-success">
                           <i class="fa fa-comment"></i></div>')?></td>
                     

                     </tr>
                     <tr>
                     <th>4.8</th>
                           <th>DATA YANG DIGUNAKAN</th>
                           <td><?php echo $d->data_pp ?></td>
                            <td width="10px"><?php echo anchor('dosen/daftarproposal/verifikasi/'.$d->id_pp,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-eye"></i></div>') ?></td>
                           <td width="10px"><?php echo anchor('dosen/daftarproposal/komen/'.$d->id_pp,'<div class="btn btn=sm btn-success">
                           <i class="fa fa-comment"></i></div>')?></td>
                     

                     </tr>
                     <tr>
                     <th>4.9</th>
                           <th>PROSES BISNIS</th>
                           <td><?php echo $d->proses_bisnis_pp ?></td>
                            <td width="10px"><?php echo anchor('dosen/daftarproposal/verifikasi/'.$d->id_pp,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-eye"></i></div>') ?></td>
                           <td width="10px"><?php echo anchor('dosen/daftarproposal/komen/'.$d->id_pp,'<div class="btn btn=sm btn-success">
                           <i class="fa fa-comment"></i></div>')?></td>
                     

                     </tr>
                     <tr>
                     <th>4.10</th>
                           <th>PROSES BISNIS (GAMBAR)</th>
                           <td><img src="<?php echo base_url().'assets/files/'.$d->proses_bisnis2_pp?>"></td>
                            <td width="10px"><?php echo anchor('dosen/daftarproposal/verifikasi/'.$d->id_pp,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-eye"></i></div>') ?></td>
                           <td width="10px"><?php echo anchor('dosen/daftarproposal/komen/'.$d->id_pp,'<div class="btn btn=sm btn-success">
                           <i class="fa fa-comment"></i></div>')?></td>
                     
                        

                     </tr>
                     <tr>
                     <th>4.11</th>
                           <th>TAHAPAN MEWUJUDKAN SOLUSI</th>
                           <td><?php echo $d->tahapan_pp ?></td>
                            <td width="10px"><?php echo anchor('dosen/daftarproposal/verifikasi/'.$d->id_pp,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-eye"></i></div>') ?></td>
                           <td width="10px"><?php echo anchor('dosen/daftarproposal/komen/'.$d->id_pp,'<div class="btn btn=sm btn-success">
                           <i class="fa fa-comment"></i></div>')?></td>
                     

                     </tr>
                     <tr>
                     <th>4.12</th>
                           <th>KELEBIHAN DARI SOLUSI ANDA</th>
                           <td><?php echo $d->kelebihan_pp ?></td>
                            <td width="10px"><?php echo anchor('dosen/daftarproposal/verifikasi/'.$d->id_pp,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-eye"></i></div>') ?></td>
                           <td width="10px"><?php echo anchor('dosen/daftarproposal/komen/'.$d->id_pp,'<div class="btn btn=sm btn-success">
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