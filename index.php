<!DOCTYPE html>
<html lang="en">
  
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- EXTERNAL BOOTSTRAP CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        
    <title>Bad Words Inputs</title>
  </head>
  
  <body>
    
    <div class="container my-5">
      <h1 class="text-center mb-5 text-danger">Input sentence and word to censor</h1>
      <div class="row">
        <div class="col-6 mx-auto">
          <form action="myscript.php" method="get">
            <div class="mb-3">
              <label for="sentence" class="form-label">Insert sentence</label>
              <input type="text" name="sentence" id="sentence" class="form-control" placeholder="Insert sentence here...">
            </div>
            <div class="mb-3">
              <label for="bad_word" class="form-label">Insert word to censor</label>
              <input type="text" name="bad_word" id="bad_word" class="form-control" placeholder="Insert word to censor here...">
            </div>
            <div class="mb-3">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    
  </body>
  
</html>
