<div class="container">
    <section class="content-header mt-3">
        <h1 style="color: #fff;">Detail
            <small>Surat Keluar</small>
        </h1>
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb border-left-primary shadow p-3 mb-4 bg-white rounded">
                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>C_Dasboard">Home</a></li>
                <li class=" breadcrumb-item"><a href="<?php echo base_url(); ?>C_SKeluar">Surat Keluar</a></li>
                <li class=" breadcrumb-item active" aria-current="page">Detail</li>
            </ol>
        </nav>

    </section>
    <div class="container-body">
        <div class="col-xl-12 shadow bg-white p-3 mt-3 mb-3 rounded">
            <div class="row">
                <?php foreach ($suratkeluar as $data) { ?>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="Id_Surat" class="col-sm-12 control-label"> <strong>Id Surat</strong></label>
                            <div class="col-sm-12">
                                <input type="text" name="Id_Surat" class="form-control" id="Id_Surat" value="<?= $data->Id_Surat ?>" readonly required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Tgl_Surat" class="col-sm-12 control-label"><strong>Tanggal Surat</strong></label>
                            <div class="col-sm-12">
                                <input type="text" name="Tgl_Surat" class="form-control" id="Tgl_Surat" value="<?= date('d F Y', strtotime($data->Tgl_Surat));  ?>" readonly required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="No_Surat" class="col-sm-12 control-label"> <strong>No Surat</strong></label>
                            <div class="col-sm-12">
                                <input type="text" name="No_Surat" class="form-control" id="No_Surat" value="<?= $data->No_Surat ?>" readonly required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Jenis_Surat" class="col-sm-12 control-label"> <strong>Jenis Surat</strong></label>
                            <div class="col-sm-12">
                                <input type="text" name="Jenis_Surat" class="form-control" id="Jenis_Surat" value="<?= $data->Jenis_Surat ?>" readonly required>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="Nama_Pengaju" class="col-sm-12 control-label"> <strong>Nama Pengaju</strong></label>
                            <div class="col-sm-12">
                                <input type="text" name="Nama_Pengaju" class="form-control" id="Nama_Pengaju" value="<?= $data->Nama_Pengaju ?>" readonly required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="TTL" class="col-sm-12 control-label"> <strong>Tempat Tanggal Lahir</strong></label>
                            <div class="col-sm-12">
                                <input type="text" name="TTL" class="form-control" id="TTL" value="<?= $data->TTL ?>" readonly required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Pekerjaan" class="col-sm-12 control-label"> <strong>Pekerjaan Pengaju</strong></label>
                            <div class="col-sm-12">
                                <input type="text" name="Pekerjaan" class="form-control" id="Pekerjaan" value="<?= $data->Pekerjaan ?>" readonly required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Alamat" class="col-sm-12 control-label"> <strong>Alamat Pengaju</strong></label>
                            <div class="col-sm-12">
                                <textarea name="Alamat" id="" class="form-control" cols="30" rows="3" readonly required><?= $data->Alamat ?></textarea>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <!-- tutup row          -->
            <div class="row">
                <div class="container-fluid">
                    <div class="col md-12">
                        <a href="<?= base_url() ?>C_SKeluar" class="btn btn-primary" role="button"><i class="fas fa-reply-all"> Kembali</i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>