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

<div class="wrapper text-center">
  <div class="container">
      <div class="panel panel-default">
          <div class="panel-body">
            <hr>
            <h2 class="heading">Character Frequency Counter</h2>
            <hr>
            <form action="show_data.php" method="post">

              <div class="form-group">
                <p class="sub-heading">Insert your string into the following text area to get the count per character</p>
                <textarea class="form-control" id="text-area" rows="3" name="text-area"></textarea>
              </div>

              <input type="submit" class="btn btn-primary" name="count" value="Count">
              <input type="reset" class="btn btn-secondary btn-custom" name="count" value="Clear">

            </form>     
          </div>

      </div>
  </div>
</div>

</body>
</html>