<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aplikasi Kasir | by.adgrafika</title>
    <link rel="icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/ico">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="assets/vendor/datatables/responsive.bootstrap4.min.css" rel="stylesheet">
</head>

<body>
    <div class="page-wrapper chiller-theme toggled">
        <a id="show-sidebar" class="btn btn-sm btn-primary border-0" href="#">
            <i class="fas fa-bars"></i>
        </a>
        <nav id="sidebar" class="sidebar-wrapper">
            <div class="sidebar-content">
                <div class="sidebar-brand">
                    <a href="./"><i class="fas fa-shopping-cart mr-1"></i></a>
                    <div id="close-sidebar">
                        <i class="fas fa-times"></i>
                    </div>
                </div>
                <div class="sidebar-header">
                    {{-- <div class="user-pic" style="height:70px;width:70px;">
                        <img class="img-responsive img-rounded" src="assets/images/"
                            alt="User picture">
                    </div>
                    <div class="user-info">
                        <span class="user-name">
                        </span>
                        <span class="user-role">Administrator</span>
                        <span class="user-status">
                            <i class="fa fa-circle"></i>
                            <span>Online</span>
                        </span>
                    </div> --}}
                </div>
                <!-- sidebar-header  -->

                <div class="sidebar-menu">
                    <ul>
                        <li class="header-menu">
                            <span>General</span>
                        </li>
                        <li>
                            <a href="index.php">
                                <i class="fas fa-tv"></i>
                                <span>Transaksi</span>
                            </a>
                        </li>
                        <li>
                            <a href="produk.php">
                                <i class="fas fa-archive"></i>
                                <span>Produk</span>
                            </a>
                        </li>
                        <li>
                            <a href="laporan.php">
                                <i class="fa fa-chart-line"></i>
                                <span>Laporan</span>
                            </a>
                        </li>
                        <li>
                            <a href="#Exit" data-toggle="modal">
                                <i class="fa fa-power-off"></i>
                                <span>Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- sidebar-menu  -->
            </div>

        </nav>
        <!-- sidebar-wrapper  -->
        <main class="page-content">
            <div class="container-fluid">
                @yield('content')
                <div class="d-block d-sm-block d-md-none d-lg-none py-2"></div>
            </div><!-- end container-fluid" -->
        </main><!-- end page-content" -->
    </div><!-- end page-wrapper -->

    <!-- Modal Exit -->
    <div class="modal fade" id="Exit" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content border-0">
                <div class="modal-body text-center">
                    <i class="fas fa-exclamation-triangle fa-4x text-warning mb-3"></i>
                    <h3 class="mb-4">Apakah anda yakin ingin keluar ?</h3>
                    <button type="button" class="btn btn-secondary px-4 mr-2" data-dismiss="modal">Batal</button>
                    <a href="logout.php" class="btn btn-primary px-4">Keluar</a>
                </div>
            </div>
        </div>
        <!-- end Modal Exit -->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="assets/js/sidebar.js"></script>
        <script src="assets/vendor/datatables/jquery-3.5.1.js"></script>
        <script src="assets/vendor/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
        <script src="assets/vendor/datatables/dataTables.responsive.min.js"></script>
        <script src="assets/vendor/datatables/responsive.bootstrap4.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#table').DataTable();
            });
            $('#cart').dataTable({
                searching: false,
                paging: false,
                info: false
            });
        </script>
</body>

</html>
