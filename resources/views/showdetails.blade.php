@extends('layouts.argon_template')

@section('content')
{{--    <link href="path/to/font-awesome/css/font-awesome.min.css" rel="stylesheet" />--}}

    <div class="card-body">
        <div class="card shadow mb-40">
            <div class="card-header py-50">


            </div>
            <div class="mt-10 text-center small >
                <html>
                <head>
                    <meta charset= "utf-8 >
                    <style>
                        @page {
                            header: page-header;
                            footer: page-footer;
                        }
                        body{
                            font-family: "supermarket";
                            font-size:25px;
                        }
                        table, td, th {
                            border: 2px solid #ddd;
                            text-align: left;
                        }
                        table {
                            border-collapse: collapse;
                            width: 100%;
                        }
                        th, td {
                            padding: 6px;
                        }
                    </style>
                </head>
                <body>

                     <img src="../images/img/Pavara22.png " width="600px" height="80px" align="right"><br><br><br>
{{--                     @foreach($users as$items)--}}
                     <u><b>  <h2 style="text-align: center"  >ใบแสดงรายการผ้า</h2></b></u>


{{--                        ที่อยู่ : {{ Auth::user()->send_address }}<br>--}}
{{--                        Tel : {{Auth::user()->tel }}--}}

                </body>
                <div id="app">

                    <table border="2">

                        <thead>


                        <tr>

                            <th>รหัสสินค้า</th>
                            <th>ชื่อสินค้า</th>
                            <th>จำนวนผ้า</th>
                            <th>ราคา</th>
                            <th>ราคาทั้งหมด</th>
                            <th>วัน/เวลา</th>

                        </tr>

                        </thead>
                        <tbody>


                        @foreach($order_has_products as $item)
                            <tr>

                                <th >{{$item->products_id}}</th>
                                <th >{{$item->name}}</th>
                                <th>{{$item->quantity}}</th>
                                <th >{{$item->price}}</th>
                                <th>{{$item->total}}</th>
                                <th>{{$item->order_date}}/

                                {{$item->order_time}}</th>
                                  @endforeach

{{--@foreach($order_has_products as $item)--}}
                                <h4  align="right">       เลขที่ใบเสร็จ :  {{$item->id_orders}}<br></h4>
                                <h4 align="left" > ข้อมูลลูกค้า </h4>
                                <h5 align="left" >           ชื่อ : {{ $item->uname}}<br></h5>
                                <h5 align="left" > ที่อยู่ :  {{$item->send_address}} <br></h5>
                                <h5 align="left">     โทร : {{$item->tel}}<br></h5>
                                <h5 align="left">         เลขกำกับภาษี : {{$item->Tex}}<br><br></h5>
{{--    @endforeach--}}

                                                   </tr>

{{--                        @endforeach--}}

                        </tbody>
                    </table>
                </div>
                <htmlpageheader name="page-header">
                    <div>สรุปรายการสินค้าสั้งหมด ({{date('d/m/Y H:i:s')}})</div>
                    รายการทั้งหมดคิดค่าขนส่งและบวกภาษี 7 % แล้ว
                </htmlpageheader>
                <htmlpagefooter name="page-footer">



                    <div style="text-align: right"> หน้า {PAGENO}</div>

                </htmlpagefooter>
                </body>
                </html>
                <a class="btn btn-success" href="{{route('shopinfo')}}" role="button">กลับ</a></center>

            </div>
        </div>
    </div>
    </div>




@endsection
