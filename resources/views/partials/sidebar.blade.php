<div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
    <ul class="c-sidebar-nav ps">
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ route('admin.home') }}">
                <i class="fas fa-tachometer-alt"></i>
                &nbsp;
                Dashboard
            </a>
        </li>
        <li class="c-sidebar-nav-title">
            Administration
        </li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link {{ active('admin/users/*', 'c-active') }}"
                href="{{ route('admin.users') }}">
                <i class="fas fa-users"></i>
                &nbsp;
                Users
            </a>
        </li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt"></i>
                &nbsp;
                Log out
            </a>
        </li>
        <li class="c-sidebar-nav-divider"></li>
        <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
            <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
        </div>
        <div class="ps__rail-y" style="top: 0px; right: 0px;">
            <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
        </div>
    </ul>
    <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent"
        data-class="c-sidebar-minimized"></button>
</div>
