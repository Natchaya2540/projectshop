@extends('layouts.argon_template')
{{--<link href="/css/bootstrap-datetimepicker.min.css" rel="stylesheet">--}}
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
    @if($errors->any())
        <div class="alert alert-danger m-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card-body">
        <div class="card shadow mb-40">
            <div class="card-header py-60">

                <table id="cart" class="table table-hover table-condensed ">
                    <thead>
                    <tr>
                        <th style="width:50% ">รายการผ้าที่ส่งซักทั้งหมด</th>
                        <th style="width:10%">Price</th>
                        <th style="width:5%">Quantity</th>
                        <th style="width:10%" class="text-center">Subtotal</th>
                        <th style="width:10%"></th>
                    </tr>
                    </thead>

                    <tbody>


                    <?php $total = 0 ?>
                    @if(session('cart'))
                        @foreach(session('cart') as $id => $order_has_products)
                            <?php if (!empty($order_has_products)) {
                                $total += $order_has_products['number'] * $order_has_products ['cost'];
                            } ?>
                            <tr>
                                {!! Form::open(['url' =>route('carts.store') ,'files'=>true]) !!}
                                <td data-th="Product">
                                    <div class="row ">
                                        <div class="col-sm-3 hidden-xs font-weight-normal"><img src="images/products/{{ $order_has_products['image'] }}" width="80" height="80" class="img-responsive"/></div>
                                        <div class="col-sm-9">
                                            <h5 input type="name" class=" font-awesome">{{ $order_has_products['name'] }}</h5>
                                            <input type="hidden" name="products[{{$id}}][name]" value="{{ $order_has_products['name'] }}">
                                        </div>
                                    </div>
                                <td data-th="Price">{{ $order_has_products['cost'] }}
                                    <input type="hidden" name="products[{{$id}}][cost]" value="{{ $order_has_products['cost'] }}">
                                </td>

{{--                                <td data-th="cart_quantity">--}}
{{--                                <div class="cart_quantity_button">--}}
{{--                                    <a class="cart_quantity_up" href="{{route('update_cart_Inc',$id)}}"> + </a>--}}
{{--                                    <button type="button" class ="btn-outline-info" onclick="addQty(5,10);">+</button>--}}
{{--                                    <input  class="cart_quantity_input"type="text" value="{{ $order_has_products['number'] }}"autocomplete="off" size="2">--}}
{{--                                    <input type="hidden" name="products[{{$id}}][number]" value="{{ $order_has_products['number'] }}">--}}
{{--                                    <a class="cart_quantity_down" href=""> - </a>--}}
{{--                                </div>--}}
                                <td data-th="Quantity">
                                    <input type="number" value="{{ $order_has_products['number'] }}" min="0" class="form-control number" onchange="change(this,{{$id}})" >
                                    <input type="hidden" name="products[{{$id}}][number]" value="{{ $order_has_products['number'] }}">
                                </td>

                                </td>
                                <td data-th="total" class="text-center">${{ $order_has_products['cost'] * $order_has_products['number'] }}
                                    </td>
                                <td class="actions" data-th="">
{{--                                    <button class="btn btn-info btn-sm update-cart" data-id="{{ $id }}">คำนวณ<i class="fa fa-refresh"></i></button>--}}
                                    <button class="btn btn-danger btn-sm remove-from-cart" data-id="{{ $id }}">ลบ<i class="fa fa-trash-o"></i></button>
                                </td>
                    </td>

                                </td>
                                </tr>


                   @endforeach
                    @endif


                    <tfoot>
                    <tr class="visible-xs">
                        <td class="text-center"><strong>Total : {{$total}} </strong>
{{--                            <input type="" name="products[{{$id}}]['Total_price']" value="{{ $order_has_products['Total_price'] }}"></td>--}}
                    </tr>
                    <tr>
                        <td colspan="2" class="hidden-xs"></td>
                    </tr>
                    </tfoot>
                </table>


                        </tbody>
                        <tfoot>

                <tr>
                    <td><a href="{{ route('products.index') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> เพิ่มผ้าลงตะกร้า</a>
{{--                        <a href="{{ url('delect') }}" class="btn btn-danger"><i class="fa fa-angle-left"></i>checkout</a><br><br>--}}
{{--                        <a href="{{ url('delect')}}" class="btn btn-warning btn-block text-center" role="button">หยิบลงตะกร้าผ้า</a>--}}

                        <div style="margin:auto;width:500px;">
                            <h5> <font color="blue"> วันและเวลาที่ต้องการให้ไปรับผ้า</font></h5> <br><br>
                            วันที่ : <input type="date" name="order_date" id="order_date" class="font-weight-normal "   min ="2020-04-22" >  <span class="validity"></span>
                        เวลา : <input type="time"  name="order_time" id="order_time" class="font-weight-normal"><br><br>
                            <font color="red" >หมายเหตุ เวลาขั้นต่ำ 8 ชั่วโมง</font><br>
                            <font color="blue" >เลือกสายรถที่คุณต้องการให้ไปรับ :</font>
                            <select name="employee_EmpId" id="employee_EmpId">
                                <option value="0" selected>-โปรดเลือกรถ-รับส่งผ้าของคุณ-</option>
                                <option value="4">สายสีเขียว</option>
                                <option value="5">สายสีแดง</option>
                                <option value="6">สีน้ำเงิน</option>
                            </select>
                        </div>
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRE03W-9gFaX1y3qDvNxeBPCWa3B98wfxr8PSK2p6H7JXfgfBVY&usqp=CAU"width="42px"height="40px">
                        <font color="green" >: สายสีเขียว</font> => โนนม่วง-หลังมอ-กังสดาล-มหาวิทยาลัยขอนแก่น <br>
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQjQbOd-KoOAWP4OG-SjR4l6X6GrXvtvd55FnQbOM_izpNFt9Gr&usqp=CAU"width="42px"height="40px">
                        <font color="red" >: สายสีแดง</font> => ในเมืองขอนแก่น <br>
                        <img src="https://agora.xtec.cat/ceip-catalunya-navarcles/wp-content/uploads/usu727/2018/11/f093897d0e67b325765d0b57063c39f4.png"width="42px"height="40px">
                        <font color="blue" >: สายสีน้ำเงิน</font> => รอบเมืองขอนแก่น
{{--                        <input type="text" name="dateInput" id="dateInput" value=""/>--}}
{{--                        <p>Date: <input type="text" id="datepicker"></p>--}}

                    </td>
                    <div class="row">
                        <div class="col-md-3">
                    <div class="form-group">

                    </div>
                        </div>
                    </div>
                    <div class='col-md-5'>
                        <div class="form-group">
                            <div class='input-group date' id='datetime7'>
{{--                                <input type='text' class="form-control" />--}}
                                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
                            </div>
                        </div>
                    </div>

                    <td colspan="2" class="hidden-xs"></td>
                    <td class="hidden-xs text-center"><strong></strong></td>
                </tr>
                </tfoot>
                </table>
                <br><br>

                {!! Form::submit('บันทึก', ['class' => 'btn btn-primary']) !!}
                <a href="{{ url('delect') }}" class="btn btn-danger"><i class="fa fa-angle-left"></i>checkout</a>

                          <a href ="{{route('shopinfo')}}" class="btn btn-success" ><i class="fa fa-angle-left"></i>กลับ</a>




                {!! Form::close() !!}



        </div>
    </div>
    </div>


