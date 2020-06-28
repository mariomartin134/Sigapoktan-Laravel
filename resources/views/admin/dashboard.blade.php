@extends('layout.admin')
@section('page-wrapper')
<div class="row">
    <!-- Page Header -->
    <div class="col-lg-12">
        <marquee behavior="" direction="" style="font-size: 19px; color: green;">Selamat Datang Di Sigapoktan Panca Winangun Kelurahan Sukasada</marquee>
        <h1>Dashboard</h1>
        <h4>Selamat Datang {{ Auth::user()->name }}<b></b></h4>
    </div>   <!--End Page Header -->
</div>  
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Organisasi dan Keanggotaan Gapoktan
            </div>
            <div class="panel-body">
                <div class="col-lg-6">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            Susunan Pengurus Gapoktan Panca Winangun
                        </div>
                        <div class="panel-body">
                            <p style="line-height: 35px; padding-left: 14px;">
                                Ketua &emsp;&emsp;&emsp;&emsp;&emsp;: Ketut Putra Nadi <br>
                                Wakil Ketua &emsp;&emsp;&nbsp;: Made Oka Rai <br>
                                Sekretaris &emsp;&emsp;&emsp;: Komang Darmada<br>
                                Bendahara &emsp;&emsp;&nbsp;&nbsp;: I Gede Sutama
                            </p>
                        </div> 
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            Komite Pengarah
                        </div>
                        <div class="panel-body">
                            <p style="line-height: 47px;  padding-left: 14px;">
                                1. Lurah Sukasada <br>
                                2. Tokoh Masyarakat <br>
                                3, PPL Wilbin Kelurahan Sukasada
                            </p>
                        </div>  
                    </div>
                </div>
                <div class="col-lg-6">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            Kelompok Tani
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th class="text-center">Nama Poktan</th>
                                            <th class="text-center">Jumlah Anggota</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td>Kelompok Subak Yeh Jero</td>
                                            <td class="text-center">78</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">2</td>
                                            <td>Kelompok Subak Anyar Lapang</td>
                                            <td class="text-center">57</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">3</td>
                                            <td>Kelompok Subak Yeh Batu</td>
                                            <td class="text-center">43</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">4</td>
                                            <td>Kelompok Subak Lawas</td>
                                            <td class="text-center">59</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">5</td>
                                            <td>Kelompok Subak Timbul</td>
                                            <td class="text-center">15</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">6</td>
                                            <td>Kelompok Subak Tembau</td>
                                            <td class="text-center">29</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="panel-footer">Jumlah anggota sebanyak 281 orang</div>
                    </div>
                     <!-- End  Kitchen Sink -->
                </div>
                <div class="col-lg-6">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            Pengelola Dana PUAP
                        </div>
                        <div class="panel-body">
                            <p style="line-height: 38px;  padding-left: 14px;">
                                Petugas Pungut &emsp;&emsp;&emsp;: Nyoman Ginanta<br>
                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Putu Pacung <br>
                                Ketua Poktan  &emsp;&emsp;&emsp;&emsp; : Subak Anyar Lapang<br>
                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Subak Yeh Jero <br>
                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Subak Yeh Lawas <br>
                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Subak Yeh Batu <br>
                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Subak Tembau <br>
                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Subak Timbul
                                
                            </p>
                        </div>  
                    </div>
                </div>
            </div>  
            <div class="panel-footer"></div>
        </div>
    </div>            
</div>

@endsection
           