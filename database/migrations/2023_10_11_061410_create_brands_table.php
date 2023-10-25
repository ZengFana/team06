<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brands', function (Blueprint $table) {
            $table->id()->comment('編號(主編)');
            $table->string('brands')->comment('品牌');
            $table->string('headquarter')->comment('總部');
            $table->string('area')->comment('行政區域');
            $table->tinyInteger('yera')->unsigned()->comment('成立時間');
            $table->string('html')->comment('官方網站');
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
        Schema::dropIfExists('brands');
    }
}
