<li
    class="sidebar-item active ">
    <a href="{{route('admin.index')}}" class="sidebar-item {{ request()->routeIs('admin.index') ? 'active' : '' }}" class='sidebar-link'>
        <i class="bi bi-grid-fill"></i>
        <span>Dashboard</span>
    </a>
</li>

<li
    class="sidebar-item has-sub {{ request()->routeIs('admin.all.complaints') || request()->routeIs('admin.all.pending.complaints') || request()->routeIs('admin.all.process.complaints') || request()->routeIs('admin.all.success.complaints') ? 'active' : '' }}">
    <a href="index.html" class='sidebar-link'>
        <i class="bi bi-flag-fill"></i>
        <span>Lihat Pengaduan</span>
    </a>

    <ul class="submenu submenu-closed" style="--submenu-height: 215px;">
        <li class="submenu-item {{ request()->routeIs('admin.all.complaints') ? 'active' : '' }} ">
            <a class="submenu-link" href="{{route('admin.all.complaints')}}">Semua Pengaduan</a>
        </li>
        <li class="submenu-item  {{ request()->routeIs('admin.all.pending.complaints') ? 'active' : '' }}">
            <a class="submenu-link" href="{{route('admin.all.pending.complaints')}}">Pending</a>
        </li>
        <li class="submenu-item  {{ request()->routeIs('admin.all.process.complaints') ? 'active' : '' }}">
            <a class="submenu-link" href="{{route('admin.all.process.complaints')}}">Prosess</a>
        </li>
        <li class="submenu-item  {{ request()->routeIs('admin.all.success.complaints') ? 'active' : '' }}">
            <a class="submenu-link" href="{{route('admin.all.success.complaints')}}">Selesai</a>
        </li>
    </ul>

</li>

<li class="sidebar-item">
    <a href="{{route('admin.users.index')}}" class="{{ request()->routeIs('admin.users.index') ? 'active' : '' }}" class='sidebar-link'>
        <i class="bi bi-people-fill"></i>
        <span>Master User</span>
    </a>
</li>


