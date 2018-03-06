<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class CountriesController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //
        $country = \App\Country::with('region')->get();
        return view('countries.index', compact('country'))
                        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //        
        $region = \App\Region::get();
        return view('countries.create', compact('region'));
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
            'name' => 'required',
            'region_id' => 'required',
        ]);

        $country = new \App\Country();
        $country->name = Input::get('name');
        $country->id_region = Input::get('region_id');
        $country->save();

        return redirect()->route('country.index')
                        ->with('success', 'Country created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
        $countries = \App\Country::find($id);
        return view('countries.show', compact('countries'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
        $data = \App\Country::find($id);     
        $regions = \App\Region::all();          
        $country = \App\Country::where('id_region', '=', $data->region->id)->get();
        
//        echo $data.'<br> <br>';
//        echo $data->region->id.'<br> <br>';
//        echo $data->region->nama. '<br><br>';
//        echo $regions.'<br> <br>';
//        echo $country;
        
        return view('countries.edit', compact('data', 'regions', 'country'));
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
        $this->validate($request, [
            'name' => 'required',
            'region_id' => 'required',
        ]);
//        \App\Country::find($id)->update($request->all());
        $country = \App\Country::find($id);        
        $country->name = Input::get('name');
        $country->id_region = Input::get('region_id');
        $country->save();

        return redirect()->route('country.index')
                        ->with('success', 'Country updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
        \App\Country::find($id)->delete();
        return redirect()->route('country.index')
                        ->with('success', 'Country berhasil dihapus');
    }

}
