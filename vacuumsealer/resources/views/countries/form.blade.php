<div class="row">
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
                    <?php foreach($region as $regions): ?>
                            <option value="<?php echo $regions->id;?>"><?php echo $regions->nama;?></option>	
                    <?php EndForeach; ?>	
                </select>            
         </div>
    </div>       
    
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>