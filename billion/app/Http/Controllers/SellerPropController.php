<?php

namespace App\Http\Controllers;

use App\Models\SellerProp;
use Illuminate\Http\Request;

class SellerPropController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = SellerProp::latest()->paginate(5);

        return view('seller_prop.index', compact('data'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
    }


    function fetch(Request $request) {
        $id = $request->get('select');
        $result = array();
        $query = DB::table('provinces')
        ->join('amphures', 'provinces.id', '=', 'amphures.province_id')

        ->select('amphures.name_th')
        ->where('provinces.id', $id) 

        ->groupBy('amphures.name_th')
        ->get();
        $output = '<option value="">เลือกอำเภอของท่าน</option>';
        foreach ($query as $row) {
            $output.='<option value="'.$row->name_th.'">'.$row->name_th.'</option>';
        }
        echo $output;
        
    }

    function amphures(Request $request) {
        $id = $request->get('select');
        $result = array();
        $query = DB::table('amphures')
        ->join('districts', 'amphures.id', '=', 'districts.amphure_id')

        ->select('districts.name_th')
        ->where('amphures.name_th', $id)

        ->groupBy('districts.name_th')
        ->get();
        $output = '<option value="">เลือกตำบลของท่าน</option>';
        foreach ($query as $row) {
            $output.='<option value="'.$row->name_th.'">'.$row->name_th.'</option>';
        }
        echo $output;
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('seller_prop.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'property' => 'required',
            'seller_status' => 'required',
            'sell_type' => 'required',
            'topic_name' => 'required',
            'detail' => 'required',
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
            'usable_area' => 'required',
            'area' => 'required',
            'holding_pattern' => 'required',
            'tranfer_date' => 'required',
            'property_code' => 'required',
            'ownership_document' => 'required',
            'alley' => 'required',
            'road' => 'required',
            'sub_district' => 'required',
            'district' => 'required',
            'province' => 'required',
            'google_map_link' => 'required',
            'nearby_place' => 'required',
            'nearby_bts' => 'required',
            'nearby_airport_link' => 'required',
            'nearby_mrt' => 'required',
            'inside_facility' => 'required',
            'furniture_thing' => 'required',
            'special_properties' => 'required',
            'central_facility' => 'required',
            'add_zone_protection_room' => 'required',
            'add_balcony' => 'required',
            'add_bedroom' => 'required',
            'add_storageroom' => 'required',
            'add_office' => 'required',
            'add_kitchen' => 'required',
            'add_garage' => 'required',
            'price' => 'required',
            'price_per_month' => 'required',
            'price_central' => 'required',
            'tranfer_fee_person_responsible' => 'required',
            'promotion' => 'required',
            'property_picture' => 'required',
            'floor_plan_picture' => 'required',
            'property_video' => 'required',
            'property_video_url' => 'required',
            'agent_welcome' => 'required'
        ]);

        SellerProp::create($request->all());

        return redirect()->route('seller_prop.index')
                        ->with('success', 'Property created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SellerProp  $sellerProp
     * @return \Illuminate\Http\Response
     */
    public function show(SellerProp $sellerProp)
    {
        //
        return view('seller_prop.show', compact('sellerProp'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SellerProp  $sellerProp
     * @return \Illuminate\Http\Response
     */
    public function edit(SellerProp $sellerProp)
    {
        //
        return view('seller_prop.edit', compact('sellerProp'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SellerProp  $sellerProp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SellerProp $sellerProp)
    {
        //
        $request->validate([
            'property' => 'required',
            'seller_status' => 'required',
            'sell_type' => 'required',
            'topic_name' => 'required',
            'detail' => 'required',
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
            'usable_area' => 'required',
            'area' => 'required',
            'holding_pattern' => 'required',
            'tranfer_date' => 'required',
            'property_code' => 'required',
            'ownership_document' => 'required',
            'alley' => 'required',
            'road' => 'required',
            'sub_district' => 'required',
            'district' => 'required',
            'province' => 'required',
            'google_map_link' => 'required',
            'nearby_place' => 'required',
            'nearby_bts' => 'required',
            'nearby_airport_link' => 'required',
            'nearby_mrt' => 'required',
            'inside_facility' => 'required',
            'furniture_thing' => 'required',
            'special_properties' => 'required',
            'central_facility' => 'required',
            'add_zone_protection_room' => 'required',
            'add_balcony' => 'required',
            'add_bedroom' => 'required',
            'add_storageroom' => 'required',
            'add_office' => 'required',
            'add_kitchen' => 'required',
            'add_garage' => 'required',
            'price' => 'required',
            'price_per_month' => 'required',
            'price_central' => 'required',
            'tranfer_fee_person_responsible' => 'required',
            'promotion' => 'required',
            'property_picture' => 'required',
            'floor_plan_picture' => 'required',
            'property_video' => 'required',
            'property_video_url' => 'required',
            'agent_welcome' => 'required'
        ]);

        $sellerProp->update($request->all());

        return redirect()->route('seller_prop.index')
                        ->with('success', 'Property updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SellerProp  $sellerProp
     * @return \Illuminate\Http\Response
     */
    public function destroy(SellerProp $sellerProp)
    {
        //
        $sellerProp->delete();
        return redirect()->route('seller_prop.index')
                        ->with('success', 'Property deleted successfully.');
    }
}
