<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SellerProp extends Model
{
    use HasFactory;

    protected $fillable = [
        'property',
        'seller_status',
        'sell_type',
        'topic_name',
        'detail',
        'property_type',
        'project_name',
        'type',
        'floor_num',
        'bedroom_num',
        'bathroom_num',
        'kitchen_num',
        'parking_num',
        'livingroom_num',
        'furniture',
        'usable_area',
        'area',
        'holding_pattern',
        'tranfer_date',
        'property_code',
        'ownership_document',
        'alley',
        'road',
        'sub_district',
        'district',
        'province',
        'google_map_link',
        'nearby_place',
        'nearby_bts',
        'nearby_airport_link',
        'nearby_mrt',
        'inside_facility',
        'furniture_thing',
        'special_properties',
        'central_facility',
        'add_zone_protection_room',
        'add_balcony',
        'add_bedroom',
        'add_storageroom',
        'add_office',
        'add_kitchen',
        'add_garage',
        'price',
        'price_per_month',
        'price_central',
        'tranfer_fee_person_responsible',
        'promotion',
        'property_picture',
        'floor_plan_picture',
        'property_video',
        'property_video_url',
        'agent_welcome'
    ];
}
