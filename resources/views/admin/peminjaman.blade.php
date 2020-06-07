@extends('layout.admin')
@section('page-wrapper')
<div class="row">
    <!-- Page Header -->
    <div class="col-lg-12">
        <h1 class="page-header">Daftar Peminjaman</h1>
    </div>   <!--End Page Header -->
</div>  
<div class="row">
    <div class="col-lg-12">
        <!--   Kitchen Sink -->
        <div class="panel panel-success">
            <div class="panel-heading">
                Tabel Peminjaman
            </div>
            <div class="panel-body">
            <a href="{{route('peminjaman.create')}}"><button type="submit" class="btn btn-outline btn-success btn-sm" ><img src="{{asset('assets/img/create.png')}}" alt="" />Create</button></a>
            <form action="caripinjam" method="GET" class="col-md-11 col-form-label">
                <input type="text" name="cari" placeholder="Search ..." value="{{ old('cari') }}">
                <input type="submit" value="Cari">
            </form>    
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr >
                                <th class="text-center">No</th>
                                <th class="text-center">Id Pinjam</th>
                                <th class="text-center">Invoice</th>
                                <th class="text-center">Tanggal</th>
                                <th class="text-center">Id Pengelola</th>
                                <th class="text-center">Id Anggota</th>
                                <th class="text-center">Jumlah</th>
                                <th class="text-center">Lama</th>
                                <th class="text-center">Bunga</th>
                                <th class="text-center">Ket</th>
                                <th class="text-center" colspan="2">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($peminjaman as $in=>$val)
                            <tr>
                                <td class="text-center">{{$in+1}}</td>
                                <td class="text-center">{{$val->id_pinjam}}</td>
                                <td class="text-center">{{$val->no_invoice}}</td>
                                <td class="text-center">{{$val->tgl}}</td>
                                <td class="text-center">{{$val->id_pengelola}}</td>
                                <td class="text-center">{{$val->id_anggota}}</td>
                                <td class="text-center">{{$val->jumlah}}</td>
                                <td class="text-center">{{$val->lama}}</td>
                                <td class="text-center">{{$val->bunga}}</td>
                                <td class="text-center">{{$val->keterangan}}</td>
                                <td class="text-center">
                                    <a href="{{route('peminjaman.edit',$val->id_pinjam)}}"><button type="submit" class="btn btn-outline btn-info btn-sm"><img src="{{asset('assets/img/update.png')}}" alt="" />Update</button></a>
                                </td>
                                <td class="text-center">
                                    <form action="{{route('peminjaman.destroy',$val->id_pinjam)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-outline btn-danger btn-sm"><img src="{{asset('assets/img/delete.png')}}" alt="" />Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$peminjaman->links()}}
                </div>
            </div>
            <div class="panel-footer"></div>
            </div>
        </div>
        <!-- End  Kitchen Sink -->
    </div>           
</div>

@endsection
           