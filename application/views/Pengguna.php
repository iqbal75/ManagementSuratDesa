<?php include 'Template/Header.php'; ?>
<link href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css" rel="stylesheet">
<?php include 'Template/Navbar.php'; ?>


<div class="container-fluid">
  <!-- Page Heading -->
  <!-- content header -->
  <?php echo $this->session->flashdata('succes_save_kontak'); ?>
  <section class="content-header">
    <h1 style="color: #fff;">Edit
      <small> Pengguna</small>
    </h1>
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
      <ol class="breadcrumb border-left-primary shadow p-3 mb-4 bg-white rounded">
        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>C_Dasboard">Home</a></li>
        <li class=" breadcrumb-item active" aria-current="page">Edit Pengguna</li>
      </ol>
    </nav>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-lg-12">
        <div class="box shadow border-left-primary p-3 mb-5 bg-white rounded">


          <div class="box-header">

          </div>
          <!-- /.box-header -->
          <div class="box-body">


            <?php
            $no = 1;
            foreach ($pengguna as $data) :
            ?>

              <form class="form-horizontal" action="<?php echo base_url() . 'C_Pengguna/Update_Pengguna1' ?>" name="validasi_form" method="post" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="inputUserName" class="col-sm-4 control-label">Nama</label>
                      <div class="col-sm-12">
                        <input type="text" name="Nama_Pengguna" class="form-control" id="inputUserName" placeholder="Nama Lengkap" value="<?= $data->Nama_Pengguna ?>" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-4 control-label">Email</label>
                      <div class="col-sm-12">
                        <input type="email" name="Email" class="form-control" id="inputEmail3" placeholder="Email" value="<?= $data->Email ?>" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputUserName" class="col-sm-4 control-label">Jenis Kelamin</label>
                      <div class="col-sm-7">
                        <?php if ($data->Jenis_Kelamin == 'L') : ?>
                          <div class="radio radio-info radio-inline">
                            <input type="radio" id="inlineRadio1" value="L" name="Jenis_Kelamin" checked>
                            <label for="inlineRadio1"> Laki-Laki </label>
                          </div>
                          <div class="radio radio-info radio-inline">
                            <input type="radio" id="inlineRadio1" value="P" name="Jenis_Kelamin">
                            <label for="inlineRadio2"> Perempuan </label>
                          </div>
                        <?php else : ?>
                          <div class="radio radio-info radio-inline">
                            <input type="radio" id="inlineRadio1" value="L" name="Jenis_Kelamin">
                            <label for="inlineRadio1"> Laki-Laki </label>
                          </div>
                          <div class="radio radio-info radio-inline">
                            <input type="radio" id="inlineRadio1" value="P" name="Jenis_Kelamin" checked>
                            <label for="inlineRadio2"> Perempuan </label>
                          </div>
                        <?php endif; ?>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputUserName" class="col-sm-4 control-label">Photo</label>
                      <div class="col-sm-7">

                        <input type="file" name="fotopost" value="<?= $data->foto ?>" class="mb-3" id="gambar">
                        <!-- <img src="<?= base_url() ?>assets/gambar/pengguna/<?= $data->foto ?>" alt="foto" width=100rem> -->
                        <script type="text/javascript">
                          document.getElementById("gambar").onchange = function() {
                            var reader = new FileReader();

                            reader.onload = function(e) {
                              // get loaded data and render thumbnail.
                              document.getElementById("image").src = e.target.result;
                            };

                            // read the image file as a data URL.
                            reader.readAsDataURL(this.files[0]);
                          };
                        </script>
                        <img id="image" width=150rem alt="Preview Gambar" src="<?= base_url() ?>assets/gambar/pengguna/<?= $data->foto ?>" style="align:center">
                      </div>

                    </div>

                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="inputUserName" class="col-sm-4 control-label">Username</label>
                      <div class="col-sm-12">
                        <input type="text" name="username" class="form-control" id="inputUserName" placeholder="Username" value="<?= $data->username ?>" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Password</label>
                      <div class="col-sm-12">
                        <input type="password" name="password" class="form-control" id="Password" value="<?= $data->password ?>" placeholder="Password" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Ulangi Password</label>
                      <div class="col-sm-12">
                        <input type="password" onchange="checkPass()" name="RetryPassword" class="form-control" id="RetryPassword" placeholder="Ulangi Password" value="<?= $data->RetryPassword ?>" required>
                        <span id="pesan" class="pesan-confirm"></span>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputUserName" class="col-sm-4 control-label">Kontak Person</label>
                      <div class="col-sm-12">
                        <input type="text" name="Kontak" onchange="checkPass()" class="form-control" id="inputKontak" placeholder="Kontak Person" value="<?= $data->Kontak ?>" required>
                      </div>
                    </div>
                    <div class="form-group">

                      <input type="hidden" name="filelama" value="<?php echo $data->foto ?>">
                      <!-- ID -->
                      <input type="hidden" name="Id_Pengguna" value="<?= $data->Id_Pengguna ?>">
                    </div>

                  </div>
                  <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-danger btn-flat" data-dismiss="modal">Close</button> -->
                    <button type="submit" class="btn btn-primary" id="simpan" name="daftar_process">Simpan</button>
                  </div>
              </form>
          </div>
        </div>



      <?php endforeach ?>

      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
</div>
<!-- /.col -->
</div>
<!-- /.row -->
</section>









<script type="text/javascript">
  function checkPass() {
    var pas1 = document.getElementById('Password');
    var pas2 = document.getElementById('RetryPassword');


    var message = document.getElementById('pesan');
    //inisialisasi warna didalam variabel
    var warnabenar = "#66cc66";
    var warnasalah = "#ff6666";
    //membandingkan 2 variabel


    if (pas1.value == pas2.value) {
      //ketika password benar 
      //ubah menjadi warna jelek
      //memeberi peringatanya bahwa benar
      document.validasi_form.daftar_process.disabled = false;
      pas2.style.backgroundColor = warnabenar;
      message.style.color = warnabenar;
      message.innerHTML = ""
    } else {
      //ini ketika password tidak cocok
      //ubah menjadi warna jelek
      //memeberi peringatanya bahwa salah dengan tanda seru
      document.validasi_form.daftar_process.disabled = true;
      alert("Password tidak Cocok!");
      pas2.style.backgroundColor = warnasalah;
      message.style.color = warnasalah;
      message.innerHTML = "!!!!!!!!"
    }
  }
</script>





<?php include 'Template/Created.php'; ?>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js"></script>
<?php include 'Template/Footer.php'; ?>