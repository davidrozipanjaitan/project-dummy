<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AjaxDemoController extends Controller {

    //
    public function myform() {
//        $countries = DB::table('countries')->pluck("name", "id")->all();
//        return view('myform', compact('countries'));
        
        $regions = DB::table("regions")->pluck("nama","id");    
        return view('myform-1',compact('regions'));
    }

    
    public function selectAjax(Request $request) {
//        if ($request->ajax()) {
//            $states = DB::table('states')->where('id_country', $request->id_country)->pluck("name", "id")->all();
//            $data = view('ajax-select', compact('states'))->render();
//            return response()->json(['options' => $data]);
//        }
        
        if ($request->ajax()) {
            $countries = DB::table('countries')->where('id_region', $request->id_region)->pluck("name", "id")->all();
            $data = view('ajax-select', compact('countries'))->render();
            return response()->json(['options' => $data]);
        }
        
//        $countries = DB::table("countries")
//                    ->where("id_region",$id)
//                    ->pluck("name","id");
//        return json_encode($countries);
    }
    
    public function selectAjaxProvinsi(Request $request) {
        
        if ($request->ajax()) {
            $provinsi = DB::table('provinces')->where('id_country', $request->id_country)->pluck("nama_provinsi", "id")->all();
            $data = view('ajax-select-provinsi', compact('provinsi'))->render();
            return response()->json(['options' => $data]);
        }
        
    }

}
