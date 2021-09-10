<?php include 'Template/Header.php'; ?>
<?php include 'Template/Navbar.php'; ?>
<!-- Begin Page Content -->
<div class="container">
  <section class="content-header mt-2">
    <h1 style="color: #fff;">Home
      <small></small>
    </h1>

    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
      <ol class="breadcrumb border-left-primary shadow p-3 mb-4 bg-white rounded">
        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>C_Dasboard">Home</a></li>
      </ol>
    </nav>
  </section>
  <section class="content-body border-left-primary shadow p-3 mb-3 bg-white rounded">
    <h1 class="text-gray-500 text-center"><strong>Pemerintah Desa Gandasoli</strong></h1>
    <h2 class="text-gray-500 text-center"><strong>Kecamatan Tanjungsiang</strong></h2>
    <h2 class="text-gray-500 text-center"><strong>Subang Jawa Barat</strong></h2>
  </section>
  <div class="row">
    <div class="col-md-6">
      <div class="card shadow p-3 mb-3 bg-white rounded">
        <div class="card-body">
          <div class="row text-center">
            <div class="col-md-4">
              <i class="fas fa-paper-plane fa-6x text-gray"></i>
            </div>
            <div class="col-md-8">
              <div class="row text-center">
                <div class="col-md-12">
                  <h4><strong>Jumlah Surat Keluar</strong></h4>
                </div>
              </div>
              <div class="row text-center">
                <div class="col-md-12">
                  <?php
                  $query = $this->db->query("SELECT * FROM suratkeluar ");
                  $jmlk = $query->num_rows();
                  ?>
                  <strong>
                    <h1 style="font-weight: bold; color:blue;"><?php echo $jmlk; ?></h1>
                  </strong>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card shadow p-3 mb-3 bg-white rounded">
        <div class="card-body">
          <div class="row text-center">
            <div class="col-md-4">
              <i class="fas fa-paper-plane fa-6x text-gray"></i>
            </div>
            <div class="col-md-8">
              <div class="row text-center">
                <div class="col-md-12">
                  <h4><strong>Jumlah Surat Masuk</strong></h4>
                </div>
              </div>
              <div class="row text-center">
                <div class="col-md-12">
                  <?php
                  $query = $this->db->query("SELECT * FROM suratmasuk ");
                  $jmlm = $query->num_rows();
                  ?>
                  <strong>
                    <h1 style="font-weight: bold; color:blue;"><?php echo $jmlm; ?></h1>
                  </strong>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- <script>
    window.print();
  </script> -->
<!-- End Page Content -->
<?php include 'Template/Created.php'; ?>
<?php include 'Template/Footer.php'; ?>