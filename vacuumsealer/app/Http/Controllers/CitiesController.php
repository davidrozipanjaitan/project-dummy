<?php

namespace App\Http\Controllers;

use DB;
use App\Quotation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class CitiesController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //
        $cities = \App\Cities::with('provinsi')->get();
        return view('cities.index', compact('cities'))
                        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
        $regions = \App\Region::get();
        $data_regions = DB::table("regions")->pluck("nama", "id");
        return view('cities.create', compact('regions', 'data_regions'));
    }
    
      public function selectAjax(Request $request) {
        
        if ($request->ajax()) {
            $countries = DB::table('countries')->where('id_region', $request->id_region)->pluck("name", "id")->all();
            $data = view('cities.city-country-ajax-select', compact('countries'))->render();
            return response()->json(['options' => $data]);
            
        }
    }
    
    public function selectAjaxProvinsi(Request $request) {
        
        if ($request->ajax()) {
            $provinsi = DB::table('provinces')->where('id_country', $request->id_country)->pluck("nama_provinsi", "id")->all();
            $data = view('city.ajax-select-provinsi', compact('provinsi'))->render();
            return response()->json(['options' => $data]);
        }
        
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
            'nama_cities' => 'required',
            'postal_code' => 'required',      
            'id_provinsi'=>'required',
        ]);

        $city = new \App\Cities();
        $city->nama_cities = Input::get('nama_cities');
        $city->postal_code = Input::get('postal_code');
        $city->id_provinsi = Input::get('id_provinsi');
//        $city->provinsi->country->id_country = Input::get('id_country');
//        $city->provinsi->country->region->id_region = Input::get('id_region');
        
//        echo $city->nama_cities.'<br>';
//        echo $city->postal_code.'<br>';
//        echo $city->provinsi->country->region->id_region.'<br>';                
//        echo $city->provinsi->country->id_country.'<br>';
//        echo $city->id_provinsi.'<br>';
        
//        $city->id_provinsi = Input::get('');
//        $country->id_region = Input::get('region_id');
        $city->save();
//
        return redirect()->route('city.index')
                        ->with('success', 'City created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

//    public function myform()
//    {
//        $regions = DB::table("regions")->pluck("nama","id");    
//        return view('myform',compact('regions'));
////        echo $regions;
//                        
//    }
//
//    public function myformAjax($id)
//    {
//        $countries = DB::table("countries")
//                    ->where("id_region",$id)
//                    ->pluck("name","id");
//        return json_encode($countries);
////        echo $countries;
//    }

}
