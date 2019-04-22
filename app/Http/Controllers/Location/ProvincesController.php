<?php

namespace App\Http\Controllers\Location;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Location\Province;
use DB;
class ProvincesController extends Controller
{
    //
    private static $db_cols = [
        'Region' => [
            'model'=>'App\\Location\\Region',
            'name'=>'region_name',
            'code'=>'region_code'
        ],
        'Province' => [
            'model'=>'App\\Location\\Province',
            'name'=>'province_name',
            'code'=>'province_code'
        ],
        'Municipality' => [
            'model'=>'App\\Location\\Municipality',
            'name'=>'muncity_name',
            'code'=>'muncity_code'
        ],
        'Facility' => [
            'model'=>'App\\Location\\Facility',
            'name'=>'hfhudname',
            'code'=>'hfhudcode'
        ]
    ];
    /**
     * Retrieves all provinces with active facilities.
     * 
     * @return \Illuminate\Http\Response
     * Returns a response containing all provinces with active facilities.
     */
    public function getActiveProvinces(){

    }
    public function getWAHProvinces(){
       /*  DB::enableQueryLog(); */

        $query = Province::select(DB::raw('lib_province.region_code as region_code, lib_province.province_code as location_code, province_name as location_name'))
        ->join('lib_facility','lib_facility.province_code','=','lib_province.province_code')
        ->join('lib_facility_wah','lib_facility_wah.hfhudcode','=','lib_facility.hfhudcode')
        ->groupBy(['region_code','location_code','location_name'])
        ->orderBy('location_name');

        // Limit WAH location list only according to user role and designated location code
        /* $user = JWTAuth::parseToken()->toUser();

        if($user->role == 'Province' || $user->role == 'Region')
            $query->where('lib_province.'.self::$db_cols[$user->role]['code'],$user->location_code);
 */
        $result = $query->orderBy('location_name','ASC')->get();

        /* $query = DB::getQueryLog(); */

        return $result;
    }
}
