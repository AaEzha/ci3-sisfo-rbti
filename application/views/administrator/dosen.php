<div class="container-fluid">

    <div class="alert alert-success" roles="alert">
        <i class="fas fa-user-friends"></i>Dosen
    </div>

    <?php echo $this->session->flashdata('pesan')?>

    <?php echo anchor('administrator/dosen/input_data/','<button class="btn btn-sm btn-primary mb-3"> 
    <i class="fas fa-plus fa-sm"></i> Tambah Dosen </button> ')?>


    <table class="table table-bordered table-stripped table-hover">
        <tr>
            <th>NO</th>
            <th>USERNAME</th>
            <th>NAMA</th>
            <th colspan="2">AKSI</th>
        </tr>

        <?php 
        $no = 1;
        foreach ($dosen as $dsn) : ?>
        <tr>
            <td width="20px"><?php echo $no++ ?></td>
            <td><?php echo $dsn->uname_dosen?></td>
            <td><?php echo $dsn->nama_dosen?></td>
            <td width="20px"><?php echo anchor('administrator/dosen/update/'.$dsn->id_dosen,'<div class="btn btn=sm btn-primary">
            <i class="fa fa-edit"></i></div>') ?></td>
             <td width="20px"><?php echo anchor('administrator/dosen/delete/'.$dsn->id_dosen,'<div class="btn btn=sm btn-danger">
             <i class="fa fa-trash"></i></div>')?></td>
        </tr>
        <?php endforeach; ?>

</div>