<li
    class="sidebar-item active {{ request()->routeIs('user.index') ? 'active' : ''}}">
    <a href="{{route('user.index')}}" class='sidebar-link '>
        <i class="bi bi-grid-fill"></i>
        <span>Dashboard</span>
    </a>
</li>

<li
    class="sidebar-item  {{ request()->routeIs('user.form.complaint') ? 'active' : ''}}">
    <a href="{{route('user.form.complaint')}}" class='sidebar-link '>
        <i class="bi bi-grid-fill"></i>
        <span>Ajukan Pengaduan</span>
    </a>
</li>

<li
    class="sidebar-item has-sub  {{ request()->routeIs('user.all.complaint') || request()->routeIs('user.pending.complaint') || request()->routeIs('user.proses.complaints') || request()->routeIs('user.selesai.complaints') ? 'active' : '' }}">
    <a href="#" class='sidebar-link'>
        <i class="bi bi-flag-fill"></i>
        <span>Lihat Pengaduan</span>
    </a>

    <ul class="submenu submenu-closed" style="--submenu-height: 215px;">
        <li class="submenu-item {{ request()->routeIs('user.all.complaint') ? 'active' : '' }} ">
            <a class="submenu-link" href="{{route('user.all.complaint')}}">Track Semua Pengaduan</a>
        </li>
        <li class="submenu-item {{ request()->routeIs('user.pending.complaint') ? 'active' : '' }} ">
            <a class="submenu-link" href="{{route('user.pending.complaint')}}">Pending</a>
        </li>
        <li class="submenu-item {{ request()->routeIs('user.proses.complaint') ? 'active' : '' }} ">
            <a class="submenu-link" href="{{route('user.proses.complaint')}}">Proses</a>
        </li>
        <li class="submenu-item {{ request()->routeIs('user.selesai.complaint') ? 'active' : '' }} ">
            <a class="submenu-link" href="{{route('user.selesai.complaint')}}">Selesai</a>
        </li>
    </ul>

</li>