<?php

namespace App\Location;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    //
    protected $table = 'lib_region';
    protected $primaryKey = 'region_code';
    public $incrementing = false;

    protected $fillable = [
        'region_name'
    ];

    public function facilities(){
        return $this->hasMany('App\Location\Facility','region_code','region_code');
    }
    public function wah_facilities(){
        return $this->hasManyThrough(
            'App\Location\FacilityWAH'  // Final destination model 
            ,'App\Location\Facility'    // Intermediate model
            ,'region_code'            // foreign key at intermediate model
            ,'hfhudcode'                // foreign key at final model
            ,'hfhudcode'                // local primary key
        );
    }
}
