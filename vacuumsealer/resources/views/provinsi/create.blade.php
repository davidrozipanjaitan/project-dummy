@extends('app')
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Provinsi</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('provinsi.index') }}">Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong>Input Anda salah, silakan cek kembali<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>

@endif

{!! Form::open(array('route' => 'provinsi.store','method'=>'POST')) !!}
@include('provinsi.form')
{!! Form::close() !!}

@endsection