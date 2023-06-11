<div class="sidebar" style="overflow: hidden">
    <nav class="sidebar-nav" >
        <ul class="nav">
            <li class="nav-item">
                <a href="{{ route("admin.home") }}" class="nav-link">
                    <i class="nav-icon fas fa-fw fa-tachometer-alt">

                    </i>
                    {{ trans('global.dashboard') }}
                </a>
            </li>
            {{-- @can('user_management_access')
                <li class="nav-item nav-dropdown {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'open' : '' }} {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'open' : '' }} {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'open' : '' }}">
                    <a class="nav-link  nav-dropdown-toggle" href="#">
                        <i class="fa-fw fas fa-users nav-icon">

                        </i>
                        User Management
                    </a>
                    <ul class="nav-dropdown-items">
                            <li class="nav-item">
                                <a href="{{ route("admin.permissions.index") }}" class="nav-link {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-unlock-alt nav-icon">
                                    </i>
                                    {{ trans('cruds.permission.title') }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route("admin.roles.index") }}" class="nav-link {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-briefcase nav-icon">

                                    </i>
                                    {{ trans('cruds.role.title') }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route("admin.users.index") }}" class="nav-link {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-user nav-icon">

                                    </i>
                                    {{ trans('cruds.user.title') }}
                                </a>
                            </li>
                    </ul>
                </li>
            @endcan --}}

            {{-- <li class="nav-item nav-dropdown {{ request()->is('admin/mitra') || request()->is('admin/mitra/*') ? 'open' : '' }} {{ request()->is('admin/lowonganmitra') || request()->is('admin/lowonganmitra/*') ? 'open' : '' }}">
                <a class="nav-link  nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-building nav-icon">

                    </i>
                    Mitra Management
                </a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a href="{{ route("admin.mitra.index") }}" class="nav-link {{ request()->is('admin/mitra') || request()->is('admin/mitra/*') ? 'active' : '' }}">
                            <i class="fa-fw fas fa-building nav-icon">

                            </i>
                            Mitra
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route("admin.lowonganmitra.index") }}" class="nav-link {{ request()->is('admin/lowonganmitra') || request()->is('admin/lowonganmitra/*') ? 'active' : '' }}">
                            <i class="fa fa-address-book nav-icon">

                            </i>
                            Lowongan Mitra
                        </a>
                    </li>
                </ul>
            </li> --}}

            {{-- <li class="nav-item nav-dropdown ">
                <a class="nav-link  nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-building nav-icon">

                    </i>
                    Kandidat Management
                </a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a href="{{ route('admin.kandidat.index') }}" class="nav-link {{ request()->is('admin/kandidat') || request()->is('admin/kandidat/*') ? 'active' : '' }}">
                            <i class="fa-fw fas fa-users nav-icon">
                            </i>
                            Kandidat
                        </a>
                    </li>
                </ul>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a href="{{ route("admin.calonkandidat.index") }}" class="nav-link {{ request()->is('admin/calonkandidat') || request()->is('admin/calonkandidat/*') ? 'active' : '' }}">
                            <i class="fa-fw fas fa-users nav-icon">
                            </i>
                            Calon Kandidat
                        </a>
                    </li>
                </ul>
            </li> --}}

            <li class="nav-item">
                <a href="{{ route("admin.jobs.index") }}" class="nav-link {{ request()->is('admin/jobs') || request()->is('admin/jobs/*') ? 'active' : '' }}">
                    <i class="fa-fw fas fa-briefcase nav-icon">

                    </i>
                    {{ trans('cruds.job.title') }}
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route("admin.companies.index") }}" class="nav-link {{ request()->is('admin/companies') || request()->is('admin/companies/*') ? 'active' : '' }}">
                    <i class="fa-fw fas fa-building nav-icon">

                    </i>
                    {{ trans('cruds.company.title') }}
                </a>
            </li>
            {{-- <li class="nav-item">
                <a href="{{ route("admin.locations.index") }}" class="nav-link {{ request()->is('admin/locations') || request()->is('admin/locations/*') ? 'active' : '' }}">
                    <i class="fa-fw fas fa-map-marker-alt nav-icon">

                    </i>
                    {{ trans('cruds.location.title') }}
                </a>
            </li> --}}
            <li class="nav-item">
                <a href="{{ route("admin.categories.index") }}" class="nav-link {{ request()->is('admin/categories') || request()->is('admin/categories/*') ? 'active' : '' }}">
                    <i class="fa-fw fas fa-tags nav-icon">

                    </i>
                    {{ trans('cruds.category.title') }}
                </a>
            </li>
            {{-- <li class="nav-item">
                <a href="{{ route("admin.lowongan.index") }}" class="nav-link {{ request()->is('admin/lowongan') || request()->is('admin/lowongan/*') ? 'active' : '' }}">
                    <i class="fa fa-address-book nav-icon">

                    </i>
                    Lowongan
                </a>
            </li> --}}
            <li class="nav-item">
                <a href="{{ route("admin.article.index") }}" class="nav-link {{ request()->is('admin/article') || request()->is('admin/article/*') ? 'active' : '' }}">
                    <i class="fa fa-book nav-icon">

                    </i>
                    Article
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route("admin.price.index") }}" class="nav-link {{ request()->is('admin/price') || request()->is('admin/price/*') ? 'active' : '' }}">
                    <i class="fa fa-tags nav-icon">

                    </i>
                    Price
                </a>
            </li>
            <li class="nav-item">
                <a href="/admin/contact" class="nav-link {{ request()->is('admin/contact') || request()->is('admin/contact/*') ? 'active' : '' }}">
                    <i class="fa-fw fas fa-user nav-icon">

                    </i>
                    Contact
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                    <i class="nav-icon fas fa-fw fa-sign-out-alt">
                    </i>
                    {{ trans('global.logout') }}
                </a>
            </li>
        </ul>
    </nav>
</div>

