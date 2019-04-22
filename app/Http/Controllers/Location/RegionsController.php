<?php

namespace App\Http\Controllers\Location;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Location\Region;
use DB;
class RegionsController extends Controller
{
    //
    private static $db_cols = [
        'Region' => [
            'model' => 'App\\Location\\Region',
            'name' => 'region_name',
            'code' => 'region_code',
        ],
        'Province' => [
            'model' => 'App\\Location\\Province',
            'name' => 'province_name',
            'code' => 'province_code',
        ],
        'Municipality' => [
            'model' => 'App\\Location\\Municipality',
            'name' => 'muncity_name',
            'code' => 'muncity_code',
        ],
        'Facility' => [
            'model' => 'App\\Location\\Facility',
            'name' => 'hfhudname',
            'code' => 'hfhudcode',
        ]
    ];
    /**
     * Retrieves all regions with facilities handled by WAH.
     * 
     * @return \Illuminate\Http\Response
     */
    public function getWAHRegions(){
        /* DB::enableQueryLog(); */
      /*   $query = DB::select("SELECT lib_region.region_code as location_code, lib_region.region_name as location_name FROM 
        ((lib_facility INNER JOIN lib_region ON lib_facility.region_code =lib_region.region_code)
        INNER JOIN lib_facility_wah ON lib_facility_wah.hfhudcode = lib_facility.hfhudcode)");
 */     
        $query = Region::select(DB::raw('lib_region.region_code as location_code, region_name as location_name'))
                ->join('lib_facility','lib_facility.region_code','=','lib_region.region_code')
                ->join('lib_facility_wah','lib_facility_wah.hfhudcode','=','lib_facility.hfhudcode')
                ->groupBy(['location_code','location_name']);

         // Limit WAH location list only according to user role and designated location code
         /* if($user->role == 'Region')
             $query->where('lib_region.'.self::$db_cols[$user->role]['code'],$user->location_code);
          */
         $result = $query->orderBy('location_name','ASC')->get();

        return $result;
    }
}
