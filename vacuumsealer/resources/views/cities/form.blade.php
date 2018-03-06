<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Cities : </strong>
            {!! Form::text('nama_cities', null, array('placeholder' => 'Nama Kota','class' => 'form-control')) !!}
        </div>
    </div>


    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Postal Code : </strong>
            {!! Form::text('postal_code', null, array('placeholder' => 'Postal Code','class' => 'form-control')) !!}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Select Region</strong>
            <select name="id_region" id="region_id" class="form-control">  
                <option>--- Select Region ---</option>
                <?php foreach ($regions as $region): ?>
                    <option value="<?php echo $region->id; ?>"><?php echo $region->nama; ?></option>	
                <?php EndForeach; ?>	
            </select>            
        </div>
    </div>       

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <label>Select Country:</label>
            {!! Form::select('id_country',[''=>'--- Select Country ---'],null,['class'=>'form-control']) !!}
        </div>  
    </div> 

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <label>Select Provinsi:</label>
            {!! Form::select('id_provinsi',[''=>'--- Select Provinsi ---'],null,['class'=>'form-control']) !!}
        </div>    
    </div> 

    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
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