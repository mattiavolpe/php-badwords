<?php
  $sentence = trim($_GET["sentence"]);
  $badWord = trim($_GET["bad_word"]);
  $censoredSentence = str_replace($badWord, "***", $sentence);
  $badWordPosition = strpos($sentence, $badWord);
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
    
    <div class="container text-center my-5">
      <h1 class="text-danger">Results</h1>

      <div class="mb-3">
        <h3>You have inserted the following paragraph:
          <?php if ($badWordPosition === false) {
            echo $sentence;
           } else {
            echo "<span>";
            echo substr($sentence, 0, strpos($sentence, $badWord));
            echo "</span>";
            echo "<span class='text-danger'>";
            echo $badWord;
            echo "</span>";
            echo "<span>";
            echo substr($sentence, strpos($sentence, $badWord) + strlen($badWord));
            echo "</span>";
           } ?>
        </h3>
        <h5>It's length is <?php echo strlen($sentence); ?></h5>
      </div>

      <div class="mb-3">
        <h3>The censored paragraph is: <?php echo $censoredSentence; ?></h3>
        <h5>It's length is <?php echo strlen($censoredSentence); ?></h5>
      </div>

      <a name="new_sentence" id="new_sentence" class="btn btn-primary" href="./index.php" role="button">New sentence</a>
    </div>
    
  </body>
  
</html>
