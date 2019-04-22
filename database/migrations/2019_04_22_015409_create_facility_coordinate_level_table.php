<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Location\FacilityCoordinateLevel;
class CreateFacilityCoordinateLevelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lib_facility_coordinate_level', function (Blueprint $table) {
            $table->string('hfhudcode');
            $table->foreign('hfhudcode')->references('hfhudcode')->on('lib_facility');
            $table->decimal('longitude',12,9);
            $table->decimal('latitude',12,9);
            $table->tinyInteger('level')->unsigned();
            $table->primary('hfhudcode');
            $table->timestamps();
        });

        FacilityCoordinateLevel::
            insert([
                array('hfhudcode' => 'DOH000000000000010','longitude' => '120.132700000','latitude' => '15.823300000','level' => '1','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000000011','longitude' => '122.120033500','latitude' => '16.276666700','level' => '1','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000000027','longitude' => '123.540136800','latitude' => '8.062752800','level' => '0','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000000049','longitude' => '120.648306000','latitude' => '15.623611000','level' => '0','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000000051','longitude' => '126.131973000','latitude' => '8.525003000','level' => '0','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000000057','longitude' => '0.000000000','latitude' => '0.000000000','level' => '0','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000000064','longitude' => '122.998277778','latitude' => '8.241516700','level' => '1','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000000065','longitude' => '123.165382000','latitude' => '7.525884000','level' => '1','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000000066','longitude' => '123.321344000','latitude' => '7.728807000','level' => '1','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000000099','longitude' => '120.360367000','latitude' => '15.711883000','level' => '0','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000000162','longitude' => '120.459200000','latitude' => '16.772125000','level' => '0','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000000189','longitude' => '120.567917000','latitude' => '15.490972000','level' => '0','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000000193','longitude' => '120.455838000','latitude' => '16.521587000','level' => '0','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000000843','longitude' => '125.972778000','latitude' => '9.871170000','level' => '0','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000000849','longitude' => '120.601827000','latitude' => '16.407625000','level' => '0','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000000864','longitude' => '120.412368000','latitude' => '15.887070000','level' => '1','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000000865','longitude' => '0.000000000','latitude' => '0.000000000','level' => '1','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000000886','longitude' => '120.677612000','latitude' => '17.137044000','level' => '0','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000000922','longitude' => '120.269730000','latitude' => '16.028411000','level' => '1','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000000924','longitude' => '120.404504850','latitude' => '16.071659420','level' => '0','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000001065','longitude' => '119.869840000','latitude' => '16.191404000','level' => '1','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000001410','longitude' => '121.537525000','latitude' => '15.848177800','level' => '1','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000001425','longitude' => '123.337330000','latitude' => '13.815452000','level' => '0','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000001698','longitude' => '121.290589100','latitude' => '13.895833300','level' => '1','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000001712','longitude' => '120.429790400','latitude' => '17.598298900','level' => '1','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000001713','longitude' => '119.893922400','latitude' => '16.381116200','level' => '1','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000001718','longitude' => '120.375834000','latitude' => '15.978693000','level' => '0','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000001720','longitude' => '120.611687000','latitude' => '17.145802000','level' => '1','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000001721','longitude' => '120.522396000','latitude' => '17.268580000','level' => '1','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000001723','longitude' => '0.000000000','latitude' => '0.000000000','level' => '1','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000001726','longitude' => '120.538974000','latitude' => '17.151734000','level' => '1','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000001730','longitude' => '120.378323700','latitude' => '17.623054500','level' => '1','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000001733','longitude' => '120.434923000','latitude' => '17.486627000','level' => '0','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000001736','longitude' => '120.385900000','latitude' => '17.575216600','level' => '1','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000001739','longitude' => '120.671484400','latitude' => '16.063459000','level' => '2','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000001781','longitude' => '120.571293000','latitude' => '15.975325000','level' => '0','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000001846','longitude' => '123.283631000','latitude' => '12.224828000','level' => '0','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000001907','longitude' => '120.660021200','latitude' => '15.778489800','level' => '1','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000001915','longitude' => '123.034243500','latitude' => '7.856561700','level' => '0','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000001942','longitude' => '123.995118000','latitude' => '12.001226000','level' => '2','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000002015','longitude' => '120.398365750','latitude' => '15.859421100','level' => '1','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000002069','longitude' => '120.452375900','latitude' => '17.651299300','level' => '1','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000002087','longitude' => '122.597858590','latitude' => '12.307140730','level' => '0','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000002098','longitude' => '120.725683000','latitude' => '15.429300000','level' => '0','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000002109','longitude' => '120.513085000','latitude' => '15.663177000','level' => '0','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000002110','longitude' => '126.301639000','latitude' => '8.918355000','level' => '1','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000002199','longitude' => '120.587797000','latitude' => '15.901166000','level' => '1','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000002236','longitude' => '124.161737600','latitude' => '7.028900000','level' => '1','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000002320','longitude' => '126.337409000','latitude' => '8.368973000','level' => '0','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000002347','longitude' => '123.312184000','latitude' => '7.452671000','level' => '1','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000002387','longitude' => '120.414833000','latitude' => '15.686467000','level' => '0','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000002500','longitude' => '119.916700200','latitude' => '16.404937300','level' => '1','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000002522','longitude' => '120.724483000','latitude' => '15.597217000','level' => '0','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000002558','longitude' => '123.198530000','latitude' => '7.636787000','level' => '0','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000002674','longitude' => '119.884168800','latitude' => '5.075487450','level' => '0','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000002759','longitude' => '120.634346000','latitude' => '16.378902000','level' => '0','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000002842','longitude' => '124.867176040','latitude' => '6.744620590','level' => '1','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000002845','longitude' => '120.603027280','latitude' => '16.424936320','level' => '0','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000002880','longitude' => '123.092094444','latitude' => '8.516550000','level' => '1','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000002900','longitude' => '120.583467000','latitude' => '16.424291000','level' => '0','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000002942','longitude' => '0.000000000','latitude' => '0.000000000','level' => '0','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000002957','longitude' => '123.459313000','latitude' => '7.653988000','level' => '0','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000003005','longitude' => '120.807231850','latitude' => '18.522751630','level' => '1','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000003037','longitude' => '120.591222000','latitude' => '15.333000000','level' => '0','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000003047','longitude' => '122.896693980','latitude' => '10.152865540','level' => '0','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000003054','longitude' => '120.608331000','latitude' => '16.396314700','level' => '0','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000003068','longitude' => '120.884268370','latitude' => '16.356273400','level' => '0','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000003126','longitude' => '120.441984000','latitude' => '17.171223000','level' => '1','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000003157','longitude' => '120.626222000','latitude' => '15.730333000','level' => '0','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000003164','longitude' => '120.412368000','latitude' => '15.919740000','level' => '1','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000003169','longitude' => '120.533333000','latitude' => '16.883333000','level' => '1','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000003227','longitude' => '120.561433000','latitude' => '16.412020000','level' => '0','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000003240','longitude' => '120.624763000','latitude' => '16.421728000','level' => '0','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000003276','longitude' => '124.812113490','latitude' => '12.024282760','level' => '1','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000003321','longitude' => '120.587725600','latitude' => '16.411588500','level' => '0','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000003356','longitude' => '120.448455000','latitude' => '15.764735000','level' => '1','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000003358','longitude' => '0.000000000','latitude' => '0.000000000','level' => '1','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000003366','longitude' => '120.667517000','latitude' => '15.569733000','level' => '0','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000003387','longitude' => '123.143832000','latitude' => '13.565088000','level' => '0','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000003444','longitude' => '120.463000000','latitude' => '15.478417000','level' => '0','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000003463','longitude' => '120.577892000','latitude' => '15.667867000','level' => '0','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000003568','longitude' => '120.584369590','latitude' => '16.418444240','level' => '0','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000003605','longitude' => '126.197129000','latitude' => '9.079547000','level' => '0','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000003641','longitude' => '120.564556000','latitude' => '15.518167000','level' => '0','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000003642','longitude' => '120.599333000','latitude' => '15.452667000','level' => '0','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000003663','longitude' => '123.508750000','latitude' => '12.217630000','level' => '1','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000003690','longitude' => '124.927973000','latitude' => '11.567538000','level' => '0','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000003693','longitude' => '121.322235000','latitude' => '13.958745000','level' => '1','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000003726','longitude' => '117.833299000','latitude' => '8.803927000','level' => '2','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000003768','longitude' => '119.798800000','latitude' => '16.116544000','level' => '1','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000003780','longitude' => '999.999999999','latitude' => '12.925557000','level' => '0','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000003798','longitude' => '118.401962000','latitude' => '9.268859000','level' => '0','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000003895','longitude' => '0.000000000','latitude' => '0.000000000','level' => '0','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000003938','longitude' => '118.739780000','latitude' => '9.746216500','level' => '1','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000003968','longitude' => '15.753611100','latitude' => '15.753611100','level' => '1','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000004028','longitude' => '125.023547480','latitude' => '12.054083270','level' => '1','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000004048','longitude' => '120.729750000','latitude' => '15.436000000','level' => '0','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000004065','longitude' => '120.399931000','latitude' => '16.002011000','level' => '1','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000004117','longitude' => '123.436744000','latitude' => '13.300017000','level' => '0','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000004121','longitude' => '120.685450000','latitude' => '15.340100000','level' => '0','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000004241','longitude' => '120.597417000','latitude' => '15.432444000','level' => '0','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000004353','longitude' => '122.683057520','latitude' => '12.370536700','level' => '0','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000004369','longitude' => '123.267819889','latitude' => '7.648277800','level' => '1','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000004425','longitude' => '122.511138310','latitude' => '12.493647890','level' => '1','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000004484','longitude' => '0.000000000','latitude' => '0.000000000','level' => '1','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000004485','longitude' => '121.602500000','latitude' => '14.673333300','level' => '1','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000004610','longitude' => '120.545375300','latitude' => '16.829931100','level' => '1','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000004626','longitude' => '120.665306000','latitude' => '15.490639000','level' => '0','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000004627','longitude' => '125.278208220','latitude' => '12.386283700','level' => '0','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000004672','longitude' => '120.735092000','latitude' => '16.990307000','level' => '0','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000004703','longitude' => '122.683590290','latitude' => '11.390250350','level' => '0','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000004919','longitude' => '123.510510000','latitude' => '8.292825000','level' => '0','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000004925','longitude' => '120.602610000','latitude' => '15.608353000','level' => '0','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000005022','longitude' => '120.579639000','latitude' => '17.042559000','level' => '1','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000005150','longitude' => '120.660021200','latitude' => '15.778489800','level' => '1','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000005207','longitude' => '120.612674700','latitude' => '16.419405800','level' => '0','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000005517','longitude' => '122.998919000','latitude' => '8.207947000','level' => '1','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000005613','longitude' => '120.597917000','latitude' => '15.511722000','level' => '0','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000005654','longitude' => '120.655383000','latitude' => '15.323167000','level' => '0','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000005679','longitude' => '122.673044444','latitude' => '8.121227800','level' => '1','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000005693','longitude' => '120.606871230','latitude' => '16.373110410','level' => '0','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000005712','longitude' => '120.692567000','latitude' => '15.298167000','level' => '0','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000005741','longitude' => '123.165900000','latitude' => '7.575900000','level' => '1','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000005782','longitude' => '120.540275600','latitude' => '16.046197300','level' => '0','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000005814','longitude' => '120.780968000','latitude' => '16.120663000','level' => '1','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000005901','longitude' => '120.587333000','latitude' => '15.493444000','level' => '0','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000006103','longitude' => '119.865173300','latitude' => '16.218561100','level' => '1','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000006139','longitude' => '120.449405900','latitude' => '16.078287900','level' => '1','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000006154','longitude' => '120.490806000','latitude' => '15.427194000','level' => '0','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000006508','longitude' => '120.454370000','latitude' => '16.025920000','level' => '1','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000006529','longitude' => '120.593105000','latitude' => '15.602738000','level' => '0','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000006679','longitude' => '120.406000000','latitude' => '17.528000000','level' => '1','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000006725','longitude' => '120.589853120','latitude' => '16.419284140','level' => '0','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000006738','longitude' => '123.184260000','latitude' => '13.570261000','level' => '0','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000006749','longitude' => '120.358087250','latitude' => '16.009193780','level' => '0','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000006750','longitude' => '120.094736000','latitude' => '16.065608000','level' => '0','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000006905','longitude' => '120.414836000','latitude' => '15.686465000','level' => '0','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000007139','longitude' => '120.532709500','latitude' => '15.609439200','level' => '0','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000007141','longitude' => '119.343873000','latitude' => '10.318984000','level' => '2','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000007151','longitude' => '120.434806000','latitude' => '15.616139000','level' => '0','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000007178','longitude' => '122.404519000','latitude' => '7.983414000','level' => '1','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000007203','longitude' => '120.607250000','latitude' => '15.799194000','level' => '0','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000007204','longitude' => '120.638028000','latitude' => '15.664222000','level' => '0','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000007211','longitude' => '120.377583000','latitude' => '15.619444000','level' => '0','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000007222','longitude' => '120.458583000','latitude' => '15.350167000','level' => '0','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000007229','longitude' => '120.572418000','latitude' => '15.733140000','level' => '0','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000007232','longitude' => '120.606472000','latitude' => '15.490556000','level' => '0','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000007233','longitude' => '120.589139000','latitude' => '15.486361000','level' => '0','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000007316','longitude' => '122.423595400','latitude' => '7.601733150','level' => '0','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000007320','longitude' => '122.588500000','latitude' => '7.784754000','level' => '0','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000007322','longitude' => '122.694920000','latitude' => '7.806079000','level' => '0','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000007323','longitude' => '122.561416660','latitude' => '7.869322200','level' => '1','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000007328','longitude' => '122.464221000','latitude' => '7.653883000','level' => '0','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000007340','longitude' => '122.936900000','latitude' => '7.641740000','level' => '1','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000007343','longitude' => '124.024067000','latitude' => '8.188985000','level' => '1','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000007351','longitude' => '123.767779000','latitude' => '7.899874000','level' => '1','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000007366','longitude' => '120.576238000','latitude' => '15.745018000','level' => '0','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000007370','longitude' => '0.000000000','latitude' => '0.000000000','level' => '2','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000007400','longitude' => '121.428597400','latitude' => '14.421114100','level' => '1','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000007416','longitude' => '126.179822000','latitude' => '9.242663000','level' => '1','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000007451','longitude' => '121.429301000','latitude' => '14.425760000','level' => '1','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000007474','longitude' => '125.017317000','latitude' => '11.710502000','level' => '1','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000007696','longitude' => '0.000000000','latitude' => '0.000000000','level' => '1','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000007698','longitude' => '120.511746700','latitude' => '16.982179700','level' => '1','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000007860','longitude' => '124.331518000','latitude' => '12.535058000','level' => '0','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000007862','longitude' => '124.176928000','latitude' => '12.426366660','level' => '1','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000007866','longitude' => '124.158589000','latitude' => '12.047513000','level' => '1','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000007867','longitude' => '124.774689000','latitude' => '11.985163000','level' => '1','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000007868','longitude' => '124.885240570','latitude' => '12.145550050','level' => '1','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000007899','longitude' => '124.796191000','latitude' => '11.637176000','level' => '0','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000007917','longitude' => '124.994450100','latitude' => '11.780819400','level' => '0','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000008076','longitude' => '120.576886000','latitude' => '16.403563000','level' => '0','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000008077','longitude' => '120.550511000','latitude' => '16.426453000','level' => '0','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000009529','longitude' => '120.179811300','latitude' => '15.836100000','level' => '1','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000011696','longitude' => '0.000000000','latitude' => '0.000000000','level' => '0','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000013330','longitude' => '123.415336000','latitude' => '13.894994000','level' => '0','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000016374','longitude' => '121.068445000','latitude' => '12.352988000','level' => '1','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000017471','longitude' => '120.575661500','latitude' => '16.416405700','level' => '1','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000017474','longitude' => '120.590133400','latitude' => '16.427493000','level' => '0','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000023668','longitude' => '120.531611000','latitude' => '15.359111000','level' => '0','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000023670','longitude' => '120.570567000','latitude' => '15.290217000','level' => '0','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000023671','longitude' => '120.521139000','latitude' => '15.279500000','level' => '0','created_at' => NULL,'updated_at' => NULL),
                array('hfhudcode' => 'DOH000000000032219','longitude' => '120.454400000','latitude' => '17.054610000','level' => '1','created_at' => NULL,'updated_at' => NULL)
              
            ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('facility_coordinate_level');
    }
}
