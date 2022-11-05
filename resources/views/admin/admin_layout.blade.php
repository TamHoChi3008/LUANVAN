<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Voler Admin Dashboard</title>

    <link rel="stylesheet" href="{{asset('../backend/assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('../backend/assets/vendors/chartjs/Chart.min.css')}}">
    <link rel="stylesheet" href="{{asset('../backend/assets/vendors/perfect-scrollbar/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('../backend/assets/css/app.css')}}">
    <link rel="shortcut icon" href="{{asset('../backend/assets/images/favicon.svg" type="image/x-icon')}}">

    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
</head>

<body>
    <div id="app">
        <div id="sidebar" class='active'>
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <img src="{{asset('../backend/assets/images/Medical.png')}}" alt="" srcset="" style="height:180px; width:200px; padding-right: 15px; ">
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">


                        <li class='sidebar-title' style="padding-top: 0;">Main Menu</li>

                        <li class="sidebar-item active ">
                            <a href="/dashboard" class='sidebar-link'>
                                <i data-feather="home" width="20"></i>
                                <span>Dashboard</span>
                            </a>

                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="" class='sidebar-link'>
                                <i data-feather="triangle" width="20"></i>
                                <span>Departments</span>
                            </a>
                            <ul class="submenu ">
                                <li>
                                    <a href="{{route('department.index')}}">Department</a>
                                </li>

                                <li>
                                    <a href="{{route('department.create')}}">Add Department</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="" class='sidebar-link'>
                                <i data-feather="triangle" width="20"></i>
                                <span>Patients</span>
                            </a>
                            <ul class="submenu ">
                                <li>
                                    <a href="{{route('patient.index')}}">show Patient</a>
                                </li>

                                <li>
                                    <a href="{{route('patient.create')}}">Add Patient</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="" class='sidebar-link'>
                                <i data-feather="triangle" width="20"></i>
                                <span>Doctor</span>
                            </a>
                            <ul class="submenu ">
                                <li>
                                    <a href="{{route('physician.index')}}">Show Doctor</a>
                                </li>

                                <li>
                                    <a href="{{route('physician.create')}}">Add Doctor</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="" class='sidebar-link'>
                                <i data-feather="triangle" width="20"></i>
                                <span>Time</span>
                            </a>
                            <ul class="submenu ">
                                <li>
                                    <a href="{{route('time.index')}}">Show Time Appointment</a>
                                </li>

                                <li>
                                    <a href="{{route('time.create')}}">Add Time Appointment</a>
                                </li>
                            </ul>
                        </li>
                        <!-- <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i data-feather="briefcase" width="20"></i>
                                <span>Extra Components</span>
                            </a>

                            <ul class="submenu ">

                                <li>
                                    <a href="component-extra-avatar.html">Avatar</a>
                                </li>

                                <li>
                                    <a href="component-extra-divider.html">Divider</a>
                                </li>
                            </ul>
                        </li> -->

                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <div id="main">
            <nav class="navbar navbar-header navbar-expand navbar-light">
                <a class="sidebar-toggler" href="#"><span class="navbar-toggler-icon"></span></a>
                <button class="btn navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav d-flex align-items-center navbar-light ml-auto">
                        <li class="dropdown nav-icon">
                            <a href="#" data-toggle="dropdown" class="nav-link  dropdown-toggle nav-link-lg nav-link-user">
                                <div class="d-lg-inline-block">
                                    <i data-feather="bell"></i>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-large">
                                <h6 class='py-2 px-4'>Notifications</h6>
                                <ul class="list-group rounded-none">
                                    <li class="list-group-item border-0 align-items-start">
                                        <div class="avatar bg-success mr-3">
                                            <span class="avatar-content"><i data-feather="shopping-cart"></i></span>
                                        </div>
                                        <div>
                                            <h6 class='text-bold'>New Order</h6>
                                            <p class='text-xs'>
                                                An order made by Ahmad Saugi for product Samsung Galaxy S69
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="dropdown nav-icon mr-2">
                            <a href="#" data-toggle="dropdown" class="nav-link  dropdown-toggle nav-link-lg nav-link-user">
                                <div class="d-lg-inline-block">
                                    <i data-feather="mail"></i>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i data-feather="user"></i> Account</a>
                                <a class="dropdown-item active" href="#"><i data-feather="mail"></i> Messages</a>
                                <a class="dropdown-item" href="#"><i data-feather="settings"></i> Settings</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i data-feather="log-out"></i> Logout</a>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                                <div class="avatar mr-1">
                                    <img src="{{asset('../backend/assets/images/avatar/avatar-s-1.png')}}" alt="" srcset="">
                                </div>
                                <div class="d-none d-md-block d-lg-inline-block">Hi, Saugi</div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i data-feather="user"></i> Account</a>
                                <a class="dropdown-item active" href="#"><i data-feather="mail"></i> Messages</a>
                                <a class="dropdown-item" href="#"><i data-feather="settings"></i> Settings</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/logout_dashboard"><i data-feather="log-out"></i> Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

            @yield('main')

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-left">
                        <p>2022 &copy; Alisa</p>
                    </div>
                </div>
            </footer>
        </div>
        <div>
        </div>
    </div>
    <script>

    </script>
    <script src="{{asset('../backend/assets/js/feather-icons/feather.min.js')}}"></script>
    <script src="{{asset('../backend/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('../backend/assets/js/app.js')}}"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" integrity="sha512-3P8rXCuGJdNZOnUx/03c1jOTnMn3rP63nBip5gOP2qmUh5YAdVAvFZ1E+QLZZbC1rtMrQb+mah3AfYW11RUrWA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
    <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script> -->
    <script src="{{asset('../backend/assets/vendors/chartjs/Chart.min.js')}}"></script>
    <script src="{{asset('../backend/assets/vendors/apexcharts/apexcharts.min.js')}}"></script>
    <script src="{{asset('../backend/assets/js/pages/dashboard.js')}}"></script>
    <script src="{{asset('../backend/assets/js/sweetalert2.js')}}"></script>
    </script>
    <script src="{{asset('../backend/assets/js/main.js')}}"></script>
    <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    {!! Toastr::message() !!}
</body>

</html>