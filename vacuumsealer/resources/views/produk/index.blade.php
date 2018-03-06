@extends('app')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Produk</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('produk.create') }}">Tambahkan Barang</a>
            </div>
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>

    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama Produk</th>
            <th>Keterangan</th>
            <th>Harga</th>
            <th>Stok</th>            
            <th width="280px">Action</th>
        </tr>

    @foreach ($produk as $produks)

    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $produks->nama_produk}}</td>
        <td>{{ $produks->keterangan_produk}}</td>
        <td>{{ $produks->harga}}</td>
        <td>{{ $produks-> stok}}</td>
        <td>
            <a class="btn btn-info" href="{{ route('produk.show',$produks->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('produk.edit',$produks->id) }}">Edit</a>

            {!! Form::open(['method' => 'DELETE','route' => ['produk.destroy', $produks->id],'style'=>'display:inline']) !!}

            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}

            {!! Form::close() !!}
        </td>
    </tr>

    @endforeach
    </table>

    {!! $produk->links() !!}
@endsection