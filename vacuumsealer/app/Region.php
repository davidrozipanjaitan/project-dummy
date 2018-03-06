<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    //
    public $table ="regions";
    //
    protected $fillable = [
        'nama'
    ];
    
    public function country(){
        return $this->hasMany('Country');
    }
}
