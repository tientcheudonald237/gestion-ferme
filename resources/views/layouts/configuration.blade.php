@extends('layouts.backend')
@section('sidebar')
    <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
            <div class="sidebar-brand">
                <a href="/"> <img alt="image" src="{{ asset('assets/img/logo.png') }}" class="header-logo" />
                    <span class="logo-name">Ranch Management</span>
                </a>
            </div>
            <ul class="sidebar-menu">
                <li class="dropdown">
                <li class="menu-header">Stock</li>
                <li
                    class="dropdown {{ Request::is('configuration') ? 'active' : '' }} {{ Request::is('lodge') ? 'active' : '' }}  {{ Request::is('building') ? 'active' : '' }}">
                    <a href="{{ route('configuration.index') }}" class="nav-link"><i
                            data-feather="monitor"></i><span>Tableau De Bord</span></a>
                </li>
                <ul class="sidebar-menu">

                </ul>
                </li>
            </ul>
        </aside>
    </div>
@endsection
@section('styles')
@endsection
