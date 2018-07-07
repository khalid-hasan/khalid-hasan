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

if (isset($_POST['sub_form3'])) 
{
  $_SESSION['paymentType']= data_sanitization($_POST['paymentType']);
  $_SESSION['dateOfPayment']= data_sanitization($_POST['dateOfPayment']);
  $_SESSION['receiptNo']= data_sanitization($_POST['receiptNo']);
  $_SESSION['currencyType']= data_sanitization($_POST['currencyType']);
  $_SESSION['paymentAmount']= data_sanitization($_POST['paymentAmount']);
  $_SESSION['bankName']= data_sanitization($_POST['bankName']);
  $_SESSION['bankBranch']= data_sanitization($_POST['bankBranch']);



    if (!preg_match("/^[0-9]{1,20}$/", $_POST['receiptNo'])) 
    {
      $_SESSION['error_form3'] = "Numbers Only.";
      header("location: form_3.php");
    }  
    elseif (!preg_match("/^[0-9]{1,10}$/", $_POST['paymentAmount'])) 
    {
      $_SESSION['error_form3'] = "Numbers Only";
      header("location: form_3.php");
    }  
    else
    {
      foreach ($_POST as $key => $value) 
      {
        $_SESSION['post'][$key] = $value;
      }

      header("Location: form_4.php");
    }
}

?>

