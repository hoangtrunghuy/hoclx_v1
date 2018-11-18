<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInforDrivingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infor_drivings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('infor_drivings_title');
            $table->longtext('infor_drivings_discription');
            $table->string('infor_drivings_image');
            $table->longtext('infor_drivings_content');
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
        Schema::dropIfExists('infor_drivings');
    }
}
