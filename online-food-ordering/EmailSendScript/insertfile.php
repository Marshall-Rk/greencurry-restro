<?php include 'filesLogic.php';?>
<!DOCTYPE html>
<html lang="en">
  <head>
   
    <title>Files Upload and Download</title>
  </head>
  <body>
    <div class="container">
      <div class="row">

	  <form action="filesLogic.php" method="post" enctype="multipart/form-data">
<input type="file" name="file" />
<button type="submit" name="upload">upload</button>
</form>

      </div>
    </div>
  </body>
</html>