<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <a href="<?= $homePrefix ?? '' ?>index.php" class="brand-link">
    <i class="fas fa-calendar-check brand-image ml-3 mt-1"></i>
    <span class="brand-text font-weight-light">BookEasy</span>
  </a>
  <div class="sidebar">
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image"><i class="fas fa-user-circle fa-2x text-light"></i></div>
      <div class="info"><span class="d-block text-white">System Administrator</span></div>
    </div>
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
        <li class="nav-item"><a href="<?= $homePrefix ?? '' ?>index.php" class="nav-link <?= $activePage === 'dashboard' ? 'active' : '' ?>"><i class="nav-icon fas fa-tachometer-alt"></i><p>Dashboard</p></a></li>
        <li class="nav-item"><a href="<?= $pagePrefix ?? 'pages/' ?>appointments.php" class="nav-link <?= $activePage === 'appointments' ? 'active' : '' ?>"><i class="nav-icon far fa-calendar-alt"></i><p>Appointments</p></a></li>
        <li class="nav-item"><a href="<?= $pagePrefix ?? 'pages/' ?>customers.php" class="nav-link <?= $activePage === 'customers' ? 'active' : '' ?>"><i class="nav-icon fas fa-users"></i><p>Customers</p></a></li>
        <li class="nav-item"><a href="<?= $pagePrefix ?? 'pages/' ?>services.php" class="nav-link <?= $activePage === 'services' ? 'active' : '' ?>"><i class="nav-icon fas fa-concierge-bell"></i><p>Services</p></a></li>
        <li class="nav-item"><a href="<?= $pagePrefix ?? 'pages/' ?>staff.php" class="nav-link <?= $activePage === 'staff' ? 'active' : '' ?>"><i class="nav-icon fas fa-user-tie"></i><p>Staff</p></a></li>
      </ul>
    </nav>
  </div>
</aside>
