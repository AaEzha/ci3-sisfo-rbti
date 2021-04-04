<div class="container-fluid">

    <div class="alert alert-success" roles="alert">
        <i class="fas fa-user-friends"></i>Admin
    </div>

    <?php echo $this->session->flashdata('pesan')?>

    <?php echo anchor('administrator/admin/input','<button class="btn btn-sm btn-primary mb-3"> 
    <i class="fas fa-plus fa-sm"></i> Tambah Admin </button> ')?>


    <table class="table table-bordered table-stripped table-hover">
        <tr>
            <th>NO</th>
            <th>USERNAME</th>
            <th>PASSWORD</th>
            <th>NAMA</th>
            <th colspan="2">AKSI</th>
        </tr>

        <?php 
        $no = 1;
        foreach ($admin as $adm) : ?>
        <tr>
            <td width="20px"><?php echo $no++ ?></td>
            <td><?php echo $adm->uname_admin?></td>
            <td><?php echo $adm->pass_admin?></td>
            <td><?php echo $adm->nama_admin?></td>
            <td width="20px"><?php echo anchor('administrator/admin/update/'.$adm->id_admin,'<div class="btn btn=sm btn-primary">
            <i class="fa fa-edit"></i></div>') ?></td>
             <td width="20px"><?php echo anchor('administrator/admin/delete/'.$adm->id_admin,'<div class="btn btn=sm btn-danger">
             <i class="fa fa-trash"></i></div>')?></td>
        </tr>
        <?php endforeach; ?>

</div>