<!DOCTYPE html>
<!-- Created by pdf2htmlEX (https://github.com/coolwanglu/pdf2htmlex) -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8"/>

<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<link rel="stylesheet" href="<?php echo base_url('assets/Print/Surat_Izin_Kegiatan/base.min.css') ?>"/>
<link rel="stylesheet" href="<?php echo base_url('assets/Print/Surat_Izin_Kegiatan/fancy.min.css') ?>"/>
<link rel="stylesheet" href="<?php echo base_url('assets/Print/Surat_Izin_Kegiatan/main.css') ?>"/>
<script src="<?php echo base_url('assets/Print/Surat_Izin_Kegiatan/compatibility.min.js') ?>"></script>
<script src="<?php echo base_url('assets/Print/Surat_Izin_Kegiatan/theViewer.min.js') ?>"></script>
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
<?php foreach ($sizinkegiatan as $data) { ?>
<div id="pf1" class="pf w0 h0" data-page-no="1"><div class="pc pc1 w0 h0"><img class="bi x0 y0 w1 h1" alt="" src="<?php echo base_url('assets/Print/Surat_Izin_Kegiatan/bg1.png') ?>"/><div class="t m0 x1 h2 y1 ff1 fs0 fc0 sc0 ls0 ws0">     PEMERINTAH KABUPATEN SUBANG</div><div class="t m0 x2 h2 y2 ff1 fs0 fc0 sc0 ls0 ws0">   KECAMATAN TANJUNGSIANG</div><div class="t m0 x3 h3 y3 ff2 fs1 fc0 sc0 ls0 ws0">  DESA GANDASOLI</div><div class="t m0 x4 h4 y4 ff3 fs2 fc0 sc0 ls0 ws0">Alamat :Jln Raya Gandasoli No 06 Desa Gandasoli Kecamatan Tanjungsiang Kabupaten Subang 41284 </div><div class="t m0 x5 h5 y5 ff2 fs3 fc0 sc0 ls0 ws0">SURAT IZIN</div><div class="t m0 x6 h6 y6 ff1 fs4 fc0 sc0 ls0 ws0">Nomor   :  <?= $data->No_SIzinKegiatan ?></div><div class="t m0 x7 h6 y7 ff1 fs4 fc0 sc0 ls0 ws0">Yang <span class="_ _0"> </span>bertanda <span class="_ _0"> </span>tangan <span class="_ _0"> </span>di <span class="_ _0"> </span>bawah <span class="_ _0"> </span> <span class="_ _0"> </span>ini <span class="_ _0"> </span>Kepala <span class="_ _0"> </span>Desa <span class="_ _0"> </span>Gandasoli <span class="_ _0"> </span>Kecamatan <span class="_ _0"> </span>Tanjungsiang </div><div class="t m0 x8 h6 y8 ff1 fs4 fc0 sc0 ls0 ws0">Kabupaten Subang, dengan ini   <span class="ff2">MEREKOMENDASI  /  MENGIJINKAN</span>  kegiatan  :</div><div class="t m0 x8 h6 y9 ff1 fs4 fc0 sc0 ls0 ws0">Nama Kegiatan <span class="_ _1"> </span>: <?= $data->Nama_Kegiatan ?></div><div class="t m0 x8 h6 ya ff1 fs4 fc0 sc0 ls0 ws0">Tanggal Pelaksanaan <span class="_ _2"> </span>: <?= date('d F Y', strtotime($data->Tanggal_Pelaksanaan)); ?> </div><div class="t m0 x8 h6 yb ff1 fs4 fc0 sc0 ls0 ws0">Tempat <span class="_ _3"> </span>: <?= $data->Tempat_Pelaksanaan ?></div><div class="t m0 x9 h6 yc ff1 fs4 fc0 sc0 ls0 ws0">  Desa Gandasoli  Kec. Tanjungsiang Kab.  Subang</div><div class="t m0 x7 h6 yd ff1 fs4 fc0 sc0 ls0 ws0">Demikian surat ini dibuat, untuk dipergunakan sebagaimana mestinya.</div><div class="t m0 x8 h7 ye ff4 fs4 fc0 sc0 ls0 ws0">                                                                                    </div><div class="t m0 xa h6 yf ff1 fs4 fc0 sc0 ls0 ws0">Gandasoli,  <?= date('d F Y', strtotime($data->Tgl_Surat)); ?></div><div class="t m0 xb h6 y10 ff1 fs4 fc0 sc0 ls0 ws0">Kepala Desa Gandasoli</div><div class="t m0 xc h8 y11 ff2 fs4 fc0 sc0 ls0 ws0"><?= $data->Nama_KepalaDesa ?></div></div><div class="pi" data-data='{"ctm":[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}'></div></div>
<?php } ?>
</div>
<div class="loading-indicator">
<script>
    window.print();
</script>
</div>
</body>
</html>
