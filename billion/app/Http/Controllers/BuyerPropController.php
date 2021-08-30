<?php

namespace App\Http\Controllers;

use App\Models\BuyerProp;
use App\Models\SellerProp;
use App\Models\MatchingBuyerProp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BuyerPropController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = BuyerProp::latest()->paginate(5);

        return view('buyer_prop.index', compact('data'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    function matching($id) {
        $data = DB::table('buyer_props')
        ->where('id', $id)
        ->get();

        $property = $data[0]->property;
        $sell_type = $data[0]->sell_type;
        $property_type = $data[0]->property_type;
        $project_name = $data[0]->project_name;
        $city_plan_color = $data[0]->city_plan_color;
        $area_type = $data[0]->area_type;
        $business_license = $data[0]->business_license;
        $buy_with_machine = $data[0]->buy_with_machine;
        $type = $data[0]->type;
        $floor_num = $data[0]->floor_num;
        $bedroom_num = $data[0]->bedroom_num;
        $bathroom_num = $data[0]->bathroom_num;
        $kitchen_num = $data[0]->kitchen_num;
        $parking_num = $data[0]->parking_num;
        $livingroom_num = $data[0]->livingroom_num;
        $furniture = $data[0]->furniture;
        $usable_area_min = $data[0]->usable_area_min;
        $usable_area_max = $data[0]->usable_area_max;
        $area_min = $data[0]->area_min;
        $area_max = $data[0]->area_max;
        $alley = $data[0]->alley;
        $road = $data[0]->road;
        $sub_district = $data[0]->sub_district;
        $district = $data[0]->district;
        $province = $data[0]->province;
        $nearby_place = $data[0]->nearby_place;
        $price_range_min = $data[0]->price_range_min;
        $price_range_max = $data[0]->price_range_max;
        $agent_welcome = $data[0]->agent_welcome;

        $data2 = DB::table('seller_props')
        ->where([['property', $property],
        ['sell_type', $sell_type],
        ['property_type', $property_type],
        ['project_name', $project_name],
        ['city_plan_color', $city_plan_color],
        ['area_type', $area_type],
        ['business_license', $business_license],
        ['sell_with_machine', $buy_with_machine],
        ['type', $type],
        ['floor_num', $floor_num],
        ['bedroom_num', $bedroom_num],
        ['bathroom_num', $bathroom_num],
        ['kitchen_num', $kitchen_num],
        ['parking_num', $parking_num],
        ['livingroom_num', $livingroom_num],
        ['furniture', $furniture],
        ['usable_area', '>', (int)$usable_area_min-((int)$usable_area_min*0.05)],
        ['usable_area', '<', (int)$usable_area_max+((int)$usable_area_min*0.05)],
        ['area', '>', $area_min],
        ['area', '<', $area_max],
        ['alley', $alley],
        ['road', $road],
        ['sub_district', $sub_district],
        ['district', $district],
        ['province', $province],
        ['nearby_place', $nearby_place],
        ['price', '>', $price_range_min],
        ['price', '<',$price_range_max],
        ['agent_welcome', $agent_welcome]])
        ->get();

        return view('buyer_prop.matching', compact('data2'));
    }

    function fetch(Request $request) {
        $id = $request->get('select');
        $result = array();
        $query = DB::table('provinces')
        ->join('amphures', 'provinces.id', '=', 'amphures.province_id')

        ->select('amphures.name_th')
        ->where('provinces.name_th', $id) 

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
        $list = DB::table('provinces')->get();
        $bts = DB::table('bts')->get();
        $mrt = DB::table('mrt')->get();
        return view('buyer_prop.create')->with('bts', $bts)
        ->with('list', $list)
        ->with('mrt', $mrt);
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
            'sell_type' => 'required',
            'property_type' => 'required',
            'project_name' => 'required',
            'city_plan_color' => 'required',
            'area_type' => 'required',
            'business_license' => 'required',
            'buy_with_machine' => 'required',
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
            'agent_welcome' => 'required'
        ]);

        $request->merge([ 
            'nearby_place' => implode(',', (array) $request->get('nearby_place'))
        ]);

        BuyerProp::create($request->all());

        return redirect()->route('buyer_prop.index')
                        ->with('success', 'Property created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BuyerProp  $buyerProp
     * @return \Illuminate\Http\Response
     */
    public function show(BuyerProp $buyerProp)
    {
        //
        return view('buyer_prop.show', compact('buyerProp'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BuyerProp  $buyerProp
     * @return \Illuminate\Http\Response
     */
    public function edit(BuyerProp $buyerProp)
    {
        //
        return view('buyer_prop.edit', compact('buyerProp'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BuyerProp  $buyerProp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BuyerProp $buyerProp)
    {
        //
        $request->validate([
            'property' => 'required',
            'sell_type' => 'required',
            'property_type' => 'required',
            'project_name' => 'required',
            'city_plan_color' => 'required',
            'area_type' => 'required',
            'business_license' => 'required',
            'buy_with_machine' => 'required',
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
            'agent_welcome' => 'required'
        ]);

        $buyerProp->update($request->all());

        return redirect()->route('buyer_prop.index')
                        ->with('success', 'Property updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BuyerProp  $buyerProp
     * @return \Illuminate\Http\Response
     */
    public function destroy(BuyerProp $buyerProp)
    {
        //
        $buyerProp->delete();
        return redirect()->route('buyer_prop.index')
                        ->with('success', 'Property deleted successfully.');
    }
}
