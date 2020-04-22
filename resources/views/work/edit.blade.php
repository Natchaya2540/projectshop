@extends('layouts.argon_template')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="mb-0">อัพเดทสถานะ</h3>
                        </div>
                    </div>
                </div>
                @if($errors->any())
                    <div class="alert alert-danger m-4">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                        {!!  Form::model($order, ['url' => route('works.update',$order->id_orders),'method' => 'put'])!!}
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRE03W-9gFaX1y3qDvNxeBPCWa3B98wfxr8PSK2p6H7JXfgfBVY&usqp=CAU"width="42px"height="40px">
                <font color="green" >:Diver1</font> => โนนม่วง-หลังมอ-กังสดาล-มหาวิทยาลัยขอนแก่น <br>
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQjQbOd-KoOAWP4OG-SjR4l6X6GrXvtvd55FnQbOM_izpNFt9Gr&usqp=CAU"width="42px"height="40px">
                <font color="red" >: Diver2</font> => ในเมืองขอนแก่น <br>
                <img src="https://agora.xtec.cat/ceip-catalunya-navarcles/wp-content/uploads/usu727/2018/11/f093897d0e67b325765d0b57063c39f4.png"width="42px"height="40px">
                <font color="blue" >: Diver3</font> => รอบเมืองขอนแก่น</div>
            <div class="table-responsive">
                <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                    <tr>

                        <th scope="col" style="width: 5%">รหัส</th>
                        <th scope="col"style="width: 10%">วันที่</th>
                        <th scope="col"style="width: 10%">เวลา</th>
                        <th scope="col"style="width: 5%">รหัสลูกค้า</th>
                        <th scope="col"style="width: 15%">รายชื่อลูกค้า</th>
                        <th scope="col"style="width: 10%">วันเวลาที่สั่ง</th>
                        <th scope="col"style="width: 10%">พนักงาน</th>
                        <th scope="col"style="width: 20%">สถานะ</th>
                        <th scope="col"style="width: 10%">โปรดเลือก</th>

                        <th scope="col" style="width: 30% "></th>
                    </tr>
                    </thead>
                    <tbody>
                        {{--                            {{dd($item)}}--}}
                        <tr>
                            <td>{{$order->id_orders}}</td>
                            <td>{{$order->order_date}}</td>
                            <td>{{$order->order_time}}</td>
                            <td>{{$order->user_ID}}</td>
                            <td>{{$order->user->name}}</td>
                            <td>{{$order->updated_at}}</td>
                            <td>{{$order->employee_EmpId}}</td>
                            <td>{{$order->send_has_orders_status_ID}}</td>

                                        <td> <select name="send_has_orders_status_ID" id="send_has_orders_status_ID">
                                                                    <option value="ไม่มีการอัพเดท" selected>-โปรดเลือกสถานะ</option>
                                                                    <option value="กำลังดำเนินการ">กำลังดำเนินการ</option>
                                                                    <option value="ถึงโรงงาน">ถึงโรงงาน</option>
                                                                    <option value="กระบวนการซัก">กระบวนการซัก</option>
                                                                      <option value="เตรียมจัดส่ง">เตรียมจัดส่ง</option>
                                                                      <option value="จัดส่งสำเร็จ">จัดส่งสำเร็จ</option>
                                            </select> </td>
                        <td>

                        {!! Form::submit('อัพเดทสถานะ', ['class' => 'btn btn-success ']) !!}
                            </td>
                        </tr>

                    </tbody>
                </table>
                    </div>
        </div>
        </div>
            </div>
            {!! Form::close() !!}

            </div>
        </div>
    </div>
    </div>
@endsection
