<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cities extends Model
{
    //
     public $table ="cities";
    //
    protected $fillable = [
        'nama_cities'
    ];
    
    public function provinsi(){
        return $this->belongsTo('\App\Provinsi', 'id_provinsi');
    }
}
