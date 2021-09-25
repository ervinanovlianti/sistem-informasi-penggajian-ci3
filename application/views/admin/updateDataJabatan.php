<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
    </div>

    <div class="card" style="width: 60%; margin-bottom: 100px" >
        <div class="card-body">
            <?php foreach ($jabatan as $j): ?>
            <form action="<?php echo base_url('admin/dataJabatan/updateDataAksi') ?>" method="post">
                <div class="form-group">
                    <label>Nama Jabatan</label>
                    <input type="hidden" name="id_jabatan" class="form-control" value="<?php echo $j->id_jabatan ?>">
                    <input type="text" name="nama_jabatan" class="form-control" value="<?php echo $j->nama_jabatan ?>">
                    <?php echo form_error('nama_jabatan','<div class="text-small text-danger"></div>') ?>

                    <label>Gaji Pokok</label>
                    <input type="text" name="gaji_pokok" class="form-control" value="<?php echo $j->gaji_pokok ?>">
                    <?php echo form_error('gaji_pokok','<div class="text-small text-danger"></div>') ?>

                    <label>Tunjangan Transport</label>
                    <input type="text" name="tj_transport" class="form-control" value="<?php echo $j->tj_transport ?>">
                    <?php echo form_error('tj_transport','<div class="text-small text-danger"></div>') ?>

                    <label>Uang Makan</label>
                    <input type="text" name="uang_makan" class="form-control" value="<?php echo $j->uang_makan ?>">
                    <?php echo form_error('uang_makan','<div class="text-small text-danger"></div>') ?>
                    
                </div>
                <button type="submit" class="btn btn-success" style="margin-bottom: 70px;">Update</button>
            </form>
            <?php endforeach; ?>
        </div>
    </div>

</div>
