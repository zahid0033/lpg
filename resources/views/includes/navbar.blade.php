
    <nav class="navbar navbar-expand-lg navbar-light nav-bar bg-nav" style="height: 100px">
        <a href="{{ route('pages.index') }}" ><img class="logo" src="{{ asset('assets/images/logo/logo2.png') }}" alt="logo"/></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse text-center" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0 nav-style">
                <li class="nav-item @yield('home')">
                    <a class="nav-link nav_item_design" href="{{ route('pages.index') }}">Home</a>
                </li>
                <li class="nav-item  @yield('about')">
                    <a class="nav-link nav_item_design" href="{{ route('pages.about') }}">About Us</a>
                </li>
                <li class="nav-item  @yield('lpg_station')">
                    <a class="nav-link nav_item_design" href="{{ route('pages.lpg_station') }}">LPG Stations</a>
                </li>
                <li class="nav-item dropdown  @yield('lpg_conversion')">
                    <a class="nav-link nav_item_design dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        LPG Conversion
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item @yield('conversion_stations')" href="{{ route('pages.conversion_stations') }}"><b>Conversion Stations</b></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item @yield('conversion_kits')" href="{{ route('pages.conversion_kits') }}"><b>Conversion Kits</b></a>
                    </div>
                </li>

                <li class="nav-item  @yield('products')">
                    <a class="nav-link nav_item_design" href="{{ route('pages.products') }}">Products</a>
                </li>
                <li class="nav-item  @yield('contact')">
                    <a class="nav-link nav_item_design" href="{{ route('pages.contact') }}">Contact Us</a>
                </li>




            </ul>
            <ul class="navbar-nav navbar-right">

            </ul>

        </div>
    </nav>
