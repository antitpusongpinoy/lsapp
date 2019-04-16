<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Program\MaternalCare;
class ProgMaternalCareTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('prog_maternal_care', function (Blueprint $table) {
            $table->increments('id');
            $table->string('HFHUDCODE',20);
            // $table->foreign('HFHUDCODE')->references('hfhudcode')->on('lib_facility');
            $table->char('REGCODE',2);
            // $table->foreign('REGCODE')->references('region_code')->on('lib_region');
            $table->char('PROVCODE',4);
            // $table->foreign('PROVCODE')->references('province_code')->on('lib_province');
            $table->char('CITYCODE',6);
            // $table->foreign('CITYCODE')->references('muncity_code')->on('lib_muncity');
            $table->char('BGYCODE',9)->nullable();
            // $table->foreign('BGYCODE')->references('brgy_code')->on('lib_brgy');
            $table->tinyInteger('MONTH')->unsigned();
            $table->year('YEAR',4);
            $table->integer('PC1');
            $table->integer('PC2');
            $table->integer('PC3');
            $table->integer('PC4');
            $table->integer('PC5');
            $table->integer('PP1');
            $table->integer('PP2');
            $table->integer('PP3');
            $table->integer('PP4');
            $table->integer('W1049_VITA');
            $table->integer('DELIV');
            $table->integer('PREG');
            $table->integer('PREG_SYP_TEST');
            $table->integer('PREG_SYP_POSITIVE');
            $table->integer('PREG_PENICILLIN');
            $table->string('FINAL',2);    
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
