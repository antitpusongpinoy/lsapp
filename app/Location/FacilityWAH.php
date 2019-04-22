<?php

namespace App\Location;

use Illuminate\Database\Eloquent\Model;

class FacilityWAH extends Model
{
    //
    protected $table = 'lib_facility_wah';
    protected $primaryKey = 'hfhudcode';
    public $incrementing = false; // hfhudcode is a varchar

    protected $fillable = [
        'is_listed'
    ];
}
