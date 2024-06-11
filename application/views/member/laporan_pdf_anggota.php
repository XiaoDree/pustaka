<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <style type="text/css">
    .table-data{
        width: 100%;
        border-collapse: collapse;
    }

    .table-data tr th,
    .table-data tr td{
        border: 1px solid black;
        font-size: 11pt;
        font-family: Verdana;
        padding: 10px;
    }

    .table-data th {
        background-color: gray;
    }

    h3 {
        font-family: Verdana;
    }
    </style>
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
</body>
</html>