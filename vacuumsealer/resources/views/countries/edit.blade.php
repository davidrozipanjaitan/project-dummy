@extends('app')
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Country</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('country.index') }}">Back</a>
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

{!! Form::model($data, ['method' => 'PATCH','route' => ['country.update', $data->id]]) !!}    

<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong> Country : </strong>
        {!! Form::text('name', null, array('placeholder' => 'Nama Country','class' => 'form-control')) !!}
    </div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Region</strong>
        <select name="region_id" id="region_id" class="form-control">                   
            <?php foreach ($regions as $region): ?>
                <?php if ($region->id == $data->region->id): ?>
                    <option value="<?php echo $region->id; ?>" selected><?php echo $region->nama; ?></option>
                    <?php Else: ?>
                    <option value="<?php echo $region->id; ?>"><?php echo $region->nama; ?></option>
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