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
                     <h2>Daftar E-Proposal</h2>
                                                                                                                                                                                                                            </p>
                  </div>
               </div>
            </div>
            <div class="row d_flex" >
               <div class=" col-md-12" >
                  <div class="latest text_align_center" >
                  <table class="table table-bordered table-stripped table-hover" >
                  <?php $no=1; foreach($detailpro as $d) :  ?>
<h2>A. START UP</h2>
<h3>Nama Start Up</h3><p class="text_content"><?php echo strtoupper ($d->nama_start_up); ?></p>
<h3>Visi Start Up</h3><p class="text_content"><?php echo $d->visi_start_up ?></p>
<h3>Misi Start Up</h3><p class="text_content"><?php echo $d->misi_start_up ?></p>
<h3>Struktur Start Up</h3><img src="<?php echo base_url().'assets/files/'.$d->struktur_start_up?>">
<h3>Logo Start Up</h3><img src="<?php echo base_url().'assets/files/'.$d->logo_start_up?>">
<h3>Tagline Start Up</h3><p class="text_content"><?php echo strtoupper ($d->tagline_start_up) ?></p>
<br>
<br>
<br>

<h2>B. BIODATA TIM</h2>
<h2>1. Hustler</h2>
<h3>Nama Hustler</h3><p class="text_content"><?php echo strtoupper ($d->nama_hustler); ?></p>
<h3>Alamat Hustler</h3><p class="text_content"><?php echo $d->alamat_hustler ?></p>
<h3>Telepon Hustler</h3><p class="text_content"><?php echo $d->telp_hustler ?></p>
<h3>E-Mail Hustler</h3><p class="text_content"><?php echo $d->email_hustler ?></p>
<h3>Tugas Hustler</h3><p class="text_content"><?php echo $d->tugas_hustler ?></p>
<br>
<h2>2. Hipster</h2>
<h3>Nama Hipster</h3><p class="text_content"><?php echo strtoupper ($d->nama_hipster); ?></p>
<h3>Alamat Hipster</h3><p class="text_content"><?php echo $d->alamat_hipster ?></p>
<h3>Telepon Hipster</h3><p class="text_content"><?php echo $d->telp_hipster ?></p>
<h3>E-Mail Hipster</h3><p class="text_content"><?php echo $d->email_hipster ?></p>
<h3>Tugas Hipster</h3><p class="text_content"><?php echo $d->tugas_hipster ?></p>
<br>
<h2>3. Hacker</h2>
<h3>Nama Hacker</h3><p class="text_content"><?php echo strtoupper ($d->nama_hacker); ?></p>
<h3>Alamat Hacker</h3><p class="text_content"><?php echo $d->alamat_hacker ?></p>
<h3>Telepon Hacker</h3><p class="text_content"><?php echo $d->telp_hacker ?></p>
<h3>E-Mail Hacker</h3><p class="text_content"><?php echo $d->email_hacker ?></p>
<h3>Tugas Hacker</h3><p class="text_content"><?php echo $d->tugas_hacker ?></p>
<br>
<br>
<br>
<br>

<h2>C. REVIEW PRODUK</h2>
<h3>Nama Aplikasi</h3><p class="text_content"><?php echo strtoupper ($d->nama_solusi); ?>>/p>
<h3>Deskripsi Aplikasi</h3><p class="text_content"><?php echo $d->deskripsi_solusi ?></p>
<h3>Logo Aplikasi</h3><img src="<?php echo base_url().'assets/files/'.$d->logo_solusi?>">
<h3>Preview UI/UX-1</h3><img src="<?php echo base_url().'assets/files/'.$d->prev_ui1_solusi?>">
<h3>Preview UI/UX-2</h3><img src="<?php echo base_url().'assets/files/'.$d->prev_ui2_solusi?>">
<h3>Preview UI/UX-3</h3><img src="<?php echo base_url().'assets/files/'.$d->prev_ui3_solusi?>">
<h3>Preview UI/UX-4</h3><img src="<?php echo base_url().'assets/files/'.$d->prev_ui4_solusi?>">
<h3>Tahun Pembuatan</h3><p class="text_content"><?php echo $d->tahun_buat_solusi ?></p>
<h3>Link Video Aplikasi</h3><p class="text_content"><?php echo $d->link_vid_solusi ?></p>
<h3>Link Product Aplikasi</h3><p class="text_content"><?php echo $d->link_prod_solusi ?></p>
<h3>Teknologi yang digunakan</h3><p class="text_content"><?php echo $d->teknologi_solusi ?></p>
<br>
<br>
<br>

