<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads', function (Blueprint $table) {
            $table->id();
            $table->string('primary');
            $table->string('company');
            $table->string('image');
            $table->integer('adtype_id')->unsigned();
            $table->integer('percentage_id')->nullable();
            $table->integer('industry_id')->unsigned();
            $table->integer('color_id')->unsigned();
            $table->integer('social_id')->unsigned();

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
        Schema::dropIfExists('ads');
    }
}
