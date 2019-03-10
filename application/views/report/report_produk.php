<!DOCTYPE html>
<html>
<head>

    <title>Laporan Produk - Irtanaz Furniture</title>
    <link href="<?php echo base_url();?>/assets4/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>/assets4/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>/assets4/css/style.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>/assets4/css/main-style.css" rel="stylesheet" />

    <style>
        table{
            border-collapse: collapse;
            width: 100%;
            'margin: 0 auto;
        }
        table th{
            border:1px solid #000;
            padding: 3px;
            font-weight: bold;
        }
        table td{
            border:1px solid #000;
            padding: 3px;
            vertical-align: top;
        }

        #judul{
            font-size: 20px;
            font-weight: bold;
        }

        #tebal2{
            font-weight: bold;
        }

        #tebal{
            border:1px solid #000;
            padding: 3px;
            font-weight: normal;
            text-align: center;
        }

        #garis{
            width: 40%;
            border: 1px solid #000000;
        }

    </style>
    <style type="text/css">
        .under { text-decoration: underline;
            color: #000000;
        }
        .over  { text-decoration: overline; }
        .line  { text-decoration: line-through; }
        .blink { text-decoration: blink; }
        .all   { text-decoration: underline overline line-through; }
        a      { text-decoration: none; }
    </style>
</head>

<?php

?>
<body>
<img src="./assets1/img/logo_irtanaz_furniture.png">
<p style="text-align: left">Irtanaz Furniture
<br>
Jati Ukir Modern dan Minimalis<br>
    Jl. Untung suropati No.25, Labuhan Ratu, Kedaton, Bandarlampung
</p>
<br>
<p style="text-align: center" ><strong><u>Laporan Data Produk </u> </strong></p>

<br>
<br>
<!-- tabel detail disposisi -->
<h4>Tanggal Laporan = <?php echo date("d-F-Y",strtotime($tanggal)); ?></h4>
<br>


<table>
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th>Stok</th>
        </tr>
    </thead>
<?php $no = 1;
    $angka = 0;?>
    <tbody>
    <?php foreach ($produk as $b){ ?>
        <tr class="even gradeA">
            <td><?php echo $no++; ?></td>
            <td><?php cetak($b->nama_produk); ?></td>
            <td><?php cetak($b->kategori); ?></td>
            <td>Rp. <?php cetak(number_format($b->harga,0,',','.')); ?></td>
            <td><?php cetak($b->stok); ?></td>
        </tr>

    <?php
    $angka++;
    } ?>
    </tbody>
</table>

<br><br>

<br>

<br>
<p style="text-align: right">
    Mengetahui
    <br>
    <br><br><br>
    Kepala Produk
</p>

</body>
</html>