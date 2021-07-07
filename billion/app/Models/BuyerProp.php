<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BuyerProp extends Model
{
    use HasFactory;

    protected $fillable = [
        'property',
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
        'usable_area_min',
        'usable_area_max',
        'area_min',
        'area_max',
        'alley',
        'road',
        'sub_district',
        'district',
        'province',
        'nearby_place',
        'price_range_min',
        'price_range_max'
    ];
}
