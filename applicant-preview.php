<?php include('template/session.php'); ?>

<?php
// Include config file
require_once "config.php";

$id = $_GET['id'];

// Attempt select query execution
$query = "SELECT * FROM applicant WHERE id='$id'";
if($result = mysqli_query($link, $query)){
  if(mysqli_num_rows($result) > 0){

    while($row = mysqli_fetch_array($result)){
      $row_police_station = $row['police_station'];
      $row_application_type = $row['application_type'];
      $row_purpose = $row['purpose'];
      $row_first_name = $row['first_name'];
      $row_middle_name = $row['middle_name'];
      $row_last_name = $row['last_name'];
      $row_suffix = $row['suffix'];
      $row_address = $row['address'];
      $row_dob = $row['dob'];
      $row_pob = $row['pob'];
      $row_gender = $row['gender'];
      $row_nationality = $row['nationality'];
      $row_civil_status = $row['civil_status'];
      $row_religion = $row['religion'];
      $row_height = $row['height'];
      $row_weight = $row['weight'];
      $row_hair_color = $row['hair_color'];
      $row_eye_color = $row['eye_color'];
      $row_contact_no = $row['contact_no'];
      $row_mole = $row['mole'];
      $row_scar = $row['scar'];
      $row_tattoo = $row['tattoo'];
      $row_birthmark = $row['birthmark'];
      $row_harelip = $row['harelip'];
      $row_skin_tag = $row['skin_tag'];
      $row_e_contact_person = $row['e_contact_person'];
      $row_e_contact_no = $row['e_contact_no'];
      $row_application_status = $row['application_status'];
      $row_payment_status = $row['payment_status'];
      $row_encoding_mode = $row['encoding_mode'];
      $row_encoded_by = $row['encoded_by'];
      $row_encoded_at = $row['encoded_at'];
      $row_verified_by = $row['verified_by'];
      $row_verified_at = $row['verified_at'];
      $row_paid_to = $row['paid_to'];
    }

    // Free result set
    mysqli_free_result($result);
  } else{
    echo "<p class='lead'><em>No records were found.</em></p>";
  }
} else{
  echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

?>

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
                  <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

                    <div class="row">
                      <div class="col-4">
                        <div class="form-group">
                          <label>Police Station</label>
                          <input type="text" class="form-control" name="police_station" value="<?php echo $row_police_station; ?>" disabled>
                        </div>
                      </div>

                      <div class="col-4">
                        <div class="form-group">
                          <label>Application Type</label>
                          <input type="text" class="form-control" name="police_station" value="<?php echo $row_application_type; ?>" disabled>
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
                          <input type="text" class="form-control" name="first_name" placeholder="" value="<?php echo $row_first_name; ?>">
                        </div>
                      </div>

                      <div class="col-3">
                        <div class="form-group">
                          <label>Middle Name</label>
                          <input type="text" class="form-control" name="middle_name" placeholder="" value="<?php echo $row_middle_name; ?>">
                        </div>
                      </div>

                      <div class="col-3">
                        <div class="form-group">
                          <label>Last Name</label>
                          <input type="text" class="form-control" name="last_name" placeholder="" VALUE="<?php echo $row_last_name;?>">
                        </div>
                      </div>

                      <div class="col-3">
                        <div class="form-group">
                          <label>Suffix</label>
                          <input type="text" class="form-control" name="suffix" placeholder="" value="<?php echo $row_suffix;?>">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-12">
                        <div class="form-group">
                          <label>Address</label>
                          <input type="text" class="form-control" name="address" placeholder="" value="<?php echo $row_address; ?>">
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
                            <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="mm/dd/yyyy" name="dob"  value="<?php echo $row_dob; ?>" data-mask>
                          </div>
                          <!-- /.input group -->
                        </div>
                      </div>

                      <div class="col-3">
                        <div class="form-group">
                          <label>Place of Birth</label>
                          <input type="text" class="form-control" name="pob" placeholder="" value="<?php echo $row_pob; ?>">
                        </div>
                      </div>

                      <div class="col-3">
                        <div class="form-group">
                          <label>Gender</label>
                          <select class="form-control" name="gender">
                            <option><?php echo $row_gender; ?></option>
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
                            <option><?php echo $row_civil_status; ?></option>
                            <option value="SINGLE">SINGLE</option>
                            <option value="MARRIED">MARRIED</option>
                            <option value="SEPERATED">SEPERATED</option>
                            <option value="WIDOWED">WIDOWED</option>
                            <option value="WIDOWER">WIDOWER</option>
                            <option value="ANNULLED">ANNULLED</option>
                          </select>
                        </div>
                      </div>

                      <div class="col-3">
                        <div class="form-group">
                          <label>Religion</label>
                          <input type="text" class="form-control" name="religion" placeholder="" value="<?php echo $row_religion; ?>">
                        </div>
                      </div>

                      <div class="col-3">
                        <div class="form-group">
                          <label>Height</label>
                          <div class="input-group">
                            <input type="text" class="form-control" name="height" placeholder="" value="<?php echo $row_height; ?>">
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
                            <input type="text" class="form-control" name="weight" placeholder="" value="<?php echo $row_weight; ?>">
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
                          <input type="text" class="form-control" name="hair_color" placeholder="" value="<?php echo $row_hair_color; ?>">
                        </div>
                      </div>

                      <div class="col-3">
                        <div class="form-group">
                          <label>Eye Color</label>
                          <input type="text" class="form-control" name="eye_color" placeholder="" value="<?php echo $row_eye_color; ?>">
                        </div>
                      </div>

                      <div class="col-3">
                        <div class="form-group">
                          <label>Contact No.</label>
                          <input type="text" class="form-control" name="contact_no" placeholder="" value="<?php echo $row_e_contact_no; ?>">
                        </div>
                      </div>

                    </div>

                    <div class="row">
                      <div class="col-6">
                        <div class="form-group">
                          <label>Nunal (Mole)</label>
                          <input type="text" class="form-control" name="nunal" placeholder="" value="<?php echo $row_mole; ?>">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-6">
                        <div class="form-group">
                          <label>Scar (Peklat)</label>
                          <input type="text" class="form-control" name="scar" placeholder="" value="<?php echo $row_scar; ?>">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-6">
                        <div class="form-group">
                          <label>Tattoo</label>
                          <input type="text" class="form-control" name="tattoo" placeholder="" value="<?php echo $row_tattoo; ?>">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-6">
                        <div class="form-group">
                          <label>Birthmark (Balat)</label>
                          <input type="text" class="form-control" name="birthmark" placeholder="" value="<?php echo $row_birthmark; ?>">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-6">
                        <div class="form-group">
                          <label>Harelip (Bingot)</label>
                          <input type="text" class="form-control" name="harelip" placeholder="" value="<?php echo $row_harelip; ?>">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-6">
                        <div class="form-group">
                          <label>Skin Tag (Kuntil)</label>
                          <input type="text" class="form-control" name="skin_tag" placeholder="" value="<?php echo $row_skin_tag; ?>">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-4">
                        <div class="form-group">
                          <label>Contact Person</label>
                          <input type="text" class="form-control" name="e_contact_person" placeholder="" value="<?php echo $row_e_contact_person; ?>">
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="form-group">
                          <label>Contact No.</label>
                          <input type="text" class="form-control" name="e_contact_no" placeholder="" value="<?php echo $row_e_contact_no; ?>">
                        </div>
                      </div>
                    </div>
                  </form>

                  <button type="submit" class="btn btn-success" >Info Update</button>
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    <?php include('template/footer.php'); ?>
    <?php include('template/js.php'); ?>
  </body>
  </html>
