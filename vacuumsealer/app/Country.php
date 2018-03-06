<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    //
    public $table ="countries";
    //
    protected $fillable = [
        'name'
    ];
    
    public function region(){
        return $this->belongsTo('\App\Region', 'id_region');
    }
    
    public function provinsi(){
        return $this->hasMany('Provinsi');
    }
    
}
