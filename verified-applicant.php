<!DOCTYPE html>
<html>
  <?php include('template/head.php'); ?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Topbar -->
  <?php include('template/topbar.php'); ?>
  <!-- Topbar end -->
  <!-- Main Sidebar Container -->
  <?php include('template/sidebar-admin.php'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Verified Applicant</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
           <div class="col-md-12">
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Applicant Details</h3>
                </div>
                <div class="card-body">
                  <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                    <thead>
                      <th>No.</th>
                      <th>Ref.Code</th>
                      <th>Applicant Name</th>
                      <th>Application Status</th>
                      <th>Payment Status</th>
                      <th>Action</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>QWERTY</td>
                        <td>Juan Dela Cruz</td>
                        <td>Pending</td>
                        <td>Unpaid</td>
                        <td>Payment</td>
                      </tr>

                    </tbody>
                    <tfooter></tfooter>
                    
                  </table>
                </div>
              </div>
            </div>
          </div>
      </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
</div>
<!-- ./wrapper -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
<?php include('template/footer.php'); ?>
<?php include('template/js.php'); ?>
</body>
</html>
