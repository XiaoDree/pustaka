<?php 
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=$title.xls");
header("Pragma: no-cache");
header("Expires: 0");
?>

<h3><center>Laporan Data Anggota</center></h3>
<br/>
<table class="table-data">
<thead>
            <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Alamat</th>
            <th>Member Sejak</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $no = 1;
            foreach($anggota as $a){
                ?>
                <tr>
                <td scope="row"><?= $no++; ?></td>
                        <td><?= $a['nama']; ?></td>
                        <td><?= $a['email']; ?></td>
                        <td><?= $a['alamat']; ?></td>
                        <td><?= date('d F Y', $a['tanggal_input']); ?></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
</table>