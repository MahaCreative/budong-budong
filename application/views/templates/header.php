<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $title ?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/adminlte.min.css">

  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>

    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a hidden class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="<?= base_url() ?>assets/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="<?= base_url() ?>assets/dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="<?= base_url() ?>assets/dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a hidden class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= site_url('login/logout') ?>" role="button">
          <i class="fas fa-lock"></i>
        </a>

      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url() ?>assets/index3.html" class="brand-link">
      <img src="<?= base_url() ?>assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Layanan Publik</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url() ?>assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?= ucwords($this->session->userdata('username')) ?></a>
        </div>
      </div>


      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <li class="nav-item">
            <a href="<?= site_url('dashboard') ?>" class="nav-link <?= $this->uri->segment(1) == 'dashboard'?'active':'' ?>">
              <i class="nav-icon fas fa-home"></i>
              <p>
                HOME
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= site_url('master_data') ?>" class="nav-link <?= $this->uri->segment(1) == 'master_data'?'active':'' ?>">
              <i class="nav-icon fas fa-th"></i>
              <p>
                MASTER DATA
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          <li class="nav-item <?= $this->uri->segment(1) == 'layanan'?'menu-open':'' ?>">
           <a href="#" class="nav-link <?= $this->uri->segment(1) == 'layanan'?'active':'' ?>">
             <i class="nav-icon fas fa-file"></i>
             <p>
               PELAYANAN ADM
               <i class="right fas fa-angle-left"></i>
             </p>
           </a>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="<?= site_url('layanan/ektp') ?>" class="nav-link <?= $this->uri->segment(2) == 'ektp'?'active':'' ?>">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Permohonan EKTP</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="<?= site_url('layanan/dispensasi_nikah') ?>" class="nav-link <?= $this->uri->segment(2) == 'dispensasi_nikah'?'active':'' ?>">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Dispensasi Nikah</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="<?= site_url('layanan/rekomendasi_bantuan') ?>" class="nav-link <?= $this->uri->segment(2) == 'rekomendasi_bantuan'?'active':'' ?>">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Rekomendasi Bantuan</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="<?= site_url('layanan/umkm') ?>" class="nav-link <?= $this->uri->segment(2) == 'umkm'?'active':'' ?>">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Surat Izin Usaha</p>
               </a>
             </li>
           </ul>
         </li>

         <li class="nav-item <?= $this->uri->segment(1) == 'laporan'?'menu-open':'' ?>">
          <a href="#" class="nav-link <?= $this->uri->segment(1) == 'laporan'?'active':'' ?>">
            <i class="nav-icon fas fa-file"></i>
            <p>
              LAPORAN
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= site_url('laporan/lektp') ?>" class="nav-link <?= $this->uri->segment(2) == 'lektp'?'active':'' ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Dokumen EKTP</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= site_url('laporan/ldispensasi_nikah') ?>" class="nav-link <?= $this->uri->segment(2) == 'ldispensasi_nikah'?'active':'' ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Dispensasi Nikah</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= site_url('laporan/lrekomendasi_bantuan') ?>" class="nav-link <?= $this->uri->segment(2) == 'lrekomendasi_bantuan'?'active':'' ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Rekomendasi Bantuan</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= site_url('laporan/lumkm') ?>" class="nav-link <?= $this->uri->segment(2) == 'lumkm'?'active':'' ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Surat Izin Usaha</p>
              </a>
            </li>

          </ul>
        </li>






        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?= $title ?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <?php if(isset($nav[0])): ?>
                <li class="breadcrumb-item"><a href="javascript:void(0)"><?= $nav[0] ?></a></li>
              <?php endif; ?>
              <?php if(isset($nav[1])): ?>
                <li class="breadcrumb-item"><a href="javascript:void(0)"><?= $nav[1] ?></a></li>
              <?php endif; ?>
              <?php if(isset($nav[2])): ?>
                <li class="breadcrumb-item active"><?= $nav[2] ?></li>
              <?php endif; ?>

            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
