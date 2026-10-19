<?php
$pageTitle = 'Staff | BookEasy';
$activePage = 'staff';
$homePrefix = '../';
$pagePrefix = '';
$assetPrefix = '../';
require __DIR__ . '/../includes/header.php';
require __DIR__ . '/../includes/sidebar.php';
?>
<div class="content-wrapper">
 <section class="content-header"><div class="container-fluid"><h1>Staff</h1><p class="text-muted">Maintain staff profiles. Staff assignments help prevent overlapping appointments.</p></div></section>
 <section class="content"><div class="container-fluid">
  <div class="alert alert-info"><i class="fas fa-info-circle mr-1"></i> Planned management screen. The fields below map to the relational database design; implement server-side CRUD before real use.</div>
  <div class="card card-primary"><div class="card-header"><h3 class="card-title">Add Staff</h3></div>
   <div class="card-body"><div class="row">
    <div class="form-group col-md-4"><label>First name</label><input class="form-control" placeholder="Enter first name"></div><div class="form-group col-md-4"><label>Last name</label><input class="form-control" placeholder="Enter last name"></div><div class="form-group col-md-4"><label>Phone</label><input class="form-control" placeholder="Enter phone"></div><div class="form-group col-md-4"><label>Email</label><input class="form-control" placeholder="Enter email"></div><div class="form-group col-md-4"><label>Active</label><input class="form-control" placeholder="Enter active"></div>
   </div></div><div class="card-footer"><button class="btn btn-primary" type="button" onclick="alert('Prototype only: implement validation and database operations.');">Save (prototype)</button> <button class="btn btn-default" type="reset">Clear</button></div></div>
  <div class="card"><div class="card-header"><h3 class="card-title">Staff Register</h3></div><div class="card-body table-responsive p-0">
   <table class="table table-bordered table-hover"><thead><tr><th>Staff ID</th><th>First name</th><th>Last name</th><th>Phone</th><th>Email</th><th>Active</th><th>Actions</th></tr></thead><tbody><tr><td colspan="7" class="text-muted">No live records displayed in this interface prototype. Connect this table to the matching database table.</td></tr></tbody></table>
  </div></div>
 </div></section>
</div>
<?php require __DIR__ . '/../includes/footer.php'; ?>
