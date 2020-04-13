
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('assets/css/sb-admin-2.min.css')}}" rel="stylesheet">

@yield('style')
</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Pavara - Laundry </div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="shopinfo">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>หน้าหลัก</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Interface
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-cog"></i>
                <span>มาซักผ้ากันเถอะ</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-3 collapse-inner rounded">
                    <h1 class="collapse-header font-weight-bolder text-danger">ราบการ</h1>
                    <a class="collapse-item" href="{{route('products.index')}}">ซักผ้า</a>
                    <a class="collapse-item" href="{{ url('cart') }}">ตะกร้าผ้า</a>
                    <a class="collapse-item" href="">ตรวจสอบสถานะของผ้า</a>

                </div>
            </div>
        </li>


    @if( Auth::user()->user_type==2)
        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-fw fa-wrench"></i>
                <span>สำหรับผู้ดูแลระบบ</span>
            </a>
            <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Custom Utilities:</h6>
                    <a class="collapse-item" href="{{route('products.index')}}">รายการผ้าทั้งหมด</a>
                    <a class="collapse-item" href="{{route('product_types.index')}}">ประเภทของผ้า</a>
                    <a class="collapse-item" href="{{route('users.index')}}">รายชื่อสมาชิก</a>
                    <a class="collapse-item" href="{{route('Order.index')}}">สรุปผลรายการ</a>
                    <a class="collapse-item" href="{{route('admin.dashboard')}}">Admin</a>
                    <a class="collapse-item" href="#">อื่นๆ</a>
                </div>

            </div>
        </li>
    @else

    @endif


        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Addons
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                <i class="fas fa-fw fa-folder"></i>
                <span>หน้า</span>
            </a>
            <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Login Screens:</h6>

                    <a class="collapse-item" href="#">ลงทะเบียน</a>
                    <a class="collapse-item" href="#">ลืมรหัสผ่าน</a>
                    <div class="collapse-divider"></div>

                </div>
            </div>
        </li>

        <!-- Nav Item - Charts -->
        <li class="nav-item">
            <a class="nav-link" href="{{url('profile')}}">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>ข้อมูลผู้ใช้งาน</span></a>
        </li>

        <!-- Nav Item - Tables -->
        <li class="nav-item">
            <a class="nav-link" href="{{url('tabledetails')}}">
                <i class="fas fa-fw fa-table"></i>
                <span>ตารางเก็บข้อมูลผ้า</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Search -->
                <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>


                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto fixed-left ">


                    <!-- Nav Item - Search Dropdown (Visible Only XS) -->

                    <li class="nav-item dropdown no-arrow d-sm-none">
                        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-search fa-fw"></i>
                        </a>

                                    <!-- Dropdown - Messages -->
                        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                            <form class="form-inline mr-auto w-100 navbar-search">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>

                    <!-- Nav Item - Alerts -->
                    <li class="nav-item dropdown no-arrow mx-1">
                        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-bell fa-fw"></i>

                            <!-- Counter - Alerts -->

                        </a>
                        <!-- Dropdown - Alerts -->
                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                            <h6 class="dropdown-header">
                                Alerts Center
                            </h6>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-primary">
                                        <i class="fas fa-file-alt text-white"></i>
                                    </div>
                                </div>

                            </a>
                            <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                        </div>
                    </li>

                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-12 main-section " style="margin-top: 16px;">
                            <div class="dropdown">
                                <button type="button" class="btn btn-info" data-toggle="dropdown">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i><span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>

                                </button>
                                <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                                    <h6 class="dropdown-header font-weight-bolder">
                                        CART
                                    </h6>

                                        <div class="row total-header-section" style="width: 375px">
                                        <div class="col-lg-6 col-sm-6 col-6">
{{--                                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>--}}
                                            <a class=" badge-danger" style="width: 2px"></a>

                                                @if(session('cart'))
                                                    @foreach(session('cart') as $id => $details)
                                                        <div class="row cart-detail">
                                        <div class="col-lg-5 col-sm-5 col-5 cart-detail-img" style="width: 350px">
                    <img src="https://image.flaticon.com/icons/svg/1162/1162493.svg "width="30px" /><br>
                                            {{--                               <div class="col-lg-4 col-sm-0 col-0 cart-detail-product" >--}}
                    <h6 class="text-danger fa-circle-o-notch" style="width: 600px" >{{ $details['name'] }}  :  {{ $details['cost'] }} $    จำนวน:  {{ $details['number'] }} ชิ้น </h6>
{{--                    <span class="price text-info"> ${{ $details['cost'] }}</span><br>--}}
{{--                        จำนวน:  {{ $details['number'] }} ชิ้น </h6>--}}

                </div>


            </div>


                                        @endforeach
                                        @endif
                                            <div class="row">
                                                <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                                                    <a href="{{ url('cart') }}" class="btn btn-primary btn-lg btn-sm ">View all</a>
                                                </div>
                                            </div>
                                        </span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>


                        <!-- Dropdown - Messages -->
                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                            <h6 class="dropdown-header">
                                Message Center
                            </h6>

                            <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                        </div>
                    </li>

                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                          <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>

                            <img class="img-profile rounded-circle" src="https://d1nhio0ox7pgb.cloudfront.net/_img/o_collection_png/green_dark_grey/512x512/plain/user.png">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="{{route('shopinfo')}}">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Profile
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                Settings
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                Activity Log
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('login') }}" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                    </li>


                </ul>

            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->



                    <!-- Card Body -->
                <head>
                    <meta name="viewport" content="width=device-width, initial-scale=1">

                    <style>
                        body {font-family: Arial, Helvetica, "sans-serif";}
                        * {box-sizing: border-box;}

                        /* Button used to open the chat form - fixed at the bottom of the page */
                        .open-button {
                            background-color: #2a96a5;
                            color: white;
                            padding: 10px 15px;
                            border: none;
                            cursor: pointer;
                            opacity: 0.8;
                            position: fixed;
                            bottom: 23px;
                            right: 28px;
                            width: 280px;
                        }

                        /* The popup chat - hidden by default */
                        .chat-popup {
                            display: none;
                            position: fixed;
                            bottom: 0;
                            right: 15px;
                            border: 3px solid #f1f1f1;
                            z-index: 9;
                        }

                        /* Add styles to the form container */
                        .form-container {
                            max-width: 300px;
                            padding: 10px;
                            background-color: white;
                        }

                        /* Full-width textarea */
                        .form-container textarea {
                            width: 100%;
                            padding: 15px;
                            margin: 5px 0 22px 0;
                            border: none;
                            background: #f1f1f1;
                            resize: none;
                            min-height: 200px;
                        }

                        /* When the textarea gets focus, do something */
                        .form-container textarea:focus {
                            background-color: #ddd;
                            outline: none;
                        }

                        /* Set a style for the submit/send button */
                        .form-container .btn {
                            background-color: #4CAF50;
                            color: white;
                            padding: 5px 10px;
                            border: none;
                            cursor: pointer;
                            width: 100%;
                            margin-bottom:10px;
                            opacity: 0.8;
                        }

                        /* Add a red background color to the cancel button */
                        .form-container .cancel {
                            background-color: red;
                        }

                        /* Add some hover effects to buttons */
                        .form-container .btn:hover, .open-button:hover {
                            /*width: 10px;*/
                            opacity: 1;
                        }
                    </style>
                </head>
                <body>



                <button class="open-button" onclick="openForm()"><img src ="https://image.flaticon.com/icons/svg/942/942751.svg" width="30px"></button>

                <div class="chat-popup" id="myForm">
                    <form action="/action_page.php" class="form-container">
                        <h1>Chat</h1>

                        <label for="msg"><b>Message</b></label>
                        <textarea placeholder="Type message.." name="msg" required></textarea>

                        <button type="submit col=sm" class="btn">Send</button>
                        <button type="button col=sm" class="btn cancel" onclick="closeForm()">Close</button>
                    </form>
                </div>

                <script>
                    function openForm() {
                        document.getElementById("myForm").style.display = "block";
                    }

                    function closeForm() {
                        document.getElementById("myForm").style.display = "none";
                    }
                </script>

                </body>
                <!-- Card Body -->
                    @yield('content')
{{--                    <div class="card-body">--}}
{{--                        <div class="card shadow mb-40">--}}
{{--                            <div class="card-header py-50">--}}

