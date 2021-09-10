<!DOCTYPE html>
<!-- Created by pdf2htmlEX (https://github.com/coolwanglu/pdf2htmlex) -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8"/>

<title>Desa Gandasili</title> 

<link href="<?php echo base_url().'assets/gambar/LogoDesa1.png' ?>" rel="icon">

<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<link rel="stylesheet" href="<?php echo base_url('assets/Print/Ket_Domisili/base.min.css') ?>"/>
<link rel="stylesheet" href="<?php echo base_url('assets/Print/Ket_Domisili/fancy.min.css') ?>"/>
<link rel="stylesheet" href="<?php echo base_url('assets/Print/Ket_Domisili/main.css') ?>"/>
<script src="<?php echo base_url('assets/Print/Ket_Domisili/compatibility.min.js') ?>"></script>
<script src="<?php echo base_url('assets/Print/Ket_Domisili/theViewer.min.js') ?>"></script>
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
<?php foreach ($skdomisili as $data) { ?>
<div id="page-container">
<div id="pf1" class="pf w0 h0" data-page-no="1"><div class="pc pc1 w0 h0"><img class="bi x0 y0 w1 h1" alt="" src="<?php echo base_url('assets/Print/Ket_Domisili/bg1.png') ?>"/><div class="t m0 x1 h2 y1 ff1 fs0 fc0 sc0 ls0 ws0">PEMERINTAH KABUPATEN SUBANG</div><div class="t m0 x2 h2 y2 ff1 fs0 fc0 sc0 ls0 ws0">   KECAMATAN TANJUNGSIANG</div><div class="t m0 x3 h3 y3 ff2 fs1 fc0 sc0 ls0 ws0">   DESA GANDASOLI</div><div class="t m0 x4 h4 y4 ff1 fs2 fc0 sc0 ls0 ws0">  <span class="ff3 fs3">Alamat : Jln Raya Gandasoli No 06 Desa Gandasoli Kecamatan Tanjungsiang – Subang 41284 Tlp 0260 481 418</span></div><div class="t m0 x5 h5 y5 ff2 fs2 fc0 sc0 ls0 ws0">SURAT KETERANGAN DOMISILI</div><div class="t m0 x6 h4 y6 ff1 fs2 fc0 sc0 ls0 ws0">Nomor : <?= $data->No_SKDomisili ?></div><div class="t m0 x7 h4 y7 ff1 fs2 fc0 sc0 ls0 ws0">               Yang bertanda <span class="_ _0"></span>tangan di <span class="_ _0"></span>bawah ini <span class="_ _0"></span>Kepala Desa <span class="_ _0"></span>Gandasoli Keca<span class="_ _0"></span>matan Tanjungsiang </div><div class="t m0 x7 h4 y8 ff1 fs2 fc0 sc0 ls0 ws0">Kabupaten Subang, dengan ini menerangkan bahwa  :</div><div class="t m0 x8 h4 y9 ff1 fs2 fc0 sc0 ls0 ws0">Nama<span class="_ _1"> </span>: <?= $data->Nama ?></div><div class="t m0 x8 h4 ya ff1 fs2 fc0 sc0 ls0 ws0">Tempat/ Tgl Lahir<span class="_ _2"> </span>: <?= $data->Tempat_Lahir ?>, <?= date('d F Y', strtotime($data->Tanggal_Lahir)); ?></div><div class="t m0 x8 h4 yb ff1 fs2 fc0 sc0 ls0 ws0">Pekerjaan <span class="_ _3"> </span>: Pekerjaan</div><div class="t m0 x8 h4 yc ff1 fs2 fc0 sc0 ls0 ws0">Alama<span class="_ _4"> </span>: <?= $data->Alamat ?> Desa Gandasoli </div><div class="t m0 x8 h4 yd ff1 fs2 fc0 sc0 ls0 ws0"> <span class="_ _5"> </span> Kec.  Tanjungsiang Kab. Subang.</div><div class="t m0 x8 h4 ye ff1 fs2 fc0 sc0 ls0 ws0">Orang <span class="_ _6"></span>tersebut <span class="_ _6"></span>benar <span class="_ _6"></span>merupakan <span class="_ _6"></span>warga <span class="_ _6"></span>desa <span class="_ _6"></span>kami<span class="ff2"> <span class="_ _6"></span></span>dan <span class="_ _6"></span>berdomisili <span class="_ _6"></span>sesuai <span class="_ _6"></span>dengan <span class="_ _6"></span>data </div><div class="t m0 x7 h4 yf ff1 fs2 fc0 sc0 ls0 ws0">diatas.</div><div class="t m0 x8 h4 y10 ff1 fs2 fc0 sc0 ls0 ws0">Demikian <span class="_ _7"> </span>keterangan <span class="_ _7"> </span>ini <span class="_ _7"> </span>kami <span class="_ _7"> </span>buat <span class="_ _7"> </span>dengan <span class="_ _7"> </span>sebenarnya, <span class="_ _7"> </span>untuk <span class="_ _7"> </span>dipergunakan </div><div class="t m0 x7 h4 y11 ff1 fs2 fc0 sc0 ls0 ws0">sebagaimana mestinya dan kepada pihak yang berwajib agar mengetahuinya.</div><div class="c x9 y12 w2 h6"><div class="t m0 xa h4 y13 ff1 fs2 fc0 sc0 ls0 ws0">          Gandasoli, <?= date('d F Y', strtotime($data->Tgl_Surat)); ?> </div><div class="t m0 xb h4 y14 ff1 fs2 fc0 sc0 ls0 ws0">Kepala Desa Gandasoli</div><div class="t m0 xc h5 y15 ff2 fs2 fc0 sc0 ls0 ws0"><u><?= $data->Nama_KepalaDesa ?></u></div></div></div><div class="pi" data-data='{"ctm":[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}'></div></div>
</div>
<?php } ?>
<div class="loading-indicator">

</div>
</body>
</html>
