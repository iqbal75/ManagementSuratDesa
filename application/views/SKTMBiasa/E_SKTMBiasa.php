<div class="container">
  <section class="content-header mt-3">
    <h1 style="color: #fff;">Detail
      <small>SKTM Umum</small>
    </h1>
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
      <ol class="breadcrumb border-left-primary shadow p-3 mb-4 bg-white rounded">
        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>C_Dasboard">Home</a></li>
        <li class=" breadcrumb-item"><a href="<?php echo base_url(); ?>C_MSurat">Manajemen Surat</a></li>
        <li class=" breadcrumb-item"><a href="<?php echo base_url(); ?>C_SKTMBiasa">SKTM Umum</a></li>
        <li class=" breadcrumb-item active" aria-current="page">Detail</li>
      </ol>
    </nav>
  </section>
  <div class="container-body">
    <div class="col-xl-12 shadow bg-white p-3 mt-3 mb-3 rounded">
      <div class="row">

        <!-- Bagian Kiri -->
        <div class="col-md-6">
          <?php foreach ($sktmbiasa as $data) { ?>
            <form action="<?php echo base_url(); ?>C_SKTMBiasa/Update" method="post" enctype="multipart/form-data">
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="Id_SKTMBiasa" class="col-sm-12 control-label"> <strong>Id Surat</strong></label>
                    <div class="col-sm-12">
                      <input type="text" name="Id_SKTMBiasa" class="form-control" id="Id_SKTMBiasa" value="<?= $data->Id_SKTMBiasa ?>" readonly required>
                    </div>
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="form-group">
                    <label for="No_SKTMBiasa" class="col-sm-12 control-label"><strong>Nomor Surat</strong></label>
                    <div class="col-sm-12">
                      <input type="text" name="No_SKTMBiasa" class="form-control" value="<?= $data->No_SKTMBiasa ?>" readonly>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-4 control-label"><strong>Nama Pengaju</strong></label>
                <div class="col-sm-12">
                  <input type="text" name="Nama" class="form-control" placeholder="Nama Lengkap......" value="<?= $data->Nama ?>">
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-6">
                    <label class="col-sm-12 control-label"><strong>Tempat Lahir</strong></label>
                    <div class="col-sm-12">
                      <input type="text" name="Tempat_Lahir" class="form-control" placeholder="Tempat_Lahir" value="<?= $data->Tempat_Lahir ?>">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <label class="col-sm-12 control-label"><strong>Tanggal Lahir</strong></label>
                    <div class="col-sm-12">
                      <input type="date" name="Tanggal_Lahir" class="form-control" placeholder="Tanggal_Lahir" value="<?= $data->Tanggal_Lahir ?>">
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-md-4">
                    <label class="col-sm-12 control-label"><strong>Jenis Kelamin</strong></label>
                    <div class="col-sm-12">
                      <?php if ($data->Jenis_Kelamin == 'Laki-laki') : ?>
                        <div class="radio radio-info radio-inline">
                          <input type="radio" id="inlineRadio1" value="Laki-laki" name="Jenis_Kelamin" checked>
                          <label for="inlineRadio1"> Laki-Laki </label>
                        </div>
                        <div class="radio radio-info radio-inline">
                          <input type="radio" id="inlineRadio1" value="Perempuan" name="Jenis_Kelamin">
                          <label for="inlineRadio2"> Perempuan </label>
                        </div>
                      <?php else : ?>
                        <div class="radio radio-info radio-inline">
                          <input type="radio" id="inlineRadio1" value="Laki-Laki" name="Jenis_Kelamin">
                          <label for="inlineRadio1"> Laki-Laki </label>
                        </div>
                        <div class="radio radio-info radio-inline">
                          <input type="radio" id="inlineRadio1" value="Perempuan" name="Jenis_Kelamin" checked>
                          <label for="inlineRadio2"> Perempuan </label>
                        </div>
                      <?php endif; ?>
                    </div>
                  </div>
                  <div class="col-md-8">
                    <div class="form-group">
                      <label class="col-sm-4 control-label"><strong>Pekerjaan</strong></label>
                      <div class="col-sm-12">
                        <input type="text" name="Pekerjaan" class="form-control" placeholder="Pekerjaan......" value="<?= $data->Pekerjaan ?>">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-6">
                    <label class="col-sm-4 control-label"><strong>Kampung</strong></label>
                    <div class="col-sm-12">
                      <input type="text" name="Kp" class="form-control" placeholder="Kp..." value="<?= $data->Kp ?>">
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <label class="col-sm-4 control-label"><strong>Rt.</strong></label>
                    <div class="col-sm-12">
                      <input type="text" name="Rt" class="form-control" placeholder="Rt..." value="<?= $data->Rt ?>">
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <label class="col-sm-4 control-label"><strong>Rw.</strong></label>
                    <div class="col-sm-12">
                      <input type="text" name="Rw" class="form-control" placeholder="Rw..." value="<?= $data->Rw ?>">
                    </div>
                  </div>
                </div>
              </div>

        </div>


        <!-- Bagian Kanan -->
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-7">
              <div class="form-group">
                <label class="col-sm-4 control-label"><strong>NIK</strong></label>
                <div class="col-sm-12">
                  <input type="text" name="NIK" class="form-control" placeholder="NIK..." value="<?= $data->NIK ?>">
                </div>
              </div>
            </div>
            <div class="col-md-5">
              <div class="form-group">
                <label class="col-sm-12 control-label"><strong>Tanggal Surat</strong></label>
                <div class="col-sm-12">
                  <input type="date" name="Tgl_Surat" class="form-control" placeholder="Tanggal surat..." value="<?= $data->Tgl_Surat ?>">
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label"><strong>Nama Ketua Rt</strong></label>
            <div class="col-sm-12">
              <input type="text" name="Nama_Rt" class="form-control" placeholder="Nama Ketua Rt..." value="<?= $data->Nama_Rt ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label"><strong>Nama Ketua Rw</strong></label>
            <div class="col-sm-12">
              <input type="text" name="Nama_Rw" class="form-control" placeholder="Nama ketua Rw..." value="<?= $data->Nama_Rw ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label"><strong>Kepala Desa</strong></label>
            <div class="col-sm-12">
              <input type="text" name="Nama_KepalaDesa" class="form-control" placeholder="Nama kepala desa..." value="<?= $data->Nama_KepalaDesa ?>">
            </div>
          </div>
          <div class="row mt-4">
            <div class="col-md-8">
              <div class="form-group mt-3">
                <label class="col-sm-12 control-label"><strong>Nama Camat</strong></label>
                <div class="col-sm-12">
                  <input type="text" name="Nama_Camat" class="form-control" placeholder="Nama Lengkap Camat..." value="<?= $data->Nama_Camat ?>">
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group mt-3">
                <label class="col-sm-12 control-label"><strong>Nama Camat</strong></label>
                <div class="col-sm-12">
                  <input type="text" name="NIP_Camat" class="form-control" placeholder="NIP Camat..." value="<?= $data->NIP_Camat ?>">
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-12 text-right">
              <button type="submit" class="btn btn-primary" name="submit"><i class="fas fa-edit"> Change</i></button>
            </div>
          </div>
          </form>
        <?php } ?>
        </div>

      </div>
    </div>
  </div>
</div>