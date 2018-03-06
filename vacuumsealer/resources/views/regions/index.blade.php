@extends('app')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Region</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('region.create') }}">Tambahkan Region</a>
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
        <th align="center">Nama Region</th>               
        <th width="280px">Action</th>
    </tr>

    @foreach ($region as $regions)

    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $regions->nama }}</td>        
        <td>
            <a class="btn btn-info" href="{{ route('region.show',$regions->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route ('region.edit',$regions->id)}} ">Edit</a>            
            {!! Form::open(['method' => 'DELETE','route' => ['region.destroy', $regions->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
    </tr>

    @endforeach
</table>

@endsection