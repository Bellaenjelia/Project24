<?php
include "koneksi.php";
if(!isset($_SESSION['user'])) {
	header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Perpustakaan Digital</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.html"> <b>DIGITAL LIBRARY</b></a>
            <button style="color: var(--pink);" class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading" style="color: white;">MENU</div>
                            <a class="nav-link" href="?">
                                <div class="sb-nav-link-icon" style="color: var(--pink);"><i class="fas fa-solid fa-table"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading" style="color: white;">NAVIGASI</div>
                            <a class="nav-link" href="?page=kategori">
                                <div class="sb-nav-link-icon" style="color: var(--pink);"><i class="fa-solid fa-list"></i></i></div>
                                Kategori
                            </a>
                            <a class="nav-link" href="?page=buku">
                                <div class="sb-nav-link-icon" style="color: var(--pink);"><i class="fas fa-solid fa-book"></i></div>
                                Buku
                            </a>
                            <?php
                                if($_SESSION['user']['Level'] =='Peminjam'){
                             ?>
                            <a class="nav-link" href="?page=peminjaman">
                                <div class="sb-nav-link-icon" style="color: var(--pink);"><i class="fas fa-book-open"></i></div>
                                Peminjaman
                            </a>
                            <?php
                                }
                            ?>
                            <a class="nav-link" href="?page=ulasan">
                                <div class="sb-nav-link-icon" style="color: var(--pink);"><i class="fas fa-comment"></i></div>
                                Ulasan
                            </a>

                            <?php
                                if($_SESSION['user']['Level'] !='Peminjam'){
                            ?>
                                <a class="nav-link" href="?page=laporan">
                                    <div class="sb-nav-link-icon" style="color: var(--pink);"><i class="fas fa-book-open"></i></div>
                                    Laporan Peminjaman
                                </a>
                            <?php 
                                }
                                ?>
                            <a class="nav-link" href="logout.php">
                                <div class="sb-nav-link-icon" style="color: var(--pink);"><i class="fas fa-solid fa-right-from-bracket"></i></div>
                                Logout
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer" style="background: black;">
                        <div class="small" style="color: white;">LOGIN AS :</div><i class="fa-solid fa-user"></i>
                        <?php echo $_SESSION['user']['Username']; ?>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
               <main>
                <div class="container-fluid">
                    <?php
                        $page = isset($_GET['page']) ? $_GET['page'] : 'home';
                        if(file_exists($page . '.php')){
                            include $page . '.php';
                        }else{
                            include '404.php';
                        }
                    ?>
                </div>
               </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Perpustakaan 2024</div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>
</html>
