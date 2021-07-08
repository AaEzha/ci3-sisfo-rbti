<div class="container-fluid">

    <div class="alert alert-success" roles="alert">
        <i class="fas fa-user-friends"></i> BAB 4 - PAPER PITCHING
    </div>

    <?php echo $this->session->flashdata('pesan')?>

    <table class="table table-bordered table-stripped table-hover">
        <tr>
            <th>NO</th>
            <th>NIM</th>
            <th>JUDUL PROPOSAL</th>
            <th>AKSI</th>
        </tr>

        <?php 
        $no = 1;
        foreach ($admpaper as $app) : ?>
        <tr>
            <td width="20px"><?php echo $no++ ?></td>
            <td><?php echo $app->nim_pp?></td>
            <td><?php echo $app->judul_proposal?></td>
            <td width="20px"><?php echo anchor('administrator/paperpitching/detail/'.$app->id_proposal,'<div class="btn btn=sm btn-primary">
            <i class="fa fa-eye"></i></div>') ?></td>
        </tr>
        <?php endforeach; ?>

</div>