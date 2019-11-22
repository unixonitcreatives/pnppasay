<?php include('template/session.php'); ?>
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
            <h1 class="m-0 text-dark">Pending Applicant</h1>
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
                      <th>Logs</th>
                      <th>Action</th>
                    </thead>
                    <tbody>
                    <?php
                        // Include config file
                        require_once 'config.php';
                        // Attempt select query execution
                        $query = "SELECT * FROM applicant WHERE application_status='Pending' ORDER BY last_name asc";
                        if($result = mysqli_query($link, $query)){
                          if(mysqli_num_rows($result) > 0){
                            $ctr = 0;
                            while($row = mysqli_fetch_array($result)){
                              $ctr++;
                              echo "<tr>";
                              echo "<td>" . $ctr . "</td>";
                              echo "<td> Coming Soon! </td>";
                              echo "<td>" . $row['last_name'].", ".$row['first_name']." ".$row['middle_name']." ".$row['suffix'] . "</td>";
                              echo "<td>" . $row['application_status'] . "</td>";
                              echo "<td>" . $row['payment_status'] . "</td>";
                              echo "<td>" . $row['encoded_by'] ." ". $row['encoded_at'] . "</td>";
                              echo "<td>";
                              echo "
                              <a href='applicant-preview.php?id=".$row['id']."&&encoded_by=".$row['encoded_by']."' 'type='button' class='btn btn-success btn-sm'>Update</a>";

                              echo "
                              <button type='button' class='btn btn-primary btn-sm' data-toggle='modal' data-target='#viewmodal'>
                                View
                              </button>";

                              echo "</td>";
                              echo "</tr>";
                            }
                            // Free result set
                            mysqli_free_result($result);
                          } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                          }
                        } else{
                          echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                        }

                    // Close connection
                    mysqli_close($link);
                    ?>
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
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>



  <!-- The Modal -->
  <div class="modal fade" id="viewmodal">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Applicant Detail</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          Modal body..
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-success" >Verify</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
  </div>



<?php include('template/footer.php'); ?>
<?php include('template/js.php'); ?>
</body>
</html>
