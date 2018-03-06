@extends('app')
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Product Detail</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('produk.index') }}"> Back</a>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nama Produk:</strong>
            {{ $produk->nama_produk}}
        </div>
    </div>
    
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Keterangan Produk:</strong>
            {{ $produk->keterangan_produk}}
        </div>
    </div>
    
     <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Body:</strong>
            {{ $produk->harga}}
        </div>
    </div>
    
     <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Body:</strong>
            {{ $produk->stok}}
        </div>
    </div>
</div>

<table>
    <tr>
        <td>Nama Produk:</td>
        <td>{{ $produk->nama_produk}}</td>
    </tr>
    <tr>
        <td>Keterangan Produk:</td>
        <td>{{ $produk->keterangan_produk}}</td>
    </tr>
    <tr>
        <td>Harga</td>
        <td>{{ $produk->harga}}</td>
    </tr>
    <tr>
        <td>Stok</td>
        <td>{{ $produk->stok}}</td>
    </tr>
</table>
@endsection