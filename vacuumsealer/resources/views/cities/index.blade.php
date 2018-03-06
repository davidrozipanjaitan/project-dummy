@extends('app')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Cities</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('city.create') }}">Add City</a>
        </div>
    </div>
</div>


@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>

@endif

<table class="table table-bordered">
    <tr>
        <th width="10%"><center>No</center></th>
        <th align="center">Nama Kota</th> 
        <th align="center">Postal Code</th> 
        <th align="center">Provinsi</th>
        <th align="center">Country</th> 
        <th align="center">Region</th> 
        <th width="180px">Actions</th>
        
    </tr>

    @foreach ($cities as $city)

    <tr>
        <td>{{ ++$i }}</td>
        <td>{{$city->nama_cities}}</td>        
        <td>{{$city->postal_code}}</td>
        <td>{{$city->provinsi->nama_provinsi}}</td>
        <td>{{$city->provinsi->country->name}}</td>
        <td>{{$city->provinsi->country->region->nama}}</td>
        <td>
            <a class="btn btn-info">Show</a>
            <a class="btn btn-primary">Edit</a>            
            {!! Form::open(['method' => 'DELETE', 'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
    </tr>

    @endforeach
</table>

@endsection