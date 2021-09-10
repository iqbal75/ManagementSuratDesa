<!DOCTYPE html>
<!-- Created by pdf2htmlEX (https://github.com/coolwanglu/pdf2htmlex) -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8"/>

<title>Desa Gandasili</title>

<link href="<?php echo base_url().'assets/gambar/LogoDesa1.png' ?>" rel="icon">

<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<link rel="stylesheet" href="<?php echo base_url('assets/Print/Keterangan_Kehilangan_KIP/base.min.css') ?>"/>
<link rel="stylesheet" href="<?php echo base_url('assets/Print/Keterangan_Kehilangan_KIP/fancy.min.css') ?>"/>
<link rel="stylesheet" href="<?php echo base_url('assets/Print/Keterangan_Kehilangan_KIP/main.css') ?>"/>
<script src="<?php echo base_url('assets/Print/Keterangan_Kehilangan_KIP/compatibility.min.js') ?>"></script>
<script src="<?php echo base_url('assets/Print/Keterangan_Kehilangan_KIP/theViewer.min.js') ?>"></script>
<script>
try{
theViewer.defaultViewer = new theViewer.Viewer({});
}catch(e){}
</script>
<title></title>
</head>
<body>
<div id="sidebar">
<div id="outline">
</div>
</div>
<div id="page-container">
<?php foreach ($skkip as $data) { ?>
<div id="pf1" class="pf w0 h0" data-page-no="1"><div class="pc pc1 w0 h0"><img class="bi x0 y0 w1 h1" alt="" src="<?php echo base_url('assets/Print/Keterangan_Kehilangan_KIP/bg1.png') ?>"/><div class="t m0 x1 h2 y1 ff1 fs0 fc0 sc0 ls0 ws0">PEMERINTAH KABUPATEN SUBANG</div><div class="t m0 x2 h2 y2 ff1 fs0 fc0 sc0 ls0 ws0">KECAMATAN TANJUNGSIANG</div><div class="t m0 x3 h3 y3 ff2 fs1 fc0 sc0 ls0 ws0">DESA GANDASOLI</div><div class="t m0 x4 h4 y4 ff1 fs2 fc0 sc0 ls0 ws0">  <span class="ff3 fs3">Alamat : Jln Raya Gandasoli No 06 Desa Gandasoli Kec. Tanjungsiang – Subang 41284 </span></div><div class="t m0 x5 h5 y5 ff2 fs4 fc0 sc0 ls0 ws0">SURAT KETERANGAN </div><div class="t m0 x6 h4 y6 ff1 fs2 fc0 sc0 ls0 ws0">Nomor  : <?= $data->No_SKKip ?></div><div class="t m0 x7 h6 y7 ff4 fs5 fc0 sc0 ls0 ws0">Yang <span class="_ _0"> </span>bertanda <span class="_ _0"> </span>tangan <span class="_ _0"> </span>di <span class="_ _0"> </span>bawah <span class="_ _0"> </span>ini, <span class="_ _0"> </span>Kepala <span class="_ _0"> </span>Desa <span class="_ _0"> </span>Gandasoli <span class="_ _0"> </span>Kecamatan </div><div class="t m0 x8 h6 y8 ff4 fs5 fc0 sc0 ls0 ws0">Tanjungsiang Kabupaten Subang. Menerangkan bahwa nama di bawah ini :</div><div class="t m0 x8 h6 y9 ff4 fs5 fc0 sc0 ls0 ws0">Nama Lengkap<span class="_ _1"> </span>: <?= $data->Nama ?></div><div class="t m0 x8 h6 ya ff4 fs5 fc0 sc0 ls0 ws0">Tempat, Tgl Lahir<span class="_ _2"> </span>: <?= $data->Tempat_Lahir ?>, <?= date('d F Y', strtotime($data->Tanggal_Lahir)); ?></div><div class="t m0 x8 h6 yb ff4 fs5 fc0 sc0 ls0 ws0">Jenis Kelamin<span class="_ _3"> </span>: <?= $data->Jenis_Kelamin ?></div><div class="t m0 x8 h6 yc ff4 fs5 fc0 sc0 ls0 ws0">Pekerjaan <span class="_ _4"> </span>: <?= $data->Pekerjaan ?></div><div class="t m0 x8 h6 yd ff4 fs5 fc0 sc0 ls0 ws0">No. KIP<span class="_ _5"> </span>: <?= $data->No_Kip ?> </div><div class="t m0 x8 h6 ye ff4 fs5 fc0 sc0 ls0 ws0">Alamat <span class="_ _6"> </span>: <?= $data->Alamat ?> </div><div class="t m0 x9 h6 yf ff4 fs5 fc0 sc0 ls0 ws0">  Desa Gandasoli Kec. Tanjungsiang Kab. Subang</div><div class="t m0 x7 h6 y10 ff4 fs5 fc0 sc0 ls0 ws0">Adalah <span class="_ _7"></span>benar <span class="_ _7"></span>warga <span class="_ _7"></span>Desa <span class="_ _7"></span>Gandasoli dan <span class="_ _8"></span>yang <span class="_ _7"></span>bersangkutan adalah <span class="_ _8"></span>penerima </div><div class="t m0 x8 h6 y11 ff4 fs5 fc0 sc0 ls0 ws0">KIP namun kartunya Hilang. </div><div class="t m0 x7 h6 y12 ff4 fs5 fc0 sc0 ls0 ws0">Demikian surat keterangan ini untuk digunakan sebagai mana mestinya.</div><div class="t m0 xa h6 y13 ff4 fs5 fc0 sc0 ls0 ws0">Gandasoli,<?= date('d F Y', strtotime($data->Tgl_Surat)); ?></div><div class="t m0 xb h6 y14 ff4 fs5 fc0 sc0 ls0 ws0">Kepala Desa Gandasoli</div><div class="t m0 xc h7 y15 ff5 fs5 fc0 sc0 ls0 ws0"><u><?= $data->Nama_KepalaDesa ?></u></div></div><div class="pi" data-data='{"ctm":[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}'></div></div>
<?php } ?>
</div>
<div class="loading-indicator">

</div>
</body>
</html>
