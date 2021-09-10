<!DOCTYPE html>
<!-- Created by pdf2htmlEX (https://github.com/coolwanglu/pdf2htmlex) -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8"/>

<title>Desa Gandasili</title>

<link href="<?php echo base_url().'assets/gambar/LogoDesa1.png' ?>" rel="icon">

<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<link rel="stylesheet" href="<?php echo base_url('assets/Print/SURAT_JALAN/base.min.css') ?>"/>
<link rel="stylesheet" href="<?php echo base_url('assets/Print/SURAT_JALAN/fancy.min.css') ?>"/>
<link rel="stylesheet" href="<?php echo base_url('assets/Print/SURAT_JALAN/main.css') ?> "/>
<script src="<?php echo base_url('assets/Print/SURAT_JALAN/compatibility.min.js') ?>"></script>
<script src="<?php echo base_url('assets/Print/SURAT_JALAN/theViewer.min.js') ?>"></script>
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
<?php foreach($sjalan as $data){ ?>
<div id="pf1" class="pf w0 h0" data-page-no="1"><div class="pc pc1 w0 h0"><img class="bi x0 y0 w1 h1" alt="" src="<?php echo base_url('assets/Print/SURAT_JALAN/bg1.png') ?>"/><div class="t m0 x1 h2 y1 ff1 fs0 fc0 sc0 ls0 ws0">PEMERINTAH KABUPATEN SUBANG</div><div class="t m0 x2 h2 y2 ff1 fs0 fc0 sc0 ls0 ws0">KECAMATAN TANJUNGSIANG</div><div class="t m0 x3 h3 y3 ff2 fs1 fc0 sc0 ls0 ws0">DESA GANDASOLI</div><div class="t m0 x4 h4 y4 ff1 fs2 fc0 sc0 ls0 ws0">  <span class="ff3 fs3">Alamat : Jln Raya Gandasoli No 06 Desa Gandasoli Kecamatan Tanjungsiang – Subang 41284</span></div><div class="t m0 x5 h5 y5 ff2 fs4 fc0 sc0 ls0 ws0">SURAT KETERANGAN JALAN</div><div class="t m0 x6 h4 y6 ff1 fs2 fc0 sc0 ls0 ws0">   Nomor :  <?= $data->No_Sjalan ?></div><div class="t m0 x7 h4 y7 ff1 fs2 fc0 sc0 ls0 ws0">Yang <span class="_ _0"> </span>bertanda <span class="_ _0"> </span>tangan <span class="_ _0"> </span>di <span class="_ _0"> </span>bawah <span class="_ _0"> </span>ini <span class="_ _0"> </span>Kepala <span class="_ _0"> </span>Desa <span class="_ _0"> </span>Gandasoli <span class="_ _0"> </span>Kecamatan <span class="_ _0"> </span>Tanjungsiang </div><div class="t m0 x0 h4 y8 ff1 fs2 fc0 sc0 ls0 ws0">Kabupaten Subang, dengan ini menerangkan bahwa  :</div><div class="c x8 y9 w2 h6"><div class="t m0 x9 h4 ya ff1 fs2 fc0 sc0 ls0 ws0">Nama</div><div class="t m0 x9 h4 yb ff1 fs2 fc0 sc0 ls0 ws0">Tmpt, Tgl.Lahir</div><div class="t m0 x9 h4 yc ff1 fs2 fc0 sc0 ls0 ws0">Pekerjaan</div><div class="t m0 x9 h4 yd ff1 fs2 fc0 sc0 ls0 ws0">Alamat</div></div><div class="c xa y9 w3 h6"><div class="t m0 xb h4 ya ff1 fs2 fc0 sc0 ls0 ws0">:</div><div class="t m0 xb h4 yb ff1 fs2 fc0 sc0 ls0 ws0">:</div><div class="t m0 xb h4 yc ff1 fs2 fc0 sc0 ls0 ws0">:</div><div class="t m0 xb h4 yd ff1 fs2 fc0 sc0 ls0 ws0">:</div></div><div class="c xc y9 w4 h6"><div class="t m0 xd h4 ya ff1 fs2 fc0 sc0 ls0 ws0"><?= $data->Nama ?></div><div class="t m0 xd h4 yb ff1 fs2 fc0 sc0 ls0 ws0"><?= $data->Tempat_Lahir ?>, <?= date('d F Y', strtotime($data->Tanggal_Lahir)); ?></div><div class="t m0 xd h4 yc ff1 fs2 fc0 sc0 ls0 ws0"><?= $data->Pekerjaan ?></div><div class="t m0 xd h4 yd ff1 fs2 fc0 sc0 ls0 ws0"><?= $data->Alamat ?></div><div class="t m0 xd h4 ye ff1 fs2 fc0 sc0 ls0 ws0">Desa Gandasoli Kec. Tanjungsiang Subang</div></div><div class="t m0 x7 h4 yf ff1 fs2 fc0 sc0 ls0 ws0">Orang <span class="_ _1"> </span>tersebut <span class="_ _1"> </span>di <span class="_ _1"> </span>atas <span class="_ _1"> </span>benar <span class="_ _1"> </span>warga <span class="_ _1"> </span>Desa <span class="_ _1"> </span>Gandasoli <span class="_ _1"> </span>dan <span class="_ _1"> </span>akan <span class="_ _1"> </span>melakukan <span class="_ _1"> </span>perjalanan </div><div class="t m0 x0 h4 y10 ff1 fs2 fc0 sc0 ls0 ws0">dengan uraian sebagai berikut :</div><div class="t m0 x7 h4 y11 ff1 fs2 fc0 sc0 ls0 ws0">Jenis Kendaraan<span class="_ _2"> </span>: <?= $data->Jenis_Kendaraan ?></div><div class="t m0 x7 h4 y12 ff1 fs2 fc0 sc0 ls0 ws0">Mobil No Pol.<span class="_ _3"> </span>   <span class="_ _4"> </span>: <?= $data->No_Polisi ?></div><div class="t m0 x7 h4 y13 ff1 fs2 fc0 sc0 ls0 ws0">No. Rangka / Mesin <span class="_ _5"> </span>: <?= $data->No_Rangka ?></div><div class="t m0 x7 h4 y14 ff1 fs2 fc0 sc0 ls0 ws0">Mobil Atas Nama<span class="_ _6"> </span>: <?= $data->AtasNama_Mobil ?></div><div class="t m0 x7 h4 y15 ff1 fs2 fc0 sc0 ls0 ws0">Tujuan <span class="_ _7"> </span>: <?= $data->Tujuan ?></div><div class="t m0 x7 h4 y16 ff1 fs2 fc0 sc0 ls0 ws0">Barang Bawaan <span class="_ _8"> </span>: <?= $data->Barang_Bawaan ?></div><div class="t m0 x7 h4 y17 ff1 fs2 fc0 sc0 ls0 ws0">Demikian <span class="_ _9"> </span>Surat <span class="_ _9"> </span>keterangan <span class="_ _9"> </span>ini <span class="_ _9"> </span>kami <span class="_ _9"> </span>buat <span class="_ _9"> </span>dengan <span class="_ _9"> </span>sebenarnya <span class="_ _9"> </span>untuk <span class="_ _9"> </span>dipergunakan </div><div class="t m0 x0 h4 y18 ff1 fs2 fc0 sc0 ls0 ws0">sebagaimana mestinnya.</div><div class="c xe y19 w5 h7"><div class="t m0 xf h4 y1a ff1 fs2 fc0 sc0 ls0 ws0">   Gandasoli, <?= date('d F Y', strtotime($data->Tgl_Surat)); ?></div><div class="t m0 x10 h4 y1b ff1 fs2 fc0 sc0 ls0 ws0"> Kepala Desa Gandasoli</div><div class="t m0 x11 h8 y1c ff2 fs2 fc0 sc0 ls0 ws0"><U><?= $data->Nama_KepalaDesa ?></U></div></div></div><div class="pi" data-data='{"ctm":[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}'></div></div>
</div>
<?php } ?>
<div class="loading-indicator">

</div>
</body>
</html>
