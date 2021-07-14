@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<div class="container">

<div>
<button id="House" type="button" onclick="loadDoc()">House</button>
<button id="Apartment">Apartment</button>
<button id="Commercial-Building">Commercial Building</button>
<button id="Condo">Condo</button>
<button id="Down">Down</button>
<button id="Hotel">Hotel</button>
<button id="Land">Land</button>
<button id="Pre-Emption">Pre-Emption</button>
<button id="Resort">Resort</button>
<button id="Warehouse">Warehouse</button>
</div>

<script>
    $(document).ready(function(){
  $(".House").show("slow");
    $(".Commercial-Building").hide();
    $(".Apartment").hide();
    $(".Condo").hide();
    $(".Down").hide();
    $(".Hotel").hide();
    $(".Land").hide();
    $(".Pre-Emption").hide();
    $(".Resort").hide();
    $(".Warehouse").hide();
  $("#House").click(function(){
    $(".House").show("slow");
    $(".Commercial-Building").hide();
    $(".Apartment").hide();
    $(".Condo").hide();
    $(".Down").hide();
    $(".Hotel").hide();
    $(".Land").hide();
    $(".Pre-Emption").hide();
    $(".Resort").hide();
    $(".Warehouse").hide();
  });

  $("#Apartment").click(function(){
    $(".Apartment").show("slow");
    $(".House").hide();
    $(".Commercial-Building").hide();
    $(".Condo").hide();
    $(".Down").hide();
    $(".Hotel").hide();
    $(".Land").hide();
    $(".Pre-Emption").hide();
    $(".Resort").hide();
    $(".Warehouse").hide();
  });
  $("#Commercial-Building").click(function(){
    $(".Commercial-Building").show("slow");
    $(".House").hide();
    $(".Apartment").hide();
    $(".Condo").hide();
    $(".Down").hide();
    $(".Hotel").hide();
    $(".Land").hide();
    $(".Pre-Emption").hide();
    $(".Resort").hide();
    $(".Warehouse").hide();
  });
  $("#Condo").click(function(){
    $(".Condo").show("slow");
    $(".House").hide();
    $(".Commercial-Building").hide();
    $(".Apartment").hide();
    $(".Down").hide();
    $(".Hotel").hide();
    $(".Land").hide();
    $(".Pre-Emption").hide();
    $(".Resort").hide();
    $(".Warehouse").hide();
  });
  $("#Down").click(function(){
    $(".Down").show("slow");
    $(".House").hide();
    $(".Commercial-Building").hide();
    $(".Apartment").hide();
    $(".Condo").hide();
    $(".Hotel").hide();
    $(".Land").hide();
    $(".Pre-Emption").hide();
    $(".Resort").hide();
    $(".Warehouse").hide();
  });
  $("#Hotel").click(function(){
    $(".Hotel").show("slow");
    $(".House").hide();
    $(".Commercial-Building").hide();
    $(".Apartment").hide();
    $(".Condo").hide();
    $(".Down").hide();
    $(".Land").hide();
    $(".Pre-Emption").hide();
    $(".Resort").hide();
    $(".Warehouse").hide();
  });
  $("#Land").click(function(){
    $(".Land").show("slow");
    $(".House").hide();
    $(".Commercial-Building").hide();
    $(".Apartment").hide();
    $(".Condo").hide();
    $(".Down").hide();
    $(".Hotel").hide();
    $(".Pre-Emption").hide();
    $(".Resort").hide();
    $(".Warehouse").hide();
  });
  $("#Pre-Emption").click(function(){
    $(".Pre-Emption").show("slow");
    $(".House").hide();
    $(".Commercial-Building").hide();
    $(".Apartment").hide();
    $(".Condo").hide();
    $(".Down").hide();
    $(".Hotel").hide();
    $(".Land").hide();
    $(".Resort").hide();
    $(".Warehouse").hide();
  });
  $("#Resort").click(function(){
    $(".Resort").show("slow");
    $(".House").hide();
    $(".Commercial-Building").hide();
    $(".Apartment").hide();
    $(".Condo").hide();
    $(".Down").hide();
    $(".Hotel").hide();
    $(".Land").hide();
    $(".Pre-Emption").hide();
    $(".Warehouse").hide();
  });
  $("#Warehouse").click(function(){
    $(".Warehouse").show("slow");
    $(".House").hide();
    $(".Commercial-Building").hide();
    $(".Apartment").hide();
    $(".Condo").hide();
    $(".Down").hide();
    $(".Hotel").hide();
    $(".Land").hide();
    $(".Pre-Emption").hide();
    $(".Resort").hide();
  });

    });

