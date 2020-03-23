@extends('layouts.argon_template')
@section('content')

    <div class="row">
        <div class="col ">
            <div class="card shadow">
                <div class="card-header border-0">
                    <h3 class="mb-0">รายชื่อสมาชิก({{count($users)}} รายการ)</h3>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                        <tr>
                            <th scope="col">รหัสลูกค้า</th>
                            <th scope="col">ชื่อ</th>
                            <th scope="col">อีเมล์</th>
                            <th scope="col">ชื่อบริษัท</th>
                            <th scope="col">เบอร์โทร</th>
                            <th scope="col">ที่อยู่บริษัท</th>
                            <th scope="col">ที่อยู่จัดส่ง</th>
                            <th scope="col">เลขภาษี</th>


                            <th scope="col" style="width: 15% " >

                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as$item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->email}}</td>
                                <td>{{$item->company}}</td>
                                <td>{{$item->tel}}</td>
                                <td>{{$item->company_address}}</td>
                                <td>{{$item->send_address}}</td>
                                <td>{{$item->Tex}}</td>


                                <td>
                                    <form class="delete" action="{{route('users.destroy',$item->id)}}" method="POST">
                                        <input type="hidden" name="_method" value="DELETE">
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-sm btn-outline-danger"> <i class="fa fa-trash"></i> ลบ</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
