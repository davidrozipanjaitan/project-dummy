


@extends('app')
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Provinsi</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('city.index') }}">Back</a>
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

{!! Form::model($data, ['method' => 'PATCH','route' => ['city.update', $data->id]]) !!}    

<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Kota : </strong>
        {!! Form::text('nama_cities', null, array('placeholder' => 'Nama Kota','class' => 'form-control')) !!}
    </div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Postal Code : </strong>
        {!! Form::text('postal_code', null, array('placeholder' => 'Postal Kode','class' => 'form-control')) !!}
    </div>
</div>


<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Region : </strong>
        <select name="id_region" id="id_region" class="form-control">                   
            <?php foreach ($region as $regions): ?>
                <?php if ($regions->id == $data->provinsi->country->region->id): ?>
                    <option value="<?php echo $regions->id; ?>" selected><?php echo $regions->nama; ?></option>
                    <?php Else: ?>
                    <option value="<?php echo $regions->id; ?>"><?php echo $regions->nama; ?></option>
                <?php EndIf; ?>		
                <?php EndForeach; ?>
        </select>      
    </div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Country : </strong>
        <select name="id_country" id="id_country" class="form-control">                   
            <?php foreach ($country as $countries): ?>
                <?php if ($countries->id == $data->provinsi->country->id): ?>
                    <option value="<?php echo $countries->id; ?>" selected><?php echo $countries->name; ?></option>
                    <?php Else: ?>
                    <option value="<?php echo $countries->id; ?>"><?php echo $countries->name; ?></option>
                <?php EndIf; ?>		
                <?php EndForeach; ?>
        </select> 
    </div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Provinsi : </strong>
        <select name="id_provinsi" id="id_provinsi" class="form-control">                   
            <?php foreach ($provinsi as $provinces): ?>
                <?php if ($provinces->id == $data->provinsi->id): ?>
                    <option value="<?php echo $provinces->id; ?>" selected><?php echo $provinces->nama_provinsi; ?></option>
                    <?php Else: ?>
                    <option value="<?php echo $provinces->id; ?>"><?php echo $provinces->nama_provinsi; ?></option>
                <?php EndIf; ?>		
                <?php EndForeach; ?>
        </select> 
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
    $("select[name='id_region']").change(function () {
        var id_region = $(this).val();
        var token = $("input[name='_token']").val();
        $.ajax({
            url: "<?php echo route('select-ajax') ?>",
            method: 'POST',
            data: {id_region: id_region, _token: token},
            success: function (data) {
                $("select[name='id_country'").html('');
                $("select[name='id_country'").html(data.options);
            }
        });
    });


    $("select[name='id_country']").change(function () {
        var id_country = $(this).val();
        var token = $("input[name='_token']").val();
        $.ajax({
            url: "<?php echo route('select-ajax-provinsi') ?>",
            method: 'POST',
            data: {id_country: id_country, _token: token},
            success: function (data) {
                $("select[name='id_provinsi'").html('');
                $("select[name='id_provinsi'").html(data.options);
            }
        });
    });
</script>

<div class="col-xs-12 col-sm-12 col-md-12 text-center">
    <button type="submit" class="btn btn-primary">Submit</button>
</div>

{!! Form::close() !!}
@endsection
