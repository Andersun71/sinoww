<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SINOW</title>
        <link rel="shortcut icon" type="image/png" href="assets/images/logos/sinow.png" />
        <link rel="stylesheet" href="assets/css/styles.min.css" />
        <!-- Tambahkan link CSS untuk ikon -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-nFpaUoBQVQ3+2FveMzqL7JwBlFVWJvaClp9iFXERaT+aMzTnD3LkpGc0bO/Or1H7" crossorigin="anonymous">
        <!-- Ganti versi Font Awesome sesuai kebutuhan -->
      </head>
<body>
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="./index.php" class="text-nowrap logo-img">
            <img src="assets/images/logos/sinow.png" width="180" alt="" />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
              <li class="nav-small-cap">
                  <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                  <span class="hide-menu">Home</span>
              </li>
              <li class="sidebar-item">
                  <a class="sidebar-link" href="./index.php" aria-expanded="false">
                      <span>
                          <i class="ti ti-layout-dashboard"></i>
                      </span>
                      <span class="hide-menu">Dashboard</span>
                  </a>
              </li>
              <li class="sidebar-item">
                  <a class="sidebar-link" href="./unggah.php" aria-expanded="false">
                      <span>
                          <i class="ti ti-arrow-up"></i>
                      </span>
                      <span class="hide-menu">Unggah</span>
                  </a>
              </li>
              <li class="sidebar-item">
                  <a class="sidebar-link" href="./Notifikasi.php" aria-expanded="false">
                      <span>
                          <i class="ti ti-bell"></i>
                      </span>
                      <span class="hide-menu">Notifikasi</span>
                  </a>
              </li>
              
              <li class="sidebar-item">
                  <a class="sidebar-link" href="./profile-page.php" aria-expanded="false">
                      <span>
                          <i class="ti ti-user"></i>
                      </span>
                      <span class="hide-menu">Jokowi</span>
                  </a>
              </li>
          </ul>

      </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <div class="container mt-5">
        <div class="row justify-content-center">
          <div class="col-md-6">
            <h2 class="mb-4">Edit Profile Anda</h2>
            <form action="#" method="post" enctype="multipart/form-data">
              <div class="mb-3">
                <label for="judul" class="form-label">Nama</label>
                <input type="text" class="form-control" id="judul" name="judul" required>
              </div>
              <div class="mb-3">
                <label for="file" class="form-label">Foto Profile</label>
                <input type="file" class="form-control" id="file" name="file" required>
              </div>
              <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required></textarea>
              </div>
              <a href="profile-page.php" class="btn btn-primary">Upload</a>
            </form>
          </div>
        </div>
      </div>

  <!-- Bootstrap JS (optional) -->
  <script src="assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/sidebarmenu.js"></script>
  <script src="assets/js/app.min.js"></script>
  <script src="assets/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="assets/libs/simplebar/dist/simplebar.js"></script>
  <script src="assets/js/dashboard.js"></script>
</body>
</html>
