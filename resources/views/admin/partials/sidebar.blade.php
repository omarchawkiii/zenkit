<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{asset('/assets/admin/images/logo-sm.png')}}" alt="" height="37">
            </span>
            <span class="logo-lg">
                <img src="{{asset('/assets/admin/images/logo-dark.png')}}" alt="" height="37">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{asset('/assets/admin/images/logo-sm.png')}}" alt="" height="37">
            </span>
            <span class="logo-lg">
                <img src="{{asset('/assets/admin/images/logo-light.png')}}" alt="" height="37">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar" data-simplebar="init" class="h-100 simplebar-scrollable-y"><div class="simplebar-wrapper" style="margin: 0px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: 100%; overflow: hidden scroll;"><div class="simplebar-content" style="padding: 0px;">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav" data-simplebar="init"><div class="simplebar-wrapper" style="margin: 0px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: auto; overflow: hidden;"><div class="simplebar-content" style="padding: 0px;">
                <li class="menu-title"><span data-key="t-menu">Menu</span></li>



                <li class="nav-item d-flex d-flex justify-content-between">
                    <a class="nav-link menu-link {{Route::is('admin.users') ? 'active' : '' }} " href="{{  route('admin.users') }}">
                        <i class=" las la-user"></i> <span data-key="t-dashboard">{{ __('message.users')}}</span>
                    </a>
                </li>



            </div></div></div></div><div class="simplebar-placeholder" style="width: 260px; height: 1293px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="width: 0px; display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: hidden;"><div class="simplebar-scrollbar" style="height: 0px; display: none;"></div></div></ul>
        </div>
        <!-- Sidebar -->
    </div></div></div></div><div class="simplebar-placeholder" style="width: 260px; height: 1293px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="width: 0px; display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: visible;"><div class="simplebar-scrollbar" style="height: 34px; transform: translate3d(0px, 0px, 0px); display: block;"></div></div></div>

    <div class="sidebar-background"></div>
</div>
