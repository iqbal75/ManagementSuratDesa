<?php include 'Template/Header.php'; ?>
<?php include 'Template/Navbar.php'; ?>
<!-- Begin Page Content -->
<div class="container mt-3">
  <section class="content-header">
    <h1 style="color: #fff;">Buat
      <small>Surat</small>
    </h1>

    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
      <ol class="breadcrumb border-left-primary shadow p-3 mb-4 bg-white rounded">
        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>C_Dasboard">Home</a></li>
        <li class=" breadcrumb-item active" aria-current="page">Buat Surat</li>
      </ol>
    </nav>
  </section>
  <section class="content-body shadow p-3 mb-3 rounded" style=" background: linear-gradient(rgba(248, 248, 255, 0.1), rgba(248, 248, 255, 0.1)) fixed center center;">
    <div class="row">


      <!-- Pengunjung Crome -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card1 shadow rounded h-100 py-2" style="background-image: linear-gradient(to right top, #e04ea1, #c953af, #af59b9, #915fc0, #6f63c2, #5871cd, #3a7ed5, #008ad9, #00a4e6, #00bce9, #00d2e4, #23e7db); border: none; ">

          <div class="card-body">
            <!-- <div class="row no-gutters align-items-center">
                    <div class="col-sm-12 mr-2">
                      <h5 class="font-weight-bold text-white">CROME</h5>
                      
                    </div>
                  </div> -->
            <div class="row no-gutters align-items-center">
              <div class="col-sm-4 text-center">
                <!-- <i class="fab fa-chrome"></i> -->
                <i class="fa fa-road fa-2x text-white" style="font-size: 70px; opacity: 0.9;  ">
                </i>
              </div>
              <div class="col-sm-8">
                <div class="h5 mb-0 ml-3 font-weight-bold text-white text-center">
                  <h5 class="font-weight-bold"><a data-toggle="modal" data-target="#SJalan" style="cursor: pointer;"> Surat Jalan </a></h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>




      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card shadow rounded h-100 py-2" style="background-image: linear-gradient(to right top, #e04ea1, #c953af, #af59b9, #915fc0, #6f63c2, #5871cd, #3a7ed5, #008ad9, #00a4e6, #00bce9, #00d2e4, #23e7db); border: none; ">
          <div class="card-body">
            <!-- <div class="row no-gutters align-items-center">
                    <div class="col-sm-12 mr-2">
                      <h5 class="font-weight-bold text-white">CROME</h5>
                      
                    </div>
                  </div> -->
            <div class="row no-gutters align-items-center">
              <div class="col-sm-4 text-center">
                <!-- <i class="fab fa-chrome"></i> -->
                <i class="far fa-id-card fa-2x text-white" style="font-size: 70px; opacity: 0.9;  ">
                </i>
              </div>
              <div class="col-sm-8">
                <div class="h5 mb-0 ml-3 font-weight-bold text-white text-center">
                  <h5 class="font-weight-bold"><a data-toggle="modal" data-target="#SRKip" style="cursor: pointer;">Permohonan KIP</a></h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>



      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card shadow rounded h-100 py-2" style="background-image: linear-gradient(to right top, #e04ea1, #c953af, #af59b9, #915fc0, #6f63c2, #5871cd, #3a7ed5, #008ad9, #00a4e6, #00bce9, #00d2e4, #23e7db); border: none; ">
          <div class="card-body">
            <!-- <div class="row no-gutters align-items-center">
                    <div class="col-sm-12 mr-2">
                      <h5 class="font-weight-bold text-white">CROME</h5>
                      
                    </div>
                  </div> -->
            <div class="row no-gutters align-items-center">
              <div class="col-sm-4 text-center">
                <!-- <i class="fab fa-chrome"></i> -->
                <i class="far fa-id-card fa-2x text-white" style="font-size: 70px; opacity: 0.9;  ">
                </i>
              </div>
              <div class="col-sm-8">
                <div class="h5 mb-0 ml-3 font-weight-bold text-white text-center">
                  <h5 class="font-weight-bold"><a data-toggle="modal" data-target="#SKKip" style="cursor: pointer;">Keterangan Kehilangan Kartu KIP</a></h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>




      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card shadow rounded h-100 py-2" style="background-image: linear-gradient(to right top, #e04ea1, #c953af, #af59b9, #915fc0, #6f63c2, #5871cd, #3a7ed5, #008ad9, #00a4e6, #00bce9, #00d2e4, #23e7db); border: none; ">
          <div class="card-body">
            <!-- <div class="row no-gutters align-items-center">
                    <div class="col-sm-12 mr-2">
                      <h5 class="font-weight-bold text-white">CROME</h5>
                      
                    </div>
                  </div> -->
            <div class="row no-gutters align-items-center">
              <div class="col-sm-4 text-center">
                <!-- <i class="fab fa-chrome"></i> -->
                <i class="far fa-address-card fa-2x text-white" style="font-size: 70px; opacity: 0.9;  ">
                </i>
              </div>
              <div class="col-sm-8">
                <div class="h5 mb-0 ml-3 font-weight-bold text-white text-center">
                  <h5 class="font-weight-bold"><a data-toggle="modal" data-target="#KTPSementara" style="cursor: pointer;">KTP Sementara</a></h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>







      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card shadow rounded h-100 py-2" style="background-image: linear-gradient(to right top, #e04ea1, #c953af, #af59b9, #915fc0, #6f63c2, #5871cd, #3a7ed5, #008ad9, #00a4e6, #00bce9, #00d2e4, #23e7db); border: none;  ">
          <div class="card-body">
            <!-- <div class="row no-gutters align-items-center">
                    <div class="col-sm-12 mr-2">
                      <h5 class="font-weight-bold text-white">CROME</h5>
                      
                    </div>
                  </div> -->
            <div class="row no-gutters align-items-center">
              <div class="col-sm-4 text-center">
                <!-- <i class="fab fa-chrome"></i> -->
                <i class="fas fa-graduation-cap fa-2x text-white" style="font-size: 70px; opacity: 0.9;  ">
                </i>
              </div>
              <div class="col-sm-8">
                <div class="h5 mb-0 ml-3 font-weight-bold text-white text-center">
                  <h5 class="font-weight-bold"><a data-toggle="modal" data-target="#SKTMASekolah" style="cursor: pointer;">SKTM Anak Sekolah</a></h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card shadow rounded h-100 py-2" style="background-image: linear-gradient(to right top, #e04ea1, #c953af, #af59b9, #915fc0, #6f63c2, #5871cd, #3a7ed5, #008ad9, #00a4e6, #00bce9, #00d2e4, #23e7db); border: none;  ">
          <div class="card-body">
            <!-- <div class="row no-gutters align-items-center">
                    <div class="col-sm-12 mr-2">
                      <h5 class="font-weight-bold text-white">CROME</h5>
                      
                    </div>
                  </div> -->
            <div class="row no-gutters align-items-center">
              <div class="col-sm-4 text-center">
                <!-- <i class="fab fa-chrome"></i> -->
                <i class="fas fa-users fa-2x text-white" style="font-size: 70px; opacity: 0.9;  ">
                </i>
              </div>
              <div class="col-sm-8">
                <div class="h5 mb-0 ml-3 font-weight-bold text-white text-center">
                  <h5 class="font-weight-bold"><a data-toggle="modal" data-target="#SKTMBiasa" style="cursor: pointer;">SKTM Biasa / Umum</a></h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>



      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card shadow rounded h-100 py-2" style="background-image: linear-gradient(to right top, #e04ea1, #c953af, #af59b9, #915fc0, #6f63c2, #5871cd, #3a7ed5, #008ad9, #00a4e6, #00bce9, #00d2e4, #23e7db); border: none;  ">
          <div class="card-body">
            <!-- <div class="row no-gutters align-items-center">
                    <div class="col-sm-12 mr-2">
                      <h5 class="font-weight-bold text-white">CROME</h5>
                      
                    </div>
                  </div> -->
            <div class="row no-gutters align-items-center">
              <div class="col-sm-4 text-center">
                <!-- <i class="fab fa-chrome"></i> -->
                <i class="fas fa-volleyball-ball fa-2x text-white" style="font-size: 70px; opacity: 0.9;  ">
                </i>
              </div>
              <div class="col-sm-8">
                <div class="h5 mb-0 ml-3 font-weight-bold text-white text-center">
                  <h5 class="font-weight-bold"><a data-toggle="modal" data-target="#SIzinKegiatan" style="cursor: pointer;">Ijin Kegiatan</a></h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>



      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card shadow rounded h-100 py-2" style="background-image: linear-gradient(to right top, #e04ea1, #c953af, #af59b9, #915fc0, #6f63c2, #5871cd, #3a7ed5, #008ad9, #00a4e6, #00bce9, #00d2e4, #23e7db); border: none;  ">
          <div class="card-body">
            <!-- <div class="row no-gutters align-items-center">
                    <div class="col-sm-12 mr-2">
                      <h5 class="font-weight-bold text-white">CROME</h5>
                      
                    </div>
                  </div> -->
            <div class="row no-gutters align-items-center">
              <div class="col-sm-4 text-center">
                <!-- <i class="fab fa-chrome"></i> -->
                <i class="fas fa-certificate fa-2x text-white" style="font-size: 70px; opacity: 0.9;  ">
                </i>
              </div>
              <div class="col-sm-8">
                <div class="h5 mb-0 ml-3 font-weight-bold text-white text-center">
                  <h5 class="font-weight-bold"><a data-toggle="modal" data-target="#SKKIzajah" style="cursor: pointer;">Keterangan Kehilangan Izajah</a></h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>




      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card shadow rounded h-100 py-2" style="background-image: linear-gradient(to right top, #e04ea1, #c953af, #af59b9, #915fc0, #6f63c2, #5871cd, #3a7ed5, #008ad9, #00a4e6, #00bce9, #00d2e4, #23e7db); border: none;  ">
          <div class="card-body">
            <!-- <div class="row no-gutters align-items-center">
                    <div class="col-sm-12 mr-2">
                      <h5 class="font-weight-bold text-white">CROME</h5>
                      
                    </div>
                  </div> -->
            <div class="row no-gutters align-items-center">
              <div class="col-sm-4 text-center">
                <!-- <i class="fab fa-chrome"></i> -->
                <i class="fas fa-home fa-2x text-white" style="font-size: 70px; opacity: 0.9;  ">
                </i>
              </div>
              <div class="col-sm-8">
                <div class="h5 mb-0 ml-3 font-weight-bold text-white text-center">
                  <h5 class="font-weight-bold"><a data-toggle="modal" data-target="#SKDomisili" style="cursor: pointer;">Keterangan Domisili</a></h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card shadow rounded h-100 py-2" style="background-image: linear-gradient(to right top, #e04ea1, #c953af, #af59b9, #915fc0, #6f63c2, #5871cd, #3a7ed5, #008ad9, #00a4e6, #00bce9, #00d2e4, #23e7db); border: none;  ">
          <div class="card-body">
            <!-- <div class="row no-gutters align-items-center">
                    <div class="col-sm-12 mr-2">
                      <h5 class="font-weight-bold text-white">CROME</h5>
                      
                    </div>
                  </div> -->
            <div class="row no-gutters align-items-center">
              <div class="col-sm-4 text-center">
                <!-- <i class="fab fa-chrome"></i> -->
                <i class="fas fa-address-card fa-2x text-white" style="font-size: 70px; opacity: 0.9;  ">
                </i>
              </div>
              <div class="col-sm-8">
                <div class="h5 mb-0 ml-3 font-weight-bold text-white text-center">
                  <h5 class="font-weight-bold"><a data-toggle="modal" data-target="#SKKKK" style="cursor: pointer;">Kehilangan KK</a></h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>



      <!-- <div class="col-xl-3 col-md-6 mb-4">
              <div class="card shadow rounded h-100 py-2" style="background-image: linear-gradient(to right top, #e04ea1, #c953af, #af59b9, #915fc0, #6f63c2, #5871cd, #3a7ed5, #008ad9, #00a4e6, #00bce9, #00d2e4, #23e7db); border: none;  ">
                <div class="card-body">
                  
                  <div class="row no-gutters align-items-center">
                        <div class="col-sm-4 text-center"> 
                          
                            <i class="fab fa-chrome fa-2x text-white" style="font-size: 70px; opacity: 0.9;  ">
                            </i>
                        </div>
                    <div class="col-sm-8">
                      <div class="h5 mb-0 ml-3 font-weight-bold text-white text-center">
                        <h5 class="font-weight-bold">Surat Kematian</h5>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->



      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card shadow rounded h-100 py-2" style="background-image: linear-gradient(to right top, #e04ea1, #c953af, #af59b9, #915fc0, #6f63c2, #5871cd, #3a7ed5, #008ad9, #00a4e6, #00bce9, #00d2e4, #23e7db ); border: none;">
          <div class="card-body">

            <div class="row no-gutters align-items-center">
              <div class="col-sm-4 text-center">

                <i class="fas fa-birthday-cake fa-2x text-white" style="font-size: 70px; opacity: 0.9;  ">
                </i>
              </div>
              <div class="col-sm-8">
                <div class="h5 mb-0 ml-3 font-weight-bold text-white text-center">
                  <h5 class="font-weight-bold"><a data-toggle="modal" data-target="#SKelahiran" style="cursor: pointer;">Surat Kelahiran</a></h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>




      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card shadow rounded h-100 py-2" style="background-image: linear-gradient(to right top, #e04ea1, #c953af, #af59b9, #915fc0, #6f63c2, #5871cd, #3a7ed5, #008ad9, #00a4e6, #00bce9, #00d2e4, #23e7db); border: none;  ">
          <div class="card-body">
            <!-- <div class="row no-gutters align-items-center">
                    <div class="col-sm-12 mr-2">
                      <h5 class="font-weight-bold text-white">CROME</h5>
                      
                    </div>
                  </div> -->
            <div class="row no-gutters align-items-center">
              <div class="col-sm-4 text-center">
                <!-- <i class="fab fa-chrome"></i> -->
                <i class="fas fa-shield-virus fa-2x text-white" style="font-size: 70px; opacity: 0.9;  ">
                </i>
              </div>
              <div class="col-sm-8">
                <div class="h5 mb-0 ml-3 font-weight-bold text-white text-center">
                  <h5 class="font-weight-bold"><a data-toggle="modal" data-target="#SBCovid" style="cursor: pointer;">Bebas Covid-19</a></h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card shadow rounded h-100 py-2" style="background-image: linear-gradient(to right top, #e04ea1, #c953af, #af59b9, #915fc0, #6f63c2, #5871cd, #3a7ed5, #008ad9, #00a4e6, #00bce9, #00d2e4, #23e7db); border: none;  ">
          <div class="card-body">
            <!-- <div class="row no-gutters align-items-center">
                    <div class="col-sm-12 mr-2">
                      <h5 class="font-weight-bold text-white">CROME</h5>
                      
                    </div>
                  </div> -->
            <div class="row no-gutters align-items-center">
              <div class="col-sm-4 text-center">
                <!-- <i class="fab fa-chrome"></i> -->
                <i class="fas fa-child fa-2x text-white" style="font-size: 70px; opacity: 0.9;  ">
                </i>
              </div>
              <div class="col-sm-8">
                <div class="h5 mb-0 ml-3 font-weight-bold text-white text-center">
                  <h5 class="font-weight-bold"><a data-toggle="modal" data-target="#SKBNikah" style="cursor: pointer;">Keteranagn Belum Menikah</a></h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


    </div>
  </section>
</div>
<!-- <script>
    window.print();
  </script> -->
<!-- End Page Content -->
<?php include 'SKTMASekolah/Mdl_SKTMASekolah.php'; ?>
<?php include 'SKTMBiasa/Mdl_SKTMBiasa.php'; ?>
<?php include 'KTPSementara/Mdl_KTPSementara.php'; ?>
<?php include 'SRKip/Mdl_SRKip.php'; ?>
<?php include 'SIzinKegiatan/Mdl_SIzinKegiatan.php'; ?>
<?php include 'SKKip/Mdl_SKKip.php'; ?>
<?php include 'SJalan/Mdl_SJalan.php'; ?>
<?php include 'SKKIzajah/Mdl_SKKIzajah.php'; ?>
<?php include 'SKDomisili/Mdl_SKDomisili.php'; ?>
<?php include 'SKKKK/Mdl_SKKKK.php'; ?>
<?php include 'SBCovid/Mdl_SBCovid.php'; ?>
<?php include 'SKBNikah/Mdl_SKBNikah.php'; ?>
<?php include 'SKelahiran/Mdl_SKelahiran.php'; ?>



<?php include 'Template/Created.php'; ?>
<?php include 'Template/Footer.php'; ?>