<!doctype html>
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
        <!--  Sidebar End -->
        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Header Start -->
            <header class="app-header">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <ul class="navbar-nav">
                        <li class="nav-item d-block d-xl-none">
                            <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse"
                                href="javascript:void(0)">
                                <i class="ti ti-menu-2"></i>
                            </a>
                        </li>
                        
                    </ul>
                    
                </nav>
            </header>
            <!--  Header End -->
            <div class="container-fluid">
                <!--  Row 1 -->
                <div class="row notification-container">
                    <h2 class="text-center">My Notifications</h2>
                    <p class="dismiss text-right"><a id="dismiss-all" href="#">Dimiss All</a></p>
                    <div class="card notification-card notification-invitation">
                        <div class="card-body">
                            <table>
                                <tr>
                                    <td style="width:10%"><img src="assets/images/profile/jokowi.jpg" alt="Profile Image" class="rounded-circle" width="50"></td>
                                    <td style="width:60%"><div class="card-title">Jokowi menyukai postinganmu</div></td>
                                    <td style="width:30%">
                                        <a href="#" class="btn btn-primary">View</a>
                                        <a href="#" class="btn btn-danger dismiss-notification">Dismiss</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>


                </div>
                <!--  Row 1 End -->
            </div>
        </div>
    </div>
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/sidebarmenu.js"></script>
    <script src="assets/js/app.min.js"></script>
    <script src="assets/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="assets/libs/simplebar/dist/simplebar.js"></script>
    <script src="assets/js/dashboard.js"></script>
</body>

</html>
