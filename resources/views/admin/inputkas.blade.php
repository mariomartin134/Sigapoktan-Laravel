@extends('layout.admin')
@section('page-wrapper')
<div class="row">
    <!-- Page Header -->
    <div class="col-lg-12">
        <h1 class="page-header">Input Data Kas</h1>
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
                        <form action="{{(isset($Kas))?route('Kas.update',$Kas->id_kas):route('Kas.store')}}" method="POST" role="form">
                            @csrf 
                            @if(isset($Kas))?@method('PUT')@endif
                            <div class="form-group">
                                <label>ID Kas</label>
                                <input type="text" value="{{(isset($Kas))?$Kas->id_kas:old('id_kas')}}" name="id_kas" class="form-control">
                                @error('id_kas')<small style="color:red">{{$message}}</small>@enderror
                            </div>
                            <div class="form-group">
                                <label>Id Pengelola</label>
                                <input type="text" value="{{(isset($Kas))?$Kas->id_pengelola:old('id_pengelola')}}" name="id_pengelola" class="form-control">
                                @error('id_pengelola')<small style="color:red">{{$message}}</small>@enderror
                            </div>
                            <div class="form-group">
                                <label>Tanggal</label>
                                <input type="text" value="{{(isset($Kas))?$Kas->tgl:old('tgl')}}" name="tgl" class="form-control">
                                @error('tgl')<small style="color:red">{{$message}}</small>@enderror
                            </div>
                            <div class="form-group">
                                <label>Uraian</label>
                                <input type="text" value="{{(isset($Kas))?$Kas->uraian:old('uraian')}}" name="uraian" class="form-control">
                                @error('Uraian')<small style="color:red">{{$message}}</small>@enderror
                            </div>
                            <div class="form-group">
                                <label>Debet</label>
                                <input type="text" value="{{(isset($Kas))?$Kas->debet:old('debet')}}" name="debet" class="form-control">
                                @error('debet')<small style="color:red">{{$message}}</small>@enderror
                            </div>
                            <div class="form-group">
                                <label>Kredit</label>
                                <input type="text" value="{{(isset($Kas))?$Kas->kredit:old('kredit')}}" name="kredit" class="form-control">
                                @error('kredit')<small style="color:red">{{$message}}</small>@enderror
                            </div>
                            <div class="form-group">
                                <label>Saldo</label>
                                <input type="text" value="{{(isset($Kas))?$Kas->saldo:old('saldo')}}" name="saldo" class="form-control">
                                @error('saldo')<small style="color:red">{{$message}}</small>@enderror
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-outline btn-primary">Save</button>
                                <a href="{{route('Kas.index')}}"><button type="button" class="btn btn-outline btn-success">Cancel</button></a>
                                
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
           