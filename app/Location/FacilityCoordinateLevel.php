<?php

namespace App\Location;

use Illuminate\Database\Eloquent\Model;

class FacilityCoordinateLevel extends Model
{
    //
    protected $table = "lib_facility_coordinate_level";
    protected $primaryKey = "hfhudcode";
    public $incrementing = false; // hfhudcode is a varchar

    protected $fillable = [  
        'longitude',
        'latitude',
        'level',
    ];
    
    public function facility(){
        return $this->belongsTo('App\Location\Facility','hfhudcode','hfhudcode');
    }
}
