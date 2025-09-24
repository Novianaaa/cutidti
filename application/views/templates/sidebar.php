<style>
    .sidebar .nav-link {
        display: flex;
        align-items: center;
    }

    .sidebar .nav-link i {
        font-size: 1rem;
        width: 20px;
        /* biar semua icon punya lebar sama */
        text-align: center;
        /* icon rata tengah */
        margin-right: 8px;
        /* jarak icon ke text */
    }
</style>

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
    <li class="nav-item <?= (isset($subtitle) && $subtitle == 'Pengajuan') ? 'active' : ''; ?>">
        <a class="nav-link" href="<?= base_url('cuti/pengajuan'); ?>">
            <i class="fas fa-calendar-plus"></i>
            <span>Pengajuan</span></a>
    </li>
    <li class="nav-item <?= (isset($subtitle) && $subtitle == 'Riwayat') ? 'active' : ''; ?>">
        <a class="nav-link" href="<?= base_url('cuti/riwayat'); ?>">
            <i class="fas fa-calendar-alt"></i>
            <span>Riwayat</span></a>
    </li>
    <!-- <div id="collapseTwo" class="collapse <?= ($title == 'Cuti') ? 'show' : ''; ?>" aria-labelledby="headingTwo"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item <?= (isset($subtitle) && $subtitle == 'Pengajuan') ? 'active' : ''; ?>" href="<?= base_url('cuti/pengajuan'); ?>">Pengajuan</a>
            <a class="collapse-item <?= (isset($subtitle) && $subtitle == 'Approval') ? 'active' : ''; ?>" href="<?= base_url('cuti/approval'); ?>">Approval</a>
            <a class="collapse-item <?= (isset($subtitle) && $subtitle == 'Riwayat') ? 'active' : ''; ?>" href="<?= base_url('cuti/riwayat'); ?>">Riwayat</a>
        </div>
    </div> -->

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Admin
    </div>
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item <?= (isset($subtitle) && $subtitle == 'Approval') ? 'active' : ''; ?>">
        <a class="nav-link" href="<?= base_url('cuti/approval'); ?>">
            <i class="fas fa-calendar-check"></i>
            <span>Approval</span></a>
    </li>
    <li class="nav-item <?= (isset($subtitle) && $subtitle == 'Data Staff') ? 'active' : ''; ?>">
        <a class="nav-link" href="<?= base_url('admin/datastaff'); ?>">
            <i class="fas fa-users"></i>
            <span>Data Staff</span></a>
    </li>
    </li>
    <li class="nav-item <?= (isset($subtitle) && $subtitle == 'Data Cuti') ? 'active' : ''; ?>">
        <a class="nav-link" href="<?= base_url('admin/datacuti'); ?>">
            <i class="fas fa-calendar-week"></i>
            <span>Data Cuti</span></a>
    </li>
    <li class="nav-item <?= (isset($subtitle) && $subtitle == 'Laporan') ? 'active' : ''; ?>">
        <a class="nav-link" href="<?= base_url('admin/laporan'); ?>">
            <i class="fas fa-fw fa-folder"></i>
            <span>Laporan</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">

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