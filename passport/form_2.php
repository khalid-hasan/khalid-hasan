<?php

session_start();

function OptionCheck($option, $select)
{
  if(isset($_SESSION[$select])) 
  {
    $select= $_SESSION[$select];

    if($option==$select)
    {
      return true;
    }
  }

  return false;
}

function data_sanitization($data)
{
  $data= trim($data);
  $data= stripcslashes($data);
  $data= htmlspecialchars($data);
  return $data;
}  

 if(!isset($_SESSION['applicationID']))
 {
    $birthID= $_SESSION['birthID'];
    $_SESSION['applicationID']= substr($birthID, 5).rand(10,1000);
 }

if (isset($_POST['sub_form2'])) 
{
  $_SESSION['applicantOffice']= data_sanitization($_POST['applicantOffice']);
  $_SESSION['applicantResidence']= data_sanitization($_POST['applicantResidence']);
  $_SESSION['applicantMobile']= data_sanitization($_POST['applicantMobile']);
  $_SESSION['emergencyContactName']= data_sanitization($_POST['emergencyContactName']);
  $_SESSION['emergencyContactCountry']= data_sanitization($_POST['emergencyContactCountry']);
  $_SESSION['emergencyContactVillage']= data_sanitization($_POST['emergencyContactVillage']);
  $_SESSION['emergencyContactRoad']= data_sanitization($_POST['emergencyContactRoad']);
  $_SESSION['emergencyContactDisctrict']= data_sanitization($_POST['emergencyContactDisctrict']);
  $_SESSION['emergencyContactPoliceStation']= data_sanitization($_POST['emergencyContactPoliceStation']);
  $_SESSION['emergencyContactPostOffice']= data_sanitization($_POST['emergencyContactPostOffice']);
  $_SESSION['applicantPassportNo']= data_sanitization($_POST['applicantPassportNo']);
  $_SESSION['applicantPassportIssue']= data_sanitization($_POST['applicantPassportIssue']);
  $_SESSION['applicantPassportIssueDate']= data_sanitization($_POST['applicantPassportIssueDate']);
  $_SESSION['reissueReason']= data_sanitization($_POST['reissueReason']);


    if (!preg_match("/^([a-zA-Z\s'-]+\.)*[a-zA-Z\s'-]+$/", $_POST['emergencyContactName'])) 
    {
      $_SESSION['error_form2'] = "Letters Only and (-,',.)";
      header("location: form_2.php");
    }
    elseif (!preg_match("/^[a-zA-Z0-9]*$/", $_POST['applicantPassportNo'])) 
    {
      $_SESSION['error_form2'] = "Letters Only and (-,',.)";
      header("location: form_2.php");
    } 
    elseif (!preg_match("/^[0-9]{11}$/", $_POST['applicantOffice'])) 
    {
      $_SESSION['error_form2'] = "Numbers Only.";
      header("location: form_2.php");
    }  
    elseif (!preg_match("/^[0-9]{11}$/", $_POST['applicantResidence'])) 
    {
      $_SESSION['error_form2'] = "Numbers Only";
      header("location: form_2.php");
    }  
    elseif (!preg_match("/^[0-9]{11}$/", $_POST['applicantMobile'])) 
    {
      $_SESSION['error_form2'] = "Numbers Only";
      header("location: form_2.php");
    }   
    else
    {
      foreach ($_POST as $key => $value) 
      {
        $_SESSION['post'][$key] = $value;
      }

      header("Location: form_3.php");
    }
}

?>
<!DOCTYPE html>
<html>
<head>

  <title>Form 2</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      
   <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">

   <!-- Latest compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>

  <!-- (Optional) Latest compiled and minified JavaScript translation files -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/i18n/defaults-*.min.js"></script>

  <link rel="stylesheet" href="assets/css/public.css">

</head>
<body>

