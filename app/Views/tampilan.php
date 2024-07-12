<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Dosen</title>
  <!-- AdminLTE CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <!-- Animate.css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
  <!-- Custom CSS -->
  <style>
    body {
      background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
      color: #333;
    }
    .navbar {
      background: linear-gradient(to right, #4e54c8, #8f94fb) !important;
      animation: gradientBG 15s ease infinite;
    }
    @keyframes gradientBG {
      0% {background-position: 0% 50%;}
      50% {background-position: 100% 50%;}
      100% {background-position: 0% 50%;}
    }
    .sidebar-light-primary {
      background: linear-gradient(to bottom, #4e54c8, #8f94fb);
    }
    .sidebar-light-primary .nav-sidebar .nav-item .nav-link {
      color: #fff !important;
      transition: all 0.3s ease;
    }
    .sidebar-light-primary .nav-sidebar .nav-link.active,
    .sidebar-light-primary .nav-sidebar .nav-link:hover {
      background-color: rgba(255, 255, 255, 0.2) !important;
      color: #fff !important;
      transform: translateX(5px);
    }
    .main-header .nav-link {
      color: #ffffff !important;
    }
    .main-header .nav-link:hover {
      color: #f0f0f0 !important;
    }
    .content-wrapper {
      background-color: rgba(255, 255, 255, 0.9);
      color: #333;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
      border-radius: 15px;
      margin: 20px;
      overflow: hidden;
      transition: all 0.3s ease;
    }
    .content-wrapper:hover {
      transform: translateY(-5px);
      box-shadow: 0 5px 25px rgba(0, 0, 0, 0.2);
    }
    .table {
      background-color: #ffffff;
      color: #333;
      border-radius: 10px;
      overflow: hidden;
    }
    .thead-light th {
      background: linear-gradient(to right, #4e54c8, #8f94fb);
      color: #ffffff;
      border: none;
    }
    .table-striped tbody tr:nth-of-type(odd) {
      background-color: rgba(78, 84, 200, 0.05);
    }
    .btn-primary {
      background: linear-gradient(to right, #4e54c8, #8f94fb);
      color: #ffffff;
      border: none;
      transition: all 0.3s ease;
    }
    .btn-primary:hover {
      background: linear-gradient(to right, #3f45b6, #7579e7);
      transform: translateY(-2px);
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    .btn-warning, .btn-danger {
      transition: all 0.3s ease;
    }
    .btn-warning:hover, .btn-danger:hover {
      transform: translateY(-2px);
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    .btn {
      border-radius: 20px;
      padding: 8px 16px;
    }
    .input-group .form-control {
      border-radius: 20px 0 0 20px;
    }
    .input-group .btn {
      border-radius: 0 20px 20px 0;
    }
    .table-hover tbody tr {
      transition: all 0.3s ease;
    }
    .table-hover tbody tr:hover {
      background-color: rgba(78, 84, 200, 0.1);
      transform: scale(1.02);
    }
  </style>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-light navbar-light animate__animated animate__fadeIn">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="" role="button"><i class="fas fa-bars"></i>  Dosen UNPAM</a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary elevation-4 animate__animated animate__slideInLeft">
    <a href="/" class="brand-link">
      <span class="brand-text font-weight-light">Unpam</span>
    </a>
    <div class="sidebar">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
          <li class="nav-item">
            <a href="/dosen" class="nav-link active">
              <i class="nav-icon fas fa-user-tie"></i>
              <p>Data Dosen Unpam</p>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper animate__animated animate__fadeIn">
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid mt-4">
        <div class="row">
          <div class="col-md-12">

            <!-- Input untuk pencarian -->
            <div class="input-group mb-3 animate__animated animate__fadeInDown">
              <input type="search" id="searchInput" class="form-control" placeholder="Cari dosen unpam" aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button" onclick="searchTable()"><i class="fas fa-search"></i></button>
              </div>
            </div>

            <!-- Tombol untuk memunculkan modal -->
            <button onclick="window.location.href='/tambah-data-dosen'" class="btn btn-primary mb-3 animate__animated animate__bounceIn"><i class="fas fa-plus"></i></button>

            <!-- Tabel Data Dosen -->
            <div class="table-responsive animate__animated animate__fadeInUp">
              <table id="dataTable" class="table table-bordered table-striped table-hover">
                <thead class="thead-light">
                  <tr>
                    <th>Kode Dosen</th>
                    <th>Nama Dosen</th>
                    <th>Jadwal</th>
                    <th>Nama Mata Kuliah</th>
                    <th>AKSI</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($DataDosen as $key => $dosen) : ?>
                  <tr>
                    <td><?php echo $dosen['kode_dosen'] ?></td>
                    <td><?php echo $dosen['nama_dosen'] ?></td>
                    <td><?php echo $dosen['jadwal'] ?></td>
                    <td><?php echo $dosen['nama_matkul'] ?></td>
                    <td class="text-center">
                      <a href="notifikasi/dosen-masuk/<?= $dosen['id_dosen'];?>" class="btn btn-warning btn-sm"><i class="fas fa-bell"></i> Masuk</a>
                      <a href="notifikasi/dosen-tidak-masuk/<?= $dosen['id_dosen'];?>" class="btn btn-danger btn-sm"><i class="fas fa-exclamation-triangle"></i> Tidak Masuk</a>
                    </td>
                  </tr>
                  <?php endforeach ?>
                </tbody>
              </table>
            </div>
            
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

<!-- Custom JavaScript for Search Functionality -->
<script>
  function searchTable() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("searchInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("dataTable");
    tr = table.getElementsByTagName("tr");

    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td");
      for (var j = 0; j < td.length; j++) {
        if (td[j]) {
          txtValue = td[j].textContent || td[j].innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
            break;
          } else {
            tr[i].style.display = "none";
          }
        }
      }
    }
  }

  // Menambahkan event listener untuk input pencarian
  document.getElementById("searchInput").addEventListener("keyup", searchTable);

  // Animasi tambahan untuk baris tabel
  document.addEventListener('DOMContentLoaded', function() {
    const tableRows = document.querySelectorAll('#dataTable tbody tr');
    tableRows.forEach((row, index) => {
      row.classList.add('animate__animated', 'animate__fadeInUp');
      row.style.animationDelay = `${index * 0.1}s`;
    });
  });
</script></body>
</html>