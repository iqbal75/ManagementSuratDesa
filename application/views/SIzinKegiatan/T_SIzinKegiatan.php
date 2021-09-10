<div class="container mt-3">
  <section class="content-header">
    <h1 style="color: #fff;">Manajemen
      <small>Izin Kegiatan</small>
    </h1>

    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
      <ol class="breadcrumb border-left-primary shadow p-3 mb-4 bg-white rounded">
        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>C_Dasboard">Home</a></li>
        <li class=" breadcrumb-item"><a href="<?php echo base_url(); ?>C_MSurat">Manajemen Surat</a></li>
        <li class=" breadcrumb-item active" aria-current="page">Izin Kegiatan</li>
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
          <table id="example" class="table table-striped table-hover" style="font-size:13px;">
            <thead>
              <tr>
                <th>No</th>
                <th>No Surat</th>
                <th>Nama Kegiatan</th>
                <th>Tanggal Pelaksanaan</th>
                <th>Tgl. Surat</th>
                <th style="text-align:center;">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              foreach ($sizinkegiatan as $data) :
              ?>
                <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $data->No_SIzinKegiatan ?></td>
                  <td><?php echo $data->Nama_Kegiatan ?></td>
                  <td><?php echo $data->Tanggal_Pelaksanaan ?></td>
                  <td><?php echo $data->Tgl_Surat ?></td>
                  <td style="text-align:right;">
                    <a href="<?= base_url() ?>C_SIzinKegiatan/Print/<?= $data->Id_SIzinKegiatan ?>" class="btn btn-primary" role="button" title="Print"><i class="fa fa-print" aria-hidden="true"> </i></a>

                    <a href="<?= base_url() ?>C_SIzinKegiatan/Edit/<?= $data->Id_SIzinKegiatan ?>" class="btn btn-primary" role="button" title="Detail"><i class="fa fa-eye" aria-hidden="true"> </i></a>

                    <a href="<?= base_url() ?>C_SIzinKegiatan/Delete/<?= $data->Id_SIzinKegiatan ?>" class="btn btn-danger" role="button" onclick="return confirm('Apakah Anda Yakin Untuk Hapus?')" title="Hapus"><span class="fa fa-trash"> </span></a>


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