<div class="row">
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
                    <?php foreach($countries as $countrie): ?>
                            <option value="<?php echo $countrie->id;?>"><?php echo $countrie->name;?></option>	
                    <?php EndForeach; ?>	
                </select>            
         </div>
    </div>       
    
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>