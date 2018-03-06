<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ProvinsiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $provinsi = \App\Provinsi::with('country')->get();
        return view('provinsi.index', compact('provinsi'))
                        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $countries = \App\Country::get();
        return view('provinsi.create', compact('countries'));
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
            'nama_provinsi' => 'required',
            'country_id' => 'required',
        ]);

        $provinsi = new \App\Provinsi();
        $provinsi->nama_provinsi = Input::get('nama_provinsi');
        $provinsi->id_country = Input::get('country_id');
        $provinsi->save();

        return redirect()->route('provinsi.index')
                        ->with('success', 'Provinsi created successfully');
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
        $provinsi = \App\Provinsi::find($id);
        return view('provinsi.show', compact('provinsi'));
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
        $data = \App\Provinsi::find($id);     
        $country = \App\Country::all();          
        $provinsi = \App\Provinsi::where('id_country', '=', $data->country->id)->get();
        
        return view('provinsi.edit', compact('data', 'country', 'provinsi'));
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
        $this->validate($request, [
            'nama_provinsi' => 'required',
            'country_id' => 'required',
        ]);
//        \App\Provinsi::find($id)->update($request->all());
        
        $provinsi = \App\Provinsi::find($id);
        $provinsi->nama_provinsi = Input::get('nama_provinsi');
        $provinsi->id_country = Input::get('country_id');
        $provinsi->save();

        return redirect()->route('provinsi.index')
                        ->with('success', 'Provinsi updated successfully');
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
    }
}
