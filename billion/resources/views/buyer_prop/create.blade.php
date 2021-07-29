@extends('layouts.app')

@section('content')

<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!--   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
    
  

<div class="container-fluid faded">
    
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
    $(".Dormitory").hide();
    $(".Office").hide();
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
    $(".Dormitory").hide();
    $(".Office").hide();
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
    $(".Dormitory").hide();
    $(".Office").hide();
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
    $(".Dormitory").hide();
    $(".Office").hide();
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
    $(".Dormitory").hide();
    $(".Office").hide();
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
    $(".Dormitory").hide();
    $(".Office").hide();
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
    $(".Dormitory").hide();
    $(".Office").hide();
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
    $(".Dormitory").hide();
    $(".Office").hide();
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
    $(".Dormitory").hide();
    $(".Office").hide();
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
    $(".Dormitory").hide();
    $(".Office").hide();
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
    $(".Dormitory").hide();
    $(".Office").hide();
  });
  $("#Dormitory").click(function(){
    $(".Dormitory").show("slow");
    $(".House").hide();
    $(".Commercial-Building").hide();
    $(".Apartment").hide();
    $(".Condo").hide();
    $(".Down").hide();
    $(".Hotel").hide();
    $(".Land").hide();
    $(".Pre-Emption").hide();
    $(".Resort").hide();
    $(".Warehouse").hide();
    $(".Office").hide();
  });
  $("#Office").click(function(){
    $(".Office").show("slow");
    $(".House").hide();
    $(".Commercial-Building").hide();
    $(".Apartment").hide();
    $(".Condo").hide();
    $(".Down").hide();
    $(".Hotel").hide();
    $(".Land").hide();
    $(".Pre-Emption").hide();
    $(".Resort").hide();
    $(".Dormitory").hide();
    $(".Warehouse").hide();
  });

    });

