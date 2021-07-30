@extends('layouts.app');

@section('content')


    <div class="row justify-content-center" style="margin-left: 0px;margin-right: 0px;">
    <div class="col-md-2" style="padding-right: 0px;padding-left: 0px;/* margin-left: -5px; */">
    <div class="flex-container">
        <div><img src="<?php echo asset('img/personEx.jpg'); ?>" class="rounded-circle-user" width="35px" height="35px" alt="..." style="object-fit:cover"></div>
            <div class="nav-buybroad"> 
                <a href="{{ route('buyer_prop.index') }}" class="btn_custom"> <?php echo file_get_contents("img/Vector.svg"); ?> ข้อมูลส่วนตัว</a>
            </div>
            <div class="nav-buybroad"><?php echo file_get_contents("img/history.svg"); ?>ประวัติการเข้าชม</div>
            <div class="nav-buybroad"><?php echo file_get_contents("img/favorite.svg"); ?>รายการโปรด</div>
            <div class="nav-buybroad"><?php echo file_get_contents("img/match.svg"); ?>รายการที่ถูกจับคู่</div>
            <div class="nav-buybroad"><?php echo file_get_contents("img/list_buy.svg"); ?>รายการตั้งซื้อ</div>
            <div class="nav-buybroad"><?php echo file_get_contents("img/help.svg"); ?>ช่วยเหลือ</div>
            <div class="nav-buybroad"><?php echo file_get_contents("img/set_up.svg"); ?>ตั้งค่าระบบ</div>
            <div class="nav-buybroad"><?php echo file_get_contents("img/log_out.svg"); ?>ออกจากระบบ</div> 
    </div>
    </div>
        <div class="col-md-10" style="padding-left: 0px;padding-right: 0px;">
                <div class="cardbuyborad">
                    <h4 align = 'center'> รายการตั้งซื้อ </h4>
                </div>
            <div>
               <div class="card-body" style="padding-right: 100px;padding-left: 40px;">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row mt-6" style="margin-bottom: 10px;">
                        <div class="col-md-12 ">
                        <a href="{{ route('buyer_prop.create') }}"class="btn btn-success" style="float: right;">ลงประกาศค้นหาทรัพย์</a>
                        </div>
                    </div>

                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            {{ $message }}
                        </div>
                    @endif

               
                    @foreach ($data as $key => $value)
                    
                    @if ($value->property == 'ที่ดิน')
                    <div class="flex-container-row">
                        <div class="flex-item-left" align = 'left'>{{ $value->property }}</div>
                        <div class="flex-item-right"> 
                                    <form action="{{ route('buyer_prop.destroy', $value->id) }}" method="POST"  align="right">
                                        <a href="{{ route('buyer_prop.show', $value->id) }}" class="btn_cus"><?php echo file_get_contents("img/eye.svg"); ?></a>
                                        <a href="{{ route('buyer_prop.edit', $value->id) }}" class="btn_cus" > <?php echo file_get_contents("img/pencil.svg"); ?></a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-delete" style="padding-right: 0px;padding-left: 0px;"><?php echo file_get_contents("img/delete.svg"); ?></button>
                                    </form>
                        </div>
                    </div>
                    <div class="flex-container-row-description">
                        <div class="flex-item-left-description">ต้องการ{{ $value->sell_type }}{{ $value->property_type }}&nbsp;อยู่ใกล้กับ{{ $value->nearby_place }}
                                <div class="address"><?php echo file_get_contents("img/location.svg"); ?>จังหวัด {{ $value->province }}, อำเภอ {{ $value->district }}, ตำบล {{ $value->sub_district }}</div>
                            <div class="flex-container-row-num">    
                                <div class="flex-item-left-num" style="flex: 100px;" align="left">
                                    <?php echo file_get_contents("img/space.svg"); ?> {{ $value->area_min }}-{{ $value->area_max }} ตร.ม. 
                                </div>
                                <div class="flex-item-right-num"  align="left" >
                                    <?php echo file_get_contents("img/Group.svg"); ?> {{ $value->city_plan_color }} 
                                </div>
                            </div>
                        </div>
                        <div class="flex-item-right-description" align="right">ประกาศหมายเลข {{ $value->id }}</div>
                    </div>

                @else 
                    <div class="flex-container-row">
                        <div class="flex-item-left" align = 'left'>{{ $value->property }}</div>
                        <div class="flex-item-right"> 
                                    <form action="{{ route('buyer_prop.destroy', $value->id) }}" method="POST"  align="right">
                                        <a href="{{ route('buyer_prop.show', $value->id) }}" class="btn_cus"><?php echo file_get_contents("img/eye.svg"); ?></a>
                                        <a href="{{ route('buyer_prop.edit', $value->id) }}" class="btn_cus" > <?php echo file_get_contents("img/pencil.svg"); ?></a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-delete" style="padding-right: 0px;padding-left: 0px;"><?php echo file_get_contents("img/delete.svg"); ?></button>
                                    </form>
                        </div>
                    </div>
                    <div class="flex-container-row-description">
                        <div class="flex-item-left-description">ต้องการ{{ $value->sell_type }}{{ $value->property_type }}&nbsp;อยู่ใกล้กับ{{ $value->nearby_place }}
                                <div class="address"><?php echo file_get_contents("img/location.svg"); ?>จังหวัด {{ $value->province }}, อำเภอ {{ $value->district }}, ตำบล {{ $value->sub_district }}</div>
                            <div class="flex-container-row-num">
                                <div class="flex-item-left-num" style="flex: 100px;" align="left">
                                    <?php echo file_get_contents("img/bedroom.svg"); ?> {{ $value->bedroom_num }} ห้องนอน 
                                </div>
                                <div class="flex-item-right-num"  align="left" >
                                    <?php echo file_get_contents("img/bathroom.svg"); ?> {{ $value->bedroom_num }} ห้องน้ำ
                                </div>
                            </div>
                            <div class="flex-container-row-num">    
                                <div class="flex-item-left-num" style="flex: 100px;" align="left">
                                    <?php echo file_get_contents("img/space.svg"); ?> {{ $value->area_min }}-{{ $value->area_max }} ตร.ม. 
                                </div>
                                <div class="flex-item-right-num"  align="left" >
                                    <?php echo file_get_contents("img/parking.svg"); ?> {{ $value->parking_num }} ที่จอดรถ 
                                </div>
                            </div>
                        </div>
                        <div class="flex-item-right-description" align="right">ประกาศหมายเลข {{ $value->id }}</div>
                    </div>
                @endif
                @endforeach

                    {!! $data->links() !!}

                </div>
            </div>
        </div>
    </div>


@endsection