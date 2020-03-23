@extends('layouts.argon_template')

@section('content')
    <link href="path/to/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <div class="row">
        <div class="col ">
            <div class="card shadow">
                <div class="card-header border-0">
                    <h3 class="mb-0">ข้อมูลสินค้าทั้งหมด({{count($order_has_products)}} รายการ)</h3>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-flush ">
                        <thead class="thead-light">
                        <tr>
                            <th scope="col">เลขใบส่งซัก</th>
                            <th scope="col">รหัสผ้า</th>
                            <th scope="col">ราคา/ชิ้น</th>
                            <th scope="col">จำนวน</th>
                            <th scope="col">ราคา/ทั้งหมด</th>
                            <th scope="col">วันเวลาที่สั่ง</th>
                            <th scope="col">ชื่อรายการ</th>
                            <th scope="col" style="... "></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($order_has_products as$item)
                            <tr>
                                <td>{{$item->id_orders}}</td>
                                <td>{{$item->products_id}}</td>
                                <td>{{$item->price}}</td>
                                <td>{{$item->quantity}}</td>
                                <td>{{$item->total}}</td>
                                <td>{{$item->updated_at}}</td>
                                <td>{{$item->name}}</td>
                                <td>


 {{--                                    <form class="delete" action="{{route('product_types.destroy',$item->id)}}" method="POST">--}}
{{--                                        <input type="hidden" name="_method" value="DELETE">--}}
{{--                                        {{ csrf_field() }}--}}
{{--                                        <a href="#" class="btn btn-sm btn-outline-success"> <i class="fa fa-edit"></i> แก้ไข</a>--}}
{{--                                        <button type="submit" class="btn btn-sm btn-outline-danger"> <i class="fa fa-trash"></i> ลบ</button>--}}


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
                                {{$order_has_products->links() }}
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
