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
                <li class="dropdown {{ $activeDropdown === 'index' ? 'active' : '' }}">
                    <a href="" class="nav-link"><i data-feather="monitor"></i><span>Tableau De Bord</span></a>
                </li>
                <li class="dropdown {{ $activeDropdown === 'elevage' ? 'active' : '' }}">
                    <a href="#" class="menu-toggle nav-link has-dropdown"><i
                            data-feather="pie-chart"></i><span>Elevage</span></a>
                    <ul class="dropdown-menu">
                        <li class="{{ $activeLink === 'animaux' ? 'active' : '' }}">
                            <a class="nav-link" href="">Animaux</a>
                        </li>
                        <li class="{{ $activeLink === 'especes' ? 'active' : '' }}">
                            <a class="nav-link" href="">Especes</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown {{ $activeDropdown === 'analyse' ? 'active' : '' }}">
                    <a href="#" class="nav-link"><i data-feather="bar-chart"></i><span>Analyse</span></a>
                </li>
                <li class="dropdown {{ $activeDropdown === 'rapport' ? 'active' : '' }}">
                    <a href="#" class="nav-link"><i data-feather="book"></i><span> Rapport</span></a>
                    <ul class="dropdown-menu">
                        <li class="{{ $activeLink === 'programme_en_cour' ? 'active' : '' }}"><a class="nav-link" href="email-inbox.html">programmes en cours</a></li>
                        <li class="{{ $activeLink === 'etablir_programme' ? 'active' : '' }}"><a class="nav-link" href="email-compose.html">Etablir un programme</a></li>
                    </ul>
                </li>
            </ul>
        </aside>
    </div>
@endsection
@section('styles')
@endsection