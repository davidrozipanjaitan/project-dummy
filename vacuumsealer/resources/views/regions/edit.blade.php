@extends('app')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Region</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('region.index') }}">Back</a>
            </div>
        </div>
    </div>


    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {!! Form::model($regions, ['method' => 'PATCH','route' => ['region.update', $regions->id]]) !!}
       @include('regions.form')
    {!! Form::close() !!}
@endsection