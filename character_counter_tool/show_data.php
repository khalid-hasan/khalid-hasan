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

            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Character</th>
                  <th scope="col">Count</th>
                </tr>
              </thead>
              <tbody>
            
                <?php

                  $charFrequency= count_chars($_POST['text-area'],1);

                  foreach($charFrequency as $key=>$value)
                  {
                    echo "<tr>";
                    echo "<td>".chr($key)."</td>" ;
                    echo "<td>".$value."</td>";
                    echo "</tr>";
                  }

                ?>
              </tbody>
             </table>   

             <a class="btn btn-primary" href="index.php" type="button">Input Another String</a>

            <hr>
            <h2 class="heading">Word Count</h2>
            <hr>

            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Word</th>
                  <th scope="col">Count</th>
                </tr>
              </thead>
              <tbody>
            
                <?php

                  $wordCount= str_word_count($_POST['text-area'], 1);

                  foreach($wordCount as $key=>$value)
                  {
                    $wordFrequency= substr_count($_POST['text-area'], $value);
                    echo "<tr>";
                    echo "<td>".$value."</td>" ;
                    echo "<td>".$wordFrequency."</td>";
                    echo "</tr>";
                  }

                ?>
              </tbody>
             </table>  

             <a class="btn btn-primary" href="index.php" type="button">Input Another String</a>

          </div>

      </div>
  </div>
</div>

</body>
</html>