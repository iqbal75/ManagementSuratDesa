<div class="container">
    <section class="content-header mt-3">
        <h1 style="color: #fff;">Detail
            <small>Surat Masuk</small>
        </h1>

        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb border-left-primary shadow p-3 mb-4 bg-white rounded">
                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>C_Dasboard">Home</a></li>
                <li class=" breadcrumb-item"><a href="<?php echo base_url(); ?>C_SMasuk">Surat Masuk</a></li>
                <li class=" breadcrumb-item active" aria-current="page">Detail</li>
            </ol>
        </nav>
    </section>
    <div class="container-body">
        <div class="col-xl-12 shadow bg-white p-3 mt-3 mb-3 rounded">
            <div class="row">

                <!-- Bagian Kiri -->
                <div class="col-md-6">
                    <?php foreach ($suratmasuk as $data) { ?>
                        <form action="<?php echo base_url(); ?>C_SMasuk/Update" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="Id_SMasuk" class="col-sm-12 control-label"> <strong>Id Surat</strong></label>
                                <div class="col-sm-6">
                                    <input type="text" name="Id_SMasuk" class="form-control" id="Id_SMasuk" value="<?= $data->Id_SMasuk ?>" readonly required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-12 control-label"><strong>Tanggal Penerimaan</strong></label>
                                <div class="col-sm-12">
                                    <input type="date" name="Tgl_Penerimaan" class="form-control" value="<?= $data->Tgl_Penerimaan ?>" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-12 control-label"><strong>No Surat Masuk</strong></label>
                                <div class="col-sm-12">
                                    <input type="text" name="No_SMasuk" class="form-control" placeholder="No_Surat" value="<?= $data->No_SMasuk ?>" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-12 control-label"><strong>Tanggal Surat</strong></label>
                                <div class="col-sm-12">
                                    <input type="date" name="Tanggal" class="form-control" value="<?= $data->Tanggal ?>" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-12 control-label"><strong>Pengirim</strong></label>
                                <div class="col-sm-12">
                                    <input type="text" name="Pengirim" class="form-control" value="<?= $data->Pengirim ?>" placeholder="Pengirim...">
                                </div>
                            </div>


                </div>


                <!-- Bagian Kanan -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-sm-12 control-label"><strong>Isi Singkat Surat</strong></label>
                        <div class="col-sm-12">
                            <textarea name="IsiSingkat" class="form-control" id="IsiSurat" cols="30" rows="10" placeholder="Isi Singkat Surat....."><?= $data->IsiSingkat ?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label"><strong>file Surat</strong></label>
                        <div class="col-sm-12">
                            <input type="file" name="fotopost">
                        </div>
                    </div>

                    <input type="hidden" name="filelama" value="<?php echo $data->foto ?>">




                </div>
                <!-- tutup row          -->
                <div class="row">
                    <div class="col-md-12 text-right">
                        <div class="form-group">
                            <div class="col-sm-12">
                                <a href="<?= base_url() ?>C_SMasuk" class="btn btn-primary ml-3" role="button"><i class="fas fa-reply-all"> Kembali</i></a>

                                <button type="submit" class="btn btn-primary ml-3" name="submit"><i class="fas fa-edit"> Change</i></button>

                            </div>
                        </div>
                    </div>
                </div>
                </form>
            <?php } ?>
            </div>

        </div>
    </div>
</div>