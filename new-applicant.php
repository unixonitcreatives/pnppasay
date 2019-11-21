<?php include('template/session.php'); ?>

<?php
  require_once "config.php";

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
    $e_contact_no = test_input($_POST['e_contact_person']);

    if(empty($alertMessage)){
      $IDtype = "AP";
      $m = date('m');
      $y = date('y');
      $d = date('d');
      $asd = "SELECT MAX(id) FROM applicant";
      $qry = mysqli_query($link,$asd); // Get the latest ID
      $resulta = mysqli_fetch_array($qry);
      $newID = $resulta['MAX(id)'] + 1; //Get the latest ID then Add 1
      $custID = str_pad($newID, 7, '0', STR_PAD_LEFT); //Prepare custom ID with Paddings
      $custnewID = $IDtype.$y.$custID; //Prepare custom ID
      $ecoded_by = $_SESSION["username"];

      $query = "INSERT INTO applicant
      (custID,
      police_station,
      application_type,
      purpose,
      first_name,
      middle_name,
      last_name,
      suffix,
      address,
      dob,
      pob,
      gender,
      nationality,
      civil_status,
      religion,
      height,
      weight,
      hair_color,
      eye_color,
      contact_no,
      mole,
      scar,
      tattoo,
      birthmark,
      harelip,
      skin_tag,
      e_contact_person,
      e_contact_no,
      application_status,
      payment_status,
      encoding_mode,
      encoded_by)

      VALUES
      ('$custnewID',
      '$police_station',
      '$application_type',
      '$purpose',
      '$first_name',
      '$middle_name',
      '$last_name',
      '$suffix',
      '$address',
      '$dob',
      '$pob',
      '$gender',
      '$nationality',
      '$civil_status',
      '$religion',
      '$height',
      '$weight',
      '$hair_color',
      '$eye_color',
      '$contact_no',
      '$mole',
      '$scar',
      '$tattoo',
      '$birthmark',
      '$harelip',
      '$skin_tag',
      '$e_contact_person',
      '$e_contact_no',
      'Pending',
      'Unpaid',
      'Walkin',
      '$encoded_by')";

      $result = mysqli_query($link, $query) or die(mysqli_error($link)); //Execute  insert query

      if($result){
        //echo "<script>alert('5');</script>";
      //header("Location: .php");
      }else{
      //header("Location: category-add.php?alert=3");
      }
      mysqli_close($link);
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
            <h1 class="m-0 text-dark">Register New Applicant</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
           <div class="col-md-9">
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Applicant Details</h3>
                </div>

                <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                  <div class="card-body">
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
                  <div class="card-footer">
                  <button type="submit" class="btn btn-success">Submit</button>
                </div>
                </form>

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
<?php include('template/footer.php'); ?>
<?php include('template/js.php'); ?>
</body>
</html>
