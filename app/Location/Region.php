<?php

namespace App;

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
}
