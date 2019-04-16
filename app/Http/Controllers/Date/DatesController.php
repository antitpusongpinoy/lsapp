<?php

namespace App\Http\Controllers\Date;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller
;
class DatesController extends Controller
{
    //
    public function getSubmittedYears(){
        $years = [2009,2010,2011,2012,2013,2014,2015,2016,2017,2018,2019];
        $years = array_unique($years, SORT_NUMERIC);
        return $years;
    }

}
