<!-- Modal input data-->
<div class="modal fade" id="SBCovid" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <!-- <img src="<?php echo base_url('assets/gambar/LogoDesa1.png') ?>" > -->
        <h5 class="modal-title ml-3" id="exampleModalLabel"><strong>Input data-data pendukung</strong></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <!-- Bagian Kiri -->
          <div class="col-md-6">
            <form action="<?php echo base_url(); ?>C_SBCovid/Upload" method="post" enctype="multipart/form-data">

              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="Id_SBCovid" class="col-sm-12 control-label"> <strong>Id Surat</strong></label>
                    <div class="col-sm-12">
                      <input type="text" name="Id_SBCovid" class="form-control" id="Id_SBCovid" value="SDG<?= sprintf("%04s", $Id_Surat) ?>" readonly required>
                    </div>
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="form-group">
                    <label for="No_SBCovid" class="col-sm-12 control-label"><strong>Nomor Surat</strong></label>
                    <div class="col-sm-12">
                      <input type="text" name="No_SBCovid" class="form-control" value="522.32 / <?= sprintf("%04s", $Id_Surat) ?> / V / SKBC / <?= date('Y'); ?>" readonly>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-4 control-label"><strong>Nama Pengaju</strong></label>
                <div class="col-sm-12">
                  <input type="text" name="Nama" class="form-control" placeholder="Nama Lengkap......">
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-6">
                    <label class="col-sm-12 control-label"><strong>Tempat Lahir</strong></label>
                    <div class="col-sm-12">
                      <input type="text" name="Tempat_Lahir" class="form-control" placeholder="Tempat_Lahir">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <label class="col-sm-12 control-label"><strong>Tanggal Lahir</strong></label>
                    <div class="col-sm-12">
                      <input type="date" name="Tanggal_Lahir" class="form-control" placeholder="Tanggal_Lahir">
                    </div>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-4 control-label"><strong>Pekerjaan</strong></label>
                <div class="col-sm-12">
                  <input type="text" name="Pekerjaan" class="form-control" placeholder="Pekerjaan......">
                </div>
              </div>



          </div>


          <!-- Bagian Kanan -->
          <div class="col-md-6">
            <div class="form-group">
              <div class="row">
                <div class="col-sm-6">
                  <label class="col-sm-4 control-label"><strong>Kampung</strong></label>
                  <div class="col-sm-12">
                    <input type="text" name="Kp" class="form-control" placeholder="Kp...">
                  </div>
                </div>
                <div class="col-sm-3">
                  <label class="col-sm-4 control-label"><strong>Rt.</strong></label>
                  <div class="col-sm-12">
                    <input type="text" name="Rt" class="form-control" placeholder="Rt...">
                  </div>
                </div>
                <div class="col-sm-3">
                  <label class="col-sm-4 control-label"><strong>Rw.</strong></label>
                  <div class="col-sm-12">
                    <input type="text" name="Rw" class="form-control" placeholder="Rw...">
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-4 control-label"><strong>NIK</strong></label>
              <div class="col-sm-12">
                <input type="text" name="NIK" class="form-control" placeholder="NIK...">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-4 control-label"><strong>Tanggal Surat</strong></label>
              <div class="col-sm-12">
                <input type="date" name="Tgl_Surat" class="form-control" placeholder="Tanggal surat...">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-4 control-label"><strong>Kepala Desa</strong></label>
              <div class="col-sm-12">
                <input type="text" name="Nama_KepalaDesa" class="form-control" placeholder="Nama kepala desa...">
              </div>
            </div>
          </div>
        </div>

      </div>
      <div class="modal-footer">
        <center>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          <input type="submit" value="Tambah" class="btn btn-primary">
        </center>
      </div>
    </div>
    </form>
  </div>
</div>