<?php include('template/session.php'); ?>

<?php
// Include config file
require_once "config.php";

$id = $_GET['id'];


// Attempt select query execution
$query = "SELECT * FROM applicant WHERE id='$id' ";
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

$alertMessage =
$police_station =
$application_type =
$purpose =
$first_name =
$middle_name =
$last_name =
$suffix =
$address =
$dob =
$pob =
$gender =
$nationality =
$civil_status =
$religion =
$height =
$weight =
$hair_color =
$eye_color =
$contact_no =
$mole =
$scar =
$tattoo =
$birthmark =
$harelip =
$skin_tag =
$e_contact_person =
$e_contact_no =
$application_status =
$payment_status =
$encoding_mode =
$encoded_by =
$encoded_at = "";

//if Update
if ($_SERVER["REQUEST_METHOD"] == "POST"){

  $police_station = test_input($_POST['police_station']);
  $application_type = test_input($_POST['application_type']);
  $purpose = test_input($_POST['purpose']);
  $first_name = test_input($_POST['first_name']);
  $middle_name = test_input($_POST['middle_name']);
  $last_name = test_input($_POST['last_name']);
  $suffix = test_input($_POST['suffix']);
  $address = test_input($_POST['address']);
  $dob = test_input($_POST['dob']);
  $pob = test_input($_POST['pob']);
  $gender = test_input($_POST['gender']);
  $nationality = test_input($_POST['nationality']);
  $civil_status = test_input($_POST['civil_status']);
  $religion = test_input($_POST['religion']);
  $height = test_input($_POST['height']);
  $weight = test_input($_POST['weight']);
  $hair_color = test_input($_POST['hair_color']);
  $eye_color = test_input($_POST['eye_color']);
  $contact_no = test_input($_POST['contact_no']);
  $mole = test_input($_POST['mole']);
  $scar = test_input($_POST['scar']);
  $tattoo = test_input($_POST['tattoo']);
  $birthmark = test_input($_POST['birthmark']);
  $harelip = test_input($_POST['harelip']);
  $skin_tag = test_input($_POST['skin_tag']);
  $e_contact_person = test_input($_POST['e_contact_person']);
  $e_contact_no = test_input($_POST['e_contact_no']);

  if(empty($alertMessage)){

    $query = "UPDATE applicant
    SET custID = '$custnewID',
    police_station = '$police_station',
    application_type = '$application_type',
    purpose = '$purpose',
    first_name = '$first_name',
    middle_name = '$middle_name',
    last_name = '$last_name',
    suffix = '$suffix',
    address = '$address',
    dob = '$dob',
    pob = '$pob',
    gender = '$gender',
    nationality = '$nationality',
    civil_status = '$civil_status',
    religion = '$religion',
    height = '$height',
    weight = '$weight',
    hair_color = '$hair_color',
    eye_color = '$eye_color',
    contact_no = '$contact_no',
    mole = '$mole',
    scar = '$scar',
    tattoo = '$tattoo',
    birthmark = '$birthmark',
    harelip = '$harelip',
    skin_tag = '$skin_tag',
    e_contact_person = '$e_contact_person',
    e_contact_no = '$e_contact_no',
    application_status = 'Pending',
    payment_status = 'Unpaid',
    encoding_mode = 'Walkin',
    encoded_by = '$ecoded_by' WHERE id='$id' ";

    $result = mysqli_query($link, $query) or die(mysqli_error($link)); //Execute  insert query

    if($result){
      //echo "<script>alert('5');</script>";
      header("Location: result.php?alert=success");
    }else{
    //header("Location: category-add.php?alert=3");
    }
    //mysqli_close($link);
  }


}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
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
                  <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>?id=<?php echo $id; ?>">

                    <div class="row">
                      <div class="col-4">
                        <div class="form-group">
                          <label>Police Station</label>
                          <input type="text" class="form-control" name="police_station" value="<?php echo $row_police_station; ?>" >
                        </div>
                      </div>

                      <div class="col-4">
                        <div class="form-group">
                          <label>Application Type</label>
                          <input type="text" class="form-control" name="application_type" value="<?php echo $row_application_type; ?>" >
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
                          <input type="text" class="form-control" name="contact_no" placeholder="" value="<?php echo $row_contact_no; ?>">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-6">
                        <div class="form-group">
                          <label>Nunal (Mole)</label>
                          <input type="text" class="form-control" name="mole" placeholder="" value="<?php echo $row_mole; ?>">
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

                    <button type="submit" class="btn btn-success" >Info Update</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </form>

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
