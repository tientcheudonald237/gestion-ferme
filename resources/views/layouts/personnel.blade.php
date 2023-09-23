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
                    <a href="" class="nav-link"><i data-feather="monitor"></i><span>Tableau De Bord</span></a>
                </li>
                <li class="dropdown">
                    <a href="#" class="menu-toggle nav-link has-dropdown"><i
                            data-feather="users"></i><span>Employes</span></a>
                    <ul class="dropdown-menu">
                        <li><a class="nav-link" href="">Ferme</a>
                        </li>
                        <li><a class="nav-link" href="">Commerciaux</a>
                        </li>
                        <li><a class="nav-link" href="">Gestionnaires</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="nav-link"><i data-feather="book"></i><span>Programme de travail</span></a>
                </li>
                <li class="dropdown">
                    <a href="#" class="nav-link"><i data-feather="list"></i><span>Taches</span></a>
                </li>
            </ul>
        </aside>
    </div>
@endsection
@section('styles')
@endsection