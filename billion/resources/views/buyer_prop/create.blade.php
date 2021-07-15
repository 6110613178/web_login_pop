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

                    <form action="{{ route('buyer_prop.store') }}" method="POST">
                        @csrf
                        
                        <input type="hidden" name="property" value="บ้าน">
                        <input type="hidden" name="post_allow" value="-">

                        <input type="hidden" name="city_plan_color" value="-">

                        <p>แบบฟอร์มตั้งซื้อบ้าน</p>

                        <label for="sell_type" class="col-md-4 col-form-label text-md-right" style="font-size:30px;">{{ __('ประกาศ') }}</label>

                        <div class="form-group row">
                            <div class="col-md-6">
                                    <input type="checkbox" name="sell_type" value="ขาย"> ขาย
                                    <input type="checkbox" name="sell_type" value="เช่า"> เช่า
                                    <input type="checkbox" name="sell_type" value="ขายเซ้ง"> ขายเซ้ง

                                    <!-- @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror -->

                                </div>
                        </div>

                        <label for="property_type" class="col-md-4 col-form-label text-md-right" style="font-size:30px;">{{ __('ข้อมูลโครงการ') }}</label>

                        <div class="form-group row">
                            <label for="property_type" class="col-md-4 col-form-label text-md-right">{{ __('ประเภทอสังหาริมทรัพย์') }}</label>

                            <div class="col-md-6">
                                <input type="checkbox" name="property_type" value="บ้านเดี่ยว"> บ้านเดี่ยว  
                                <input type="checkbox" name="property_type" value="บ้านแฝด"> บ้านแฝด  
                                <input type="checkbox" name="property_type" value="ทาวน์เฮาส์/ทาวน์โฮม"> ทาวน์เฮาส์/ทาวน์โฮม  

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="project_name" class="col-md-4 col-form-label text-md-right">{{ __('ชื่อโครงการ') }}</label>

                            <div class="col-md-6">
                                <input id="project_name" type="text" class="form-control" name="project_name" placeholder="Project Name">

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
                                <input id="floor_num" type="number" class="form-control" name="floor_num" placeholder="Floor Number" min="1">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="bedroom_num" class="col-md-4 col-form-label text-md-right">{{ __('ห้องนอน') }}</label>

                            <div class="col-md-6">
                                <input id="bedroom_num" type="number" class="form-control" name="bedroom_num" placeholder="Bedroom Number" min="0">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="bathroom_num" class="col-md-4 col-form-label text-md-right">{{ __('ห้องน้ำ') }}</label>

                            <div class="col-md-6">
                                <input id="bathroom_num" type="number" class="form-control" name="bathroom_num" placeholder="Bathroom Number" min="0">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="kitchen_num" class="col-md-4 col-form-label text-md-right">{{ __('ห้องครัว') }}</label>

                            <div class="col-md-6">
                                <input id="kitchen_num" type="number" class="form-control" name="kitchen_num" placeholder="Kitchen Number" min="0">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="parking_num" class="col-md-4 col-form-label text-md-right">{{ __('ที่จอดรถ') }}</label>

                            <div class="col-md-6">
                                <input id="parking_num" type="number" class="form-control" name="parking_num" placeholder="Parking Number" min="0">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="livingroom_num" class="col-md-4 col-form-label text-md-right">{{ __('ห้องนั่งเล่น') }}</label>

                            <div class="col-md-6">
                                <input id="livingroom_num" type="number" class="form-control" name="livingroom_num" placeholder="Livingroom Number" min="0">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="furniture" class="col-md-4 col-form-label text-md-right">{{ __('เฟอร์นิเจอร์') }}</label>

                            <div class="col-md-6">
                                <input id="furniture" type="text" class="form-control" name="furniture" placeholder="Furniture">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="usable_area_min" class="col-md-4 col-form-label text-md-right">{{ __('พื้นที่ใช้สอย(ต่ำสุด)') }}</label>

                            <div class="col-md-6">
                                <input id="usable_area_min" type="text" class="form-control" name="usable_area_min" placeholder="Usable Area Min" >

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="usable_area_max" class="col-md-4 col-form-label text-md-right">{{ __('พื้นที่ใช้สอย(สูงสุด)') }}</label>

                            <div class="col-md-6">
                                <input id="usable_area_max" type="text" class="form-control" name="usable_area_max" placeholder="Usable Area Max">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="area_min" class="col-md-4 col-form-label text-md-right">{{ __('เนื้อที่(ต่ำสุด)') }}</label>

                            <div class="col-md-6">
                                <input id="area_min" type="text" class="form-control" name="area_min" placeholder="Area Min">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="area_max" class="col-md-4 col-form-label text-md-right">{{ __('เนื้อที่(สูงสุด)') }}</label>

                            <div class="col-md-6">
                                <input id="area_max" type="text" class="form-control" name="area_max" placeholder="Area Max">

                            </div>
                        </div>

                        <label for="property_type" class="col-md-4 col-form-label text-md-right" style="font-size:30px;">{{ __('ทำเลที่ตั้ง') }}</label>
                        <br><br><br>
                        <div class="form-group row">
                            <label for="alley" class="col-md-4 col-form-label text-md-right">{{ __('ซอย') }}</label>

                            <div class="col-md-6">
                                <input id="alley" type="text" class="form-control" name="alley" placeholder="Alley">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="road" class="col-md-4 col-form-label text-md-right">{{ __('ถนน') }}</label>

                            <div class="col-md-6">
                                <input id="road" type="text" class="form-control" name="road" placeholder="Road">

                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="province" class="col-md-4 col-form-label text-md-right">{{ __('') }}</label>

                            <!-- select form -->

                        <div class="col-md-6">
                            <div class="form-group">
                                <select class="province" name="province" id="province">
                                    <option value="">เลือกข้อมูลจังหวัดของท่าน</option>
                                    @foreach($list as $row)
                                        <option value="{{$row->id}}">{{$row->name_th}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="amphures" name="district">
                                    <option value="">เลือกข้อมูลอำเภอของท่าน</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="districts" name="sub_district">
                                    <option value="">เลือกข้อมูลตำบลของท่าน</option>
                                </select>
                            </div>
                        </div>
                        {{csrf_field()}}
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

                        <label for="price" class="col-md-4 col-form-label text-md-right" style="font-size:30px;">{{ __('ราคา') }}</label>

                        <div class="form-group row">
                            <label for="price_range_min" class="col-md-4 col-form-label text-md-right">{{ __('ช่วงราคาที่ต้องการ(ต่ำสุด)') }}</label>

                            <div class="col-md-6">
                                <input id="price_range_min" type="text" class="form-control" name="price_range_min" placeholder="Price Range Min">

                            </div>
                        </div>  

                        <div class="form-group row">
                            <label for="price_range_max" class="col-md-4 col-form-label text-md-right">{{ __('ช่วงราคาที่ต้องการ(สูงสุด)') }}</label>

                            <div class="col-md-6">
                                <input id="price_range_max" type="text" class="form-control" name="price_range_max" placeholder="Price Range Max">

                            </div>
                        </div>

                        <p><span style="color: red;">*</span>คำแนะนำในการค้นหาอสังหาริมทรัพย์ที่ท่านต้องการ</p>
                        <p>ยิ่งละเอียดยิ่งดีต่อการค้นหา ประหยัดเวลาและได้อสังหาฯที่ตรงใจคุณ กรุณากรอกข้อมูลให้ครบถ้วนสมบูรณ์ เพื่อให้ระบบค้นหาได้ง่ายขึ้น</p>

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


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="Apartment">
                <div class="card-header">{{ __('Add Apartment') }}</div>

                <div class="card-body">

                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>    
                        <strong>{{ $message }}</strong>
                    </div>
                @endif

                @if ($message = Session::get('fail'))
                    <div class="alert alert-danger alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>    
                        <strong>{{ $message }}</strong>
                    </div>
                @endif

                    <form action="{{ route('buyer_prop.store') }}" method="POST">
                        @csrf

                        <input type="hidden" name="property" value="อพาร์ทเม้นท์">
                        <input type="hidden" name="post_allow" value="-">

                        <input type="hidden" name="city_plan_color" value="-">

                        <p>แบบฟอร์มตั้งซื้ออพาร์ทเม้นท์</p>

                        <label for="sell_type" class="col-md-4 col-form-label text-md-right" style="font-size:30px;">{{ __('ประกาศ') }}</label>

                        <div class="form-group row">
                            <div class="col-md-6">
                                    <input type="checkbox" name="sell_type" value="ขาย"> ขาย
                                    <input type="checkbox" name="sell_type" value="เช่า"> เช่า
                                    <input type="checkbox" name="sell_type" value="ขายเซ้ง"> ขายเซ้ง

                                </div>
                        </div>

                        <label for="property_type" class="col-md-4 col-form-label text-md-right" style="font-size:30px;">{{ __('ข้อมูลโครงการ') }}</label>

                        <div class="form-group row">
                            <label for="property_type" class="col-md-4 col-form-label text-md-right">{{ __('ประเภทอสังหาริมทรัพย์') }}</label>

                            <div class="col-md-6">
                                <input type="checkbox" name="property_type" value="อพาร์ทเม้นท์ขนาดเล็ก"> อพาร์ทเม้นท์ขนาดเล็ก <br>
                                <input type="checkbox" name="property_type" value="อพาร์ทเม้นท์ขนาดกลาง"> อพาร์ทเม้นท์ขนาดกลาง <br>
                                <input type="checkbox" name="property_type" value="อพาร์ทเม้นท์ขนาดใหญ่"> อพาร์ทเม้นท์ขนาดใหญ่

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="project_name" class="col-md-4 col-form-label text-md-right">{{ __('ชื่อโครงการ') }}</label>

                            <div class="col-md-6">
                                <input id="project_name" type="text" class="form-control" name="project_name" placeholder="Project Name">

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
                            <label for="floor_num" class="col-md-4 col-form-label text-md-right">{{ __('ชั้นที่ต้องการ') }}</label>

                            <div class="col-md-6">
                                <input id="floor_num" type="number" class="form-control" name="floor_num" placeholder="Floor Number" min="1">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="bedroom_num" class="col-md-4 col-form-label text-md-right">{{ __('ห้องนอน') }}</label>

                            <div class="col-md-6">
                                <input id="bedroom_num" type="number" class="form-control" name="bedroom_num" placeholder="Bedroom Number" min="0">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="bathroom_num" class="col-md-4 col-form-label text-md-right">{{ __('ห้องน้ำ') }}</label>

                            <div class="col-md-6">
                                <input id="bathroom_num" type="number" class="form-control" name="bathroom_num" placeholder="Bathroom Number" min="0">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="kitchen_num" class="col-md-4 col-form-label text-md-right">{{ __('ห้องครัว') }}</label>

                            <div class="col-md-6">
                                <input id="kitchen_num" type="number" class="form-control" name="kitchen_num" placeholder="Kitchen Number" min="0">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="parking_num" class="col-md-4 col-form-label text-md-right">{{ __('ที่จอดรถ') }}</label>

                            <div class="col-md-6">
                                <input id="parking_num" type="number" class="form-control" name="parking_num" placeholder="Parking Number" min="0">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="livingroom_num" class="col-md-4 col-form-label text-md-right">{{ __('ห้องนั่งเล่น') }}</label>

                            <div class="col-md-6">
                                <input id="livingroom_num" type="number" class="form-control" name="livingroom_num" placeholder="Livingroom Number" min="0">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="furniture" class="col-md-4 col-form-label text-md-right">{{ __('เฟอร์นิเจอร์') }}</label>

                            <div class="col-md-6">
                                <input id="furniture" type="text" class="form-control" name="furniture" placeholder="Furniture">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="usable_area_min" class="col-md-4 col-form-label text-md-right">{{ __('พื้นที่ใช้สอย(ต่ำสุด)') }}</label>

                            <div class="col-md-6">
                                <input id="usable_area_min" type="text" class="form-control" name="usable_area_min" placeholder="Usable Area Min" >

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="usable_area_max" class="col-md-4 col-form-label text-md-right">{{ __('พื้นที่ใช้สอย(สูงสุด)') }}</label>

                            <div class="col-md-6">
                                <input id="usable_area_max" type="text" class="form-control" name="usable_area_max" placeholder="Usable Area Max">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="area_min" class="col-md-4 col-form-label text-md-right">{{ __('เนื้อที่(ต่ำสุด)') }}</label>

                            <div class="col-md-6">
                                <input id="area_min" type="text" class="form-control" name="area_min" placeholder="Area Min">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="area_max" class="col-md-4 col-form-label text-md-right">{{ __('เนื้อที่(สูงสุด)') }}</label>

                            <div class="col-md-6">
                                <input id="area_max" type="text" class="form-control" name="area_max" placeholder="Area Max">

                            </div>
                        </div>

                        <label for="property_type" class="col-md-4 col-form-label text-md-right" style="font-size:30px;">{{ __('ทำเลที่ตั้ง') }}</label>

                        <div class="form-group row">
                            <label for="alley" class="col-md-4 col-form-label text-md-right">{{ __('ซอย') }}</label>

                            <div class="col-md-6">
                                <input id="alley" type="text" class="form-control" name="alley" placeholder="Alley">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="road" class="col-md-4 col-form-label text-md-right">{{ __('ถนน') }}</label>

                            <div class="col-md-6">
                                <input id="road" type="text" class="form-control" name="road" placeholder="Road">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="sub_district" class="col-md-4 col-form-label text-md-right">{{ __('ตำบล/แขวง') }}</label>

                            <div class="col-md-6">
                                <input id="sub_district" type="text" class="form-control" name="sub_district" placeholder="Sub District">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="district" class="col-md-4 col-form-label text-md-right">{{ __('อำเภอ/เขต') }}</label>

                            <div class="col-md-6">
                                <input id="district" type="text" class="form-control" name="district" placeholder="District">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="province" class="col-md-4 col-form-label text-md-right">{{ __('จังหวัด') }}</label>

                            <div class="col-md-6">
                                <input id="province" type="text" class="form-control" name="province" placeholder="Province">

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

                        <label for="price" class="col-md-4 col-form-label text-md-right" style="font-size:30px;">{{ __('ราคา') }}</label>

                        <div class="form-group row">
                            <label for="price_range_min" class="col-md-4 col-form-label text-md-right">{{ __('ช่วงราคาที่ต้องการ(ต่ำสุด)') }}</label>

                            <div class="col-md-6">
                                <input id="price_range_min" type="text" class="form-control" name="price_range_min" placeholder="Price Range Min">

                            </div>
                        </div>  

                        <div class="form-group row">
                            <label for="price_range_max" class="col-md-4 col-form-label text-md-right">{{ __('ช่วงราคาที่ต้องการ(สูงสุด)') }}</label>

                            <div class="col-md-6">
                                <input id="price_range_max" type="text" class="form-control" name="price_range_max" placeholder="Price Range Max">

                            </div>
                        </div>

                        <p><span style="color: red;">*</span>คำแนะนำในการค้นหาอสังหาริมทรัพย์ที่ท่านต้องการ</p>
                        <p>ยิ่งละเอียดยิ่งดีต่อการค้นหา ประหยัดเวลาและได้อสังหาฯที่ตรงใจคุณ กรุณากรอกข้อมูลให้ครบถ้วนสมบูรณ์ เพื่อให้ระบบค้นหาได้ง่ายขึ้น</p>

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


<!-- ---------------------------------------------------------- End Apartment ---------------------------------------------------------- -->


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="Commercial-Building">
                <div class="card-header">{{ __('Add Commercial-Building') }}</div>

                <div class="card-body">

                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>    
                        <strong>{{ $message }}</strong>
                    </div>
                @endif

                @if ($message = Session::get('fail'))
                    <div class="alert alert-danger alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>    
                        <strong>{{ $message }}</strong>
                    </div>
                @endif

                    <form action="{{ route('buyer_prop.store') }}" method="POST">
                        @csrf

                        <input type="hidden" name="property" value="อาคารพาณิชย์">
                        <input type="hidden" name="post_allow" value="-">

                        <input type="hidden" name="city_plan_color" value="-">

                        <p>แบบฟอร์มตั้งซื้ออาคารพาณิชย์</p>

                        <label for="sell_type" class="col-md-4 col-form-label text-md-right" style="font-size:30px;">{{ __('ประกาศ') }}</label>

                        <div class="form-group row">
                            <div class="col-md-6">
                                    <input type="checkbox" name="sell_type" value="ขาย"> ขาย
                                    <input type="checkbox" name="sell_type" value="เช่า"> เช่า
                                    <input type="checkbox" name="sell_type" value="ขายเซ้ง"> ขายเซ้ง

                                </div>
                        </div>

                        <label for="property_type" class="col-md-4 col-form-label text-md-right" style="font-size:30px;">{{ __('ข้อมูลโครงการ') }}</label>

                        <div class="form-group row">
                            <label for="property_type" class="col-md-4 col-form-label text-md-right">{{ __('ประเภทอสังหาริมทรัพย์') }}</label>

                            <div class="col-md-6">
                                <input type="checkbox" name="property_type" value="อาคารพาณิชย์ 1 คูหา"> อาคารพาณิชย์ 1 คูหา
                                <input type="checkbox" name="property_type" value="อาคารพาณิชย์มากกว่า 1 คูหาขึ้นไป"> อาคารพาณิชย์มากกว่า 1 คูหาขึ้นไป

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="project_name" class="col-md-4 col-form-label text-md-right">{{ __('ชื่อโครงการ') }}</label>

                            <div class="col-md-6">
                                <input id="project_name" type="text" class="form-control" name="project_name" placeholder="Project Name">

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
                            <label for="floor_num" class="col-md-4 col-form-label text-md-right">{{ __('ชั้น') }}</label>

                            <div class="col-md-6">
                                <input id="floor_num" type="number" class="form-control" name="floor_num" placeholder="Floor Number" min="1">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="bedroom_num" class="col-md-4 col-form-label text-md-right">{{ __('ห้องนอน') }}</label>

                            <div class="col-md-6">
                                <input id="bedroom_num" type="number" class="form-control" name="bedroom_num" placeholder="Bedroom Number" min="0">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="bathroom_num" class="col-md-4 col-form-label text-md-right">{{ __('ห้องน้ำ') }}</label>

                            <div class="col-md-6">
                                <input id="bathroom_num" type="number" class="form-control" name="bathroom_num" placeholder="Bathroom Number" min="0">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="kitchen_num" class="col-md-4 col-form-label text-md-right">{{ __('ห้องครัว') }}</label>

                            <div class="col-md-6">
                                <input id="kitchen_num" type="number" class="form-control" name="kitchen_num" placeholder="Kitchen Number" min="0">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="parking_num" class="col-md-4 col-form-label text-md-right">{{ __('ที่จอดรถ') }}</label>

                            <div class="col-md-6">
                                <input id="parking_num" type="number" class="form-control" name="parking_num" placeholder="Parking Number" min="0">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="livingroom_num" class="col-md-4 col-form-label text-md-right">{{ __('ห้องนั่งเล่น') }}</label>

                            <div class="col-md-6">
                                <input id="livingroom_num" type="number" class="form-control" name="livingroom_num" placeholder="Livingroom Number" min="0">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="furniture" class="col-md-4 col-form-label text-md-right">{{ __('เฟอร์นิเจอร์') }}</label>

                            <div class="col-md-6">
                                <input id="furniture" type="text" class="form-control" name="furniture" placeholder="Furniture">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="usable_area_min" class="col-md-4 col-form-label text-md-right">{{ __('พื้นที่ใช้สอย(ต่ำสุด)') }}</label>

                            <div class="col-md-6">
                                <input id="usable_area_min" type="text" class="form-control" name="usable_area_min" placeholder="Usable Area Min" >

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="usable_area_max" class="col-md-4 col-form-label text-md-right">{{ __('พื้นที่ใช้สอย(สูงสุด)') }}</label>

                            <div class="col-md-6">
                                <input id="usable_area_max" type="text" class="form-control" name="usable_area_max" placeholder="Usable Area Max">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="area_min" class="col-md-4 col-form-label text-md-right">{{ __('เนื้อที่(ต่ำสุด)') }}</label>

                            <div class="col-md-6">
                                <input id="area_min" type="text" class="form-control" name="area_min" placeholder="Area Min">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="area_max" class="col-md-4 col-form-label text-md-right">{{ __('เนื้อที่(สูงสุด)') }}</label>

                            <div class="col-md-6">
                                <input id="area_max" type="text" class="form-control" name="area_max" placeholder="Area Max">

                            </div>
                        </div>

                        <label for="property_type" class="col-md-4 col-form-label text-md-right" style="font-size:30px;">{{ __('ทำเลที่ตั้ง') }}</label>
                        <br><br><br>
                        <div class="form-group row">
                            <label for="alley" class="col-md-4 col-form-label text-md-right">{{ __('ซอย') }}</label>

                            <div class="col-md-6">
                                <input id="alley" type="text" class="form-control" name="alley" placeholder="Alley">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="road" class="col-md-4 col-form-label text-md-right">{{ __('ถนน') }}</label>

                            <div class="col-md-6">
                                <input id="road" type="text" class="form-control" name="road" placeholder="Road">

                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="province" class="col-md-4 col-form-label text-md-right">{{ __('') }}</label>

                            <!-- select form -->

                        <div class="col-md-6">
                            <div class="form-group">
                                <select class="province" name="province" id="province">
                                    <option value="">เลือกข้อมูลจังหวัดของท่าน</option>
                                    @foreach($list as $row)
                                        <option value="{{$row->id}}">{{$row->name_th}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="amphures" name="amphure">
                                    <option value="">เลือกข้อมูลอำเภอของท่าน</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="districts" name="district">
                                    <option value="">เลือกข้อมูลตำบลของท่าน</option>
                                </select>
                            </div>
                        </div>
                        {{csrf_field()}}
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

                        <label for="price" class="col-md-4 col-form-label text-md-right" style="font-size:30px;">{{ __('ราคา') }}</label>

                        <div class="form-group row">
                            <label for="price_range_min" class="col-md-4 col-form-label text-md-right">{{ __('ช่วงราคาที่ต้องการ(ต่ำสุด)') }}</label>

                            <div class="col-md-6">
                                <input id="price_range_min" type="text" class="form-control" name="price_range_min" placeholder="Price Range Min">

                            </div>
                        </div>  

                        <div class="form-group row">
                            <label for="price_range_max" class="col-md-4 col-form-label text-md-right">{{ __('ช่วงราคาที่ต้องการ(สูงสุด)') }}</label>

                            <div class="col-md-6">
                                <input id="price_range_max" type="text" class="form-control" name="price_range_max" placeholder="Price Range Max">

                            </div>
                        </div>

                        <p><span style="color: red;">*</span>คำแนะนำในการค้นหาอสังหาริมทรัพย์ที่ท่านต้องการ</p>
                        <p>ยิ่งละเอียดยิ่งดีต่อการค้นหา ประหยัดเวลาและได้อสังหาฯที่ตรงใจคุณ กรุณากรอกข้อมูลให้ครบถ้วนสมบูรณ์ เพื่อให้ระบบค้นหาได้ง่ายขึ้น</p>

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


<!-- ---------------------------------------------------------- End Commercial-Building ---------------------------------------------------------- -->


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="Condo">
                <div class="card-header">{{ __('Add Condo') }}</div>

                <div class="card-body">

                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>    
                        <strong>{{ $message }}</strong>
                    </div>
                @endif

                @if ($message = Session::get('fail'))
                    <div class="alert alert-danger alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>    
                        <strong>{{ $message }}</strong>
                    </div>
                @endif

                    <form action="{{ route('buyer_prop.store') }}" method="POST">
                        @csrf

                        <input type="hidden" name="property" value="คอนโด">
                        <input type="hidden" name="post_allow" value="-">

                        <input type="hidden" name="city_plan_color" value="-">

                        <p>แบบฟอร์มตั้งซื้อคอนโด</p>

                        <label for="sell_type" class="col-md-4 col-form-label text-md-right" style="font-size:30px;">{{ __('ประกาศ') }}</label>

                        <div class="form-group row">
                            <div class="col-md-6">
                                    <input type="checkbox" name="sell_type" value="ขาย"> ขาย
                                    <input type="checkbox" name="sell_type" value="เช่า"> เช่า
                                    <input type="checkbox" name="sell_type" value="ขายเซ้ง"> ขายเซ้ง

                                </div>
                        </div>

                        <label for="property_type" class="col-md-4 col-form-label text-md-right" style="font-size:30px;">{{ __('ข้อมูลโครงการคอนโด') }}</label>

                        <div class="form-group row">
                            <label for="property_type" class="col-md-4 col-form-label text-md-right">{{ __('ประเภทอสังหาริมทรัพย์') }}</label>

                            <div class="col-md-6">
                                <input type="checkbox" name="property_type" value="คอนโด Low Rise"> คอนโด Low Rise
                                <input type="checkbox" name="property_type" value="คอนโด High Rise"> คอนโด High Rise

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="project_name" class="col-md-4 col-form-label text-md-right">{{ __('ชื่อโครงการ') }}</label>

                            <div class="col-md-6">
                                <input id="project_name" type="text" class="form-control" name="project_name" placeholder="Project Name">

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
                            <label for="floor_num" class="col-md-4 col-form-label text-md-right">{{ __('ชั้นที่ต้องการ') }}</label>

                            <div class="col-md-6">
                                <input id="floor_num" type="number" class="form-control" name="floor_num" placeholder="Floor Number" min="1">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="bedroom_num" class="col-md-4 col-form-label text-md-right">{{ __('ห้องนอน') }}</label>

                            <div class="col-md-6">
                                <input id="bedroom_num" type="number" class="form-control" name="bedroom_num" placeholder="Bedroom Number" min="0">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="bathroom_num" class="col-md-4 col-form-label text-md-right">{{ __('ห้องน้ำ') }}</label>

                            <div class="col-md-6">
                                <input id="bathroom_num" type="number" class="form-control" name="bathroom_num" placeholder="Bathroom Number" min="0">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="kitchen_num" class="col-md-4 col-form-label text-md-right">{{ __('ห้องครัว') }}</label>

                            <div class="col-md-6">
                                <input id="kitchen_num" type="number" class="form-control" name="kitchen_num" placeholder="Kitchen Number" min="0">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="parking_num" class="col-md-4 col-form-label text-md-right">{{ __('ที่จอดรถ') }}</label>

                            <div class="col-md-6">
                                <input id="parking_num" type="number" class="form-control" name="parking_num" placeholder="Parking Number" min="0">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="livingroom_num" class="col-md-4 col-form-label text-md-right">{{ __('ห้องนั่งเล่น') }}</label>

                            <div class="col-md-6">
                                <input id="livingroom_num" type="number" class="form-control" name="livingroom_num" placeholder="Livingroom Number" min="0">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="furniture" class="col-md-4 col-form-label text-md-right">{{ __('เฟอร์นิเจอร์') }}</label>

                            <div class="col-md-6">
                                <input id="furniture" type="text" class="form-control" name="furniture" placeholder="Furniture">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="usable_area_min" class="col-md-4 col-form-label text-md-right">{{ __('พื้นที่ใช้สอย(ต่ำสุด)') }}</label>

                            <div class="col-md-6">
                                <input id="usable_area_min" type="text" class="form-control" name="usable_area_min" placeholder="Usable Area Min" >

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="usable_area_max" class="col-md-4 col-form-label text-md-right">{{ __('พื้นที่ใช้สอย(สูงสุด)') }}</label>

                            <div class="col-md-6">
                                <input id="usable_area_max" type="text" class="form-control" name="usable_area_max" placeholder="Usable Area Max">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="area_min" class="col-md-4 col-form-label text-md-right">{{ __('เนื้อที่(ต่ำสุด)') }}</label>

                            <div class="col-md-6">
                                <input id="area_min" type="text" class="form-control" name="area_min" placeholder="Area Min">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="area_max" class="col-md-4 col-form-label text-md-right">{{ __('เนื้อที่(สูงสุด)') }}</label>

                            <div class="col-md-6">
                                <input id="area_max" type="text" class="form-control" name="area_max" placeholder="Area Max">

                            </div>
                        </div>

                        <label for="property_type" class="col-md-4 col-form-label text-md-right" style="font-size:30px;">{{ __('ทำเลที่ตั้ง') }}</label>
                        <br><br><br>
                        <div class="form-group row">
                            <label for="alley" class="col-md-4 col-form-label text-md-right">{{ __('ซอย') }}</label>

                            <div class="col-md-6">
                                <input id="alley" type="text" class="form-control" name="alley" placeholder="Alley">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="road" class="col-md-4 col-form-label text-md-right">{{ __('ถนน') }}</label>

                            <div class="col-md-6">
                                <input id="road" type="text" class="form-control" name="road" placeholder="Road">

                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="province" class="col-md-4 col-form-label text-md-right">{{ __('') }}</label>

                            <!-- select form -->

                        <div class="col-md-6">
                            <div class="form-group">
                                <select class="province" name="province" id="province">
                                    <option value="">เลือกข้อมูลจังหวัดของท่าน</option>
                                    @foreach($list as $row)
                                        <option value="{{$row->id}}">{{$row->name_th}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="amphures" name="amphure">
                                    <option value="">เลือกข้อมูลอำเภอของท่าน</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="districts" name="district">
                                    <option value="">เลือกข้อมูลตำบลของท่าน</option>
                                </select>
                            </div>
                        </div>
                        {{csrf_field()}}
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

                        <label for="price" class="col-md-4 col-form-label text-md-right" style="font-size:30px;">{{ __('ราคา') }}</label>

                        <div class="form-group row">
                            <label for="price_range_min" class="col-md-4 col-form-label text-md-right">{{ __('ช่วงราคาที่ต้องการ(ต่ำสุด)') }}</label>

                            <div class="col-md-6">
                                <input id="price_range_min" type="text" class="form-control" name="price_range_min" placeholder="Price Range Min">

                            </div>
                        </div>  

                        <div class="form-group row">
                            <label for="price_range_max" class="col-md-4 col-form-label text-md-right">{{ __('ช่วงราคาที่ต้องการ(สูงสุด)') }}</label>

                            <div class="col-md-6">
                                <input id="price_range_max" type="text" class="form-control" name="price_range_max" placeholder="Price Range Max">

                            </div>
                        </div>

                        <p><span style="color: red;">*</span>คำแนะนำในการค้นหาอสังหาริมทรัพย์ที่ท่านต้องการ</p>
                        <p>ยิ่งละเอียดยิ่งดีต่อการค้นหา ประหยัดเวลาและได้อสังหาฯที่ตรงใจคุณ กรุณากรอกข้อมูลให้ครบถ้วนสมบูรณ์ เพื่อให้ระบบค้นหาได้ง่ายขึ้น</p>

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


<!-- ---------------------------------------------------------- End Condo ---------------------------------------------------------- -->


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="Down">
                <div class="card-header">{{ __('Add Down') }}</div>

                <div class="card-body">

                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>    
                        <strong>{{ $message }}</strong>
                    </div>
                @endif

                @if ($message = Session::get('fail'))
                    <div class="alert alert-danger alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>    
                        <strong>{{ $message }}</strong>
                    </div>
                @endif

                    <form action="{{ route('buyer_prop.store') }}" method="POST">
                        @csrf

                        <input type="hidden" name="property" value="ขายดาวน์">
                        <input type="hidden" name="post_allow" value="-">

                        <input type="hidden" name="city_plan_color" value="-">

                        <p>แบบฟอร์มตั้งซื้อขายดาวน์</p>

                        <label for="sell_type" class="col-md-4 col-form-label text-md-right" style="font-size:30px;">{{ __('ประกาศ') }}</label>

                        <div class="form-group row">
                            <div class="col-md-6">
                                    <input type="checkbox" name="sell_type" value="ขาย"> ขาย
                                    <input type="checkbox" name="sell_type" value="เช่า"> เช่า
                                    <input type="checkbox" name="sell_type" value="ขายเซ้ง"> ขายเซ้ง

                                </div>
                        </div>

                        <label for="property_type" class="col-md-4 col-form-label text-md-right" style="font-size:30px;">{{ __('ข้อมูลโครงการ') }}</label>

                        <div class="form-group row">
                            <label for="property_type" class="col-md-4 col-form-label text-md-right">{{ __('ประเภทอสังหาริมทรัพย์') }}</label>

                            <div class="col-md-6">
                                <input type="checkbox" name="property_type" value="คอนโด"> คอนโด
                                <input type="checkbox" name="property_type" value="อาคารพาณิชย์"> อาคารพาณิชย์  
                                <input type="checkbox" name="property_type" value="ออฟฟิศ/สำนักงาน"> ออฟฟิศ/สำนักงาน

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="project_name" class="col-md-4 col-form-label text-md-right">{{ __('ชื่อโครงการ') }}</label>

                            <div class="col-md-6">
                                <input id="project_name" type="text" class="form-control" name="project_name" placeholder="Project Name">

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
                            <label for="floor_num" class="col-md-4 col-form-label text-md-right">{{ __('ชั้น') }}</label>

                            <div class="col-md-6">
                                <input id="floor_num" type="number" class="form-control" name="floor_num" placeholder="Floor Number" min="1">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="bedroom_num" class="col-md-4 col-form-label text-md-right">{{ __('ห้องนอน') }}</label>

                            <div class="col-md-6">
                                <input id="bedroom_num" type="number" class="form-control" name="bedroom_num" placeholder="Bedroom Number" min="0">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="bathroom_num" class="col-md-4 col-form-label text-md-right">{{ __('ห้องน้ำ') }}</label>

                            <div class="col-md-6">
                                <input id="bathroom_num" type="number" class="form-control" name="bathroom_num" placeholder="Bathroom Number" min="0">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="kitchen_num" class="col-md-4 col-form-label text-md-right">{{ __('ห้องครัว') }}</label>

                            <div class="col-md-6">
                                <input id="kitchen_num" type="number" class="form-control" name="kitchen_num" placeholder="Kitchen Number" min="0">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="parking_num" class="col-md-4 col-form-label text-md-right">{{ __('ที่จอดรถ') }}</label>

                            <div class="col-md-6">
                                <input id="parking_num" type="number" class="form-control" name="parking_num" placeholder="Parking Number" min="0">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="livingroom_num" class="col-md-4 col-form-label text-md-right">{{ __('ห้องนั่งเล่น') }}</label>

                            <div class="col-md-6">
                                <input id="livingroom_num" type="number" class="form-control" name="livingroom_num" placeholder="Livingroom Number" min="0">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="furniture" class="col-md-4 col-form-label text-md-right">{{ __('เฟอร์นิเจอร์') }}</label>

                            <div class="col-md-6">
                                <input id="furniture" type="text" class="form-control" name="furniture" placeholder="Furniture">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="usable_area_min" class="col-md-4 col-form-label text-md-right">{{ __('พื้นที่ใช้สอย(ต่ำสุด)') }}</label>

                            <div class="col-md-6">
                                <input id="usable_area_min" type="text" class="form-control" name="usable_area_min" placeholder="Usable Area Min" >

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="usable_area_max" class="col-md-4 col-form-label text-md-right">{{ __('พื้นที่ใช้สอย(สูงสุด)') }}</label>

                            <div class="col-md-6">
                                <input id="usable_area_max" type="text" class="form-control" name="usable_area_max" placeholder="Usable Area Max">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="area_min" class="col-md-4 col-form-label text-md-right">{{ __('เนื้อที่(ต่ำสุด)') }}</label>

                            <div class="col-md-6">
                                <input id="area_min" type="text" class="form-control" name="area_min" placeholder="Area Min">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="area_max" class="col-md-4 col-form-label text-md-right">{{ __('เนื้อที่(สูงสุด)') }}</label>

                            <div class="col-md-6">
                                <input id="area_max" type="text" class="form-control" name="area_max" placeholder="Area Max">

                            </div>
                        </div>

                        <label for="property_type" class="col-md-4 col-form-label text-md-right" style="font-size:30px;">{{ __('ทำเลที่ตั้ง') }}</label>
                        <br><br><br>
                        <div class="form-group row">
                            <label for="alley" class="col-md-4 col-form-label text-md-right">{{ __('ซอย') }}</label>

                            <div class="col-md-6">
                                <input id="alley" type="text" class="form-control" name="alley" placeholder="Alley">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="road" class="col-md-4 col-form-label text-md-right">{{ __('ถนน') }}</label>

                            <div class="col-md-6">
                                <input id="road" type="text" class="form-control" name="road" placeholder="Road">

                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="province" class="col-md-4 col-form-label text-md-right">{{ __('') }}</label>

                            <!-- select form -->

                        <div class="col-md-6">
                            <div class="form-group">
                                <select class="province" name="province" id="province">
                                    <option value="">เลือกข้อมูลจังหวัดของท่าน</option>
                                    @foreach($list as $row)
                                        <option value="{{$row->id}}">{{$row->name_th}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="amphures" name="amphure">
                                    <option value="">เลือกข้อมูลอำเภอของท่าน</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="districts" name="district">
                                    <option value="">เลือกข้อมูลตำบลของท่าน</option>
                                </select>
                            </div>
                        </div>
                        {{csrf_field()}}
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

                        <label for="price" class="col-md-4 col-form-label text-md-right" style="font-size:30px;">{{ __('ราคา') }}</label>

                        <div class="form-group row">
                            <label for="price_range_min" class="col-md-4 col-form-label text-md-right">{{ __('ช่วงราคาที่ต้องการ(ต่ำสุด)') }}</label>

                            <div class="col-md-6">
                                <input id="price_range_min" type="text" class="form-control" name="price_range_min" placeholder="Price Range Min">

                            </div>
                        </div>  

                        <div class="form-group row">
                            <label for="price_range_max" class="col-md-4 col-form-label text-md-right">{{ __('ช่วงราคาที่ต้องการ(สูงสุด)') }}</label>

                            <div class="col-md-6">
                                <input id="price_range_max" type="text" class="form-control" name="price_range_max" placeholder="Price Range Max">

                            </div>
                        </div>

                        <p><span style="color: red;">*</span>คำแนะนำในการค้นหาอสังหาริมทรัพย์ที่ท่านต้องการ</p>
                        <p>ยิ่งละเอียดยิ่งดีต่อการค้นหา ประหยัดเวลาและได้อสังหาฯที่ตรงใจคุณ กรุณากรอกข้อมูลให้ครบถ้วนสมบูรณ์ เพื่อให้ระบบค้นหาได้ง่ายขึ้น</p>

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


<!-- ---------------------------------------------------------- End Down ---------------------------------------------------------- -->


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="Hotel">
                <div class="card-header">{{ __('Add Hotel') }}</div>

                <div class="card-body">

                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>    
                        <strong>{{ $message }}</strong>
                    </div>
                @endif

                @if ($message = Session::get('fail'))
                    <div class="alert alert-danger alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>    
                        <strong>{{ $message }}</strong>
                    </div>
                @endif

                    <form action="{{ route('buyer_prop.store') }}" method="POST">
                        @csrf

                        <input type="hidden" name="property" value="โรงแรม">
                        <input type="hidden" name="post_allow" value="-">

                        <input type="hidden" name="city_plan_color" value="-">

                        <p>แบบฟอร์มตั้งซื้อโรงแรม</p>

                        <label for="sell_type" class="col-md-4 col-form-label text-md-right" style="font-size:30px;">{{ __('ประกาศ') }}</label>

                        <div class="form-group row">
                            <div class="col-md-6">
                                    <input type="checkbox" name="sell_type" value="ขาย"> ขาย
                                    <input type="checkbox" name="sell_type" value="เช่า"> เช่า
                                    <input type="checkbox" name="sell_type" value="ขายเซ้ง"> ขายเซ้ง

                                </div>
                        </div>

                        <label for="property_type" class="col-md-4 col-form-label text-md-right" style="font-size:30px;">{{ __('ข้อมูลโครงการ') }}</label>

                        <div class="form-group row">
                            <label for="property_type" class="col-md-4 col-form-label text-md-right">{{ __('ประเภทอสังหาริมทรัพย์') }}</label>

                            <div class="col-md-6">
                                <input type="checkbox" name="property_type" value="โรงแรมขนาดเล็ก"> โรงแรมขนาดเล็ก <br>
                                <input type="checkbox" name="property_type" value="โรงแรมขนาดกลาง"> โรงแรมขนาดกลาง <br>
                                <input type="checkbox" name="property_type" value="โรงแรมขนาดใหญ่"> โรงแรมขนาดใหญ่ <br>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="project_name" class="col-md-4 col-form-label text-md-right">{{ __('ชื่อโครงการ') }}</label>

                            <div class="col-md-6">
                                <input id="project_name" type="text" class="form-control" name="project_name" placeholder="Project Name">
                            <br>
                            <input type="checkbox"><span> ต้องการใบอนุญาตประกอบกิจการโรงแรม</span>

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
                            <label for="floor_num" class="col-md-4 col-form-label text-md-right">{{ __('ชั้นที่ต้องการ') }}</label>

                            <div class="col-md-6">
                                <input id="floor_num" type="number" class="form-control" name="floor_num" placeholder="Floor Number" min="1">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="bedroom_num" class="col-md-4 col-form-label text-md-right">{{ __('ห้องนอน') }}</label>

                            <div class="col-md-6">
                                <input id="bedroom_num" type="number" class="form-control" name="bedroom_num" placeholder="Bedroom Number" min="0">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="bathroom_num" class="col-md-4 col-form-label text-md-right">{{ __('ห้องน้ำ') }}</label>

                            <div class="col-md-6">
                                <input id="bathroom_num" type="number" class="form-control" name="bathroom_num" placeholder="Bathroom Number" min="0">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="kitchen_num" class="col-md-4 col-form-label text-md-right">{{ __('ห้องครัว') }}</label>

                            <div class="col-md-6">
                                <input id="kitchen_num" type="number" class="form-control" name="kitchen_num" placeholder="Kitchen Number" min="0">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="parking_num" class="col-md-4 col-form-label text-md-right">{{ __('ที่จอดรถ') }}</label>

                            <div class="col-md-6">
                                <input id="parking_num" type="number" class="form-control" name="parking_num" placeholder="Parking Number" min="0">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="livingroom_num" class="col-md-4 col-form-label text-md-right">{{ __('ห้องนั่งเล่น') }}</label>

                            <div class="col-md-6">
                                <input id="livingroom_num" type="number" class="form-control" name="livingroom_num" placeholder="Livingroom Number" min="0">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="furniture" class="col-md-4 col-form-label text-md-right">{{ __('เฟอร์นิเจอร์') }}</label>

                            <div class="col-md-6">
                                <input id="furniture" type="text" class="form-control" name="furniture" placeholder="Furniture">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="usable_area_min" class="col-md-4 col-form-label text-md-right">{{ __('พื้นที่ใช้สอย(ต่ำสุด)') }}</label>

                            <div class="col-md-6">
                                <input id="usable_area_min" type="text" class="form-control" name="usable_area_min" placeholder="Usable Area Min" >

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="usable_area_max" class="col-md-4 col-form-label text-md-right">{{ __('พื้นที่ใช้สอย(สูงสุด)') }}</label>

                            <div class="col-md-6">
                                <input id="usable_area_max" type="text" class="form-control" name="usable_area_max" placeholder="Usable Area Max">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="area_min" class="col-md-4 col-form-label text-md-right">{{ __('เนื้อที่(ต่ำสุด)') }}</label>

                            <div class="col-md-6">
                                <input id="area_min" type="text" class="form-control" name="area_min" placeholder="Area Min">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="area_max" class="col-md-4 col-form-label text-md-right">{{ __('เนื้อที่(สูงสุด)') }}</label>

                            <div class="col-md-6">
                                <input id="area_max" type="text" class="form-control" name="area_max" placeholder="Area Max">

                            </div>
                        </div>

                        <label for="property_type" class="col-md-4 col-form-label text-md-right" style="font-size:30px;">{{ __('ทำเลที่ตั้ง') }}</label>
                        <br><br><br>
                        <div class="form-group row">
                            <label for="alley" class="col-md-4 col-form-label text-md-right">{{ __('ซอย') }}</label>

                            <div class="col-md-6">
                                <input id="alley" type="text" class="form-control" name="alley" placeholder="Alley">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="road" class="col-md-4 col-form-label text-md-right">{{ __('ถนน') }}</label>

                            <div class="col-md-6">
                                <input id="road" type="text" class="form-control" name="road" placeholder="Road">

                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="province" class="col-md-4 col-form-label text-md-right">{{ __('') }}</label>

                            <!-- select form -->

                        <div class="col-md-6">
                            <div class="form-group">
                                <select class="province" name="province" id="province">
                                    <option value="">เลือกข้อมูลจังหวัดของท่าน</option>
                                    @foreach($list as $row)
                                        <option value="{{$row->id}}">{{$row->name_th}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="amphures" name="amphure">
                                    <option value="">เลือกข้อมูลอำเภอของท่าน</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="districts" name="district">
                                    <option value="">เลือกข้อมูลตำบลของท่าน</option>
                                </select>
                            </div>
                        </div>
                        {{csrf_field()}}
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

                        <label for="price" class="col-md-4 col-form-label text-md-right" style="font-size:30px;">{{ __('ราคา') }}</label>

                        <div class="form-group row">
                            <label for="price_range_min" class="col-md-4 col-form-label text-md-right">{{ __('ช่วงราคาที่ต้องการ(ต่ำสุด)') }}</label>

                            <div class="col-md-6">
                                <input id="price_range_min" type="text" class="form-control" name="price_range_min" placeholder="Price Range Min">

                            </div>
                        </div>  

                        <div class="form-group row">
                            <label for="price_range_max" class="col-md-4 col-form-label text-md-right">{{ __('ช่วงราคาที่ต้องการ(สูงสุด)') }}</label>

                            <div class="col-md-6">
                                <input id="price_range_max" type="text" class="form-control" name="price_range_max" placeholder="Price Range Max">

                            </div>
                        </div>

                        <p><span style="color: red;">*</span>คำแนะนำในการค้นหาอสังหาริมทรัพย์ที่ท่านต้องการ</p>
                        <p>ยิ่งละเอียดยิ่งดีต่อการค้นหา ประหยัดเวลาและได้อสังหาฯที่ตรงใจคุณ กรุณากรอกข้อมูลให้ครบถ้วนสมบูรณ์ เพื่อให้ระบบค้นหาได้ง่ายขึ้น</p>

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


<!-- ---------------------------------------------------------- End Hotel ---------------------------------------------------------- -->


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="Land">
                <div class="card-header">{{ __('Add Land') }}</div>

                <div class="card-body">

                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>    
                        <strong>{{ $message }}</strong>
                    </div>
                @endif

                @if ($message = Session::get('fail'))
                    <div class="alert alert-danger alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>    
                        <strong>{{ $message }}</strong>
                    </div>
                @endif

                    <form action="{{ route('buyer_prop.store') }}" method="POST">
                        @csrf

                        <input type="hidden" name="property" value="ที่ดิน">
                        <input type="hidden" name="post_allow" value="-">

                        <input type="hidden" name="project_name" value="-">
                        <input type="hidden" name="type" value=0>
                        <input type="hidden" name="floor_num" value=0>
                        <input type="hidden" name="bedroom_num" value=0>
                        <input type="hidden" name="bathroom_num" value=0>
                        <input type="hidden" name="kitchen_num" value=0>
                        <input type="hidden" name="parking_num" value=0>
                        <input type="hidden" name="livingroom_num" value=0>
                        <input type="hidden" name="furniture" value="-">
                        <input type="hidden" name="usable_area_min" value=0>
                        <input type="hidden" name="usable_area_max" value=0>

                        <p>แบบฟอร์มตั้งซื้อที่ดิน</p>

                        <label for="sell_type" class="col-md-4 col-form-label text-md-right" style="font-size:30px;">{{ __('ประกาศ') }}</label>

                        <div class="form-group row">
                            <div class="col-md-6">
                                    <input type="checkbox" name="sell_type" value="ขาย"> ขาย
                                    <input type="checkbox" name="sell_type" value="เช่า"> เช่า
                                    <input type="checkbox" name="sell_type" value="ขายเซ้ง"> ขายเซ้ง

                                </div>
                        </div>

                        <label for="property_type" class="col-md-4 col-form-label text-md-right" style="font-size:30px;">{{ __('ข้อมูลโครงการ') }}</label>

                        <div class="form-group row">
                            <label for="property_type" class="col-md-4 col-form-label text-md-right">{{ __('ประเภทอสังหาริมทรัพย์') }}</label>

                            <div class="col-md-6">
                                <input type="checkbox" name="property_type" value="ที่ดินเปล่า"> ที่ดินเปล่า
                                <input type="checkbox" name="property_type" value="ที่ดินพร้อมสิ่งปลูกสร้าง"> ที่ดินพร้อมสิ่งปลูกสร้าง

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="city_plan_color" class="col-md-4 col-form-label text-md-right">{{ __('สีของที่ดิน (ตามสีของผังเมือง)') }}</label>

                            <div class="col-md-6">
                                <select id="city_plan_color" type="text" class="form-control" name="city_plan_color" placeholder="City Plan Color">
                                    <option value="สีเหลือง">สีเหลือง</option>
                                    <option value="สีส้ม">สีส้ม</option>
                                    <option value="สีน้ำตาล">สีน้ำตาล</option>
                                    <option value="สีแดง">สีแดง</option>
                                    <option value="สีม่วง">สีม่วง</option>
                                    <option value="สีเม็ดมะปราง">สีเม็ดมะปราง</option>
                                    <option value="สีเขียว">สีเขียว</option>
                                    <option value="สีขาวมีกรอบและเส้นทแยงสีเขียว">สีขาวมีกรอบและเส้นทแยงสีเขียว</option>
                                    <option value="สีน้ำตาลอ่อน">สีน้ำตาลอ่อน</option>
                                    <option value="สีน้ำเงิน">สีน้ำเงิน</option>
                                </select>

                                <input type="checkbox"> ติดถนนใหญ่
                                <input type="checkbox" style="margin-left: 50px;"> ติดถนนซอย
                                <br>
                                <input type="checkbox"> ถนนกว้าง <span><input type="text" style="width: 100px;">เมตร</span>
                                <input type="checkbox"> ถมแล้ว
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="area_min" class="col-md-4 col-form-label text-md-right">{{ __('เนื้อที่ต่ำสุด (ตร.ว.)') }}</label>

                            <div class="col-md-6">
                                <input id="area_min" type="text" class="form-control" name="area_min" placeholder="Area Min">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="area_max" class="col-md-4 col-form-label text-md-right">{{ __('เนื้อที่สูงสุด (ตร.ว.)') }}</label>

                            <div class="col-md-6">
                                <input id="area_max" type="text" class="form-control" name="area_max" placeholder="Area Max">

                            </div>
                        </div>

                        <label for="property_type" class="col-md-4 col-form-label text-md-right" style="font-size:30px;">{{ __('ทำเลที่ตั้ง') }}</label>
                        <br><br><br>
                        <div class="form-group row">
                            <label for="alley" class="col-md-4 col-form-label text-md-right">{{ __('ซอย') }}</label>

                            <div class="col-md-6">
                                <input id="alley" type="text" class="form-control" name="alley" placeholder="Alley">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="road" class="col-md-4 col-form-label text-md-right">{{ __('ถนน') }}</label>

                            <div class="col-md-6">
                                <input id="road" type="text" class="form-control" name="road" placeholder="Road">

                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="province" class="col-md-4 col-form-label text-md-right">{{ __('') }}</label>

                            <!-- select form -->

                        <div class="col-md-6">
                            <div class="form-group">
                                <select class="province" name="province" id="province">
                                    <option value="">เลือกข้อมูลจังหวัดของท่าน</option>
                                    @foreach($list as $row)
                                        <option value="{{$row->id}}">{{$row->name_th}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="amphures" name="amphure">
                                    <option value="">เลือกข้อมูลอำเภอของท่าน</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="districts" name="district">
                                    <option value="">เลือกข้อมูลตำบลของท่าน</option>
                                </select>
                            </div>
                        </div>
                        {{csrf_field()}}
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

                        <label for="price" class="col-md-4 col-form-label text-md-right" style="font-size:30px;">{{ __('ราคา') }}</label>

                        <div class="form-group row">
                            <label for="price_range_min" class="col-md-4 col-form-label text-md-right">{{ __('ช่วงราคาที่ต้องการ(ต่ำสุด)') }}</label>

                            <div class="col-md-6">
                                <input id="price_range_min" type="text" class="form-control" name="price_range_min" placeholder="Price Range Min">

                            </div>
                        </div>  

                        <div class="form-group row">
                            <label for="price_range_max" class="col-md-4 col-form-label text-md-right">{{ __('ช่วงราคาที่ต้องการ(สูงสุด)') }}</label>

                            <div class="col-md-6">
                                <input id="price_range_max" type="text" class="form-control" name="price_range_max" placeholder="Price Range Max">

                            </div>
                        </div>

                        <p><span style="color: red;">*</span>คำแนะนำในการค้นหาอสังหาริมทรัพย์ที่ท่านต้องการ</p>
                        <p>ยิ่งละเอียดยิ่งดีต่อการค้นหา ประหยัดเวลาและได้อสังหาฯที่ตรงใจคุณ กรุณากรอกข้อมูลให้ครบถ้วนสมบูรณ์ เพื่อให้ระบบค้นหาได้ง่ายขึ้น</p>

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


<!-- ---------------------------------------------------------- End Land ---------------------------------------------------------- -->


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="Pre-Emption">
                <div class="card-header">{{ __('Pre-Emption') }}</div>

                <div class="card-body">

                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>    
                        <strong>{{ $message }}</strong>
                    </div>
                @endif

                @if ($message = Session::get('fail'))
                    <div class="alert alert-danger alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>    
                        <strong>{{ $message }}</strong>
                    </div>
                @endif

                    <form action="{{ route('buyer_prop.store') }}" method="POST">
                        @csrf

                        <input type="hidden" name="property" value="ใบจอง">
                        <input type="hidden" name="post_allow" value="-">

                        <input type="hidden" name="city_plan_color" value="-">

                        <p>แบบฟอร์มตั้งซื้อใบจอง</p>

                        <label for="sell_type" class="col-md-4 col-form-label text-md-right" style="font-size:30px;">{{ __('ประกาศ') }}</label>

                        <div class="form-group row">
                            <div class="col-md-6">
                                    <input type="checkbox" name="sell_type" value="ขาย"> ขาย
                                    <input type="checkbox" name="sell_type" value="เช่า"> เช่า
                                    <input type="checkbox" name="sell_type" value="ขายเซ้ง"> ขายเซ้ง

                                </div>
                        </div>

                        <label for="property_type" class="col-md-4 col-form-label text-md-right" style="font-size:30px;">{{ __('ข้อมูลโครงการ') }}</label>

                        <div class="form-group row">
                            <label for="property_type" class="col-md-4 col-form-label text-md-right">{{ __('ประเภทอสังหาริมทรัพย์') }}</label>

                            <div class="col-md-6">
                                <input type="checkbox" name="property_type" value="บ้าน"> บ้าน
                                <input type="checkbox" name="property_type" value="คอนโด"> คอนโด

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="project_name" class="col-md-4 col-form-label text-md-right">{{ __('ชื่อโครงการ') }}</label>

                            <div class="col-md-6">
                                <input id="project_name" type="text" class="form-control" name="project_name" placeholder="Project Name">

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
                            <label for="floor_num" class="col-md-4 col-form-label text-md-right">{{ __('ชั้น') }}</label>

                            <div class="col-md-6">
                                <input id="floor_num" type="number" class="form-control" name="floor_num" placeholder="Floor Number" min="1">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="bedroom_num" class="col-md-4 col-form-label text-md-right">{{ __('ห้องนอน') }}</label>

                            <div class="col-md-6">
                                <input id="bedroom_num" type="number" class="form-control" name="bedroom_num" placeholder="Bedroom Number" min="0">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="bathroom_num" class="col-md-4 col-form-label text-md-right">{{ __('ห้องน้ำ') }}</label>

                            <div class="col-md-6">
                                <input id="bathroom_num" type="number" class="form-control" name="bathroom_num" placeholder="Bathroom Number" min="0">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="kitchen_num" class="col-md-4 col-form-label text-md-right">{{ __('ห้องครัว') }}</label>

                            <div class="col-md-6">
                                <input id="kitchen_num" type="number" class="form-control" name="kitchen_num" placeholder="Kitchen Number" min="0">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="parking_num" class="col-md-4 col-form-label text-md-right">{{ __('ที่จอดรถ') }}</label>

                            <div class="col-md-6">
                                <input id="parking_num" type="number" class="form-control" name="parking_num" placeholder="Parking Number" min="0">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="livingroom_num" class="col-md-4 col-form-label text-md-right">{{ __('ห้องนั่งเล่น') }}</label>

                            <div class="col-md-6">
                                <input id="livingroom_num" type="number" class="form-control" name="livingroom_num" placeholder="Livingroom Number" min="0">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="furniture" class="col-md-4 col-form-label text-md-right">{{ __('เฟอร์นิเจอร์') }}</label>

                            <div class="col-md-6">
                                <input id="furniture" type="text" class="form-control" name="furniture" placeholder="Furniture">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="usable_area_min" class="col-md-4 col-form-label text-md-right">{{ __('พื้นที่ใช้สอย(ต่ำสุด)') }}</label>

                            <div class="col-md-6">
                                <input id="usable_area_min" type="text" class="form-control" name="usable_area_min" placeholder="Usable Area Min" >

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="usable_area_max" class="col-md-4 col-form-label text-md-right">{{ __('พื้นที่ใช้สอย(สูงสุด)') }}</label>

                            <div class="col-md-6">
                                <input id="usable_area_max" type="text" class="form-control" name="usable_area_max" placeholder="Usable Area Max">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="area_min" class="col-md-4 col-form-label text-md-right">{{ __('เนื้อที่(ต่ำสุด)') }}</label>

                            <div class="col-md-6">
                                <input id="area_min" type="text" class="form-control" name="area_min" placeholder="Area Min">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="area_max" class="col-md-4 col-form-label text-md-right">{{ __('เนื้อที่(สูงสุด)') }}</label>

                            <div class="col-md-6">
                                <input id="area_max" type="text" class="form-control" name="area_max" placeholder="Area Max">

                            </div>
                        </div>

                        <label for="property_type" class="col-md-4 col-form-label text-md-right" style="font-size:30px;">{{ __('ทำเลที่ตั้ง') }}</label>
                        <br><br><br>
                        <div class="form-group row">
                            <label for="alley" class="col-md-4 col-form-label text-md-right">{{ __('ซอย') }}</label>

                            <div class="col-md-6">
                                <input id="alley" type="text" class="form-control" name="alley" placeholder="Alley">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="road" class="col-md-4 col-form-label text-md-right">{{ __('ถนน') }}</label>

                            <div class="col-md-6">
                                <input id="road" type="text" class="form-control" name="road" placeholder="Road">

                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="province" class="col-md-4 col-form-label text-md-right">{{ __('') }}</label>

                            <!-- select form -->

                        <div class="col-md-6">
                            <div class="form-group">
                                <select class="province" name="province" id="province">
                                    <option value="">เลือกข้อมูลจังหวัดของท่าน</option>
                                    @foreach($list as $row)
                                        <option value="{{$row->id}}">{{$row->name_th}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="amphures" name="amphure">
                                    <option value="">เลือกข้อมูลอำเภอของท่าน</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="districts" name="district">
                                    <option value="">เลือกข้อมูลตำบลของท่าน</option>
                                </select>
                            </div>
                        </div>
                        {{csrf_field()}}
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

                        <label for="price" class="col-md-4 col-form-label text-md-right" style="font-size:30px;">{{ __('ราคา') }}</label>

                        <div class="form-group row">
                            <label for="price_range_min" class="col-md-4 col-form-label text-md-right">{{ __('ช่วงราคาที่ต้องการ(ต่ำสุด)') }}</label>

                            <div class="col-md-6">
                                <input id="price_range_min" type="text" class="form-control" name="price_range_min" placeholder="Price Range Min">

                            </div>
                        </div>  

                        <div class="form-group row">
                            <label for="price_range_max" class="col-md-4 col-form-label text-md-right">{{ __('ช่วงราคาที่ต้องการ(สูงสุด)') }}</label>

                            <div class="col-md-6">
                                <input id="price_range_max" type="text" class="form-control" name="price_range_max" placeholder="Price Range Max">

                            </div>
                        </div>

                        <p><span style="color: red;">*</span>คำแนะนำในการค้นหาอสังหาริมทรัพย์ที่ท่านต้องการ</p>
                        <p>ยิ่งละเอียดยิ่งดีต่อการค้นหา ประหยัดเวลาและได้อสังหาฯที่ตรงใจคุณ กรุณากรอกข้อมูลให้ครบถ้วนสมบูรณ์ เพื่อให้ระบบค้นหาได้ง่ายขึ้น</p>

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


<!-- ---------------------------------------------------------- End Pre-Emption ---------------------------------------------------------- -->


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="Resort">
                <div class="card-header">{{ __('Add Resort') }}</div>

                <div class="card-body">

                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>    
                        <strong>{{ $message }}</strong>
                    </div>
                @endif

                @if ($message = Session::get('fail'))
                    <div class="alert alert-danger alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>    
                        <strong>{{ $message }}</strong>
                    </div>
                @endif

                    <form action="{{ route('buyer_prop.store') }}" method="POST">
                        @csrf

                        <input type="hidden" name="property" value="รีสอร์ท">
                        <input type="hidden" name="post_allow" value="-">

                        <input type="hidden" name="city_plan_color" value="-">

                        <p>แบบฟอร์มตั้งซื้อรีสอร์ท</p>

                        <label for="sell_type" class="col-md-4 col-form-label text-md-right" style="font-size:30px;">{{ __('ประกาศ') }}</label>

                        <div class="form-group row">
                            <div class="col-md-6">
                                    <input type="checkbox" name="sell_type" value="ขาย"> ขาย
                                    <input type="checkbox" name="sell_type" value="เช่า"> เช่า
                                    <input type="checkbox" name="sell_type" value="ขายเซ้ง"> ขายเซ้ง

                                </div>
                        </div>

                        <label for="property_type" class="col-md-4 col-form-label text-md-right" style="font-size:30px;">{{ __('ข้อมูลโครงการ') }}</label>

                        <div class="form-group row">
                            <label for="property_type" class="col-md-4 col-form-label text-md-right">{{ __('ประเภทอสังหาริมทรัพย์') }}</label>

                            <div class="col-md-6">
                                <input type="checkbox" name="property_type" value="รีสอร์ทขนาดเล็ก"> รีสอร์ทขนาดเล็ก <br>
                                <input type="checkbox" name="property_type" value="รีสอร์ทขนาดกลาง"> รีสอร์ทขนาดกลาง <br>
                                <input type="checkbox" name="property_type" value="รีสอร์ทขนาดใหญ่"> รีสอร์ทขนาดใหญ่

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="project_name" class="col-md-4 col-form-label text-md-right">{{ __('ชื่อโครงการ') }}</label>

                            <div class="col-md-6">
                                <input id="project_name" type="text" class="form-control" name="project_name" placeholder="Project Name">
                            <br>
                            <input type="checkbox"><span> ต้องการใบอนุญาตประกอบกิจการรีสอร์ท</span>

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
                                <input id="floor_num" type="number" class="form-control" name="floor_num" placeholder="Floor Number" min="1">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="bedroom_num" class="col-md-4 col-form-label text-md-right">{{ __('ห้องนอน') }}</label>

                            <div class="col-md-6">
                                <input id="bedroom_num" type="number" class="form-control" name="bedroom_num" placeholder="Bedroom Number" min="0">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="bathroom_num" class="col-md-4 col-form-label text-md-right">{{ __('ห้องน้ำ') }}</label>

                            <div class="col-md-6">
                                <input id="bathroom_num" type="number" class="form-control" name="bathroom_num" placeholder="Bathroom Number" min="0">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="kitchen_num" class="col-md-4 col-form-label text-md-right">{{ __('ห้องครัว') }}</label>

                            <div class="col-md-6">
                                <input id="kitchen_num" type="number" class="form-control" name="kitchen_num" placeholder="Kitchen Number" min="0">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="parking_num" class="col-md-4 col-form-label text-md-right">{{ __('ที่จอดรถ') }}</label>

                            <div class="col-md-6">
                                <input id="parking_num" type="number" class="form-control" name="parking_num" placeholder="Parking Number" min="0">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="livingroom_num" class="col-md-4 col-form-label text-md-right">{{ __('ห้องนั่งเล่น') }}</label>

                            <div class="col-md-6">
                                <input id="livingroom_num" type="number" class="form-control" name="livingroom_num" placeholder="Livingroom Number" min="0">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="furniture" class="col-md-4 col-form-label text-md-right">{{ __('เฟอร์นิเจอร์') }}</label>

                            <div class="col-md-6">
                                <input id="furniture" type="text" class="form-control" name="furniture" placeholder="Furniture">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="usable_area_min" class="col-md-4 col-form-label text-md-right">{{ __('พื้นที่ใช้สอย(ต่ำสุด)') }}</label>

                            <div class="col-md-6">
                                <input id="usable_area_min" type="text" class="form-control" name="usable_area_min" placeholder="Usable Area Min" >

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="usable_area_max" class="col-md-4 col-form-label text-md-right">{{ __('พื้นที่ใช้สอย(สูงสุด)') }}</label>

                            <div class="col-md-6">
                                <input id="usable_area_max" type="text" class="form-control" name="usable_area_max" placeholder="Usable Area Max">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="area_min" class="col-md-4 col-form-label text-md-right">{{ __('เนื้อที่(ต่ำสุด)') }}</label>

                            <div class="col-md-6">
                                <input id="area_min" type="text" class="form-control" name="area_min" placeholder="Area Min">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="area_max" class="col-md-4 col-form-label text-md-right">{{ __('เนื้อที่(สูงสุด)') }}</label>

                            <div class="col-md-6">
                                <input id="area_max" type="text" class="form-control" name="area_max" placeholder="Area Max">

                            </div>
                        </div>

                        <label for="property_type" class="col-md-4 col-form-label text-md-right" style="font-size:30px;">{{ __('ทำเลที่ตั้ง') }}</label>
                        <br><br><br>
                        <div class="form-group row">
                            <label for="alley" class="col-md-4 col-form-label text-md-right">{{ __('ซอย') }}</label>

                            <div class="col-md-6">
                                <input id="alley" type="text" class="form-control" name="alley" placeholder="Alley">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="road" class="col-md-4 col-form-label text-md-right">{{ __('ถนน') }}</label>

                            <div class="col-md-6">
                                <input id="road" type="text" class="form-control" name="road" placeholder="Road">

                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="province" class="col-md-4 col-form-label text-md-right">{{ __('') }}</label>

                            <!-- select form -->

                        <div class="col-md-6">
                            <div class="form-group">
                                <select class="province" name="province" id="province">
                                    <option value="">เลือกข้อมูลจังหวัดของท่าน</option>
                                    @foreach($list as $row)
                                        <option value="{{$row->id}}">{{$row->name_th}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="amphures" name="amphure">
                                    <option value="">เลือกข้อมูลอำเภอของท่าน</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="districts" name="district">
                                    <option value="">เลือกข้อมูลตำบลของท่าน</option>
                                </select>
                            </div>
                        </div>
                        {{csrf_field()}}
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

                        <label for="price" class="col-md-4 col-form-label text-md-right" style="font-size:30px;">{{ __('ราคา') }}</label>

                        <div class="form-group row">
                            <label for="price_range_min" class="col-md-4 col-form-label text-md-right">{{ __('ช่วงราคาที่ต้องการ(ต่ำสุด)') }}</label>

                            <div class="col-md-6">
                                <input id="price_range_min" type="text" class="form-control" name="price_range_min" placeholder="Price Range Min">

                            </div>
                        </div>  

                        <div class="form-group row">
                            <label for="price_range_max" class="col-md-4 col-form-label text-md-right">{{ __('ช่วงราคาที่ต้องการ(สูงสุด)') }}</label>

                            <div class="col-md-6">
                                <input id="price_range_max" type="text" class="form-control" name="price_range_max" placeholder="Price Range Max">

                            </div>
                        </div>

                        <p><span style="color: red;">*</span>คำแนะนำในการค้นหาอสังหาริมทรัพย์ที่ท่านต้องการ</p>
                        <p>ยิ่งละเอียดยิ่งดีต่อการค้นหา ประหยัดเวลาและได้อสังหาฯที่ตรงใจคุณ กรุณากรอกข้อมูลให้ครบถ้วนสมบูรณ์ เพื่อให้ระบบค้นหาได้ง่ายขึ้น</p>

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


<!-- ---------------------------------------------------------- End Resort ---------------------------------------------------------- -->


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="Warehouse">
                <div class="card-header">{{ __('Add Warehouse') }}</div>

                <div class="card-body">

                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>    
                        <strong>{{ $message }}</strong>
                    </div>
                @endif

                @if ($message = Session::get('fail'))
                    <div class="alert alert-danger alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>    
                        <strong>{{ $message }}</strong>
                    </div>
                @endif

                    <form action="{{ route('buyer_prop.store') }}" method="POST">
                        @csrf

                        <input type="hidden" name="property" value="โกดัง/โรงงาน">
                        <input type="hidden" name="post_allow" value="-">

                        <input type="hidden" name="project_name" value="-">
                        <input type="hidden" name="city_plan_color" value="-">
                        <input type="hidden" name="type" value="-">
                        <input type="hidden" name="floor_num" value=0>
                        <input type="hidden" name="bedroom_num" value=0>
                        <input type="hidden" name="bathroom_num" value=0>
                        <input type="hidden" name="kitchen_num" value=0>
                        <input type="hidden" name="parking_num" value=0>
                        <input type="hidden" name="livingroom_num" value=0>
                        <input type="hidden" name="furniture" value="-">
                        <input type="hidden" name="usable_area_min" value=0>
                        <input type="hidden" name="usable_area_max" value=0>

                        <p>แบบฟอร์มตั้งซื้อโกดัง/โรงงาน</p>

                        <label for="sell_type" class="col-md-4 col-form-label text-md-right" style="font-size:30px;">{{ __('ประกาศ') }}</label>

                        <div class="form-group row">
                            <div class="col-md-6">
                                    <input type="checkbox" name="sell_type" value="ขาย"> ขาย
                                    <input type="checkbox" name="sell_type" value="เช่า"> เช่า
                                    <input type="checkbox" name="sell_type" value="ขายเซ้ง"> ขายเซ้ง

                                </div>
                        </div>

                        <label for="property_type" class="col-md-4 col-form-label text-md-right" style="font-size:30px;">{{ __('ข้อมูลโครงการ') }}</label>

                        <div class="form-group row">
                            <label for="property_type" class="col-md-4 col-form-label text-md-right">{{ __('ประเภทอสังหาริมทรัพย์') }}</label>

                            <div class="col-md-6">
                                <input type="checkbox" name="property_type" value="โกดัง"> โกดัง
                                <input type="checkbox" name="property_type" value="โรงงาน"> โรงงาน
                                <br>

                            </div>
                            
                        </div>

                        <div class="form-group row">
                            <label for="project_name" class="col-md-4 col-form-label text-md-right"></label>

                            <div class="col-md-6">
                                
                                <input type="checkbox"> ถนนทางเข้ากว้าง <span><input type="text" style="width: 80px;"> เมตร</span><br>
                                <input type="checkbox"><span> ต้องการใบอนุญาตประกอบกิจการโรงงาน</span><br>
                                <input type="checkbox"><span> ต้องการซื้อ / เช่า / เซ้ง พร้อมเครื่องจักร</span>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="area_min" class="col-md-4 col-form-label text-md-right">{{ __('เนื้อที่(ต่ำสุด)') }}</label>

                            <div class="col-md-6">
                                <input id="area_min" type="text" class="form-control" name="area_min" placeholder="Area Min">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="area_max" class="col-md-4 col-form-label text-md-right">{{ __('เนื้อที่(สูงสุด)') }}</label>

                            <div class="col-md-6">
                                <input id="area_max" type="text" class="form-control" name="area_max" placeholder="Area Max">

                            </div>
                        </div>

                        <label for="property_type" class="col-md-4 col-form-label text-md-right" style="font-size:30px;">{{ __('ทำเลที่ตั้ง') }}</label>
                        <br><br><br>
                        <div class="form-group row">
                            <label for="alley" class="col-md-4 col-form-label text-md-right">{{ __('ซอย') }}</label>

                            <div class="col-md-6">
                                <input id="alley" type="text" class="form-control" name="alley" placeholder="Alley">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="road" class="col-md-4 col-form-label text-md-right">{{ __('ถนน') }}</label>

                            <div class="col-md-6">
                                <input id="road" type="text" class="form-control" name="road" placeholder="Road">

                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="province" class="col-md-4 col-form-label text-md-right">{{ __('') }}</label>

                            <!-- select form -->

                        <div class="col-md-6">
                            <div class="form-group">
                                <select class="province" name="province" id="province">
                                    <option value="">เลือกข้อมูลจังหวัดของท่าน</option>
                                    @foreach($list as $row)
                                        <option value="{{$row->id}}">{{$row->name_th}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="amphures" name="amphure">
                                    <option value="">เลือกข้อมูลอำเภอของท่าน</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="districts" name="district">
                                    <option value="">เลือกข้อมูลตำบลของท่าน</option>
                                </select>
                            </div>
                        </div>
                        {{csrf_field()}}
                        </div>


                        <div class="form-group row">
                            <label for="nearby_place" class="col-md-4 col-form-label text-md-right">{{ __('สถานที่ใกล้เคียง') }}</label>

                            <div class="col-md-6">
                                <input name="nearby_place" type="checkbox" value="ถนนใหญ่"> ถนนใหญ่
                                <input name="nearby_place" type="checkbox" value="ถนนซอย"> ถนนซอย
                                <input name="nearby_place" type="checkbox" value="ขนส่ง"> ขนส่ง
                                <input name="nearby_place" type="checkbox" value="โรงพยาบาล"> โรงพยาบาล
                                <input name="nearby_place" type="checkbox" value="สนามบิน"> สนามบิน
                                <input name="nearby_place" type="checkbox" value="ทางด่วน"> ทางด่วน

                            </div>
                        </div>

                        <label for="price" class="col-md-4 col-form-label text-md-right" style="font-size:30px;">{{ __('ราคา') }}</label>

                        <div class="form-group row">
                            <label for="price_range_min" class="col-md-4 col-form-label text-md-right">{{ __('ช่วงราคาที่ต้องการ(ต่ำสุด)') }}</label>

                            <div class="col-md-6">
                                <input id="price_range_min" type="text" class="form-control" name="price_range_min" placeholder="Price Range Min">

                            </div>
                        </div>  

                        <div class="form-group row">
                            <label for="price_range_max" class="col-md-4 col-form-label text-md-right">{{ __('ช่วงราคาที่ต้องการ(สูงสุด)') }}</label>

                            <div class="col-md-6">
                                <input id="price_range_max" type="text" class="form-control" name="price_range_max" placeholder="Price Range Max">

                            </div>
                        </div>

                        <p><span style="color: red;">*</span>คำแนะนำในการค้นหาอสังหาริมทรัพย์ที่ท่านต้องการ</p>
                        <p>ยิ่งละเอียดยิ่งดีต่อการค้นหา ประหยัดเวลาและได้อสังหาฯที่ตรงใจคุณ กรุณากรอกข้อมูลให้ครบถ้วนสมบูรณ์ เพื่อให้ระบบค้นหาได้ง่ายขึ้น</p>

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


<!-- ---------------------------------------------------------- End Warehouse ---------------------------------------------------------- -->


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
