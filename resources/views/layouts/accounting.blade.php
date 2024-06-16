@extends('layouts.backend')
@section('sidebar')
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
                    <a href="" class="nav-link"><i data-feather="monitor"></i><span>Tableau de bord</span></a>
                </li>
                <li class="dropdown">
                    <a href="#" class="nav-link"><i data-feather="briefcase"></i><span>Facturation</span></a>
                </li>
                <li class="dropdown">
                    <a href="#" class="nav-link"><i data-feather="briefcase"></i><span>Gestion de stock</span></a>
                </li>
            </ul>
        </aside>
    </div>
@endsection
@section('styles')
@endsection
