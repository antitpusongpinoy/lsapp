<?php

namespace App\Location;

use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    //
    protected $table = "lib_facility";
    protected $primaryKey = "hfhudcode";
    public $incrementing = false; // hfhudcode is a varchar

    protected $casts = [
        'region_code' => 'string',
        'province_code' => 'string',
        'muncity_code' => 'string',
        'brgy_code' => 'string',
    ];
    protected $fillable = [  
        'hfhudname',
        'region_code',
        'province_code',
        'muncity_code',
        'brgy_code',
        'statflag',
    ];

    public function coordinates(){
        return $this->hasOne('App\Location\FacilityCoordinateLevel','hfhudcode','hfhudcode');
    }

    /* public function morbidities(){
        return $this->hasMany('App\Program\MorbidityDiseases','HFHUDCODE','hfhudcode');
    } */

    public function wah_facility(){
        return $this->hasOne('App\Location\FacilityWAH','hfhudcode','hfhudcode');
    }

    public function province(){
        return $this->belongsTo('App\Location\Province','province_code','province_code');
    }
    public function muncity(){
        return $this->belongsTo('App\Location\Municipality','muncity_code','muncity_code');
    }
}
