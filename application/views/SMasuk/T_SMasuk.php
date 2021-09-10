<div class="container mt-3">
    <section class="content-header">
        <h1 style="color: #fff;">Manajemen
            <small>Surat Masuk</small>
        </h1>
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb border-left-primary shadow p-3 mb-4 bg-white rounded">
                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>C_Dasboard">Home</a></li>
                <li class=" breadcrumb-item active" aria-current="page">Surat Masuk</li>
            </ol>
        </nav>
    </section>

    <?php echo $this->session->flashdata('succes_save_surat'); ?>

    <section class="content-body">
        <div class="box box-widget border-left-primary shadow p-3 mb-5 bg-white rounded">
            <div class="scroll1">
                <div class="box-body">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <a class="btn btn-success btn-flat" data-toggle="modal" data-target="#SMasuk" style="color: #fff;"><span class="fa fa-plus mr-3"></span>Tambah Data</a>
                        </div>
                        <div class="col-md-6 text-right">
                            <a href="<?= base_url() ?>Laporanpdf/SMasuk" class="btn btn-success" role="button"><i class="fa fa-print" aria-hidden="true"> Cetak Laporan</i></a>
                        </div>
                    </div>
                    <table id="example" class="table table-striped table-hover" style="font-size:13px;">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Id Surat</th>
                                <th>No Surat</th>
                                <th>Tanggal Terima</th>
                                <th>Pengirim</th>
                                <th>Tanggal Surat</th>
                                <th style="text-align:center;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($suratmasuk as $data) :
                            ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $data->Id_SMasuk ?></td>
                                    <td><?php echo $data->No_SMasuk ?></td>
                                    <td><?php echo $data->Tgl_Penerimaan ?></td>
                                    <td><?php echo $data->Pengirim ?></td>
                                    <td><?php echo $data->Tanggal ?></td>
                                    <td style="text-align:right;">
                                        <a href="<?= base_url() ?>C_SMasuk/Edit/<?= $data->Id_SMasuk ?>/<?= $data->foto ?>" class="btn btn-primary" role="button"><i class="fa fa-eye" aria-hidden="true"> </i></a>

                                        <a href="<?= base_url() ?>C_SMasuk/Delete/<?= $data->Id_SMasuk ?>/<?= $data->foto ?>" class="btn btn-danger" role="button" onclick="return confirm('Apakah Anda Yakin Untuk Hapus?')"><span class="fa fa-trash"></span></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>

<?php include 'Mdl_SMasuk.php'; ?>