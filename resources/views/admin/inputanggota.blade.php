@extends('layout.admin')
@section('page-wrapper')
<div class="row">
    <!-- Page Header -->
    <div class="col-lg-12">
        <h1 class="page-header">Input Data Anggota</h1>
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
                        <form action="{{(isset($Anggota))?route('Anggota.update',$Anggota->id_anggota):route('Anggota.store')}}" method="POST" role="form">
                            @csrf 
                            @if(isset($Anggota))?@method('PUT')@endif
                            <div class="form-group">
                                <label>ID Anggota</label>
                                <input type="text" value="{{(isset($Anggota))?$Anggota->id_anggota:old('id_anggota')}}" name="id_anggota" class="form-control">
                                @error('id_anggota')<small style="color:red">{{$message}}</small>@enderror
                            </div>
                            <div class="form-group">
                                <label>Nama Angggota</label>
                                <input type="text" value="{{(isset($Anggota))?$Anggota->nama_anggota:old('nama_anggota')}}" name="nama_anggota" class="form-control">
                                @error('id_pengelola')<small style="color:red">{{$message}}</small>@enderror
                            </div>
                            <div class="form-group">
                                <label>ID Poktan</label>
                                <input type="text" value="{{(isset($Anggota))?$Anggota->id_poktan:old('id_poktan')}}" name="id_poktan" class="form-control">
                                @error('id_poktan')<small style="color:red">{{$message}}</small>@enderror
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <input type="text" value="{{(isset($Anggota))?$Anggota->jk:old('jk')}}" name="jk" class="form-control">
                                @error('jk')<small style="color:red">{{$message}}</small>@enderror
                            </div>
                            <div class="form-group">
                                <label>Temapat Lahir</label>
                                <input type="text" value="{{(isset($Anggota))?$Anggota->tempat_lahir:old('tempat_lahir')}}" name="tempat_lahir" class="form-control">
                                @error('tempat_lahir')<small style="color:red">{{$message}}</small>@enderror
                            </div>
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input type="text" value="{{(isset($Anggota))?$Anggota->tanggal_lahir:old('tanggal_lahir')}}" name="tanggal_lahir" class="form-control">
                                @error('tanggal_lahir')<small style="color:red">{{$message}}</small>@enderror
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" value="{{(isset($Anggota))?$Anggota->alamat:old('alamat')}}" name="alamat" class="form-control">
                                @error('alamat')<small style="color:red">{{$message}}</small>@enderror
                            </div>
                            <div class="form-group">
                                <label>No HP</label>
                                <input type="text" value="{{(isset($Anggota))?$Anggota->no_hp:old('no_hp')}}" name="no_hp" class="form-control">
                                @error('no_hp')<small style="color:red">{{$message}}</small>@enderror
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-outline btn-primary">Save</button>
                                <a href="{{route('Anggota.index')}}"><button type="button" class="btn btn-outline btn-success">Cancel</button></a>
                                
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
           