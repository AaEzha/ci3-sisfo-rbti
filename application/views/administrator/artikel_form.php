<div class="container-fluid">

<div class="alert alert-success" role="alert">
        <i class="fas fa-user-friends"></i>Tambah Artikel</div>

<form method="post" action="<?php echo base_url('administrator/artikel/input_aksi')?>">
    <div class="form-group">
        <label>JUDUL ARTIKEL</label>
        <input type="text" name="judul_artikel" style="text-transform:uppercase" placeholder="Masukkan Judul Artikel" class="form-control">
        <?php echo form_error('judul_artikel','<div class="text-danger small" ml-3>')?>
    </div>

    <div class="form-group">
        <label>ISI ARTIKEL</label>
        <input type="text" name="isi_artikel" placeholder="Masukkan Isi Artikel" class="form-control">
        <?php echo form_error('isi_artikel','<div class="text-danger small" ml-3>')?>
    </div>

    <div class="form-group">
            <label>FOTO ARTIKEL</label>
            </div>      
            <div class="form-group col-md-6">
                <input type="file" name="foto_artikel"  id="myFile" accept="image/*" placeholder="Foto Artikel" class="custom-file-input">
                <label class="custom-file-label" for="customFile">Masukkan Foto Artikel </label>
            </div>
            

    <button type="submit" class='btn btn-primary'>Simpan</button>

</form>

    <script>
    // Add the following code if you want the name of the file appear on select
    $(".custom-file-input").on("change", function() {
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
    </script>

</div>