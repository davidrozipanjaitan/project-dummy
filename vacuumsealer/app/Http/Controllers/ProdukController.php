<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $produk = \App\Produk::latest()->paginate(5);
        return view('produk.index', compact('produk'))
                ->with('i', (request()->input('page', 1) - 1)* 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('produk.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //        
        request()->validate([
            'nama_produk' => 'required',
            'keterangan_produk' => 'required',
            'harga'=> 'required',
            'stok'=> 'required',
        ]);               
//        \App\Produk::create($request->all());       
        
        $produks = new \App\Produk();
        $produks->nama_produk = Input::get('nama_produk');  
        $produks->keterangan_produk = Input::get('keterangan_produk');  
        $produks->harga = Input::get('harga');  
        $produks->stok = Input::get('stok');  
        $produks->save();
        return redirect()->route('produk.index')
                        ->with('success', 'Produk created successfully');
        
//        $produk = new \App\Produk([
//            'nama_produk' => $request->get('nama_produk'),
//            'keterangan_produk' => $request->get('keterangan_produk'),
//            'harga'=>$request->get('harga'),
//            'stok'=>$request->get('stok')
//        ]);
//
//        $produk->save();
//         return redirect()->route('produk.index')
//                        ->with('success', 'Produk created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $produk = \App\Produk::find($id);
        return view('produk.show', compact('produk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $produk= \App\Produk::find($id);
        return view('produk.edit', compact('produk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
         request()->validate([
            'nama_produk' => 'required',
            'keterangan_produk' => 'required',
            'harga'=> 'required',
            'stok'=>'required',
        ]);

        //Article::find($id)->update($request->all());
        \App\Produk::find($id)->update($request->all());
        return redirect()->route('produk.index')
                        ->with('success', 'Produk updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  
    public function destroy($id)
    {      
        //
        \App\Produk::find($id)->delete();
        return redirect()->route('produk.index')
                ->with('success', 'Produk berhasil di hapus');
    }   
        
}
