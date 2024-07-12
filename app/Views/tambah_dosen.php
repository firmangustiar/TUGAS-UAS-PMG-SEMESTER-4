<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Dosen</title>
  <!-- AdminLTE CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <!-- Dark Mode Theme -->
  <style>
    body {
      background-color: #1a1a2e;
      color: #e0e0e0;
    }
    .navbar {
      background: linear-gradient(to right, #16213e, #0f3460) !important;
    }
    .sidebar-dark-primary {
      background: linear-gradient(to bottom, #16213e, #0f3460);
    }
    .sidebar-dark-primary .nav-sidebar .nav-item .nav-link {
      color: #e0e0e0 !important;
    }
    .sidebar-dark-primary .nav-sidebar .nav-link.active {
      background-color: rgba(255, 255, 255, 0.1) !important;
      color: #ffffff !important;
    }
    .main-header .nav-link {
      color: #ffffff !important;
    }
    .main-header .nav-link:hover {
      color: #e0e0e0 !important;
    }
    .content-wrapper {
      background-color: #1a1a2e;
      color: #e0e0e0;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
      border-radius: 8px;
      margin: 20px;
      padding: 20px;
    }
    .form-control {
      background-color: #16213e;
      border: 1px solid #0f3460;
      color: #e0e0e0;
    }
    .form-control:focus {
      background-color: #1e2a4a;
      color: #ffffff;
      border-color: #e94560;
      box-shadow: 0 0 0 0.2rem rgba(233, 69, 96, 0.25);
    }
    .btn-dark {
      background-color: #e94560;
      color: #ffffff;
      border-color: #e94560;
      transition: all 0.3s ease;
    }
    .btn-dark:hover {
      background-color: #d63851;
      border-color: #d63851;
      transform: translateY(-2px);
      box-shadow: 0 4px 6px rgba(233, 69, 96, 0.2);
    }
    .btn-danger {
      background-color: #533483;
      border-color: #533483;
    }
    .btn-danger:hover {
      background-color: #42296b;
      border-color: #42296b;
    }
    .btn {
      border-radius: 20px;
      padding: 8px 16px;
    }
    .alert-success {
      background-color: #16213e;
      color: #4caf50;
      border-color: #4caf50;
    }
    label {
      color: #e94560;
    }
  </style>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark navbar-dark">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i> Tambah Dosen Unpam</a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="/" class="brand-link">
      <span class="brand-text font-weight-light">Unpam</span>
    </a>
    <div class="sidebar">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
          <li class="nav-item">
           
          </li>
          <li class="nav-item">
            <a href="/dosen" class="nav-link">
              <i class="nav-icon fas fa-user-tie"></i>
              <p></p>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid mt-4">
        <div class="row">
          <div class="col-md-12">

            <?php if(!empty(session()->getFlashdata('message'))) : ?>
            <div class="alert alert-success">
              <?php echo session()->getFlashdata('message'); ?>
            </div>
            <?php endif ?>

            <!-- Form Tambah Data Dosen -->
            <form action="/tambah-data-dosen" method="post">
              <div class="form-group">
                <label for="kode_dosen">Kode Dosen:</label>
                <input type="text" name="kode_dosen" id="kode_dosen" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="nama_dosen">Nama Dosen:</label>
                <input type="text" name="nama_dosen" id="nama_dosen" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="jadwal">Jadwal:</label>
                <input type="text" name="jadwal" id="jadwal" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="nama_matkul">Nama Mata Kuliah:</label>
                <input type="text" name="nama_matkul" id="nama_matkul" class="form-control" required>
              </div>
              <button type="submit" class="btn btn-dark"><i class=""></i>Save</button>
              <a href="/dosen" class="btn btn-danger"><i class=""></i> Back</a>
            </form>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- jQuery, Popper.js, Bootstrap JS, and AdminLTE JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/js/adminlte.min.js"></script>
</body>
</html>
