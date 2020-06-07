@extends('layout.admin')
@section('page-wrapper')
<div class="row">
    <!-- Page Header -->
    <div class="col-lg-12">
        <h1 class="page-header">Input Data Transaksi</h1>
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
                        <form action="{{(isset($Transaksi))?route('transaksi.update',$Transaksi->id_transaksi):route('transaksi.store')}}" method="POST" role="form">
                            @csrf 
                            @if(isset($Transaksi))?@method('PUT')@endif
                            <div class="form-group">
                                <label>ID Transaksi</label>
                                <input type="text" value="{{(isset($Transaksi))?$Transaksi->id_transaksi:old('id_transaksi')}}" name="id_transaksi" class="form-control">
                                @error('id_transaksi')<small style="color:red">{{$message}}</small>@enderror
                            </div>
                            <div class="form-group">
                                <label>Id Pengelola</label>
                                <input type="text" value="{{(isset($Transaksi))?$Transaksi->id_pengelola:old('id_pengelola')}}" name="id_pengelola" class="form-control">
                                @error('id_pengelola')<small style="color:red">{{$message}}</small>@enderror
                            </div>
                            <div class="form-group">
                                <label>Tanggal</label>
                                <input type="text" value="{{(isset($Transaksi))?$Transaksi->tgl:old('tgl')}}" name="tgl" class="form-control">
                                @error('tgl')<small style="color:red">{{$message}}</small>@enderror
                            </div>
                            <div class="form-group">
                                <label>Debet</label>
                                <input type="text" value="{{(isset($Transaksi))?$Transaksi->debet:old('debet')}}" name="debet" class="form-control">
                                @error('debet')<small style="color:red">{{$message}}</small>@enderror
                            </div>
                            <div class="form-group">
                                <label>Kredit</label>
                                <input type="text" value="{{(isset($Transaksi))?$Transaksi->kredit:old('kredit')}}" name="kredit" class="form-control">
                                @error('kredit')<small style="color:red">{{$message}}</small>@enderror
                            </div>
                            <div class="form-group">
                                <label>Perihal</label>
                                <input type="text" value="{{(isset($Transaksi))?$Transaksi->prihal:old('prihal')}}" name="prihal" class="form-control">
                                @error('prihal')<small style="color:red">{{$message}}</small>@enderror
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-outline btn-primary">Save</button>
                                <a href="{{route('transaksi.index')}}"><button type="button" class="btn btn-outline btn-success">Cancel</button></a>
                                
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
           