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
                              <button type='button' class='btn btn-success btn-sm' data-toggle='modal' data-target='#verifymodal'>
                                Verify
                              </button>";

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
  <div class="modal fade" id="verifymodal">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Applicant Detail</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

                      <div class="row">
                            <div class="col-4">
                              <div class="form-group">
                                  <label>Police Station</label>
                                  <select class="form-control" name="police_station">
                                    <option>Pasay</option>
                                  </select>
                              </div>
                            </div>  

                            <div class="col-4">
                              <div class="form-group">
                                  <label>Application Type</label>
                                  <select class="form-control" name="application_type">
                                    <option>Police Clearance</option>
                                  </select>
                              </div>
                            </div>
                         
                            <div class="col-4">
                              <div class="form-group">
                                  <label>Purpose</label>
                                  <select class="form-control" name="purpose">
                                    <option>Bank Requirements</option>
                                  </select>
                              </div>
                            </div>
                        </div>

                        <div class="row">
                          <div class="col-3">
                            <div class="form-group">
                            <label>First Name</label>
                            <input type="text" class="form-control" name="first_name" placeholder="">
                            </div>
                          </div>

                          <div class="col-3">
                            <div class="form-group">
                            <label>Middle Name</label>
                            <input type="text" class="form-control" name="middle_name" placeholder="">
                            </div>
                          </div>

                          <div class="col-3">
                            <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" class="form-control" name="last_name" placeholder="">
                            </div>
                          </div>

                          <div class="col-3">
                            <div class="form-group">
                            <label>Suffix</label>
                            <input type="text" class="form-control" name="suffix" placeholder="">
                            </div>
                          </div>                            
                        </div>

                        <div class="row">
                          <div class="col-12">
                            <div class="form-group">
                            <label>Address</label>
                            <input type="text" class="form-control" name="address" placeholder="">
                            </div>
                          </div>
                        </div>

                        <div class="row">


                          <div class="col-3">
                            <div class="form-group">
                              <label>Date of Birth</label>
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                </div>
                                <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="mm/dd/yyyy" name="dob" data-mask>
                              </div>
                              <!-- /.input group -->
                            </div>
                          </div>

                          <div class="col-3">
                            <div class="form-group">
                            <label>Place of Birth</label>
                            <input type="text" class="form-control" name="pob" placeholder="">
                            </div>
                          </div>

                          <div class="col-3">
                            <div class="form-group">
                            <label>Gender</label>
                            <select class="form-control" name="gender">
                                <option value="MALE">MALE</option>
                                <option value="FEMALE">FEMALE</option>
                            </select>
                            </div>
                          </div>

                          <div class="col-3">
                            <div class="form-group">
                            <label>Nationality</label>
                            <select class="form-control" name="nationality">
                                <?php include('country.php'); ?>
                            </select>
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-3">
                            <div class="form-group">
                            <label>Civil Status</label>
                            <select class="form-control" name="civil_status">
                                <option>SINGLE</option>
                                <option>MARRIED</option>
                                <option>SEPERATED</option>
                                <option>WIDOWED</option>
                                <option>WIDOWER</option>
                                <option>ANNULLED</option>
                            </select>
                            </div>
                          </div>

                          <div class="col-3">
                            <div class="form-group">
                            <label>Religion</label>
                            <input type="text" class="form-control" name="religion" placeholder="">
                            </div>
                          </div>

                          <div class="col-3">
                            <div class="form-group">
                              <label>Height</label>
                              <div class="input-group">
                                  <input type="text" class="form-control" name="height" placeholder="">
                                  <div class="input-group-append">
                                    <span class="input-group-text">cm</span>
                                  </div>
                                </div>
                            </div>
                          </div>

                          <div class="col-3">
                            <div class="form-group">
                              <label>Weight</label>
                              <div class="input-group">
                                  <input type="text" class="form-control" name="weight" placeholder="">
                                  <div class="input-group-append">
                                    <span class="input-group-text">kg</span>
                                  </div>
                                </div>
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-3">
                            <div class="form-group">
                            <label>Hair Color</label>
                            <input type="text" class="form-control" name="hair_color" placeholder="">
                            </div>
                          </div>

                          <div class="col-3">
                            <div class="form-group">
                            <label>Eye Color</label>
                            <input type="text" class="form-control" name="eye_color" placeholder="">
                            </div>
                          </div>

                          <div class="col-3">
                            <div class="form-group">
                            <label>Contact No.</label>
                            <input type="text" class="form-control" name="contact_no" placeholder="">
                            </div>
                          </div>

                        </div>

                        <div class="row">
                          <div class="col-6">
                            <div class="form-group">
                            <label>Nunal (Mole)</label>
                            <input type="text" class="form-control" name="nunal" placeholder="">
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-6">
                            <div class="form-group">
                            <label>Scar (Peklat)</label>
                            <input type="text" class="form-control" name="scar" placeholder="">
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-6">
                            <div class="form-group">
                            <label>Tattoo</label>
                            <input type="text" class="form-control" name="tattoo" placeholder="">
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-6">
                            <div class="form-group">
                            <label>Birthmark (Balat)</label>
                            <input type="text" class="form-control" name="birthmark" placeholder="">
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-6">
                            <div class="form-group">
                            <label>Harelip (Bingot)</label>
                            <input type="text" class="form-control" name="harelip" placeholder="">
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-6">
                            <div class="form-group">
                            <label>Skin Tag (Kuntil)</label>
                            <input type="text" class="form-control" name="skin_tag" placeholder="">
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-4">
                            <div class="form-group">
                            <label>Contact Person</label>
                            <input type="text" class="form-control" name="e_contact_person" placeholder="">
                            </div>
                          </div>
                          <div class="col-4">
                            <div class="form-group">
                            <label>Contact No.</label>
                            <input type="text" class="form-control" name="e_contact_no" placeholder="">
                            </div>
                          </div>
                        </div>

                  </div>  

                </form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-success" >Verify</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>

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
