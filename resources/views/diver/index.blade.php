@extends('layouts.argon_template')

@section('content')
    <link href="path/to/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <div class="row">
        <div class="col ">
            <div class="card shadow">
                <div class="card-header border-0">

                    <h3 class="mb-0">ข้อมูลรายการที่ส่งซักทั้งหมด({{count($orders)}} รายการ) </h3><br>
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRE03W-9gFaX1y3qDvNxeBPCWa3B98wfxr8PSK2p6H7JXfgfBVY&usqp=CAU"width="42px"height="40px">
                    <font color="green" >:Diver1</font> => โนนม่วง-หลังมอ-กังสดาล-มหาวิทยาลัยขอนแก่น <br>
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQjQbOd-KoOAWP4OG-SjR4l6X6GrXvtvd55FnQbOM_izpNFt9Gr&usqp=CAU"width="42px"height="40px">
                    <font color="red" >: Diver2</font> => ในเมืองขอนแก่น <br>
                    <img src="https://agora.xtec.cat/ceip-catalunya-navarcles/wp-content/uploads/usu727/2018/11/f093897d0e67b325765d0b57063c39f4.png"width="42px"height="40px">
                    <font color="blue" >: Diver3</font> => รอบเมืองขอนแก่น</div>
                </div>

                <div class="table-responsive">
                    <table class="table align-items-center table-flush ">
                        <thead class="thead-light">
                        <tr>
                            <th scope="col">รหัสรายการ</th>
                            <th scope="col">วันที่สะดวก</th>
                            <th scope="col">เวลาที่สะดวก</th>
                            <th scope="col">รหัสลูกค้า</th>
                            <th scope="col">วันเวลาการอัพเเดท</th>
                            <th scope="col">รหัสพนักงาน</th>
                            <th scope="col">สถานะ</th>
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
                                <td>{{$item->employee_EmpId}}</td>
                                <td>{{$item->send_has_orders_status_ID}}</td>
                                <td></td>
                                <td>
                                    <form class="delete" action="{{route('Order.destroy',$item->id_orders)}}"
                                          method="POST">
                                        <input type="hidden" name="_method" value="DELETE">
                                        {{ csrf_field() }}
                                        <a href="{{url('showdetails')}}/{{$item->id_orders}}" class="btn btn-sm btn-info"><i class="fa fa-eye"></i>แสดง</a>
{{--                                    --}}
                                <td>    <a href="{{route('diver.edit',$item->id_orders)}}"
                                           class="btn btn-sm btn-danger"> <i
                                            class="fa fa-edit"></i>


                                        อัพเดทสถานะ</a></td>


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
