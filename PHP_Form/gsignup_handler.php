<!DOCTYPE html>
<html>
<head>
  <title>Signup</title>
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
    
  <link rel="stylesheet" href="public.css">
</head>
<body>
    
<?php

function data_sanitization($data)
{
	$data= trim($data);
	$data= stripcslashes($data);
	$data= htmlspecialchars($data);
	return $data;
}

$firstName=$lastName=$emailAddress=$confirmEmail=$password=$selectMonth=$selectDay=$selectYear=$gender="";
    
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    if(isset($_POST["firstname"]))
    {
        $firstName= data_sanitization($_POST["firstname"]);
    }
    if(isset($_POST["lastname"]))
    {
        $lastName= data_sanitization($_POST["lastname"]);
    }
    if(isset($_POST["email"]))
    {
        $emailAddress= data_sanitization($_POST["email"]);
    }
    if(isset($_POST["username"]))
    {
        $username= data_sanitization($_POST["username"]);
    }
    if(isset($_POST["pwd"]))
    {
        $password= data_sanitization($_POST["pwd"]);
    }
    if(isset($_POST["confirm-pwd"]))
    {
        $confirmPassword= data_sanitization($_POST["confirm-pwd"]);
    }
    if(isset($_POST["selectMonth"]))
    {
        $selectMonth= data_sanitization($_POST["selectMonth"]);
    }
    if(isset($_POST["selectDay"]))
    {
        $selectDay= data_sanitization($_POST["selectDay"]);
    }
    if(isset($_POST["selectYear"]))
    {
        $selectYear= data_sanitization($_POST["selectYear"]);
    }
    if(isset($_POST["gender"]))
    {
        $gender= data_sanitization($_POST["gender"]);
    }  
    if(isset($_POST["phone"]))
    {
        $phone= data_sanitization($_POST["phone"]);
    }
}


?>
   
<div class="container">
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="form-group">
                <label>First Name:</label> <?php echo $firstName; ?>
            </div>
            
            <div class="form-group">
                <label>Last Name:</label> <?php echo "$lastName"; ?>
            </div>
            
            <div class="form-group">
                <label>Username:</label> <?php echo "$username"; ?>
            </div>
            
            <div class="form-group">
                <label>Password:</label> <?php echo "$password"; ?>
            </div>
            
             <div class="form-group">
                <label>Confirmed Password:</label> <?php echo "$confirmPassword"; ?>
            </div>           
            
            <div class="form-group">
                <label>Birthday:</label> <?php echo "$selectDay, $selectMonth, $selectYear"; ?>
            </div>
            
            <div class="form-group">
                <label>Gender:</label> <?php echo "$gender"; ?>
            </div>
            
             <div class="form-group">
                <label>Mobile Number:</label> <?php echo "$phone"; ?>
            </div>
            
            <div class="form-group">
                <label>Email Address:</label> <?php echo "$email"; ?>
            </div>            
                    
        </div>
    </div>
</div>
</body>
</html>
