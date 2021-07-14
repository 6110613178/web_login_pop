<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SellerPropCrud extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seller_props', function (Blueprint $table) {
            $table->id();
            $table->text('property');
            $table->text('seller_status');
            $table->text('sell_type');
            $table->text('topic_name');
            $table->text('detail');
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
            $table->integer('usable_area');
            $table->integer('area');
            $table->text('holding_pattern');
            $table->text('tranfer_date');
            $table->text('property_code');
            $table->text('ownership_document');
            $table->text('alley');
            $table->text('road');
            $table->text('sub_district');
            $table->text('district');
            $table->text('province');
            $table->text('google_map_link');
            $table->text('nearby_place');
            $table->text('nearby_bts');
            $table->text('nearby_airport_link');
            $table->text('nearby_mrt');
            $table->text('inside_facility');
            $table->text('furniture_thing');
            $table->text('special_properties');
            $table->text('central_facility');
            $table->text('add_zone_protection_room');
            $table->text('add_balcony');
            $table->text('add_bedroom');
            $table->text('add_storageroom');
            $table->text('add_office');
            $table->text('add_kitchen');
            $table->text('add_garage');
            $table->integer('price');
            $table->integer('price_per_month');
            $table->integer('price_central');
            $table->text('tranfer_fee_person_responsible');
            $table->text('promotion');
            $table->text('property_picture');
            $table->text('floor_plan_picture');
            $table->text('property_video');
            $table->text('property_video_url');
            $table->text('agent_welcome');
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
        Schema::dropIfExists('seller_props');
    }
}