<h2>D. PAPER PITCHING</h2>
<h3>Ceritakan tentang Latar Belakang anda dan co-founder anda (jika ada)</h3><p class="text_content"><?php echo $d->latar_belakang_pp ?></p>
<h3>Permasalahan apa yang ingin anda atasi melalui usaha anda?</h3><p class="text_content"><?php echo $d->permasalahan_pp ?></p>
<h3>Solusi apa yang anda tawarkan untuk mengatasi masalah tersebut?</h3><p class="text_content"><?php echo $d->solusi_pp ?></p>
<h3>Bagaimana progres/traction usaha anda sejauh ini?</h3><p class="text_content"><?php echo $d->progres_pp ?></p>
<h3>Siapa saja competitor anda saat ini? Sebutkan</h3><p class="text_content"><?php echo $d->kompetitor_pp ?></p>
<h3>Apakah ada usaha/serupa yang sukses? Baik di nasional atau internasional? Sebutkan?</h3><p class="text_content"><?php echo $d->kompetitor2_pp ?></p>
<h3>Siapa target oengguna solusi anda?</h3><p class="text_content"><?php echo $d->target_pp ?></p>
<h3>Data apa yang anda gunakan sehingga anda bisa menuliskan target pengguna dari solusi anda?</h3><p class="text_content"><?php echo $d->data_pp ?></p>
<h3>Bagaimana Proses Bisnis dari aplikasi/solusi yang dibuat? Boleh dengan gambar</h3><p class="text_content"><?php echo $d->proses_bisnis_pp ?></p>
                        <img src="<?php echo base_url().'assets/files/'.$d->proses_bisnis2_pp?>">
<h3>Bagaimana proses/tahapan mewujudkan solusi yang akan anda buat?</h3><p class="text_content"><?php echo $d->tahapan_pp ?></p>
<h3>Kelebihan dari solusi/aplikasi yang ditawarkan daripada competitor (jika ada)</h3><p class="text_content"><?php echo $d->kelebihan_pp ?></p>
<br>
<br>
<br>

<h2>E. BUSINESS PLAN</h2>
<h3>Customer</h3><p class="text_content"><?php echo $d->cust_plan ?></p>
<h3>Value Propositions</h3><p class="text_content"><?php echo $d->value_plan ?></p>
<h3>Channels</h3><p class="text_content"><?php echo $d->channels_plan ?></p>
<h3>Relationships</h3><p class="text_content"><?php echo $d->relation_plan ?></p>
<h3>Key Activities</h3><p class="text_content"><?php echo $d->key_act_plan ?></p>
<h3>Key Resource</h3><p class="text_content"><?php echo $d->key_res_plan ?></p>
<h3>Key Partners</h3><p class="text_content"><?php echo $d->key_partner_plan ?></p>
<h3>Cost Structure</h3><p class="text_content"><?php echo $d->cost_plan ?></p>
<h3>Revenue Steams</h3><p class="text_content"><?php echo $d->revenue_plan ?></p>

<?php endforeach; ?>

<?php echo anchor('dosen/dashboard','<button class="btn btn-sm btn-primary mb-3"></i> Back </button> ')?>
                     

                    

                    
                     
                     </table>
                     <br>
                     <br>
                     
                  </div>
                 
                     
               </div>
               
            </div>
         </div>
      </div>
      <!-- end cases -->