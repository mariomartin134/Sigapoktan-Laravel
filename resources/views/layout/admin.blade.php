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
                    <img src="{{asset('assets/img/sigapoktan.png')}}" alt="" />
                </a>
            </div>
            <!-- end navbar-header -->
            <!-- navbar-top-links -->
            <ul class="nav navbar-top-links navbar-right">
                <!-- main dropdown -->
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
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
                                <img src="{{asset('assets/img/user1.png')}}" alt="">
                            </div>
                            <div class="user-info">
                                <div><strong>Sigapoktan</strong></div>
                                <div class="user-text-online">
                                    <span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;Online
                                </div>
                            </div>
                        </div>
                        <!--end user image section-->
                    </li>
                    <li>
                        <a href="{{route('Dashboard.index')}}"><i class="fa fa-dashboard fa-fw"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-table fa-fw"></i>Pinjaman & Kembalian Dana<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li class="selected">
                                <a href="{{route('peminjaman.index')}}">Peminjaman Dana PUAP</a>
                            </li>
                            <li>
                                <a href="{{route('pengembalian.index')}}">Pengembalian Dana PUAP</a>
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    <li>
                        <a href="#"><i class="fa fa-edit fa-fw"></i>Transaksi $ Kas Dana<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{route('transaksi.index')}}">Transaksi</a>
                            </li>
                            <li>
                                <a href="{{route('Kas.index')}}">Kas Dana PUAP</a>
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-files-o fa-fw"></i>Referensi<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{route('Poktan.index')}}">Data Poktan</a>
                            </li>
                            <li>
                                <a href="{{route('Pengelola.index')}}">Pengelola</a>
                            </li>
                            <li>
                                <a href="{{route('Anggota.index')}}">Data Anggota</a>
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>
                    <li>
                    
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
