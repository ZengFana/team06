<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('types', function (Blueprint $table) {
            $table->id()->comment('編號(主編)');
            $table->string('car_sample')->comment('車型');
            $table->foreignId('bid')->unsigned()->comment('品牌(外部建)');
            $table->foreign('bid')->references('id')->on('brands')->onDelete('cascade');
            $table->string('car_modle')->comment('車款');
            $table->string('type')->comment('型號');
            $table->string('power_type')->comment('種類');
            $table->integer('price')->unsigned()->comment('價格');
            $table->string('origin')->comment('產地');
            $table->integer('door')->unsigned()->nullable()->comment('車門');
            $table->integer('exhaust_volume')->unsigned()->nullable()->comment('排氣量');
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
        Schema::dropIfExists('types');
    }
}
