<div class="container">
  <section class="content-header mt-3">
    <h1 style="color: #fff;">Detail
      <small>SKTM Anak Sekolah</small>
    </h1>
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
      <ol class="breadcrumb border-left-primary shadow p-3 mb-4 bg-white rounded">
        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>C_Dasboard">Home</a></li>
        <li class=" breadcrumb-item"><a href="<?php echo base_url(); ?>C_MSurat">Manajemen Surat</a></li>
        <li class=" breadcrumb-item"><a href="<?php echo base_url(); ?>C_SKTMASekolah">SKTM Anak Sekolah</a></li>
        <li class=" breadcrumb-item active" aria-current="page">Detail</li>
      </ol>
    </nav>
  </section>
  <div class="container-body">
    <div class="col-xl-12 shadow bg-white p-3 mt-3 mb-3 rounded">
      <div class="row">
        <!-- Bagian Kiri -->
        <div class="col-md-6">
          <?php foreach ($sktmasekolah as $data) { ?>
            <form action="<?php echo base_url(); ?>C_SKTMASekolah/Update" method="post" enctype="multipart/form-data">
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="Id_SKTMASekolah" class="col-sm-12 control-label"> <strong>Id Surat</strong></label>
                    <div class="col-sm-12">
                      <input type="text" name="Id_SKTMASekolah" class="form-control" id="Id_SKTMASekolah" value="<?= $data->Id_SKTMASekolah ?>" readonly required>
                    </div>
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="form-group">
                    <label for="No_SKTMASekolah" class="col-sm-12 control-label"><strong>Nomor Surat</strong></label>
                    <div class="col-sm-12">
                      <input type="text" name="No_SKTMASekolah" class="form-control" value="<?= $data->No_SKTMASekolah ?>" readonly>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-4 control-label"><strong>Nama Orangtua</strong></label>
                <div class="col-sm-12">
                  <input type="text" name="Nama_Ortu" class="form-control" placeholder="Nama Lengkap......" value="<?= $data->Nama_Ortu ?>">
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-6">
                    <label class="col-sm-12 control-label"><strong>Tempat Lahir Orangtua</strong></label>
                    <div class="col-sm-12">
                      <input type="text" name="Tempat_Lahir_Ortu" class="form-control" placeholder="Tempat_Lahir" value="<?= $data->Tempat_Lahir_Ortu ?>">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <label class="col-sm-12 control-label"><strong>Tanggal Lahir Orangtua</strong></label>
                    <div class="col-sm-12">
                      <input type="date" name="Tanggal_Lahir_Ortu" class="form-control" placeholder="Tanggal_Lahir" value="<?= $data->Tanggal_Lahir_Ortu ?>">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row mt-4">
                <div class="col-md-5 mt-3">
                  <div class="form-group">
                    <label class="col-sm-12 control-label"><strong>Agama Orangtua</strong></label>
                    <div class="col-sm-12">
                      <input type="text" name="Agama_Ortu" class="form-control" placeholder="Agama......" value="<?= $data->Agama_Ortu ?>">
                    </div>
                  </div>
                </div>
                <div class="col-md-7 mt-3">
                  <div class="form-group">
                    <label class="col-sm-12 control-label"><strong>Pekerjaan Orangtua</strong></label>
                    <div class="col-sm-12">
                      <input type="text" name="Pekerjaan_Ortu" class="form-control" placeholder="Pekerjaan......" value="<?= $data->Pekerjaan_Ortu ?>">
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-4 control-label"><strong>Alamat Orangtua</strong></label>
                <div class="col-sm-12">
                  <input type="text" name="Alamat_Ortu" class="form-control" placeholder="Alamat.." value="<?= $data->Alamat_Ortu ?>">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-4 control-label"><strong>NIK Orangtua</strong></label>
                <div class="col-sm-12">
                  <input type="text" name="NIK_Ortu" class="form-control" placeholder="NIK..." value="<?= $data->NIK_Ortu ?>">
                </div>
              </div>
        </div>


        <!-- Bagian Kanan -->
        <div class="col-md-6">
          <div class="form-group">
            <label class="col-sm-4 control-label"><strong>Nama Anak</strong></label>
            <div class="col-sm-12">
              <input type="text" name="Nama_Anak" class="form-control" placeholder="Nama Lengkap......" value="<?= $data->Nama_Anak ?>">
            </div>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-sm-6">
                <label class="col-sm-12 control-label"><strong>Tempat Lahir Anak</strong></label>
                <div class="col-sm-12">
                  <input type="text" name="Tempat_Lahir_Anak" class="form-control" placeholder="Tempat_Lahir" value="<?= $data->Tempat_Lahir_Anak ?>">
                </div>
              </div>
              <div class="col-sm-6">
                <label class="col-sm-12 control-label"><strong>Tanggal Lahir Anak</strong></label>
                <div class="col-sm-12">
                  <input type="date" name="Tanggal_Lahir_Anak" class="form-control" placeholder="Tanggal_Lahir" value="<?= $data->Tanggal_Lahir_Anak ?>">
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label class="col-sm-12 control-label"><strong>JK Anak</strong></label>
                <div class="col-sm-12">
                  <?php if ($data->Jenis_Kelamin_Anak == 'Laki-laki') : ?>
                    <div class="radio radio-info radio-inline">
                      <input type="radio" id="inlineRadio1" value="Laki-laki" name="Jenis_Kelamin_Anak" checked>
                      <label for="inlineRadio1"> Laki-Laki </label>
                    </div>
                    <div class="radio radio-info radio-inline">
                      <input type="radio" id="inlineRadio1" value="Perempuan" name="Jenis_Kelamin_Anak">
                      <label for="inlineRadio2"> Perempuan </label>
                    </div>
                  <?php else : ?>
                    <div class="radio radio-info radio-inline">
                      <input type="radio" id="inlineRadio1" value="Laki-Laki" name="Jenis_Kelamin_Anak">
                      <label for="inlineRadio1"> Laki-Laki </label>
                    </div>
                    <div class="radio radio-info radio-inline">
                      <input type="radio" id="inlineRadio1" value="Perempuan" name="Jenis_Kelamin_Anak" checked>
                      <label for="inlineRadio2"> Perempuan </label>
                    </div>
                  <?php endif; ?>
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="form-group">
                <label class="col-sm-12 control-label"><strong>NIK Anak</strong></label>
                <div class="col-sm-12">
                  <input type="text" name="NIK_Anak" class="form-control" placeholder="NIK..." value="<?= $data->NIK_Anak ?>">
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-5">
              <div class="form-group">
                <label class="col-sm-12 control-label"><strong>Agama Anak</strong></label>
                <div class="col-sm-12">
                  <input type="text" name="Agama_Anak" class="form-control" placeholder="Agama......" value="<?= $data->Agama_Anak ?>">
                </div>
              </div>
            </div>
            <div class="col-md-7">
              <div class="form-group">
                <label class="col-sm-12 control-label"><strong>Pekerjaan Anak</strong></label>
                <div class="col-sm-12">
                  <input type="text" name="Pekerjaan_Anak" class="form-control" placeholder="Pekerjaan......" value="<?= $data->Pekerjaan_Anak ?>">
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label"><strong>Alamat Anak</strong></label>
            <div class="col-sm-12">
              <input type="text" name="Alamat_Anak" class="form-control" placeholder="Alamat.." value="<?= $data->Alamat_Anak ?>">
            </div>
          </div>
          <div class="row">
            <div class="col-md-5">
              <div class="form-group">
                <label class="col-sm-12 control-label"><strong>Tanggal Surat</strong></label>
                <div class="col-sm-12">
                  <input type="date" name="Tgl_Surat" class="form-control" value="<?= $data->Tgl_Surat ?>">
                </div>
              </div>
            </div>
            <div class="col-md-7">
              <div class="form-group">
                <label class="col-sm-12 control-label"><strong>Kepala Desa</strong></label>
                <div class="col-sm-12">
                  <input type="text" name="Nama_KepalaDesa" class="form-control" placeholder="Nama kepala desa..." value="<?= $data->Nama_KepalaDesa ?>">
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