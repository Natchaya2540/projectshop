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
                                    <input type="number" value="{{ $order_has_products['number'] }}" class="form-control number" />
                                    <input type="hidden" name="products[{{$id}}][number]" value="{{ $order_has_products['number'] }}">
                                </td>

                                </td>
                                <td data-th="total" class="text-center">${{ $order_has_products['cost'] * $order_has_products['number'] }}
                                    </td>
                                <td class="actions" data-th="">
                                    <button class="btn btn-info btn-sm update-cart" data-id="{{ $id }}">คำนวณ<i class="fa fa-refresh"></i></button>
                                    <button class="btn btn-danger btn-sm remove-from-cart" data-id="{{ $id }}">ลบ<i class="fa fa-trash-o"></i></button>
                                </td>
                    </td>

                                </td>
                                </tr>


                   @endforeach
                    @endif


                    <tfoot>
                    <tr class="visible-xs">
                        <td class="text-center"><strong>Total : {{$total}} </strong></td>
                    </tr>
                    <tr>
                        <td colspan="2" class="hidden-xs"></td>
                    </tr>
                    </tfoot>
                </table>


                        </tbody>
                        <tfoot>

                <tr>
                    <td><a href="{{ route('products.index') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> เพิ่มผ้าลงตะกร้า</a><br><br>

                       วันและเวลาที่ต้องการให้ไปรับผ้า <br>
                       วันที่ : <input type="date" name="order_date" id="order_date" class="font-weight-normal " >
                       เวลา : <input type="time" name="order_time" id="order_time" class="font-weight-normal">




                    </td>

                    <td colspan="2" class="hidden-xs"></td>
                    <td class="hidden-xs text-center"><strong></strong></td>
                </tr>
                </tfoot>
                </table>
                <br><br>
                {!! Form::submit('บันทึก', ['class' => 'btn btn-primary']) !!}
           <a href ="{{route('shopinfo')}}" class="btn btn-info" >กลับ</a>
                {!! Form::close() !!}



        </div>
    </div>
    </div>
@endsection


@section('script')

    <script type="text/javascript">
        // function addQty(id,number) {
        //     alert (id+number);
        // }
        $(".update-cart").click(function (e) {
            e.preventDefault();

            var ele = $(this);

            $.ajax({
                url: '{{ url('update-cart') }}',
                method: "patch",
                data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id"), number: ele.parents("tr").find(".number").val()},
                success: function (response) {
                    window.location.reload();

                }
            });
        });

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

    </script>

@endsection