<!DOCTYPE html>
<html>
<head>

  <title>Form 3</title>

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
          <h2 class="heading">Passport Application- Stage 3</h2>
          <p class="application-id">Online Application ID: <?php echo $_SESSION['applicationID']; ?></p>          
          <p class="info">Fields marked with <span class="important">(*)</span> are mandatory.</p>
          <hr>
          <form action="" method="post">
            <div class="row">
              <div class="col-md-6 right-border-form">

                <div class="form-group">
                  <h2 class="title-padding-extra">Payment Information</h2>
                </div>

                <div class="form-group row">
                  <label class="col-form-label col-6 col-md-4" for="paymentType">Delivery Type:</label>
                  <div class="col-12 col-md-8">   
                      <label class="radio-inline">
                        <input type="radio" name="paymentType" value="Online"  <?php echo OptionCheck("Online", "paymentType") ? "checked" : ''; ?>>Online
                      </label>
                      <label class="radio-inline">
                        <input type="radio" name="paymentType" value="Non-Online"  <?php echo OptionCheck("Non-Online", "paymentType") ? "checked" : ''; ?>>Non-Online
                      </label>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-form-label col-6 col-md-4" for="dateOfPayment">Date Of Payment:<span class="important">*</span></label>
                  <div class="col-12 col-md-8">   
                    <input type="date" class="form-control" id="pwd" placeholder="" value="<?php echo isset($_SESSION['dateOfPayment']) ? $_SESSION['dateOfPayment'] : ''; ?>" name="dateOfPayment" required>

                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-form-label col-6 col-md-4" for="receiptNo">Receipt No:<span class="important">*</span></label>
                  <div class="col-12 col-md-8">   
                    <input type="text" class="form-control" id="receiptNo" placeholder="" name="receiptNo" value="<?php echo isset($_SESSION['receiptNo']) ? $_SESSION['receiptNo'] : ''; ?>"> 
                  </div>
                </div>

                <div class="form-group row">
                    <label class="col-form-label col-6 col-md-4" for="paymentAmount">Amount:<span class="important">*</span></label>
                    <div class="col-12 col-md-8">
                      <div class="form-group row"> 
                        <div class="col-xs-6">
                              <div class="form-group">
                                <label class="sr-only" for="currency">currency</label>
                                  <select class= "selectpicker" name="currencyType">

                                    <option value="">-SELECT-</option>
                                    <option value="BDT" <?php echo OptionCheck("BDT", "currencyType") ? "selected" : ''; ?>>BDT</option>
                                    <option value="EURO" <?php echo OptionCheck("EURO", "currencyType") ? "selected" : ''; ?>>EURO</option>
                                    <option value="YEN" <?php echo OptionCheck("YEN", "currencyType") ? "selected" : ''; ?>>YEN</option>
                                    <option value="USD" <?php echo OptionCheck("USD", "currencyType") ? "selected" : ''; ?>>USD</option>
                                    <option value="INR" <?php echo OptionCheck("INR", "currencyType") ? "selected" : ''; ?>>INR</option>
                                    <option value="POUND" <?php echo OptionCheck("POUND", "currencyType") ? "selected" : ''; ?>>POUND</option>

                                  </select>
                              </div>
                          </div>
                          <div class="col-xs-6">       
                              <div class="form-group">
                                <label class="sr-only" for="paymentAmount">paymentAmount:</label>
                                <input type="text" class="form-control" id="paymentAmount" placeholder="" name="paymentAmount" value="<?php echo isset($_SESSION['paymentAmount']) ? $_SESSION['paymentAmount'] : ''; ?>">
                              </div>
                          </div> 
                      </div>
                    </div>
                </div>

                <div class="form-group row">
                  <label class="col-form-label col-6 col-md-4" for="bankName">Name Of Bank:</label>
                  <div class="col-12 col-md-8">   
                    <select class= "selectpicker" name="bankName">

                      <option value="">-SELECT-</option>
                      <option value="JANATA BANK" <?php echo OptionCheck("JANATA BANK", "bankName") ? "selected" : ''; ?>>JANATA BANK</option>
                      <option value="PUBALI BANK" <?php echo OptionCheck("PUBALI BANK", "bankName") ? "selected" : ''; ?>>PUBALI BANK</option>
                      <option value="SONALI BANK" <?php echo OptionCheck("SONALI BANK", "bankName") ? "selected" : ''; ?>>SONALI BANK</option>
                      <option value="DUTCH BANGLA BANK" <?php echo OptionCheck("DUTCH BANGLA BANK", "bankName") ? "selected" : ''; ?>>DUTCH BANGLA BANK</option>
                      <option value="BRAC BANK" <?php echo OptionCheck("BRAC BANK", "bankName") ? "selected" : ''; ?>>BRAC BANK</option>
                      <option value="PREMIER BANK" <?php echo OptionCheck("PREMIER BANK", "bankName") ? "selected" : ''; ?>>PREMIER BANK</option>


                    </select>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-form-label col-6 col-md-4" for="bankBranch">Name Of Branch:</label>
                  <div class="col-12 col-md-8">   
                    <select class= "selectpicker" name="bankBranch">

                        <option value="">-SELECT-</option>
                        <option value="BAGERHAT" <?php echo OptionCheck("BAGERHAT", "bankBranch") ? "selected" : ''; ?>>BAGERHAT</option>
                        <option value="BANDARBAN" <?php echo OptionCheck("BANDARBAN", "bankBranch") ? "selected" : ''; ?>>BANDARBAN</option>
                        <option value="BARGUNA" <?php echo OptionCheck("BARGUNA", "bankBranch") ? "selected" : ''; ?>>BARGUNA</option>
                        <option value="BARISAL" <?php echo OptionCheck("BARISAL", "bankBranch") ? "selected" : ''; ?>>BARISAL</option>
                        <option value="BHOLA" <?php echo OptionCheck("BHOLA", "bankBranch") ? "selected" : ''; ?>>BHOLA</option>
                        <option value="BOGRA" <?php echo OptionCheck("BOGRA", "bankBranch") ? "selected" : ''; ?>>BOGRA</option>
                        <option value="BRAHMANBARIA" <?php echo OptionCheck("BRAHMANBARIA", "bankBranch") ? "selected" : ''; ?>>BRAHMANBARIA</option>
                        <option value="CHANDPUR" <?php echo OptionCheck("CHANDPUR", "bankBranch") ? "selected" : ''; ?>>CHANDPUR</option>
                        <option value="CHAPAINAWABGANJ" <?php echo OptionCheck("CHAPAINAWABGANJ", "bankBranch") ? "selected" : ''; ?>>CHAPAINAWABGANJ</option>
                        <option value="CHITTAGONG" <?php echo OptionCheck("CHITTAGONG", "bankBranch") ? "selected" : ''; ?>>CHITTAGONG</option>
                        <option value="CHUADANGA" <?php echo OptionCheck("CHUADANGA", "bankBranch") ? "selected" : ''; ?>>CHUADANGA</option>
                        <option value="COMILLA" <?php echo OptionCheck("COMILLA", "bankBranch") ? "selected" : ''; ?>>COMILLA</option>
                        <option value="COX'S BAZAR" <?php echo OptionCheck("COX'S BAZAR", "bankBranch") ? "selected" : ''; ?>>COX'S BAZAR</option>
                        <option value="DHAKA" <?php echo OptionCheck("DHAKA", "bankBranch") ? "selected" : ''; ?>>DHAKA</option>
                        <option value="DINAJPUR" <?php echo OptionCheck("DINAJPUR", "bankBranch") ? "selected" : ''; ?>>DINAJPUR</option>
                        <option value="FARIDPUR" <?php echo OptionCheck("FARIDPUR", "bankBranch") ? "selected" : ''; ?>>FARIDPUR</option>
                        <option value="FENI" <?php echo OptionCheck("FENI", "bankBranch") ? "selected" : ''; ?>>FENI</option>
                        <option value="GAIBANDHA" <?php echo OptionCheck("GAIBANDHA", "bankBranch") ? "selected" : ''; ?>>GAIBANDHA</option>
                        <option value="GAZIPUR" <?php echo OptionCheck("GAZIPUR", "bankBranch") ? "selected" : ''; ?>>GAZIPUR</option>
                        <option value="GOPALGANJ" <?php echo OptionCheck("GOPALGANJ", "bankBranch") ? "selected" : ''; ?>>GOPALGANJ</option>
                        <option value="HABIGANJ" <?php echo OptionCheck("HABIGANJ", "bankBranch") ? "selected" : ''; ?>>HABIGANJ</option>
                        <option value="JAMALPUR" <?php echo OptionCheck("JAMALPUR", "bankBranch") ? "selected" : ''; ?>>JAMALPUR</option>
                        <option value="JESSORE" <?php echo OptionCheck("JESSORE", "bankBranch") ? "selected" : ''; ?>>JESSORE</option>

                    </select>
                  </div>
                </div>
              </div>


              
              <div class="col-md-6 left-border-form">

                <div class="error">
                   <?php

                     if (!empty($_SESSION['error_form3'])) 
                     {
                      echo "<p><span id=\"error\">$_SESSION[error_form3]</span></p>";
                     }

                   ?>
                </div>

                <input type="submit" class="btn btn-default" name="sub_form3" value="Save & Next">
                <a class="btn btn-default btn-custom" href="form_2.php" role="button">Previous</a>


              </div>
            </div>
          </form>         
        </div>

    </div>
</div>

</body>
</html>