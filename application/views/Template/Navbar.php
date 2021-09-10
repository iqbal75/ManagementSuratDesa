</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->


      <!-- Divider -->


      <div class="container-fluid">
        <div class="row justify-content-center mt-2 mb-2">
          <img src="<?= base_url() ?>assets/gambar/pengguna/<?php echo $this->session->userdata('foto'); ?>" class="img-profile rounded-circle img-thumbnail-light shadow" width="50%">

          <div class="" style="color: #fff; text-align: center;"><strong><?php echo $this->session->userdata('Nama_Pengguna'); ?></strong></div>

        </div>
      </div>




      <hr class="sidebar-divider my-0">
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>C_Dasboard">
          <i class="fas fa-home"></i>
          <span>Home</span></a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>C_Slider">
          <i class="fa fa-camera-retro"></i>
          <span>Slider Image</span></a>
      </li> -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>C_PJSurat">
          <i class="fas fa-pencil-alt"></i>
          <span>Buat Surat</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>C_MSurat">
          <i class="fas fa-mail-bulk"></i>
          <span>Manajemen Surat</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>C_SMasuk">
          <i class="fas fa-paper-plane"></i>
          <span>Surat Masuk</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>C_SKeluar">
          <i class="fas fa-paper-plane"></i>
          <span>Surat Keluar </span></a>
      </li>

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->

      <div id="content" style="background-image: url('<?= base_url("assets/gambar/bg2.jpg") ?>'); position: relative; background-size: cover; background-position: center;background-repeat: no-repeat;">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">

            <img src="<?php echo base_url() . 'assets/gambar/LogoDesa1.png' ?>" width="15%">
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <div class="topbar-divider d-none d-sm-block"></div>
            <!-- Nav Item - User Information -->
            <!-- <li class="nav-item dropdown no-arrow">
              <h2><?php echo $this->session->userdata("nama"); ?></h2>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">

                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>  
            </li>  -->


            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <!-- <span class="mr-2 d-none d-lg-inline text-gray-600 large">Valerie Luna</span> -->
                <span class="mr-2 d-none d-lg-inline text-gray-600 large" style="font-weight: 600;">
                  <?php echo $this->session->userdata('Nama_Pengguna'); ?></span>
                <img src="<?= base_url() ?>assets/gambar/pengguna/<?php echo $this->session->userdata('foto'); ?>" class="img-profile rounded-circle">
              </a>

              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <div class="box box-widget" style="width: 20rem;">
                  <center>
                    <input type="hidden" name="Id_Pengguna" value="<?= $this->session->userdata('Id_Pengguna'); ?>">
                    <img src="<?= base_url() ?>assets/gambar/pengguna/<?php echo $this->session->userdata('foto'); ?>" class="img-profile rounded-circle img-thumbnail" width="50%"><br>
                    <span class="mr-2 d-none d-lg-inline text-gray-600 large">
                      <h3 class="text-gray-600"><?php echo $this->session->userdata('Nama_Pengguna'); ?> </h3>
                    </span>
                    <span class="mr-2 d-none d-lg-inline text-gray-600 large"><?php echo $this->session->userdata('Email'); ?></span>
                  </center>
                </div>


                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?= base_url() ?>C_Pengguna/Edit_Pengguna1/<?= $this->session->userdata('Id_Pengguna') ?>/<?= $this->session->userdata('foto'); ?>" role="button">
                  <i class="fa fa-paint-brush mr-2 text-gray-400" aria-hidden="true"></i>
                  Edit Profile
                </a>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>
          </ul>
        </nav>