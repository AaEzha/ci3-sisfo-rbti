<div class="container-fluid">

    <div class="alert alert-success" roles="alert">
        <i class="fas fa-user-friends"></i>BAB 1 - START-UP
    </div>

    <?php echo $this->session->flashdata('pesan')?>

    <table class="table table-bordered table-stripped table-hover">
        <tr>
            <th>NO</th>
            <th>NIM</th>
            <th>NAMA STARTUP</th>
            <th>AKSI</th>
        </tr>

        <?php 
        $no = 1;
        foreach ($admstartup as $ast) : ?>
        <tr>
            <td width="20px"><?php echo $no++ ?></td>
            <td><?php echo $ast->nim_start_up?></td>
            <td><?php echo $ast->nama_start_up?></td>
            <td width="20px"><?php echo anchor('administrator/startup/detail/'.$ast->id_proposal,'<div class="btn btn=sm btn-primary">
            <i class="fa fa-eye"></i></div>') ?></td>
        </tr>
        <?php endforeach; ?>

</div>