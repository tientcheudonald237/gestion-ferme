<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>KITABU @yield('title')</title>
    @yield('meta')
    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/app.min.css') }}">
    <!-- Template CSS -->
    {{--  bundle  --}}
    <link rel="stylesheet" href="{{ asset('assets/bundles/bootstrap-social/bootstrap-social.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bundles/owlcarousel2/dist/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bundles/owlcarousel2/dist/assets/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bundles/summernote/summernote-bs4.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bundles/bootstrap-daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bundles/datatables/datatables.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bundles/izitoast/css/iziToast.min.css') }}">
    {{--  form picker start import --}}
    <link rel="stylesheet"
        href="{{ asset('assets/bundles/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bundles/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bundles/jquery-selectric/selectric.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bundles/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bundles/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bundles/pretty-checkbox/pretty-checkbox.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('assets/bundles/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css') }}">
    {{-- css files from dropzone --}}
    <link rel="stylesheet" href="{{ asset('assets/bundles/dropzonejs/dropzone.css') }}">

    {{--  form picker end import  --}}
    {{--  end bundle  --}}

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">

    <!-- Custom style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('toastr.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/km.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/other/calculator.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/filepond/dist/filepond.css') }}">
    <link rel='shortcut icon' type='image/x-icon' href="{{ asset('assets/img/favicon.ico') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css"
        integrity="sha512-1QJfDDOYT13cYmKYFsry3tqqsRYrzkozRYVKusvujmDTL3tDnS9jpwz+zqs2+0jcTvdJQCBx9ZrjFWEoSseSIw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    @yield('styles')
    @stack('other-styles')
    <style>
        .select-container {
            position: relative;
            display: inline-block;
        }

        .select-container-select {
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            background-color: #fff;
        }

        .select-container-select:focus {
            outline: none;
            border-color: #555;
        }

        .select-container::after {
            content: '\25BC';
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            font-size: 12px;
            pointer-events: none;
        }

        .form-group {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    {{-- <div class="loader" style="opacity: .75;background-color:black">
        <div class="h-100 d-flex justify-content-center">
            <div class="align-self-center">
                <img src="{{ asset('assets/img/loader/spin.gif') }}" alt="loader">
            </div>
        </div>
    </div> --}}
    <div class="loader"></div>

    <div id="app">
        {{-- a remplir  --}}
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar sticky">
                <div class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn">
                                <i data-feather="align-justify"></i></a></li>
                        <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                                <i data-feather="maximize"></i>
                            </a></li>
                        <li>
                            <form class="form-inline mr-auto">
                                <div class="search-element">
                                    <input class="form-control" type="search" placeholder="Search" aria-label="Search"
                                        data-width="200">
                                    <button class="btn" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </form>
                        </li>
                    </ul>
                </div>
                {{-- <div class="form-group">
                    <div class="select-container">
                        <select class="select-container-select changeLang">
                            <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>
                                <span class="flag-icon flag-icon-us"></span> English
                            </option>
                            <option value="fr" {{ session()->get('locale') == 'fr' ? 'selected' : '' }}>
                                <span class="flag-icon flag-icon-fr"></span> Français
                            </option>
                        </select>
                    </div>
                </div> --}}
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
                            class="nav-link nav-link-lg message-toggle"><i data-feather="mail"></i>
                            <span class="badge headerBadge1">
                                6 </span> </a>
                        <div class="dropdown-menu dropdown-list dropdown-menu-right pullDown">
                            <div class="dropdown-header">
                                Messages
                                <div class="float-right">
                                    <a href="#">{{ __('messages._markasread') }}</a>
                                </div>
                            </div>
                            <div class="dropdown-list-content dropdown-list-message">
                                <a href="#" class="dropdown-item"> <span
                                        class="dropdown-item-avatar
											text-white"> <img alt="image"
                                            src="assets/img/users/user-1.png" class="rounded-circle">
                                    </span> <span class="dropdown-item-desc"> <span class="message-user">John
                                            Deo</span>
                                        <span class="time messege-text">Please check your mail !!</span>
                                        <span class="time">2 Min Ago</span>
                                    </span>
                                </a> <a href="#" class="dropdown-item"> <span
                                        class="dropdown-item-avatar text-white">
                                        <img alt="image" src="assets/img/users/user-2.png" class="rounded-circle">
                                    </span> <span class="dropdown-item-desc"> <span class="message-user">Sarah
                                            Smith</span> <span class="time messege-text">Request for leave
                                            application</span>
                                        <span class="time">5 Min Ago</span>
                                    </span>
                                </a> <a href="#" class="dropdown-item"> <span
                                        class="dropdown-item-avatar text-white">
                                        <img alt="image" src="assets/img/users/user-5.png" class="rounded-circle">
                                    </span> <span class="dropdown-item-desc"> <span class="message-user">Jacob
                                            Ryan</span> <span class="time messege-text">Your payment invoice is
                                            generated.</span> <span class="time">12 Min Ago</span>
                                    </span>
                                </a> <a href="#" class="dropdown-item"> <span
                                        class="dropdown-item-avatar text-white">
                                        <img alt="image" src="assets/img/users/user-4.png" class="rounded-circle">
                                    </span> <span class="dropdown-item-desc"> <span class="message-user">Lina
                                            Smith</span> <span class="time messege-text">hii John, I have upload
                                            doc
                                            related to task.</span> <span class="time">30
                                            Min Ago</span>
                                    </span>
                                </a> <a href="#" class="dropdown-item"> <span
                                        class="dropdown-item-avatar text-white">
                                        <img alt="image" src="assets/img/users/user-3.png" class="rounded-circle">
                                    </span> <span class="dropdown-item-desc"> <span class="message-user">Jalpa
                                            Joshi</span> <span class="time messege-text">Please do as specify.
                                            Let me
                                            know if you have any query.</span> <span class="time">1
                                            Days Ago</span>
                                    </span>
                                </a> <a href="#" class="dropdown-item"> <span
                                        class="dropdown-item-avatar text-white">
                                        <img alt="image" src="assets/img/users/user-2.png" class="rounded-circle">
                                    </span> <span class="dropdown-item-desc"> <span class="message-user">Sarah
                                            Smith</span> <span class="time messege-text">Client Requirements</span>
                                        <span class="time">2 Days Ago</span>
                                    </span>
                                </a>
                            </div>
                            <div class="dropdown-footer text-center">
                                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
                            class="nav-link notification-toggle nav-link-lg"><i data-feather="bell"
                                class="bell"></i>
                        </a>
                        <div class="dropdown-menu dropdown-list dropdown-menu-right pullDown">
                            <div class="dropdown-header">
                                Notifications
                                <div class="float-right">
                                    <a href="#">Mark All As Read</a>
                                </div>
                            </div>
                            <div class="dropdown-list-content dropdown-list-icons">
                                <a href="#" class="dropdown-item dropdown-item-unread"> <span
                                        class="dropdown-item-icon bg-primary text-white"> <i
                                            class="fas
												fa-code"></i>
                                    </span> <span class="dropdown-item-desc"> Template update is
                                        available now! <span class="time">2 Min
                                            Ago</span>
                                    </span>
                                </a> <a href="#" class="dropdown-item"> <span
                                        class="dropdown-item-icon bg-info text-white"> <i
                                            class="far
												fa-user"></i>
                                    </span> <span class="dropdown-item-desc"> <b>You</b> and <b>Dedik
                                            Sugiharto</b> are now friends <span class="time">10 Hours
                                            Ago</span>
                                    </span>
                                </a> <a href="#" class="dropdown-item"> <span
                                        class="dropdown-item-icon bg-success text-white"> <i
                                            class="fas
												fa-check"></i>
                                    </span> <span class="dropdown-item-desc"> <b>Kusnaedi</b> has
                                        moved task <b>Fix bug header</b> to <b>Done</b> <span class="time">12
                                            Hours
                                            Ago</span>
                                    </span>
                                </a> <a href="#" class="dropdown-item"> <span
                                        class="dropdown-item-icon bg-danger text-white"> <i
                                            class="fas fa-exclamation-triangle"></i>
                                    </span> <span class="dropdown-item-desc"> Low disk space. Let's
                                        clean it! <span class="time">17 Hours Ago</span>
                                    </span>
                                </a> <a href="#" class="dropdown-item"> <span
                                        class="dropdown-item-icon bg-info text-white"> <i
                                            class="fas
												fa-bell"></i>
                                    </span> <span class="dropdown-item-desc"> Welcome to Otika
                                        template! <span class="time">Yesterday</span>
                                    </span>
                                </a>
                            </div>
                            <div class="dropdown-footer text-center">
                                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown"><a href="#" data-toggle="dropdown"
                            class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image"
                                src="{{ asset('assets/img/logo.png') }}" class="user-img-radious-style"> <span
                                class="d-sm-none d-lg-inline-block"></span></a>
                        <div class="dropdown-menu dropdown-menu-right pullDown">
                            <div class="dropdown-title"></div>
                            <a href="" class="dropdown-item has-icon"> <i class="far
										fa-user"></i>
                                Profile
                            </a> <a href="#" class="dropdown-item has-icon"> <i class="fas fa-bolt"></i>
                                Activities
                            </a> <a href="#" class="dropdown-item has-icon"> <i class="fas fa-cog"></i>
                                Settings
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item has-icon text-danger"
                                onclick="document.getElementById('mylogoutid').submit();"> <i
                                    class="fas fa-sign-out-alt"></i>
                                Logout
                            </a>
                            <form id="mylogoutid" method="post" action="{{ route('logout') }}">
                                @method('post')
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar sidebar-style-2">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="/"> <img alt="image" src="assets/img/logo.png" class="header-logo" />
                            <span class="logo-name">Guemaleu</span>
                        </a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header">Main</li>
                        <li class="dropdown active">
                            <a href="" class="nav-link"><i
                                    data-feather="monitor"></i><span>Dashboard</span></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="menu-toggle nav-link has-dropdown"><i
                                    data-feather="briefcase"></i><span>Animaux</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="">Animaux</a>
                                </li>
                                <li><a class="nav-link" href="">Especes</a>
                                </li>
                                <li><a class="nav-link" href="">Races</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="nav-link"><i
                                    data-feather="briefcase"></i><span>Alimentation</span></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="menu-toggle nav-link has-dropdown"><i
                                    data-feather="command"></i><span>Prophylaxie</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="chat.html">Suivie prophylaxie</a></li>
                                <li><a class="nav-link" href="portfolio.html">Etablir un programme</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="menu-toggle nav-link has-dropdown"><i
                                    data-feather="mail"></i><span>Programme Travail</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="email-inbox.html">programmes en cours</a></li>
                                <li><a class="nav-link" href="email-compose.html">Etablir un programme</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="nav-link"><i
                                    data-feather="briefcase"></i><span>Finances</span></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="nav-link"><i
                                    data-feather="briefcase"></i><span>ventes</span></a>
                        </li>
                    </ul>
                </aside>
            </div>
            <!-- Main Content -->
            <div class="main-content">
                {{-- yield content here  --}}
                @yield('content')
                <div class="settingSidebar">
                    <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
                    </a>
                    <div class="settingSidebar-body ps-container ps-theme-default">
                        <div class=" fade show active">
                            <div class="setting-panel-header">Setting Panel
                            </div>
                            <div class="p-15 border-bottom">
                                <h6 class="font-medium m-b-10">Select Layout</h6>
                                <div class="selectgroup layout-color w-50">
                                    <label class="selectgroup-item">
                                        <input type="radio" name="value" value="1"
                                            class="selectgroup-input-radio select-layout" checked>
                                        <span class="selectgroup-button">Light</span>
                                    </label>
                                    <label class="selectgroup-item">
                                        <input type="radio" name="value" value="2"
                                            class="selectgroup-input-radio select-layout">
                                        <span class="selectgroup-button">Dark</span>
                                    </label>
                                </div>
                            </div>
                            <div class="p-15 border-bottom">
                                <h6 class="font-medium m-b-10">Sidebar Color</h6>
                                <div class="selectgroup selectgroup-pills sidebar-color">
                                    <label class="selectgroup-item">
                                        <input type="radio" name="icon-input" value="1"
                                            class="selectgroup-input select-sidebar">
                                        <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                                            data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
                                    </label>
                                    <label class="selectgroup-item">
                                        <input type="radio" name="icon-input" value="2"
                                            class="selectgroup-input select-sidebar" checked>
                                        <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                                            data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
                                    </label>
                                </div>
                            </div>
                            <div class="p-15 border-bottom">
                                <h6 class="font-medium m-b-10">Color Theme</h6>
                                <div class="theme-setting-options">
                                    <ul class="choose-theme list-unstyled mb-0">
                                        <li title="white" class="active">
                                            <div class="white"></div>
                                        </li>
                                        <li title="cyan">
                                            <div class="cyan"></div>
                                        </li>
                                        <li title="black">
                                            <div class="black"></div>
                                        </li>
                                        <li title="purple">
                                            <div class="purple"></div>
                                        </li>
                                        <li title="orange">
                                            <div class="orange"></div>
                                        </li>
                                        <li title="green">
                                            <div class="green"></div>
                                        </li>
                                        <li title="red">
                                            <div class="red"></div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="p-15 border-bottom">
                                <div class="theme-setting-options">
                                    <label class="m-b-0">
                                        <input type="checkbox" name="custom-switch-checkbox"
                                            class="custom-switch-input" id="mini_sidebar_setting">
                                        <span class="custom-switch-indicator"></span>
                                        <span class="control-label p-l-10">Mini Sidebar</span>
                                    </label>
                                </div>
                            </div>
                            <div class="p-15 border-bottom">
                                <div class="theme-setting-options">
                                    <label class="m-b-0">
                                        <input type="checkbox" name="custom-switch-checkbox"
                                            class="custom-switch-input" id="sticky_header_setting">
                                        <span class="custom-switch-indicator"></span>
                                        <span class="control-label p-l-10">Sticky Header</span>
                                    </label>
                                </div>
                            </div>
                            <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
                                <a href="#" class="btn btn-icon icon-left btn-primary btn-restore-theme">
                                    <i class="fas fa-undo"></i> Restore Default
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <footer class="main-footer">
                <div class="footer-left" style="">
                    <a href="#">&copy; {{ __('message._copyrith_') }}</a>

                </div>

                <div class="footer-right">
                    <div class="sidebar-brand" style="margin-top: -10px;">
                        <a href="#">
                            <img alt="image" src="{{ asset('') }}" class="header-logo" width="60" />
                            <span class="logo-name" style="color:black;text-transform: none;">Kitabu</span>
                        </a>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!-- Vertically Center -->
    <!-- Calculator Modal -->
    <div class="modal fade" id="calculator_id" tabindex="-1" role="dialog" aria-labelledby="calculator_idLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="calculator_idLabel">{{ __('message._km_calculator_') }} </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="background: linear-gradient(45deg, #0a0a0a, #3a4452);">
                    <div class="calculator">
                        <input type="text" id="inputBox" placeholder="0" />
                        <div>
                            <button class="button operator st">AC</button>
                            <button class="button operator st">DEL</button>
                            <button class="button  st">%</button>
                            <button class="button  st">/</button>
                        </div>
                        <div>
                            <button class="button st">7</button>
                            <button class="button st">8</button>
                            <button class="button st">9</button>
                            <button class="button operator">*</button>
                        </div>
                        <div>
                            <button class="button st">4</button>
                            <button class="button st">5</button>
                            <button class="button st">6</button>
                            <button class="button operator">-</button>
                        </div>
                        <div>
                            <button class="button st">1</button>
                            <button class="button st">2</button>
                            <button class="button st">3</button>
                            <button class="button operator">+</button>
                        </div>

                        <div>
                            <button class="button st">00</button>
                            <button class="button st">0</button>
                            <button class="button st">.</button>
                            <button class="button equalBtn st">=</button>
                        </div>
                    </div>
                </div>
                {{--                <div class="modal-footer"> --}}
                {{--                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
                {{--                    <button type="button" class="btn btn-primary">Save changes</button> --}}
                {{--                </div> --}}
            </div>
        </div>
    </div>
    <!-- General JS Scripts -->
    <script src="{{ asset('assets/js/app.min.js') }}"></script>
    <script src="{{ asset('assets/js/PDF/pdf-lib.min.js') }}"></script>
    <!-- JS Libraies -->
    {{--  bundle folder  --}}
    <script src="{{ asset('assets/bundles/izitoast/js/iziToast.min.js') }}"></script>
    <!-- datatable-->
    <script src="{{ asset('assets/bundles/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/bundles/datatables/export-tables/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/bundles/datatables/export-tables/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('assets/bundles/datatables/export-tables/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/bundles/datatables/export-tables/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/bundles/datatables/export-tables/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/bundles/datatables/export-tables/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/bundles/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/bundles/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('assets/bundles/jquery-pwstrength/jquery.pwstrength.min.js') }}"></script>
    <script src="{{ asset('assets/bundles/chartjs/chart.min.js') }}"></script>
    <script src="{{ asset('assets/bundles/owlcarousel2/dist/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/bundles/summernote/summernote-bs4.js') }}"></script>
    <script src="{{ asset('assets/bundles/sweetalert/sweetalert.min.js') }}"></script>
    <script src="{{ asset('assets/bundles/cleave-js/dist/cleave.min.js') }}"></script>
    <script src="{{ asset('assets/bundles/cleave-js/dist/addons/cleave-phone.us.js') }}"></script>
    <script src="{{ asset('assets/bundles/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js') }}"></script>
    <script src="{{ asset('assets/bundles/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}"></script>
    <script src="{{ asset('assets/bundles/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }}"></script>
    <script src="{{ asset('assets/bundles/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('assets/bundles/jquery-selectric/jquery.selectric.min.js') }}"></script>
    <script src="{{ asset('assets/bundles/jquery-ui/jquery-ui.min.js') }}"></script>
    {{--  widget  --}}

    <script src="{{ asset('assets/bundles/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('assets/bundles/jqvmap/dist/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('assets/bundles/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
    <script src="{{ asset('assets/bundles/jqvmap/dist/maps/jquery.vmap.indonesia.js') }}"></script>
    <!-- JS Libraies for dropzone-->
    <script src="{{ asset('assets/bundles/dropzonejs/min/dropzone.min.js') }}"></script>
    {{--  end bundle folder  --}}
    <script src="{{ asset('assets/bundles/jquery-validation/dist/jquery.validate.min.js') }}"></script>
    <!-- JS Libraies -->
    <script src="{{ asset('assets/bundles/jquery-steps/jquery.steps.min.js') }}"></script>

    <script src="{{ asset('assets/bundles/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js') }}"></script>
    <!-- Page Specific JS File -->
    <script src="{{ asset('assets/js/page/form-wizard.js') }}"></script>
    <script src="{{ asset('assets/js/other/calculator.js') }}"></script>
    <script src="{{ asset('assets/filepond/dist/filepond.js') }}"></script>
    <script src="{{ asset('assets/filepond/dist/preview.js') }}"></script>
    <script src="{{ asset('assets/js/page/form-wizard.js') }}"></script>
    <script src="{{ asset('assets/js/other/calculator.js') }}"></script>

    <!-- Page Specific JS File -->


    <!-- Page Specific JS File -->
    {{--  page folder  --}}
    <script src="{{ asset('assets/js/page/advance-table.js') }}"></script>
    <script src="{{ asset('assets/js/page/index.js') }}"></script>
    <script src="{{ asset('assets/js/page/widget-data.js') }}"></script>
    <script src="{{ asset('assets/js/page/toastr.js') }}"></script>
    <script src="{{ asset('assets/js/page/datatables.js') }}"></script>
    {{-- <script src="{{ asset('assets/js/page/chart-apexcharts.js') }}"></script> --}}
    <script src="{{ asset('assets/js/page/sweetalert.js') }}"></script>
    <script src="{{ asset('assets/js/page/forms-advanced-forms.js') }}"></script>
    <script src="{{ asset('assets/js/page/widget-chart.js') }}"></script>
    {{--    <script src="{{ asset('assets/js/page/multiple-upload.js')}}"></script> --}}
    {{--  end page folder  --}}
    <!-- Template JS File -->
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    <!-- Custom JS File -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script src="{{ asset('toastr.js') }}"></script>
    <script src="{{ asset('assets/js/chat.js') }}"></script>
    <script src="{{ asset('assets/js/treeview.js') }}"></script>
    <!-- Template JS File -->

    {{-- <script type="text/javascript">
        var url = "{{ route('changeLang') }}";

        $(".changeLang").change(function() {
            window.location.href = url + "?lang=" + $(this).val();
        });
    </script> --}}

    {!! Toastr::message() !!}
    <script>
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                toastr.error('{{ $error }}', 'Error', {
                    closeButtor: true,
                    progressBar: true
                });
            @endforeach
        @endif
    </script>
    <script>
        function calculator() {
            $('#calculator_id').modal('show');
        }
    </script>
    @yield('scripts')
    @stack('other-scripts')
</body>

</html>
