@extends('layouts.argon_template')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="row">
                        <div class="col-auto">

                            </div>
                        </div>
                        <div class="col">
                            <h2 class="card-title text-black-50 text-muted mb0 font-weight-lighter "> <img src="images/img/Admin-icon.png" width="52px" height="50px">ยินดีตอนรับ {{ Auth::user()->name }}</h2>
                        </div>
                    </div>
                    <div class="row align-items-center mt-3">
                        <div class="col">
                            <div class="row">
                                <div class="col-xl-3 col-md-6">
                                    <div class="card bg-danger text-white mb-4 font-weight-normal">
                                        <div class="card-body">สมาชิก
                                            <img src="https://cdn.pixabay.com/photo/2015/12/09/22/26/people-1085695_960_720.png"  wight=42px height=40px"></div>
                                        <div class="card-footer d-flex align-items-center justify-content-between">
                                            <a class="small text-black stretched-link" href="{{route('users.index')}}">View Details</a>
                                            <div class="small text-black-50"><i class="fas fa-angle-right"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6">
                                    <div class="card bg-warning text-white mb-4 font-weight-normal">
                                        <div class="card-body">รายการผ้า
                                            <img src="images/img/F1.png"  wight=42px height=40px"></div>
                                        <div class="card-footer d-flex align-items-center justify-content-between">
                                            <a class="small text-black stretched-link" href="{{route('products.index')}}">View Details</a>
                                            <div class="small text-black-50"><i class="fas fa-angle-right"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6">
                                    <div class="card bg-success text-white mb-4 font-weight-normal">
                                        <div class="card-body">รายการส่งซัก
                                            <img src="images/img/B1.png"  wight=42px height=40px"></div>
                                        <div class="card-footer d-flex align-items-center justify-content-between">
                                            <a class="small text-black stretched-link" href="{{route('Order.index')}}">View Details</a>
                                            <div class="small text-black-50"><i class="fas fa-angle-right" ></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6">
                                    <div class="card bg-primary text-white mb-4 font-weight-normal">
                                        <div class="card-body">รายการผ้าทั้งหมด
                                            <img src="images/img/B2.png"  wight=42px height=40px"> </div>
                                        <div class="card-footer d-flex align-items-center justify-content-between">
                                            <a class="small text-black stretched-link" href="{{route('Order_Product.index')}}">View Details</a>
                                            <div class="small text-black-50"><i class="fas fa-angle-right"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-10 text-center small">

                        </div>
                    </div>
                </div>
                <div class="row align-items-center mt-3">
                    <div class="col">
                        <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-info text-white mb-4 font-weight-normal">
                        <div class="card-body">อัพเดทสถานะ
                            <img src="https://cdn.icon-icons.com/icons2/1727/PNG/512/3986721-bus-school-vehicle-icon_112965.png"  wight=42px height=40px"> </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-black stretched-link" href="{{route('send_orders.index')}}">View Details</a>
                            <div class="small text-black-50"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6">
                    <div class="card bg-gradient-dark text-white mb-4 font-weight-normal">
                        <div class="card-body">แสดงสถานะ
                            <img src="https://www.fincomercio.com/wp-content/uploads/2018/03/iconos_pagina_web-21.png"  wight=42px height=40px"> </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-black stretched-link" href="{{route('show_detail.index')}}">View Details</a>
                            <div class="small text-black-50"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-gradient-secondary text-white mb-4 font-weight-normal">
                                    <div class="card-body">ตารางเดินรถ
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRE03W-9gFaX1y3qDvNxeBPCWa3B98wfxr8PSK2p6H7JXfgfBVY&usqp=CAU"  wight=42px height=40px"> </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-black stretched-link" href="{{route('work.index')}}">View Details</a>
                                        <div class="small text-black-50"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-gradient-info text-white mb-4 font-weight-normal">
                                    <div class="card-body">สมัครสมาชิกพนักงาน
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSQ8WMfUOiMspkEseCVl2JiYV9Say4uG5lU-0OHnUTnoXChacX8&usqp=CAU"  wight=42px height=40px"> </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-black stretched-link" href="{{route('employee.index')}}">View Details</a>
                                        <div class="small text-black-50"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRE03W-9gFaX1y3qDvNxeBPCWa3B98wfxr8PSK2p6H7JXfgfBVY&usqp=CAU"width="42px"height="40px">
                        <font color="green" >:Diver1</font> => โนนม่วง-หลังมอ-กังสดาล-มหาวิทยาลัยขอนแก่น <br>
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQjQbOd-KoOAWP4OG-SjR4l6X6GrXvtvd55FnQbOM_izpNFt9Gr&usqp=CAU"width="42px"height="40px">
                        <font color="red" >: Diver2</font> => ในเมืองขอนแก่น <br>
                        <img src="https://agora.xtec.cat/ceip-catalunya-navarcles/wp-content/uploads/usu727/2018/11/f093897d0e67b325765d0b57063c39f4.png"width="42px"height="40px">
                        <font color="blue" >: Diver3</font> => รอบเมืองขอนแก่น</div>


                <!-- Nav Item - Utilities Collapse Menu -->


                        </li>

                        </div>
                    </li>
                </div>
            </div>
        </div>
    </div>
@endsection
