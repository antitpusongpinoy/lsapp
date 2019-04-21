<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Location\Region;
use DB;
class RegionsController extends Controller
{
    //
    protected $table = 'lib_region';
    protected $primarykey = 'region_code';
    public $incrementing = false;

    protected $fillable = [
        'region_name'
    ];
}
