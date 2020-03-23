@extends('layouts.argon_template')

@section('content')
    <link href="path/to/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <div class="row">
        <div class="col ">
            <div class="card shadow">
                <div class="card-header border-0">
                    <h3 class="mb-0">ข้อมูลสินค้าทั้งหมด({{count($orders)}} รายการ)</h3>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                        <tr>

                            <th scope="col">รหัสรายการ</th>
                            <th scope="col">วันที่</th>
                            <th scope="col">เวลา</th>
                            <th scope="col">รหัสลูกค้า</th>
                            <th scope="col">รายชื่อลูกค้า</th>
                            <th scope="col">สถานะ</th>
                            <th scope="col">วันเวลาที่สั่ง</th>

                            <th scope="col" style="... "></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($orders as$item)
{{--                            {{dd($item)}}--}}
                            <tr>
                                <td>{{$item->id_orders}}</td>
                                <td>{{$item->order_date}}</td>
                                <td>{{$item->order_time}}</td>
                                <td>{{$item->user_ID}}</td>
                                <td>{{$item->user->name}}</td>
                                <td>{{$item->send_has_orders_status_ID}}</td>
                                <td>{{$item->updated_at}}</td>

                                <td>
                                    <a href="{{url('showdetails')}}/{{$item->id_orders}}" class="btn btn-sm btn-outline-info">แสดง</a>
                                    <a href="#" class="btn btn-sm btn-outline-danger">PDF</a>
                                    <form class="delete" action="{{route('Order.destroy',$item->id_orders)}}" method="POST">
                                        <input type="hidden" name="_method" value="DELETE">
                                        {{ csrf_field() }}
{{--                                        <a href="#" class="btn btn-sm btn-outline-success"> <i class="fa fa-edit"></i> แก้ไข</a>--}}
{{--                                        <button type="submit" class="btn btn-sm btn-outline-success"> <i class="fa fa-trash"></i> ลบ</button>--}}
                                    </form>
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
                                {{$orders->links() }}
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
