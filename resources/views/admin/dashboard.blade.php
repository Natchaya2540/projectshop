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
                            <h2 class="card-title text-black-50 text-muted mb0 font-weight-lighter "> <img src="images/img/Admin-icon.png" width="52px" height="50px">ผู้ดูแลระบบ</h2>
                        </div>
                    </div>
                    <div class="row align-items-center mt-3">
                        <div class="col">
                            <div class="row">
                                <div class="col-xl-3 col-md-6">
                                    <div class="card bg-primary text-white mb-4 font-weight-normal">
                                        <div class="card-body">สมาชิก
                                            <img src="images/img/user2.png"  wight=42px height=40px"></div>
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
                                    <div class="card bg-danger text-white mb-4 font-weight-normal">
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
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-info text-white mb-4 font-weight-normal">
                        <div class="card-body">อัพเดทสถานะ
                            <img src="images/img/Drive.png"  wight=42px height=40px"> </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-black stretched-link" href="#">View Details</a>
                            <div class="small text-black-50"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>


                <!-- Nav Item - Utilities Collapse Menu -->


                        </li>

                        </div>
                    </li>
                </div>
            </div>
        </div>
    </div>
@endsection