</script>

    <div class="row justify-content-center pt-0 m-0 ">
        <div class="col-2 d-none d-md-block p-0"></div>
        <div class="col-12 col-lg-7 text-center my-0 p-0">
            <h2 class="my-0">ลงประกาศค้นหาทรัพย์</h2>
        </div>
    </div>
    <div class="d-none d-md-block">
        <div class="row justify-content-center pt-0 m-0 ">
            <div class="col-2 p-0"></div>
            <div class="col-12 col-lg-7 p-0">
                <div class="row pt-0">
                    <div class="col-2 text-center">
                        <img src="<?php echo asset('img/progress_circle.svg'); ?>" class="rounded-circle" width="60x" height="60px" alt="..." style="object-fit:cover">
                    </div>
                    <div class="col-9 text-right">
                        <p>ความสมบูรณ์ของข้อมูล</p>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-md-none">
        <div class="row">
            <div class="col-8 justify-content-center">
            </div>
        </div>
    </div>
    <div class="row justify-content-center m-0">
        <div class="d-none d-lg-block">  
            <div class="btn-group-vertical">
                <input class="stv-radio-button" type="radio" name="radioButtonTest" id="House" onclick="loadDoc()" checked />
                <label for="House" class="col-10 text-center btn_list_font">House</label>
                <input class="stv-radio-button" type="radio" name="radioButtonTest" id="Apartment"/>
                <label for="Apartment" class="col-10 text-center btn_list_font">Apartment</label>
                <input class="stv-radio-button" type="radio" name="radioButtonTest" id="Commercial-Building" />
                <label for="Commercial-Building" class="col-10 text-center btn_list_font">Commercial Building</label>
                <input class="stv-radio-button" type="radio" name="radioButtonTest" id="Condo"/>
                <label for="Condo" class="col-10 text-center btn_list_font">Condo</label>
                <input class="stv-radio-button" type="radio" name="radioButtonTest" id="Down"/>
                <label for="Down" class="col-10 text-center btn_list_font">Down</label>
                <input class="stv-radio-button" type="radio" name="radioButtonTest" id="Hotel"/>
                <label for="Hotel" class="col-10 text-center btn_list_font">Hotel</label>
                <input class="stv-radio-button" type="radio" name="radioButtonTest" id="Land"/>
                <label for="Land" class="col-10 text-center btn_list_font">Land</label>
                <input class="stv-radio-button" type="radio" name="radioButtonTest" id="Pre-Emption"/>
                <label for="Pre-Emption" class="col-10 text-center btn_list_font">Pre-Emption</label>
                <input class="stv-radio-button" type="radio" name="radioButtonTest" id="Resort"/>
                <label for="Resort" class="col-10 text-center btn_list_font">Resort</label>
                <input class="stv-radio-button" type="radio" name="radioButtonTest" id="Warehouse"/>
                <label for="Warehouse" class="col-10 text-center btn_list_font">Warehouse</label>
                <input class="stv-radio-button" type="radio" name="radioButtonTest" id="Dormitory"/>
                <label for="Dormitory" class="col-10 text-center btn_list_font">Dormitory</label>
                <input class="stv-radio-button" type="radio" name="radioButtonTest" id="Office"/>
                <label for="Office" class="col-10 text-center btn_list_font">Office</label>
            </div>
        </div>
        <div class="col-12 col-lg-7">
            <div class="d-inline">
                <div class="House">
                    
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
                        <input type="hidden" name="area_type" value="-">
                        <input type="hidden" name="business_license" value="-">
                        <input type="hidden" name="buy_with_machine" value="-">

                        <div class="card card_border mb-4 pr-3">
                            <div class="card-header card_green1 text-center py-2" style="width: 140px;border-top-left-radius: 1.5rem;">
                                <label for="sell_type" class="text-center m-0 p-0">
                                        <h4 class="m-0 py-1" style="font-weight: bold;">ประกาศ</h4>
                                </label>
                            </div>
                            <div class="form-group">
                                <div class="row px-0 mx-0">
                                    <div class="col-4 text-lg-right text-center px-0">
                                        <input type="checkbox" class="btn-check" style="display:none;" id="btn-check-ขายบ้าน" autocomplete="off" name="sell_type" value="ขาย">
                                        <label class="btn btn_custom rounded-pill p-0 m-0 text-center" style="width: 5.5rem; font-size: 1.3rem;" for="btn-check-ขายบ้าน">ขาย</label>
                                    </div>
                                    <div class="col-4 text-center px-0">
                                        <input type="checkbox" class="btn-check" style="display: none;" id="btn-check-เช่าบ้าน" autocomplete="off" name="sell_type" value="เช่า">
                                        <label class="btn btn_custom rounded-pill p-0 m-0 text-center" style="width: 5.5rem; font-size: 1.3rem;" for="btn-check-เช่าบ้าน">เช่า</label>
                                    </div>
                                    <div class="col-4 text-lg-left text-center px-0">
                                        <input type="checkbox" class="btn-check" style="display:none;" id="btn-check-ขายเซ้ง" autocomplete="off" name="sell_type" value="ขายเซ้ง">
                                        <label class="btn btn_custom rounded-pill p-0 m-0 text-center" style="width: 5.5rem; font-size: 1.3rem;" for="btn-check-ขายเซ้ง">ขายเช่า</label>
                                    </div>  
                                </div>
                                <!-- @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror -->
                            </div>
                        </div>
                        <input type="hidden" name="city_plan_color" value="-">
                        <!--ooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooo-->
                        <div class="card card_border mb-4 pr-1 pr-md-2">
                            <div class="card-header card_green1 text-center py-2" style="width: 140px;border-top-left-radius: 1.5rem;">
                                <label for="property_type" class="text-center m-0 p-0">
                                        <h4 class="m-0 py-1" style="font-weight: bold;">ข้อมูลโครงการ</h4>
                                </label>
                            </div>
                            

                            <div class="form-group row margin-padding-form" >
                                <div class="col-lg-1"></div>
                                <div class="col row">
                                    <label for="property_type" class="col-12 m-0 p-0 my-2 topic_style">
                                        ประเภทอสังหาริมทรัพย์
                                    </label>
                                    <div class="col-12 col-md form-check form-check-inline">
                                        <input class="form-check-input m-2" type="radio" name="property_type" value="บ้านเดี่ยว">
                                        <label class="form-check-label m-2 content_style" for="property_type">บ้านเดี่ยว</label>
                                    </div>
                                    <div class="col-12 col-md form-check form-check-inline">
                                        <input class="form-check-input m-2" type="radio" name="property_type" value="บ้านแฝด">
                                        <label class="form-check-label m-2 content_style" for="property_type">บ้านแฝด</label>
                                    </div>
                                    <div class="col-12 col-md form-check form-check-inline">
                                        <input class="form-check-input m-2" type="radio" name="property_type" value="ทาวน์เฮาส์/ทาวน์โฮม">
                                        <label class="form-check-label m-2 content_style" for="property_type">ทาวน์เฮาส์/ทาวน์โฮม</label>
                                    </div>
                                    <div class="col-lg-1"></div>
                                </div>
                            </div>
                            <div class="form-group row margin-padding-form">
                                <div class="col-lg-1"></div>
                                <div class="col row">
                                    <label for="project_name" class="col-12 m-0 p-0 topic_style">
                                        ชื่อโครงการ
                                    </label>
                                    <div class="col-11 pr-md-3 mt-2 p-0 ">
                                    <input id="project_name" type="text" class="form-control rounded-pill" name="project_name" placeholder="Project Name">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row margin-padding-form">
                                <div class="col-lg-1"></div>
                                <div class="col row margin-padding-form">
                                    <label for="type" class="col-12 m-0 p-0 topic_style">
                                        ประเภท
                                    </label>
                                    <div class="col-12 col-md form-check form-check-inline">
                                        <input class="form-check-input m-2" type="radio" name="type" value="มือ 1">
                                        <label class="form-check-label m-2 content_style" for="type">มือ 1</label>
                                    </div>
                                    <div class="col-12 col-md form-check form-check-inline">
                                        <input class="form-check-input m-2" type="radio" name="type" value="มือ 2">
                                        <label class="form-check-label m-2 content_style" for="type">มือ 2</label>
                                    </div>
                                    <div class="col-12 col-md form-check form-check-inline"></div>
                                    <div class="col-lg-1"></div>
                                </div>
                            </div>
                            <div class="form-group row margin-padding-form">
                                <div class="col-lg-1"></div>
                                <div class="col row margin-padding-form">
                                    <div class="col-11 col-md form-check mr-3 p-0">
                                        <label for="floor_num" class="sub_style">
                                            จำนวนชั้น
                                        </label>
                                        <input id="floor_num" type="number" class="form-control rounded-pill" name="floor_num" placeholder="Floor Number" min="1">
                                        <br/>
                                        <label for="kitchen_num"class="sub_style">
                                            ห้องครัว
                                        </label>
                                        <input id="kitchen_num" type="number" class="form-control rounded-pill" name="kitchen_num" placeholder="Kitchen Number" min="0">
                                    </div>
                                    <div class="col-11 col-md form-check mr-3 p-0">
                                        <label for="bedroom_num"class="sub_style">
                                            ห้องนอน
                                        </label>
                                        <input id="bedroom_num" type="number" class="form-control rounded-pill" name="bedroom_num" placeholder="Bedroom Number" min="0">
                                        <br/>
                                        <label for="parking_num"class="sub_style">
                                            ที่จอดรถ
                                        </label>
                                        <input id="parking_num" type="number" class="form-control rounded-pill" name="parking_num" placeholder="Parking Number" min="0">
                                    </div>
                                    <div class="col-11 col-md form-check mr-3 p-0">
                                        <label for="bathroom_num"class="sub_style">
                                            ห้องน้ำ
                                        </label>
                                        <input id="bathroom_num" type="number" class="form-control rounded-pill" name="bathroom_num" placeholder="Bathroom Number" min="0">
                                        <br/>
                                        <label for="livingroom_num"class="sub_style">
                                            ห้องนั่งเล่น
                                        </label>
                                        <input id="livingroom_num" type="number" class="form-control rounded-pill" name="livingroom_num" placeholder="Livingroom Number" min="0">
                                    </div>
                                </div>
                                <div class="col-md-1"></div>
                            </div>
                            <div class="form-group row margin-padding-form">
                                <div class="col-lg-1 pt-0"></div>
                                <div class="col row pt-0">
                                    <label for="furniture" class="col-12 m-0 p-0 topic_style">
                                        เฟอร์นิเจอร์
                                    </label>
                                    <div class="col-11 pr-md-3 mt-2 p-0 ">
                                    <input id="furniture" type="text" class="form-control rounded-pill" name="furniture" placeholder="Furniture">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row margin-padding-form">
                                <div class="col-lg-1"></div>
                                <div class="col row margin-padding-form">
                                    <label for="type" class="col-12 m-0 p-0 topic_style">
                                        พื้นที่ใช้สอย(ตร.ม.)
                                    </label>
                                    
                                    <div class="col-11 col-md-5 form-check mr-3 m-0 p-0">
                                        <label for="usable_area_min" class="sub_style">
                                            พื้นที่ใช้สอย(ต่ำสุด)
                                        </label>
                                        <input id="usable_area_min" type="text" class="form-control rounded-pill" name="usable_area_min" placeholder="Usable Area Min" >
                                    </div>
                                    <div class="col-11 col-md-5 form-check m-0 p-0">
                                        <label for="usable_area_max" class="sub_style">
                                            พื้นที่ใช้สอย(สูงสุด)
                                        </label>
                                        <input id="usable_area_max" type="text" class="form-control rounded-pill" name="usable_area_max" placeholder="Usable Area Max">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row margin-padding-form">
                                <div class="col-lg-1"></div>
                                <div class="col row margin-padding-form">
                                    <label for="type" class="col-12 m-0 p-0 topic_style">
                                        เนื้อที่(ตร.วา)
                                    </label>
                                    <div class="col-11 col-md-5 form-check mr-3 m-0 p-0">
                                        <label for="area_min" class="sub_style">
                                            เนื้อที่(ต่ำสุด)
                                        </label>
                                        <input id="area_min" type="text" class="form-control rounded-pill" name="area_min" placeholder="Area Min">
                                    </div>
                                    <div class="col-11 col-md-5 form-check m-0 p-0">
                                        <label for="area_max" class="sub_style">
                                            เนื้อที่(สูงสุด)
                                        </label>
                                        <input id="area_max" type="text" class="form-control rounded-pill" name="area_max" placeholder="Area Max">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card card_border mb-4 pr-1 pr-md-2">
                            <div class="card-header card_green1 text-center py-2" style="width: 140px;border-top-left-radius: 1.5rem;">
                                <label for="property_type" class="text-center m-0 p-0">
                                        <h4 class="m-0 py-1" style="font-weight: bold;">ทำเลที่ตั้ง</h4>
                                </label>
                            </div>
                            <div class="form-group row margin-padding-form">
                                <div class="col-lg-1"></div>
                                <div class="col row margin-padding-form">
                                    <div class="col-11 col-md-5 form-check mr-3 m-0 p-0">
                                        <label class="sub_style" for="alley">
                                            ซอย
                                        </label>
                                        <input id="alley" type="text" class="form-control rounded-pill mb-3" name="alley" placeholder="Alley">
                                    </div>
                                    <div class="col-11 col-md-5 form-check mr-3 m-0 p-0">
                                        <label class="sub_style" for="road" >
                                            ถนน
                                        </label>
                                        <input id="road" type="text" class="form-control rounded-pill mb-3" name="road" placeholder="Road">
                                    </div>
                                    
                                    <select class="province rounded-pill col-11 col-md-5 form-check mr-3 m-0 p-0 form-select-lg mb-3" style="height:2.5rem;" name="province" id="province">
                                        <option value="">เลือกข้อมูลจังหวัดของท่าน</option>
                                        @foreach($list as $row)
                                            <option value="{{$row->id}}">{{$row->name_th}}</option>
                                        @endforeach
                                    </select>
                                    <select class="amphures rounded-pill col-11 col-md-5 form-check mr-3 m-0 p-0 form-select-lg mb-3" style="height:2.5rem;" name="district">
                                        <option value="">เลือกข้อมูลอำเภอของท่าน</option>
                                    </select>
                                    <select class="districts rounded-pill col-11 col-md-5 form-check mr-3 m-0 p-0 form-select-lg mb-0" style="height:2.5rem;" name="sub_district">
                                        <option value="">เลือกข้อมูลตำบลของท่าน</option>
                                    </select>
                                    <div class="col-lg-1"></div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-1"></div>
                                <div class="col m-0 p-0">
                                    <label class="topic_style" for="nearby_place">
                                        สถานที่ใกล้เคียง
                                    </label>
                                    <div class="row pt-0 justify-content-center">
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place" type="checkbox" value="supermarket">
                                            <label class="form-check-label ml-2 p-0 content_style" for="nearby_place">Supermarket</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place" type="checkbox" value="ห้างสรรพสินค้า">
                                            <label class="form-check-label ml-2 p-0 content_style" for="nearby_place">ห้างสรรพสินค้า</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place" type="checkbox" value="BTS"> 
                                            <label class="form-check-label ml-2 p-0 content_style" for="nearby_place">BTS</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place" type="checkbox" value="MRT"> 
                                            <label class="form-check-label ml-2 p-0 content_style" for="nearby_place">MRT</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place" type="checkbox" value="Airport Link">
                                            <label class="form-check-label ml-2 p-0 content_style" for="nearby_place">Airport Link</label>
                                        </div>
                                    </div>
                                    <div class="row pt-0 justify-content-center">
                                        <div class="col-12 col-md form-check-inline justify-content-center-xs">
                                        <input name="nearby_place" type="checkbox" value="โรงพยาบาล"> 
                                            <label class="form-check-label ml-2 content_style" for="nearby_place">โรงพยาบาล</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place" type="checkbox" value="สนามบิน"> 
                                            <label class="form-check-label ml-2 content_style" for="nearby_place">สนามบิน</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place" type="checkbox" value="ทางด่วน"> 
                                            <label class="form-check-label ml-2 content_style" for="nearby_place">ทางด่วน</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                        <input name="nearby_place" type="checkbox" value="โรงเรียน"> 
                                            <label class="form-check-label ml-2 content_style" for="nearby_place">โรงเรียน</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place" type="checkbox" value="มหาวิทยาลัย"> 
                                            <label class="form-check-label ml-2 content_style" for="nearby_place">มหาวิทยาลัย</label>
                                        </div>
                                    </div>      
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            {{csrf_field()}}
                        </div>

                        <div class="card card_border mb-4 pr-1 pr-md-2">
                            <div class="card-header card_green1 text-center py-2" style="width: 140px;border-top-left-radius: 1.5rem;">
                                <label for="price" class="text-center m-0 p-0">
                                        <h4 class="m-0 py-1" style="font-weight: bold;">ราคา</h4>
                                </label>
                            </div>
                            <div class="form-group row margin-padding-form mt-3">
                                <div class="col-lg-1"></div>
                                <div class="col row margin-padding-form">
                                    <label for="type" class="col-12 m-0 p-0 topic_style">
                                        ช่วงราคาที่ต้องการ (บาท)
                                    </label>
                                    
                                    <div class="col-11 col-md-5 form-check mr-3 m-0 p-0">
                                        <label for="price_range_min" class="sub_style">
                                            ช่วงราคาที่ต้องการ(ต่ำสุด)
                                        </label>
                                        <input id="price_range_min" type="text" class="form-control rounded-pill" name="price_range_min" placeholder="Price Range Min">
                                    </div>
                                    <div class="col-11 col-md-5 form-check m-0 p-0">
                                        <label for="price_range_max" class="sub_style">
                                            ช่วงราคาที่ต้องการ(สูงสุด)
                                        </label>
                                        <input id="price_range_max" type="text" class="form-control rounded-pill" name="price_range_max" placeholder="Price Range Max">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row m-0 p-0">
                            <div class="col-1">
                                <img src="<?php echo asset('img/bulb-icon.svg'); ?>" class="rounded text-center" width="30x" height="30px" alt="..." style="object-fit:cover;">
                            </div>
                            <div class="col">
                                <p class="m-0 p-0" style="font-size: 1.1rem;"><span style="color: red;">*</span>คำแนะนำในการค้นหาอสังหาริมทรัพย์ที่ท่านต้องการ</p>
                                <p style="font-size: 0.9rem;">ยิ่งละเอียดยิ่งดีต่อการค้นหา ประหยัดเวลาและได้อสังหาฯที่ตรงใจคุณ กรุณากรอกข้อมูลให้ครบถ้วนสมบูรณ์ เพื่อให้ระบบค้นหาได้ง่ายขึ้น</p>
                            </div>
                        </div>

                        <div class="form-group row p-0 m-0 d-flex">
                            <div class="col align-items-end p-0 m-0">
                                <input class="m-1" name="agent_welcome" type="checkbox" value="ใช่">
                                ยินดีรับเอเจ้นท์
                            </div>
                            <div class="col text-center p-0 m-0">
                                <button type="submit" class="col-12 btn button_list">
                                    Submit
                                </button>
                            </div>
                            <div class="col"></div>
                        </div>
                    </form>
                </div>
            </div>



