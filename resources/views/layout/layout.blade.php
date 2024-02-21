<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Qasir</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link href="./assets/css/style.css" rel="stylesheet">

</head>

<body>

    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <div id="main-wrapper">
        <div class="nav-header bg-primary">
            <div class="brand-logo">
                <a href="index.html">
                    <h1 class="text-white">QASIR</h1>
                </a>
            </div>
        </div>
        <div class="header">
            <div class="header-content clearfix">

                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>
                <div class="header-left">

                </div>
                <div class="header-right">
                    <ul class="clearfix">
                        <li class="icons dropdown">
                            <div class="user-img c-pointer position-relative"   data-toggle="dropdown">
                                <span class="activity active"></span>
                                <img src="./assets/images/user/profile.png" height="40" width="40" alt="">
                            </div>
                            <div class="drop-down dropdown-profile   dropdown-menu">
                                <div class="dropdown-content-body">
                                    <form action="/logout" method="POST" role="search">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-s btn-danger" type="submit">Logout</button>
                                    </form>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="nk-sidebar">
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label">Home</li>
                    <li>
                        <a href="/home" aria-expanded="false">
                            <span class="nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-label">Menu</li>
                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <span class="nav-text">Data Master</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="/user">Data User</a></li>
                            <li><a href="/barang">Data Barang</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="/kasir" aria-expanded="false">
                            <span class="nav-text">Kasir</span>
                        </a>
                    </li>
                    {{-- <li>
                        <a href="/transaksi" aria-expanded="false">
                            <span class="nav-text">Transaksi</span>
                        </a>
                    </li> --}}
                </ul>
            </div>
        </div>

        @yield('content')

        <div class="footer">
            <div class="copyright">
                <p>Raphael Rhinovaldi Wibisana</p>
            </div>
        </div>
    </div>

    <script src="./assets/plugins/common/common.min.js"></script>
    <script src="./assets/js/custom.min.js"></script>
    <script src="./assets/9js/settings.js"></script>
    <script src="./assets/js/gleek.js"></script>
    <script src="./assets/js/styleSwitcher.js"></script>

    <script src="./assets/plugins/tables/js/jquery.dataTables.min.js"></script>
    <script src="./assets/plugins/tables/js/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="./assets/plugins/tables/js/datatable-init/datatable-basic.min.js"></script>

</body>
</html>
