@extends('layout.admin')
@section('page-wrapper')
<div class="row">
    <!-- Page Header -->
    <div class="col-lg-12">
        <h1 class="page-header">Input Data Pengembalian</h1>
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
                        <form action="{{(isset($pengembalian))?route('pengembalian.update',$pengembalian->id_kembali):route('pengembalian.store')}}" method="POST" role="form">
                            @csrf 
                            @if(isset($pengembalian))?@method('PUT')@endif
                            <div class="form-group">
                                <label>Id Peminjaman</label>
                                <input type="text" value="{{(isset($pengembalian))?$pengembalian->id_pinjam:old('id_pinjam')}}" name="id_pinjam" class="form-control">
                                @error('id_pinjam')<small style="color:red">{{$message}}</small>@enderror
                            </div>
                            <div class="form-group">
                                <label>Id Pengelola</label>
                                <input type="text" value="{{(isset($pengembalian))?$pengembalian->id_pengelola:old('id_pengelola')}}" name="id_pengelola" class="form-control">
                                @error('id_pengelola')<small style="color:red">{{$message}}</small>@enderror
                            </div>
                            <div class="form-group">
                                <label>Pokok</label>
                                <input type="text" value="{{(isset($pengembalian))?$pengembalian->pokok:old('pokok')}}" name="pokok" class="form-control">
                                @error('pokok')<small style="color:red">{{$message}}</small>@enderror
                            </div>
                            <div class="form-group">
                                <label>Bunga</label>
                                <input type="text" value="{{(isset($pengembalian))?$pengembalian->bunga:old('bunga')}}" name="bunga" class="form-control">
                                @error('bunga')<small style="color:red">{{$message}}</small>@enderror
                            </div>
                            <div class="form-group">
                                <label>Bulan ke</label>
                                <input type="text" value="{{(isset($pengembalian))?$pengembalian->lama_bulan:old('lama_bulan')}}" name="lama_bulan" class="form-control">
                                @error('lama_bulan')<small style="color:red">{{$message}}</small>@enderror
                            </div>
                            <div class="form-group">
                                <label>Biaya Adm</label>
                                <input type="text" value="{{(isset($pengembalian))?$pengembalian->biaya_adm:old('biaya_adm')}}" name="biaya_adm" class="form-control">
                                @error('biaya_adm')<small style="color:red">{{$message}}</small>@enderror
                            </div>
                            <div class="form-group">
                                <label>Tunggakan</label>
                                <input type="text" value="{{(isset($pengembalian))?$pengembalian->tunggakan:old('tunggakan')}}" name="tunggakan" class="form-control">
                                @error('tunggakan')<small style="color:red">{{$message}}</small>@enderror
                            </div>
                            <div class="form-group">
                                <label>Tanggal</label>
                                <input type="text" value="{{(isset($pengembalian))?$pengembalian->tgl_bayar:old('tgl_bayar')}}" name="tgl_bayar" class="form-control">
                                @error('tgl_bayar')<small style="color:red">{{$message}}</small>@enderror
                            </div>
                            <div class="form-group">
                                <label>Wuku</label>
                                <input type="text" value="{{(isset($pengembalian))?$pengembalian->wuku:old('wuku')}}" name="wuku" class="form-control">
                                @error('wuku')<small style="color:red">{{$message}}</small>@enderror
                            </div>
                            <div class="form-group">
                                <label>Jumlah Bayar</label>
                                <input type="text" value="{{(isset($pengembalian))?$pengembalian->jumlah_bayar:old('jumlah_bayar')}}" name="jumlah_bayar" class="form-control">
                                @error('jumlah_bayar')<small style="color:red">{{$message}}</small>@enderror
                            </div>
                            <div class="form-group">
                                <label>Keterangan</label>
                                <input type="text" value="{{(isset($pengembalian))?$pengembalian->keterangan:old('keterangan')}}" name="keterangan" class="form-control">
                                @error('keterangan')<small style="color:red">{{$message}}</small>@enderror
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-outline btn-primary">Save</button>
                                <a href="{{route('pengembalian.index')}}"><button type="button" class="btn btn-outline btn-success">Cancel</button></a>
                                
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
           