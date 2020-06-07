@extends('layout.admin')
@section('page-wrapper')
<div class="row">
    <!-- Page Header -->
    <div class="col-lg-12">
        <h1 class="page-header">Daftar Transaksi</h1>
    </div>   <!--End Page Header -->
</div>  
<div class="row">
    <div class="col-lg-12">
        <!--   Kitchen Sink -->
        <div class="panel panel-success">
            <div class="panel-heading">
                Tabel Transaksi
            </div>
            <div class="panel-body">
                <form action="caritransaksi" method="GET" class="col-md-11 col-form-label">
                <input type="text" name="cari" placeholder="Search ..." value="{{ old('cari') }}">
                <input type="submit" value="Cari">
                </form>
                    <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr >
                                <th class="text-center">No</th>
                                <th class="text-center">ID Transaksi</th>
                                <th class="text-center">ID Pengelola</th>
                                <th class="text-center">Tanggal</th>
                                <th class="text-center">Debet</th>
                                <th class="text-center">Kredit</th>
                                <th class="text-center">Perihal</th>
                                
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($Transaksi as $in=>$val)
                            <tr>
                                <td class="text-center">{{$in+1}}</td>
                                <td class="text-center">{{$val->id_transaksi}}</td>
                                <td class="text-center">{{$val->id_pengelola}}</td>
                                <td class="text-center">{{$val->tgl}}</td>
                                <td class="text-center">{{$val->debet}}</td>
                                <td class="text-center">{{$val->kredit}}</td>
                                <td class="text-center">{{$val->prihal}}</td>
                            
                                
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$Transaksi->links()}}
                </div>
            </div>
            <div class="panel-footer"></div>
        </div>
        <!-- End  Kitchen Sink -->
    </div>           
</div>

@endsection
           