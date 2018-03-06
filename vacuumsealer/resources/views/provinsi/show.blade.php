@extends('app')
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Provinsi Detail</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('provinsi.index') }}">Back</a>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nama Provinsi:</strong>
            {{ $provinsi->nama_provinsi }}
        </div>
    </div>
    
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nama Country:</strong>
            {{ $provinsi->country->name }}
        </div>
    </div>
    
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nama Region:</strong>
            {{ $provinsi->country->region->nama }}
        </div>
    </div>
   
</div>
@endsection