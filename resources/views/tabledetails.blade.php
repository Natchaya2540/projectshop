@extends('layouts.argon_template')

@section('content')
    <link href="path/to/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <div class="row">
        <div class="col ">
            <div class="card shadow">
                <div class="card-header border-0">
                    <h3 class="mb-0">ข้อมูลรายการที่ส่งซักทั้งหมด({{count($orders)}} รายการ) </h3>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-flush ">
                        <thead class="thead-light">
                        <tr>
                            <th scope="col">รหัสรายการ</th>
                            <th scope="col">วันที่สะดวก</th>
                            <th scope="col">เวลาที่สะดวก</th>
                            <th scope="col">รหัสลูกค้า</th>
                            <th scope="col">วันเวลาที่สั่ง</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($orders as$item)
                            <tr>
                                <td>{{$item->id_orders}}</td>
                                <td>{{$item->order_date}}</td>
                                <td>{{$item->order_time}}</td>
                                <td>{{$item->user_ID}}</td>
                                <td>{{$item->updated_at}}</td>
                                <td></td>
                                <td>
                                    <a href="{{url('showdetails')}}/{{$item->id_orders}}" class="btn  btn-success"><i class="fa fa-eye"></i>แสดง</a>
                                    <a href="#" class ="btn btn-sm btn-danger"><i class="fa fa-file"></i> PDF</a>


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
{{--                                {{$order_has_products->links() }}--}}
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
