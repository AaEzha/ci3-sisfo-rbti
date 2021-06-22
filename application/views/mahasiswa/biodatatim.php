
  
     <!-- cases -->
     <div class="cases">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage text_align_center ">
                     <h2>Biodata Tim</h2>
                     <p>Dalam pengisian, anda bebas mulai mengisi dari bab berapapun, dimanapun, dan kapanpun
                                                                                                                                                                                                                              </p>
                  </div>
               </div>
            </div>
            <div class="row d_flex" >
               <div class=" col-md-12" >
                  <div class="latest text_align_center" >
                  <?php echo anchor('mahasiswa/biodatatim/input','<button class="btn btn-sm btn-primary mb-3"></i> Tambah Proposal </button> ')?>

                  <table class="table table-bordered table-stripped table-hover" >
                     <tr>
                           <th>NO</th>
                           <th>NAMA HUSTLER</th>
                           <th>ALAMAT HUSTLER</th>
                           <th>TELP HUSTLER</th>
                           <th>EMAIL HUSTLER</th>
                           <th>TUGAS HUSTLER</th>
                           <th>NAMA HIPSTER</th>
                           <th>ALAMAT HIPSTER</th>
                           <th>TELP HIPSTER</th>
                           <th>EMAIL HIPSTER</th>
                           <th>TUGAS HIPSTER</th>
                           <th>NAMA HACKER</th>
                           <th>ALAMAT HACKER</th>
                           <th>TELP HACKER</th>
                           <th>EMAIL HACKER</th>
                           <th>TUGAS HACKER</th>
                           <th colspan="2">AKSI</th>
                     </tr>

                     <?php $no=1; foreach($biodatatim as $bt) :  ?>
                     <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo strtoupper ($bt->nama_hustler); ?></td>
                        <td><?php echo $bt->alamat_hustler ?></td>
                        <td><?php echo $bt->telp_hustler ?></td>
                        <td><?php echo $bt->email_hustler ?></td>
                        <td><?php echo $bt->tugas_hustler ?></td>
                        <td><?php echo strtoupper ($bt->nama_hipster); ?></td>
                        <td><?php echo $bt->alamat_hipster ?></td>
                        <td><?php echo $bt->telp_hipster ?></td>
                        <td><?php echo $bt->email_hipster ?></td>
                        <td><?php echo $bt->tugas_hipster ?></td>
                        <td><?php echo strtoupper ($bt->nama_hacker); ?></td>
                        <td><?php echo $bt->alamat_hacker ?></td>
                        <td><?php echo $bt->telp_hacker ?></td>
                        <td><?php echo $bt->email_hacker ?></td>
                        <td><?php echo $bt->tugas_hacker ?></td>
                        <td width="10px"><?php echo anchor('mahasiswa/biodatatim/update/'.$bt->id_biodatatim,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?></td>
                           <td width="10px"><?php echo anchor('mahasiswa/biodatatim/delete/'.$bt->id_biodatatim,'<div class="btn btn=sm btn-danger">
                           <i class="fa fa-trash"></i></div>')?></td>
                     
                     </tr>
                     <?php endforeach; ?>
                     
                     </table>
                     <br>
                     
                  </div>
                  <br>
                     <?php echo anchor('mahasiswa/eproposal','<button class="btn btn-sm btn-primary mb-3"></i> Back </button> ')?>
                     
               </div>
               
            </div>
         </div>
      </div>
      <!-- end cases -->