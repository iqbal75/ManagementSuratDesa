<!-- Modal input data-->
<div class="modal fade" id="SMasuk" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                        <form action="<?php echo base_url() . 'C_SMasuk/Upload' ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="Id_SMasuk" class="col-sm-12 control-label"> <strong>Id Surat</strong></label>
                                <div class="col-sm-6">
                                    <input type="text" name="Id_SMasuk" class="form-control" id="Id_SMasuk" value="SMDG<?= sprintf("%04s", $Id_SMasuk) ?>" readonly required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-12 control-label"><strong>Tanggal Penerimaan</strong></label>
                                <div class="col-sm-12">
                                    <input type="date" name="Tgl_Penerimaan" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-12 control-label"><strong>No Surat Masuk</strong></label>
                                <div class="col-sm-12">
                                    <input type="text" name="No_SMasuk" class="form-control" placeholder="No_Surat" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-12 control-label"><strong>Tanggal Surat</strong></label>
                                <div class="col-sm-12">
                                    <input type="date" name="Tanggal" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-12 control-label"><strong>Pengirim</strong></label>
                                <div class="col-sm-12">
                                    <input type="text" name="Pengirim" class="form-control" placeholder="Pengirim...">
                                </div>
                            </div>
                    </div>


                    <!-- Bagian Kanan -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="col-sm-12 control-label"><strong>Isi Singkat Surat</strong></label>
                            <div class="col-sm-12">
                                <textarea name="IsiSingkat" class="form-control" id="IsiSurat" cols="30" rows="10" placeholder="Isi Singkat Surat....."></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label"><strong>file Surat</strong></label>
                            <div class="col-sm-12">
                                <input type="file" name="fotopost">
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