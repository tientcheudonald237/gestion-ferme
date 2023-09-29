@extends('layouts.backend')
@section('sidebar')
    <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
            <div class="sidebar-brand">
                <a href="/"> <img alt="image" src="{{ asset('assets/img/logo.png') }}" class="header-logo" />
                    <span class="logo-name">Guemaleu</span>
                </a>
            </div>
            <ul class="sidebar-menu">
<<<<<<< Updated upstream
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
=======
                @if (Request::is('production/stock*') == true)
                    <li class="dropdown">
                    <li class="menu-header">Stock</li>
                    <li class="dropdown {{ Request::is('production/stock') ? 'active' : '' }}">
                        <a href="{{ route('production.stock.index') }}" class="nav-link"><i
                                data-feather="monitor"></i><span>Tableau De Bord</span></a>
                    </li>
                    <ul class="sidebar-menu">
                        <li class="dropdown {{ Request::is('production/stock/supply') ? 'active open' : '' }}">
                            <a href="#" class="menu-toggle nav-link has-dropdown"><i
                                    data-feather="pie-chart"></i><span>Approvisionement</span></a>
                            <ul class="dropdown-menu">
                                <li class="{{ Request::is('production/stock/supply') ? 'active' : '' }}"><a class="nav-link" href="{{ route('production.stock.supply.index') }}">Tableau de bord</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown {{ Request::is('production/stock/order') ? 'active open' : '' }}" >
                            <a href="#" class="menu-toggle nav-link has-dropdown"><i
                                    data-feather="pie-chart"></i><span>Commande</span></a>
                            <ul class="dropdown-menu">
                                <li class="{{ Request::is('production/stock/order') ? 'active' : '' }}"><a class="nav-link" href="{{ route('production.stock.order.index') }}">Tableau de bord</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    </li>
                @else
                    <li class="menu-header">Main</li>
                    <li class="dropdown {{ Request::is('production') ? 'active open' : '' }}">
                        <a href="{{ route('production.index') }}" class="nav-link"><i
                                data-feather="monitor"></i><span>Tableau De Bord</span></a>
                    </li>
                    <li
                        class="dropdown {{ Request::is('production/follow/food') || Request::is('production/follow/prophylaxis') || Request::is('production/follow/animal') ? 'active open' : '' }}">
                        <a href="#" class="menu-toggle nav-link has-dropdown"><i
                                data-feather="pie-chart"></i><span>Suivi</span></a>
                        <ul class="dropdown-menu">
                            <li class="{{ Request::is('production/follow/food') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('production.follow.food') }}">Alimentation</a>
                            </li>
                            <li class="{{ Request::is('production/follow/prophylaxis') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('production.follow.prophylaxis') }}">Prophylaxie</a>
                            </li>
                            <li class="{{ Request::is('production/follow/animal') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('production.follow.animal') }}">Animaux</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown {{ Request::is('production/stock') ? 'active' : '' }}">
                        <a href="{{ route('production.stock.index') }}" class="nav-link"><i
                                data-feather="monitor"></i><span>Stock</span></a>
                    </li>
                @endif
>>>>>>> Stashed changes
            </ul>
        </aside>
    </div>
@endsection
@section('styles')
@endsection
