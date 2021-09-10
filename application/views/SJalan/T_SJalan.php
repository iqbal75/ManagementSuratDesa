<div class="container mt-3">
  <section class="content-header">
    <h1 style="color: #fff;">Manajemen
      <small>Surat Jalan</small>
    </h1>

    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
      <ol class="breadcrumb border-left-primary shadow p-3 mb-4 bg-white rounded">
        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>C_Dasboard">Home</a></li>
        <li class=" breadcrumb-item"><a href="<?php echo base_url(); ?>C_MSurat">Manajemen Surat</a></li>
        <li class=" breadcrumb-item active" aria-current="page">Surat Jalan</li>
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
                <th>Id Surat</th>
                <th>Nama</th>
                <th>No Surat</th>
                <th>Jenis Kendaraan</th>
                <th>Tujuan</th>
                <th>Tgl. Surat</th>
                <th style="text-align:center;">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              foreach ($sjalan as $data) :
              ?>

                <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $data->Id_Sjalan ?></td>
                  <td><?php echo $data->Nama ?></td>
                  <td><?php echo $data->No_Sjalan ?></td>
                  <td><?php echo $data->Jenis_Kendaraan ?></td>
                  <td><?php echo $data->Tujuan ?></td>

                  <td><?php echo $data->Tgl_Surat ?></td>
                  <td style="text-align:right;">

                    <a href="<?= base_url() ?>C_SJalan/Print/<?= $data->Id_Sjalan ?>" class="btn btn-primary" role="button" title="Print"><i class="fa fa-print" aria-hidden="true"></i></a>

                    <a href="<?= base_url() ?>C_SJalan/Edit/<?= $data->Id_Sjalan ?>" class="btn btn-primary" role="button" title="Detail"><i class="fa fa-eye" aria-hidden="true"></i></a>

                    <a href="<?= base_url() ?>C_SJalan/Delete/<?= $data->Id_Sjalan ?>" class="btn btn-danger" role="button" onclick="return confirm('Apakah Anda Yakin Untuk Hapus?')" title="Hapus"><span class="fa fa-trash"></span></a>


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