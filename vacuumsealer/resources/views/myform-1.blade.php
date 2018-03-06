<!DOCTYPE html>
<html>
    <head>
        <title>Laravel 5 - onChange event using ajax dropdown list</title>
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    </head>

    <body>
        <div class="container">
            <h1>Laravel 5 - Dynamic Dependant Select Box using JQuery Ajax Example</h1>
            {!! Form::open() !!}
            <div class="form-group">
                <label>Select Region:</label>
                {!! Form::select('id_region',$regions,null,['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                <label>Select Country:</label>
                {!! Form::select('id_country',[''=>'--- Select State ---'],null,['class'=>'form-control']) !!}
            </div>
            
            <div class="form-group">
                <label>Select Provinsi:</label>
                {!! Form::select('id_provinsi',[''=>'--- Select State ---'],null,['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                <button class="btn btn-success" type="submit">Submit</button>
            </div>
            {!! Form::close() !!}
        </div>

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
        
        
        <script type="text/javascript">       
        </script>
        
    </body>
</html>