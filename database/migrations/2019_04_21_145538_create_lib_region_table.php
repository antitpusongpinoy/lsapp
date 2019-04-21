<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLibRegionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lib_region', function (Blueprint $table) {
            $table->char('region_code', 2);
            $table->primary('region_code');
            $table->string('region_name');
        });

        
        DB::table('lib_region')
        ->insert([
            array('region_code' => '01','region_name' => 'REGION I (Ilocos Region)'),
            array('region_code' => '02','region_name' => 'REGION II (Cagayan Valley)'),
            array('region_code' => '03','region_name' => 'REGION III (Central Luzon)'),
            array('region_code' => '04','region_name' => 'REGION IV-A (CALABARZON)'),
            array('region_code' => '05','region_name' => 'REGION V (Bicol Region)'),
            array('region_code' => '06','region_name' => 'REGION VI (Western Visayas)'),
            array('region_code' => '07','region_name' => 'REGION VII (Central Visayas)'),
            array('region_code' => '08','region_name' => 'REGION VIII (Eastern Visayas)'),
            array('region_code' => '09','region_name' => 'REGION IX (Zamboanga Peninsula)'),
            array('region_code' => '10','region_name' => 'REGION X (Nothern Mindanao)'),
            array('region_code' => '11','region_name' => 'REGION XI (Davao Region)'),
            array('region_code' => '12','region_name' => 'REGION XII (Soccsksargen)'),
            array('region_code' => '13','region_name' => 'NCR - National Capital Region'),
            array('region_code' => '14','region_name' => 'CAR - Cordillera Administrative Region'),
            array('region_code' => '15','region_name' => 'ARMM - Autonomous Region in Muslim Mindanao'),
            array('region_code' => '16','region_name' => 'REGION XIII (Caraga)'),
            array('region_code' => '17','region_name' => 'REGION IV-B (MIMAROPA)')
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lib_region');
    }
}
