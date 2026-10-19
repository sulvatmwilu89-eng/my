<?php
$pageTitle = 'Dashboard | BookEasy';
$activePage = 'dashboard';
$homePrefix = '';
$pagePrefix = 'pages/';
$assetPrefix = '';
require __DIR__ . '/includes/header.php';
require __DIR__ . '/includes/sidebar.php';
?>
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid"><h1>Appointment Dashboard</h1><p class="text-muted">Overview of booking activity and system modules.</p></div>
  </section>
  <section class="content"><div class="container-fluid">
    <div class="row">
      <div class="col-lg-3 col-6"><div class="small-box bg-info"><div class="inner"><h3>24</h3><p>Appointments Today</p></div><div class="icon"><i class="far fa-calendar-check"></i></div><a href="pages/appointments.php" class="small-box-footer">View appointments <i class="fas fa-arrow-circle-right"></i></a></div></div>
      <div class="col-lg-3 col-6"><div class="small-box bg-success"><div class="inner"><h3>18</h3><p>Confirmed</p></div><div class="icon"><i class="fas fa-check-circle"></i></div><a href="pages/appointments.php" class="small-box-footer">Review bookings <i class="fas fa-arrow-circle-right"></i></a></div></div>
      <div class="col-lg-3 col-6"><div class="small-box bg-warning"><div class="inner"><h3>4</h3><p>Pending</p></div><div class="icon"><i class="fas fa-clock"></i></div><a href="pages/appointments.php" class="small-box-footer">Review pending <i class="fas fa-arrow-circle-right"></i></a></div></div>
      <div class="col-lg-3 col-6"><div class="small-box bg-danger"><div class="inner"><h3>2</h3><p>Cancelled</p></div><div class="icon"><i class="fas fa-calendar-times"></i></div><a href="pages/appointments.php" class="small-box-footer">View status <i class="fas fa-arrow-circle-right"></i></a></div></div>
    </div>
    <div class="row">
      <div class="col-md-8"><div class="card card-primary card-outline"><div class="card-header"><h3 class="card-title"><i class="fas fa-tasks mr-1"></i> Main Modules</h3></div><div class="card-body">
        <div class="table-responsive"><table class="table table-bordered table-hover"><thead><tr><th>Module</th><th>Purpose</th><th>Open</th></tr></thead><tbody>
          <tr><td>Appointments</td><td>Schedule, review, and update appointment records.</td><td><a class="btn btn-sm btn-primary" href="pages/appointments.php">Open</a></td></tr>
          <tr><td>Customers</td><td>Maintain customer contact details.</td><td><a class="btn btn-sm btn-primary" href="pages/customers.php">Open</a></td></tr>
          <tr><td>Services</td><td>Manage services and their duration/prices.</td><td><a class="btn btn-sm btn-primary" href="pages/services.php">Open</a></td></tr>
          <tr><td>Staff</td><td>Maintain staff profiles and availability assignments.</td><td><a class="btn btn-sm btn-primary" href="pages/staff.php">Open</a></td></tr>
        </tbody></table></div>
      </div></div></div>
      <div class="col-md-4"><div class="card card-info"><div class="card-header"><h3 class="card-title">Project Notes</h3></div><div class="card-body">
        <p>This is an educational prototype for the AdminLTE interface and relational database assignment.</p>
        <div class="project-note"><strong>Important:</strong> Dashboard values are illustrative sample figures, not live database totals.</div>
        <hr><p><i class="fas fa-database text-info mr-1"></i> MySQL relational database design supplied.</p>
        <p><i class="fas fa-project-diagram text-info mr-1"></i> ERD and data dictionary supplied.</p>
      </div></div></div>
    </div>
  </div></section>
</div>
<?php require __DIR__ . '/includes/footer.php'; ?>
