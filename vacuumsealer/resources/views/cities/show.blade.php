@extends('app')
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>City Detail</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('city.index') }}">Back</a>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nama Kota:</strong>
            {{ $city->nama_cities }}
        </div>
    </div>
    
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Postal Code :</strong>
            {{ $city->postal_code }}
        </div>
    </div>
    
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nama Provinsi:</strong>
            {{ $city->provinsi->nama_provinsi }}
        </div>
    </div>
    
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nama Country:</strong>
            {{ $city->provinsi->country->name }}
        </div>
    </div>
    
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nama Region:</strong>
            {{ $city->provinsi->country->region->nama }}
        </div>
    </div>
   
</div>
@endsection