<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-dark accordion"
    id="accordionSidebar"
    style="background-color:#143557ff;">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
            <img src="https://simaster.ugm.ac.id/ugmfw-assets/images/maskot-simaster.png"
                alt="Logo UGM"
                style="height: 40px; margin-right: 10px;">
        </div>
        <div class="sidebar-brand-text mx-3">CutiDTI</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item <?= ($title == 'Dashboard') ? 'active' : ''; ?>">
        <a class="nav-link" href="<?= base_url('admin'); ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Cuti
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item <?= ($title == 'Cuti') ? 'active' : ''; ?>">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-calendar-check"></i>
            <span>Cuti</span>
        </a>
        <div id="collapseTwo" class="collapse <?= ($title == 'Cuti') ? 'show' : ''; ?>" aria-labelledby="headingTwo"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item <?= (isset($subtitle) && $subtitle == 'Pengajuan') ? 'active' : ''; ?>" href="<?= base_url('cuti/pengajuan'); ?>">Pengajuan</a>
                <a class="collapse-item <?= (isset($subtitle) && $subtitle == 'Approval') ? 'active' : ''; ?>" href="<?= base_url('cuti/approval'); ?>">Approval</a>
                <a class="collapse-item <?= (isset($subtitle) && $subtitle == 'Riwayat') ? 'active' : ''; ?>" href="<?= base_url('cuti/riwayat'); ?>">Riwayat</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Data User
    </div>

    <!-- Nav Item - User -->
    <li class="nav-item <?= ($title == 'User') ? 'active' : ''; ?>">
        <a class="nav-link <?= ($title == 'User') ? '' : 'collapsed'; ?>"
            href="#" data-toggle="collapse" data-target="#collapsePages"
            aria-expanded="<?= ($title == 'User') ? 'true' : 'false'; ?>"
            aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>User</span>
        </a>
        <div id="collapsePages" class="collapse <?= ($title == 'User') ? 'show' : ''; ?>"
            aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">User Profile</h6>
                <a class="collapse-item <?= (isset($subtitle) && $subtitle == 'Profile') ? 'active' : ''; ?>"
                    href="<?= base_url('user/profile'); ?>">Profile</a>

                <div class="collapse-divider"></div>
                <h6 class="collapse-header">Admin Pages</h6>
                <a class="collapse-item <?= (isset($subtitle) && $subtitle == 'Data Staff') ? 'active' : ''; ?>"
                    href="<?= base_url('admin/datastaff'); ?>">Data Staff</a>
                <a class="collapse-item <?= (isset($subtitle) && $subtitle == 'Data Cuti') ? 'active' : ''; ?>"
                    href="<?= base_url('admin/datacuti'); ?>">Data Cuti</a>
                <a class="collapse-item <?= (isset($subtitle) && $subtitle == 'Laporan') ? 'active' : ''; ?>"
                    href="<?= base_url('admin/laporan'); ?>">Laporan</a>
            </div>
        </div>
    </li>


    <!-- Nav Item - Logout -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('auth/logout'); ?>" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-sign-out-alt fa-sm fa-fw"></i>
            <span>Logout</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->