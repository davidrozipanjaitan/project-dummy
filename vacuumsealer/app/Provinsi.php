<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    //
    public $table ="provinces";
    //
    protected $fillable = [
        'nama_provinsi'
    ];
    
    public function country(){
        return $this->belongsTo('\App\Country', 'id_country');
    }
    
    public function cities(){
        return $this->hasMany('Cities');
    }
}
