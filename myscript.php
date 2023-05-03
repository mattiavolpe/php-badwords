<?php
  $sentence = trim($_GET["sentence"]);
  $badWord = trim($_GET["bad_word"]);
  $censoredSentence = str_replace($badWord, "***", $sentence);
?>

<!DOCTYPE html>
<html lang="en">
  
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- EXTERNAL BOOTSTRAP CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <title>Bad Words Result</title>
  </head>
  
  <body>
    
    <div class="container">
      <h1 class="text-center">Results</h1>

      <div class="mb-3">
        <h3>You have inserted the following paragraph: <?php echo $sentence; ?></h3>
        <h5>It's length is <?php echo strlen($sentence); ?></h5>
      </div>

      <div>
        <h3>The censored paragraph is: <?php echo $censoredSentence; ?></h3>
        <h5>It's length is <?php echo strlen($censoredSentence); ?></h5>
      </div>
    </div>
    
  </body>
  
</html>