<?php

$links = config('main_menu');

?>

<header>

    <div class="section-top-header">
        <div class="container">
            <div class="info-top-header">
                <span>DC POWER VISA</span>
                <span>ADDITIONAL DC SITES</span>
            </div>
        </div>
    </div>

    <!-- NavBar -->

    <div class="container">
        <div class="nav-bar">
            <img src="{{ asset('images/dc-logo.png') }}" alt="{{ asset('images/dc-logo.png') }}">
            @foreach($links as $link)
            <li>
                <a class="{{ request()->routeIs($link['route_name']) ? 'active' : '' }}" href="{{ route($link['route_name']) }}">{{ $link['text'] }}</a>
            </li>
            @endforeach
            <input type="text" placeholder="Search">
        </div>
    </div>

    <div class="bg-header-image">
        <div class="current-series">
            <p>CURRENT SERIES</p>
        </div>
    </div>

</header>