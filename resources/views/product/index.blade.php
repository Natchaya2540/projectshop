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
    @if( Auth::user()->user_type==2)
        <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col">
                    <h3 class="mb-0">รายการผ้าทั้งหมด({{count($products)}} รายการ)</h3>
                </div>

                <div class="col text-right">
                    <a href="{{route('products.create')}}" class="btn btn-success"><i class="fa fa-plus"></i> เพิ่มข้อมูล</a>
                </div>

            </div>
        </div>
           <div class="card-body pt-0">
        <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                        <tr>
                            <th scope="col">รหัส</th>
                            <th scope="col">ชื่อสินค้า</th>
                            <th scope="col">ประเภท</th>
                            <th scope="col">ราคา</th>
                            @auth
                            <th scope="col">ราคาทุน</th>
                            <th scope="col">รูปภาพ</th>
                              @endauth
                            <th scope="col" style="width:20%"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->productType->name}}</td>
                                <td>{{$item->cost}}</td>
                                @auth
                                <td>{{$item->quantity}}</td>
                                <td>{{$item->image}}</td>
                                <td>
                                @endauth
                                @auth
{{--                                    <td>{{$item->quantity}}</td>--}}
                                                                      <td>
                                        <form class="delete" action="{{route('products.destroy',$item->id)}}"
                                              method="POST">
                                            <input type="hidden" name="_method" value="DELETE">
                                            {{ csrf_field() }}
                                            <a href="{{route('products.edit',$item->id)}}"
                                               class="btn btn-sm btn-outline-success"> <i
                                                    class="fa fa-edit"></i>
                                                แก้ไข</a>
                                            <button type="submit" class="btn btn-sm btn-outline-danger  glyphicon glyphicon-trash"><i
                                                    class="fa fa-trash  "></i> ลบ
                                            </button>
                                        </form>
                                    </td>

                                @else
                                    <td>
                                        {!! Form::text('number', null, ['class' => 'form-control']); !!}
                                        <a href="#" class="btn btn-sm btn-outline-info"><i
                                                class="fa fa-shopping-cart"></i>เพิ่มลงตะกร้า</a>
                                    </td>


                                @endauth
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
            @else

            @endif

{{--        @if( Auth::user()->user_type==1)--}}

{{--            @else--}}
{{--            bbbbbb--}}
{{--            @endif--}}

    </div>
    </div>



    <div class="container products">

        @if(session('success'))

            <div class="alert alert-success">
                {{ session('success') }}
            </div>

        @endif


@endauth
{{--            ตะกร้าจ้าาาา--}}
           <div>
    </div>
        <br>
            <h1 class="mb-0 text-primary font-weight-bolder ">มาซักผ้ากันเถอะ({{count($products)}} รายการ)</h1>

            <br>
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-12 main-section">
{{--                    <div class="dropdown">--}}
{{--                        <button type="button" class="btn btn-info" data-toggle="dropdown">--}}
{{--                            <i class="fa fa-shopping-cart" aria-hidden="true"></i> ตะกร้าผ้า<span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>--}}

{{--                        </button>--}}
{{--                        <button> <a href="{{ url('cart') }}" class="btn btn-primary btn-block ">View all</a></button>--}}
{{--                    </div>--}}

                    <div class="dropdown-menu">
                        <div class="row total-header-section">
                            <div class="col-lg-6 col-sm-6 col-6">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i><span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                            </div></div>

                                            </div>
                </div>
            </div>
            <br>
        <div class="row">

            @foreach($products as $product)
                <div class="col-xs-18 col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <img src="images/products/product-{{ $product->id}}.jpg" width="250" height="250">
                        <div class="caption">
                            <h4 class="font-weight-bolder">{{ $product->name }}</h4>
                          <p> ประเภท :{{ str_limit(strtolower($product->productType->name), 50) }}</p>
{{--                            <input type="number" value="{{ $product['number'] }}" class=" col-sm-5 form-control number">--}}

                            <p><strong>Price: </strong> {{ $product->cost }}$</p>
                            <p class="btn-holder"><a href="{{ url('add-to-cart/'.$product->id) }}" class="btn btn-warning btn-block text-center" role="button">หยิบลงตะกร้าผ้า</a> </p>
                        </div>
                    </div>
                </div>
            @endforeach


      </div>
    </div>












                @endsection

@section('script')
    <script>
        $(".delete").on("submit", function () {
            return confirm("คุณต้องการลบข้อมูลใช่หรือไม่ ?");
        });
    </script>
@endsection
