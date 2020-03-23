@extends('layouts.argon_template')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="mb-0">เแก้ไขข้อมูล {{$product->name}}</h3>
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
                    {!!  Form::model($product, ['url' => route('products.update',$product->id),'method' => 'put'])!!}
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                {!! Form::label('name', 'ชื่อ'); !!}
                                {!! Form::text('name', null, ['class' => 'form-control']); !!}
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                {!! Form::label('product_type_id', 'ประเภทชื่อสินค้า'); !!}
                                {!! Form::select('product_type_id', $productTypes,null,
                                       ['class' => 'form-control']); !!}
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                {!! Form::label('cost', 'ราคา'); !!}
                                {!! Form::text('cost', null, ['class' => 'form-control']); !!}
                            </div>
                        </div>

                        {{--                        <div class="col">--}}
                        {{--                            <div class="form-group">--}}
                        {{--                                {!! Form::label('price', 'จำนวน'); !!}--}}
                        {{--                                {!! Form::text('price', null, ['class' => 'form-control']); !!}--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                        <div class="col-6">
                            <div class="form-group">
                                {!! Form::label('quantity', 'จำนวนจำกัด'); !!}
                                {!! Form::text('quantity', null, ['class' => 'form-control']); !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            {!! Form::label('image', 'รูปภาพ'); !!}
                            {!! Form::file('image', null, ['class' => 'form-control-file']) !!}
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col">
                            {!! Form::submit('บันทึก', ['class' => 'btn btn-primary']) !!}
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
