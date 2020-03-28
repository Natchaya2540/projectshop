@extends('layouts.argon_template')
@section('content')

    <div class="row">
        <div class="col ">
            <div class="card shadow">
                <div class="card-header border-0">
                    @foreach($users as $item)
                    <h3 class="mb-0">ข้อมูลส่วนตัว {{$item->name}}</h3>
                </div>


                            </th>
                        </tr>
                        </thead>
                        <tbody>

                            <tr>
{{--                                <td>{{$item->id}}<br>--}}
                                {{$item->name}}<br>
                                {{$item->email}}<br>
                                {{$item->company}}<br>
                                {{$item->tel}}<br>
                                {{$item->company_address}}<br>
                                {{$item->send_address}}<br>
                                {{$item->Tex}}</td>


                                <td>
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
