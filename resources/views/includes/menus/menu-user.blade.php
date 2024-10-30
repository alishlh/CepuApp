<li
    class="sidebar-item active ">
    <a href="{{route('user.index')}}" class='sidebar-item {{ request()->routeIs('user.index') ? 'active' : ''}}'>
        <i class="bi bi-grid-fill"></i>
        <span>Dashboard</span>
    </a>
</li>

<li
    class="sidebar-item active ">
    <a href="{{route('user.form.complaint')}}" class='sidebar-item {{ request()->routeIs('user.form.complaint') ? 'active' : ''}}'>
        <i class="bi bi-grid-fill"></i>
        <span>Ajukan Pengaduan</span>
    </a>
</li>

<li
    class="sidebar-item has-sub  {{ request()->routeIs('admin.all.complaints') || request()->routeIs('admin.all.pending.complaints') || request()->routeIs('admin.all.process.complaints') || request()->routeIs('admin.all.success.complaints') ? 'active' : '' }}">
    <a href="{{route('user.form.complaint')}}" class='sidebar-link'>
        <i class="bi bi-flag-fill"></i>
        <span>Lihat Pengaduan</span>
    </a>

    <ul class="submenu submenu-closed" style="--submenu-height: 215px;">
        <li class="submenu-item">
            <a class="submenu-link" href="">Track Semua Pengaduan</a>
        </li>
        <li class="submenu-item">
            <a class="submenu-link" href="">Pending</a>
        </li>
        <li class="submenu-item">
            <a class="submenu-link" href="">Prosess</a>
        </li>
        <li class="submenu-item ">
            <a class="submenu-link" href="">Selesai</a>
        </li>
    </ul>

</li>