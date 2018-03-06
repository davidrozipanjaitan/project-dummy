@extends('app')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Provinsi</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('provinsi.create') }}">Add Provinsi</a>
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
        <th align="center">Nama Provinsi</th> 
        <th align="center">Nama Country</th> 
        <th width="280px">Action</th>
    </tr>

    @foreach ($provinsi as $provinsis)

    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $provinsis->nama_provinsi }}</td>        
        <td>{{ $provinsis->country->name }}</td>
        <td>
            <a class="btn btn-info" href="{{ route('provinsi.show',$provinsis->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('provinsi.edit',$provinsis->id) }}">Edit</a>            
            {!! Form::open(['method' => 'DELETE', 'route' => ['provinsi.destroy', $provinsis->id], 'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
    </tr>

    @endforeach
</table>

@endsection