<!-- ---------------------------------------------------------- End House ---------------------------------------------------------- -->


            <div class="d-inline">
                อพาร์ทเม้นท์
                <div class="Apartment">
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
                        <input type="hidden" name="city_plan_color" value="-">
                        <input type="hidden" name="area_type" value="-">
                        <input type="hidden" name="business_license" value="-">
                        <input type="hidden" name="buyer_with_machine" value="-">
                        <input type="hidden" name="buy_with_machine" value="-">

                        <div class="card card_border mb-4 pr-3">
                            <div class="card-header card_green1 text-center py-2" style="width: 140px;border-top-left-radius: 1.5rem;">
                                <label for="sell_type" class="text-center m-0 p-0">
                                        <h4 class="m-0 py-1" style="font-weight: bold;">ประกาศ</h4>
                                </label>
                            </div>
                            <div class="form-group">
                                <div class="row px-0 mx-0">
                                    <div class="col-4 text-lg-right text-center px-0">
                                        <input type="checkbox" class="btn-check" style="display:none;" id="btn-check-ขายอพาร์ทเม้นท์ขนาดเล็ก" autocomplete="off" name="sell_type" value="ขาย">
                                        <label class="btn btn_custom rounded-pill p-0 m-0 text-center" style="width: 5.5rem; font-size: 1.3rem;" for="btn-check-ขายอพาร์ทเม้นท์ขนาดเล็ก">ขาย</label>
                                    </div>
                                    <div class="col-4 text-center px-0">
                                        <input type="checkbox" class="btn-check" style="display: none;" id="btn-check-เช่าอพาร์ทเม้นท์ขนาดกลาง" autocomplete="off" name="sell_type" value="เช่า">
                                        <label class="btn btn_custom rounded-pill p-0 m-0 text-center" style="width: 5.5rem; font-size: 1.3rem;" for="btn-check-เช่าอพาร์ทเม้นท์ขนาดกลาง">เช่า</label>
                                    </div>
                                    <div class="col-4 text-lg-left text-center px-0">
                                        <input type="checkbox" class="btn-check" style="display:none;" id="btn-check-ขายอพาร์ทเม้นท์ขนาดใหญ่" autocomplete="off" name="sell_type" value="ขายเซ้ง">
                                        <label class="btn btn_custom rounded-pill p-0 m-0 text-center" style="width: 5.5rem; font-size: 1.3rem;" for="btn-check-ขายอพาร์ทเม้นท์ขนาดใหญ่">ขายเช่า</label>
                                    </div>  
                                </div>
                                <!-- @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror -->
                            </div>
                        </div>
                        <input type="hidden" name="city_plan_color" value="-">
                        <!--ooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooo-->
                        <div class="card card_border mb-4 pr-1 pr-md-2">
                            <div class="card-header card_green1 text-center py-2" style="width: 140px;border-top-left-radius: 1.5rem;">
                                <label for="property_type" class="text-center m-0 p-0">
                                        <h4 class="m-0 py-1" style="font-weight: bold;">ข้อมูลโครงการ</h4>
                                </label>
                            </div>
                            

                            <div class="form-group row margin-padding-form" >
                                <div class="col-lg-1"></div>
                                <div class="col row">
                                    <label for="property_type" class="col-12 m-0 p-0 my-2 topic_style">
                                        ประเภทอสังหาริมทรัพย์
                                    </label>
                                    <div class="col-12 col-md form-check form-check-inline">
                                        <input class="form-check-input m-2" type="radio" name="property_type" value="อพาร์ทเม้นท์ขนาดเล็ก">
                                        <label class="form-check-label m-2 content_style" for="property_type">อพาร์ทเม้นท์ขนาดเล็ก</label>
                                    </div>
                                    <div class="col-12 col-md form-check form-check-inline">
                                        <input class="form-check-input m-2" type="radio" name="property_type" value="อพาร์ทเม้นท์ขนาดกลาง">
                                        <label class="form-check-label m-2 content_style" for="property_type">อพาร์ทเม้นท์ขนาดเล็ก</label>
                                    </div>
                                    <div class="col-12 col-md form-check form-check-inline">
                                        <input class="form-check-input m-2" type="radio" name="property_type" value="อพาร์ทเม้นท์ขนาดใหญ่">
                                        <label class="form-check-label m-2 content_style" for="property_type">อพาร์ทเม้นท์ขนาดเล็ก</label>
                                    </div>
                                    <div class="col-lg-1"></div>
                                </div>
                            </div>
                            <div class="form-group row margin-padding-form">
                                <div class="col-lg-1"></div>
                                <div class="col row">
                                    <label for="project_name" class="col-12 m-0 p-0 topic_style">
                                        ชื่อโครงการ
                                    </label>
                                    <div class="col-11 pr-md-3 mt-2 p-0 ">
                                    <input id="project_name" type="text" class="form-control rounded-pill" name="project_name" placeholder="Project Name">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row margin-padding-form">
                                <div class="col-lg-1"></div>
                                <div class="col row margin-padding-form">
                                    <label for="type" class="col-12 m-0 p-0 topic_style">
                                        ประเภท
                                    </label>
                                    <div class="col-12 col-md form-check form-check-inline">
                                        <input class="form-check-input m-2" type="radio" name="type" value="มือ 1">
                                        <label class="form-check-label m-2 content_style" for="type">มือ 1</label>
                                    </div>
                                    <div class="col-12 col-md form-check form-check-inline">
                                        <input class="form-check-input m-2" type="radio" name="type" value="มือ 2">
                                        <label class="form-check-label m-2 content_style" for="type">มือ 2</label>
                                    </div>
                                    <div class="col-12 col-md form-check form-check-inline"></div>
                                    <div class="col-lg-1"></div>
                                </div>
                            </div>
                            <div class="form-group row margin-padding-form">
                                <div class="col-lg-1"></div>
                                <div class="col row margin-padding-form">
                                    <div class="col-11 col-md form-check mr-3 p-0">
                                        <label for="floor_num" class="sub_style">
                                            จำนวนชั้น
                                        </label>
                                        <input id="floor_num" type="number" class="form-control rounded-pill" name="floor_num" placeholder="Floor Number" min="1">
                                        <br/>
                                        <label for="kitchen_num"class="sub_style">
                                            ห้องครัว
                                        </label>
                                        <input id="kitchen_num" type="number" class="form-control rounded-pill" name="kitchen_num" placeholder="Kitchen Number" min="0">
                                    </div>
                                    <div class="col-11 col-md form-check mr-3 p-0">
                                        <label for="bedroom_num"class="sub_style">
                                            ห้องนอน
                                        </label>
                                        <input id="bedroom_num" type="number" class="form-control rounded-pill" name="bedroom_num" placeholder="Bedroom Number" min="0">
                                        <br/>
                                        <label for="parking_num"class="sub_style">
                                            ที่จอดรถ
                                        </label>
                                        <input id="parking_num" type="number" class="form-control rounded-pill" name="parking_num" placeholder="Parking Number" min="0">
                                    </div>
                                    <div class="col-11 col-md form-check mr-3 p-0">
                                        <label for="bathroom_num"class="sub_style">
                                            ห้องน้ำ
                                        </label>
                                        <input id="bathroom_num" type="number" class="form-control rounded-pill" name="bathroom_num" placeholder="Bathroom Number" min="0">
                                        <br/>
                                        <label for="livingroom_num"class="sub_style">
                                            ห้องนั่งเล่น
                                        </label>
                                        <input id="livingroom_num" type="number" class="form-control rounded-pill" name="livingroom_num" placeholder="Livingroom Number" min="0">
                                    </div>
                                </div>
                                <div class="col-md-1"></div>
                            </div>
                            <div class="form-group row margin-padding-form">
                                <div class="col-lg-1 pt-0"></div>
                                <div class="col row pt-0">
                                    <label for="furniture" class="col-12 m-0 p-0 topic_style">
                                        เฟอร์นิเจอร์
                                    </label>
                                    <div class="col-11 pr-md-3 mt-2 p-0 ">
                                    <input id="furniture" type="text" class="form-control rounded-pill" name="furniture" placeholder="Furniture">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row margin-padding-form">
                                <div class="col-lg-1"></div>
                                <div class="col row margin-padding-form">
                                    <label for="type" class="col-12 m-0 p-0 topic_style">
                                        พื้นที่ใช้สอย(ตร.ม.)
                                    </label>
                                    
                                    <div class="col-11 col-md-5 form-check mr-3 m-0 p-0">
                                        <label for="usable_area_min" class="sub_style">
                                            พื้นที่ใช้สอย(ต่ำสุด)
                                        </label>
                                        <input id="usable_area_min" type="text" class="form-control rounded-pill" name="usable_area_min" placeholder="Usable Area Min" >
                                    </div>
                                    <div class="col-11 col-md-5 form-check m-0 p-0">
                                        <label for="usable_area_max" class="sub_style">
                                            พื้นที่ใช้สอย(สูงสุด)
                                        </label>
                                        <input id="usable_area_max" type="text" class="form-control rounded-pill" name="usable_area_max" placeholder="Usable Area Max">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row margin-padding-form">
                                <div class="col-lg-1"></div>
                                <div class="col row margin-padding-form">
                                    <label for="type" class="col-12 m-0 p-0 topic_style">
                                        เนื้อที่(ตร.วา)
                                    </label>
                                    <div class="col-11 col-md-5 form-check mr-3 m-0 p-0">
                                        <label for="area_min" class="sub_style">
                                            เนื้อที่(ต่ำสุด)
                                        </label>
                                        <input id="area_min" type="text" class="form-control rounded-pill" name="area_min" placeholder="Area Min">
                                    </div>
                                    <div class="col-11 col-md-5 form-check m-0 p-0">
                                        <label for="area_max" class="sub_style">
                                            เนื้อที่(สูงสุด)
                                        </label>
                                        <input id="area_max" type="text" class="form-control rounded-pill" name="area_max" placeholder="Area Max">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card card_border mb-4 pr-1 pr-md-2">
                            <div class="card-header card_green1 text-center py-2" style="width: 140px;border-top-left-radius: 1.5rem;">
                                <label for="property_type" class="text-center m-0 p-0">
                                        <h4 class="m-0 py-1" style="font-weight: bold;">ทำเลที่ตั้ง</h4>
                                </label>
                            </div>
                            <div class="form-group row margin-padding-form">
                                <div class="col-lg-1"></div>
                                <div class="col row margin-padding-form">
                                    <div class="col-11 col-md-5 form-check mr-3 m-0 p-0">
                                        <label class="sub_style" for="alley">
                                            ซอย
                                        </label>
                                        <input id="alley" type="text" class="form-control rounded-pill mb-3" name="alley" placeholder="Alley">
                                    </div>
                                    <div class="col-11 col-md-5 form-check mr-3 m-0 p-0">
                                        <label class="sub_style" for="road" >
                                            ถนน
                                        </label>
                                        <input id="road" type="text" class="form-control rounded-pill mb-3" name="road" placeholder="Road">
                                    </div>
                                    
                                    <select class="province rounded-pill col-11 col-md-5 form-check mr-3 m-0 p-0 form-select-lg mb-3" style="height:2.5rem;" name="province" id="province">
                                        <option value="">เลือกข้อมูลจังหวัดของท่าน</option>
                                        @foreach($list as $row)
                                            <option value="{{$row->id}}">{{$row->name_th}}</option>
                                        @endforeach
                                    </select>
                                    <select class="amphures rounded-pill col-11 col-md-5 form-check mr-3 m-0 p-0 form-select-lg mb-3" style="height:2.5rem;" name="district">
                                        <option value="">เลือกข้อมูลอำเภอของท่าน</option>
                                    </select>
                                    <select class="districts rounded-pill col-11 col-md-5 form-check mr-3 m-0 p-0 form-select-lg mb-0" style="height:2.5rem;" name="sub_district">
                                        <option value="">เลือกข้อมูลตำบลของท่าน</option>
                                    </select>
                                    <div class="col-lg-1"></div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-1"></div>
                                <div class="col m-0 p-0">
                                    <label class="topic_style" for="nearby_place">
                                        สถานที่ใกล้เคียง
                                    </label>
                                    <div class="row pt-0 justify-content-center">
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place" type="checkbox" value="supermarket">
                                            <label class="form-check-label ml-2 p-0 content_style" for="nearby_place">Supermarket</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place" type="checkbox" value="ห้างสรรพสินค้า">
                                            <label class="form-check-label ml-2 p-0 content_style" for="nearby_place">ห้างสรรพสินค้า</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place" type="checkbox" value="BTS"> 
                                            <label class="form-check-label ml-2 p-0 content_style" for="nearby_place">BTS</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place" type="checkbox" value="MRT"> 
                                            <label class="form-check-label ml-2 p-0 content_style" for="nearby_place">MRT</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place" type="checkbox" value="Airport Link">
                                            <label class="form-check-label ml-2 p-0 content_style" for="nearby_place">Airport Link</label>
                                        </div>
                                    </div>
                                    <div class="row pt-0 justify-content-center">
                                        <div class="col-12 col-md form-check-inline justify-content-center-xs">
                                        <input name="nearby_place" type="checkbox" value="โรงพยาบาล"> 
                                            <label class="form-check-label ml-2 content_style" for="nearby_place">โรงพยาบาล</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place" type="checkbox" value="สนามบิน"> 
                                            <label class="form-check-label ml-2 content_style" for="nearby_place">สนามบิน</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place" type="checkbox" value="ทางด่วน"> 
                                            <label class="form-check-label ml-2 content_style" for="nearby_place">ทางด่วน</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                        <input name="nearby_place" type="checkbox" value="โรงเรียน"> 
                                            <label class="form-check-label ml-2 content_style" for="nearby_place">โรงเรียน</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place" type="checkbox" value="มหาวิทยาลัย"> 
                                            <label class="form-check-label ml-2 content_style" for="nearby_place">มหาวิทยาลัย</label>
                                        </div>
                                    </div>      
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            {{csrf_field()}}
                        </div>

                        <div class="card card_border mb-4 pr-1 pr-md-2">
                            <div class="card-header card_green1 text-center py-2" style="width: 140px;border-top-left-radius: 1.5rem;">
                                <label for="price" class="text-center m-0 p-0">
                                        <h4 class="m-0 py-1" style="font-weight: bold;">ราคา</h4>
                                </label>
                            </div>
                            <div class="form-group row margin-padding-form mt-3">
                                <div class="col-lg-1"></div>
                                <div class="col row margin-padding-form">
                                    <label for="type" class="col-12 m-0 p-0 topic_style">
                                        ช่วงราคาที่ต้องการ (บาท)
                                    </label>
                                    
                                    <div class="col-11 col-md-5 form-check mr-3 m-0 p-0">
                                        <label for="price_range_min" class="sub_style">
                                            ช่วงราคาที่ต้องการ(ต่ำสุด)
                                        </label>
                                        <input id="price_range_min" type="text" class="form-control rounded-pill" name="price_range_min" placeholder="Price Range Min">
                                    </div>
                                    <div class="col-11 col-md-5 form-check m-0 p-0">
                                        <label for="price_range_max" class="sub_style">
                                            ช่วงราคาที่ต้องการ(สูงสุด)
                                        </label>
                                        <input id="price_range_max" type="text" class="form-control rounded-pill" name="price_range_max" placeholder="Price Range Max">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row m-0 p-0">
                            <div class="col-1">
                                <img src="<?php echo asset('img/bulb-icon.svg'); ?>" class="rounded text-center" width="30x" height="30px" alt="..." style="object-fit:cover;">
                            </div>
                            <div class="col">
                                <p class="m-0 p-0" style="font-size: 1.1rem;"><span style="color: red;">*</span>คำแนะนำในการค้นหาอสังหาริมทรัพย์ที่ท่านต้องการ</p>
                                <p style="font-size: 0.9rem;">ยิ่งละเอียดยิ่งดีต่อการค้นหา ประหยัดเวลาและได้อสังหาฯที่ตรงใจคุณ กรุณากรอกข้อมูลให้ครบถ้วนสมบูรณ์ เพื่อให้ระบบค้นหาได้ง่ายขึ้น</p>
                            </div>
                        </div>

                        <div class="form-group row p-0 m-0 d-flex">
                            <div class="col align-items-end p-0 m-0">
                                <input class="m-1" name="agent_welcome" type="checkbox" value="ใช่">
                                ยินดีรับเอเจ้นท์
                            </div>
                            <div class="col text-center p-0 m-0">
                                <button type="submit" class="col-12 btn button_list">
                                    Submit
                                </button>
                            </div>
                            <div class="col"></div>
                        </div>
                    </form>
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

                        <input type="hidden" name="city_plan_color" value="-">
                        <input type="hidden" name="area_type" value="-">
                        <input type="hidden" name="business_license" value="-">
                        <input type="hidden" name="buyer_with_machi" value="-">

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

                        <input type="hidden" name="city_plan_color" value="-">
                        <input type="hidden" name="area_type" value="-">
                        <input type="hidden" name="business_license" value="-">
                        <input type="hidden" name="buyer_with_machi" value="-">

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

                        <input type="hidden" name="city_plan_color" value="-">
                        <input type="hidden" name="area_type" value="-">
                        <input type="hidden" name="business_license" value="-">
                        <input type="hidden" name="buyer_with_machi" value="-">

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

                        <input type="hidden" name="city_plan_color" value="-">
                        <input type="hidden" name="area_type" value="-">
                        <input type="hidden" name="buyer_with_machi" value="-">

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

                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-6">
                                <input type="checkbox" name="business_license" value="-"> ต้องการใบอนุญาตประกอบกิจการโรงแรม

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

                        <input type="hidden" name="project_name" value="-">
                        <input type="hidden" name="business_license" value="-">
                        <input type="hidden" name="buyer_with_machi" value="-">
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

                                <input name="area_type" type="checkbox" value="ติดถนนใหญ่"> ติดถนนใหญ่
                                <input name="area_type" type="checkbox" value="ติดถนนซอย"> ติดถนนซอย
                                <input name="area_type" type="checkbox" value="ถนนกว้าง"> ถนนกว้าง <span><input type="text" style="width: 100px;">เมตร</span>
                                <input name="area_type" type="checkbox" value="ถมแล้ว"> ถมแล้ว
                        
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

                        <input type="hidden" name="type" value="-">
                        <input type="hidden" name="city_plan_color" value="-">
                        <input type="hidden" name="area_type" value="-">
                        <input type="hidden" name="business_license" value="-">
                        <input type="hidden" name="buyer_with_machi" value="-">

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

                        <input type="hidden" name="city_plan_color" value="-">
                        <input type="hidden" name="area_type" value="-">
                        <input type="hidden" name="buyer_with_machi" value="-">

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

                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-6">
                                <input type="checkbox" name="business_license" value="ใช่"> ต้องการใบอนุญาตประกอบกิจการโรงแรม

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

                            <div class="col-md-6">
                                <input type="checkbox" name="area_type" value="ถนนทางเข้ากว้าง"> ถนนทางเข้ากว้าง <span><input type="text" style="width: 100px;">เมตร</span>

                            </div>
                        </div>


                        <div class="form-group row">

                            <div class="col-md-6">
                                <input type="checkbox" name="business_license" value="ใช่"> ต้องการใบอนุญาตประกอบกิจการโรงงาน

                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-6">
                                <input type="checkbox" name="buyer_with_machi" value="ใช่"> ต้องการซื้อ/เช่า/เซ้งพร้อมเครื่องจักร

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


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="Dormitory">
                <div class="card-header">{{ __('Add Dormitory') }}</div>

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

                        <input type="hidden" name="property" value="หอพัก">

                        <input type="hidden" name="city_plan_color" value="-">
                        <input type="hidden" name="area_type" value="-">
                        <input type="hidden" name="buyer_with_machi" value="-">

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
                                <input type="checkbox" name="property_type" value="หอพักขนาดเล็ก"> หอพักขนาดเล็ก <br>
                                <input type="checkbox" name="property_type" value="หอพักขนาดกลาง"> หอพักขนาดกลาง <br>
                                <input type="checkbox" name="property_type" value="หอพักขนาดใหญ่"> หอพักขนาดใหญ่

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


