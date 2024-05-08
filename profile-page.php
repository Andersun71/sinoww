<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SINOW</title>
    <link rel="shortcut icon" type="image/png" href="assets/images/logos/sinow.png" />
    <link rel="stylesheet" href="assets/css/styles.min.css" />
    <!-- Tambahkan link CSS untuk ikon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha384-nFpaUoBQVQ3+2FveMzqL7JwBlFVWJvaClp9iFXERaT+aMzTnD3LkpGc0bO/Or1H7"
        crossorigin="anonymous">
    <!-- Ganti versi Font Awesome sesuai kebutuhan -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        /* CSS untuk menggeser isi profil ke kanan */
        .profile-content {
            padding-left: 15px; /* Tambahkan padding kiri */
        }
        /* CSS untuk mengatur posisi dropdown ikon titik tiga di pojok kanan atas */
        .dropdown {
            position: absolute;
            top: 10px; /* Sesuaikan dengan kebutuhan */
            right: 10px; /* Sesuaikan dengan kebutuhan */
        }
    </style>
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
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
                            <a class="sidebar-link" href="./Buat_Izin.php" aria-expanded="false">
                                <span>
                                    <i class="ti ti-arrow-up"></i>
                                </span>
                                <span class="hide-menu">UNGGAH</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="./Notifikasi.php" aria-expanded="false">
                                <span>
                                    <i class="ti ti-bell"></i>
                                </span>
                                <span class="hide-menu">NOTIFIKASI</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>

    <div class="body-wrapper">
        <section id="content" class="container" algin="right">

  <div class="container mt-5">
    <div class="row">
        <div class="col-md-4">
          <img src="assets/images/profile/jokowi.jpg" class="img-fluid rounded-circle" alt="Foto Profil">
        </div>
        <div class="col-md-8">
          <h2>NGAB OWI</h2>
          <p>Tentang saya: Saya adalah bapak bapak tua yang suka ngoding.</p>
          <div class="mb-3">
            <!-- Mengganti teks Rating dengan Disukai dan menambahkan ikon hati -->
            <span class="text-muted">Disukai: 10M</span>
          </div>
          <a href="edit-profil.php" class="btn btn-primary mr-2">Edit Profile</a>
          <a href="logout.php" class="btn btn-danger">Logout</a>
        </div>
      </div>
      
      
    <hr>
    <!-- Daftar Postingan -->
    <div class="container-fluid">
        <!--  Row 1 -->
        <div class="row">
            <div class="col-lg-8 d-flex align-items-strech">
                <div class="card w-100">
                    <div class="card-body p-4">
                        <h2 class="mb-4">Postingan</h2>
                        <div class="postingan position-relative">
                            <!-- Tambahkan username dengan lingkaran -->
                            <div class="d-flex  mb-2">
                                <div style="width:10%"><img src="assets/images/profile/jokowi.jpg"
                                        alt="Profile Image" class="rounded-circle" width="50"></div>
                                     <div style="margin-top: 10px;">Jokowi</div>
                                <div class="dropdown text-end justify-content-between col-4">
                                    <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button"
                                        id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fas fa-ellipsis-h"></i>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                        <li><a class="dropdown-item" href="edit-postingan-page.php">Edit</a></li>
                                        <li><a class="dropdown-item" href="#" onclick="konfirmasiHapus()">Hapus</a></li>
                                    </ul>
                                </div>
                            </div>
                            <img src="assets/images/products/Jokowi-3.webp" alt="Preview"
                                style="max-width: 100%; height: auto;">

                            <h2>Komentar timnas</h2>
                            <p>Presiden Jokowi berkomentar terhadap pemain timnas Indonesia dengan
                                kata-kata "Mainnya hebat sekali".</p>
                            <form>
                                <a href="https://youtube.com" class="btn btn-primary" target="_blank">Buka
                                    File</a>
                            </form>
                            <style>
                                .bi-heart.clicked path {
                                    fill: red;
                                }
                            </style>
                            <script>
                                function toggleLike(button) {
                                    const heartIcon = button.querySelector('.bi-heart');
                                    heartIcon.classList.toggle('clicked');
                                }
                                function konfirmasiHapus() {
                                    // Tampilkan peringatan konfirmasi
                                    var konfirmasi = confirm("Apakah kamu yakin ingin menghapus postingan ini?");
                                    // Jika pengguna menekan tombol OK, lanjutkan dengan penghapusan
                                    if (konfirmasi) {
                                        // Tambahkan logika untuk menghapus postingan di sini
                                        alert("Postingan berhasil dihapus.");
                                    } else {
                                        // Jika pengguna membatalkan, tampilkan pesan bahwa penghapusan dibatalkan
                                        alert("Penghapusan dibatalkan.");
                                    }
                                }
                            </script>
                            
                            <button class="btn position-absolute bottom-0 end-0 m-3" onclick="toggleLike(this)">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="30" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15"/>
                                </svg>
                            </button>
                            <a href="komen.php" class="btn position-relative bottom-0 end-0 m-3">
                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="30" height="35" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7.556 8.5h8m-8 3.5H12m7.111-7H4.89a.896.896 0 0 0-.629.256.868.868 0 0 0-.26.619v9.25c0 .232.094.455.26.619A.896.896 0 0 0 4.89 16H9l3 4 3-4h4.111a.896.896 0 0 0 .629-.256.868.868 0 0 0 .26-.619v-9.25a.868.868 0 0 0-.26-.619.896.896 0 0 0-.63-.256Z"/>
                                </svg>
                            </a>
                        </div>
                        <hr>
                        <!-- Sekat antara postingan -->
                        <div class="postingan position-relative">
                            <!-- Tambahkan username dengan lingkaran -->
                            <div class="d-flex  mb-2">
                                <div style="width:10%"><img src="assets/images/profile/jokowi.jpg"
                                        alt="Profile Image" class="rounded-circle" width="50"></div>
                                     <div style="margin-top: 10px;">Jokowi</div>
                                <div class="dropdown text-end justify-content-between col-4">
                                    <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button"
                                        id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fas fa-ellipsis-h"></i>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                        <li><a class="dropdown-item" href="#">Edit</a></li>
                                        <li><a class="dropdown-item" href="#" onclick="konfirmasiHapus()">Hapus</a></li>
                                    </ul>
                                </div>
                            </div>
                            <img src="assets/images/products/Jokowi-3.webp" alt="Preview"
                                style="max-width: 100%; height: auto;">

                            <h2>Komentar timnas</h2>
                            <p>Presiden Jokowi berkomentar terhadap pemain timnas Indonesia dengan
                                kata-kata "Mainnya hebat sekali".</p>
                            <form>
                                <a href="https://youtube.com" class="btn btn-primary" target="_blank">Buka
                                    File</a>
                            </form>
                            <style>
                                .bi-heart.clicked path {
                                    fill: red;
                                }
                            </style>
                            <script>
                                function toggleLike(button) {
                                    const heartIcon = button.querySelector('.bi-heart');
                                    heartIcon.classList.toggle('clicked');
                                }
                            </script>
                            
                            <button class="btn position-absolute bottom-0 end-0 m-3" onclick="toggleLike(this)">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="30" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15"/>
                                </svg>
                            </button>
                            <a href="komen.php" class="btn position-relative bottom-0 end-0 m-3">
                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="30" height="35" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7.556 8.5h8m-8 3.5H12m7.111-7H4.89a.896.896 0 0 0-.629.256.868.868 0 0 0-.26.619v9.25c0 .232.094.455.26.619A.896.896 0 0 0 4.89 16H9l3 4 3-4h4.111a.896.896 0 0 0 .629-.256.868.868 0 0 0 .26-.619v-9.25a.868.868 0 0 0-.26-.619.896.896 0 0 0-.63-.256Z"/>
                                </svg>
                            </a>
                                  
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Yearly Breakup -->
                    </div>
                </div>
            </div>
        </div>
        <!--  Row 1 End -->
    </div>
  </div>

  <!-- Bootstrap JS -->
</section>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="assets/libs/jquery/dist/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/sidebarmenu.js"></script>
        <script src="assets/js/app.min.js"></script>
        <script src="assets/libs/apexcharts/dist/apexcharts.min.js"></script>
        <script src="assets/libs/simplebar/dist/simplebar.js"></script>
        <script src="assets/js/dashboard.js"></script>
</body>

</html>
