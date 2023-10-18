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
                @if (Request::is('production/stock*') == true || Request::is('product') == true || Request::is('category') == true)
                    <li class="dropdown">
                    <li class="menu-header">Stock</li>
                    <li class="dropdown {{ Request::is('production/stock') ? 'active' : '' }} {{ Request::is('product') ? 'active' : '' }}  {{ Request::is('category') ? 'active' : '' }}">
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
                        <li class="dropdown {{ Request::is('production/stock/inventory') ? 'active' : '' }}">
                            <a href="{{ route('production.stock.inventory') }}" class="nav-link"><i
                                    data-feather="monitor"></i><span>Inventaire</span></a>
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
            </ul>
        </aside>
    </div>
@endsection
@section('styles')
@endsection
