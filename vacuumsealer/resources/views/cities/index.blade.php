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
        <th width="10px"><center>No</center></th>
        <th align="40px">Nama Kota</th> 
        <th align="center">Postal Code</th> 
        <th align="center">Provinsi</th>
        <th align="center">Country</th> 
        <th align="center">Region</th> 
        <th width="280px">Actions</th>
        
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
            <a class="btn btn-info" href="{{ route('city.show',$city->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('city.edit',$city->id) }}">Edit</a>                        
            {!! Form::open(['method' => 'DELETE', 'route' => ['city.destroy', $city->id], 'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
    </tr>

    @endforeach
</table>

@endsection