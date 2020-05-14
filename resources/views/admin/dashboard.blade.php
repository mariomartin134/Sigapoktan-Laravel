@extends('layout.admin')
@section('page-wrapper')
<div class="row">
    <!-- Page Header -->
    <div class="col-lg-12">
        <h1 class="page-header">Dashboard</h1>
    </div>   <!--End Page Header -->
</div>  
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Rincian Sistem:
            </div>
            <div class="panel-body">
                <div class="col-lg-6">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            Biodata Diri
                        </div>
                        <div class="panel-body">
                            <p style="line-height: 40px;">
                                Nama &nbsp;         : Mario Martin Da Silva <br>
                                NIM &nbsp;          : 1815051088 <br>
                                Program Studi &nbsp;: Pendidikan Teknik Informatika
                            </p>
                        </div> 
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            Studi Kasus
                        </div>
                        <div class="panel-body">
                            <p style="line-height: 40px;">
                                Judul &nbsp;     : Sistem Informasi Kelompok Tani (SIGAPOKTAN) <br>
                                Penjelasan &nbsp;: SIGAPOKTAN merupakan sebuah website yang memfasilitasi para gapoktan 
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
           