</script>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="House">
                <div class="card-header">{{ __('Add House') }}</div>

                <div class="card-body">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong>
                            There were some problems with your input. <br><br>
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('seller_prop.update', $sellerProp->id) }}" method="POST">
                        @csrf
                        @method('PUT');

                        <input type="hidden" name="property" value="บ้าน">

                        <!-- ประกาศ -->

                        <label for="topic_name" class="col-md-4 col-form-label text-md-right" style="font-size:30px;">{{ __('ประกาศ') }}</label>

                        <div class="form-group row">
                            <label for="seller_status" class="col-md-4 col-form-label text-md-right">{{ __('สถานะผู้ประกาศ') }}</label>

                            <div class="col-md-6">
                                <input type="checkbox" name="seller_status" value="เจ้าของทรัพย์"> เจ้าของทรัพย์ 
                                <input type="checkbox" name="seller_status" value="เอเจ้นท์"> เอเจ้นท์

                                <!-- @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror -->
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-6">
                                <input type="checkbox" name="sell_type" value="ขาย"> ขาย
                                <input type="checkbox" name="sell_type" value="เช่า"> เช่า
                                <input type="checkbox" name="sell_type" value="ขายเซ้ง"> ขายเซ้ง  

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="topic_name" class="col-md-4 col-form-label text-md-right">{{ __('ชื่อเรื่อง') }}</label>

                            <div class="col-md-6">
                                <input id="topic_name" type="text" value="{{ $sellerProp->topic_name }}" class="form-control" name="topic_name" placeholder="Topic Name">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="detail" class="col-md-4 col-form-label text-md-right">{{ __('รายละเอียด') }}</label>

                            <div class="col-md-6">
                                <textarea class="form-control" style="height: 150px" name="detail" placeholder="Detail">{{ $sellerProp->detail }}</textarea>

                            </div>
                        </div>

                        <!-- ข้อมูลโครงการ -->

                        <label for="property_type" class="col-md-4 col-form-label text-md-right" style="font-size:30px;">{{ __('ข้อมูลโครงการ') }}</label>

                        <div class="form-group row">
                            <label for="property_type" class="col-md-4 col-form-label text-md-right">{{ __('ประเภทอสังหาริมทรัพย์') }}</label>

                            <div class="col-md-6">
                                <input type="checkbox" name="property_type" value="บ้านเดี่ยว"> บ้านเดี่ยว
                                <input type="checkbox" name="property_type" value="บ้านแฝด"> บ้านแฝด
                                <input type="checkbox" name="property_type" value="ทาวน์เฮ้าส์/ทาวน์โฮม"> ทาวน์เฮ้าส์/ทาวน์โฮม

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="project_name" class="col-md-4 col-form-label text-md-right">{{ __('ชื่อโครงการ') }}</label>

                            <div class="col-md-6">
                                <input id="project_name" type="text" value="{{ $sellerProp->project_name }}" class="form-control" name="project_name" placeholder="Project Name">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="type" class="col-md-4 col-form-label text-md-right">{{ __('ประเภท') }}</label>

                            <div class="col-md-6">
                                <input type="checkbox" name="type" value="มือ 1"> มือ 1
                                <input type="checkbox" name="type" value="มือ 2"> มือ 2

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="floor_num" class="col-md-4 col-form-label text-md-right">{{ __('จำนวนชั้น') }}</label>

                            <div class="col-md-6">
                                <input id="floor_num" type="number" value="{{ $sellerProp->floor_num }}" class="form-control" name="floor_num" placeholder="Floor Number" min="1">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="bedroom_num" class="col-md-4 col-form-label text-md-right">{{ __('ห้องนอน') }}</label>

                            <div class="col-md-6">
                                <input id="bedroom_num" type="number" value="{{ $sellerProp->bedroom_num }}" class="form-control" name="bedroom_num" placeholder="Bedroom Number" min="0">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="bathroom_num" class="col-md-4 col-form-label text-md-right">{{ __('ห้องน้ำ') }}</label>

                            <div class="col-md-6">
                                <input id="bathroom_num" type="number" value="{{ $sellerProp->bathroom_num }}" class="form-control" name="bathroom_num" placeholder="Bathroom Number" min="0">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="kitchen_num" class="col-md-4 col-form-label text-md-right">{{ __('ห้องครัว') }}</label>

                            <div class="col-md-6">
                                <input id="kitchen_num" type="number" value="{{ $sellerProp->kitchen_num }}" class="form-control" name="kitchen_num" placeholder="Kitchen Number" min="0">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="parking_num" class="col-md-4 col-form-label text-md-right">{{ __('ที่จอดรถ') }}</label>

                            <div class="col-md-6">
                                <input id="parking_num" type="number" value="{{ $sellerProp->parking_num }}" class="form-control" name="parking_num" placeholder="Parking Number" min="0">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="livingroom_num" class="col-md-4 col-form-label text-md-right">{{ __('ห้องนั่งเล่น') }}</label>

                            <div class="col-md-6">
                                <input id="livingroom_num" type="number" value="{{ $sellerProp->livingroom_num }}" class="form-control" name="livingroom_num" placeholder="Livingroom Number" min="0">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="furniture" class="col-md-4 col-form-label text-md-right">{{ __('เฟอร์นิเจอร์') }}</label>

                            <div class="col-md-6">
                                <input id="furniture" type="text" value="{{ $sellerProp->furniture }}" class="form-control" name="furniture" placeholder="Furniture">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="usable_area" class="col-md-4 col-form-label text-md-right">{{ __('พื้นที่ใช้สอย') }}</label>

                            <div class="col-md-6">
                                <input id="usable_area" type="text" value="{{ $sellerProp->usable_area }}" class="form-control" name="usable_area" placeholder="Usable Area " >

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="area" class="col-md-4 col-form-label text-md-right">{{ __('เนื้อที่') }}</label>

                            <div class="col-md-6">
                                <input id="area" type="text" value="{{ $sellerProp->area }}" class="form-control" name="area" placeholder="Area">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="holding_pattern" class="col-md-4 col-form-label text-md-right">{{ __('รูปแบบการถือครอง') }}</label>

                            <div class="col-md-6">
                                <input type="checkbox" name="holding_pattern" value="คนสัญชาติไทย"> คนสัญชาติไทย
                                <input type="checkbox" name="holding_pattern" value="ชาวต่างชาติ"> ชาวต่างชาติ
                                <input type="checkbox" name="holding_pattern" value="ถือสัญญาเช่าระยะยาว"> ถือสัญญาเช่าระยะยาว
                                <input type="checkbox" name="holding_pattern" value="บริษัทจดทะเบียน"> บริษัทจดทะเบียน

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tranfer_date" class="col-md-4 col-form-label text-md-right">{{ __('วันที่โอนกรรมสิทธิ์') }}</label>

                            <div class="col-md-6">
                                <input id="tranfer_date" type="number" value="{{ $sellerProp->tranfer_date }}" class="form-control" name="tranfer_date" placeholder="Tranfer Date" min="0">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="property_code" class="col-md-4 col-form-label text-md-right">{{ __('รหัสทรัพย์สิน') }}</label>

                            <div class="col-md-6">
                                <input id="property_code" type="text" value="{{ $sellerProp->property_code }}" class="form-control" name="property_code" placeholder="Property Code">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="ownership_document" class="col-md-4 col-form-label text-md-right">{{ __('เอกสารกรรมสิทธิ์') }}</label>

                            <div class="col-md-6">
                                <input id="ownership_document" type="text" value="{{ $sellerProp->ownership_document }}" class="form-control" name="ownership_document" placeholder="Ownership Document">

                            </div>
                        </div>

                        <!-- ข้อมูลโครงการ 2 -->

                        <label for="alley" class="col-md-4 col-form-label text-md-right" style="font-size:30px;">{{ __('ข้อมูลโครงการ') }}</label>

                        <label for="alley" class="col-md-4 col-form-label text-md-right" style="font-size:30px;">{{ __('ที่ตั้ง') }}</label>
                        <br><br><br>
                        <div class="form-group row">
                            <label for="alley" class="col-md-4 col-form-label text-md-right">{{ __('ซอย') }}</label>

                            <div class="col-md-6">
                                <input id="alley" type="text" value="{{ $sellerProp->alley }}" class="form-control" name="alley" placeholder="Alley">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="road" class="col-md-4 col-form-label text-md-right">{{ __('ถนน') }}</label>

                            <div class="col-md-6">
                                <input id="road" type="text" value="{{ $sellerProp->road }}" class="form-control" name="road" placeholder="Road">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="sub_district" class="col-md-4 col-form-label text-md-right">{{ __('ตำบล/แขวง') }}</label>

                            <div class="col-md-6">
                                <input id="sub_district" type="text" value="{{ $sellerProp->sub_district }}" class="form-control" name="sub_district" placeholder="Sub District">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="district" class="col-md-4 col-form-label text-md-right">{{ __('อำเภอ/เขต') }}</label>

                            <div class="col-md-6">
                                <input id="district" type="text" value="{{ $sellerProp->district }}" class="form-control" name="district" placeholder="District">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="province" class="col-md-4 col-form-label text-md-right">{{ __('จังหวัด') }}</label>

                            <div class="col-md-6">
                                <input id="province" type="text" value="{{ $sellerProp->province }}" class="form-control" name="province" placeholder="Province">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="google_map_link" class="col-md-4 col-form-label text-md-right">{{ __('ลิงค์ตำแหน่งที่ตั้งโดย Google Maps') }}</label>

                            <div class="col-md-6">
                                <input id="google_map_link" type="text" value="{{ $sellerProp->google_map_link }}" class="form-control" name="google_map_link" placeholder="Google Map Link">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nearby_place" class="col-md-4 col-form-label text-md-right">{{ __('สถานที่ใกล้เคียง') }}</label>

                            <div class="col-md-6">
                                <input name="nearby_place" type="checkbox" value="supermarket"> supermarket
                                <input name="nearby_place" type="checkbox" value="ห้างสรรพสินค้า"> ห้างสรรพสินค้า
                                <input name="nearby_place" type="checkbox" value="BTS"> BTS
                                <input name="nearby_place" type="checkbox" value="MRT"> MRT
                                <input name="nearby_place" type="checkbox" value="Airport Link"> Airport Link
                                <input name="nearby_place" type="checkbox" value="โรงพยาบาล"> โรงพยาบาล
                                <input name="nearby_place" type="checkbox" value="สนามบิน"> สนามบิน
                                <input name="nearby_place" type="checkbox" value="ทางด่วน"> ทางด่วน
                                <input name="nearby_place" type="checkbox" value="โรงเรียน"> โรงเรียน
                                <input name="nearby_place" type="checkbox" value="มหาวิทยาลัย"> มหาวิทยาลัย

                            </div>
                        </div>

                        <label for="property_type" class="col-md-4 col-form-label text-md-right" style="font-size:30px;">{{ __('สถานีรถไฟฟ้าใกล้เคียง') }}</label>

                        <div class="form-group row">
                            <label for="nearby_bts" class="col-md-4 col-form-label text-md-right">{{ __('ใกล้รถไฟฟ้า BTS') }}</label>

                            <div class="col-md-6">
                                <input id="nearby_bts" type="text" value="{{ $sellerProp->nearby_bts }}" class="form-control" name="nearby_bts" placeholder="Nearby BTS">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nearby_airport_link" class="col-md-4 col-form-label text-md-right">{{ __('ใกล้ Airport Link') }}</label>

                            <div class="col-md-6">
                                <input id="nearby_airport_link" type="text" value="{{ $sellerProp->nearby_airport_link }}" class="form-control" name="nearby_airport_link" placeholder="Nearby Airport Link">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nearby_mrt" class="col-md-4 col-form-label text-md-right">{{ __('ใกล้รถไฟฟ้า MRT') }}</label>

                            <div class="col-md-6">
                                <input id="nearby_mrt" type="text" value="{{ $sellerProp->nearby_mrt }}" class="form-control" name="nearby_mrt" placeholder="Nearby MRT">

                            </div>
                        </div>

                        <!-- ข้อมูลโครงการ 3 -->

                        <label for="inside_facility" class="col-md-4 col-form-label text-md-right" style="font-size:30px;">{{ __('ข้อมูลโครงการ') }}</label>

                        <div class="form-group row">
                            <label for="inside_facility" class="col-md-4 col-form-label text-md-right">{{ __('สิ่งอำนวยความสะดวกภายในที่พัก') }}</label>

                            <div class="col-md-6">
                                <input name="inside_facility" type="checkbox" value="เครื่องปรับอากาศ"> เครื่องปรับอากาศ
                                <input name="inside_facility" type="checkbox" value="พัดลม"> พัดลม
                                <input name="inside_facility" type="checkbox" value="เครื่องฟอกอากาศ/กรองอากาศ"> เครื่องฟอกอากาศ/กรองอากาศ
                                <input name="inside_facility" type="checkbox" value="เครื่องทำน้ำอุ่น"> เครื่องทำน้ำอุ่น
                                <input name="inside_facility" type="checkbox" value="ห้องครัว"> ห้องครัว
                                <input name="inside_facility" type="checkbox" value="wifi"> wifi
                                <input name="inside_facility" type="checkbox" value="เคเบิลทีวี"> เคเบิลทีวี
                                <input name="inside_facility" type="checkbox" value="จานดาวเทียม"> จานดาวเทียม
                                <input name="inside_facility" type="checkbox" value="โทรศัพท์สายตรง"> โทรศัพท์สายตรง
                                <input name="inside_facility" type="checkbox" value="อินเตอร์คอม"> อินเตอร์คอม
                                <input name="inside_facility" type="checkbox" value="ห้องเก็บเสื้อผ้า"> ห้องเก็บเสื้อผ้า
                                <input name="inside_facility" type="checkbox" value="สัญญาณกันขโมย"> สัญญาณกันขโมย
                                <input name="inside_facility" type="checkbox" value="Digital Door Lock"> Digital Door Lock
                                <input name="inside_facility" type="checkbox" value="Video Door Phone"> Video Door Phone
                                <input name="inside_facility" type="checkbox" value="โต๊ะเครื่องแป้ง"> โต๊ะเครื่องแป้ง
                                <input name="inside_facility" type="checkbox" value="เครื่องซักผ้า"> เครื่องซักผ้า
                                <input name="inside_facility" type="checkbox" value="เตารีดผ้า"> เตารีดผ้า
                                <input name="inside_facility" type="checkbox" value="โต๊ะรีดผ้า"> โต๊ะรีดผ้า
                                <input name="inside_facility" type="checkbox" value="ตู้อาบน้ำ"> ตู้อาบน้ำ
                                <input name="inside_facility" type="checkbox" value="อ่างอาบน้ำ"> อ่างอาบน้ำ
                                <input name="inside_facility" type="checkbox" value="จากุชชี่"> จากุชชี่
                                <input name="inside_facility" type="checkbox" value="ห้องอาบน้ำฝักบัว"> ห้องอาบน้ำฝักบัว
                                <input name="inside_facility" type="checkbox" value="โรงจอดรถ"> โรงจอดรถ
                                <input name="inside_facility" type="checkbox" value="กล้อง CCTV"> กล้อง CCTV
                                <input name="inside_facility" type="checkbox" value="เครื่องดูดฝุ่น"> เครื่องดูดฝุ่น
                                <input name="inside_facility" type="checkbox" value="ตู้เซฟนิรภัย"> ตู้เซฟนิรภัย

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="furniture_thing" class="col-md-4 col-form-label text-md-right">{{ __('เฟอร์นิเจอร์/อุปกรณ์ตกแต่ง') }}</label>

                            <div class="col-md-6">
                                <input name="furniture_thing" type="checkbox" value="โซฟา"> โซฟา
                                <input name="furniture_thing" type="checkbox" value="โต๊ะ"> โต๊ะ
                                <input name="furniture_thing" type="checkbox" value="ตู้เสื้อผ้า"> ตู้เสื้อผ้า
                                <input name="furniture_thing" type="checkbox" value="ตู้หนังสือ"> ตู้หนังสือ
                                <input name="furniture_thing" type="checkbox" value="โต๊ะทำงาน"> โต๊ะทำงาน
                                <input name="furniture_thing" type="checkbox" value="โทรศัพท์"> โทรศัพท์
                                <input name="furniture_thing" type="checkbox" value="โทรทัศน์"> โทรทัศน์
                                <input name="furniture_thing" type="checkbox" value="ชั้นวางทีวี"> ชั้นวางทีวี
                                <input name="furniture_thing" type="checkbox" value="โต๊ะอาหาร"> โต๊ะอาหาร
                                <input name="furniture_thing" type="checkbox" value="เคาท์เตอร์ครัว"> เคาท์เตอร์ครัว
                                <input name="furniture_thing" type="checkbox" value="เตาไฟฟ้า"> เตาไฟฟ้า
                                <input name="furniture_thing" type="checkbox" value="เตาแก๊ส"> เตาแก๊ส
                                <input name="furniture_thing" type="checkbox" value="เครื่องดูดควันจากเตา"> เครื่องดูดควันจากเตา
                                <input name="furniture_thing" type="checkbox" value="เครื่องตรวจจับควัน"> เครื่องตรวจจับควัน
                                <input name="furniture_thing" type="checkbox" value="ตู้เย็น"> ตู้เย็น
                                <input name="furniture_thing" type="checkbox" value="เครื่องกรองน้ำ"> เครื่องกรองน้ำ
                                <input name="furniture_thing" type="checkbox" value="เตาไมโครเวฟ"> เตาไมโครเวฟ
                                <input name="furniture_thing" type="checkbox" value="เครื่องล้างจาน"> เครื่องล้างจาน

                            </div>
                        </div>

                        <!-- ข้อมูลโครงการ 4 -->

                        <label for="special_properties" class="col-md-4 col-form-label text-md-right" style="font-size:30px;">{{ __('ข้อมูลโครงการ') }}</label>

                        <div class="form-group row">
                            <label for="special_properties" class="col-md-4 col-form-label text-md-right">{{ __('คุณสมบัติพิเศษ') }}</label>

                            <div class="col-md-6">
                                <input name="special_properties" type="checkbox" value="เพนท์เฮ้าส์"> เพนท์เฮ้าส์
                                <input name="special_properties" type="checkbox" value="สระว่ายน้ำส่วนตัว"> สระว่ายน้ำส่วนตัว
                                <input name="special_properties" type="checkbox" value="ห้องมุม"> ห้องมุม
                                <input name="special_properties" type="checkbox" value="วิวทะเล"> วิวทะเล
                                <input name="special_properties" type="checkbox" value="วิวเมือง"> วิวเมือง
                                <input name="special_properties" type="checkbox" value="วิวสวนธรรมชาติ"> วิวสวนธรรมชาติ
                                <input name="special_properties" type="checkbox" value="มีชั้นใต้ดิน"> มีชั้นใต้ดิน

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="special_properties" class="col-md-4 col-form-label text-md-right">{{ __('คุณสมบัติพิเศษ') }}</label>

                            <div class="col-md-6">
                                <input name="special_properties" type="checkbox" value="เพนท์เฮ้าส์"> เพนท์เฮ้าส์
                                <input name="special_properties" type="checkbox" value="สระว่ายน้ำส่วนตัว"> สระว่ายน้ำส่วนตัว
                                <input name="special_properties" type="checkbox" value="ห้องมุม"> ห้องมุม
                                <input name="special_properties" type="checkbox" value="วิวทะเล"> วิวทะเล
                                <input name="special_properties" type="checkbox" value="วิวเมือง"> วิวเมือง
                                <input name="special_properties" type="checkbox" value="วิวสวนธรรมชาติ"> วิวสวนธรรมชาติ
                                <input name="special_properties" type="checkbox" value="มีชั้นใต้ดิน"> มีชั้นใต้ดิน

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="central_facility" class="col-md-4 col-form-label text-md-right">{{ __('สิ่งอำนวยความสะดวกส่วนกลาง') }}</label>

                            <div class="col-md-6">
                                <input name="central_facility" type="checkbox" value="ลิฟต์"> ลิฟต์
                                <input name="central_facility" type="checkbox" value="มินิมาร์ท"> มินิมาร์ท
                                <input name="central_facility" type="checkbox" value="อินเตอร์เน็ตคาเฟ่ภายในอาคาร"> อินเตอร์เน็ตคาเฟ่ภายในอาคาร
                                <input name="central_facility" type="checkbox" value="ร้านทำผม-เสริมสวย"> ร้านทำผม-เสริมสวย
                                <input name="central_facility" type="checkbox" value="เจ้าหน้าที่รักษาความปลอดภัย(รปภ)"> เจ้าหน้าที่รักษาความปลอดภัย(รปภ)
                                <input name="central_facility" type="checkbox" value="กล้องวงจรปิด(CCTV)"> กล้องวงจรปิด(CCTV)
                                <input name="central_facility" type="checkbox" value="ระบบ Key Card"> ระบบ Key Card
                                <input name="central_facility" type="checkbox" value="เจ้าหน้าที่อำนวยความสะดวก"> เจ้าหน้าที่อำนวยความสะดวก
                                <input name="central_facility" type="checkbox" value="Shuttle Bus Service"> Shuttle Bus Service
                                <input name="central_facility" type="checkbox" value="ห้องซักรีด"> ห้องซักรีด
                                <input name="central_facility" type="checkbox" value="ห้องประชุมธุรกิจ"> ห้องประชุมธุรกิจ
                                <input name="central_facility" type="checkbox" value="ห้องจัดงาน"> ห้องจัดงาน
                                <input name="central_facility" type="checkbox" value="พื้นที่สำหรับบาร์บีคิว"> พื้นที่สำหรับบาร์บีคิว
                                <input name="central_facility" type="checkbox" value="ห้องเล่นเกม"> ห้องเล่นเกม
                                <input name="central_facility" type="checkbox" value="ห้องคาราโอเกะ"> ห้องคาราโอเกะ
                                <input name="central_facility" type="checkbox" value="ห้องสมุด"> ห้องสมุด
                                <input name="central_facility" type="checkbox" value="เลาจน์"> เลาจน์
                                <input name="central_facility" type="checkbox" value="สกายเลาจน์"> สกายเลาจน์
                                <input name="central_facility" type="checkbox" value="ศาลาชมทิวทัศน์(พาวิลเลี่ยน)"> ศาลาชมทิวทัศน์(พาวิลเลี่ยน)
                                <input name="central_facility" type="checkbox" value="สวนส่วนกลาง"> สวนส่วนกลาง
                                <input name="central_facility" type="checkbox" value="ล็อบบี้"> ล็อบบี้
                                <input name="central_facility" type="checkbox" value="พื้นที่รับส่ง"> พื้นที่รับส่ง
                                <input name="central_facility" type="checkbox" value="ลิฟต์ล็อคชั้น"> ลิฟต์ล็อคชั้น
                                <input name="central_facility" type="checkbox" value="ตู้น้ำหยอดเหรียญ"> ตู้น้ำหยอดเหรียญ
                                <input name="central_facility" type="checkbox" value="เครื่องซักผ้าหยอดเหรียญ"> เครื่องซักผ้าหยอดเหรียญ
                                <input name="central_facility" type="checkbox" value="สระว่ายน้ำ"> สระว่ายน้ำ
                                <input name="central_facility" type="checkbox" value="สระว่ายน้ำเด็ก"> สระว่ายน้ำเด็ก
                                <input name="central_facility" type="checkbox" value="ห้องอบไอน้ำ"> ห้องอบไอน้ำ
                                <input name="central_facility" type="checkbox" value="ห้องฟิตเนส"> ห้องฟิตเนส
                                <input name="central_facility" type="checkbox" value="ห้องเปลี่ยนเสื้อผ้า/ห้องล็อกเกอร์"> ห้องเปลี่ยนเสื้อผ้า/ห้องล็อกเกอร์
                                <input name="central_facility" type="checkbox" value="ห้องเล่นโยคะ"> ห้องเล่นโยคะ
                                <input name="central_facility" type="checkbox" value="สนามบาสเกตบอล"> สนามบาสเกตบอล
                                <input name="central_facility" type="checkbox" value="สนามแบดมินตัน"> สนามแบดมินตัน
                                <input name="central_facility" type="checkbox" value="สนามเทนนิส"> สนามเทนนิส
                                <input name="central_facility" type="checkbox" value="ปิงปอง"> ปิงปอง
                                <input name="central_facility" type="checkbox" value="ห้องเล่นสควอช"> ห้องเล่นสควอช
                                <input name="central_facility" type="checkbox" value="สนามเด็กเล่น"> สนามเด็กเล่น
                                <input name="central_facility" type="checkbox" value="ห้องบิลเลียด"> ห้องบิลเลียด
                                <input name="central_facility" type="checkbox" value="สโมสร"> สโมสร
                                <input name="central_facility" type="checkbox" value="พรมตีกอล์ฟฝึกหัด"> พรมตีกอล์ฟฝึกหัด
                                <input name="central_facility" type="checkbox" value="สนามไดร์ฟกอล์ฟ"> สนามไดร์ฟกอล์ฟ
                                <input name="central_facility" type="checkbox" value="สนามกอล์ฟ"> สนามกอล์ฟ
                                <input name="central_facility" type="checkbox" value="สู่จ๊อกกิ้ง"> สู่จ๊อกกิ้ง
                                <input name="central_facility" type="checkbox" value="ลานเล่นเปตอง"> ลานเล่นเปตอง
                                <input name="central_facility" type="checkbox" value="สปา"> สปา
                                <input name="central_facility" type="checkbox" value="รถรับส่ง"> รถรับส่ง
                                <input name="central_facility" type="checkbox" value="Keycard"> Keycard
                                <input name="central_facility" type="checkbox" value="ร้านสะดวกซื้อ"> ร้านสะดวกซื้อ

                            </div>
                        </div>

                        <!-- การต่อเติมพื้นที่ใช้สอย -->

                        <label for="add_zone_protection_room" class="col-md-4 col-form-label text-md-right" style="font-size:30px;">{{ __('การต่อเติมพื้นที่ใช้สอย') }}</label>

                        <div class="form-group row">
                            <label for="add_zone_protection_room" class="col-md-4 col-form-label text-md-right">{{ __('ต่อเติมห้องกันโซน') }}</label>

                            <div class="col-md-6">
                                <input name="add_zone_protection_room" type="checkbox" value="ห้องนอนเพิ่ม"> ห้องนอนเพิ่ม
                                <input name="add_zone_protection_room" type="checkbox" value="ห้องรับประทานอาหาร"> ห้องรับประทานอาหาร
                                <input name="add_zone_protection_room" type="checkbox" value="ห้องครัว(แยก)"> ห้องครัว(แยก)
                                <input name="add_zone_protection_room" type="checkbox" value="ห้องแต่งตัว"> ห้องแต่งตัว
                                <input name="add_zone_protection_room" type="checkbox" value="ห้องรับแขก"> ห้องรับแขก
                                <input name="add_zone_protection_room" type="checkbox" value="ห้องทำงาน"> ห้องทำงาน
                                <input name="add_zone_protection_room" type="checkbox" value="ห้องนั่งเล่น"> ห้องนั่งเล่น
                                <input name="add_zone_protection_room" type="checkbox" value="ห้องเก็บของ"> ห้องเก็บของ

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="add_balcony" class="col-md-4 col-form-label text-md-right">{{ __('ต่อเติมระเบียง-ชั้นลอย') }}</label>

                            <div class="col-md-6">
                                <input name="add_balcony" type="checkbox" value="ระเบียงด้านหน้า"> ระเบียงด้านหน้า
                                <input name="add_balcony" type="checkbox" value="ระเบียงด้านหลัง"> ระเบียงด้านหลัง
                                <input name="add_balcony" type="checkbox" value="ระเบียงด้านข้าง"> ระเบียงด้านข้าง
                                <input name="add_balcony" type="checkbox" value="ระเบียงชั้น 2"> ระเบียงชั้น 2
                                <input name="add_balcony" type="checkbox" value="ชั้นลอย เพิ่มห้องนอน"> ชั้นลอย เพิ่มห้องนอน
                                <input name="add_balcony" type="checkbox" value="ชั้นลอย เพิ่มพื้นที่เก็บของ"> ชั้นลอย เพิ่มพื้นที่เก็บของ

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="add_bedroom" class="col-md-4 col-form-label text-md-right">{{ __('ต่อเติมห้องนอน') }}</label>

                            <div class="col-md-6">
                                <input name="add_bedroom" type="checkbox" value="เพิ่มจากเดิม"> เพิ่มจากเดิม
                                <input name="add_bedroom" type="checkbox" value="เพิ่มห้องเด็กเล็ก"> เพิ่มห้องเด็กเล็ก
                                <input name="add_bedroom" type="checkbox" value="เพิ่มห้องนอนแขก"> เพิ่มห้องนอนแขก
                                <input name="add_bedroom" type="checkbox" value="เพิ่มห้องผู้สูงอายุ"> เพิ่มห้องผู้สูงอายุ
                                <input name="add_bedroom" type="checkbox" value="เพิ่มห้องผู้พิการ"> เพิ่มห้องผู้พิการ
                                <input name="add_bedroom" type="checkbox" value="แม่บ้าน-คนงาน"> แม่บ้าน-คนงาน

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="add_storageroom" class="col-md-4 col-form-label text-md-right">{{ __('ต่อเติมห้องเก็บของ') }}</label>

                            <div class="col-md-6">
                                <input name="add_storageroom" type="checkbox" value="ด้านหน้า"> ด้านหน้า
                                <input name="add_storageroom" type="checkbox" value="ด้านข้าง"> ด้านข้าง
                                <input name="add_storageroom" type="checkbox" value="ด้านหลัง"> ด้านหลัง
                                <input name="add_storageroom" type="checkbox" value="ชั้นบน"> ชั้นบน
                                <input name="add_storageroom" type="checkbox" value="ใต้หลังคา"> ใต้หลังคา
                                <input name="add_storageroom" type="checkbox" value="ชั้นใต้ดิน"> ชั้นใต้ดิน

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="add_office" class="col-md-4 col-form-label text-md-right">{{ __('ต่อเติมห้องทำงาน') }}</label>

                            <div class="col-md-6">
                                <input name="add_office" type="checkbox" value="เพิ่มห้องผู้บริหาร"> เพิ่มห้องผู้บริหาร
                                <input name="add_office" type="checkbox" value="เพิ่มห้องประชุม"> เพิ่มห้องประชุม
                                <input name="add_office" type="checkbox" value="เพิ่มห้องพนักงาน"> เพิ่มห้องพนักงาน
                                <input name="add_office" type="checkbox" value="เพิ่มห้องคนงาน"> เพิ่มห้องคนงาน

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="add_kitchen" class="col-md-4 col-form-label text-md-right">{{ __('ต่อเติมห้องครัว') }}</label>

                            <div class="col-md-6">
                                <input name="add_kitchen" type="checkbox" value="ด้านข้าง"> ด้านข้าง
                                <input name="add_kitchen" type="checkbox" value="ด้านหลัง"> ด้านหลัง
                                <input name="add_kitchen" type="checkbox" value="แยกนอกตัวอาคาร"> แยกนอกตัวอาคาร
                                <input name="add_kitchen" type="checkbox" value="ลงเสาเข็ม"> ลงเสาเข็ม
                                <input name="add_kitchen" type="checkbox" value="ไม่ลงเสาเข็ม"> ไม่ลงเสาเข็ม
                                <input name="add_kitchen" type="checkbox" value="ห้องปิด"> ห้องปิด
                                <input name="add_kitchen" type="checkbox" value="ห้องเปิดโล่ง"> ห้องเปิดโล่ง
                                <input name="add_kitchen" type="checkbox" value="ห้องปิด-เปิดโล่ง"> ห้องปิด-เปิดโล่ง

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="add_garage" class="col-md-4 col-form-label text-md-right">{{ __('ต่อเติมโรงจอดรถ') }}</label>

                            <div class="col-md-6">
                                <input name="add_garage" type="checkbox" value="ด้านหน้า"> ด้านหน้า
                                <input name="add_garage" type="checkbox" value="ด้านข้าง"> ด้านข้าง
                                <input name="add_garage" type="checkbox" value="ด้านหลัง"> ด้านหลัง
                                <input name="add_garage" type="checkbox" value="แยกนอกตัวอาคาร"> แยกนอกตัวอาคาร
                                <input name="add_garage" type="checkbox" value="โครงเหล็ก มีหลังคา"> โครงเหล็ก มีหลังคา
                                <input name="add_garage" type="checkbox" value="โครงเหล็ก+ผนัง มีหลังคา"> โครงเหล็ก+ผนัง มีหลังคา
                                <input name="add_garage" type="checkbox" value="ลงเสาเข็ม"> ลงเสาเข็ม
                                <input name="add_garage" type="checkbox" value="ไม่ลงเสาเข็ม"> ไม่ลงเสาเข็ม
                                <input name="add_garage" type="checkbox" value="หลังคาเมทัลชีท"> หลังคาเมทัลชีท
                                <input name="add_garage" type="checkbox" value="หลังคาซีแพค"> หลังคาซีแพค
                                <input name="add_garage" type="checkbox" value="หลังคากระเบื้อง"> หลังคากระเบื้อง
                                <input name="add_garage" type="checkbox" value="ปูพื้นกระเบื้อง"> ปูพื้นกระเบื้อง

                            </div>
                        </div>

                        <!-- ราคา -->

                        <label for="price" class="col-md-4 col-form-label text-md-right" style="font-size:30px;">{{ __('ราคา') }}</label>

                        <div class="form-group row">
                            <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('ราคา') }}</label>

                            <div class="col-md-6">
                                <input id="price" type="text" value="{{ $sellerProp->price }}" class="form-control" name="price" placeholder="Price">

                            </div>
                        </div>  

                        <div class="form-group row">
                            <label for="price_per_month" class="col-md-4 col-form-label text-md-right">{{ __('ราคา/เดือน') }}</label>

                            <div class="col-md-6">
                                <input id="price_per_month" type="text" value="{{ $sellerProp->price_per_month }}" class="form-control" name="price_per_month" placeholder="Price Per Month">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="price_central" class="col-md-4 col-form-label text-md-right">{{ __('ค่าส่วนกลาง') }}</label>

                            <div class="col-md-6">
                                <input id="price_central" type="text" value="{{ $sellerProp->price_central }}" class="form-control" name="price_central" placeholder="Price Central">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tranfer_fee_person_responsible" class="col-md-4 col-form-label text-md-right">{{ __('ผู้รับผิดชอบค่าโอน') }}</label>

                            <div class="col-md-6">
                                <input id="tranfer_fee_person_responsible" type="text" value="{{ $sellerProp->tranfer_fee_person_responsible }}" class="form-control" name="tranfer_fee_person_responsible" placeholder="Tranfer Fee Person Responsible">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="promotion" class="col-md-4 col-form-label text-md-right">{{ __('โปรโมชั่น') }}</label>

                            <div class="col-md-6">
                                <input id="promotion" type="text" value="{{ $sellerProp->promotion }}" class="form-control" name="promotion" placeholder="Promotion">

                            </div>
                        </div>

                        <!-- เพิ่มเติม -->

                        <label for="property_picture" class="col-md-4 col-form-label text-md-right" style="font-size:30px;">{{ __('เพิ่มเติม') }}</label>

                        <div class="form-group row">
                            <label for="property_picture" class="col-md-4 col-form-label text-md-right">{{ __('รูปภาพ') }}</label>

                            <div class="col-md-6">
                                <input id="property_picture" type="text" value="{{ $sellerProp->property_picture }}" class="form-control" name="property_picture" placeholder="Property Picture">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="floor_plan_picture" class="col-md-4 col-form-label text-md-right">{{ __('รูปภาพแปลนพื้นที่') }}</label>

                            <div class="col-md-6">
                                <input id="floor_plan_picture" type="text" value="{{ $sellerProp->floor_plan_picture }}" class="form-control" name="floor_plan_picture" placeholder="Floor Plan Picture">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="property_video" class="col-md-4 col-form-label text-md-right">{{ __('วิดีโอ') }}</label>

                            <div class="col-md-6">
                                <input id="property_video" type="text" value="{{ $sellerProp->property_video }}" class="form-control" name="property_video" placeholder="Property Video">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="property_video_url" class="col-md-4 col-form-label text-md-right">{{ __('URL') }}</label>

                            <div class="col-md-6">
                                <input id="property_video_url" type="text" value="{{ $sellerProp->property_video_url }}" class="form-control" name="property_video_url" placeholder="Property Video URL">

                            </div>
                        </div>

                        <p>*คำแนะนำในการค้นหาอสังหาริมทรัพย์</p>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <input name="agent_welcome" type="checkbox" value="ใช่"> ยินดีรับเอเจ้นท์

                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- ---------------------------------------------------------- End House ---------------------------------------------------------- -->





<script type="text/javascript">
    $('.province').change(function() {
        if($(this).val()!='') {
            var select = $(this).val();
            var _token = $('input[name="_token"]').val();
            $.ajax({
                url:"{{route('fetch')}}",
                method:"POST",
                data:{select:select,_token:_token},
                success:function(result) {
                    $('.amphures').html(result);
                }
            })
            console.log(select);
        }
    });

    $('.amphures').change(function() {
        if($(this).val()!='') {
            var select = $(this).val();
            var _token = $('input[name="_token"]').val();
            $.ajax({
                url:"{{route('amphures')}}",
                method:"POST",
                data:{select:select,_token:_token},
                success:function(result) {
                    $('.districts').html(result);
                }
            })
            console.log(select);
        }
    });

    </script>


@endsection
