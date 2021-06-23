<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class BuyerPropertyController extends Controller
{
    //
    function index() {
        return view('buyerProperty.buyerPropertyForm');
    }

    function add(Request $request){
        
        $request->validate([                                    
            'property_type' => 'required',
            'project_name' => 'required',
            'type' => 'required',
            'floor_num' => 'required',
            'bedroom_num' => 'required',
            'bathroom_num' => 'required',
            'kitchen_num' => 'required',
            'parking_num' => 'required',
            'livingroom_num' => 'required',
            'furniture' => 'required',
            'usable_area_min' => 'required',
            'usable_area_max' => 'required',
            'area_min' => 'required',
            'area_max' => 'required',
            'alley' => 'required',
            'road' => 'required',
            'sub_district' => 'required',
            'district' => 'required',
            'province' => 'required',
            'nearby_place' => 'required',
            'price_range_min' => 'required',
            'price_range_max' => 'required',
        ]);

        $query = DB::table('buyerproperty')->insert([
            'property_type'=>$request->input('property_type'),
            'project_name'=>$request->input('project_name'),
            'type'=>$request->input('type'),
            'floor_num'=>$request->input('floor_num'),
            'bedroom_num'=>$request->input('bedroom_num'),
            'bathroom_num'=>$request->input('bathroom_num'),
            'kitchen_num'=>$request->input('kitchen_num'),
            'parking_num'=>$request->input('parking_num'),
            'livingroom_num'=>$request->input('livingroom_num'),
            'furniture'=>$request->input('furniture'),
            'usable_area_min'=>$request->input('usable_area_min'),
            'usable_area_max'=>$request->input('usable_area_max'),
            'area_min'=>$request->input('area_min'),
            'area_max'=>$request->input('area_max'),
            'alley'=>$request->input('alley'),
            'road'=>$request->input('road'),
            'sub_district'=>$request->input('sub_district'),
            'district'=>$request->input('district'),
            'province'=>$request->input('province'),
            'nearby_place'=>$request->input('nearby_place'),
            'price_range_min'=>$request->input('price_range_min'),
            'price_range_max'=>$request->input('price_range_max'),
        ]);

        if($query){
            return back()->with('success', 'Data have been successfuly inserted');
        } else {
            return back()->with('fail', 'Something went wrong');
        }

    }
}
