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

   
<div class="container">
    <div class="panel panel-default">
        <div class="panel-body">
          <form action="signup_handler.php" method="post">
            <div class="form-group">
                <div class="form-inline">
                    
                    <div class="form-group">
                      <label class="label-name" for="firstname">First Name</label>
                      <input type="text" class="form-control" id="email" placeholder="First Name" name="firstname">
                    </div>
                    
                    <div class="form-group">
                      <label class="label-name" for="lastname">Last Name:</label>
                      <input type="text" class="form-control" id="pwd" placeholder="Last Name" name="lastname">
                    </div>
                </div>
            </div>

            <div class="form-group">
              <label for="email">Choose Your Username</label>
              <input type="text" class="form-control" id="username" placeholder="@gmail.com" name="username">
            </div>

            <div class="form-group">
              <label for="confirm_email">Create A Password</label>
              <input type="password" class="form-control" id="pwd" placeholder="Min 6 Characters" name="pwd">
            </div>

            <div class="form-group">
              <label for="pwd">Confirm Your Password:</label>
              <input type="password" class="form-control" id="pwd" placeholder="" name="confirm-pwd">
            </div>

            <div class="form-group">  
                <label for="pwd">Birthday:</label>
                <div class="form-inline">
                    <div class="form-group">
                        <select class= "selectpicker" name="selectMonth">
                            <option value="none">Month</option>
                            <option value="January">January</option>
                            <option value="February">February</option>
                            <option value="March">March</option>
                            <option value="April">April</option>
                            <option value="May">May</option>
                            <option value="June">June</option>
                            <option value="July">July</option>
                            <option value="August">August</option>
                            <option value="September">September</option>
                            <option value="October">October</option>
                            <option value="November">November</option>
                            <option value="December">December</option>
                        </select>
                    </div>

                    <div class="form-group">
                      <label class="sr-only" for="day">Day</label>
                      <input type="text" class="form-control" id="day" placeholder="" name="selectDay">
                    </div>
                    
                    <div class="form-group">
                      <label class="sr-only" for="year">Last Name:</label>
                      <input type="text" class="form-control" id="year" placeholder="" name="selectYear">
                    </div>
                    
                </div>
            </div>
              
            <div class="form-group">
              <label for="gender">Gender:</label>
                <div class="form-group">
                    <select class= "selectpicker" name="gender">
                        <option value="none">Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
            </div>
   
            <div class="form-group">
              <label for="phone">Mobile Number</label>
              <input type="text" class="form-control" id="phone" placeholder="" name="phone">
            </div>

            <div class="form-group">
              <label for="email">Your Current Email Address</label>
              <input type="email" class="form-control" id="email" placeholder="" name="email">
            </div>
              
            <button type="submit" class="btn btn-default">Submit</button>
          </form>
        </div>
    </div>
</div>
</body>
</html>
