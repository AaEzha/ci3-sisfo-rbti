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
                  <h2>BAB 2</h2>
                     <h1>Biodata Tim</h1>
                     </div>                                                                                                                                                                                                     </p>
                  </div>
               </div>
            </div>
            <div class="row d_flex" >
               <div class=" col-md-12" >
                  <div class="latest text_align_center" >
                  <table class="table table-bordered table-stripped table-hover" >
                  <?php $no=1; foreach($detailpro2 as $d) :  ?>
                    
                    <tr>

                    <tr>
                    <th>2.1</th>
                           <th>NAMA HUSTLER</th>
                           <td><?php echo strtoupper ($d->nama_hustler); ?></td>
                           <td width="10px"><?php echo anchor('dosen/daftarproposal/verifikasi/'.$d->id_biodatatim,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-eye"></i></div>') ?></td>
                           <td width="10px"><?php echo anchor('dosen/daftarproposal/komen/'.$d->id_biodatatim,'<div class="btn btn=sm btn-success">
                           <i class="fa fa-comment"></i></div>')?></td>
                     
                     
                     </tr>
                     <tr>
                     <th>2.2</th>
                           <th>ALAMAT HUSTLER</th>
                           <td><?php echo $d->alamat_hustler ?></td>
                           <td width="10px"><?php echo anchor('dosen/daftarproposal/verifikasi/'.$d->id_biodatatim,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-eye"></i></div>') ?></td>
                           <td width="10px"><?php echo anchor('dosen/daftarproposal/komen/'.$d->id_biodatatim,'<div class="btn btn=sm btn-success">
                           <i class="fa fa-comment"></i></div>')?></td>
                     
                     

                     </tr>
                     <tr>
                     <th>2.3</th>
                           <th>TELP HUSTLER</th>
                           <td><?php echo $d->telp_hustler ?></td>
                           <td width="10px"><?php echo anchor('dosen/daftarproposal/verifikasi/'.$d->id_biodatatim,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-eye"></i></div>') ?></td>
                           <td width="10px"><?php echo anchor('dosen/daftarproposal/komen/'.$d->id_biodatatim,'<div class="btn btn=sm btn-success">
                           <i class="fa fa-comment"></i></div>')?></td>
                     

                     </tr>
                     <tr>
                     <th>2.4</th>
                           <th>EMAIL HUSTLER</th>
                           <td><?php echo $d->email_hustler ?></td>
                           <td width="10px"><?php echo anchor('dosen/daftarproposal/verifikasi/'.$d->id_biodatatim,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-eye"></i></div>') ?></td>
                           <td width="10px"><?php echo anchor('dosen/daftarproposal/komen/'.$d->id_biodatatim,'<div class="btn btn=sm btn-success">
                           <i class="fa fa-comment"></i></div>')?></td>
                     
                     

                     </tr>
                     <tr>
                     <th>2.5</th>
                           <th>TUGAS HUSTLER</th>
                           <td><?php echo $d->tugas_hustler ?></td>
                           <td width="10px"><?php echo anchor('dosen/daftarproposal/verifikasi/'.$d->id_biodatatim,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-eye"></i></div>') ?></td>
                           <td width="10px"><?php echo anchor('dosen/daftarproposal/komen/'.$d->id_biodatatim,'<div class="btn btn=sm btn-success">
                           <i class="fa fa-comment"></i></div>')?></td>
                     
                     

                     </tr>
                     <tr>
                     <th>2.6</th>
                           <th>NAMA HIPSTER</th>
                           <td><?php echo strtoupper ($d->nama_hipster); ?></td>
                           <td width="10px"><?php echo anchor('dosen/daftarproposal/verifikasi/'.$d->id_biodatatim,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-eye"></i></div>') ?></td>
                           <td width="10px"><?php echo anchor('dosen/daftarproposal/komen/'.$d->id_biodatatim,'<div class="btn btn=sm btn-success">
                           <i class="fa fa-comment"></i></div>')?></td>
                     

                     </tr>
                     <tr>
                     <th>2.7</th>
                           <th> ALAMAT HIPSTER</th>
                           <td><?php echo $d->alamat_hipster ?></td>
                           <td width="10px"><?php echo anchor('dosen/daftarproposal/verifikasi/'.$d->id_biodatatim,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-eye"></i></div>') ?></td>
                           <td width="10px"><?php echo anchor('dosen/daftarproposal/komen/'.$d->id_biodatatim,'<div class="btn btn=sm btn-success">
                           <i class="fa fa-comment"></i></div>')?></td>
                     
                     

                     </tr>
                     <tr>
                     <th>2.8</th>
                           <th>TELP HIPSTER</th>
                           <td><?php echo $d->telp_hipster ?></td>
                           <td width="10px"><?php echo anchor('dosen/daftarproposal/verifikasi/'.$d->id_biodatatim,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-eye"></i></div>') ?></td>
                           <td width="10px"><?php echo anchor('dosen/daftarproposal/komen/'.$d->id_biodatatim,'<div class="btn btn=sm btn-success">
                           <i class="fa fa-comment"></i></div>')?></td>
                     
                     

                     </tr>
                     <tr>
                     <th>2.9</th>
                           <th>EMAIL HIPSTER</th>
                           <td><?php echo $d->email_hipster ?></td>
                           <td width="10px"><?php echo anchor('dosen/daftarproposal/verifikasi/'.$d->id_biodatatim,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-eye"></i></div>') ?></td>
                           <td width="10px"><?php echo anchor('dosen/daftarproposal/komen/'.$d->id_biodatatim,'<div class="btn btn=sm btn-success">
                           <i class="fa fa-comment"></i></div>')?></td>
                     
                     

                     </tr>
                     <tr>
                     <th>2.10</th>
                           <th>TUGAS HIPSTER</th>
                           <td><?php echo $d->tugas_hipster ?></td>
                           <td width="10px"><?php echo anchor('dosen/daftarproposal/verifikasi/'.$d->id_biodatatim,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-eye"></i></div>') ?></td>
                           <td width="10px"><?php echo anchor('dosen/daftarproposal/komen/'.$d->id_biodatatim,'<div class="btn btn=sm btn-success">
                           <i class="fa fa-comment"></i></div>')?></td>
                     
                     

                     </tr>
                     <tr>
                     <th>2.11</th>
                           <th>NAMA HACKER</th>
                           <td><?php echo strtoupper ($d->nama_hacker); ?></td>
                           <td width="10px"><?php echo anchor('dosen/daftarproposal/verifikasi/'.$d->id_biodatatim,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-eye"></i></div>') ?></td>
                           <td width="10px"><?php echo anchor('dosen/daftarproposal/komen/'.$d->id_biodatatim,'<div class="btn btn=sm btn-success">
                           <i class="fa fa-comment"></i></div>')?></td>
                     
                     

                     </tr>
                     <tr>
                     <th>2.12</th>
                           <th>ALAMAT HACKER</th>
                           <td><?php echo $d->alamat_hacker ?></td>
                           <td width="10px"><?php echo anchor('dosen/daftarproposal/verifikasi/'.$d->id_biodatatim,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-eye"></i></div>') ?></td>
                           <td width="10px"><?php echo anchor('dosen/daftarproposal/komen/'.$d->id_biodatatim,'<div class="btn btn=sm btn-success">
                           <i class="fa fa-comment"></i></div>')?></td>
                     
                     

                     </tr>
                     <tr>
                     <th>2.13</th>
                           <th>TELP HACKER</th>
                           <td><?php echo $d->telp_hacker ?></td>
                           <td width="10px"><?php echo anchor('dosen/daftarproposal/verifikasi/'.$d->id_biodatatim,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-eye"></i></div>') ?></td>
                           <td width="10px"><?php echo anchor('dosen/daftarproposal/komen/'.$d->id_biodatatim,'<div class="btn btn=sm btn-success">
                           <i class="fa fa-comment"></i></div>')?></td>
                     
                     

                     </tr>
                     <tr>
                     <th>2.14</th>
                           <th>EMAIL HACKER</th>
                           <td><?php echo $d->email_hacker ?></td>
                           <td width="10px"><?php echo anchor('dosen/daftarproposal/verifikasi/'.$d->id_biodatatim,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-eye"></i></div>') ?></td>
                           <td width="10px"><?php echo anchor('dosen/daftarproposal/komen/'.$d->id_biodatatim,'<div class="btn btn=sm btn-success">
                           <i class="fa fa-comment"></i></div>')?></td>
                     
                     

                     </tr>
                     <tr>
                     <th>2.15</th>
                           <th>TUGAS HACKER</th>
                           <td><?php echo $d->tugas_hacker ?></td>
                           <td width="10px"><?php echo anchor('dosen/daftarproposal/verifikasi/'.$d->id_biodatatim,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-eye"></i></div>') ?></td>
                           <td width="10px"><?php echo anchor('dosen/daftarproposal/komen/'.$d->id_biodatatim,'<div class="btn btn=sm btn-success">
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