<div class="container-fluid">

    <div class="alert alert-success" roles="alert">
        <i class="fas fa-user-friends"></i>Mahasiswa
    </div>

    <?php echo $this->session->flashdata('pesan')?>

    <?php echo anchor('administrator/mahasiswa/input','<button class="btn btn-sm btn-primary mb-3"> 
    <i class="fas fa-plus fa-sm"></i> Tambah Mahasiswa </button> ')?>


    <table class="table table-bordered table-stripped table-hover">
        <tr>
            <th>NO</th>
            <th>NIM</th>
            <th>PASSWORD</th>
            <th>NAMA</th>
            <th>NAMA</th>
            <th colspan="2">AKSI</th>
        </tr>

        <?php 
        $no = 1;
        foreach ($mahasiswa as $mhs) : ?>
        <tr>
            <td width="20px"><?php echo $no++ ?></td>
            <td><?php echo $mhs->nim_mhs?></td>
            <td><?php echo $mhs->pass_mhs?></td>
            <td><?php echo $mhs->nama_mhs?></td>
            <td><?php echo $mhs->kelas_mhs?></td>
            <td width="20px"><?php echo anchor('administrator/mahasiswa/update/'.$mhs->id_mhs,'<div class="btn btn=sm btn-primary">
            <i class="fa fa-edit"></i></div>') ?></td>
             <td width="20px"><?php echo anchor('administrator/mahasiswa/delete/'.$mhs->id_mhs,'<div class="btn btn=sm btn-danger">
             <i class="fa fa-trash"></i></div>')?></td>
        </tr>
        <?php endforeach; ?>

</div>