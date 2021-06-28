<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BuyerPropCrud extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buyer_props', function (Blueprint $table) {
            $table->id();
            $table->text('property_type');
            $table->text('project_name');
            $table->text('type');
            $table->integer('floor_num');
            $table->integer('bedroom_num');
            $table->integer('bathroom_num');
            $table->integer('kitchen_num');
            $table->integer('parking_num');
            $table->integer('livingroom_num');
            $table->text('furniture');
            $table->integer('usable_area_min');
            $table->integer('usable_area_max');
            $table->integer('area_min');
            $table->integer('area_max');
            $table->text('alley');
            $table->text('road');
            $table->text('sub_district');
            $table->text('district');
            $table->text('province');
            $table->text('nearby_place');
            $table->integer('price_range_min');
            $table->integer('price_range_max');
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
        Schema::dropIfExists('buyer_props');
    }
}
