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
                    <a href="" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
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
                    <a href="#" class="nav-link"><i data-feather="briefcase"></i><span>Alimentation</span></a>
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
                    <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="mail"></i><span>Programme
                            Travail</span></a>
                    <ul class="dropdown-menu">
                        <li><a class="nav-link" href="email-inbox.html">programmes en cours</a></li>
                        <li><a class="nav-link" href="email-compose.html">Etablir un programme</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="nav-link"><i data-feather="briefcase"></i><span>Finances</span></a>
                </li>
                <li class="dropdown">
                    <a href="#" class="nav-link"><i data-feather="briefcase"></i><span>ventes</span></a>
                </li>
            </ul>
        </aside>
    </div>
@endsection
@section('styles')
@endsection