{{--                                <img src ="https://scontent.fbkk10-1.fna.fbcdn.net/v/t31.0-8/26116456_2000617433549702_59476727863087627_o.jpg?_nc_cat=102&_nc_oc=AQmgTXKSTm4IQ24Ay6wI8yAzb7QhkX_YS4Y1qPL7Z0K6fjLV5aNOjczh7HtI7_qkix4&_nc_ht=scontent.fbkk10-1.fna&oh=dbf77b957fc6ccdb629805601e28a9e7&oe=5DFD0FA7" width="100%" height="100%">--}}
{{--                            </div>--}}
{{--                            <div class="mt-10 text-center small">--}}


{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <center>  <a class="btn btn-danger" href="login.html" role="button">ตรวจสอบสถานะคลิกที่นี่</a></center><br>--}}

{{--            <div style="text-align:center">--}}
{{--                <img src="https://www.baanandbeyond.com/media/catalog/product/cache/image/550x/beff4985b56e3afdbeabfc89641a4582/6/0/60276684.jpg"width="400px"height="350">--}}
{{--                <img src="http://rachayok.com/wp-content/uploads/2016/05/RACHAYOK-CATALOUGE_-Apr4-004-07-6-1.jpg"width="400px"height="350">--}}
{{--                <img src="https://catalogspa.com/wp-content/uploads/2014/02/awesome-spa-interior-design-1024x703.jpg"width="400px"height="350"><br><br>--}}
{{--                <center>  <a class="btn btn-info" href="washing.html" role="button">Washing</a></center>--}}
{{--            </div>--}}


            <div class="card-body">
                <p></p>
                <p class="mb-0"></p>
            </div>
        </div>

    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
        </div>
    </div>
</footer>

<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <h5 class="modal-title" id="exampleModalLabel">ออกจากระบบ ?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"></span>
                </button>
            </div>
            <div class="modal-body">  เลือก "Logout" ด้านล่างหากคุณพร้อมที่จะจบเซสชั่นปัจจุบันของคุณ.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <div class="dropdown-divider"></div>
                <a href="{{ route('login') }}" class="btn btn-secondary" onclick="event.preventDefault();
                                                         document.getElementById('logout-form-2').submit();">
                    <i class="ni ni-user-run"></i>
                    <span>{{ __('Logout') }}</span>
                </a>
                <form id="logout-form-2" action="{{ route('logout') }}" method="POST"
                      style="display: none;">
                    @csrf
                </form>
            </div>
            </li>
            </div>

        </div>
    </div>
</div>



<!-- Bootstrap core JavaScript-->

<script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>


@yield('script')
</body>

</html>
