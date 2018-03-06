<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nama Produk:</strong>
            {!! Form::text('nama_produk', null, array('placeholder' => 'Nama Produk','class' => 'form-control')) !!}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Keterangan:</strong>
            {!! Form::textarea('keterangan_produk', null, array('placeholder' => 'Deskripsi singkat produk','class' => 'form-control','style'=>'height:150px')) !!}            
        </div>
    </div>
    
      <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Harga:</strong>
            {!! Form::text('harga', null, array('placeholder' => 'Harga produk per item','class' => 'form-control')) !!}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Stok:</strong>
            {!! Form::text('stok', null, array('placeholder' => 'Stok','class' => 'form-control')) !!}
        </div>
    </div>
    
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>