<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-book-open"></i>
    </div>
    <div class="sidebar-brand-text mx-3">SISPER <sup>1.0</sup></div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Charts -->
  <li class="nav-item active">
    <a class="nav-link" href="<?php echo site_url('dashboard');?>">
      <i class="fas fa-fw fa-chart-line"></i>
      <span>Dashboard</span></a>
  </li>
  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    DATA MAHASISWA
  </div>

  <li class="nav-item">
    <a class="nav-link" href="<?php echo site_url('mahasiswa');?>">
      <i class="fas fa-fw fa-user-graduate"></i>
      <span>Mahasiswa</span></a>
  </li>

  <!-- Nav Item - Charts -->
  <li class="nav-item">
    <a class="nav-link" href="<?php echo site_url('programstudi');?>">
      <i class="fas fa-fw fa-graduation-cap"></i>
      <span>Program Studi</span></a>
  </li>

   <!-- Nav Item - Charts -->
   <li class="nav-item">
    <a class="nav-link" href="<?php echo site_url('fakultas');?>">
      <i class="fas fa-fw fa-university"></i>
      <span>Fakultas</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">
  <!-- Heading -->
  <div class="sidebar-heading">
    DATA PERPUSTAKAAN
  </div>

  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
      <i class="fas fa-fw fa-book"></i>
      <span>Buku</span>
    </a>
    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" href="<?php echo site_url('buku');?>">Koleksi Buku</a>
        <a class="collapse-item" href="<?php echo site_url('kategori_buku');?>">Kategori Buku</a>
        <a class="collapse-item" href="<?php echo site_url('rakbuku');?>">Rak Buku</a>
      </div>
    </div>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="<?php echo site_url('peminjaman');?>">
      <i class="fas fa-fw fa-folder-open"></i>
      <span>Peminjaman</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="<?php echo site_url('pengembalian');?>">
      <i class="fas fa-fw fa-folder-open"></i>
      <span>Pengembalian</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="<?php echo site_url('petugas');?>">
      <i class="fas fa-fw fa-user"></i>
      <span>Petugas</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="<?php echo site_url('denda');?>">
      <i class="fas fa-fw fa-receipt"></i>
      <span>Denda</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="<?php echo site_url('notifikasi');?>">
      <i class="fas fa-fw fa-sticky-note"></i>
      <span>Notifikasi</span></a>
  </li>
  <hr class="sidebar-divider">
  <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>
</ul>
