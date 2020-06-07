@extends('layout.admin')
@section('page-wrapper')
<div class="row">
    <!-- Page Header -->
    <div class="col-lg-12">
        <h1 class="page-header">Input Data Peminjaman</h1>
    </div>   <!--End Page Header -->
</div>  
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                RINCIAN:
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <form action="{{(isset($peminjaman))?route('peminjaman.update',$peminjaman->id_pinjam):route('peminjaman.store')}}" method="POST" role="form">
                            @csrf 
                            @if(isset($peminjaman))?@method('PUT')@endif
                            <div class="form-group">
                                <label>Tanggal</label>
                                <input type="text" value="{{(isset($peminjaman))?$peminjaman->tgl:old('tgl')}}" name="tgl" class="form-control">
                                @error('tgl')<small style="color:red">{{$message}}</small>@enderror
                            </div>
                            <div class="form-group">
                                <label>Id Pengelola</label>
                                <input type="text" value="{{(isset($peminjaman))?$peminjaman->id_pengelola:old('id_pengelola')}}" name="id_pengelola" class="form-control">
                                @error('id_pengelola')<small style="color:red">{{$message}}</small>@enderror
                            </div>
                            <div class="form-group">
                                <label>Id Anggota</label>
                                <input type="text" value="{{(isset($peminjaman))?$peminjaman->id_anggota:old('id_anggota')}}" name="id_anggota" class="form-control">
                                @error('id_anggota')<small style="color:red">{{$message}}</small>@enderror
                            </div>
                            <div class="form-group">
                                <label>Jumlah</label>
                                <input type="text" value="{{(isset($peminjaman))?$peminjaman->jumlah:old('jumlah')}}" name="jumlah" class="form-control">
                                @error('jumlah')<small style="color:red">{{$message}}</small>@enderror
                            </div>
                            <div class="form-group">
                                <label>Lama</label>
                                <input type="text" value="{{(isset($peminjaman))?$peminjaman->lama:old('lama')}}" name="lama" class="form-control">
                                @error('lama')<small style="color:red">{{$message}}</small>@enderror
                            </div>
                            <div class="form-group">
                                <label>Bunga</label>
                                <input type="text" value="{{(isset($peminjaman))?$peminjaman->bunga:old('bunga')}}" name="bunga" class="form-control">
                                @error('bunga')<small style="color:red">{{$message}}</small>@enderror
                            </div>
                            <div class="form-group">
                                <label>Keterangan</label>
                                <input type="text" value="{{(isset($peminjaman))?$peminjaman->keterangan:old('keterangan')}}" name="keterangan" class="form-control">
                                @error('keterangan')<small style="color:red">{{$message}}</small>@enderror
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-outline btn-primary">Save</button>
                                <a href="{{route('peminjaman.index')}}"><button type="button" class="btn btn-outline btn-success">Cancel</button></a>
                                
                            </div>
                        </form>
                    </div>
                </div>  
            </div>
            <div class="panel-footer"></div>
        </div>
    </div>            
</div>
@endsection

@section('script')

@endsection
           