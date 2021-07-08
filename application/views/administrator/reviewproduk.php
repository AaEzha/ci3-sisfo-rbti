<div class="container-fluid">

    <div class="alert alert-success" roles="alert">
        <i class="fas fa-user-friends"></i> BAB 3 - REVIEW PRODUK
    </div>

    <?php echo $this->session->flashdata('pesan')?>

    <table class="table table-bordered table-stripped table-hover">
        <tr>
            <th>NO</th>
            <th>NIM</th>
            <th>NAMA SOLUSI</th>
            <th>AKSI</th>
        </tr>

        <?php 
        $no = 1;
        foreach ($admreview as $arv) : ?>
        <tr>
            <td width="20px"><?php echo $no++ ?></td>
            <td><?php echo $arv->nim_solusi?></td>
            <td><?php echo $arv->nama_solusi?></td>
            <td width="20px"><?php echo anchor('administrator/reviewproduk/detail/'.$arv->id_proposal,'<div class="btn btn=sm btn-primary">
            <i class="fa fa-eye"></i></div>') ?></td>
        </tr>
        <?php endforeach; ?>

</div>