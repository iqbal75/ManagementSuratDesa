<!DOCTYPE html>
<!-- Created by pdf2htmlEX (https://github.com/coolwanglu/pdf2htmlex) -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8"/>
<title>Desa Gandasili</title>

<link href="<?php echo base_url().'assets/gambar/LogoDesa1.png' ?>" rel="icon">

<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<link rel="stylesheet" href="<?php echo base_url('assets/Print/KTPSementara/base.min.css') ?>"/>
<link rel="stylesheet" href="<?php echo base_url('assets/Print/KTPSementara/fancy.min.css') ?>"/>
<link rel="stylesheet" href="<?php echo base_url('assets/Print/KTPSementara/main.css') ?>"/>
<script src="<?php echo base_url('assets/Print/KTPSementara/compatibility.min.js') ?>"></script>
<script src="<?php echo base_url('assets/Print/KTPSementara/theViewer.min.js') ?>"></script>
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
<?php foreach ($ktpsementara as $data) { ?>
<div id="pf1" class="pf w0 h0" data-page-no="1"><div class="pc pc1 w0 h0"><img class="bi x0 y0 w1 h1" alt="" src="<?php echo base_url('assets/Print/KTPSementara/bg1.png') ?>"/><div class="c x1 y1 w2 h2"><div class="t m0 x2 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">PEMERINTAH KABUPATEN SUBANG</div><div class="t m0 x3 h3 y3 ff1 fs0 fc0 sc0 ls0 ws0">KECAMATAN TANJUNGSIANG</div><div class="t m0 x4 h4 y4 ff2 fs1 fc0 sc0 ls0 ws0">DESA GANDASOLI</div><div class="t m0 x5 h5 y5 ff3 fs2 fc0 sc0 ls0 ws0">           Alamat : Jln Raya Gandasoli No 06 Kecamatan Tanjungsiang  Kabupaten Subang 41284</div><div class="t m0 x6 h6 y6 ff2 fs0 fc0 sc0 ls0 ws0">KARTU TANDA PENDUDUK SEMENTARA</div><div class="t m0 x7 h3 y7 ff1 fs0 fc0 sc0 ls0 ws0">Nomor : 474 /            / Pem</div><div class="t m0 x8 h3 y8 ff1 fs0 fc0 sc0 ls0 ws0">Yang <span class="_ _0"> </span>Bertanda <span class="_ _0"> </span>tangan <span class="_ _0"> </span>di <span class="_ _0"> </span>bawah <span class="_ _0"> </span>ini, <span class="_ _0"> </span>Kepala <span class="_ _0"> </span>Desa <span class="_ _0"> </span>Gandasoli <span class="_ _0"> </span>Kecamatan </div><div class="t m0 x9 h3 y9 ff1 fs0 fc0 sc0 ls0 ws0">Tanjungsiang Kabupaten Subang, dengan ini menerangkan bahwa :</div></div><div class="c xa ya w3 h7"><div class="t m0 x9 h3 yb ff1 fs0 fc0 sc0 ls0 ws0">Nama</div><div class="t m0 x9 h3 yc ff1 fs0 fc0 sc0 ls0 ws0">Jenis Kelamin</div><div class="t m0 x9 h3 yd ff1 fs0 fc0 sc0 ls0 ws0">Tempat/Tgl Lahir</div><div class="t m0 x9 h3 ye ff1 fs0 fc0 sc0 ls0 ws0">Status Perkawinan</div><div class="t m0 x9 h3 yf ff1 fs0 fc0 sc0 ls0 ws0">Agama</div><div class="t m0 x9 h3 y10 ff1 fs0 fc0 sc0 ls0 ws0">Pekerjaan</div><div class="t m0 x9 h3 y11 ff1 fs0 fc0 sc0 ls0 ws0">Alamat</div><div class="t m0 x9 h3 y12 ff1 fs0 fc0 sc0 ls0 ws0">NIK</div></div><div class="c xb ya w4 h7"><div class="t m0 x9 h3 yb ff1 fs0 fc0 sc0 ls0 ws0">: <span class="ff2"><?= $data->Nama ?></span></div><div class="t m0 x9 h3 yc ff1 fs0 fc0 sc0 ls0 ws0">: <?= $data->Jenis_Kelamin ?></div><div class="t m0 x9 h3 yd ff1 fs0 fc0 sc0 ls0 ws0">: <?= $data->Tempat_Lahir ?>, <?= date('d F Y', strtotime($data->Tanggal_Lahir)); ?></div><div class="t m0 x9 h3 ye ff1 fs0 fc0 sc0 ls0 ws0">: <?= $data->Status_Perkawinan ?></div><div class="t m0 x9 h3 yf ff1 fs0 fc0 sc0 ls0 ws0">: <?= $data->Agama ?></div><div class="t m0 x9 h3 y10 ff1 fs0 fc0 sc0 ls0 ws0">: <?= $data->Pekerjaan ?> </div><div class="t m0 x9 h3 y11 ff1 fs0 fc0 sc0 ls0 ws0">: <?= $data->Alamat ?> </div><div class="t m0 x9 h3 y13 ff1 fs0 fc0 sc0 ls0 ws0">  Desa Gandasoli Kec. Tanjungsiang Kab. Subang</div><div class="t m0 x9 h3 y12 ff1 fs0 fc0 sc0 ls0 ws0">: <?= $data->NIK ?></div></div><div class="c x1 y1 w2 h2"><div class="t m0 x8 h3 y14 ff1 fs0 fc0 sc0 ls0 ws0">Adalah <span class="_ _0"> </span>benar <span class="_ _0"> </span>warga <span class="_ _1"> </span>masyarakat <span class="_ _0"> </span>Desa <span class="_ _0"> </span>Gandasoli <span class="_ _1"> </span>Kecamatan <span class="_ _0"> </span>Tanjungsiang </div><div class="t m0 x9 h3 y15 ff1 fs0 fc0 sc0 ls0 ws0">Kabupaten Subang <span class="_ _2"></span>sesuai dengan <span class="_ _2"></span>data diatas. <span class="_ _2"></span>KTP Sementara <span class="_ _2"></span>ini sebagai <span class="_ _2"></span>pengganti KTP </div><div class="t m0 x9 h3 y16 ff1 fs0 fc0 sc0 ls0 ws0">asli, <span class="_ _3"></span>karena <span class="_ _3"></span>KTP <span class="_ _3"></span>yang <span class="_ _3"></span>asli <span class="_ _3"></span>masih <span class="_ _3"></span>dalam <span class="_ _3"></span>proses <span class="_ _3"></span>pembuatan. <span class="_ _3"></span> <span class="_ _3"></span>KTP <span class="_ _3"></span>Sementara <span class="_ _3"></span>ini <span class="_ _3"></span>berlaku </div><div class="t m0 x9 h3 y17 ff1 fs0 fc0 sc0 ls0 ws0">sampai dengan <?= date('d F Y', strtotime($data->Masa_Berlaku_Surat)); ?>.</div><div class="t m0 x8 h3 y18 ff1 fs0 fc0 sc0 ls0 ws0">Demikian <span class="_ _4"> </span>KTP <span class="_ _4"> </span>sementara <span class="_ _4"> </span>ini <span class="_ _4"> </span>kami <span class="_ _4"> </span>buat <span class="_ _4"> </span>dengan <span class="_ _4"> </span>sebenarnya <span class="_ _4"> </span>dan <span class="_ _4"> </span>kepada <span class="_ _4"> </span>yang </div><div class="t m0 x9 h3 y19 ff1 fs0 fc0 sc0 ls0 ws0">berkepentingan agar mengetahui serta maklum adanya.</div><div class="t m0 x9 h3 y1a ff1 fs0 fc0 sc0 ls0 ws0">                                                                                                                                                                                                                           </div></div><div class="c xc y1b w5 h8"><div class="t m0 xd h3 y1c ff1 fs0 fc0 sc0 ls0 ws0">Yang  bersangkutan</div><div class="t m0 x5 h6 y1d ff2 fs0 fc0 sc0 ls0 ws0"><?= $data->Nama ?></div></div><div class="c xe y1b w6 h8"><div class="t m0 x9 h3 y1e ff1 fs0 fc0 sc0 ls0 ws0">          Gandasoli, <?= date('d F Y', strtotime($data->Tgl_Surat)); ?></div><div class="t m0 xf h3 y1c ff1 fs0 fc0 sc0 ls0 ws0">Kepala Desa Gandasoli</div><div class="t m0 xd h6 y1d ff2 fs0 fc0 sc0 ls0 ws0"><?= $data->Nama_KepalaDesa ?></div></div></div><div class="pi" data-data='{"ctm":[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}'></div></div>
<?php } ?>
</div>
<div class="loading-indicator">

</div>
</body>
</html>
