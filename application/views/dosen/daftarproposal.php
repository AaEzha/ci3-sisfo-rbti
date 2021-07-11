   
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
                     <tr>
                           <th>NO</th>
                           <th>NIM MAHASISWA</th>
                           <th>JUDUL PROPOSAL</th>
                           <th>TEMA PROPOSAL</th>
                           <th>BAB 1</th>
                           <th>BAB 2</th>
                           <th>BAB 3</th>
                           <th>BAB 4</th>
                           <th>BAB 5</th>
                         
                     </tr>

                     <?php $no=1; foreach($daftarpro as $dp) :  ?>
                     <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $dp->nim_mhs ?></td>
                        <td><?php echo $dp->judul_proposal ?></td>
                        <td><?php echo $dp->tema_proposal ?></td>
                        <td width="10px"><?php echo anchor('dosen/daftarproposal/detail1/'.$dp->id_proposal,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-eye"></i></div>') ?></td>
                        <td width="10px"><?php echo anchor('dosen/daftarproposal/detail2/'.$dp->id_proposal,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-eye"></i></div>') ?></td>
                        <td width="10px"><?php echo anchor('dosen/daftarproposal/detail3/'.$dp->id_proposal,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-eye"></i></div>') ?></td>
                        <td width="10px"><?php echo anchor('dosen/daftarproposal/detail4/'.$dp->id_proposal,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-eye"></i></div>') ?></td>
                        <td width="10px"><?php echo anchor('dosen/daftarproposal/detail5/'.$dp->id_proposal,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-eye"></i></div>') ?></td>
                           
                     
                        
                     </tr>
                     <?php endforeach; ?>
                    

                    
                     
                     </table>
                     <br>
                     
                  </div>
                  <br>
                     <?php echo anchor('dosen/dashboard','<button class="btn btn-sm btn-primary mb-3"></i> Back </button> ')?>
                     
               </div>
               
            </div>
         </div>
      </div>
      <!-- end cases -->