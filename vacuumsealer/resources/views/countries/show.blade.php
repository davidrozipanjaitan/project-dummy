@extends('app')
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Country Detail</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('country.index') }}"> Back</a>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nama Country:</strong>
            {{ $countries->name }}
        </div>
    </div>
    
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nama Regions:</strong>
            {{ $countries->region->nama }}
        </div>
    </div>
   
</div>
@endsection