<div class="container-fluid">

    <div class="alert alert-success" roles="alert">
        <i class="fas fa-user-friends"></i>PAPER PITCHING
    </div>

    <?php echo $this->session->flashdata('pesan')?>

    <table class="table table-bordered table-stripped table-hover">
        <tr>
            <th>NO</th>
            <th>NIM</th>
            <th>AKSI</th>
        </tr>

        <?php 
        $no = 1;
        foreach ($admpaper as $app) : ?>
        <tr>
            <td width="20px"><?php echo $no++ ?></td>
            <td><?php echo $app->nim_pp?></td>
            <td width="20px"><?php echo anchor('administrator/startup/detail/'.$app->id_pp,'<div class="btn btn=sm btn-primary">
            <i class="fa fa-eye"></i></div>') ?></td>
        </tr>
        <?php endforeach; ?>

</div>