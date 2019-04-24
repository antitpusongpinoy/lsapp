<?php

namespace App\Http\Controllers\Location;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Location\Facility;
use DB;
class FacilitiesController extends Controller
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
     * Retrieves all facilities of a given set of municipalities.
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * Returns a response containing all facilities of a municipality.
     */
    protected function getMuncitiesFacilities(Request $request){
        $muncity_codes = is_array($request->muncity_codes)?
                            $request->muncity_codes :
                            [$request->muncity_codes];
        return Facility::whereIn('muncity_code',$muncity_codes)
                        ->where('statflag','A')
                        ->get();
    }

    protected function getWAHFacilities(){
        // $query = Facility::select(DB::raw('*,lib_facility.hfhudcode as location_code, hfhudname as location_name'))
        //             ->whereHas('wah_facility',function($query){
        //                 $query->where('is_listed',true);
        //             });
        $query = Facility::select(DB::raw('lib_facility.region_code as region_code, lib_facility.province_code as province_code, province_name, lib_facility.muncity_code, lib_facility.hfhudcode as location_code, hfhudname as location_name'))
                    ->join('lib_province','lib_province.province_code','=','lib_facility.province_code')
                    ->whereHas('wah_facility',function($query){
                        $query->where('is_listed',true);
                    });
                
        // Limit WAH Facility list only according to user role and designated location code
       /*  $user = JWTAuth::parseToken()->toUser();
        
        if($user->role == 'Facility' || $user->role == 'Municipality')
            $query->where('lib_facility.'.self::$db_cols[$user->role]['code'],$user->location_code);
         */
        $result = $query->orderBy('location_name','ASC')->get();

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
        return  $result;
    }
    /**
     * Retrieves a facility using its hfhudcode
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * Returns a response containing the facility information
     */
    protected function getFacility(Request $request){
        return Facility::find($request->hfhudcode);
    }
}