<!-- ---------------------------------------------------------- End Dormitory ---------------------------------------------------------- -->





<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="Office">
                <div class="card-header">{{ __('Add Office') }}</div>

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

                        <input type="hidden" name="property" value="ออฟฟิศ">

                        <input type="hidden" name="city_plan_color" value="-">
                        <input type="hidden" name="area_type" value="-">
                        <input type="hidden" name="buyer_with_machi" value="-">

                        <p>แบบฟอร์มตั้งซื้อรีสอร์ท</p>

                        <label for="sell_type" class="col-md-4 col-form-label text-md-right" style="font-size:30px;">{{ __('ประกาศ') }}</label>

                        <div class="form-group row">
                            <div class="col-md-6">
                                    <input type="checkbox" name="sell_type" value="หาซื้อ"> หาซื้อ
                                    <input type="checkbox" name="sell_type" value="หาเช่า"> หาเช่า

                                </div>
                        </div>

                        <label for="property_type" class="col-md-4 col-form-label text-md-right" style="font-size:30px;">{{ __('ข้อมูลโครงการ') }}</label>

                        <div class="form-group row">
                            <label for="property_type" class="col-md-4 col-form-label text-md-right">{{ __('ประเภทออฟฟิศ / สำนักงาน') }}</label>

                            <div class="col-md-6">
                                <input type="checkbox" name="property_type" value="บ้านเดี่ยว"> บ้านเดี่ยว <br>
                                <input type="checkbox" name="property_type" value="บ้านแฝด"> บ้านแฝด <br>
                                <input type="checkbox" name="property_type" value="ทาวน์เฮ้าส์ / ทาวน์โฮม"> ทาวน์เฮ้าส์ / ทาวน์โฮม <br>
                                <input type="checkbox" name="property_type" value="อาคารพาณิชย์"> อาคารพาณิชย์ <br>
                                <input type="checkbox" name="property_type" value="พื้นที่สำนักงานให้เช่า"> พื้นที่สำนักงานให้เช่า

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

                        <div class="form-group row p-0 m-0">
                            <div class="col-md-6">
                                <input name="agent_welcome" type="checkbox" value="ใช่"> ยินดีรับเอเจ้นท์
                            </div>
                            <div class="col-md-6 offset-md-4 m-0">
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




<!-- ---------------------------------------------------------- End Office ---------------------------------------------------------- -->



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