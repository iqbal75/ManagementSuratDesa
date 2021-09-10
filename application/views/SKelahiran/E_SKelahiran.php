<div class="container">
  <section class="content-header mt-3">
    <h1 style="color: #fff;">Detail
      <small>Surat Kelahiran</small>
    </h1>
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
      <ol class="breadcrumb border-left-primary shadow p-3 mb-4 bg-white rounded">
        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>C_Dasboard">Home</a></li>
        <li class=" breadcrumb-item"><a href="<?php echo base_url(); ?>C_MSurat">Manajemen Surat</a></li>
        <li class=" breadcrumb-item"><a href="<?php echo base_url(); ?>C_SKelahiran">Surat Kelahiran</a></li>
        <li class=" breadcrumb-item active" aria-current="page">Detail</li>
      </ol>
    </nav>
  </section>
  <div class="container-body">
    <div class="col-xl-12 shadow bg-white p-3 mt-3 mb-3 rounded">
      <?php foreach ($skelahiran as $data) { ?>
        <form action="<?php echo base_url(); ?>C_SKelahiran/Update" method="post" enctype="multipart/form-data">
          <div class="row">
            <div class="col-md-6">
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="Id_SKelahiran" class="col-sm-12 control-label"> <strong>Id Surat</strong></label>
                    <div class="col-sm-12">
                      <input type="text" name="Id_SKelahiran" class="form-control" id="Id_SKelahiran" value="<?= $data->Id_SKelahiran ?>" readonly required>
                    </div>
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="form-group">
                    <label for="No_SKelahiran" class="col-sm-12 control-label"><strong>Nomor Surat</strong></label>
                    <div class="col-sm-12">
                      <input type="text" name="No_SKelahiran" class="form-control" value="<?= $data->No_SKelahiran ?>" readonly>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">

                  <div class="col-sm-6">
                    <label class="col-sm-12 control-label"><strong>Hari Lahir Anak</strong></label>
                    <div class="col-sm-12">
                      <input type="text" name="Hari_LahirAnak" class="form-control" placeholder="Hari Lahir Anak......" value="<?= $data->Hari_LahirAnak ?>">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="col-sm-12 control-label"><strong>Tanggal Lahir Anak</strong></label>
                      <div class="col-sm-12">
                        <input type="date" name="Tgl_LahirAnak" class="form-control" value="<?= $data->Tempat_LahirAnak ?>">
                      </div>
                    </div>

                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-7">
                  <div class="form-group">
                    <label class="col-sm-12 control-label"><strong>Tempat Lahir Anak</strong></label>
                    <div class="col-sm-12">
                      <input type="text" name="Tempat_LahirAnak" class="form-control" placeholder="Tempat Lahir" value="<?= $data->Tempat_LahirAnak ?>">
                    </div>
                  </div>
                </div>
                <div class="col-md-5">
                  <div class="form-group">
                    <label class="col-sm-12 control-label"><strong>Jenis Kelamin Anak</strong></label>
                    <div class="col-sm-12">
                      <?php if ($data->Jenis_KelaminAnak == 'Laki-laki') : ?>
                        <div class="radio radio-info radio-inline">
                          <input type="radio" id="inlineRadio1" value="Laki-laki" name="Jenis_KelaminAnak" checked>
                          <label for="inlineRadio1"> Laki-Laki </label>
                        </div>
                        <div class="radio radio-info radio-inline">
                          <input type="radio" id="inlineRadio1" value="Perempuan" name="Jenis_KelaminAnak">
                          <label for="inlineRadio2"> Perempuan </label>
                        </div>
                      <?php else : ?>
                        <div class="radio radio-info radio-inline">
                          <input type="radio" id="inlineRadio1" value="Laki-Laki" name="Jenis_KelaminAnak">
                          <label for="inlineRadio1"> Laki-Laki </label>
                        </div>
                        <div class="radio radio-info radio-inline">
                          <input type="radio" id="inlineRadio1" value="Perempuan" name="Jenis_KelaminAnak" checked>
                          <label for="inlineRadio2"> Perempuan </label>
                        </div>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>

              </div>
              <div class="form-group">
                <label class="col-sm-4 control-label"><strong>Nama Anak</strong></label>
                <div class="col-sm-12">
                  <input type="text" name="Nama_Anak" class="form-control" placeholder="Nama Lengkap......" value="<?= $data->Nama_Anak ?>">
                </div>
              </div>


              <div class="form-group">
                <label for="Nama_Ibu" class="col-sm-12 control-label"><strong>Nama Ibu</strong></label>
                <div class="col-sm-12">
                  <input type="text" name="Nama_Ibu" class="form-control" placeholder="Nama Ibu..." value="<?= $data->Nama_Ibu ?>">
                </div>
              </div>
              <div class="row">
                <div class="col-md-7">
                  <div class="form-group">
                    <label class="col-sm-12 control-label"><strong>NIK Ibu</strong></label>
                    <div class="col-sm-12">
                      <input type="text" name="NIK_Ibu" class="form-control" value="<?= $data->NIK_Ibu ?>">
                    </div>
                  </div>
                </div>
                <div class="col-md-5">
                  <div class="form-group">
                    <label class="col-sm-12 control-label"><strong>Jenis Kelamin Ibu</strong></label>
                    <div class="col-sm-12">
                      <?php if ($data->Jenis_KelaminIbu == 'Laki-laki') : ?>
                        <div class="radio radio-info radio-inline">
                          <input type="radio" id="inlineRadio1" value="Laki-laki" name="Jenis_KelaminIbu" checked>
                          <label for="inlineRadio1"> Laki-Laki </label>
                        </div>
                        <div class="radio radio-info radio-inline">
                          <input type="radio" id="inlineRadio1" value="Perempuan" name="Jenis_KelaminIbu">
                          <label for="inlineRadio2"> Perempuan </label>
                        </div>
                      <?php else : ?>
                        <div class="radio radio-info radio-inline">
                          <input type="radio" id="inlineRadio1" value="Laki-Laki" name="Jenis_KelaminIbu">
                          <label for="inlineRadio1"> Laki-Laki </label>
                        </div>
                        <div class="radio radio-info radio-inline">
                          <input type="radio" id="inlineRadio1" value="Perempuan" name="Jenis_KelaminIbu" checked>
                          <label for="inlineRadio2"> Perempuan </label>
                        </div>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="col-sm-12 control-label"><strong>Tempat Lahir Ibu</strong></label>
                    <div class="col-sm-12">
                      <input type="text" name="Tempat_LahirIbu" class="form-control" placeholder="Tempat Lahir" value="<?= $data->Tempat_LahirIbu ?>">
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="col-sm-12 control-label"><strong>Tanggal Lahir Ibu</strong></label>
                    <div class="col-sm-12">
                      <input type="date" name="Tanggal_LahirIbu" class="form-control" placeholder="Hari Lahir Ibu......" value="<?= $data->Tanggal_LahirIbu ?>">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Bagian Kanan -->
            <div class="col-md-6">
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="col-sm-12 control-label"><strong>Agama Ibu</strong></label>
                    <div class="col-sm-12">
                      <input type="text" name="Agama_Ibu" class="form-control" placeholder="Agama..." value="<?= $data->Agama_Ibu ?>">
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="col-sm-12 control-label"><strong>Pekerjaan Ibu</strong></label>
                    <div class="col-sm-12">
                      <input type="text" name="Pekerjaan_Ibu" class="form-control" placeholder="Pekerjaan......" value="<?= $data->Pekerjaan_Ibu ?>">
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-12 control-label"><strong>Alamat Ibu</strong></label>
                <div class="col-sm-12">
                  <input type="text" name="Alamat_Ibu" class="form-control" placeholder="Alamat Ibu..." value="<?= $data->Alamat_Ibu ?>">
                </div>
              </div>
              <div class="row">
                <div class="col-md-8 mt-3">
                  <div class="form-group">
                    <label class="col-sm-12 control-label"><strong>Nama Pelapor</strong></label>
                    <div class="col-sm-12">
                      <input type="text" name="Nama_Pelapor" class="form-control" placeholder="Nama..." value="<?= $data->Nama_Pelapor ?>">
                    </div>
                  </div>
                </div>
                <div class="col-md-4 mt-3">
                  <div class="form-group">
                    <label class="col-sm-12 control-label"><strong>Umur Pelapor</strong></label>
                    <div class="col-sm-12">
                      <input type="text" name="Umur_Pelapor" class="form-control" placeholder="Umur..." value="<?= $data->Umur_Pelapor ?>">
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-12 control-label mt-4"><strong>Pekerjaan Pelapor</strong></label>
                <div class="col-sm-12">
                  <input type="text" name="Pekerjaan_Pelapor" class="form-control" placeholder="Pekerjaan Pelapor..." value="<?= $data->Pekerjaan_Pelapor ?>">
                </div>
              </div>
              <?php foreach ($suratkeluar as $d) { ?>
                <div class="form-group">
                  <label class="col-sm-12 control-label"><strong>TTL Pelapor</strong></label>
                  <div class="col-sm-12">
                    <input type="text" name="Tempat_Lahir_Pelapor" class="form-control" value="<?= $d->TTL ?>">
                  </div>
                </div>
              <?php } ?>
              <div class="form-group">
                <label class="col-sm-12 control-label"><strong>Alamat Pelapor</strong></label>
                <div class="col-sm-12">
                  <input type="text" name="Alamat_Pelapor" class="form-control" placeholder="Alamat_Pelapor" value="<?= $data->Alamat_Pelapor ?>">
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-12 control-label"><strong>Tanggal Surat</strong></label>
                <div class="col-sm-12">
                  <input type="date" name="Tgl_Surat" class="form-control" value="<?= $data->Tgl_Surat ?>">
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-12 control-label mt-4"><strong>Kepala Desa</strong></label>
                <div class="col-sm-12">
                  <input type="text" name="Nama_KepalaDesa" class="form-control" placeholder="Nama kepala desa..." value="<?= $data->Nama_KepalaDesa ?>">
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <div class="col-sm-12 text-right">
                  <button type="submit" class="btn btn-primary" name="submit"><i class="fas fa-edit"> Change</i></button>
                </div>
              </div>
            </div>
          </div>
        </form>
      <?php } ?>
    </div>
  </div>
</div>