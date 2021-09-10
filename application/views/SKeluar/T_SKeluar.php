<div class="container mt-3">
    <section class="content-header">
        <h1 style="color: #fff;">Manajemen
            <small>Surat Keluar</small>
        </h1>

        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb border-left-primary shadow p-3 mb-4 bg-white rounded">
                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>C_Dasboard">Home</a></li>
                <li class=" breadcrumb-item active" aria-current="page">Surat Keluar</li>
            </ol>
        </nav>
    </section>
    <?php echo $this->session->flashdata('succes_save_surat'); ?>
    <section class="content-body">
        <div class="box box-widget border-left-primary shadow p-3 mb-5 bg-white rounded">
            <div class="box-header">

            </div>
            <div class="scroll1">
                <div class="box-body">
                    <div class="row mb-3">
                        <div class="col-md-12 text-right">
                            <a href="<?= base_url() ?>Laporanpdf" class="btn btn-success" role="button"><i class="fa fa-print" aria-hidden="true"> Cetak Laporan</i></a>
                        </div>
                    </div>

                    <table id="example" class="table table-striped table-hover" style="font-size:13px;">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Id Surat</th>
                                <th>No Surat</th>
                                <th>Nama Pengaju</th>
                                <th>Jenis Surat</th>
                                <th>Tgl. Surat</th>
                                <th style="text-align:center;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($suratkeluar as $data) :
                            ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $data->Id_Surat ?></td>
                                    <td><?php echo $data->No_Surat ?></td>
                                    <td><?php echo $data->Nama_Pengaju ?></td>
                                    <td><?php echo $data->Jenis_Surat ?></td>
                                    <td><?php echo $data->Tgl_Surat ?></td>
                                    <td style="text-align:right;">
                                        <a href="<?= base_url() ?>C_SKeluar/Edit/<?= $data->Id_Surat ?>" class="btn btn-primary" role="button"><i class="fa fa-eye" aria-hidden="true"> </i></a>
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