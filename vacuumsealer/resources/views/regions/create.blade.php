@extends('app')
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Tambahkan Region Baru</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('region.index') }}">Back</a>
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

{!! Form::open(array('route' => 'region.store','method'=>'POST')) !!}
@include('regions.form')
{!! Form::close() !!}

@endsection