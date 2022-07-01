<body class="hold-transition sidebar-mini">
<div class="wrapper">

 

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url('dashboard') ?>" class="brand-link">
      <img src="<?= base_url('assets/template/') ?>dist/img/logorent.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">ForYour Rent</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url('assets/template/') ?>dist/img/avatar.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="<?= base_url('dashboard') ?>" class="d-block">Deva Pramidias Maulana</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <li class="nav-item">
                <a href="<?= base_url('dashboard') ?>" class="nav-link ">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>Dashboard</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('Rentalmobil/tambah') ?>" class="nav-link ">
                  <i class="nav-icon fas fa-car"></i>
                  <p>Rental Mobil</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('Motor_c/tambah') ?>" class="nav-link ">
                  <i class="nav-icon fas fa-solid fa-motorcycle"></i>
                  <p>Rental Motor</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('Minibus_c/tambah') ?>" class="nav-link ">
                  <i class="nav-icon fas fa-solid fa-bus"></i>
                  <p>Rental MiniBus</p>
                </a>
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
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><?= $title ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>">Home</a></li>
              <li class="breadcrumb-item active"><?= $title ?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">