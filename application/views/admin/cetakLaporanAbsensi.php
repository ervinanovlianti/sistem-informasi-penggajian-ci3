<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        <?php echo $title ?>
    </title>
    <style type="text/css">
        body{
            font-family: Arial;
            color: black;
        }
    </style>
</head>
<body>
    <center>
        <h1>BY. ERVINA NOVLIANTI</h1>
        <h2>Laporan Kehadiran Pegawai</h2>
    </center>
   
    <?php 
        if((isset($_GET['bulan']) && $_GET['bulan']!='') && (isset($_GET['tahun']) && $_GET['tahun']!=''))
            {
                $bulan = $_GET['bulan'];
                $tahun = $_GET['tahun'];
                $bulantahun = $bulan.$tahun;
            }else {
                $bulan = date('m');
                $tahun = date('Y');
                $bulantahun = $bulan.$tahun;
            }
        
    ?>
        
    <table>
        <tr>
            <td>Bulan</td>
            <td>:</td>
            <td><?php echo $bulan ?></td>
         </tr>
        <tr>
            <td>Tahun</td>
            <td>:</td>
            <td><?php echo $tahun ?></td>
         </tr>
    </table>
    
    <!-- <div class="alert alert-dark"> Bulan: <span class="font-weight-bold"><?php echo $bulan ?>,</span> 
            Tahun: <span class="font-weight-bold"><?php echo $tahun ?></span>
    </div> -->
    
    <table class="table table-border table-striped">
    <tr>
        <th>NO.</th>
        <th>Nama Pegawai</th>
        <th>NIK</th>
        <th>Jabatan</th>
        <th>Hadir</th>
        <th>Sakit</th>
        <th>Alpha</th>
    </tr>
        <?php $no=1; foreach($lap_kehadiran as $l) : ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $l->nama_pegawai ?></td>
            <td><?php echo $l->nik ?></td>
            <td><?php echo $l->nama_jabatan ?></td>
            <td><?php echo $l->hadir ?></td>
            <td><?php echo $l->sakit ?></td>
            <td><?php echo $l->alpha ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <table width="100%">
                <tr>
                    <td></td>
                    <td width="200px">
                        <p>Gowa, <?php echo date("d M Y") ?><br>Finance</p>
                        <br>
                        <br>
                        <p>_____________________</p>
                    </td>
                </tr>
            </table>
</body>
</html>
<script type="text/javascript">
    window.print();
</script>