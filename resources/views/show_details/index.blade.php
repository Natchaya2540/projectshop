@extends('layouts.argon_template')

@section('content')
    <link href="path/to/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <div class="row">
        <div class="col ">
            <div class="card shadow">
                <div class="card-header border-0">
                    <h3 class="mb-0">รายการอัพเดทสถานะการรับผ้า({{count($send_orders)}}รายการ)</h3>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-flush ">
                        <thead class="thead-light">
                        <tr>
                            <th scope="col">เลขใบส่งซัก</th>
                            <th scope="col">วันที่รับ</th>
                            <th scope="col">เวลาที่รับ/ชิ้น</th>
                            <th scope="col">จำนวน</th>
                            <th scope="col">สถานะ</th>
                            <th scope="col">บุคคล</th>
                            <th scope="col">รายละเอียด</th>
                            <th scope="col" style="... "></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($send_orders as$item)
                            <tr>
                                <td>{{$item->id_orders}}</td>
                                <td>{{$item->send_day}}</td>
                                <td>{{$item->send_time}}</td>
                                <td>{{$item->total}}</td>
                                <td>{{$item->status_has_send_orders_id}}</td>
                                <td>{{$item->employee_EmpId}}</td>
                                <td>{{$item->details}}</td>
                                <td>


                                                               </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class ="card-footer py-4">
                    <div class="row">
                        <div class ="col">
                            <div class ="col-auto">
                                {{$send_orders->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

@section('script')
    <script>
        $(".delete").on("submit", function(){
            return confirm("คุณต้องกำรลบข้อมูลใช่หรือไม่ ?");
        });
    </script>
@endsection
