@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Show Property') }}</div>

                <div class="card-body">

                    <div class="row">

                        <!-- ประกาศ -->

                        <div class="card p-3">
                            <div class="card-title">
                                <strong>อสังหาริมทรัพย์</strong>
                                {{ $sellerProp->property }}
                            </div>
                        </div>
                        <div class="card p-3">
                            <div class="card-title">
                                <strong>สถานะผู้ประกาศ</strong>
                                {{ $sellerProp->seller_status }}
                            </div>
                        </div>
                        <div class="card p-3">
                            <div class="card-title">
                                <strong>ประเภทการขาย</strong>
                                {{ $sellerProp->sell_type }}
                            </div>
                        </div>
                        <div class="card p-3">
                            <div class="card-title">
                                <strong>ชื่อเรื่อง</strong>
                                {{ $sellerProp->topic_name }}
                            </div>
                        </div>
                        <div class="card p-3">
                            <div class="card-title">
                                <strong>รายละเอียด</strong>
                                {{ $sellerProp->detail }}
                            </div>
                        </div>

                        <!-- ข้อมูลโครงการ -->

                        <div class="card p-3">
                            <div class="card-title">
                                <strong>ประเภทอสังหาริมทรัพย์</strong>
                                {{ $sellerProp->property_type }}
                            </div>
                        </div>
                        <div class="card p-3">
                            <div class="card-text">
                                <strong>ชื่อโครงการ</strong>
                                {{ $sellerProp->project_name }}
                            </div>
                        </div>
                        <div class="card p-3">
                            <div class="card-text">
                                <strong>ประเภท</strong>
                                {{ $sellerProp->type }}
                            </div>
                        </div>
                        <div class="card p-3">
                            <div class="card-text">
                                <strong>จำนวนชั้น</strong>
                                {{ $sellerProp->floor_num }}
                            </div>
                        </div>
                        <div class="card p-3">
                            <div class="card-text">
                                <strong>ห้องนอน</strong>
                                {{ $sellerProp->bedroom_num }}
                            </div>
                        </div>
                        <div class="card p-3">
                            <div class="card-text">
                                <strong>ห้องน้ำ</strong>
                                {{ $sellerProp->bathroom_num }}
                            </div>
                        </div>
                        <div class="card p-3">
                            <div class="card-text">
                                <strong>ห้องครัว</strong>
                                {{ $sellerProp->kitchen_num }}
                            </div>
                        </div>
                        <div class="card p-3">
                            <div class="card-text">
                                <strong>ที่จอดรถ</strong>
                                {{ $sellerProp->parking_num }}
                            </div>
                        </div>
                        <div class="card p-3">
                            <div class="card-text">
                                <strong>ห้องนั่งเล่น</strong>
                                {{ $sellerProp->livingroom_num }}
                            </div>
                        </div>
                        <div class="card p-3">
                            <div class="card-text">
                                <strong>เฟอร์นิเจอร์</strong>
                                {{ $sellerProp->furniture }}
                            </div>
                        </div>
                        <div class="card p-3">
                            <div class="card-text">
                                <strong>พื้นที่ใช้สอย</strong>
                                {{ $sellerProp->usable_area }}
                            </div>
                        </div>
                        <div class="card p-3">
                            <div class="card-text">
                                <strong>เนื้อที่</strong>
                                {{ $sellerProp->area }}
                            </div>
                        </div>
                        <div class="card p-3">
                            <div class="card-text">
                                <strong>รูปแบบการถือครอง</strong>
                                {{ $sellerProp->holding_pattern }}
                            </div>
                        </div>
                        <div class="card p-3">
                            <div class="card-text">
                                <strong>วันที่โอนกรรมสิทธิ์</strong>
                                {{ $sellerProp->tranfer_date }}
                            </div>
                        </div>
                        <div class="card p-3">
                            <div class="card-text">
                                <strong>รหัสทรัพย์สิน</strong>
                                {{ $sellerProp->property_code }}
                            </div>
                        </div>
                        <div class="card p-3">
                            <div class="card-text">
                                <strong>เอกสารกรรมสิทธิ์</strong>
                                {{ $sellerProp->ownership_document }}
                            </div>
                        </div>
                        <div class="card p-3">
                            <div class="card-text">
                                <strong>ซอย</strong>
                                {{ $sellerProp->alley }}
                            </div>
                        </div>
                        <div class="card p-3">
                            <div class="card-text">
                                <strong>ถนน</strong>
                                {{ $sellerProp->road }}
                            </div>
                        </div>
                        <div class="card p-3">
                            <div class="card-text">
                                <strong>ตำบล/แขวง</strong>
                                {{ $sellerProp->sub_district }}
                            </div>
                        </div>
                        <div class="card p-3">
                            <div class="card-text">
                                <strong>อำเภอ/เขต</strong>
                                {{ $sellerProp->district }}
                            </div>
                        </div>
                        <div class="card p-3">
                            <div class="card-text">
                                <strong>จังหวัด</strong>
                                {{ $sellerProp->province }}
                            </div>
                        </div>
                        <div class="card p-3">
                            <div class="card-text">
                                <strong>ลิงค์ตำแหน่งที่ตั้งโดย Google Maps</strong>
                                {{ $sellerProp->google_map_link }}
                            </div>
                        </div>
                        <div class="card p-3">
                            <div class="card-text">
                                <strong>สถานที่ใกล้เคียง</strong>
                                {{ $sellerProp->nearby_place }}
                            </div>
                        </div>
                        <div class="card p-3">
                            <div class="card-text">
                                <strong>ใกล้รถไฟฟ้า BTS</strong>
                                {{ $sellerProp->nearby_bts }}
                            </div>
                        </div>
                        <div class="card p-3">
                            <div class="card-text">
                                <strong>ใกล้ Airport Link</strong>
                                {{ $sellerProp->nearby_airport_link }}
                            </div>
                        </div>
                        <div class="card p-3">
                            <div class="card-text">
                                <strong>ใกล้รถไฟฟ้า MRT</strong>
                                {{ $sellerProp->nearby_mrt }}
                            </div>
                        </div>
                        <div class="card p-3">
                            <div class="card-text">
                                <strong>สิ่งอำนวยความสะดวกภายในที่พัก</strong>
                                {{ $sellerProp->inside_facility }}
                            </div>
                        </div>
                        <div class="card p-3">
                            <div class="card-text">
                                <strong>เฟอร์นิเจอร์/อุปกรณ์ตกแต่ง</strong>
                                {{ $sellerProp->furniture_thing }}
                            </div>
                        </div>
                        <div class="card p-3">
                            <div class="card-text">
                                <strong>คุณสมบัติพิเศษ</strong>
                                {{ $sellerProp->special_properties }}
                            </div>
                        </div>
                        <div class="card p-3">
                            <div class="card-text">
                                <strong>สิ่งอำนวยความสะดวกส่วนกลาง</strong>
                                {{ $sellerProp->central_facility }}
                            </div>
                        </div>

                        <!-- การต่อเติมพื้นที่ใช้สอย -->

                        <div class="card p-3">
                            <div class="card-text">
                                <strong>ต่อเติมห้องกันโซน</strong>
                                {{ $sellerProp->add_zone_protection_room }}
                            </div>
                        </div>
                        <div class="card p-3">
                            <div class="card-text">
                                <strong>ต่อเติมระเบียง/ชั้นลอย</strong>
                                {{ $sellerProp->add_balcony }}
                            </div>
                        </div>
                        <div class="card p-3">
                            <div class="card-text">
                                <strong>ต่อเติมห้องนอน</strong>
                                {{ $sellerProp->add_bedroom }}
                            </div>
                        </div>
                        <div class="card p-3">
                            <div class="card-text">
                                <strong>ต่อเติมห้องเก็บของ</strong>
                                {{ $sellerProp->add_storageroom }}
                            </div>
                        </div>
                        <div class="card p-3">
                            <div class="card-text">
                                <strong>ต่อเติมห้องทำงาน</strong>
                                {{ $sellerProp->add_office }}
                            </div>
                        </div>
                        <div class="card p-3">
                            <div class="card-text">
                                <strong>ต่อเติมห้องครัว</strong>
                                {{ $sellerProp->add_kitchen }}
                            </div>
                        </div>
                        <div class="card p-3">
                            <div class="card-text">
                                <strong>ต่อเติมโรงจอดรถ</strong>
                                {{ $sellerProp->add_garage }}
                            </div>
                        </div>

                        <!-- ราคา -->

                        <div class="card p-3">
                            <div class="card-text">
                                <strong>ราคา</strong>
                                {{ $sellerProp->price }}
                            </div>
                        </div>
                        <div class="card p-3">
                            <div class="card-text">
                                <strong>ราคา/เดือน</strong>
                                {{ $sellerProp->price_per_month }}
                            </div>
                        </div>
                        <div class="card p-3">
                            <div class="card-text">
                                <strong>ค่าส่วนกลาง</strong>
                                {{ $sellerProp->price_central }}
                            </div>
                        </div>
                        <div class="card p-3">
                            <div class="card-text">
                                <strong>ผู้รับผิดชอบค่าโอน</strong>
                                {{ $sellerProp->tranfer_fee_person_responsible }}
                            </div>
                        </div>
                        <div class="card p-3">
                            <div class="card-text">
                                <strong>โปรโมชั่น</strong>
                                {{ $sellerProp->promotion }}
                            </div>
                        </div>

                        <!-- เพิ่มเติม -->

                        <div class="card p-3">
                            <div class="card-text">
                                <strong>รูปภาพ</strong>
                                {{ $sellerProp->property_picture }}
                            </div>
                        </div>
                        <div class="card p-3">
                            <div class="card-text">
                                <strong>รูปภาพแปลนพื้นที่</strong>
                                {{ $sellerProp->floor_plan_picture }}
                            </div>
                        </div>
                        <div class="card p-3">
                            <div class="card-text">
                                <strong>วิดีโอ</strong>
                                {{ $sellerProp->property_video }}
                            </div>
                        </div>
                        <div class="card p-3">
                            <div class="card-text">
                                <strong>URL</strong>
                                {{ $sellerProp->property_video_url }}
                            </div>
                        </div>

                        <div class="card p-3">
                            <div class="card-text">
                                <strong>ยินดีรับเอเจ้นท์</strong>
                                {{ $sellerProp->agent_welcome }}
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
