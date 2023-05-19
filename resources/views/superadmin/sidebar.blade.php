<div class="sidebar" style="overflow: hidden">
    <nav class="sidebar-nav" >
        <ul class="nav">
            <li class="nav-item">
                <a href="/superadmin/admin" class="nav-link {{ request()->is('/superadmin/admin') || request()->is('/superadmin/admin/*') ? 'active' : '' }}">
                    <i class="fa-fw fas fa-user nav-icon">
                    </i>
                    Admin
                </a>
            </li>
            <li class="nav-item">
                <a href="/superadmin/superadmin" class="nav-link {{ request()->is('/superadmin/superadmin') || request()->is('/superadmin/superadmin/*') ? 'active' : '' }}">
                    <i class="fa-fw fas fa-user nav-icon">
                    </i>
                    Super Admin
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                    <i class="nav-icon fas fa-fw fa-sign-out-alt">
                    </i>
                    Log Out
                </a>
            </li>
        </ul>
    </nav>
</div>

