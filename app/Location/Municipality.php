<?php

namespace App\Location;

use Illuminate\Database\Eloquent\Model;

class Municipality extends Model
{
    //
    protected $table = 'lib_muncity';
    protected $primarykey = 'muncity_code';

    protected $casts = [ 
        'region_code' => 'string', 
        'province_code' => 'string', 
        'muncity_code' => 'string' 
    ];

    protected $fillable = [
        'region_code',
        'province_code',
        'muncity_name'
    ];

    public function facilities(){
        return $this->hasMany('App\Location\Facility','muncity_code','muncity_code');
    }

    public function wah_facilities(){
        return $this->hasManyThrough(
            'App\Location\FacilityWAH'  // Final destination model 
            ,'App\Location\Facility'    // Intermediate model
            ,'muncity_code'            // foreign key at intermediate model
            ,'hfhudcode'                // foreign key at final model
            ,'hfhudcode'                // local primary key
        );
    }
}
