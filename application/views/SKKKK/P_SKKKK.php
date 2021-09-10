<!DOCTYPE html>
<!-- Created by pdf2htmlEX (https://github.com/coolwanglu/pdf2htmlex) -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8"/>

<title>Desa Gandasili</title>

<link href="<?php echo base_url().'assets/gambar/LogoDesa1.png' ?>" rel="icon">

<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<link rel="stylesheet" href="<?php echo base_url('assets/Print/SKKKK/base.min.css') ?>"/>
<link rel="stylesheet" href="<?php echo base_url('assets/Print/SKKKK/fancy.min.css') ?>"/>
<link rel="stylesheet" href="<?php echo base_url('assets/Print/SKKKK/main.css') ?>"/>
<script src="<?php echo base_url('assets/Print/SKKKK/compatibility.min.js') ?>"></script>
<script src="<?php echo base_url('assets/Print/SKKKK/theViewer.min.js') ?>"></script>
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
<?php foreach ($skkkk as $data) { ?>
<div id="page-container">
<div id="pf1" class="pf w0 h0" data-page-no="1"><div class="pc pc1 w0 h0"><img class="bi x0 y0 w1 h1" alt="" src="<?php echo base_url('assets/Print/SKKKK/bg1.png') ?>"/><div class="t m0 x1 h2 y1 ff1 fs0 fc0 sc0 ls0 ws0">PEMERINTAH KABUPATEN SUBANG</div><div class="t m0 x2 h2 y2 ff1 fs0 fc0 sc0 ls0 ws0">KECAMATAN TANJUNGSIANG</div><div class="t m0 x3 h3 y3 ff1 fs1 fc0 sc0 ls0 ws0">DESA GANDASOLI</div><div class="t m0 x4 h4 y4 ff2 fs2 fc0 sc0 ls0 ws0">Alamat :Jln Raya Gandasoli No 06 Desa Gandasoli Kec. Tanjungsiang Kab. Subang 41284</div><div class="t m0 x5 h5 y5 ff1 fs3 fc0 sc0 ls0 ws0">SURAT KETERANGAN KEHILANGAN KK</div><div class="t m0 x6 h6 y6 ff2 fs4 fc0 sc0 ls0 ws0">Nomor  : <?= $data->No_SKKKK ?></div><div class="t m0 x7 h6 y7 ff2 fs4 fc0 sc0 ls0 ws0">Yang <span class="_ _0"> </span>bertanda <span class="_ _0"> </span>tangan <span class="_ _0"> </span>di <span class="_ _0"> </span>bawah <span class="_ _0"> </span>ini <span class="_ _0"> </span>Kepala <span class="_ _0"> </span>Desa <span class="_ _0"> </span>Gandasoli <span class="_ _0"> </span>Kecamatan </div><div class="t m0 x8 h6 y8 ff2 fs4 fc0 sc0 ls0 ws0">Tanjungsiang Kabupaten Subang, dengan ini menerangkan bahwa  :</div><div class="c x8 y9 w2 h7"><div class="t m0 x9 h6 ya ff2 fs4 fc0 sc0 ls0 ws0">N a m a</div><div class="t m0 x9 h6 yb ff2 fs4 fc0 sc0 ls0 ws0">Tempat, Tanggal Lahir</div><div class="t m0 x9 h6 yc ff2 fs4 fc0 sc0 ls0 ws0">Jenis Kelamin</div><div class="t m0 x9 h6 yd ff2 fs4 fc0 sc0 ls0 ws0">Pekerjaan</div><div class="t m0 x9 h6 ye ff2 fs4 fc0 sc0 ls0 ws0">Alamat</div><div class="t m0 x9 h6 yf ff2 fs4 fc0 sc0 ls0 ws0">N I K</div></div><div class="c xa y9 w3 h7"><div class="t m0 x9 h6 ya ff2 fs4 fc0 sc0 ls0 ws0">:</div><div class="t m0 x9 h6 yb ff2 fs4 fc0 sc0 ls0 ws0">:</div><div class="t m0 x9 h6 yc ff2 fs4 fc0 sc0 ls0 ws0">:</div><div class="t m0 x9 h6 yd ff2 fs4 fc0 sc0 ls0 ws0">:</div><div class="t m0 x9 h6 ye ff2 fs4 fc0 sc0 ls0 ws0">:</div><div class="t m0 x9 h6 yf ff2 fs4 fc0 sc0 ls0 ws0">: </div></div><div class="c xb y9 w4 h7"><div class="t m0 x9 h8 ya ff1 fs4 fc0 sc0 ls0 ws0"><b><?= $data->Nama ?></b></div><div class="t m0 x9 h6 yb ff2 fs4 fc0 sc0 ls0 ws0"><?= $data->Tempat_Lahir ?>, <?= date('d F Y', strtotime($data->Tanggal_Lahir)); ?></div><div class="t m0 x9 h6 yc ff2 fs4 fc0 sc0 ls0 ws0"><?= $data->Jenis_Kelamin ?></div><div class="t m0 x9 h6 yd ff2 fs4 fc0 sc0 ls0 ws0"><?= $data->Pekerjaan ?></div><div class="t m0 x9 h6 ye ff2 fs4 fc0 sc0 ls0 ws0"><?= $data->Alamat ?></div><div class="t m0 x9 h6 y10 ff2 fs4 fc0 sc0 ls0 ws0">Desa Gandasoli  Kec. Tanjungsiang Kab Subang</div><div class="t m0 x9 h6 yf ff2 fs4 fc0 sc0 ls0 ws0"><?= $data->NIK ?></div></div><div class="t m0 x7 h6 y11 ff2 fs4 fc0 sc0 ls0 ws0">Bahwa <span class="_ _1"></span>orang <span class="_ _1"></span>tersebut <span class="_ _1"></span>di <span class="_ _1"></span>atas <span class="_ _1"></span>adalah <span class="_ _1"></span>benar <span class="_ _1"></span>warga <span class="_ _1"></span>desa <span class="_ _1"></span>kami <span class="_ _1"></span>pernah <span class="_ _1"></span>mempunyai </div><div class="t m0 x8 h6 y12 ff2 fs4 fc0 sc0 ls0 ws0">Kartu Keluarga (KK) dari Disduk Capil namun KK-nya hilang.</div><div class="t m0 xc h6 y13 ff2 fs4 fc0 sc0 ls0 ws0">  Demikian <span class="_ _2"></span>surat <span class="_ _2"> </span>keterangan <span class="_ _2"> </span>ini <span class="_ _2"> </span>kami <span class="_ _2"> </span>buat <span class="_ _2"> </span>dengan <span class="_ _2"> </span>sebenarnya <span class="_ _2"> </span>dan <span class="_ _2"> </span>kepada <span class="_ _2"> </span>yang </div><div class="t m0 x8 h6 y14 ff2 fs4 fc0 sc0 ls0 ws0">berkepentingan agar menjadi tahu dan maklum adanya.</div><div class="t m0 xd h6 y15 ff2 fs4 fc0 sc0 ls0 ws0">         </div><div class="c xe y16 w5 h9"><div class="t m0 x9 h6 y17 ff2 fs4 fc0 sc0 ls0 ws0"> </div></div><div class="c xf y16 w6 h9"><div class="t m0 x10 h6 y18 ff2 fs4 fc0 sc0 ls0 ws0">Gandasoli, <?= date('d F Y', strtotime($data->Tgl_Surat)); ?></div><div class="t m0 xd h6 y19 ff2 fs4 fc0 sc0 ls0 ws0">Kepala Desa Gandasoli</div><div class="t m0 x11 h8 y1a ff1 fs4 fc0 sc0 ls0 ws0"><U><?= $data->Nama_KepalaDesa ?></U></div></div></div><div class="pi" data-data='{"ctm":[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}'></div></div>

</div>
<?php } ?>
<div class="loading-indicator">

</div>
</body>
</html>
