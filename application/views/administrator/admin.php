<div class="container-fluid">

    <div class="alert alert-success" roles="alert">
        <i class="fas fa-user-friends"></i>Admin
    </div>

    <?php echo $this->session->flashdata('pesan')?>

    <?php echo anchor('administrator/admin/input','<button class="btn btn-sm btn-primary mb-3"> 
    <i class="fas fa-plus fa-sm"></i> Tambah User </button> ')?>


    <table class="table table-bordered table-stripped table-hover">
        <tr>
            <th>NO</th>
            <th>USERNAME</th>
            <th>PASSWORD</th>
            <th>NAMA</th>
            <th>HAK ASKES</th>
            <th colspan="2">AKSI</th>
        </tr>

        <?php 
        $no = 1;
        foreach ($admin as $adm) : ?>
        <tr>
            <td width="20px"><?php echo $no++ ?></td>
            <td><?php echo $adm->uname_user?></td>
            <td><?php echo $adm->pass_user?></td>
            <td><?php echo $adm->nama_user?></td>
            <?php if($adm->hak_akses=='1'){?> <td>Admin</td>
            <?php }else if ($adm->hak_akses=='2'){?> <td>Dosen</td>
            <?php }else {?><td>Mahasiswa</td>
            <?php } ?>
            <td width="20px"><?php echo anchor('administrator/admin/update/'.$adm->id_user,'<div class="btn btn=sm btn-primary">
            <i class="fa fa-edit"></i></div>') ?></td>
             <td width="20px"><?php echo anchor('administrator/admin/delete/'.$adm->id_user,'<div class="btn btn=sm btn-danger">
             <i class="fa fa-trash"></i></div>')?></td>
        </tr>
        <?php endforeach; ?>

</div>