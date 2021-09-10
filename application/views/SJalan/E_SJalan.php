<div class="container">
  <section class="content-header mt-3">
    <h1 style="color: #fff;">Detail
      <small>Surat Jalan</small>
    </h1>
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
      <ol class="breadcrumb border-left-primary shadow p-3 mb-4 bg-white rounded">
        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>C_Dasboard">Home</a></li>
        <li class=" breadcrumb-item"><a href="<?php echo base_url(); ?>C_MSurat">Manajemen Surat</a></li>
        <li class=" breadcrumb-item"><a href="<?php echo base_url(); ?>C_SJalan">Surat Jalan</a></li>
        <li class=" breadcrumb-item active" aria-current="page">Detail</li>
      </ol>
    </nav>
  </section>
  <div class="container-body">
    <div class="col-xl-12 shadow bg-white p-3 mt-3 mb-3 rounded">
      <div class="row">
        <!-- Bagian Kiri -->

        <div class="col-md-6">
          <?php foreach ($sjalan as $data) { ?>
            <form action="<?php echo base_url(); ?>C_SJalan/Update" method="post" enctype="multipart/form-data">
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="Id_Sjalan" class="col-sm-12 control-label"> <strong>Id Surat Jalan</strong></label>
                    <div class="col-sm-12">
                      <input type="text" name="Id_Sjalan" class="form-control" id="Id_Sjalan" value="<?= $data->Id_Sjalan ?>" readonly required>
                    </div>
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="form-group">
                    <label for="No_SJalan" class="col-sm-12 control-label"><strong>Nomor Surat</strong></label>
                    <div class="col-sm-12">
                      <input type="text" name="No_Sjalan" class="form-control" value="<?= $data->No_Sjalan ?>" readonly>
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
                <label class="col-sm-4 control-label"><strong>Pekerjaan</strong></label>
                <div class="col-sm-12">
                  <input type="text" name="Pekerjaan" class="form-control" placeholder="Pekerjaan..." value="<?= $data->Pekerjaan ?>">
                </div>
              </div>
              <div class="form-group">


                <label class="col-sm-4 control-label"><strong>Alamat</strong></label>
                <div class="col-sm-12">
                  <input type="text" name="Alamat" class="form-control" placeholder="Alamat" value="<?= $data->Alamat ?>">
                </div>




              </div>

              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="col-sm-12 control-label"><strong>Jenis Kendaraan</strong></label>
                    <div class="col-sm-12">
                      <input type="text" name="Jenis_Kendaraan" class="form-control" placeholder="Jenis Kendaraan..." value="<?= $data->Jenis_Kendaraan ?>">
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="col-sm-12 control-label"><strong>Nomor Polisi</strong></label>
                    <div class="col-sm-12">
                      <input type="text" name="No_Polisi" class="form-control" placeholder="Nomor Polisi..." value="<?= $data->No_Polisi ?>">
                    </div>
                  </div>
                </div>
              </div>
        </div>


        <!-- Bagian Kanan -->
        <div class="col-md-6">
          <div class="form-group">
            <label class="col-sm-4 control-label"><strong>Nomor Rangka</strong></label>
            <div class="col-sm-12">
              <input type="text" name="No_Rangka" class="form-control" placeholder="Nomor Rangka..." value="<?= $data->No_Rangka ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-12 control-label"><strong>Atas Nama Kendaraan</strong></label>
            <div class="col-sm-12">
              <input type="text" name="AtasNama_Mobil" class="form-control" placeholder="Atas Nama Kendaraan..." value="<?= $data->AtasNama_Mobil ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label"><strong>Tujuan</strong></label>
            <div class="col-sm-12">
              <input type="text" name="Tujuan" class="form-control" placeholder="Tujuan..." value="<?= $data->Tujuan ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label"><strong>Barang Bawaan</strong></label>
            <div class="col-sm-12">
              <input type="text" name="Barang_Bawaan" class="form-control" placeholder="Barang bawaan..." value="<?= $data->Barang_Bawaan ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label"><strong>Tanggal Surat</strong></label>
            <div class="col-sm-12">
              <input type="date" name="Tgl_Surat" class="form-control" placeholder="Tanggal surat..." value="<?= $data->Tgl_Surat ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label"><strong>Kepala Desa</strong></label>
            <div class="col-sm-12">
              <input type="text" name="Nama_KepalaDesa" class="form-control" placeholder="Nama kepala desa..." value="<?= $data->Nama_KepalaDesa ?>">
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