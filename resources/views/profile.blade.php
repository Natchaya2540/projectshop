@extends('layouts.argon_template')
@section('content')

    <div class="row">
        <div class="col ">
            <div class="card shadow">
                <div class="card-header border-0">

                    @foreach($users as $item)
                    <h3 class="mb-0">ข้อมูลส่วนตัว {{$item->name}}</h3><br>
                </div>
                  <img src="images/img/P6.png" width="300px" height="250px" align="center">

                            </th>
                        </tr>
                        </thead>
                        <tbody>

                            <tr>
{{--                                <td>{{$item->id}}<br>--}}
                              ชื่อ :  {{$item->name}}<br>
                                Email: {{$item->email}}<br>
                              Company :  {{$item->company}}<br>
                               Tel : {{$item->tel}}<br>
                               ที่อยู่บริษัท : {{$item->company_address}}<br>
                              ที่อยุ่จัดส่ง :  {{$item->send_address}}<br>
                            เลขกำกับภาษี :    {{$item->Tex}}</td>


                                <td>
                                    <a class="btn btn-sm btn-primary" href="{{route('shopinfo')}}" role="button">กลับ</a>

{{--                                    <form class="delete" action="{{route('users.destroy',$item->id)}}" method="POST">--}}
{{--                                        <input type="hidden" name="_method" value="DELETE">--}}
{{--                                        {{ csrf_field() }}--}}
{{--                                        <button type="submit" class="btn btn-sm btn-outline-danger"> <i class="fa fa-trash"></i> ลบ</button>--}}
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
