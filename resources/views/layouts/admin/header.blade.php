<div class="topbar">
    <!-- Navbar -->
    <nav class="navbar-custom" id="navbar-custom">
        <ul class="list-unstyled topbar-nav float-end mb-0">
            <li class="dropdown">
                <a class="nav-link dropdown-toggle arrow-none nav-icon" data-bs-toggle="dropdown" href="#"
                    role="button" aria-haspopup="false" aria-expanded="false">
                    <img src="{{ asset('uploads/flag/bd.webp') }}" alt="bangladesh" class="thumb-xxs rounded-circle"
                        style="object-fit: cover">
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{ route('settings.index') }}"><img
                            src="{{ asset('uploads/flag/bd.webp') }}" alt="bangladesh" height="15"
                            class="me-2">Bangladesh</a>
                </div>
            </li><!--end topbar-language-->

            <li class="dropdown">
                <a class="nav-link dropdown-toggle nav-user" data-bs-toggle="dropdown" href="#" role="button"
                    aria-haspopup="false" aria-expanded="false">
                    <div class="d-flex align-items-center">
                        @if (auth()->user()->image == 'default.png')
                            <img src="{{ asset('uploads/default') }}/{{ auth()->user()->image }}" alt="profile-user"
                                class="rounded-circle me-2 thumb-sm" />
                        @else
                            <img src="{{ asset('uploads/profile') }}/{{ auth()->user()->image }}" alt="profile-user"
                                class="rounded-circle me-2 thumb-sm" />
                        @endif
                        <div>
                            <small class="d-none d-md-block font-11">{{ auth()->user()->designation }}</small>
                            <span class="d-none d-md-block fw-semibold font-12">{{ auth()->user()->name }} <i
                                    class="mdi mdi-chevron-down"></i></span>
                        </div>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href="{{ route('settings.index') }}"><i
                            class="ti ti-user font-16 me-1 align-text-bottom"></i> Profile</a>
                    <div class="dropdown-divider mb-0"></div>
                    @if (Route::has('logout'))
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button type="submit" class="dropdown-item"><i
                                    class="ti ti-power font-16 me-1 align-text-bottom"></i> Logout</button>
                        </form>
                    @endif
                </div>
            </li><!--end topbar-profile-->
            <li class="notification-list">
                <a class="nav-link arrow-none nav-icon offcanvas-btn" href="#" data-bs-toggle="offcanvas"
                    data-bs-target="#Appearance" role="button" aria-controls="Rightbar">
                    <i class="ti ti-settings ti-spin"></i>
                </a>
            </li>
        </ul><!--end topbar-nav-->

        <ul class="list-unstyled topbar-nav mb-0">
            <li>
                <button class="nav-link button-menu-mobile nav-icon" id="togglemenu">
                    <i class="ti ti-menu-2"></i>
                </button>
            </li>
            <li class="hide-phone app-search">
                <form role="search" action="#" method="get">
                    <input type="search" name="search" class="form-control top-search mb-0"
                        placeholder="Type text...">
                    <button type="submit"><i class="ti ti-search"></i></button>
                </form>
            </li>
        </ul>
    </nav>
    <!-- end navbar-->
</div>
