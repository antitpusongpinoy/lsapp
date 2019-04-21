<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateLibProvinceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lib_province', function (Blueprint $table) {
      
            $table->char('region_code',2);
            $table->char('province_code',4);
            $table->string('province_name');
      
            $table->primary('province_code');
            $table->foreign('region_code')->references('region_code')->on('lib_region');
          });
      
          DB::table('lib_province')
            ->insert([
              array('region_code' => '01','province_code' => '0128','province_name' => 'ILOCOS NORTE'),
              array('region_code' => '01','province_code' => '0129','province_name' => 'ILOCOS SUR'),
              array('region_code' => '01','province_code' => '0133','province_name' => 'LA UNION'),
              array('region_code' => '01','province_code' => '0155','province_name' => 'PANGASINAN'),
              array('region_code' => '02','province_code' => '0209','province_name' => 'BATANES'),
              array('region_code' => '02','province_code' => '0215','province_name' => 'CAGAYAN'),
              array('region_code' => '02','province_code' => '0231','province_name' => 'ISABELA'),
              array('region_code' => '02','province_code' => '0250','province_name' => 'NUEVA VIZCAYA'),
              array('region_code' => '02','province_code' => '0257','province_name' => 'QUIRINO'),
              array('region_code' => '03','province_code' => '0308','province_name' => 'BATAAN'),
              array('region_code' => '03','province_code' => '0314','province_name' => 'BULACAN'),
              array('region_code' => '03','province_code' => '0349','province_name' => 'NUEVA ECIJA'),
              array('region_code' => '03','province_code' => '0354','province_name' => 'PAMPANGA'),
              array('region_code' => '03','province_code' => '0369','province_name' => 'TARLAC'),
              array('region_code' => '03','province_code' => '0371','province_name' => 'ZAMBALES'),
              array('region_code' => '03','province_code' => '0377','province_name' => 'AURORA'),
              array('region_code' => '04','province_code' => '0410','province_name' => 'BATANGAS'),
              array('region_code' => '04','province_code' => '0421','province_name' => 'CAVITE'),
              array('region_code' => '04','province_code' => '0434','province_name' => 'LAGUNA'),
              array('region_code' => '04','province_code' => '0456','province_name' => 'QUEZON'),
              array('region_code' => '04','province_code' => '0458','province_name' => 'RIZAL'),
              array('region_code' => '05','province_code' => '0505','province_name' => 'ALBAY'),
              array('region_code' => '05','province_code' => '0516','province_name' => 'CAMARINES NORTE'),
              array('region_code' => '05','province_code' => '0517','province_name' => 'CAMARINES SUR'),
              array('region_code' => '05','province_code' => '0520','province_name' => 'CATANDUANES'),
              array('region_code' => '05','province_code' => '0541','province_name' => 'MASBATE'),
              array('region_code' => '05','province_code' => '0562','province_name' => 'SORSOGON'),
              array('region_code' => '06','province_code' => '0604','province_name' => 'AKLAN'),
              array('region_code' => '06','province_code' => '0606','province_name' => 'ANTIQUE'),
              array('region_code' => '06','province_code' => '0619','province_name' => 'CAPIZ'),
              array('region_code' => '06','province_code' => '0630','province_name' => 'ILOILO'),
              array('region_code' => '06','province_code' => '0645','province_name' => 'NEGROS OCCIDENTAL'),
              array('region_code' => '06','province_code' => '0679','province_name' => 'GUIMARAS'),
              array('region_code' => '07','province_code' => '0712','province_name' => 'BOHOL'),
              array('region_code' => '07','province_code' => '0722','province_name' => 'CEBU'),
              array('region_code' => '07','province_code' => '0746','province_name' => 'NEGROS ORIENTAL'),
              array('region_code' => '07','province_code' => '0761','province_name' => 'SIQUIJOR'),
              array('region_code' => '08','province_code' => '0826','province_name' => 'EASTERN SAMAR'),
              array('region_code' => '08','province_code' => '0837','province_name' => 'LEYTE'),
              array('region_code' => '08','province_code' => '0848','province_name' => 'NORTHERN SAMAR'),
              array('region_code' => '08','province_code' => '0860','province_name' => 'WESTERN SAMAR'),
              array('region_code' => '08','province_code' => '0864','province_name' => 'SOUTHERN LEYTE'),
              array('region_code' => '08','province_code' => '0878','province_name' => 'BILIRAN'),
              array('region_code' => '09','province_code' => '0972','province_name' => 'ZAMBOANGA DEL NORTE'),
              array('region_code' => '09','province_code' => '0973','province_name' => 'ZAMBOANGA DEL SUR'),
              array('region_code' => '09','province_code' => '0983','province_name' => 'ZAMBOANGA SIBUGAY'),
              array('region_code' => '09','province_code' => '0997','province_name' => 'CITY OF ISABELA'),
              array('region_code' => '10','province_code' => '1013','province_name' => 'BUKIDNON'),
              array('region_code' => '10','province_code' => '1018','province_name' => 'CAMIGUIN'),
              array('region_code' => '10','province_code' => '1035','province_name' => 'LANAO DEL NORTE'),
              array('region_code' => '10','province_code' => '1042','province_name' => 'MISAMIS OCCIDENTAL'),
              array('region_code' => '10','province_code' => '1043','province_name' => 'MISAMIS ORIENTAL'),
              array('region_code' => '11','province_code' => '1123','province_name' => 'DAVAO DEL NORTE'),
              array('region_code' => '11','province_code' => '1124','province_name' => 'DAVAO DEL SUR'),
              array('region_code' => '11','province_code' => '1125','province_name' => 'DAVAO ORIENTAL'),
              array('region_code' => '11','province_code' => '1182','province_name' => 'COMPOSTELA VALLEY'),
              array('region_code' => '12','province_code' => '1247','province_name' => 'COTABATO'),
              array('region_code' => '12','province_code' => '1263','province_name' => 'SOUTH COTABATO'),
              array('region_code' => '12','province_code' => '1265','province_name' => 'SULTAN KUDARAT'),
              array('region_code' => '12','province_code' => '1280','province_name' => 'SARANGANI'),
              array('region_code' => '12','province_code' => '1298','province_name' => 'CITY OF COTABATO'),
              array('region_code' => '13','province_code' => '1339','province_name' => 'MANILA, NCR, FIRST DISTRICT'),
              array('region_code' => '13','province_code' => '1374','province_name' => 'NCR SECOND DISTRICT'),
              array('region_code' => '13','province_code' => '1375','province_name' => 'NCR THIRD DISTRICT'),
              array('region_code' => '13','province_code' => '1376','province_name' => 'NCR FOURTH DISTRICT'),
              array('region_code' => '14','province_code' => '1401','province_name' => 'ABRA'),
              array('region_code' => '14','province_code' => '1411','province_name' => 'BENGUET'),
              array('region_code' => '14','province_code' => '1427','province_name' => 'IFUGAO'),
              array('region_code' => '14','province_code' => '1432','province_name' => 'KALINGA'),
              array('region_code' => '14','province_code' => '1444','province_name' => 'MOUNTAIN PROVINCE'),
              array('region_code' => '14','province_code' => '1481','province_name' => 'APAYAO'),
              array('region_code' => '15','province_code' => '1507','province_name' => 'BASILAN'),
              array('region_code' => '15','province_code' => '1536','province_name' => 'LANAO DEL SUR'),
              array('region_code' => '15','province_code' => '1538','province_name' => 'MAGUINDANAO'),
              array('region_code' => '15','province_code' => '1566','province_name' => 'SULU'),
              array('region_code' => '15','province_code' => '1570','province_name' => 'TAWI-TAWI'),
              array('region_code' => '15','province_code' => '1584','province_name' => 'SHARIFF KABUNSUAN'),
              array('region_code' => '16','province_code' => '1602','province_name' => 'AGUSAN DEL NORTE'),
              array('region_code' => '16','province_code' => '1603','province_name' => 'AGUSAN DEL SUR'),
              array('region_code' => '16','province_code' => '1667','province_name' => 'SURIGAO DEL NORTE'),
              array('region_code' => '16','province_code' => '1668','province_name' => 'SURIGAO DEL SUR'),
              array('region_code' => '16','province_code' => '1685','province_name' => 'DINAGAT ISLANDS'),
              array('region_code' => '17','province_code' => '1740','province_name' => 'MARINDUQUE'),
              array('region_code' => '17','province_code' => '1751','province_name' => 'OCCIDENTAL MINDORO'),
              array('region_code' => '17','province_code' => '1752','province_name' => 'ORIENTAL MINDORO'),
              array('region_code' => '17','province_code' => '1753','province_name' => 'PALAWAN'),
              array('region_code' => '17','province_code' => '1759','province_name' => 'ROMBLON')
              
            //   ['region_code' => '18', 'province_code' => '1845', 'province_name' => 'NEGROS OCCIDENTAL'],
            //   ['region_code' => '18', 'province_code' => '1846', 'province_name' => 'NEGROS ORIENTAL'],
            ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('lib_province', function($table) {
            $table->dropForeign('lib_province_region_code_foreign');
          });
        Schema::dropIfExists('lib_province');
    }
}
