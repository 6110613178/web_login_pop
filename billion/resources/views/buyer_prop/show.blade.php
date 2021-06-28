@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Show Property') }}</div>

                <div class="card-body">

                    <div class="row">
                        <div class="card p-3">
                            <div class="card-title">
                                <strong>ประเภทอสังหาริมทรัพย์</strong>
                                {{ $buyerProp->property_type }}
                            </div>
                        </div>
                        <div class="card p-3">
                            <div class="card-text">
                                <strong>ชื่อโครงการ</strong>
                                {{ $buyerProp->project_name }}
                            </div>
                        </div>
                        <div class="card p-3">
                            <div class="card-text">
                                <strong>ประเภท</strong>
                                {{ $buyerProp->type }}
                            </div>
                        </div>
                        <div class="card p-3">
                            <div class="card-text">
                                <strong>จำนวนชั้น</strong>
                                {{ $buyerProp->floor_num }}
                            </div>
                        </div>
                        <div class="card p-3">
                            <div class="card-text">
                                <strong>ห้องนอน</strong>
                                {{ $buyerProp->bedroom_num }}
                            </div>
                        </div>
                        <div class="card p-3">
                            <div class="card-text">
                                <strong>ห้องน้ำ</strong>
                                {{ $buyerProp->bathroom_num }}
                            </div>
                        </div>
                        <div class="card p-3">
                            <div class="card-text">
                                <strong>ห้องครัว</strong>
                                {{ $buyerProp->kitchen_num }}
                            </div>
                        </div>
                        <div class="card p-3">
                            <div class="card-text">
                                <strong>ที่จอดรถ</strong>
                                {{ $buyerProp->parking_num }}
                            </div>
                        </div>
                        <div class="card p-3">
                            <div class="card-text">
                                <strong>ห้องนั่งเล่น</strong>
                                {{ $buyerProp->livingroom_num }}
                            </div>
                        </div>
                        <div class="card p-3">
                            <div class="card-text">
                                <strong>เฟอร์นิเจอร์</strong>
                                {{ $buyerProp->furniture }}
                            </div>
                        </div>
                        <div class="card p-3">
                            <div class="card-text">
                                <strong>พื้นที่ใช้สอย(ต่ำสุด)</strong>
                                {{ $buyerProp->usable_area_min }}
                            </div>
                        </div>
                        <div class="card p-3">
                            <div class="card-text">
                                <strong>พื้นที่ใช้สอย(สูงสุด)</strong>
                                {{ $buyerProp->usable_area_max }}
                            </div>
                        </div>
                        <div class="card p-3">
                            <div class="card-text">
                                <strong>เนื้อที่(ต่ำสุด)</strong>
                                {{ $buyerProp->area_min }}
                            </div>
                        </div>
                        <div class="card p-3">
                            <div class="card-text">
                                <strong>เนื้อที่(สูงสุด)</strong>
                                {{ $buyerProp->area_max }}
                            </div>
                        </div>
                        <div class="card p-3">
                            <div class="card-text">
                                <strong>ซอย</strong>
                                {{ $buyerProp->alley }}
                            </div>
                        </div>
                        <div class="card p-3">
                            <div class="card-text">
                                <strong>ถนน</strong>
                                {{ $buyerProp->road }}
                            </div>
                        </div>
                        <div class="card p-3">
                            <div class="card-text">
                                <strong>ตำบล/แขวง</strong>
                                {{ $buyerProp->sub_district }}
                            </div>
                        </div>
                        <div class="card p-3">
                            <div class="card-text">
                                <strong>อำเภอ/เขต</strong>
                                {{ $buyerProp->district }}
                            </div>
                        </div>
                        <div class="card p-3">
                            <div class="card-text">
                                <strong>จังหวัด</strong>
                                {{ $buyerProp->province }}
                            </div>
                        </div>
                        <div class="card p-3">
                            <div class="card-text">
                                <strong>สถานที่ใกล้เคียง</strong>
                                {{ $buyerProp->nearby_place }}
                            </div>
                        </div>
                        <div class="card p-3">
                            <div class="card-text">
                                <strong>ช่วงราคาที่ต้องการ(ต่ำสุด)</strong>
                                {{ $buyerProp->price_range_min }}
                            </div>
                        </div>
                        <div class="card p-3">
                            <div class="card-text">
                                <strong>ช่วงราคาที่ต้องการ(สูงสุด)</strong>
                                {{ $buyerProp->price_range_max }}
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
