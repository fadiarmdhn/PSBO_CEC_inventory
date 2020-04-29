<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>CEC Sekolah Cendekia Baznas | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/AdminCEC/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="/AdminCEC/css/adminlte.min.css">
  <link rel="stylesheet" href="/AdminCEC/css/custom.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- Image upload and Preview -->
  <link rel="stylesheet" href="/AdminCEC/css/uploadImage.css">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../index3.html" class="nav-link">Home</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
      <!-- User Account: style can be found in dropdown.less -->
      <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >
            <img src="/AdminCEC/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image" height="40" width="40">
              <span class="hidden-xs">Admin</span>
            </a>
              <ul class="dropdown-menu">
              <div class="card-header">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </ul>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="/AdminCEC/img/logobaznaswhite.png"
           alt="SCB logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <h3><span class="brand-text font-weight-bold">CEC</span></h3>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/AdminCEC/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/dashboard" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                All items and Category
                <i class="right fas fa-angle-right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/allitems" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All items</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/addcategory" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('kategori.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kategori</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('produk.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                    <p>Produk</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-shopping-cart"></i>
              <p>
                Sales
                <i class="fas fa-angle-right right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/salesdaily" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Daily</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/salesweekly" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Weekly</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="/solditems" class="nav-link">
              <i class="nav-icon fas fa-cash-register"></i>
              <p>
                Sold items
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/cashbook" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Cash book
              </p>
            </a>
          </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      @yield('content')
</div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.2
    </div>
    <strong>Copyright &copy; Stock Management</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="/AdminCEC/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/AdminCEC/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/AdminCEC/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/AdminCEC/js/demo.js"></script>
<!-- PAGE PLUGINS -->
<!-- ChartJS -->
<script src="/AdminCEC/plugins/chart.js/Chart.min.js"></script>

<!-- Image supload -->
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="/AdminCEC/js/upload.js"></script>

<!-- PAGE SCRIPTS -->
<script src="/AdminCEC/js/pages/dashboard2.js"></script>
</body>
</html>
