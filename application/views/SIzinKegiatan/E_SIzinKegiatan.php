<div class="container">
  <section class="content-header mt-3">
    <h1 style="color: #fff;">Detail
      <small>Izin Kegiatan</small>
    </h1>
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
      <ol class="breadcrumb border-left-primary shadow p-3 mb-4 bg-white rounded">
        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>C_Dasboard">Home</a></li>
        <li class=" breadcrumb-item"><a href="<?php echo base_url(); ?>C_MSurat">Manajemen Surat</a></li>
        <li class=" breadcrumb-item"><a href="<?php echo base_url(); ?>C_SIzinKegiatan">Izin Kegiatan</a></li>
        <li class=" breadcrumb-item active" aria-current="page">Detail</li>
      </ol>
    </nav>
  </section>
  <div class="container-body">
    <div class="col-xl-12 shadow bg-white p-3 mt-3 mb-3 rounded">
      <div class="row">
        <!-- Bagian Kiri -->
        <div class="col-md-6">
          <?php foreach ($sizinkegiatan as $data) { ?>
            <form action="<?php echo base_url(); ?>C_SIzinKegiatan/Update" method="post" enctype="multipart/form-data">

              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="Id_SIzinKegiatan" class="col-sm-12 control-label"> <strong>Id Surat</strong></label>
                    <div class="col-sm-12">
                      <input type="text" name="Id_SIzinKegiatan" class="form-control" id="Id_SIzinKegiatan" value="<?= $data->Id_SIzinKegiatan ?>" readonly required>
                    </div>
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="form-group">
                    <label for="No_SIzinKegiatan" class="col-sm-12 control-label"><strong>Nomor Surat</strong></label>
                    <div class="col-sm-12">
                      <input type="text" name="No_SIzinKegiatan" class="form-control" value="<?= $data->No_SIzinKegiatan ?>" readonly>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-4 control-label"><strong>Nama Kegiatan</strong></label>
                <div class="col-sm-12">
                  <input type="text" name="Nama_Kegiatan" class="form-control" placeholder="Nama Kegiatan......" value="<?= $data->Nama_Kegiatan ?>">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-12 control-label"><strong>Tanggal Pelaksanaan</strong></label>
                <div class="col-sm-12">
                  <input type="date" name="Tanggal_Pelaksanaan" class="form-control" placeholder="Tanggal_Kegiatan" value="<?= $data->Tanggal_Pelaksanaan ?>">
                </div>
              </div>
              <?php foreach ($suratkeluar as $d) { ?>
                <div class="form-group">
                  <label class="col-sm-4 control-label"><strong>Nama Pengaju</strong></label>
                  <div class="col-sm-12">
                    <input type="text" name="Nama_Pengaju" class="form-control" placeholder="Nama Lengkap......" value="<?= $d->Nama_Pengaju ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label"><strong>TTL</strong></label>
                  <div class="col-sm-12">
                    <input type="text" name="TTL" class="form-control" placeholder="Nama Lengkap......" value="<?= $d->TTL ?>">
                  </div>
                </div>

        </div>


        <!-- Bagian Kanan -->
        <div class="col-md-6">
          <div class="form-group">
            <label class="col-sm-4 control-label"><strong>Pekerjaan</strong></label>
            <div class="col-sm-12">
              <input type="text" name="Pekerjaan" class="form-control" placeholder="Nama Lengkap......" value="<?= $d->Pekerjaan ?>">
            </div>
          </div>
        <?php } ?>
        <div class="form-group">
          <label class="col-sm-12 control-label"><strong>Tempat Pelaksanaan</strong></label>
          <div class="col-sm-12">
            <input type="text" name="Tempat_Pelaksanaan" class="form-control" placeholder="Tempat Pelaksanaan..." value="<?= $data->Tempat_Pelaksanaan ?>">
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