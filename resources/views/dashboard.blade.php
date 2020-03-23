@extends('layouts.argon_template')

@section('content')
    <div class="header-body">



{{--  รู ูปภาพตกแต่งข--}}
    <div class="card-body">
        <div class="card shadow mb-40 ">
            <div class="card-header py-50">

                <img src ="https://pavaraclean.com/promotion/prm_5b118718d62ae.png" width="100%" height="100%">
            </div>
            <div class="mt-10 text-center small">


            </div>
        </div>
    </div>
    </div>

    <center>  <a class="btn btn-danger" href="login.html" role="button">ตรวจสอบสถานะคลิกที่นี่</a></center><br>

    <div style="text-align:center">
        <img src="https://www.baanandbeyond.com/media/catalog/product/cache/image/550x/beff4985b56e3afdbeabfc89641a4582/6/0/60276684.jpg"width="400px"height="350">
        <img src="http://rachayok.com/wp-content/uploads/2016/05/RACHAYOK-CATALOUGE_-Apr4-004-07-6-1.jpg"width="400px"height="350">
        <img src="https://catalogspa.com/wp-content/uploads/2014/02/awesome-spa-interior-design-1024x703.jpg"width="400px"height="350"><br><br>
        <center>  <a class="btn btn-info" href="{{route('products.index')}}" role="button">Washing</a></center>
    </div>

@endsection