<div class="container">
    <div class="panel panel-default">
        <div class="panel-body">
          <h2 class="heading">Passport Application- Stage 2</h2>
          <p class="application-id">Online Application ID: <?php echo $_SESSION['applicationID']; ?></p>
          <p class="info">Fields marked with <span class="important">(*)</span> are mandatory.</p>
          <hr>
          <form action="" method="post">
            <div class="row">
              <div class="col-md-6 right-border-form">

                <div class="form-group">
                  <h2 class="title-padding-extra">Applicant Contact Information</h2>
                </div>

                <div class="form-group row">
                  <label class="col-form-label col-6 col-md-4" for="applicantOffice">Office No:</label>
                  <div class="col-12 col-md-8">   
                    <input type="text" class="form-control" id="applicantOffice" placeholder="" name="applicantOffice" value="<?php echo isset($_SESSION['applicantOffice']) ? $_SESSION['applicantOffice'] : ''; ?>"> 
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-form-label col-6 col-md-4" for="applicantResidence">Residence No:</label>
                  <div class="col-12 col-md-8">   
                    <input type="text" class="form-control" id="applicantResidence" placeholder="" name="applicantResidence" value="<?php echo isset($_SESSION['applicantResidence']) ? $_SESSION['applicantResidence'] : ''; ?>"> 
                  </div>
                </div>


                <div class="form-group row">
                  <label class="col-form-label col-6 col-md-4" for="applicantMobile">Mobile:</label>
                  <div class="col-12 col-md-8">   
                    <input type="text" class="form-control" id="applicantMobile" placeholder="" name="applicantMobile" value="<?php echo isset($_SESSION['applicantMobile']) ? $_SESSION['applicantMobile'] : ''; ?>"> 
                  </div>
                </div>

                <h2 class="title-padding">Emergency Contact Person's Details</h2>

                  <div class="form-group row">
                    <label class="col-form-label col-6 col-md-4" for="emergencyContactName">Name:<span class="important">*</span></label>
                    <div class="col-12 col-md-8">   
                      <input type="text" class="form-control" id="emergencyContactName" placeholder="" name="emergencyContactName" value="<?php echo isset($_SESSION['emergencyContactName']) ? $_SESSION['emergencyContactName'] : ''; ?>" required>  
                    </div>
                  </div>    

                  <div class="form-group row">
                    <label class="col-form-label col-6 col-md-4" for="emergencyContactCountry">Country:<span class="important">*</span></label>
                    <div class="col-12 col-md-8">   
                      <select class= "selectpicker" name="emergencyContactCountry" required>

                        <option value="">-SELECT-</option>
                        <option value="AFGHANISTAN"  <?php echo OptionCheck("AFGHANISTAN", "emergencyContactCountry") ? "selected" : ''; ?>>AFGHANISTAN</option>
                        <option value="ALGERIAN"  <?php echo OptionCheck("ALGERIAN", "emergencyContactCountry") ? "selected" : ''; ?>>ALGERIAN</option>
                        <option value="AMERICAN SAMOAN"  <?php echo OptionCheck("AMERICAN SAMOAN", "emergencyContactCountry") ? "selected" : ''; ?>>AMERICAN SAMOAN</option>
                        <option value="ANDORRAN" <?php echo OptionCheck("ANDORRAN", "emergencyContactCountry") ? "selected" : ''; ?>>ANDORRAN</option>
                        <option value="ANGOLAN" <?php echo OptionCheck("ANGOLAN", "emergencyContactCountry") ? "selected" : ''; ?>>ANGOLAN</option>
                        <option value="ANGUILLAN" <?php echo OptionCheck("ANGUILLAN", "emergencyContactCountry") ? "selected" : ''; ?>>ANGUILLAN</option>
                        <option value="ANTARTICAN" <?php echo OptionCheck("ANTARTICAN", "emergencyContactCountry") ? "selected" : ''; ?>>ANTARTICAN</option>
                        <option value="ANTIGUAN, BARBUDAN" <?php echo OptionCheck("ANTIGUAN, BARBUDAN", "emergencyContactCountry") ? "selected" : ''; ?>>ANTIGUAN, BARBUDAN</option>
                        <option value="ARGENTINE" <?php echo OptionCheck("ARGENTINE", "emergencyContactCountry") ? "selected" : ''; ?>>ARGENTINE</option>
                        <option value="ARMENIAN" <?php echo OptionCheck("ARMENIAN", "emergencyContactCountry") ? "selected" : ''; ?>>ARMENIAN</option>
                        <option value="ARUBAN, DUTCH" <?php echo OptionCheck("ARUBAN, DUTCH", "emergencyContactCountry") ? "selected" : ''; ?>>ARUBAN, DUTCH</option>
                        <option value="AUSTRALIAN" <?php echo OptionCheck("AUSTRALIAN", "emergencyContactCountry") ? "selected" : ''; ?>>AUSTRALIAN</option>
                        <option value="AUSTRIAN" <?php echo OptionCheck("AUSTRIAN", "emergencyContactCountry") ? "selected" : ''; ?>>AUSTRIAN</option>
                        <option value="AZERIS, AZERBAIJANI" <?php echo OptionCheck("AZERIS, AZERBAIJANI", "emergencyContactCountry") ? "selected" : ''; ?>>AZERIS, AZERBAIJANI</option>
                        <option value="BAHAMIAN" <?php echo OptionCheck("BAHAMIAN", "emergencyContactCountry") ? "selected" : ''; ?>>BAHAMIAN</option>
                        <option value="BAHRAINI" <?php echo OptionCheck("BAHRAINI", "emergencyContactCountry") ? "selected" : ''; ?>>BAHRAINI</option>
                        <option value="BANGLADESHI" <?php echo OptionCheck("BANGLADESHI", "emergencyContactCountry") ? "selected" : ''; ?>>BANGLADESHI</option>
                        <option value="BARBADIAN, BAJAN" <?php echo OptionCheck("BARBADIAN, BAJAN", "emergencyContactCountry") ? "selected" : ''; ?>>BARBADIAN, BAJAN</option>
                        <option value="BELARUSIAN" <?php echo OptionCheck("BELARUSIAN", "emergencyContactCountry") ? "selected" : ''; ?>>BELARUSIAN</option>
                        <option value="BELGIAN" <?php echo OptionCheck("BELGIAN", "emergencyContactCountry") ? "selected" : ''; ?>>BELGIAN</option>
                        <option value="BELIZEAN" <?php echo OptionCheck("BELIZEAN", "emergencyContactCountry") ? "selected" : ''; ?>>BELIZEAN</option>
                        <option value="BENINESE" <?php echo OptionCheck("BENINESE", "emergencyContactCountry") ? "selected" : ''; ?>>BENINESE</option>
                        <option value="BERMUDIAN" <?php echo OptionCheck("BERMUDIAN", "emergencyContactCountry") ? "selected" : ''; ?>>BERMUDIAN</option>
                        <option value="BHUTANESE" <?php echo OptionCheck("BHUTANESE", "emergencyContactCountry") ? "selected" : ''; ?>>BHUTANESE</option>
                        <option value="BOLIVIAN" <?php echo OptionCheck("BOLIVIAN", "emergencyContactCountry") ? "selected" : ''; ?>>BOLIVIAN</option>

                      </select>
                    </div>
                  </div>

                  <h4 class="title-padding">Address</h4>

                  <div class="form-group row">
                    <label class="col-form-label col-6 col-md-4" for="emergencyContactVillage">Village/House:</label>
                    <div class="col-12 col-md-8">   
                      <input type="text" class="form-control" id="emergencyContactVillage" placeholder="" name="emergencyContactVillage" value="<?php echo isset($_SESSION['emergencyContactVillage']) ? $_SESSION['emergencyContactVillage'] : ''; ?>" required> 
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-form-label col-6 col-md-4" for="emergencyContactRoad">Road/Block/Sector:</label>
                    <div class="col-12 col-md-8">   
                      <input type="text" class="form-control" id="emergencyContactRoad" placeholder="" name="emergencyContactRoad" value="<?php echo isset($_SESSION['emergencyContactRoad']) ? $_SESSION['emergencyContactRoad'] : ''; ?>" required> 
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-form-label col-6 col-md-4" for="emergencyContactDisctrict">District:<span class="important">*</span></label>
                    <div class="col-12 col-md-8">   
                      <select class= "selectpicker" name="emergencyContactDisctrict" required>

                          <option value="">-SELECT-</option>
                          <option value="BAGERHAT" <?php echo OptionCheck("BAGERHAT", "emergencyContactDisctrict") ? "selected" : ''; ?>>BAGERHAT</option>
                          <option value="BANDARBAN" <?php echo OptionCheck("BANDARBAN", "emergencyContactDisctrict") ? "selected" : ''; ?>>BANDARBAN</option>
                          <option value="BARGUNA" <?php echo OptionCheck("BARGUNA", "emergencyContactDisctrict") ? "selected" : ''; ?>>BARGUNA</option>
                          <option value="BARISAL" <?php echo OptionCheck("BARISAL", "emergencyContactDisctrict") ? "selected" : ''; ?>>BARISAL</option>
                          <option value="BHOLA" <?php echo OptionCheck("BHOLA", "emergencyContactDisctrict") ? "selected" : ''; ?>>BHOLA</option>
                          <option value="BOGRA" <?php echo OptionCheck("BOGRA", "emergencyContactDisctrict") ? "selected" : ''; ?>>BOGRA</option>
                          <option value="BRAHMANBARIA" <?php echo OptionCheck("BRAHMANBARIA", "emergencyContactDisctrict") ? "selected" : ''; ?>>BRAHMANBARIA</option>
                          <option value="CHANDPUR" <?php echo OptionCheck("CHANDPUR", "emergencyContactDisctrict") ? "selected" : ''; ?>>CHANDPUR</option>
                          <option value="CHAPAINAWABGANJ" <?php echo OptionCheck("CHAPAINAWABGANJ", "emergencyContactDisctrict") ? "selected" : ''; ?>>CHAPAINAWABGANJ</option>
                          <option value="CHITTAGONG" <?php echo OptionCheck("CHITTAGONG", "emergencyContactDisctrict") ? "selected" : ''; ?>>CHITTAGONG</option>
                          <option value="CHUADANGA" <?php echo OptionCheck("CHUADANGA", "emergencyContactDisctrict") ? "selected" : ''; ?>>CHUADANGA</option>
                          <option value="COMILLA" <?php echo OptionCheck("COMILLA", "emergencyContactDisctrict") ? "selected" : ''; ?>>COMILLA</option>
                          <option value="COX'S BAZAR" <?php echo OptionCheck("COX'S BAZAR", "emergencyContactDisctrict") ? "selected" : ''; ?>>COX'S BAZAR</option>
                          <option value="DHAKA" <?php echo OptionCheck("DHAKA", "emergencyContactDisctrict") ? "selected" : ''; ?>>DHAKA</option>
                          <option value="DINAJPUR" <?php echo OptionCheck("DINAJPUR", "emergencyContactDisctrict") ? "selected" : ''; ?>>DINAJPUR</option>
                          <option value="FARIDPUR" <?php echo OptionCheck("FARIDPUR", "emergencyContactDisctrict") ? "selected" : ''; ?>>FARIDPUR</option>
                          <option value="FENI" <?php echo OptionCheck("FENI", "emergencyContactDisctrict") ? "selected" : ''; ?>>FENI</option>
                          <option value="GAIBANDHA" <?php echo OptionCheck("GAIBANDHA", "emergencyContactDisctrict") ? "selected" : ''; ?>>GAIBANDHA</option>
                          <option value="GAZIPUR" <?php echo OptionCheck("GAZIPUR", "emergencyContactDisctrict") ? "selected" : ''; ?>>GAZIPUR</option>
                          <option value="GOPALGANJ" <?php echo OptionCheck("GOPALGANJ", "emergencyContactDisctrict") ? "selected" : ''; ?>>GOPALGANJ</option>
                          <option value="HABIGANJ" <?php echo OptionCheck("HABIGANJ", "emergencyContactDisctrict") ? "selected" : ''; ?>>HABIGANJ</option>
                          <option value="JAMALPUR" <?php echo OptionCheck("JAMALPUR", "emergencyContactDisctrict") ? "selected" : ''; ?>>JAMALPUR</option>
                          <option value="JESSORE" <?php echo OptionCheck("JESSORE", "emergencyContactDisctrict") ? "selected" : ''; ?>>JESSORE</option>

                      </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-form-label col-6 col-md-4" for="emergencyContactPoliceStation">Police Station:<span class="important">*</span></label>
                    <div class="col-12 col-md-8">   
                      <input type="text" class="form-control" id="emergencyContactPoliceStation" placeholder="" name="emergencyContactPoliceStation" value="<?php echo isset($_SESSION['emergencyContactPoliceStation']) ? $_SESSION['emergencyContactPoliceStation'] : ''; ?>" required> 
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-form-label col-6 col-md-4" for="emergencyContactPostOffice">Post Office:<span class="important">*</span></label>
                    <div class="col-12 col-md-8">   
                      <input type="text" class="form-control" id="emergencyContactPostOffice" placeholder="" name="emergencyContactPostOffice" value="<?php echo isset($_SESSION['emergencyContactPostOffice']) ? $_SESSION['emergencyContactPostOffice'] : ''; ?>" required> 
                    </div>
                  </div>
                </div>

              
              <div class="col-md-6 left-border-form">

                <div class="form-group">
                  <h2 class="title-padding-bottom">Old Passport Information</h2>
                </div>

                <div class="form-group row">
                  <label class="col-form-label col-6 col-md-4" for="applicantPassportNo">Passport No:</label>
                  <div class="col-12 col-md-8">   
                    <input type="text" class="form-control" id="applicantPassportNo" placeholder="" name="applicantPassportNo" value="<?php echo isset($_SESSION['applicantPassportNo']) ? $_SESSION['applicantPassportNo'] : ''; ?>"> 
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-form-label col-6 col-md-4" for="applicantPassportIssue">Place Of Issue:</label>
                  <div class="col-12 col-md-8">   
                    <input type="text" class="form-control" id="applicantPassportIssue" placeholder="" name="applicantPassportIssue" value="<?php echo isset($_SESSION['applicantPassportIssue']) ? $_SESSION['applicantPassportIssue'] : ''; ?>"> 
                  </div>
                </div>


                <div class="form-group row">
                  <label class="col-form-label col-6 col-md-4" for="applicantPassportIssueDate">Date Of Issue:</label>
                  <div class="col-12 col-md-8">   
                      <input type="date" class="form-control" id="applicantPassportIssueDate" placeholder="" value="<?php echo isset($_SESSION['applicantPassportIssueDate']) ? $_SESSION['applicantPassportIssueDate'] : ''; ?>" name="applicantPassportIssueDate" required> 
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-form-label col-6 col-md-4" for="reissueReason">Re-Issue Reason:</label>
                  <div class="col-12 col-md-8">   
                    <select class= "selectpicker" name="reissueReason">

                      <option value="">-SELECT-</option>
                      <option value="EXPIRED" <?php echo OptionCheck("EXPIRED", "reissueReason") ? "selected" : ''; ?>>EXPIRED</option>
                      <option value="LOST" <?php echo OptionCheck("LOST", "reissueReason") ? "selected" : ''; ?>>LOST</option>
                      <option value="NO MORE PAGES" <?php echo OptionCheck("NO MORE PAGES", "reissueReason") ? "selected" : ''; ?>>NO MORE PAGES</option>

                    </select>
                  </div>
                </div>

                  <div class="error">
                   <?php

                     if (!empty($_SESSION['error_form2'])) 
                     {
                      echo "<p><span id=\"error\">$_SESSION[error_form2]</span></p>";
                     }

                   ?>
                </div>

                <input type="submit" class="btn btn-default" name="sub_form2" value="Save & Next">
                <a class="btn btn-default btn-custom" href="form_1.php" role="button">Previous</a>





              </div>
            </div>
          </form>         
        </div>

    </div>
</div>

</body>
</html>