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
          <h2>Sign Up Form</h2>
          <h3>It's free and will always be</h3>
          <form action="signup_handler.php" method="post">
            <div class="form-group">
                <div class="form-inline">
                    <div class="form-group">
                      <label class="sr-only" for="firstname">First Name</label>
                      <input type="text" class="form-control" id="email" placeholder="First Name" name="firstname">
                    </div>
                    <div class="form-group">
                      <label class="sr-only" for="lastname">Last Name:</label>
                      <input type="text" class="form-control" id="pwd" placeholder="Last Name" name="lastname">
                    </div>
                </div>
            </div>

            <div class="form-group">
              <label class="sr-only" for="email">Your Email</label>
              <input type="email" class="form-control" id="email" placeholder="Your Email" name="email">
            </div>

            <div class="form-group">
              <label class="sr-only" for="confirm_email">Re-enter Email</label>
              <input type="email" class="form-control" id="email" placeholder="Re-enter Email" name="confirm_email">
            </div>

            <div class="form-group">
              <label class="sr-only" for="pwd">Password:</label>
              <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
            </div>

            <h3>Birthday:</h3>
            <div class="form-group">    
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
                        <select class= "selectpicker" name="selectDay">
                            <option value="none">Day</option>
                            <?php
                                for($i=0; $i<32; $i++)
                                {
                                    echo "<option value=\"$i\">$i</option>";
                                }
                            ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <select class= "selectpicker" name="selectYear">
                            <option value="none">Year</option>
                            <?php
                                for($i=1900; $i<2019; $i++)
                                {
                                    echo "<option value=\"$i\">$i</option>";
                                }
                            ?>
                        </select>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="radio-inline">
                  <input type="radio" name="gender">Male
                </label>
                <label class="radio-inline">
                  <input type="radio" name="gender">Female
                </label>
            </div>    


            <button type="submit" class="btn btn-default">Submit</button>
          </form>
        </div>
    </div>
</div>
</body>
</html>
