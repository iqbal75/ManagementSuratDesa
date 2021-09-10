<!DOCTYPE html>
<!-- Created by pdf2htmlEX (https://github.com/coolwanglu/pdf2htmlex) -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8"/>

<title>Desa Gandasili</title>

<link href="<?php echo base_url().'assets/gambar/LogoDesa1.png' ?>" rel="icon">

<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<link rel="stylesheet" href="<?php echo base_url('assets/Print/Permohonan_Rekomendasi_KIP/base.min.css') ?>"/>
<link rel="stylesheet" href="<?php echo base_url('assets/Print/Permohonan_Rekomendasi_KIP/fancy.min.css') ?>"/>
<link rel="stylesheet" href="<?php echo base_url('assets/Print/Permohonan_Rekomendasi_KIP/main.css') ?>"/>
<script src="<?php echo base_url('assets/Print/Permohonan_Rekomendasi_KIP/compatibility.min.js') ?>"></script>
<script src="<?php echo base_url('assets/Print/Permohonan_Rekomendasi_KIP/theViewer.min.js') ?>"></script>
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
<?php foreach ($srkip as $data) { ?>
<div id="page-container">
<div id="pf1" class="pf w0 h0" data-page-no="1"><div class="pc pc1 w0 h0"><img class="bi x0 y0 w1 h1" alt="" src="<?php echo base_url('assets/Print/Permohonan_Rekomendasi_KIP/bg1.png') ?>"/><div class="t m0 x1 h2 y1 ff1 fs0 fc0 sc0 ls0 ws0">PEMERINTAH KABUPATEN SUBANG</div><div class="t m0 x2 h2 y2 ff1 fs0 fc0 sc0 ls0 ws0">KECAMATAN TANJUNGSIANG</div><div class="t m0 x3 h3 y3 ff2 fs1 fc0 sc0 ls0 ws0">DESA GANDASOLI</div><div class="t m0 x4 h4 y4 ff1 fs2 fc0 sc0 ls0 ws0">  <span class="ff3 fs3">Alamat : Jln Raya Gandasoli No 06 Desa Gandasoli Kec. Tanjungsiang – Subang 41284 </span></div><div class="c x5 y5 w2 h5"><div class="t m0 x6 h6 y6 ff4 fs2 fc0 sc0 ls0 ws0">Nomor    : <?= $data->No_SRKip ?></div><div class="t m0 x6 h6 y7 ff4 fs2 fc0 sc0 ls0 ws0">Lamp      : -</div><div class="t m0 x6 h6 y8 ff4 fs2 fc0 sc0 ls0 ws0">Perihal    : <span class="ff5">Permohonan Rekomendasi KIP</span></div><div class="t m0 x6 h6 y9 ff4 fs2 fc0 sc0 ls0 ws0"> </div></div><div class="c x7 y5 w3 h5"><div class="t m0 x6 h6 y6 ff4 fs2 fc0 sc0 ls0 ws0">                   Kepada  :</div><div class="t m0 x6 h6 y7 ff4 fs2 fc0 sc0 ls0 ws0">Yth.  Kepala Dinas Sosial Kab. Subang</div><div class="t m0 x6 h6 y8 ff4 fs2 fc0 sc0 ls0 ws0">               Di </div><div class="t m0 x6 h6 y9 ff4 fs2 fc0 sc0 ls0 ws0">                    Subang</div></div><div class="t m0 x8 h6 ya ff4 fs2 fc0 sc0 ls0 ws0">Dengan hormat,</div><div class="t m0 x8 h6 yb ff4 fs2 fc0 sc0 ls0 ws0">Disampaikan <span class="_ _0"></span>dengan <span class="_ _0"></span>hormat <span class="_ _0"></span>bersama <span class="_ _0"></span>ini <span class="_ _0"></span>kami <span class="_ _0"></span>sampaikan <span class="_ _0"></span>Permohonan <span class="_ _0"></span>Surat <span class="_ _0"></span>Rekomendasi <span class="_ _0"></span>dari </div><div class="t m0 x8 h6 yc ff4 fs2 fc0 sc0 ls0 ws0">Bapak untuk Pembuatan/Pencetakan Kantu Indonesia Pinter (KIP) atas nama :</div><div class="c x8 yd w4 h7"><div class="t m0 x9 h6 ye ff4 fs2 fc0 sc0 ls0 ws0">Nama </div><div class="t m0 x9 h6 yf ff4 fs2 fc0 sc0 ls0 ws0">Tempat, Tgl lahir</div><div class="t m0 x9 h6 y10 ff4 fs2 fc0 sc0 ls0 ws0">Jenis Kelamin</div><div class="t m0 x9 h6 y11 ff4 fs2 fc0 sc0 ls0 ws0">Alamat</div><div class="t m0 x9 h6 y12 ff4 fs2 fc0 sc0 ls0 ws0">No KIP</div></div><div class="c xa yd w5 h7"><div class="t m0 x6 h6 ye ff4 fs2 fc0 sc0 ls0 ws0">:</div><div class="t m0 x6 h6 yf ff4 fs2 fc0 sc0 ls0 ws0">:</div><div class="t m0 x6 h6 y10 ff4 fs2 fc0 sc0 ls0 ws0">:</div><div class="t m0 x6 h6 y11 ff4 fs2 fc0 sc0 ls0 ws0">:</div><div class="t m0 x6 h6 y12 ff4 fs2 fc0 sc0 ls0 ws0">:</div></div><div class="c xb yd w6 h7"><div class="t m0 x6 h6 ye ff4 fs2 fc0 sc0 ls0 ws0"><?= $data->Nama ?></div><div class="t m0 x6 h6 yf ff4 fs2 fc0 sc0 ls0 ws0"><?= $data->Tempat_Lahir ?>, <?= date('d F Y', strtotime($data->Tanggal_Lahir)); ?></div><div class="t m0 x6 h6 y10 ff4 fs2 fc0 sc0 ls0 ws0"><?= $data->Jenis_Kelamin ?></div><div class="t m0 x6 h6 y11 ff4 fs2 fc0 sc0 ls0 ws0"><?= $data->Alamat ?> Desa Gandasoli</div><div class="t m0 x6 h6 y13 ff4 fs2 fc0 sc0 ls0 ws0">Kecamatan Tanjungsiang Kabupaten Subang </div><div class="t m0 x6 h6 y12 ff4 fs2 fc0 sc0 ls0 ws0"><?= $data->No_Kip ?></div></div><div class="t m0 x8 h6 y14 ff4 fs2 fc0 sc0 ls0 ws0">Demikian <span class="_ _0"></span>surat permohonan <span class="_ _0"></span>ini <span class="_ _0"></span>kami sampaikan, <span class="_ _0"></span>atas <span class="_ _0"></span>perhatiannya kami <span class="_ _0"></span>ucapkan <span class="_ _0"></span>terima kasih.</div><div class="c xc y15 w7 h8"><div class="t m0 xd h6 y16 ff4 fs2 fc0 sc0 ls0 ws0">      Gandasoli, <?= date('d F Y', strtotime($data->Tgl_Surat)); ?></div><div class="t m0 xe h6 y17 ff4 fs2 fc0 sc0 ls0 ws0">            Kepala Desa Gandasoli</div><div class="t m0 xf h9 y18 ff6 fs2 fc0 sc0 ls0 ws0">           <U><?= $data->Nama_KepalaDesa ?></U></div></div></div><div class="pi" data-data='{"ctm":[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}'></div></div>
</div>
<?php } ?>
<div class="loading-indicator">

</div>
</body>
</html>
