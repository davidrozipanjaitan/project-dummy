@extends('app')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Country</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('country.create') }}">Tambahkan Country</a>
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
        <th align="center">Nama Country</th> 
        <th align="center">Nama Region</th> 
        <th width="280px">Action</th>
    </tr>

    @foreach ($country as $countries)

    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $countries->name }}</td>        
        <td>{{ $countries->region->nama }}</td>
        <td>
            <a class="btn btn-info" href="{{ route('country.show',$countries->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('country.edit',$countries->id) }}">Edit</a>            
            {!! Form::open(['method' => 'DELETE', 'route' => ['country.destroy', $countries->id], 'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
    </tr>

    @endforeach
</table>

@endsection