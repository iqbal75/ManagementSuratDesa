<div class="container">
  <section class="content-header mt-3">
    <h1 style="color: #fff;">Detail
      <small>KTP Sementara</small>
    </h1>

    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
      <ol class="breadcrumb border-left-primary shadow p-3 mb-4 bg-white rounded">
        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>C_Dasboard">Home</a></li>
        <li class=" breadcrumb-item"><a href="<?php echo base_url(); ?>C_MSurat">Manajemen Surat</a></li>
        <li class=" breadcrumb-item"><a href="<?php echo base_url(); ?>C_KTPSementara">KTP Sementara</a></li>
        <li class=" breadcrumb-item active" aria-current="page">Detail</li>
      </ol>
    </nav>

  </section>
  <div class="container-body">
    <div class="col-xl-12 shadow bg-white p-3 mt-3 mb-3 rounded">
      <div class="row">
        <!-- Bagian Kiri -->
        <div class="col-md-6">
          <?php foreach ($ktpsementara as $data) { ?>
            <form action="<?php echo base_url(); ?>C_KTPSementara/Update" method="post" enctype="multipart/form-data">

              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="Id_KTPSementara" class="col-sm-12 control-label"> <strong>Id Surat</strong></label>
                    <div class="col-sm-12">
                      <input type="text" name="Id_KTPSementara" class="form-control" id="Id_KTPSementara" value="<?= $data->Id_KTPSementara ?>" readonly required>
                    </div>
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="form-group">
                    <label for="No_KTPSementara" class="col-sm-12 control-label"><strong>Nomor Surat</strong></label>
                    <div class="col-sm-12">
                      <input type="text" name="No_KTPSementara" class="form-control" value="<?= $data->No_KTPSementara ?>" readonly>
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
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="col-sm-12 control-label"><strong>Status Perkawinan</strong></label>
                      <div class="col-sm-12">
                        <?php if ($data->Status_Perkawinan == 'Menikah') : ?>
                          <select name="Status_Perkawinan" class="form-control">
                            <option value="Menikah" selected="">Menikah</option>
                            <option value="Belum Menikah">Belum Menikah</option>
                          </select>
                        <?php else : ?>
                          <select name="Status_Perkawinan" class="form-control">
                            <option value="Menikah">Menikah</option>
                            <option value="Belum Menikah" selected="">Belum Menikah</option>
                          </select>
                        <?php endif; ?>

                      </div>
                    </div>
                  </div>
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
              <div class="row">
                <div class="col-md-5">
                  <div class="form-group">
                    <label class="col-sm-12 control-label"><strong>Agama</strong></label>
                    <div class="col-sm-12">
                      <input type="text" name="Agama" class="form-control" placeholder="Agama......" value="<?= $data->Agama ?>">
                    </div>
                  </div>
                </div>
                <div class="col-md-7">
                  <div class="form-group">
                    <label class="col-sm-12 control-label"><strong>Pekerjaan</strong></label>
                    <div class="col-sm-12">
                      <input type="text" name="Pekerjaan" class="form-control" placeholder="Pekerjaan......" value="<?= $data->Pekerjaan ?>">
                    </div>
                  </div>
                </div>
              </div>


        </div>


        <!-- Bagian Kanan -->
        <div class="col-md-6">
          <div class="form-group">
            <label class="col-sm-4 control-label"><strong>NIK</strong></label>
            <div class="col-sm-12">
              <input type="text" name="NIK" class="form-control" placeholder="NIK..." value="<?= $data->NIK ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label"><strong>Kampung</strong></label>
            <div class="col-sm-12">
              <input type="text" name="Alamat" class="form-control" placeholder="Alamat..." value="<?= $data->Alamat ?>">
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label class="col-sm-12 control-label"><strong>Masa Berlaku Surat</strong></label>
                <div class="col-sm-12">
                  <input type="date" name="Masa_Berlaku_Surat" class="form-control" value="<?= $data->Masa_Berlaku_Surat ?>">
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label class="col-sm-12 control-label"><strong>Tanggal Surat</strong></label>
                <div class="col-sm-12">
                  <input type="date" name="Tgl_Surat" class="form-control" value="<?= $data->Tgl_Surat ?>">
                </div>
              </div>
            </div>
          </div>

          <div class="form-group mt-4">
            <label class="col-sm-4 control-label"><strong>Kepala Desa</strong></label>
            <div class="col-sm-12">
              <input type="text" name="Nama_KepalaDesa" class="form-control" placeholder="Nama kepala desa..." value="<?= $data->Nama_KepalaDesa ?>">
            </div>
          </div>

        </div>
        <div class="col-md-12 text-right">
          <div class="form-group">
            <div class="col-sm-12 text-right">
              <button type="submit" class="btn btn-primary" name="submit"><i class="fas fa-edit"> Change</i></button>
            </div>
          </div>
        </div>


        </form>
      <?php } ?>
      </div>


    </div>
  </div>
</div>
</div>