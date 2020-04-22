@extends('layouts.argon_template')
@section('content')
    @auth
        @if(session('status'))
            <div class="row">
                <div class="col">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <span class="alert-inner--icon"><i class="fa fa-check"></i></span>
                        <span class="alert-inner--text"><strong>Success!</strong> {{session('status')}}</span>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div>
        @endif
    @endauth
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
                <div class="card-body pt-0" style="min-height: 50vh">
                    {!! Form::open(['url' =>route('send_orders.store') ,'files'=>true]) !!}
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                {!! Form::label('id_orders', 'เลขที่ใบเสร็จ'); !!}
                                {!! Form::text('id_orders', null, ['class' => 'form-control']); !!}
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                {!! Form::label('total', 'รายการผ้าทั้งหมด'); !!}
                                {!! Form::text('total', null, ['class' => 'form-control']); !!}
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                วันที่รับ: <br><br>
                               <input type="date" name="send_day" id="send_day" value="">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                เวลาที่ส่ง : <br><br>
                                <input type="time" name="send_time" id="send_time" value="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
{{--                            {!! Form::label('employee_EmpId', 'บุคคล'); !!}--}}
{{--                            {!! Form::text('employee_EmpId', null, ['class' => 'form-control']); !!}--}}
                                พนักงานขับรถ <br>
                                <select name="employee_EmpId" id="employee_EmpId">
                                    <option value="0" selected>-โปรดเลือก-</option>
                                    <option value="Diver1">Diver1</option>
                                    <option value="Diver2">Diver2</option>
                                    <option value="Diver3">Diver3</option>

                                </select>
                        </div>
                    </div>
                <div class="col">
                    <div class="form-group">
                        สถานะ <br>
                        <select name="status_has_send_orders_id" id="status_has_send_orders_id">
                            <option value="0" selected>-โปรดเลือก-</option>
                            <option value="รับผ้าสำเร็จ">รับผ้าสำเร็จ</option>
                            <option value="รับผ้าไม่สำเร็จ">รับผ้าไม่สำเร็จ</option>
                            <option value="กำลังดำเนินการ">กำลังดำเนินการ</option>
                            <option value="ดำเนินการสำเร็จ">ดำเนินการสำเร็จ</option>
                        </select>
                            </div>
                        </div>
                    </div>
            <div class="row">
                <div class="col">
                <div class="form-group">
                    {!! Form::label('details', 'รายละเอียด'); !!}
                    {!! Form::text('details', null, ['class' => 'form-control']); !!}
                </div>
            </div>
        </div>
                    <div class="row mt-2">
                        <div class="col">
                            {!! Form::submit('อัพเดทสถานะผ้า', ['class' => 'btn btn-primary']) !!}
                            <a href="{{route('show_detail.index')}}" class="btn btn btn-danger"><i class="fa fa-eye-dropper"></i>ตารางการรับผ้า</a>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
