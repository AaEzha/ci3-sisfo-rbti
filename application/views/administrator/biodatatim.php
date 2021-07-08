<div class="container-fluid">

    <div class="alert alert-success" roles="alert">
        <i class="fas fa-user-friends"></i>BAB 2 - BIODATA TIM
    </div>

    <?php echo $this->session->flashdata('pesan')?>

    <table class="table table-bordered table-stripped table-hover">
        <tr>
            <th>NO</th>
            <th>NIM</th>
            <th>NAMA HUSTTLER</th>
            <th>NAMA HIPSTER</th>
            <th>NAMA HACKER</th>
            <th>AKSI</th>
        </tr>

        <?php 
        $no = 1;
        foreach ($admbiodata as $abi) : ?>
        <tr>
            <td width="20px"><?php echo $no++ ?></td>
            <td><?php echo $abi->nim_biodata?></td>
            <td><?php echo $abi->nama_hustler?></td>
            <td><?php echo $abi->nama_hipster?></td>
            <td><?php echo $abi->nama_hacker?></td>
            <td width="20px"><?php echo anchor('administrator/biodatatim/detail/'.$abi->id_proposal,'<div class="btn btn=sm btn-primary">
            <i class="fa fa-eye"></i></div>') ?></td>
        </tr>
        <?php endforeach; ?>

</div>