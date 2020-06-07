@extends('layout.admin')
@section('page-wrapper')
<div class="row">
    <!-- Page Header -->
    <div class="col-lg-12">
        <h1 class="page-header">Input Data Pengelola</h1>
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
                        <form action="{{(isset($Pengelola))?route('Pengelola.update',$Pengelola->id_pengelola):route('Pengelola.store')}}" method="POST" role="form">
                            @csrf 
                            @if(isset($Pengelola))?@method('PUT')@endif
                            <div class="form-group">
                                <label>ID Pengelola</label>
                                <input type="text" value="{{(isset($Pengelola))?$Pengelola->id_pengelola:old('id_pengelola')}}" name="id_pengelola" class="form-control">
                                @error('id_pengelola')<small style="color:red">{{$message}}</small>@enderror
                            </div>
                            <div class="form-group">
                                <label>ID Anggota</label>
                                <input type="text" value="{{(isset($Pengelola))?$Pengelola->id_anggota:old('id_anggota')}}" name="id_anggota" class="form-control">
                                @error('id_anggota')<small style="color:red">{{$message}}</small>@enderror
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-outline btn-primary">Save</button>
                                <a href="{{route('Pengelola.index')}}"><button type="button" class="btn btn-outline btn-success">Cancel</button></a>
                                
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
           