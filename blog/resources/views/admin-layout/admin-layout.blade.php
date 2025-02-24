<?php
//     if(Auth::user() == null){
//       return redirect()->route('home');
//    }
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>

    <!-- Custom fonts for this template -->
    <link href="{{url('../resources/views/admin-layout/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{url('../resources/views/admin-layout/css/sb-admin-2.min.css')}}" rel="stylesheet">
    <!-- Custom styles for this page -->
    <link href="{{url('../resources/views/admin-layout/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    {{-- jquery --}}
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</head>
@if(Auth::user() == null)
  <script>window.location = "{{ route('home') }}";</script>
@else
  @if (Auth::user()->role_id == 1)
      <script>window.location = "{{ url('/') }}";</script>
  @endif
@endif
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand align-items-center justify-content-center mb-5" href="{{route('admins.index')}}">
                <div class="sidebar-brand-icon">
                    <img width="50px" src="https://i.pinimg.com/170x/3c/63/1a/3c631aab6d165c9abafa4e387ebf6936.jpg" alt="avatar">
                </div>
                <div><span id="name">Admin</span></div>
                <div class="sidebar-brand-text mx-3">@yield('admin-name')</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
    
                <!-- Divider -->
                <hr class="sidebar-divider my-0">
    
                <!-- Nav Item - Dashboard -->
                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTwoDashboard" aria-expanded="true"
                        aria-controls="collapseTwo">
                        <i class="fas fa-chart-line"></i>
                        <span>Dashboard</span>
                    </a>
                    <div id="collapseTwoDashboard" class="collapse" aria-labelledby="headingTwo"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item" href="{{url('/report/bestsale')}}">Bán chạy</a>
                            <a class="collapse-item" href="{{url('/report/bestview')}}">Xem nhiều</a>
                            <a class="collapse-item" href="{{url('/report/sales')}}">Doanh thu</a>
                        </div>
                    </div>
                </li>
    
                <hr class="sidebar-divider my-0">
                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
                        aria-controls="collapseTwo">
                        <i class="fas fa-tshirt"></i>
                        <span>Sản phẩm</span>
                    </a>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item" href="{{url('/admin/ListProduct')}}">Danh sách</a>
                            <a class="collapse-item" href="{{url('/admin/UploadProduct')}}">Thêm mới</a>
                        </div>
                    </div>
                </li>
    
                {{--  manufacture --}}
                <hr class="sidebar-divider my-0">
                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="collapse" data-target="#Manufacutre" aria-expanded="true"
                        aria-controls="collapseTwo">
                        <i class="fas fa-shopping-cart"></i>
                        <span>Manufacutre</span>
                    </a>
                    <div id="Manufacutre" class="collapse" aria-labelledby="headingTwo"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item" href="{{url('/admin/manufacuters')}}">Danh Sách</a>
                            <a class="collapse-item" href="{{url('/admin/manufacuters/create')}}">Thêm mới</a>                       
                        </div>
                    </div>
                </li>
    
                 {{-- typeproduct --}}
                 <hr class="sidebar-divider my-0">
                 <li class="nav-item">
                     <a class="nav-link" href="#" data-toggle="collapse" data-target="#TypeProduct" aria-expanded="true"
                         aria-controls="collapseTwo">
                         <i class="fas fa-shopping-cart"></i>
                         <span>TypeProduct</span>
                     </a>
                     <div id="TypeProduct" class="collapse" aria-labelledby="headingTwo"
                         data-parent="#accordionSidebar">
                         <div class="bg-white py-2 collapse-inner rounded">
                             <a class="collapse-item" href="{{route('typeproducts.index')}}">Danh Sách</a>
                             <a class="collapse-item" href="{{route('typeproducts.create')}}">Thêm mới</a>                       
                         </div>
                     </div>
                 </li>

                 {{-- banner --}}
                 <hr class="sidebar-divider my-0">
                 <li class="nav-item">
                     <a class="nav-link" href="#" data-toggle="collapse" data-target="#Banner" aria-expanded="true"
                         aria-controls="collapseTwo">
                         <i class="fas fa-shopping-cart"></i>
                         <span>Banner</span>
                     </a>
                     <div id="Banner" class="collapse" aria-labelledby="headingTwo"
                         data-parent="#accordionSidebar">
                         <div class="bg-white py-2 collapse-inner rounded">
                             <a class="collapse-item" href="{{route('banners.index')}}">Danh Sách</a>
                             <a class="collapse-item" href="{{route('banners.create')}}">Thêm mới</a>                       
                         </div>
                     </div>
                 </li>
    
    
    
                <hr class="sidebar-divider my-0">
                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="collapse" data-target="#DonHang" aria-expanded="true"
                        aria-controls="collapseTwo">
                        <i class="fas fa-shopping-cart"></i>
                        <span>Đơn hàng</span>
                    </a>
                    <div id="DonHang" class="collapse" aria-labelledby="headingTwo"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item" href="{{url('/bill/unpaid')}}">Chưa xác nhận</a>
                            <a class="collapse-item" href="{{url('/bill/paid')}}">Đang vận chuyển</a>
                            <a class="collapse-item" href="{{url('/bill/BillSuccess')}}">Hoàn thành</a>
                        </div>
                    </div>
                </li>
                
                @can('add-user')
                <hr class="sidebar-divider my-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('users.index')}}">
                        <i class="fas fa-shield-alt"></i>
                        <span>Phân quyền</span></a>
                </li>
                @endcan
                <hr class="sidebar-divider my-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/contact')}}">
                        <i class="far fa-address-card"></i>
                        <span>Thông tin liên hệ</span></a>
                </li>
    
                <!-- Sidebar Toggler (Sidebar) -->
                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>
            </ul>
            <!-- End of Sidebar -->
    
            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">
    
                <!-- Topbar -->
                    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
    
                        <!-- Topbar Navbar -->
                        <ul class="navbar-nav ml-auto">
                            @php
                                $DonHangChuaXacNhan = count(DB::table('bills')->where('status',0)->get());
                            @endphp
                            <!-- Nav Item - Messages -->
                            <li class="nav-item dropdown no-arrow mx-1">
                                <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-envelope fa-fw"></i>
                                    <!-- Counter - Messages -->
                                    @if ($DonHangChuaXacNhan > 0)
                                        <span class="badge badge-danger badge-counter">{{$DonHangChuaXacNhan}}</span>
                                    @endif
                                </a>
                                <!-- Dropdown - Messages -->
                                <div id="messagesDropdown-ct" class="dropdown-list dropdown-menu dropdown-menu-right shadow animated-grow-in"
                                    aria-labelledby="messagesDropdown">
                                    <h6 class="dropdown-header">
                                        Message Center
                                    </h6>
                                     @if ($DonHangChuaXacNhan > 0)
                                        <a class="dropdown-item d-flex align-items-center" href="{{url('/bill/unpaid')}}">
                                            <div class="dropdown-list-image mr-3">
                                                <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                                    alt="">
                                                <div class="status-indicator bg-success"></div>
                                            </div>
                                            <div>
                                                <div class="text-truncate">Bạn có {{$DonHangChuaXacNhan}} đơn hàng chưa xác nhận</div>
                                                <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                            </div>
                                        </a>
                                    @else
                                        <a class="dropdown-item d-flex align-items-center" href="javascript:;">
                                            <div class="dropdown-list-image mr-3">
                                                <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                                    alt="">
                                                <div class="status-indicator bg-success"></div>
                                            </div>
                                            <div>
                                                <div class="text-truncate">Không có thông báo :))</div>
                                                <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                            </div>
                                        </a>
                                    @endif
                                </div>
                            </li>
    
                            <div class="topbar-divider d-none d-sm-block"></div>
    
                            <!-- Nav Item - User Information -->
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline text-gray-600 small"><i class="fas fa-cog fa-2x"></i></span>
                                </a>
                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                    aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="{{route('admins.index')}}">
                                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Profile
                                    </a>
                                     <a class="dropdown-item" href="{{url('/')}}">
                                        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Public
                                    </a>                                   
                                    <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{route('logout')}}" data-toggle="modal" data-target="#logoutModal">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Logout
                                    </a>
                                </div>
                            </li>
    
                        </ul>
    
                    </nav>
                    <!-- End of Topbar -->
    
                <!-- Main Content -->
                <div id="content">
                    {{-- @if (session()->has('danger'))
                        <div class="alert alert-danger">

                            {{session()->get('danger')}}

                        </div>
                    @endif --}}
                    <div class="container-fluid">
                        @yield('content')
                    </div>
                </div>
                <!-- End of Main Content -->
    
                <!-- Footer -->
                <footer class="bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Nhoms4 Website 2021</span>
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
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
         
                        <a class="btn btn-primary" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
    
                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                         @csrf
                     </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JavaScript-->
        <script src="{{url('../resources/views/admin-layout/vendor/jquery/jquery.min.js')}}"></script>
        <script src="{{url('../resources/views/admin-layout/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <!-- Core plugin JavaScript-->
        <script src="{{url('../resources/views/admin-layout/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
        <!-- Custom scripts for all pages-->
        <script src="{{url('../resources/views/admin-layout/js/sb-admin-2.min.js')}}"></script>
        <!-- Page level plugins -->
        <script src="{{url('../resources/views/admin-layout/vendor/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{url('../resources/views/admin-layout/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
    
        <!-- Page level custom scripts -->
        <script src="{{url('../resources/views/admin-layout/js/demo/datatables-demo.js')}}"></script>
    </body>
    
</html>
