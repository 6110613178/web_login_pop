<?php

namespace App\Http\Controllers;

use App\Models\BuyerProp;
use Illuminate\Http\Request;

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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('buyer_prop.create');
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
            'property_type' => 'required',
            'project_name' => 'required',
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
            'area_min' => 'required',
            'area_max' => 'required',
            'alley' => 'required',
            'road' => 'required',
            'sub_district' => 'required',
            'district' => 'required',
            'province' => 'required',
            'nearby_place',
            'price_range_min' => 'required',
            'price_range_max' => 'required',
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
            'property_type' => 'required',
            'project_name' => 'required',
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
            'area_min' => 'required',
            'area_max' => 'required',
            'alley' => 'required',
            'road' => 'required',
            'sub_district' => 'required',
            'district' => 'required',
            'province' => 'required',
            'nearby_place',
            'price_range_min' => 'required',
            'price_range_max' => 'required',
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
