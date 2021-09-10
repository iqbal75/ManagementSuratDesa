<!-- Modal input data-->
<div class="modal fade" id="SKelahiran" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title ml-3" id="exampleModalLabel"><strong>Input data-data pendukung</strong></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <!-- Bagian Kiri -->
          <div class="col-md-6">
            <form action="<?php echo base_url(); ?>C_SKelahiran/Upload" method="post" enctype="multipart/form-data">

              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="Id_SKelahiran" class="col-sm-12 control-label"> <strong>Id Surat</strong></label>
                    <div class="col-sm-12">
                      <input type="text" name="Id_SKelahiran" class="form-control" id="Id_SKelahiran" value="SDG<?= sprintf("%04s", $Id_Surat) ?>" readonly required>
                    </div>
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="form-group">
                    <label for="No_SKelahiran" class="col-sm-12 control-label"><strong>Nomor Surat</strong></label>
                    <div class="col-sm-12">
                      <input type="text" name="No_SKelahiran" class="form-control" value="522.31 / <?= sprintf("%04s", $Id_Surat) ?> / V / SK / <?= date('Y'); ?>" readonly>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">

                  <div class="col-sm-6">
                    <label class="col-sm-12 control-label"><strong>Hari Lahir Anak</strong></label>
                    <div class="col-sm-12">
                      <input type="text" name="Hari_LahirAnak" class="form-control" placeholder="Hari Lahir Anak......">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="col-sm-12 control-label"><strong>Tanggal Lahir Anak</strong></label>
                      <div class="col-sm-12">
                        <input type="date" name="Tgl_LahirAnak" class="form-control">
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
                      <input type="text" name="Tempat_LahirAnak" class="form-control" placeholder="Tempat Lahir">
                    </div>
                  </div>
                </div>
                <div class="col-md-5">
                  <div class="form-group">
                    <label class="col-sm-12 control-label"><strong>Jenis Kelamin Anak</strong></label>
                    <div class="col-sm-12">
                      <div class="radio radio-info radio-inline">
                        <input type="radio" id="inlineRadio1" value="Laki-laki" name="Jenis_KelaminAnak" checked>
                        <label for="inlineRadio1"> Laki-Laki </label>
                      </div>
                      <div class="radio radio-info radio-inline">
                        <input type="radio" id="inlineRadio1" value="Perempuan" name="Jenis_KelaminAnak">
                        <label for="inlineRadio2"> Perempuan </label>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
              <div class="form-group">
                <label class="col-sm-4 control-label"><strong>Nama Anak</strong></label>
                <div class="col-sm-12">
                  <input type="text" name="Nama_Anak" class="form-control" placeholder="Nama Lengkap......">
                </div>
              </div>


              <div class="form-group">
                <label for="Nama_Ibu" class="col-sm-12 control-label"><strong>Nama Ibu</strong></label>
                <div class="col-sm-12">
                  <input type="text" name="Nama_Ibu" class="form-control" placeholder="Nama Ibu...">
                </div>
              </div>
              <div class="row">
                <div class="col-md-7">
                  <div class="form-group">
                    <label class="col-sm-12 control-label"><strong>NIK Ibu</strong></label>
                    <div class="col-sm-12">
                      <input type="text" name="NIK_Ibu" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="col-md-5">
                  <div class="form-group">
                    <label class="col-sm-12 control-label"><strong>Jenis Kelamin Ibu</strong></label>
                    <div class="col-sm-12">
                      <div class="radio radio-info radio-inline">
                        <input type="radio" id="inlineRadio1" value="Laki-laki" name="Jenis_KelaminIbu" checked>
                        <label for="inlineRadio1"> Laki-Laki </label>
                      </div>
                      <div class="radio radio-info radio-inline">
                        <input type="radio" id="inlineRadio1" value="Perempuan" name="Jenis_KelaminIbu">
                        <label for="inlineRadio2"> Perempuan </label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="col-sm-12 control-label"><strong>Tempat Lahir Ibu</strong></label>
                    <div class="col-sm-12">
                      <input type="text" name="Tempat_LahirIbu" class="form-control" placeholder="Tempat Lahir">
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="col-sm-12 control-label"><strong>Tanggal Lahir Ibu</strong></label>
                    <div class="col-sm-12">
                      <input type="date" name="Tanggal_LahirIbu" class="form-control" placeholder="Hari Lahir Ibu......">
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
                    <input type="text" name="Agama_Ibu" class="form-control" placeholder="Agama...">
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label class="col-sm-12 control-label"><strong>Pekerjaan Ibu</strong></label>
                  <div class="col-sm-12">
                    <input type="text" name="Pekerjaan_Ibu" class="form-control" placeholder="Pekerjaan......">
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-sm-6">
                  <label class="col-sm-12 control-label"><strong>Kampung Ibu</strong></label>
                  <div class="col-sm-12">
                    <input type="text" name="Kp_Ibu" class="form-control" placeholder="Kp...">
                  </div>
                </div>
                <div class="col-sm-3">
                  <label class="col-sm-12 control-label"><strong>Rt Ibu.</strong></label>
                  <div class="col-sm-12">
                    <input type="text" name="Rt_Ibu" class="form-control" placeholder="Rt...">
                  </div>
                </div>
                <div class="col-sm-3">
                  <label class="col-sm-12 control-label"><strong>Rw Ibu.</strong></label>
                  <div class="col-sm-12">
                    <input type="text" name="Rw_Ibu" class="form-control" placeholder="Rw...">
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-8 mt-3">
                <div class="form-group">
                  <label class="col-sm-12 control-label"><strong>Nama Pelapor</strong></label>
                  <div class="col-sm-12">
                    <input type="text" name="Nama_Pelapor" class="form-control" placeholder="Nama...">
                  </div>
                </div>
              </div>
              <div class="col-md-4 mt-3">
                <div class="form-group">
                  <label class="col-sm-12 control-label"><strong>Umur Pelapor</strong></label>
                  <div class="col-sm-12">
                    <input type="text" name="Umur_Pelapor" class="form-control" placeholder="Umur...">
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-12 control-label mt-4"><strong>Pekerjaan Pelapor</strong></label>
              <div class="col-sm-12">
                <input type="text" name="Pekerjaan_Pelapor" class="form-control" placeholder="Pekerjaan Pelapor...">
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label class="col-sm-12 control-label"><strong>Tempat Lahir Pelapor</strong></label>
                  <div class="col-sm-12">
                    <input type="text" name="Tempat_Lahir_Pelapor" class="form-control" placeholder="Tempat Lahir...">
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label class="col-sm-12 control-label"><strong>Tanggal Lahir Pelapor</strong></label>
                  <div class="col-sm-12">
                    <input type="date" name="Tanggal_Lahir_Pelapor" class="form-control" placeholder="Hari Lahir ......">
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-sm-6">
                  <label class="col-sm-12 control-label"><strong>Kampung Pelapor</strong></label>
                  <div class="col-sm-12">
                    <input type="text" name="Kp_Pelapor" class="form-control" placeholder="Kp...">
                  </div>
                </div>
                <div class="col-sm-3">
                  <label class="col-sm-12 control-label"><strong>Rt Pelapor.</strong></label>
                  <div class="col-sm-12">
                    <input type="text" name="Rt_Pelapor" class="form-control" placeholder="Rt...">
                  </div>
                </div>
                <div class="col-sm-3">
                  <label class="col-sm-12 control-label"><strong>Rw Pelapor.</strong></label>
                  <div class="col-sm-12">
                    <input type="text" name="Rw_Pelapor" class="form-control" placeholder="Rw...">
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 mt-4">
                <div class="form-group">
                  <label class="col-sm-12 control-label"><strong>Tanggal Surat</strong></label>
                  <div class="col-sm-12">
                    <input type="date" name="Tgl_Surat" class="form-control">
                  </div>
                </div>
              </div>
              <div class="col-md-8 mt-4">
                <div class="form-group">
                  <label class="col-sm-12 control-label"><strong>Kepala Desa</strong></label>
                  <div class="col-sm-12">
                    <input type="text" name="Nama_KepalaDesa" class="form-control" placeholder="Nama kepala desa...">
                  </div>
                </div>
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