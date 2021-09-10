<!DOCTYPE html>
<!-- Created by pdf2htmlEX (https://github.com/coolwanglu/pdf2htmlex) -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8"/>
<title>Desa Gandasili</title>

<link href="<?php echo base_url().'assets/gambar/LogoDesa1.png' ?>" rel="icon">

<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<link rel="stylesheet" href="<?php echo base_url('assets/Print/SKelahiran/base.min.css') ?>"/>
<link rel="stylesheet" href="<?php echo base_url('assets/Print/SKelahiran/fancy.min.css') ?>"/>
<link rel="stylesheet" href="<?php echo base_url('assets/Print/SKelahiran/main.css') ?>"/>
<script src="<?php echo base_url('assets/Print/SKelahiran/compatibility.min.js') ?>"></script>
<script src="<?php echo base_url('assets/Print/SKelahiran/theViewer.min.js') ?>"></script>
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
<?php foreach ($skelahiran as $data) { ?>
<div id="pf1" class="pf w0 h0" data-page-no="1"><div class="pc pc1 w0 h0"><img class="bi x0 y0 w1 h1" alt="" src="<?php echo base_url('assets/Print/SKelahiran/bg1.png') ?>"/><div class="t m0 x1 h2 y1 ff1 fs0 fc0 sc0 ls0 ws0">Pemerintah Kab.<span class="_ _0"> </span>: Subang</div><div class="t m0 x1 h2 y2 ff1 fs0 fc0 sc0 ls0 ws0">Kecamatan<span class="_ _1"> </span>: Tanjungsiang</div><div class="t m0 x1 h2 y3 ff1 fs0 fc0 sc0 ls0 ws0">Desa<span class="_ _2"> </span>: Gandasoli</div><div class="t m0 x2 h3 y4 ff2 fs1 fc0 sc0 ls0 ws0">ARSIP UNTUK DESA / KELURAHAN</div><div class="t m0 x0 h3 y5 ff2 fs1 fc0 sc0 ls0 ws0">SURAT KETERANGAN KELAHIRAN</div><div class="t m0 x3 h4 y6 ff1 fs1 fc0 sc0 ls0 ws0">Nomor  :<?= $data->No_SKelahiran ?><span class="ff2"></span></div><div class="t m0 x4 h4 y7 ff1 fs1 fc0 sc0 ls0 ws0">Yang <span class="_ _3"> </span>bertanda <span class="_ _3"> </span>tangan <span class="_ _3"> </span>dibawah <span class="_ _3"> </span>ini, <span class="_ _3"> </span>Kepala <span class="_ _3"> </span>Desa <span class="_ _3"> </span>Gandasoli </div><div class="t m0 x5 h4 y8 ff1 fs1 fc0 sc0 ls0 ws0">Kec. <span class="_ _4"> </span>Tanjungsiang <span class="_ _4"> </span>Kab. <span class="_ _4"> </span>Subang, <span class="_ _4"> </span>dengan <span class="_ _4"> </span>ini <span class="_ _4"> </span>menerangkan <span class="_ _4"> </span>bahwa </div><div class="t m0 x5 h4 y9 ff1 fs1 fc0 sc0 ls0 ws0">pada:</div><div class="t m0 x5 h4 ya ff1 fs1 fc0 sc0 ls0 ws0">Hari <span class="_ _5"> </span>:  <?= $data->Hari_LahirAnak ?></div><div class="t m0 x5 h4 yb ff1 fs1 fc0 sc0 ls0 ws0">Tanggal <span class="_ _6"> </span>:  <?= date('d F Y', strtotime($data->Tgl_LahirAnak)) ?></div><div class="t m0 x5 h4 yc ff1 fs1 fc0 sc0 ls0 ws0">Tempat <span class="_ _7"> </span>:  <?= $data->Tempat_LahirAnak ?></div><div class="t m0 x4 h4 yd ff1 fs1 fc0 sc0 ls0 ws0">Telah lahir seorang anak <?= $data->Jenis_KelaminAnak ?> dengan:            </div><div class="t m0 x4 h4 ye ff1 fs1 fc0 sc0 ls0 ws0">Nama <span class="_ _8"> </span>:  <span class="ff2"><b><?= $data->Nama_Anak ?></b></span></div><div class="t m0 x1 h4 yf ff1 fs1 fc0 sc0 ls0 ws0">Dari seorang ibu </div><div class="t m0 x1 h4 y10 ff1 fs1 fc0 sc0 ls0 ws0">Nama Lengkap          <span class="_ _9"> </span>: <span class="ff2"><b><?= $data->Nama_Ibu ?></b></span></div><div class="t m0 x1 h4 y11 ff1 fs1 fc0 sc0 ls0 ws0">NIK                           <span class="_ _a"> </span>:  <?= $data->NIK_Ibu ?></div><div class="t m0 x1 h4 y12 ff1 fs1 fc0 sc0 ls0 ws0">Jenis Kelamin            <span class="_ _b"> </span>:  <?= $data->Jenis_KelaminIbu ?></div><div class="t m0 x1 h4 y13 ff1 fs1 fc0 sc0 ls0 ws0">Tanggal Lahir/umur  <span class="_ _c"> </span>:  <?= $data->Tempat_LahirIbu ?>, <?= date('d F Y', strtotime($data->Tanggal_LahirIbu )) ?></div><div class="t m0 x1 h4 y14 ff1 fs1 fc0 sc0 ls0 ws0">Agama                       <span class="_ _9"> </span>:  <?= $data->Agama_Ibu ?></div><div class="t m0 x1 h4 y15 ff1 fs1 fc0 sc0 ls0 ws0">Pekerjaan                   <span class="_ _b"> </span>:  <?= $data->Pekerjaan_Ibu ?></div><div class="t m0 x1 h4 y16 ff1 fs1 fc0 sc0 ls0 ws0">Alamat                       <span class="_ _b"> </span>:  <?= $data->Alamat_Ibu ?></div><div class="t m0 x1 h4 y17 ff1 fs1 fc0 sc0 ls0 ws0">                                <span class="_ _d"> </span>   Desa Gandasoli Kec. Tanjungsiang</div><div class="t m0 x1 h4 y18 ff1 fs1 fc0 sc0 ls0 ws0">                                  <span class="_ _e"> </span>   Kab. Subang</div><div class="t m0 x4 h4 y19 ff1 fs1 fc0 sc0 ls0 ws0">Surat <span class="_ _f"> </span>keterangan <span class="_ _f"> </span>ini <span class="_ _f"> </span>dibuat <span class="_ _f"> </span>berdasarkan <span class="_ _f"> </span>Keterangan <span class="_ _f"> </span>Pelapor  </div><div class="t m0 x5 h4 y1a ff1 fs1 fc0 sc0 ls0 ws0">:</div><div class="t m0 x1 h4 y1b ff1 fs1 fc0 sc0 ls0 ws0">Nama Lengkap           <span class="_ _10"> </span>:  <span class="ff2"><b><?= $data->Nama_Pelapor ?></b></span></div><div class="t m0 x1 h4 y1c ff1 fs1 fc0 sc0 ls0 ws0">Umur                          <span class="_ _11"> </span>:  <?= $data->Umur_Pelapor ?> Tahun</div><div class="t m0 x1 h4 y1d ff1 fs1 fc0 sc0 ls0 ws0">Pekerjaan<span class="_ _12"> </span>:  <?= $data->Pekerjaan_Pelapor ?> </div><div class="t m0 x1 h4 y1e ff1 fs1 fc0 sc0 ls0 ws0">Alamat                       <span class="_ _b"> </span>:  <?= $data->Alamat_Pelapor ?></div><div class="t m0 x1 h4 y1f ff1 fs1 fc0 sc0 ls0 ws0">                                <span class="_ _d"> </span>   Desa Gandasoli Kec. Tanjungsiang</div><div class="t m0 x1 h4 y20 ff1 fs1 fc0 sc0 ls0 ws0">                                  <span class="_ _e"> </span>   Kab. Subang</div><div class="t m0 x6 h4 y21 ff1 fs1 fc0 sc0 ls0 ws0">Gandasoli,     <?= date('d F Y', strtotime($data->Tgl_Surat)) ?></div><div class="t m0 x7 h4 y22 ff1 fs1 fc0 sc0 ls0 ws0">Kepala Desa Gandasoli</div><div class="t m0 x8 h3 y23 ff2 fs1 fc0 sc0 ls0 ws0"><b><?= $data->Nama_KepalaDesa ?></b></div></div><div class="pi" data-data='{"ctm":[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}'></div></div>
<?php } ?>
</div>
<div class="loading-indicator">

</div>
</body>
</html>
