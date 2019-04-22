<?php

namespace App\Location;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    //
    protected $table = "lib_province";
    protected $primaryKey = "province_code";

    // Indicates the literal conversion of attributes to a particular data type
    // province_code is retained as string even after JSON encoding
    // which prevents prefix 0s from disappearing
    protected $casts = [ 
        'region_code' => 'string', 
        'province_code' => 'string'
    ];
    protected $fillable = [
        'region_code',
        'province_code',
        'province_name',
    ];

    public function facilities(){
        return $this->hasMany('App\Location\Facility','province_code','province_code');
    }

    public function wah_facilities(){
        return $this->hasManyThrough(
            'App\Location\FacilityWAH'  // Final destination model 
            ,'App\Location\Facility'    // Intermediate model
            ,'province_code'            // foreign key at intermediate model
            ,'hfhudcode'                // foreign key at final model
            ,'hfhudcode'                // local primary key
        );
    }
}
