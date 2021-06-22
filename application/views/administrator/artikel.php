<div class="container-fluid">

    <div class="alert alert-success" roles="alert">
        <i class="fas fa-user-friends"></i>Artikel
    </div>

    <?php echo $this->session->flashdata('pesan')?>

    <?php echo anchor('administrator/artikel/input','<button class="btn btn-sm btn-primary mb-3"> 
    <i class="fas fa-plus fa-sm"></i> Tambah Artikel </button> ')?>


    <table class="table table-bordered table-stripped table-hover">
        <tr>
            <th>NO</th>
            <th>JUDUL ARTIKEL</th>
            <th>ISI ARTIKEL</th>
            <th>FOTO ARTIKEL</th>
            <th colspan="2">AKSI</th>
        </tr>

        <?php 
        $no = 1;
        foreach ($artikel as $atk) : ?>
        <tr>
            <td width="20px"><?php echo $no++ ?></td>
            <td><?php echo $atk->judul_artikel?></td>
            <td width="50px"><?php echo $atk->isi_artikel?></td>
            <td ><img src="<?php echo base_url().'assets/files/'.$atk->foto_artikel?>" style="width:20%;"></td>
            <td width="20px"><?php echo anchor('administrator/artikel/update/'.$atk->id_artikel,'<div class="btn btn=sm btn-primary">
            <i class="fa fa-edit"></i></div>') ?></td>
             <td width="20px"><?php echo anchor('administrator/artikel/delete/'.$atk->id_artikel,'<div class="btn btn=sm btn-danger">
             <i class="fa fa-trash"></i></div>')?></td>
        </tr>
        <?php endforeach; ?>

</div>