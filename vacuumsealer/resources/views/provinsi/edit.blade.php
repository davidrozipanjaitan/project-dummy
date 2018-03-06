@extends('app')
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Provinsi</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('provinsi.index') }}">Back</a>
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

{!! Form::model($data, ['method' => 'PATCH','route' => ['provinsi.update', $data->id]]) !!}    

<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Provinsi : </strong>
        {!! Form::text('nama_provinsi', null, array('placeholder' => 'Nama Provinsi','class' => 'form-control')) !!}
    </div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Country</strong>
        <select name="country_id" id="country_id" class="form-control">                   
            <?php foreach ($country as $countries): ?>
                <?php if ($countries->id == $data->country->id): ?>
                    <option value="<?php echo $countries->id; ?>" selected><?php echo $countries->name; ?></option>
                    <?php Else: ?>
                    <option value="<?php echo $countries->id; ?>"><?php echo $countries->name; ?></option>
                <?php EndIf; ?>		
                <?php EndForeach; ?>
        </select>            
    </div>
</div> 

<div class="col-xs-12 col-sm-12 col-md-12 text-center">
    <button type="submit" class="btn btn-primary">Submit</button>
</div>

{!! Form::close() !!}
@endsection