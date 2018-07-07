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


if (isset($_POST['sub_form1'])) 
{
	$_SESSION['applyingCountry']= data_sanitization($_POST['applyingCountry']);
	$_SESSION['passportType']= data_sanitization($_POST['passportType']);
	$_SESSION['deliveryType']= data_sanitization($_POST['deliveryType']);
	$_SESSION['name']= data_sanitization($_POST['name']);
	$_SESSION['fname']= data_sanitization($_POST['fname']);
	$_SESSION['lname']= data_sanitization($_POST['lname']);
	$_SESSION['fatherName']= data_sanitization($_POST['fatherName']);
	$_SESSION['fatherNationality']= data_sanitization($_POST['fatherNationality']);
	$_SESSION['fatherProfession']= data_sanitization($_POST['fatherProfession']);
	$_SESSION['motherName']= data_sanitization($_POST['motherName']);
	$_SESSION['motherNationality']= data_sanitization($_POST['motherNationality']);
	$_SESSION['motherProfession']= data_sanitization($_POST['motherProfession']);
	$_SESSION['spouseName']= data_sanitization($_POST['spouseName']);
	$_SESSION['spouseNationality']= data_sanitization($_POST['spouseNationality']);
	$_SESSION['spouseProfession']= data_sanitization($_POST['spouseProfession']);
	$_SESSION['martitalStatus']= data_sanitization($_POST['martitalStatus']);
	$_SESSION['applicantProfession']= data_sanitization($_POST['applicantProfession']);
	$_SESSION['countryOfBirth']= data_sanitization($_POST['countryOfBirth']);
	$_SESSION['districtBirth']= data_sanitization($_POST['districtBirth']);
	$_SESSION['dob']= data_sanitization($_POST['dob']);
	$_SESSION['gender']= data_sanitization($_POST['gender']);
	$_SESSION['birthID']= data_sanitization($_POST['birthID']);
	$_SESSION['nationalID']= data_sanitization($_POST['nationalID']);
	$_SESSION['taxID']= data_sanitization($_POST['taxID']);
	$_SESSION['heightCm']= data_sanitization($_POST['heightCm']);
	$_SESSION['heightInch']= data_sanitization($_POST['heightInch']);
	$_SESSION['religion']= data_sanitization($_POST['religion']);
	$_SESSION['email']= data_sanitization($_POST['email']);
	$_SESSION['applicantNationality']= data_sanitization($_POST['applicantNationality']);
	$_SESSION['citizenshipStatus']= data_sanitization($_POST['citizenshipStatus']);
	$_SESSION['dualCitizenship']= data_sanitization($_POST['dualCitizenship']);
	$_SESSION['prsentVillage']= data_sanitization($_POST['prsentVillage']);
	$_SESSION['prsentRoad']= data_sanitization($_POST['prsentRoad']);
	$_SESSION['presentDisctrict']= data_sanitization($_POST['presentDisctrict']);
	$_SESSION['prsentPoliceStation']= data_sanitization($_POST['prsentPoliceStation']);
	$_SESSION['prsentPostOffice']= data_sanitization($_POST['prsentPostOffice']);
	$_SESSION['permanentVillage']= data_sanitization($_POST['permanentVillage']);
	$_SESSION['permanentRoad']= data_sanitization($_POST['permanentRoad']);
	$_SESSION['permanentDisctrict']= data_sanitization($_POST['permanentDisctrict']);
	$_SESSION['permanentPoliceStation']= data_sanitization($_POST['permanentPoliceStation']);
	$_SESSION['permanentPostOffice']= data_sanitization($_POST['permanentPostOffice']);


    if (!preg_match("/^([a-zA-Z\s'-]+\.)*[a-zA-Z\s'-]+$/", $_POST['name'])) 
    {
      $_SESSION['error'] = "Letters Only and (-,',.)";
      header("location: form_1.php");
    }
    elseif (!preg_match("/^([a-zA-Z\s'-]+\.)*[a-zA-Z\s'-]+$/", $_POST['lname'])) 
    {
      $_SESSION['error'] = "Letters Only and (-,',.)";
      header("location: form_1.php");
    }
    elseif (!preg_match("/^([a-zA-Z\s'-]+\.)*[a-zA-Z\s'-]+$/", $_POST['fatherName'])) 
    {
      $_SESSION['error'] = "Letters Only and (-,',.)";
      header("location: form_1.php");
    }
    elseif (!preg_match("/^([a-zA-Z\s'-]+\.)*[a-zA-Z\s'-]+$/", $_POST['motherName'])) 
    {
      $_SESSION['error'] = "Letters Only and (-,',.)";
      header("location: form_1.php");
    }  
    elseif (!preg_match("/^[0-9]{14}$/", $_POST['birthID'])) 
    {
      $_SESSION['error'] = "Numbers Only.";
      header("location: form_1.php");
    }  
    elseif (!preg_match("/^[0-9]{1,5}$/", $_POST['heightCm'])) 
    {
      $_SESSION['error'] = "Numbers Only";
      header("location: form_1.php");
    }  
    elseif (!preg_match("/^[0-9]{1,5}$/", $_POST['heightInch'])) 
    {
      $_SESSION['error'] = "Numbers Only";
      header("location: form_1.php");
    }  
    elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) 
    {
      $_SESSION['error'] = "Invalid Email";
      header("location: form_1.php");
    }  
    else
    {
      foreach ($_POST as $key => $value) 
      {
        $_SESSION['post'][$key] = $value;
      }

      header("Location: form_2.php");
  	}
}

?>

