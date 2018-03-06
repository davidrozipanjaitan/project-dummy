<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class RegionController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //
        $region = \App\Region::latest()->paginate(10);
        return view('regions.index', compact('region'))
                        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
        return view('regions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
        request()->validate([
            'nama' => 'required',
        ]);
        
        $regions = new \App\Region;
        $regions->nama = Input::get('nama');        
        $regions->save();        
        
//        \App\Region::create($request->all());        
        return redirect()->route('region.index')
                         ->with('success', 'Region created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
        $regions = \App\Region::find($id);
        return view('regions.show', compact('regions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
        $regions = \App\Region::find($id);        
        return view('regions.edit', compact('regions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
        
        request()->validate([
            'nama' => 'required',
        ]);
        
//        $regions = new \App\Region;
//        $regions->nama = Input::get('nama');        
//        $regions->save();        
        
        \App\Region::find($id)->update($request->all());
        return redirect()->route('region.index')
                        ->with('success', 'Region updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
        \App\Region::find($id)->delete();
        return redirect()->route('region.index')
                ->with('success', 'Region berhasil di hapus');
    }

}
