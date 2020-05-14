<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{asset('assets/img/ikonTitle.png')}}">
    <title>{{(isset($title)?$title:"Dashboard")}}</title>
    <!-- Core CSS - Include with every page -->
    <link href="{{asset('assets/plugins/bootstrap/bootstrap.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/plugins/pace/pace-theme-big-counter.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/main-style.css')}}" rel="stylesheet" />
    <!-- Page-Level CSS -->
    <link href="{{asset('assets/plugins/morris/morris-0.4.3.mincss')}}" rel="stylesheet" />
   </head>
<body>
    <!--  wrapper -->
    <div id="wrapper">
        <!-- navbar top -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
            <!-- navbar-header -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <img src="{{asset('assets/img/sibak.png')}}" alt="" />
                </a>
            </div>
            <!-- end navbar-header -->
            <!-- navbar-top-links -->
            
                </li>
                <!-- end main dropdown -->
            </ul>
            <!-- end navbar-top-links -->
        </nav>
        <!-- end navbar top -->

        <!-- navbar side -->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <!-- sidebar-collapse -->
            <div class="sidebar-collapse">
                <!-- side-menu -->
                <ul class="nav" id="side-menu">
                    <li>
                        <!-- user image section-->
                        <div class="user-section">
                            <div class="user-section-inner">
                                <img src="{{asset('assets/img/user.jpg')}}" alt="">
                            </div>
                            <div class="user-info">
                                <div>Mario <strong>Martin</strong></div>
                                <div class="user-text-online">
                                    <span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;Online
                                </div>
                            </div>
                        </div>
                        <!--end user image section-->
                    </li>
                    <li class="sidebar-search">
                        <!-- search section-->
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        <!--end search section-->
                    </li>
                    <li class="selected">
                        <a href="{{route('Dashboard.index')}}"><i class="fa fa-dashboard fa-fw"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-flask fa-fw"></i>Manajemen Transaksi<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{route('transaksi.index')}}">Daftar Transaksi</a>
                            </li>
                            <li>
                                <a href="{{route('Kas.index')}}">Daftar Kas Dana Puap</a>
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-files-o fa-fw"></i>Manajemen Anggota<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Anggota</a>
                            </li>
                            <li>
                                <a href="#">Pengelola</a>
                            </li>
                            <li>
                                <a href="#">POKTAN</a>
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>
                    <li>
                    <a href="#"><i class="fa fa-table fa-fw"></i>Manajemen Peminjaman<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Peminjaman</a>
                            </li>
                            <li>
                                <a href="#">Pengembalian</a>
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>
                        <!-- second-level-items -->
                    </li>     
                </ul>
                <!-- end side-menu -->
            </div>
            <!-- end sidebar-collapse -->
        </nav>
        <!-- end navbar side -->
        <!--  page-wrapper -->
        <div id="page-wrapper">
            @yield('page-wrapper')
        </div>
        <!-- end page-wrapper -->
    </div>
    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="{{asset('assets/plugins/jquery-1.10.2.js')}}"></script>
    <script src="{{asset('assets/plugins/bootstrap/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
    <script src="{{asset('assets/plugins/pace/pace.js')}}"></script>
    <script src="{{asset('assets/scripts/siminta.js')}}"></script>
    <!-- Page-Level Plugin Scripts-->
    <script src="{{asset('assets/plugins/morris/raphael-2.1.0.min.js')}}"></script>
    <script src="{{asset('assets/plugins/morris/morris.js')}}"></script>
    <script src="{{asset('assets/scripts/dashboard-demo.js')}}"></script>

</body>
@yield('script')
</html>