<!DOCTYPE html>
<html>
<head>

	<title>Form 1</title>

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
        	<h2 class="heading">Passport Application- Stage 1</h2>
        	<p class="info">Fields marked with <span class="important">(*)</span> are mandatory.</p>
        	<hr>
        	<form action="" method="post">
	        	<div class="row">
	        		<div class="col-md-6 right-border">
	        			<h2 class="title-padding">Passport Application Information</h2>
	                    <div class="form-group row">
	                    	<label class="col-form-label col-6 col-md-4" for="applyingCountrylbl">Applying In:<span class="important">*</span></label>
	                    	<div class="col-12 col-md-8">
		                        <select class= "selectpicker" name="applyingCountry" required>

		                         	<option value="">-SELECT-</option>
								    <option value="Australia" <?php echo OptionCheck("Australia", "applyingCountry") ? "selected" : ''; ?> >Australia</option>
									<option value="Austria" <?php echo OptionCheck("Austria", "applyingCountry") ? "selected" : ''; ?> >Austria</option>
									<option value="Bahrain" <?php echo OptionCheck("Bahrain", "applyingCountry") ? "selected" : ''; ?> >Bahrain</option>
									<option value="Bangladesh" <?php echo OptionCheck("Bangladesh", "applyingCountry") ? "selected" : ''; ?> >Bangladesh</option>
									<option value="Belgium" <?php echo OptionCheck("Belgium", "applyingCountry") ? "selected" : ''; ?> >Belgium</option>
									<option value="Bhutan" <?php echo OptionCheck("Bhutan", "applyingCountry") ? "selected" : ''; ?> >Bhutan</option>
									<option value="Brazil" <?php echo OptionCheck("Brazil", "applyingCountry") ? "selected" : ''; ?> >Brazil</option>
									<option value="Brunei Darussalam" <?php echo OptionCheck("Brunei Darussalam", "applyingCountry") ? "selected" : ''; ?> >Brunei Darussalam</option>
									<option value="Canada" <?php echo OptionCheck("Canada", "applyingCountry") ? "selected" : ''; ?> >Canada</option>
									<option value="China" <?php echo OptionCheck("China", "applyingCountry") ? "selected" : ''; ?> >China</option>
									<option value="Denmark" <?php echo OptionCheck("Denmark", "applyingCountry") ? "selected" : ''; ?> >Denmark</option>
									<option value="Egypt" <?php echo OptionCheck("Egypt", "applyingCountry") ? "selected" : ''; ?> >Egypt</option>
									<option value="France" <?php echo OptionCheck("France", "applyingCountry") ? "selected" : ''; ?> >France</option>
									<option value="Germany" <?php echo OptionCheck("Germany", "applyingCountry") ? "selected" : ''; ?> >Germany</option>
									<option value="Greece" <?php echo OptionCheck("Greece", "applyingCountry") ? "selected" : ''; ?> >Greece</option>
									<option value="India" <?php echo OptionCheck("India", "applyingCountry") ? "selected" : ''; ?> >India</option>
									<option value="Indonesia" <?php echo OptionCheck("Indonesia", "applyingCountry") ? "selected" : ''; ?> >Indonesia</option>

		                        </select>
	                    	</div>
	                	</div>

	                    <div class="form-group row">
	                    	<label class="col-form-label col-6 col-md-4" for="applicationTypelbl">Application Type:</label>
	                    	<div class="col-12 col-md-8">
	                    		New Application
	                    	</div>
	                	</div>

	                     <div class="form-group row">
	                     	<label class="col-form-label col-6 col-md-4" for="passportTypelbl">Passport Type:<span class="important">*</span></label>
	                    	<div class="col-12 col-md-8">       
		                        <select class= "selectpicker" name="passportType" required>

									<option value="">-SELECT-</option>
									<option value="ORDINARY" <?php echo OptionCheck("ORDINARY", "passportType") ? "selected" : ''; ?>>ORDINARY</option>
									<option value="DIPLOMATIC" <?php echo OptionCheck("DIPLOMATIC", "passportType") ? "selected" : ''; ?>>DIPLOMATIC</option>
									<option value="OFFICIAL" <?php echo OptionCheck("OFFICIAL", "passportType") ? "selected" : ''; ?>>OFFICIAL</option>

		                        </select>
		                    </div>
	                    </div>   


			            <div class="form-group row">
			            	<label class="col-form-label col-6 col-md-4" for="deliveryTypelbl">Delivery Type:</label>
			            	<div class="col-12 col-md-8">   
				                <label class="radio-inline">
				                  <input type="radio" name="deliveryType" value="Regular"  <?php echo OptionCheck("Regular", "deliveryType") ? "checked" : ''; ?> required>Regular
				                </label>
				                <label class="radio-inline">
				                  <input type="radio" name="deliveryType" value="Express"  <?php echo OptionCheck("Express", "deliveryType") ? "checked" : ''; ?> required>Express
				                </label>
				            </div>
			            </div>

			            <h2 class="title-padding">Personal Information</h2>

			            <div class="form-group row">
			            	<label class="col-form-label col-6 col-md-4" for="namelbl">Name Of Applicant:<span class="important">*</span></label>
			            	<div class="col-12 col-md-8">   
			            		<input type="text" class="form-control" id="email" placeholder="" name="name" value="<?php echo isset($_SESSION['name']) ? $_SESSION['name'] : ''; ?>" required>	
				            </div>
			            </div>		

			            <div class="form-group row">
			            	<label class="col-form-label col-6 col-md-4" for="fnamelbl">First Part (Given Name):</label>
			            	<div class="col-12 col-md-8">   
			            		<input type="text" class="form-control" id="fname" placeholder="" name="fname" value="<?php echo isset($_SESSION['fname']) ? $_SESSION['fname'] : ''; ?>">	
				            </div>
			            </div>		            

			            <div class="form-group row">
			            	<label class="col-form-label col-6 col-md-4" for="lnamelbl">Second Part (Surname):<span class="important">*</span></label>
			            	<div class="col-12 col-md-8">   
			            		<input type="text" class="form-control" id="lname" placeholder="" name="lname" value="<?php echo isset($_SESSION['lname']) ? $_SESSION['lname'] : ''; ?>" required>	
				            </div>
			            </div>		            

			            <div class="form-group row">
			            	<label class="col-form-label col-6 col-md-4" for="fatherNamelbl">Father's Name:<span class="important">*</span></label>
			            	<div class="col-12 col-md-8">   
			            		<input type="text" class="form-control" id="fatherName" placeholder="" name="fatherName" value="<?php echo isset($_SESSION['fatherName']) ? $_SESSION['fatherName'] : ''; ?>" required>	
				            </div>
			            </div>

			            <div class="form-group row">
			            	<label class="col-form-label col-6 col-md-4" for="fatherNationalitylbl">Father's Nationality:<span class="important">*</span></label>
			            	<div class="col-12 col-md-8">   
			            		<select class= "selectpicker" name="fatherNationality" required>

									<option value="">-SELECT-</option>
									<option value="AFGHANISTAN"  <?php echo OptionCheck("AFGHANISTAN", "fatherNationality") ? "selected" : ''; ?>>AFGHANISTAN</option>
									<option value="ALGERIAN"  <?php echo OptionCheck("ALGERIAN", "fatherNationality") ? "selected" : ''; ?>>ALGERIAN</option>
									<option value="AMERICAN SAMOAN"  <?php echo OptionCheck("AMERICAN SAMOAN", "fatherNationality") ? "selected" : ''; ?>>AMERICAN SAMOAN</option>
									<option value="ANDORRAN" <?php echo OptionCheck("ANDORRAN", "fatherNationality") ? "selected" : ''; ?>>ANDORRAN</option>
									<option value="ANGOLAN" <?php echo OptionCheck("ANGOLAN", "fatherNationality") ? "selected" : ''; ?>>ANGOLAN</option>
									<option value="ANGUILLAN" <?php echo OptionCheck("ANGUILLAN", "fatherNationality") ? "selected" : ''; ?>>ANGUILLAN</option>
									<option value="ANTARTICAN" <?php echo OptionCheck("ANTARTICAN", "fatherNationality") ? "selected" : ''; ?>>ANTARTICAN</option>
									<option value="ANTIGUAN, BARBUDAN" <?php echo OptionCheck("ANTIGUAN, BARBUDAN", "fatherNationality") ? "selected" : ''; ?>>ANTIGUAN, BARBUDAN</option>
									<option value="ARGENTINE" <?php echo OptionCheck("ARGENTINE", "fatherNationality") ? "selected" : ''; ?>>ARGENTINE</option>
									<option value="ARMENIAN" <?php echo OptionCheck("ARMENIAN", "fatherNationality") ? "selected" : ''; ?>>ARMENIAN</option>
									<option value="ARUBAN, DUTCH" <?php echo OptionCheck("ARUBAN, DUTCH", "fatherNationality") ? "selected" : ''; ?>>ARUBAN, DUTCH</option>
									<option value="AUSTRALIAN" <?php echo OptionCheck("AUSTRALIAN", "fatherNationality") ? "selected" : ''; ?>>AUSTRALIAN</option>
									<option value="AUSTRIAN" <?php echo OptionCheck("AUSTRIAN", "fatherNationality") ? "selected" : ''; ?>>AUSTRIAN</option>
									<option value="AZERIS, AZERBAIJANI" <?php echo OptionCheck("AZERIS, AZERBAIJANI", "fatherNationality") ? "selected" : ''; ?>>AZERIS, AZERBAIJANI</option>
									<option value="BAHAMIAN" <?php echo OptionCheck("BAHAMIAN", "fatherNationality") ? "selected" : ''; ?>>BAHAMIAN</option>
									<option value="BAHRAINI" <?php echo OptionCheck("BAHRAINI", "fatherNationality") ? "selected" : ''; ?>>BAHRAINI</option>
									<option value="BANGLADESHI" <?php echo OptionCheck("BANGLADESHI", "fatherNationality") ? "selected" : ''; ?>>BANGLADESHI</option>
									<option value="BARBADIAN, BAJAN" <?php echo OptionCheck("BARBADIAN, BAJAN", "fatherNationality") ? "selected" : ''; ?>>BARBADIAN, BAJAN</option>
									<option value="BELARUSIAN" <?php echo OptionCheck("BELARUSIAN", "fatherNationality") ? "selected" : ''; ?>>BELARUSIAN</option>
									<option value="BELGIAN" <?php echo OptionCheck("BELGIAN", "fatherNationality") ? "selected" : ''; ?>>BELGIAN</option>
									<option value="BELIZEAN" <?php echo OptionCheck("BELIZEAN", "fatherNationality") ? "selected" : ''; ?>>BELIZEAN</option>
									<option value="BENINESE" <?php echo OptionCheck("BENINESE", "fatherNationality") ? "selected" : ''; ?>>BENINESE</option>
									<option value="BERMUDIAN" <?php echo OptionCheck("BERMUDIAN", "fatherNationality") ? "selected" : ''; ?>>BERMUDIAN</option>
									<option value="BHUTANESE" <?php echo OptionCheck("BHUTANESE", "fatherNationality") ? "selected" : ''; ?>>BHUTANESE</option>
									<option value="BOLIVIAN" <?php echo OptionCheck("BOLIVIAN", "fatherNationality") ? "selected" : ''; ?>>BOLIVIAN</option>

			            		</select>
				            </div>
			            </div>

			            <div class="form-group row">
			            	<label class="col-form-label col-6 col-md-4" for="fatherProfessionlbl">Father's Profession:<span class="important">*</span></label>
			            	<div class="col-12 col-md-8">   
			            		<select class= "selectpicker" name="fatherProfession" required>

									<option value="">-SELECT-</option>
									<option value="ACCOUNTANT" <?php echo OptionCheck("ACCOUNTANT", "fatherProfession") ? "selected" : ''; ?>>ACCOUNTANT</option>
									<option value="ARTIST" <?php echo OptionCheck("ARTIST", "fatherProfession") ? "selected" : ''; ?>>ARTIST</option>
									<option value="BACHELOR" <?php echo OptionCheck("BACHELOR", "fatherProfession") ? "selected" : ''; ?>>BACHELOR</option>
									<option value="BANKER" <?php echo OptionCheck("BANKER", "fatherProfession") ? "selected" : ''; ?>>BANKER</option>
									<option value="BARBER" <?php echo OptionCheck("BARBER", "fatherProfession") ? "selected" : ''; ?>>BARBER</option>
									<option value="BARRISTER AT LAW" <?php echo OptionCheck("BARRISTER AT LAW", "fatherProfession") ? "selected" : ''; ?>>BARRISTER AT LAW</option>
									<option value="BLACKSMITH" <?php echo OptionCheck("BLACKSMITH", "fatherProfession") ? "selected" : ''; ?>>BLACKSMITH</option>
									<option value="BOATMAN" <?php echo OptionCheck("BOATMAN", "fatherProfession") ? "selected" : ''; ?>>BOATMAN</option>
									<option value="BUSINESS" <?php echo OptionCheck("BUSINESS", "fatherProfession") ? "selected" : ''; ?>>BUSINESS</option>
									<option value="CHIEF JUSTICE" <?php echo OptionCheck("CHIEF JUSTICE", "fatherProfession") ? "selected" : ''; ?>>CHIEF JUSTICE</option>
									<option value="CLEANER" <?php echo OptionCheck("CLEANER", "fatherProfession") ? "selected" : ''; ?>>CLEANER</option>
									<option value="CONTRACTOR" <?php echo OptionCheck("CONTRACTOR", "fatherProfession") ? "selected" : ''; ?>>CONTRACTOR</option>
									<option value="COOK" <?php echo OptionCheck("COOK", "fatherProfession") ? "selected" : ''; ?>>COOK</option>
									<option value="DEPENDENT ON DIPLOMAT" <?php echo OptionCheck("DEPENDENT ON DIPLOMAT", "fatherProfession") ? "selected" : ''; ?>>DEPENDENT ON DIPLOMAT</option>
									<option value="DOCTOR" <?php echo OptionCheck("DOCTOR", "fatherProfession") ? "selected" : ''; ?>>DOCTOR</option>
									<option value="DRIVER" <?php echo OptionCheck("DRIVER", "fatherProfession") ? "selected" : ''; ?>>DRIVER</option>
									<option value="ENGINEER" <?php echo OptionCheck("ENGINEER", "fatherProfession") ? "selected" : ''; ?>>ENGINEER</option>
									<option value="FARMER" <?php echo OptionCheck("FARMER", "fatherProfession") ? "selected" : ''; ?>>FARMER</option>
									<option value="FISHERMAN" <?php echo OptionCheck("FISHERMAN", "fatherProfession") ? "selected" : ''; ?>>FISHERMAN</option>
									<option value="GOVERNMENT SERVICE" <?php echo OptionCheck("GOVERNMENT SERVICE", "fatherProfession") ? "selected" : ''; ?>>GOVERNMENT SERVICE</option>
									<option value="GUARD" <?php echo OptionCheck("GUARD", "fatherProfession") ? "selected" : ''; ?>>GUARD</option>

			            		</select>	
				            </div>
			            </div>

			            <div class="form-group row">
			            	<label class="col-form-label col-6 col-md-4" for="motherNamelbl">Mother's Name:<span class="important">*</span></label>
			            	<div class="col-12 col-md-8">   
			            		<input type="text" class="form-control" id="motherName" placeholder="" name="motherName" value="<?php echo isset($_SESSION['motherName']) ? $_SESSION['motherName'] : ''; ?>" required>	
				            </div>
			            </div>

			            <div class="form-group row">
			            	<label class="col-form-label col-6 col-md-4" for="motherNationalitylbl">Mother's Nationality:<span class="important">*</span></label>
			            	<div class="col-12 col-md-8">   
			            		<select class= "selectpicker" name="motherNationality" required>

									<option value="">-SELECT-</option>
									<option value="AFGHANISTAN"  <?php echo OptionCheck("AFGHANISTAN", "motherNationality") ? "selected" : ''; ?>>AFGHANISTAN</option>
									<option value="ALGERIAN"  <?php echo OptionCheck("ALGERIAN", "motherNationality") ? "selected" : ''; ?>>ALGERIAN</option>
									<option value="AMERICAN SAMOAN"  <?php echo OptionCheck("AMERICAN SAMOAN", "motherNationality") ? "selected" : ''; ?>>AMERICAN SAMOAN</option>
									<option value="ANDORRAN" <?php echo OptionCheck("ANDORRAN", "motherNationality") ? "selected" : ''; ?>>ANDORRAN</option>
									<option value="ANGOLAN" <?php echo OptionCheck("ANGOLAN", "motherNationality") ? "selected" : ''; ?>>ANGOLAN</option>
									<option value="ANGUILLAN" <?php echo OptionCheck("ANGUILLAN", "motherNationality") ? "selected" : ''; ?>>ANGUILLAN</option>
									<option value="ANTARTICAN" <?php echo OptionCheck("ANTARTICAN", "motherNationality") ? "selected" : ''; ?>>ANTARTICAN</option>
									<option value="ANTIGUAN, BARBUDAN" <?php echo OptionCheck("ANTIGUAN, BARBUDAN", "motherNationality") ? "selected" : ''; ?>>ANTIGUAN, BARBUDAN</option>
									<option value="ARGENTINE" <?php echo OptionCheck("ARGENTINE", "motherNationality") ? "selected" : ''; ?>>ARGENTINE</option>
									<option value="ARMENIAN" <?php echo OptionCheck("ARMENIAN", "motherNationality") ? "selected" : ''; ?>>ARMENIAN</option>
									<option value="ARUBAN, DUTCH" <?php echo OptionCheck("ARUBAN, DUTCH", "motherNationality") ? "selected" : ''; ?>>ARUBAN, DUTCH</option>
									<option value="AUSTRALIAN" <?php echo OptionCheck("AUSTRALIAN", "motherNationality") ? "selected" : ''; ?>>AUSTRALIAN</option>
									<option value="AUSTRIAN" <?php echo OptionCheck("AUSTRIAN", "motherNationality") ? "selected" : ''; ?>>AUSTRIAN</option>
									<option value="AZERIS, AZERBAIJANI" <?php echo OptionCheck("AZERIS, AZERBAIJANI", "motherNationality") ? "selected" : ''; ?>>AZERIS, AZERBAIJANI</option>
									<option value="BAHAMIAN" <?php echo OptionCheck("BAHAMIAN", "motherNationality") ? "selected" : ''; ?>>BAHAMIAN</option>
									<option value="BAHRAINI" <?php echo OptionCheck("BAHRAINI", "motherNationality") ? "selected" : ''; ?>>BAHRAINI</option>
									<option value="BANGLADESHI" <?php echo OptionCheck("BANGLADESHI", "motherNationality") ? "selected" : ''; ?>>BANGLADESHI</option>
									<option value="BARBADIAN, BAJAN" <?php echo OptionCheck("BARBADIAN, BAJAN", "motherNationality") ? "selected" : ''; ?>>BARBADIAN, BAJAN</option>
									<option value="BELARUSIAN" <?php echo OptionCheck("BELARUSIAN", "motherNationality") ? "selected" : ''; ?>>BELARUSIAN</option>
									<option value="BELGIAN" <?php echo OptionCheck("BELGIAN", "motherNationality") ? "selected" : ''; ?>>BELGIAN</option>
									<option value="BELIZEAN" <?php echo OptionCheck("BELIZEAN", "motherNationality") ? "selected" : ''; ?>>BELIZEAN</option>
									<option value="BENINESE" <?php echo OptionCheck("BENINESE", "motherNationality") ? "selected" : ''; ?>>BENINESE</option>
									<option value="BERMUDIAN" <?php echo OptionCheck("BERMUDIAN", "motherNationality") ? "selected" : ''; ?>>BERMUDIAN</option>
									<option value="BHUTANESE" <?php echo OptionCheck("BHUTANESE", "motherNationality") ? "selected" : ''; ?>>BHUTANESE</option>
									<option value="BOLIVIAN" <?php echo OptionCheck("BOLIVIAN", "motherNationality") ? "selected" : ''; ?>>BOLIVIAN</option>

			            		</select>
				            </div>
			            </div>

			            <div class="form-group row">
			            	<label class="col-form-label col-6 col-md-4" for="motherProfessionlbl">Mother's Profession:<span class="important">*</span></label>
			            	<div class="col-12 col-md-8">   
			            		<select class= "selectpicker" name="motherProfession" required>

									<option value="">-SELECT-</option>
									<option value="ACCOUNTANT" <?php echo OptionCheck("ACCOUNTANT", "motherProfession") ? "selected" : ''; ?>>ACCOUNTANT</option>
									<option value="ARTIST" <?php echo OptionCheck("ARTIST", "motherProfession") ? "selected" : ''; ?>>ARTIST</option>
									<option value="BACHELOR" <?php echo OptionCheck("BACHELOR", "motherProfession") ? "selected" : ''; ?>>BACHELOR</option>
									<option value="BANKER" <?php echo OptionCheck("BANKER", "motherProfession") ? "selected" : ''; ?>>BANKER</option>
									<option value="BARBER" <?php echo OptionCheck("BARBER", "motherProfession") ? "selected" : ''; ?>>BARBER</option>
									<option value="BARRISTER AT LAW" <?php echo OptionCheck("BARRISTER AT LAW", "motherProfession") ? "selected" : ''; ?>>BARRISTER AT LAW</option>
									<option value="BLACKSMITH" <?php echo OptionCheck("BLACKSMITH", "motherProfession") ? "selected" : ''; ?>>BLACKSMITH</option>
									<option value="BOATMAN" <?php echo OptionCheck("BOATMAN", "motherProfession") ? "selected" : ''; ?>>BOATMAN</option>
									<option value="BUSINESS" <?php echo OptionCheck("BUSINESS", "motherProfession") ? "selected" : ''; ?>>BUSINESS</option>
									<option value="CHIEF JUSTICE" <?php echo OptionCheck("CHIEF JUSTICE", "motherProfession") ? "selected" : ''; ?>>CHIEF JUSTICE</option>
									<option value="CLEANER" <?php echo OptionCheck("CLEANER", "motherProfession") ? "selected" : ''; ?>>CLEANER</option>
									<option value="CONTRACTOR" <?php echo OptionCheck("CONTRACTOR", "motherProfession") ? "selected" : ''; ?>>CONTRACTOR</option>
									<option value="COOK" <?php echo OptionCheck("COOK", "motherProfession") ? "selected" : ''; ?>>COOK</option>
									<option value="DEPENDENT ON DIPLOMAT" <?php echo OptionCheck("DEPENDENT ON DIPLOMAT", "motherProfession") ? "selected" : ''; ?>>DEPENDENT ON DIPLOMAT</option>
									<option value="DOCTOR" <?php echo OptionCheck("DOCTOR", "motherProfession") ? "selected" : ''; ?>>DOCTOR</option>
									<option value="DRIVER" <?php echo OptionCheck("DRIVER", "motherProfession") ? "selected" : ''; ?>>DRIVER</option>
									<option value="ENGINEER" <?php echo OptionCheck("ENGINEER", "motherProfession") ? "selected" : ''; ?>>ENGINEER</option>
									<option value="FARMER" <?php echo OptionCheck("FARMER", "motherProfession") ? "selected" : ''; ?>>FARMER</option>
									<option value="FISHERMAN" <?php echo OptionCheck("FISHERMAN", "motherProfession") ? "selected" : ''; ?>>FISHERMAN</option>
									<option value="GOVERNMENT SERVICE" <?php echo OptionCheck("GOVERNMENT SERVICE", "motherProfession") ? "selected" : ''; ?>>GOVERNMENT SERVICE</option>
									<option value="GUARD" <?php echo OptionCheck("GUARD", "motherProfession") ? "selected" : ''; ?>>GUARD</option>

			            		</select>
				            </div>
			            </div>

						<div class="form-group row">
			            	<label class="col-form-label col-6 col-md-4" for="spouseNamelbl">Spouse's Name:</label>
			            	<div class="col-12 col-md-8">   
			            		<input type="text" class="form-control" id="spouseName" placeholder="" name="spouseName" value="<?php echo isset($_SESSION['spouseName']) ? $_SESSION['spouseName'] : ''; ?>">	
				            </div>
			            </div>

			            <div class="form-group row">
			            	<label class="col-form-label col-6 col-md-4" for="spouseNationalitylbl">Spouse's Nationality:</label>
			            	<div class="col-12 col-md-8">   
			            		<select class= "selectpicker" name="spouseNationality">

									<option value="">-SELECT-</option>
									<option value="AFGHANISTAN"  <?php echo OptionCheck("AFGHANISTAN", "spouseNationality") ? "selected" : ''; ?>>AFGHANISTAN</option>
									<option value="ALGERIAN"  <?php echo OptionCheck("ALGERIAN", "spouseNationality") ? "selected" : ''; ?>>ALGERIAN</option>
									<option value="AMERICAN SAMOAN"  <?php echo OptionCheck("AMERICAN SAMOAN", "spouseNationality") ? "selected" : ''; ?>>AMERICAN SAMOAN</option>
									<option value="ANDORRAN" <?php echo OptionCheck("ANDORRAN", "spouseNationality") ? "selected" : ''; ?>>ANDORRAN</option>
									<option value="ANGOLAN" <?php echo OptionCheck("ANGOLAN", "spouseNationality") ? "selected" : ''; ?>>ANGOLAN</option>
									<option value="ANGUILLAN" <?php echo OptionCheck("ANGUILLAN", "spouseNationality") ? "selected" : ''; ?>>ANGUILLAN</option>
									<option value="ANTARTICAN" <?php echo OptionCheck("ANTARTICAN", "spouseNationality") ? "selected" : ''; ?>>ANTARTICAN</option>
									<option value="ANTIGUAN, BARBUDAN" <?php echo OptionCheck("ANTIGUAN, BARBUDAN", "spouseNationality") ? "selected" : ''; ?>>ANTIGUAN, BARBUDAN</option>
									<option value="ARGENTINE" <?php echo OptionCheck("ARGENTINE", "spouseNationality") ? "selected" : ''; ?>>ARGENTINE</option>
									<option value="ARMENIAN" <?php echo OptionCheck("ARMENIAN", "spouseNationality") ? "selected" : ''; ?>>ARMENIAN</option>
									<option value="ARUBAN, DUTCH" <?php echo OptionCheck("ARUBAN, DUTCH", "spouseNationality") ? "selected" : ''; ?>>ARUBAN, DUTCH</option>
									<option value="AUSTRALIAN" <?php echo OptionCheck("AUSTRALIAN", "spouseNationality") ? "selected" : ''; ?>>AUSTRALIAN</option>
									<option value="AUSTRIAN" <?php echo OptionCheck("AUSTRIAN", "spouseNationality") ? "selected" : ''; ?>>AUSTRIAN</option>
									<option value="AZERIS, AZERBAIJANI" <?php echo OptionCheck("AZERIS, AZERBAIJANI", "spouseNationality") ? "selected" : ''; ?>>AZERIS, AZERBAIJANI</option>
									<option value="BAHAMIAN" <?php echo OptionCheck("BAHAMIAN", "spouseNationality") ? "selected" : ''; ?>>BAHAMIAN</option>
									<option value="BAHRAINI" <?php echo OptionCheck("BAHRAINI", "spouseNationality") ? "selected" : ''; ?>>BAHRAINI</option>
									<option value="BANGLADESHI" <?php echo OptionCheck("BANGLADESHI", "spouseNationality") ? "selected" : ''; ?>>BANGLADESHI</option>
									<option value="BARBADIAN, BAJAN" <?php echo OptionCheck("BARBADIAN, BAJAN", "spouseNationality") ? "selected" : ''; ?>>BARBADIAN, BAJAN</option>
									<option value="BELARUSIAN" <?php echo OptionCheck("BELARUSIAN", "spouseNationality") ? "selected" : ''; ?>>BELARUSIAN</option>
									<option value="BELGIAN" <?php echo OptionCheck("BELGIAN", "spouseNationality") ? "selected" : ''; ?>>BELGIAN</option>
									<option value="BELIZEAN" <?php echo OptionCheck("BELIZEAN", "spouseNationality") ? "selected" : ''; ?>>BELIZEAN</option>
									<option value="BENINESE" <?php echo OptionCheck("BENINESE", "spouseNationality") ? "selected" : ''; ?>>BENINESE</option>
									<option value="BERMUDIAN" <?php echo OptionCheck("BERMUDIAN", "spouseNationality") ? "selected" : ''; ?>>BERMUDIAN</option>
									<option value="BHUTANESE" <?php echo OptionCheck("BHUTANESE", "spouseNationality") ? "selected" : ''; ?>>BHUTANESE</option>
									<option value="BOLIVIAN" <?php echo OptionCheck("BOLIVIAN", "spouseNationality") ? "selected" : ''; ?>>BOLIVIAN</option>

			            		</select>
				            </div>
			            </div>

			            <div class="form-group row">
			            	<label class="col-form-label col-6 col-md-4" for="spouseProfessionlbl">Spouse's Profession:</label>
			            	<div class="col-12 col-md-8">   
			            		<select class= "selectpicker" name="spouseProfession">

									<option value="">-SELECT-</option>
									<option value="ACCOUNTANT" <?php echo OptionCheck("ACCOUNTANT", "spouseProfession") ? "selected" : ''; ?>>ACCOUNTANT</option>
									<option value="ARTIST" <?php echo OptionCheck("ARTIST", "spouseProfession") ? "selected" : ''; ?>>ARTIST</option>
									<option value="BACHELOR" <?php echo OptionCheck("BACHELOR", "spouseProfession") ? "selected" : ''; ?>>BACHELOR</option>
									<option value="BANKER" <?php echo OptionCheck("BANKER", "spouseProfession") ? "selected" : ''; ?>>BANKER</option>
									<option value="BARBER" <?php echo OptionCheck("BARBER", "spouseProfession") ? "selected" : ''; ?>>BARBER</option>
									<option value="BARRISTER AT LAW" <?php echo OptionCheck("BARRISTER AT LAW", "spouseProfession") ? "selected" : ''; ?>>BARRISTER AT LAW</option>
									<option value="BLACKSMITH" <?php echo OptionCheck("BLACKSMITH", "spouseProfession") ? "selected" : ''; ?>>BLACKSMITH</option>
									<option value="BOATMAN" <?php echo OptionCheck("BOATMAN", "spouseProfession") ? "selected" : ''; ?>>BOATMAN</option>
									<option value="BUSINESS" <?php echo OptionCheck("BUSINESS", "spouseProfession") ? "selected" : ''; ?>>BUSINESS</option>
									<option value="CHIEF JUSTICE" <?php echo OptionCheck("CHIEF JUSTICE", "spouseProfession") ? "selected" : ''; ?>>CHIEF JUSTICE</option>
									<option value="CLEANER" <?php echo OptionCheck("CLEANER", "spouseProfession") ? "selected" : ''; ?>>CLEANER</option>
									<option value="CONTRACTOR" <?php echo OptionCheck("CONTRACTOR", "spouseProfession") ? "selected" : ''; ?>>CONTRACTOR</option>
									<option value="COOK" <?php echo OptionCheck("COOK", "spouseProfession") ? "selected" : ''; ?>>COOK</option>
									<option value="DEPENDENT ON DIPLOMAT" <?php echo OptionCheck("DEPENDENT ON DIPLOMAT", "spouseProfession") ? "selected" : ''; ?>>DEPENDENT ON DIPLOMAT</option>
									<option value="DOCTOR" <?php echo OptionCheck("DOCTOR", "spouseProfession") ? "selected" : ''; ?>>DOCTOR</option>
									<option value="DRIVER" <?php echo OptionCheck("DRIVER", "spouseProfession") ? "selected" : ''; ?>>DRIVER</option>
									<option value="ENGINEER" <?php echo OptionCheck("ENGINEER", "spouseProfession") ? "selected" : ''; ?>>ENGINEER</option>
									<option value="FARMER" <?php echo OptionCheck("FARMER", "spouseProfession") ? "selected" : ''; ?>>FARMER</option>
									<option value="FISHERMAN" <?php echo OptionCheck("FISHERMAN", "spouseProfession") ? "selected" : ''; ?>>FISHERMAN</option>
									<option value="GOVERNMENT SERVICE" <?php echo OptionCheck("GOVERNMENT SERVICE", "spouseProfession") ? "selected" : ''; ?>>GOVERNMENT SERVICE</option>
									<option value="GUARD" <?php echo OptionCheck("GUARD", "spouseProfession") ? "selected" : ''; ?>>GUARD</option>

			            		</select>
				            </div>
			            </div>		            

						<div class="form-group row">
				            <label class="col-form-label col-6 col-md-4" for="maritalStatuslbl">Marital Status:<span class="important">*</span></label>
				            <div class="col-12 col-md-8">   
				            	<select class= "selectpicker" name="martitalStatus" required>

									<option value="">-SELECT-</option>
									<option value="SINGLE" <?php echo OptionCheck("SINGLE", "martitalStatus") ? "selected" : ''; ?>>SINGLE</option>
									<option value="MARRIED" <?php echo OptionCheck("MARRIED", "martitalStatus") ? "selected" : ''; ?>>MARRIED</option>
									<option value="DIVORCED" <?php echo OptionCheck("DIVORCED", "martitalStatus") ? "selected" : ''; ?>>DIVORCED</option>
									<option value="WIDOWED" <?php echo OptionCheck("WIDOWED", "martitalStatus") ? "selected" : ''; ?>>WIDOWED</option>

	 							</select>
		        			</div>
		        		</div>

						<div class="form-group row">
			            	<label class="col-form-label col-6 col-md-4" for="applicantProfessionlbl">Applicant's Profession:<span class="important">*</span></label>
			            	<div class="col-12 col-md-8">   
			            		<select class= "selectpicker" name="applicantProfession" required>

									<option value="">-SELECT-</option>
									<option value="ACCOUNTANT" <?php echo OptionCheck("ACCOUNTANT", "applicantProfession") ? "selected" : ''; ?>>ACCOUNTANT</option>
									<option value="ARTIST" <?php echo OptionCheck("ARTIST", "applicantProfession") ? "selected" : ''; ?>>ARTIST</option>
									<option value="BACHELOR" <?php echo OptionCheck("BACHELOR", "applicantProfession") ? "selected" : ''; ?>>BACHELOR</option>
									<option value="BANKER" <?php echo OptionCheck("BANKER", "applicantProfession") ? "selected" : ''; ?>>BANKER</option>
									<option value="BARBER" <?php echo OptionCheck("BARBER", "applicantProfession") ? "selected" : ''; ?>>BARBER</option>
									<option value="BARRISTER AT LAW" <?php echo OptionCheck("BARRISTER AT LAW", "applicantProfession") ? "selected" : ''; ?>>BARRISTER AT LAW</option>
									<option value="BLACKSMITH" <?php echo OptionCheck("BLACKSMITH", "applicantProfession") ? "selected" : ''; ?>>BLACKSMITH</option>
									<option value="BOATMAN" <?php echo OptionCheck("BOATMAN", "applicantProfession") ? "selected" : ''; ?>>BOATMAN</option>
									<option value="BUSINESS" <?php echo OptionCheck("BUSINESS", "applicantProfession") ? "selected" : ''; ?>>BUSINESS</option>
									<option value="CHIEF JUSTICE" <?php echo OptionCheck("CHIEF JUSTICE", "applicantProfession") ? "selected" : ''; ?>>CHIEF JUSTICE</option>
									<option value="CLEANER" <?php echo OptionCheck("CLEANER", "applicantProfession") ? "selected" : ''; ?>>CLEANER</option>
									<option value="CONTRACTOR" <?php echo OptionCheck("CONTRACTOR", "applicantProfession") ? "selected" : ''; ?>>CONTRACTOR</option>
									<option value="COOK" <?php echo OptionCheck("COOK", "applicantProfession") ? "selected" : ''; ?>>COOK</option>
									<option value="DEPENDENT ON DIPLOMAT" <?php echo OptionCheck("DEPENDENT ON DIPLOMAT", "applicantProfession") ? "selected" : ''; ?>>DEPENDENT ON DIPLOMAT</option>
									<option value="DOCTOR" <?php echo OptionCheck("DOCTOR", "applicantProfession") ? "selected" : ''; ?>>DOCTOR</option>
									<option value="DRIVER" <?php echo OptionCheck("DRIVER", "applicantProfession") ? "selected" : ''; ?>>DRIVER</option>
									<option value="ENGINEER" <?php echo OptionCheck("ENGINEER", "applicantProfession") ? "selected" : ''; ?>>ENGINEER</option>
									<option value="FARMER" <?php echo OptionCheck("FARMER", "applicantProfession") ? "selected" : ''; ?>>FARMER</option>
									<option value="FISHERMAN" <?php echo OptionCheck("FISHERMAN", "applicantProfession") ? "selected" : ''; ?>>FISHERMAN</option>
									<option value="GOVERNMENT SERVICE" <?php echo OptionCheck("GOVERNMENT SERVICE", "applicantProfession") ? "selected" : ''; ?>>GOVERNMENT SERVICE</option>
									<option value="GUARD" <?php echo OptionCheck("GUARD", "applicantProfession") ? "selected" : ''; ?>>GUARD</option>

			            		</select>
				            </div>
			            </div>		            

			            <div class="form-group row">
			            	<label class="col-form-label col-6 col-md-4" for="countryBirthlbl">Country Of Birth:<span class="important">*</span></label>
			            	<div class="col-12 col-md-8">   
			            		<select class= "selectpicker" name="countryOfBirth" required>

									<option value="">-SELECT-</option>
									<option value="AFGHANISTAN"  <?php echo OptionCheck("AFGHANISTAN", "countryOfBirth") ? "selected" : ''; ?>>AFGHANISTAN</option>
									<option value="ALGERIAN"  <?php echo OptionCheck("ALGERIAN", "countryOfBirth") ? "selected" : ''; ?>>ALGERIAN</option>
									<option value="AMERICAN SAMOAN"  <?php echo OptionCheck("AMERICAN SAMOAN", "countryOfBirth") ? "selected" : ''; ?>>AMERICAN SAMOAN</option>
									<option value="ANDORRAN" <?php echo OptionCheck("ANDORRAN", "countryOfBirth") ? "selected" : ''; ?>>ANDORRAN</option>
									<option value="ANGOLAN" <?php echo OptionCheck("ANGOLAN", "countryOfBirth") ? "selected" : ''; ?>>ANGOLAN</option>
									<option value="ANGUILLAN" <?php echo OptionCheck("ANGUILLAN", "countryOfBirth") ? "selected" : ''; ?>>ANGUILLAN</option>
									<option value="ANTARTICAN" <?php echo OptionCheck("ANTARTICAN", "countryOfBirth") ? "selected" : ''; ?>>ANTARTICAN</option>
									<option value="ANTIGUAN, BARBUDAN" <?php echo OptionCheck("ANTIGUAN, BARBUDAN", "countryOfBirth") ? "selected" : ''; ?>>ANTIGUAN, BARBUDAN</option>
									<option value="ARGENTINE" <?php echo OptionCheck("ARGENTINE", "countryOfBirth") ? "selected" : ''; ?>>ARGENTINE</option>
									<option value="ARMENIAN" <?php echo OptionCheck("ARMENIAN", "countryOfBirth") ? "selected" : ''; ?>>ARMENIAN</option>
									<option value="ARUBAN, DUTCH" <?php echo OptionCheck("ARUBAN, DUTCH", "countryOfBirth") ? "selected" : ''; ?>>ARUBAN, DUTCH</option>
									<option value="AUSTRALIAN" <?php echo OptionCheck("AUSTRALIAN", "countryOfBirth") ? "selected" : ''; ?>>AUSTRALIAN</option>
									<option value="AUSTRIAN" <?php echo OptionCheck("AUSTRIAN", "countryOfBirth") ? "selected" : ''; ?>>AUSTRIAN</option>
									<option value="AZERIS, AZERBAIJANI" <?php echo OptionCheck("AZERIS, AZERBAIJANI", "countryOfBirth") ? "selected" : ''; ?>>AZERIS, AZERBAIJANI</option>
									<option value="BAHAMIAN" <?php echo OptionCheck("BAHAMIAN", "countryOfBirth") ? "selected" : ''; ?>>BAHAMIAN</option>
									<option value="BAHRAINI" <?php echo OptionCheck("BAHRAINI", "countryOfBirth") ? "selected" : ''; ?>>BAHRAINI</option>
									<option value="BANGLADESHI" <?php echo OptionCheck("BANGLADESHI", "countryOfBirth") ? "selected" : ''; ?>>BANGLADESHI</option>
									<option value="BARBADIAN, BAJAN" <?php echo OptionCheck("BARBADIAN, BAJAN", "countryOfBirth") ? "selected" : ''; ?>>BARBADIAN, BAJAN</option>
									<option value="BELARUSIAN" <?php echo OptionCheck("BELARUSIAN", "countryOfBirth") ? "selected" : ''; ?>>BELARUSIAN</option>
									<option value="BELGIAN" <?php echo OptionCheck("BELGIAN", "countryOfBirth") ? "selected" : ''; ?>>BELGIAN</option>
									<option value="BELIZEAN" <?php echo OptionCheck("BELIZEAN", "countryOfBirth") ? "selected" : ''; ?>>BELIZEAN</option>
									<option value="BENINESE" <?php echo OptionCheck("BENINESE", "countryOfBirth") ? "selected" : ''; ?>>BENINESE</option>
									<option value="BERMUDIAN" <?php echo OptionCheck("BERMUDIAN", "countryOfBirth") ? "selected" : ''; ?>>BERMUDIAN</option>
									<option value="BHUTANESE" <?php echo OptionCheck("BHUTANESE", "countryOfBirth") ? "selected" : ''; ?>>BHUTANESE</option>
									<option value="BOLIVIAN" <?php echo OptionCheck("BOLIVIAN", "countryOfBirth") ? "selected" : ''; ?>>BOLIVIAN</option>

			            		</select>
				            </div>
			            </div>

			            <div class="form-group row">
			            	<label class="col-form-label col-6 col-md-4" for="districtBirthlbl">Birth Place:<span class="important">*</span></label>
			            	<div class="col-12 col-md-8"> 
			            		<input type="text" class="form-control" id="districtBirth" placeholder="" value="<?php echo isset($_SESSION['districtBirth']) ? $_SESSION['districtBirth'] : ''; ?>" name="districtBirth" required> 
				            </div>
			            </div>

		        	</div>	

	        		
	        		<div class="col-md-6 left-border">

						<div class="form-group row">
				            <label class="col-form-label col-6 col-md-4" for="doblbl">Date Of Birth:<span class="important">*</span></label>
				            <div class="col-12 col-md-8">   
				            	<input type="date" class="form-control" id="pwd" placeholder="" value="<?php echo isset($_SESSION['dob']) ? $_SESSION['dob'] : ''; ?>" name="dob" required>
		        			</div>
		        		</div>

			            <div class="form-group row">
			            	<label class="col-form-label col-6 col-md-4" for="genderlbl">Gender:<span class="important">*</span></label>
			            	<div class="col-12 col-md-8">   
				                <label class="radio-inline">
				                  <input type="radio" name="gender" value="Male"  <?php echo OptionCheck("Male", "gender") ? "checked" : ''; ?> required>Male
				                </label>
				                <label class="radio-inline">
				                  <input type="radio" name="gender" value="Female"  <?php echo OptionCheck("Female", "gender") ? "checked" : ''; ?>  required>Female
				                </label>
				           		<label class="radio-inline">
				                  <input type="radio" name="gender" value="Others" <?php echo OptionCheck("Others", "genderchecked") ? "checked" : ''; ?>  required>Others
				              </label>
				            </div>
			            </div>

						<div class="form-group row">
				            <label class="col-form-label col-6 col-md-4" for="birthIDlbl">Birth ID:<span class="important">*</span></label>
				            <div class="col-12 col-md-8">   
				            	<input type="text" class="form-control" id="birthID" placeholder="" value="<?php echo isset($_SESSION['birthID']) ? $_SESSION['birthID'] : ''; ?>" name="birthID" required>
		        			</div>
		        		</div>

						<div class="form-group row">
				            <label class="col-form-label col-6 col-md-4" for="nationalIDlbl">National ID:</label>
				            <div class="col-12 col-md-8">   
				            	<input type="text" class="form-control" id="nationalID" placeholder="" name="nationalID" value="<?php echo isset($_SESSION['nationalID']) ? $_SESSION['nationalID'] : ''; ?>">
		        			</div>
		        		</div>

						<div class="form-group row">
				            <label class="col-form-label col-6 col-md-4" for="taxIDlbl">TAX ID:</label>
				            <div class="col-12 col-md-8">   
				            	<input type="text" class="form-control" id="taxID" placeholder="" name="taxID" value="<?php echo isset($_SESSION['taxID']) ? $_SESSION['taxID'] : ''; ?>">
		        			</div>
		        		</div>

		        		<div class="form-group row">
				            <label class="col-form-label col-6 col-md-4" for="taxIDlbl">Height:<span class="important">*</span></label>
				            <div class="col-12 col-md-8">
				            	<div class="form-group row"> 
				            		<div class="col-xs-6">
					                    <div class="form-group">
					                      <label class="sr-only" for="heightCm">cm</label>
					                      <input type="text" class="form-control" id="heightCm" placeholder="cm" value="<?php echo isset($_SESSION['heightCm']) ? $_SESSION['heightCm'] : ''; ?>" name="heightCm" required>
					                    </div>
					                </div>
					                <div class="col-xs-6">       
					                    <div class="form-group">
					                      <label class="sr-only" for="heightInch">inch:</label>
					                      <input type="text" class="form-control" id="heightInch" placeholder="inch" value="<?php echo isset($_SESSION['heightInch']) ? $_SESSION['heightInch'] : ''; ?>" name="heightInch" required>
					                    </div>
					                </div> 
					            </div>
				            </div>
		        		</div>

						<div class="form-group row">
				            <label class="col-form-label col-6 col-md-4" for="religionlbl">Religion:<span class="important">*</span></label>
				            <div class="col-12 col-md-8">   
				            	<select class= "selectpicker" name="religion" required>

									<option value="">-SELECT-</option>
									<option value="BUDDHISM" <?php echo OptionCheck("BUDDHISM", "religion") ? "selected" : ''; ?>>BUDDHISM</option>
									<option value="CHRISTIANITY" <?php echo OptionCheck("CHRISTIANITY", "religion") ? "selected" : ''; ?>>CHRISTIANITY</option>
									<option value="HINDUISM" <?php echo OptionCheck("HINDUISM", "religion") ? "selected" : ''; ?>>HINDUISM</option>
									<option value="ISLAM" <?php echo OptionCheck("ISLAM", "religion") ? "selected" : ''; ?>>ISLAM</option>
									<option value="JAINISM" <?php echo OptionCheck("JAINISM", "religion") ? "selected" : ''; ?>>JAINISM</option>
									<option value="JUDAISM" <?php echo OptionCheck("JUDAISM", "religion") ? "selected" : ''; ?>>JUDAISM</option>
									<option value="OTHERS" <?php echo OptionCheck("OTHERS", "religion") ? "selected" : ''; ?>>OTHERS</option>
									<option value="SIKHISM" <?php echo OptionCheck("SIKHISM", "religion") ? "selected" : ''; ?>>SIKHISM</option>

	 							</select>
		        			</div>
		        		</div>

						<div class="form-group row">
				            <label class="col-form-label col-6 col-md-4" for="emaillbl">Email:<span class="important">*</span></label>
				            <div class="col-12 col-md-8">   
								<input type="email" class="form-control" id="email" placeholder="" value="<?php echo isset($_SESSION['email']) ? $_SESSION['email'] : ''; ?>" name="email" required>
		        			</div>
		        		</div>

		        		<h2 class="title-padding">Citizenship Information</h2>

			            <div class="form-group row">
			            	<label class="col-form-label col-6 col-md-4" for="applicantNationality">Nationality:<span class="important">*</span></label>
			            	<div class="col-12 col-md-8">   
			            		<select class= "selectpicker" name="applicantNationality" required>

									<option value="">-SELECT-</option>
									<option value="AFGHANISTAN"  <?php echo OptionCheck("AFGHANISTAN", "applicantNationality") ? "selected" : ''; ?>>AFGHANISTAN</option>
									<option value="ALGERIAN"  <?php echo OptionCheck("ALGERIAN", "applicantNationality") ? "selected" : ''; ?>>ALGERIAN</option>
									<option value="AMERICAN SAMOAN"  <?php echo OptionCheck("AMERICAN SAMOAN", "applicantNationality") ? "selected" : ''; ?>>AMERICAN SAMOAN</option>
									<option value="ANDORRAN" <?php echo OptionCheck("ANDORRAN", "applicantNationality") ? "selected" : ''; ?>>ANDORRAN</option>
									<option value="ANGOLAN" <?php echo OptionCheck("ANGOLAN", "applicantNationality") ? "selected" : ''; ?>>ANGOLAN</option>
									<option value="ANGUILLAN" <?php echo OptionCheck("ANGUILLAN", "applicantNationality") ? "selected" : ''; ?>>ANGUILLAN</option>
									<option value="ANTARTICAN" <?php echo OptionCheck("ANTARTICAN", "applicantNationality") ? "selected" : ''; ?>>ANTARTICAN</option>
									<option value="ANTIGUAN, BARBUDAN" <?php echo OptionCheck("ANTIGUAN, BARBUDAN", "applicantNationality") ? "selected" : ''; ?>>ANTIGUAN, BARBUDAN</option>
									<option value="ARGENTINE" <?php echo OptionCheck("ARGENTINE", "applicantNationality") ? "selected" : ''; ?>>ARGENTINE</option>
									<option value="ARMENIAN" <?php echo OptionCheck("ARMENIAN", "applicantNationality") ? "selected" : ''; ?>>ARMENIAN</option>
									<option value="ARUBAN, DUTCH" <?php echo OptionCheck("ARUBAN, DUTCH", "applicantNationality") ? "selected" : ''; ?>>ARUBAN, DUTCH</option>
									<option value="AUSTRALIAN" <?php echo OptionCheck("AUSTRALIAN", "applicantNationality") ? "selected" : ''; ?>>AUSTRALIAN</option>
									<option value="AUSTRIAN" <?php echo OptionCheck("AUSTRIAN", "applicantNationality") ? "selected" : ''; ?>>AUSTRIAN</option>
									<option value="AZERIS, AZERBAIJANI" <?php echo OptionCheck("AZERIS, AZERBAIJANI", "applicantNationality") ? "selected" : ''; ?>>AZERIS, AZERBAIJANI</option>
									<option value="BAHAMIAN" <?php echo OptionCheck("BAHAMIAN", "applicantNationality") ? "selected" : ''; ?>>BAHAMIAN</option>
									<option value="BAHRAINI" <?php echo OptionCheck("BAHRAINI", "applicantNationality") ? "selected" : ''; ?>>BAHRAINI</option>
									<option value="BANGLADESHI" <?php echo OptionCheck("BANGLADESHI", "applicantNationality") ? "selected" : ''; ?>>BANGLADESHI</option>
									<option value="BARBADIAN, BAJAN" <?php echo OptionCheck("BARBADIAN, BAJAN", "applicantNationality") ? "selected" : ''; ?>>BARBADIAN, BAJAN</option>
									<option value="BELARUSIAN" <?php echo OptionCheck("BELARUSIAN", "applicantNationality") ? "selected" : ''; ?>>BELARUSIAN</option>
									<option value="BELGIAN" <?php echo OptionCheck("BELGIAN", "applicantNationality") ? "selected" : ''; ?>>BELGIAN</option>
									<option value="BELIZEAN" <?php echo OptionCheck("BELIZEAN", "applicantNationality") ? "selected" : ''; ?>>BELIZEAN</option>
									<option value="BENINESE" <?php echo OptionCheck("BENINESE", "applicantNationality") ? "selected" : ''; ?>>BENINESE</option>
									<option value="BERMUDIAN" <?php echo OptionCheck("BERMUDIAN", "applicantNationality") ? "selected" : ''; ?>>BERMUDIAN</option>
									<option value="BHUTANESE" <?php echo OptionCheck("BHUTANESE", "applicantNationality") ? "selected" : ''; ?>>BHUTANESE</option>
									<option value="BOLIVIAN" <?php echo OptionCheck("BOLIVIAN", "applicantNationality") ? "selected" : ''; ?>>BOLIVIAN</option>

			            		</select>
				            </div>
			            </div>

			            <div class="form-group row">
			            	<label class="col-form-label col-6 col-md-4" for="citizenshipStatus">Citizenship Status:<span class="important">*</span></label>
			            	<div class="col-12 col-md-8">   
			            		<select class= "selectpicker" name="citizenshipStatus" required>

									<option value="">-SELECT-</option>
									<option value="BIRTH" <?php echo OptionCheck("BIRTH", "citizenshipStatus") ? "selected" : ''; ?>>BIRTH</option>
									<option value="PARENTAGE" <?php echo OptionCheck("PARENTAGE", "citizenshipStatus") ? "selected" : ''; ?>>PARENTAGE</option>
									<option value="MIGRATION" <?php echo OptionCheck("MIGRATION", "citizenshipStatus") ? "selected" : ''; ?>>MIGRATION</option>
									<option value="NATURALIZATION" <?php echo OptionCheck("NATURALIZATION", "citizenshipStatus") ? "selected" : ''; ?>>NATURALIZATION</option>
									<option value="OTHERS" <?php echo OptionCheck("OTHERS", "citizenshipStatus") ? "selected" : ''; ?>>OTHERS</option>

			            		</select>
				            </div>
			            </div>

			            <div class="form-group row">
			            	<label class="col-form-label col-6 col-md-4" for="dualCitizenship">Dual Citizenship:<span class="important">*</span></label>
			            	<div class="col-12 col-md-8">   
				                <label class="radio-inline">
				                  <input type="radio" name="dualCitizenship" value="Yes" <?php echo OptionCheck("Yes", "dualCitizenship") ? "checked" : ''; ?> required>Yes
				                </label>
				                <label class="radio-inline">
				                  <input type="radio" name="dualCitizenship" value="No" <?php echo OptionCheck("No", "dualCitizenship") ? "checked" : ''; ?>  required>No
				                </label>
				            </div>
			            </div>

			            <h2 class="title-padding">Present Address</h2>

			            <div class="form-group row">
			            	<label class="col-form-label col-6 col-md-4" for="prsentVillage">Village/House:</label>
			            	<div class="col-12 col-md-8">   
			            		<input type="text" class="form-control" id="prsentVillage" placeholder="" value="<?php echo isset($_SESSION['prsentVillage']) ? $_SESSION['prsentVillage'] : ''; ?>" name="prsentVillage" required>	
				            </div>
			            </div>

			            <div class="form-group row">
			            	<label class="col-form-label col-6 col-md-4" for="prsentRoad">Road/Block/Sector:</label>
			            	<div class="col-12 col-md-8">   
			            		<input type="text" class="form-control" id="prsentRoad" placeholder="" value="<?php echo isset($_SESSION['prsentRoad']) ? $_SESSION['prsentRoad'] : ''; ?>" name="prsentRoad" required>	
				            </div>
			            </div>

			            <div class="form-group row">
			            	<label class="col-form-label col-6 col-md-4" for="presentDisctrict">District:<span class="important">*</span></label>
			            	<div class="col-12 col-md-8">   
			            		<select class= "selectpicker" name="presentDisctrict" required>

		            				<option value="">-SELECT-</option>
									<option value="BAGERHAT" <?php echo OptionCheck("BAGERHAT", "presentDisctrict") ? "selected" : ''; ?>>BAGERHAT</option>
									<option value="BANDARBAN" <?php echo OptionCheck("BANDARBAN", "presentDisctrict") ? "selected" : ''; ?>>BANDARBAN</option>
									<option value="BARGUNA" <?php echo OptionCheck("BARGUNA", "presentDisctrict") ? "selected" : ''; ?>>BARGUNA</option>
									<option value="BARISAL" <?php echo OptionCheck("BARISAL", "presentDisctrict") ? "selected" : ''; ?>>BARISAL</option>
									<option value="BHOLA" <?php echo OptionCheck("BHOLA", "presentDisctrict") ? "selected" : ''; ?>>BHOLA</option>
									<option value="BOGRA" <?php echo OptionCheck("BOGRA", "presentDisctrict") ? "selected" : ''; ?>>BOGRA</option>
									<option value="BRAHMANBARIA" <?php echo OptionCheck("BRAHMANBARIA", "presentDisctrict") ? "selected" : ''; ?>>BRAHMANBARIA</option>
									<option value="CHANDPUR" <?php echo OptionCheck("CHANDPUR", "presentDisctrict") ? "selected" : ''; ?>>CHANDPUR</option>
									<option value="CHAPAINAWABGANJ" <?php echo OptionCheck("CHAPAINAWABGANJ", "presentDisctrict") ? "selected" : ''; ?>>CHAPAINAWABGANJ</option>
									<option value="CHITTAGONG" <?php echo OptionCheck("CHITTAGONG", "presentDisctrict") ? "selected" : ''; ?>>CHITTAGONG</option>
									<option value="CHUADANGA" <?php echo OptionCheck("CHUADANGA", "presentDisctrict") ? "selected" : ''; ?>>CHUADANGA</option>
									<option value="COMILLA" <?php echo OptionCheck("COMILLA", "presentDisctrict") ? "selected" : ''; ?>>COMILLA</option>
									<option value="COX'S BAZAR" <?php echo OptionCheck("COX'S BAZAR", "presentDisctrict") ? "selected" : ''; ?>>COX'S BAZAR</option>
									<option value="DHAKA" <?php echo OptionCheck("DHAKA", "presentDisctrict") ? "selected" : ''; ?>>DHAKA</option>
									<option value="DINAJPUR" <?php echo OptionCheck("DINAJPUR", "presentDisctrict") ? "selected" : ''; ?>>DINAJPUR</option>
									<option value="FARIDPUR" <?php echo OptionCheck("FARIDPUR", "presentDisctrict") ? "selected" : ''; ?>>FARIDPUR</option>
									<option value="FENI" <?php echo OptionCheck("FENI", "presentDisctrict") ? "selected" : ''; ?>>FENI</option>
									<option value="GAIBANDHA" <?php echo OptionCheck("GAIBANDHA", "presentDisctrict") ? "selected" : ''; ?>>GAIBANDHA</option>
									<option value="GAZIPUR" <?php echo OptionCheck("GAZIPUR", "presentDisctrict") ? "selected" : ''; ?>>GAZIPUR</option>
									<option value="GOPALGANJ" <?php echo OptionCheck("GOPALGANJ", "presentDisctrict") ? "selected" : ''; ?>>GOPALGANJ</option>
									<option value="HABIGANJ" <?php echo OptionCheck("HABIGANJ", "presentDisctrict") ? "selected" : ''; ?>>HABIGANJ</option>
									<option value="JAMALPUR" <?php echo OptionCheck("JAMALPUR", "presentDisctrict") ? "selected" : ''; ?>>JAMALPUR</option>
									<option value="JESSORE" <?php echo OptionCheck("JESSORE", "presentDisctrict") ? "selected" : ''; ?>>JESSORE</option>

			            		</select>
				            </div>
			            </div>

			            <div class="form-group row">
			            	<label class="col-form-label col-6 col-md-4" for="prsentPoliceStation">Police Station:<span class="important">*</span></label>
			            	<div class="col-12 col-md-8">   
			            		<input type="text" class="form-control" id="prsentPoliceStation" placeholder="" value="<?php echo isset($_SESSION['prsentPoliceStation']) ? $_SESSION['prsentPoliceStation'] : ''; ?>" name="prsentPoliceStation" required>	
				            </div>
			            </div>

			            <div class="form-group row">
			            	<label class="col-form-label col-6 col-md-4" for="prsentPostOffice">Post Office:<span class="important">*</span></label>
			            	<div class="col-12 col-md-8">   
			            		<input type="text" class="form-control" id="prsentPostOffice" placeholder="" value="<?php echo isset($_SESSION['prsentPostOffice']) ? $_SESSION['prsentPostOffice'] : ''; ?>" name="prsentPostOffice" required>	
				            </div>
			            </div>


			            <h2 class="title-padding">Permanent Address</h2>

			            <div class="form-group row">
			            	<label class="col-form-label col-6 col-md-4" for="permanentVillage">Village/House:</label>
			            	<div class="col-12 col-md-8">   
			            		<input type="text" class="form-control" id="permanentVillage" placeholder="" value="<?php echo isset($_SESSION['permanentVillage']) ? $_SESSION['permanentVillage'] : ''; ?>" name="permanentVillage" required>	
				            </div>
			            </div>

			            <div class="form-group row">
			            	<label class="col-form-label col-6 col-md-4" for="permanentRoad">Road/Block/Sector:</label>
			            	<div class="col-12 col-md-8">   
			            		<input type="text" class="form-control" id="permanentRoad" placeholder="" value="<?php echo isset($_SESSION['permanentRoad']) ? $_SESSION['permanentRoad'] : ''; ?>" name="permanentRoad" required>	
				            </div>
			            </div>

			            <div class="form-group row">
			            	<label class="col-form-label col-6 col-md-4" for="permanentDisctrict">District:<span class="important">*</span></label>
			            	<div class="col-12 col-md-8">   
			            		<select class= "selectpicker" name="permanentDisctrict" required>

		            				<option value="">-SELECT-</option>
									<option value="BAGERHAT" <?php echo OptionCheck("BAGERHAT", "permanentDisctrict") ? "selected" : ''; ?>>BAGERHAT</option>
									<option value="BANDARBAN" <?php echo OptionCheck("BANDARBAN", "permanentDisctrict") ? "selected" : ''; ?>>BANDARBAN</option>
									<option value="BARGUNA" <?php echo OptionCheck("BARGUNA", "permanentDisctrict") ? "selected" : ''; ?>>BARGUNA</option>
									<option value="BARISAL" <?php echo OptionCheck("BARISAL", "permanentDisctrict") ? "selected" : ''; ?>>BARISAL</option>
									<option value="BHOLA" <?php echo OptionCheck("BHOLA", "permanentDisctrict") ? "selected" : ''; ?>>BHOLA</option>
									<option value="BOGRA" <?php echo OptionCheck("BOGRA", "permanentDisctrict") ? "selected" : ''; ?>>BOGRA</option>
									<option value="BRAHMANBARIA" <?php echo OptionCheck("BRAHMANBARIA", "permanentDisctrict") ? "selected" : ''; ?>>BRAHMANBARIA</option>
									<option value="CHANDPUR" <?php echo OptionCheck("CHANDPUR", "permanentDisctrict") ? "selected" : ''; ?>>CHANDPUR</option>
									<option value="CHAPAINAWABGANJ" <?php echo OptionCheck("CHAPAINAWABGANJ", "permanentDisctrict") ? "selected" : ''; ?>>CHAPAINAWABGANJ</option>
									<option value="CHITTAGONG" <?php echo OptionCheck("CHITTAGONG", "permanentDisctrict") ? "selected" : ''; ?>>CHITTAGONG</option>
									<option value="CHUADANGA" <?php echo OptionCheck("CHUADANGA", "permanentDisctrict") ? "selected" : ''; ?>>CHUADANGA</option>
									<option value="COMILLA" <?php echo OptionCheck("COMILLA", "permanentDisctrict") ? "selected" : ''; ?>>COMILLA</option>
									<option value="COX'S BAZAR" <?php echo OptionCheck("COX'S BAZAR", "permanentDisctrict") ? "selected" : ''; ?>>COX'S BAZAR</option>
									<option value="DHAKA" <?php echo OptionCheck("DHAKA", "permanentDisctrict") ? "selected" : ''; ?>>DHAKA</option>
									<option value="DINAJPUR" <?php echo OptionCheck("DINAJPUR", "permanentDisctrict") ? "selected" : ''; ?>>DINAJPUR</option>
									<option value="FARIDPUR" <?php echo OptionCheck("FARIDPUR", "permanentDisctrict") ? "selected" : ''; ?>>FARIDPUR</option>
									<option value="FENI" <?php echo OptionCheck("FENI", "permanentDisctrict") ? "selected" : ''; ?>>FENI</option>
									<option value="GAIBANDHA" <?php echo OptionCheck("GAIBANDHA", "permanentDisctrict") ? "selected" : ''; ?>>GAIBANDHA</option>
									<option value="GAZIPUR" <?php echo OptionCheck("GAZIPUR", "permanentDisctrict") ? "selected" : ''; ?>>GAZIPUR</option>
									<option value="GOPALGANJ" <?php echo OptionCheck("GOPALGANJ", "permanentDisctrict") ? "selected" : ''; ?>>GOPALGANJ</option>
									<option value="HABIGANJ" <?php echo OptionCheck("HABIGANJ", "permanentDisctrict") ? "selected" : ''; ?>>HABIGANJ</option>
									<option value="JAMALPUR" <?php echo OptionCheck("JAMALPUR", "permanentDisctrict") ? "selected" : ''; ?>>JAMALPUR</option>
									<option value="JESSORE" <?php echo OptionCheck("JESSORE", "permanentDisctrict") ? "selected" : ''; ?>>JESSORE</option>

			            		</select>
				            </div>
			            </div>

			            <div class="form-group row">
			            	<label class="col-form-label col-6 col-md-4" for="permanentPoliceStation">Police Station:<span class="important">*</span></label>
			            	<div class="col-12 col-md-8">   
			            		<input type="text" class="form-control" id="permanentPoliceStation" placeholder="" value="<?php echo isset($_SESSION['permanentPoliceStation']) ? $_SESSION['permanentPoliceStation'] : ''; ?>" name="permanentPoliceStation" required>	
				            </div>
			            </div>

			            <div class="form-group row">
			            	<label class="col-form-label col-6 col-md-4" for="permanentPostOffice">Post Office:<span class="important">*</span></label>
			            	<div class="col-12 col-md-8">   
			            		<input type="text" class="form-control" id="permanentPostOffice" placeholder="" value="<?php echo isset($_SESSION['permanentPostOffice']) ? $_SESSION['permanentPostOffice'] : ''; ?>" name="permanentPostOffice" required>	
				            </div>
			            </div>

			            <div class="error">
							 <?php

								 if (!empty($_SESSION['error'])) 
								 {
								 	echo "<p><span id=\"error\">$_SESSION[error]</span></p>";
								 }

							 ?>
						</div>

						<input type="submit" class="btn btn-default" name="sub_form1" value="Save & Next">




	        		</div>
	        	</div>
        	</form>       	
        </div>

    </div>
</div>

</body>
</html>