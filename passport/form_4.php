<?php
session_start(); 

extract($_SESSION['post']);

?>
<!DOCTYPE html>
<html>
<head>

  <title>Form Summary</title>

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
          <h2 class="heading">Passport Application- REVIEW ENROLMENT SUMMARY</h2>
          <p class="application-id">Online Application ID: <?php echo $_SESSION['applicationID']; ?></p>
          <p class="info">Fields marked with <span class="important">(*)</span> are mandatory.</p>
          <hr>
          <form action="form_save_data.php" method="post">
            <div class="row">
              <div class="col-md-6 right-border">

                <h2 class="title-padding-bottom">Personal Information Summary</h2>

                    <div class="form-group">
                        <label>Name Of The Applicant:</label> <?php echo $name; ?>
                    </div>

                    <div class="form-group">
                        <label>Applying Country:</label> <?php echo $applyingCountry; ?>
                    </div>

                    <div class="form-group">
                        <label>Gender:</label> <?php echo $gender; ?>
                    </div>

                    <div class="form-group">
                        <label>Nationality:</label> <?php echo $applicantNationality; ?>
                    </div>
                    
                    <div class="form-group">
                        <label>Date Of Birth:</label> <?php echo $dob; ?>
                    </div>
                    
                    <div class="form-group">
                        <label>Place Of Birth:</label> <?php echo $districtBirth.", ".$countryOfBirth ; ?>
                    </div>
                    
                    <div class="form-group">
                        <label>Father's Name:</label> <?php echo $fatherName; ?>
                    </div>                            

                    <div class="form-group">
                        <label>Mother's Name:</label> <?php echo $motherName; ?>
                    </div> 

                    <div class="form-group">
                        <label>Spouse's Name:</label> <?php echo $spouseName; ?>
                    </div> 

                    <div class="form-group">
                        <label>Birth ID No:</label> <?php echo $birthID; ?>
                    </div> 

                    <div class="form-group">
                        <label>National ID No:</label> <?php echo $nationalID; ?>
                    </div> 


              </div>
              
              <div class="col-md-6 left-border-form-4">

                <h2 class="title-padding-bottom">Passport Information Summary</h2>

                    <div class="form-group">
                        <label>Applying In:</label> <?php echo $applyingCountry; ?>
                    </div>

                    <div class="form-group">
                        <label>Passport Type:</label> <?php echo $passportType; ?>
                    </div>

                    <div class="form-group">
                        <label>Application Type:</label> New
                    </div>

                <h2 class="title-padding">Contact Information Summary</h2>

                    <div class="form-group">
                        <label>Mobile No:</label> <?php echo $applicantMobile; ?>
                    </div> 

                    <div class="form-group">
                        <label>Present Address:</label> <?php echo $prsentVillage. ", ".$prsentRoad.", ".$prsentPoliceStation. ", ".$prsentPostOffice.", ".$presentDisctrict ; ?>
                    </div> 

                    <div class="form-group">
                        <label>Permanent Address:</label> <?php echo $permanentVillage. ", ".$permanentRoad.", ".$permanentPoliceStation. ", ".$permanentPostOffice.", ".$permanentDisctrict ; ?>
                    </div> 

                    <div class="form-group">
                        <label>Email:</label> <?php echo $email; ?>
                    </div>               


                <h2 class="title-padding">Payment Information Summary</h2>

                    <div class="form-group">
                        <label>Payment Amount:</label> <?php echo "($currencyType)$paymentAmount"; ?>
                    </div>                            

                    <div class="form-group">
                        <label>Payment Date:</label> <?php echo $dateOfPayment; ?>
                    </div> 

                    <div class="form-group">
                        <label>Receipt No:</label> <?php echo $receiptNo; ?>
                    </div> 

                    <div class="form-group">
                        <label>Bank Name:</label> <?php echo $bankName; ?>
                    </div> 

                    <div class="form-group">
                        <label>Bank Branch:</label> <?php echo $bankBranch; ?>
                    </div> 

                <input type="submit" class="btn btn-default" name="sub_form4" value="Save File">
                <a class="btn btn-default btn-custom" href="form_3.php" role="button">Previous</a>


              </div>
            </div>  
          </form>     
        </div>

    </div>
</div>

</body>
</html>