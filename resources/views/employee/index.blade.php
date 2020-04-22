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
                            <h3 class="mb-0">สมัครสมาชิกพนักงาน</h3>
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
                    {!! Form::open(['url' =>route('employee.store') ,'files'=>true]) !!}
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                {!! Form::label('name', 'ชื่อ'); !!}
                                {!! Form::text('name', null, ['class' => 'form-control']); !!}
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                {!! Form::label('email', 'Email'); !!}
                                {!! Form::text('email', null, ['class' => 'form-control','required ' =>'autocomplete']); !!}
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password :') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                {!! Form::label('tel', 'Tel'); !!}
                                {!! Form::text('tel', null, ['class' => 'form-control']); !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                {{--                            {!! Form::label('employee_EmpId', 'บุคคล'); !!}--}}
                                {{--                            {!! Form::text('employee_EmpId', null, ['class' => 'form-control']); !!}--}}
                                พนักงาน <br>
                                <select name="user_type" id="user_type">
                                    <option value="0" selected>-โปรดเลือก-</option>
                                    <option value="3">Diver</option>
                                    <option value="2">Admin</option>


                                </select>
                            </div>
                        </div>


                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col">
                            {!! Form::submit('สมัครพนักงานใหม่', ['class' => 'btn btn-primary']) !!}
{{--                            <a href="{{route('show_detail.index')}}" class="btn btn btn-danger"><i class="fa fa-eye-dropper"></i>ตารางการรับผ้า</a>--}}
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