@endsection


@section('script')
{{--    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>--}}
{{--    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>--}}
{{--    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />--}}
{{--    <script src="/js/moment.min.js"></script>--}}
{{--    <script src="/js/bootstrap-datetimepicker.min.js"></script>--}}

    <script type="text/javascript" >

        $(".remove-from-cart").click(function (e) {
            e.preventDefault();

            var ele = $(this);

            if(confirm("คุณต้องการลบรายการนี้ทิ้งใช่หรือไม่ ?")) {
                $.ajax({
                    url: '{{ url('remove-from-cart') }}',
                    method: "DELETE",
                    data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                    success: function (response) {
                        window.location.reload();
                    }
                });
            }
        });

        function change(e,id) {
            var ele = $(e);


            $.ajax({

                url: '{{ url('update-cart') }}',
                method: "patch",

                data: {
                    _token: '{{ csrf_token() }}', id: id, number: ele.parents("tr").find(".number").val()
                },

                success: function (response) {
                    window.location.reload();

                }

            });
        }
        // $('#datepicker').datepicker({
        //     format :"dd/mm/yyyy",
        //     minDate: '+1",
        // });
        // $(function(){
        //
        //         $( "#datepicker" ).datepicker({
        //         format: "mm/dd/yy",
        //         weekStart: 0,
        //         calendarWeeks: true,
        //         autoclose: true,
        //         todayHighlight: true,
        //         rtl: true,
        //         orientation: "auto"
        //     });
        // });


        // $('#enddate').datetimepicker().on('dp.change', function (e) {
        //     var decrementDay = moment(new Date(e.date));
        //     decrementDay.subtract(1, 'days');
        //     $('#startdate').data('DateTimePicker').maxDate(decrementDay);
        //     $(this).data("DateTimePicker").hide();
        // });


        {{--$(".remove").click(function (e) {--}}
        {{--    e.preventDefault();--}}

        {{--    var ele = $(this);--}}

        {{--    if(confirm("คุณต้องการลบรายการนี้ทิ้งใช่หรือไม่ ?")) {--}}
        {{--        $.ajax({--}}
        {{--            url: '{{ url('remove') }}',--}}
        {{--            method: "DELETE",--}}
        {{--            success: function (response) {--}}
        {{--                window.location.reload();--}}
        {{--            }--}}
        {{--        });--}}
        {{--    }--}}
        {{--});--}}
        {{--$(".remove").click(function (e) {--}}
        {{--    e.preventDefault();--}}

        {{--    var ele = $(this);--}}

        {{--    if(confirm("คุณต้องการล้างตะกร้าของคุณหรือไม่ ?")) {--}}
        {{--        $.ajax({--}}
        {{--            url: '{{ url('remove') }}',--}}
        {{--            method: "DELETE",--}}
        {{--            data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},--}}
        {{--            success: function (response) {--}}
        {{--                window.location.reload();--}}
        {{--            }--}}
        {{--        });--}}
        {{--    }--}}
        {{--});--}}


   </script>


@endsection
