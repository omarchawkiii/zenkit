<header id="page-topbar">

    <div class="layout-width">
        <div class="navbar-header">
            <div class="d-flex">

                <button type="button" class=" btn-hover-white btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger" id="topnav-hamburger-icon">
                   <span class="">
                            <img src="{{asset('/assets/images/logo-dark.png')}}" alt="" >

                        </span>
                </button>
                 <!-- LOGO -->
                 <div class="navbar-brand-box horizontal-logo logo-mobile">
                    <a href="{{ route('home') }}" class="logo logo-dark">

                        <span class="logo-lg d-none" style="display : none !important ">
                            <img src="{{asset('assets/images/logo-dark.png')}}" alt="" >

                        </span>
                    </a>
                </div>
            </div>

            <div class="d-flex align-items-center">
                <div class="dropdown header-item">
                    <button type="button" class="btn" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="d-flex align-items-center">
                            <img class="rounded-circle header-profile-user" src="/assets/images/users/user-dummy-img.jpg" alt="Header Avatar">
                            <span class="text-start ms-xl-2">
                                <span class="d-none d-xl-inline-block fw-medium user-name-text fs-16">{{ Auth::user()->name }} <i class="las la-angle-down fs-12 ms-1"></i></span>
                            </span>
                        </span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        @if(Auth::user()->role =="admin")
                            <a class="dropdown-item "  href="{{ route('admin.users') }} " role="button"><i class=" las la-cog text-dark fs-15 align-middle me-1 "></i>  Admin </a>
                        @endif
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-danger" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();" href="{{ route('logout') }} " role="button"><i class="bx bx-power-off fs-15 align-middle me-1 text-danger"></i> <span key="t-logout">{{ __('message.Logout')}}</span> </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</header>

