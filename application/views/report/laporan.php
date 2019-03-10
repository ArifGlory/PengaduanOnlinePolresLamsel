<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
	
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
	<title>Laporan Pengaduan</title>

	
	<style type="text/css">
		body,div,table,thead,tbody,tfoot,tr,th,td,p { font-family:"Calibri"; font-size:x-small }
		a.comment-indicator:hover + comment { background:#ffd; position:absolute; display:block; border:1px solid black; padding:0.5em;  } 
		a.comment-indicator { background:red; display:inline-block; border:1px solid black; width:0.5em; height:0.5em;  } 
		comment { display:none;  } 
	</style>
    <style>
        table{
            border: 1px solid #080808;
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
            border:0px;
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


<body>
<?php
foreach ($pengaduan as $b){
    $namaPengaduan = $b->nama_pengaduan;
    $jenisKejahatan = $b->nama_kejahatan;
    $tempat = $b->tempat_kejadian;
    $tanggal = $b->tanggal;
    $pukul = $b->pukul;
    $terlapor = $b->orang_dilaporkan;
    $deskripsiKejadian = $b->deskripsi;
    $status = $b->status;
    $idPengaduan = $b->id_pengaduan;
    $kodePengaduan = $b->kode_pengaduan;
    $isKorban = $b->isKorban;
    $tanggalLaporan = $b->tanggal_laporan;
    $barangBukti = $b->barang_bukti;
}

if ($status == "M"){
    $sttsMsg = "Menunggu";
}else if ($status == "P"){
    $sttsMsg = "Di Proses";
}else if ($status == "T"){
    $sttsMsg = "Di Tolak";
}else if ($status == "S"){
    $sttsMsg = "Selesai";
}

if ($terlapor == null || $terlapor == ""){
    $terlapor = "Tidak ada";
}

if ($tanggapan != null){
    foreach ($tanggapan as $d){
        $isiTanggapan = $d->isi_tanggapan;
        $tipe = $d->jenis_kejahatan;
        $pasal = $d->pasal;
    }
}else{
    $isiTanggapan = "-";
    $pasal = "-";
    $tipe = "-";
}

foreach ($user as $d){
    $pekerjaanUser = $d->pekerjaan;
    $alamatUser = $d->alamat;
    $namaPelapor = $d->nama_user;
    $agama = $d->agama;
    $suku = $d->suku;
    $negara = $d->warga_negara;
}

?>
<p>KEPOLISIAN NEGARA  REPUBLIK INDONESIA
<br>
    DAERAH LAMPUNG
    <br>
    <strong>RESOR LAMPUNG SELATAN</strong>
    <br>
    JL. KOLONEL MAKMUN RASYID NO.19
    <br>
    <strong></strong>
</p>
<div align="center">
    <img src="./foto/logopolri.png" height="50" width="50" alt="logo">
</div>
<p align="center" style="text-decoration: underline">
   <strong>LAPORAN POLISI</strong>
    <br>
</p>
<p align="center"> KODE PENGADUAN : <?php echo $kodePengaduan;?></p>

<div style="border-bottom: 1px solid #000000" colspan=13 height="20" align="center" valign=bottom>
    <font color="#000000"><br></font>
</div>
<p align="left"><strong> YANG MELAPORKAN : <?php echo $namaPelapor;?></strong></p>
<p>Nama <?php echo $namaPelapor;?> , Tanggal <?php echo date("d-F-Y",strtotime($tanggal)); ?> , Pekerjaan | <?php echo $pekerjaanUser;?>, Agama <?php echo $agama;?> , Suku <?php echo $suku;?> , Kewarganegaraan <?php echo $negara;?> , <?php echo $alamatUser;?></p>

<table cellpadding="5">
    <tr>
       <td width="50%"><strong>PERISTIWA YANG DILAPORKAN</strong> </td>
        <td></td>
    </tr>
    <tr>
        <td >
            1. Waktu Kejadian
        </td>
        <td>
            Tanggal <?php echo date("d-F-Y",strtotime($tanggal)); ?> , Pukul <?php echo $pukul;?>
        </td>
    </tr>
    <tr>
        <td >
            2. Tempat Kejadian
        </td>
        <td>
            <?php echo $tempat;?>
        </td>
    </tr>
    <tr>
        <td >
            3. Apa yang terjadi
        </td>
        <td>
            Tindak <?php echo $tipe;?> <?php echo $jenisKejahatan;?>
        </td>
    </tr>
    <tr>
        <td >
            4. Siapa
        </td>
        <td>
        </td>
    </tr>
    <tr>
        <td >
            &nbsp; a. Terlapor
        </td>
        <td>
            <?php echo $terlapor;?>
        </td>
    </tr>
    <tr>
        <td >
            &nbsp; b. Korban
        </td>
        <td>
           <?php if ($isKorban == "Y") {
               echo "Pelapor";
           }else {
               echo "Bukan Pelapor";
           } ?>
        </td>
    </tr>
    <tr>
        <td >
           5. Bagaimana terjadi
        </td>
        <td>
            <?php echo $deskripsiKejadian;?>
        </td>
    </tr>
    <tr>
        <td >
           6. Dilporkan pada tanggal
        </td>
        <td>
            <?php echo date("d-F-Y",strtotime($tanggalLaporan)); ?>
        </td>
    </tr>
</table>
<table cellpadding="5">
    <tr>
        <td width="50%"><strong>TINDAK <?php echo $tipe;?> APA (Pasal)</strong> </td>
        <td><strong>SAKSI SAKSI</strong> </td>
    </tr>
    <tr>
        <td >
          <?php echo $jenisKejahatan;?> sesuai pasal <?php echo $pasal;?>
        </td>
        <td>
           <?php if ($saksi !=null){
               $i = 1;
               foreach ($saksi as $b){
                   ?>
                  <?php echo $i;?>. Nama <?php echo $b->nama_saksi;?> , Umur <?php echo $b->umur_saksi;?> Th , <?php echo $b->pekerjaan_saksi;?> , Alamat <?php echo $b->alamat_saksi;?><br>

               <?php $i++; } ?>

            <?php }else {
               echo "Tidak ada saksi";
           } ?>
        </td>
    </tr>
</table>
<table cellpadding="5">
    <tr>
        <td width="50%" ><strong>BARANG BUKTI</strong> </td>
        <td><strong>URAIAN SINGKAT KEJADIAN</strong> </td>
    </tr>
    <tr>
        <td >
            <?php echo $barangBukti;?>
        </td>
        <td style="alignment: center">
          Pada tanggal <?php echo date("d-F-Y",strtotime($tanggal)); ?> pukul <?php echo $pukul;?> ketika <?php echo $deskripsiKejadian;?> .
            <br> Kemudian pada <?php echo date("d-F-Y",strtotime($tanggalLaporan)); ?> Pelapor melaporkan ke Polres Lampung Selatan untuk lakukan proses
            sebagaimana hukum berlaku
        </td>
    </tr>
</table>

<p>Pelapor / Pengadu membenarkan keterangan tersebut diatas , kemudian membubuhkan tanda tangan di bawah ini
    pada tanggal   <?php echo date("d-F-Y",strtotime($tanggalLaporan)); ?> di Kalianda
</p>
<br>
<table border="0px" cellpadding="18">
    <tr>
       <td width="50%"></td>
        <td width="50%" align="center" style="font-size: 11pt">Pelapor</td>
    </tr>
    <tr>
        <td width="50%"></td>
        <td width="50%" align="center" style="font-size: 11pt"><?php echo $namaPelapor;?></td>
    </tr>
</table>

<div style="border-bottom: 1px solid #000000" colspan=13 height="20" align="center" valign=bottom>
    <font color="#000000"><br></font>
</div>
<p style="text-decoration: underline">
   <strong>TINDAKAN POLISI</strong>
</p>
<p>
    <?php echo $isiTanggapan;?>
</p>


</body>

</html>
