<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
    </div>
    <a class="mb-2 mt-2 btn btn-sm btn-success" href="<?php echo base_url('admin/dataPegawai/tambahData') ?>"><i class="fas fa-plus"></i> Tambah Pegawai</a>
    <?php echo $this->session->flashdata('pesan') ?>
    <table class="table table-striped table-bordered">
        <tr>
            <th class="text-center">No</th>
            <th class="text-center">NIK</th>
            <th class="text-center">Nama Pegawai</th>
            <th class="text-center">Jenis Kelamin</th>
            <th class="text-center">Jabatan</th>
            <th class="text-center">Tanggal Masuk</th>
            <th class="text-center">Status</th>
            <th class="text-center">Photo</th>
            <th class="text-center">Action</th>
        </tr>
        <?php $no=1; foreach($pegawai as $p) : ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $p->nik ?></td>
            <td><?php echo $p->nama_pegawai ?></td>
            <td><?php echo $p->jenis_kelamin ?></td>
            <td><?php echo $p->jabatan ?></td>
            <td><?php echo $p->tanggal_masuk ?></td>
            <td><?php echo $p->status ?></td>
            <td><img src="<?php echo base_url('assets/photo/'.$p->photo)?>" width="75px"></td>
            <td>
                <center>
                    <a class="btn btn-sm btn-primary" 
                    href="<?php echo base_url('admin/dataPegawai/updateData/'.$p->id_pegawai) ?>">
                        <i class="fas fa-edit"></i></a>
                    <a onclick="return confirm('Yakin Ingin Menghapus Data?')" class="btn btn-sm btn-danger" href="<?php echo base_url('admin/dataPegawai/deleteData/'.$p->id_pegawai) ?>">
                        <i class="fas fa-trash"></i></a>
                </center>
            </td>
        </tr>   
        <?php endforeach; ?>
    </table>

</div>