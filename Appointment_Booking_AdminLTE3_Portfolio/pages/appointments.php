<?php
$pageTitle = 'Appointments | BookEasy';
$activePage = 'appointments';
$homePrefix = '../';
$pagePrefix = '';
$assetPrefix = '../';
require __DIR__ . '/../includes/header.php';
require __DIR__ . '/../includes/sidebar.php';
?>
<div class="content-wrapper">
 <section class="content-header"><div class="container-fluid"><h1>Appointments</h1><p class="text-muted">Book, review, and manage customer appointments.</p></div></section>
 <section class="content"><div class="container-fluid">
  <div class="alert alert-info"><i class="fas fa-info-circle mr-1"></i> Interface prototype: the form and table demonstrate the planned screen. Connect form submission to validated PDO insert/update logic before using it for real bookings.</div>
  <div class="card card-primary">
   <div class="card-header"><h3 class="card-title">New Appointment</h3></div>
   <form>
    <div class="card-body"><div class="row">
     <div class="form-group col-md-6"><label class="required-label">Customer</label><select class="form-control" required><option value="">Select customer</option><option>Example customer (sample)</option></select></div>
     <div class="form-group col-md-6"><label class="required-label">Service</label><select class="form-control" required><option value="">Select service</option><option>Consultation (sample)</option></select></div>
     <div class="form-group col-md-6"><label class="required-label">Staff member</label><select class="form-control" required><option value="">Select staff</option><option>Available staff (sample)</option></select></div>
     <div class="form-group col-md-3"><label class="required-label">Date</label><input type="date" class="form-control" required></div>
     <div class="form-group col-md-3"><label class="required-label">Start time</label><input type="time" class="form-control" required></div>
     <div class="form-group col-md-6"><label>Status</label><select class="form-control"><option>Pending</option><option>Confirmed</option><option>Completed</option><option>Cancelled</option><option>No-show</option></select></div>
     <div class="form-group col-md-6"><label>Notes</label><input type="text" class="form-control" placeholder="Optional notes"></div>
    </div><small class="text-muted">End time can be calculated from the selected service duration. The database design stores start and end times for conflict checking.</small></div>
    <div class="card-footer"><button type="button" class="btn btn-primary" onclick="alert('Prototype only: connect this form to server-side validation and the database before saving.');"><i class="fas fa-save mr-1"></i> Save Appointment (prototype)</button> <button type="reset" class="btn btn-default">Clear</button></div>
   </form>
  </div>
  <div class="card"><div class="card-header"><h3 class="card-title">Appointment Register</h3><div class="card-tools"><button class="btn btn-sm btn-outline-primary" onclick="window.print()"><i class="fas fa-print mr-1"></i>Print</button></div></div>
   <div class="card-body table-responsive p-0"><table class="table table-hover text-nowrap"><thead><tr><th>ID</th><th>Customer</th><th>Service</th><th>Staff</th><th>Date</th><th>Time</th><th>Status</th><th>Actions (planned)</th></tr></thead><tbody>
    <tr><td>1</td><td>Sample Customer</td><td>Consultation</td><td>Sample Staff</td><td>2026-10-20</td><td>10:00</td><td><span class="badge badge-success">Confirmed</span></td><td><button class="btn btn-xs btn-info" disabled>View</button> <button class="btn btn-xs btn-warning" disabled>Edit</button> <button class="btn btn-xs btn-danger" disabled>Cancel</button></td></tr>
    <tr><td colspan="8" class="text-muted">Illustrative row only. Replace with records fetched from the appointments table.</td></tr>
   </tbody></table></div>
  </div>
 </div></section>
</div>
<?php require __DIR__ . '/../includes/footer.php'; ?>
