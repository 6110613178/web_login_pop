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
        <input type="hidden" name="buyer_with_machi" value="-">

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