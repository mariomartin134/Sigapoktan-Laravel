@extends('layout.admin')
@section('page-wrapper')
<div class="row">
    <!-- Page Header -->
    <div class="col-lg-12">
        <h1 class="page-header">Input Data Poktan</h1>
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
                        <form action="{{(isset($Poktan))?route('Poktan.update',$Poktan->id_poktan):route('Poktan.store')}}" method="POST" role="form">
                            @csrf 
                            @if(isset($Poktan))?@method('PUT')@endif
                            <div class="form-group">
                                <label>ID Poktan</label>
                                <input type="text" value="{{(isset($Poktan))?$Poktan->id_poktan:old('id_poktan')}}" name="id_poktan" class="form-control">
                                @error('id_poktan')<small style="color:red">{{$message}}</small>@enderror
                            </div>
                            <div class="form-group">
                                <label>Nama Poktan</label>
                                <input type="text" value="{{(isset($Poktan))?$Poktan->nama_poktan:old('nama_poktan')}}" name="nama_poktan" class="form-control">
                                @error('nama_poktan')<small style="color:red">{{$message}}</small>@enderror
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" value="{{(isset($Poktan))?$Poktan->alamat:old('alamat')}}" name="alamat" class="form-control">
                                @error('alamat')<small style="color:red">{{$message}}</small>@enderror
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-outline btn-primary">Save</button>
                                <a href="{{route('Poktan.index')}}"><button type="button" class="btn btn-outline btn-success">Cancel</button></a>
                                
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
           