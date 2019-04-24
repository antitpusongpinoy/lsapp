<?php

namespace App\Http\Controllers\Location;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Location\Municipality;
use DB;
class MunicipalitiesController extends Controller
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
     * Retrieves all municipalities with facilities handled by WAH.
     * 
     * @return \Illuminate\Http\Response
     */
    public function getWAHMuncities(){
        $try = [];
        DB::enableQueryLog();
        // took 1869.69 milliseconds
        // $try3 = Municipality::select('muncity_code','muncity_name')
        //     ->whereHas('facilities', function($query){
        //         $query
        //             ->whereHas('wah_facility', function($query2){
        //                 $query2->where('is_listed',true);
        //             })
        //             ->where('statflag','A');
        //     })
        //     ->orderBy('muncity_name','ASC')
        //     ->get();

        // took 16.36 milliseconds
        $query = Municipality::select(DB::raw('lib_facility.region_code as region_code, lib_facility.province_code as province_code, province_name, lib_muncity.muncity_code as location_code, muncity_name as location_name'))
                ->join('lib_province','lib_province.province_code','=','lib_muncity.province_code')
                ->join('lib_facility','lib_facility.muncity_code','=','lib_muncity.muncity_code')
                ->join('lib_facility_wah','lib_facility_wah.hfhudcode','=','lib_facility.hfhudcode')
                ->groupBy(['region_code','province_code', 'province_name','location_code','location_name']);

        // Limit WAH location list only according to user role and designated location code
        /* $user = JWTAuth::parseToken()->toUser();
        if($user->role == 'Municipality' || $user->role == 'Province')
            $query->where('lib_muncity.'.self::$db_cols[$user->role]['code'],$user->location_code);
           */  
        $result = $query->orderBy('location_name','ASC')->get();
        $query = DB::getQueryLog();
        
        // Check for duplicates
        foreach($result as $index => $r){
            $subset = $result->where('location_name',$r->location_name);
            if( $subset->count() > 1){
                // If duplicates exists for this location name, 
                // append the province names to distinguish between them
                foreach($subset as $index => $s){
                    $model = $result->where('location_code',$s->location_code)->first();
                    $model->location_name = $model->location_name . ' ('.$model->province_name.')';
                }
            }
        }
        return $result;
    }
}
