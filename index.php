<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Excitatron Path Picker</title>
</head>
<body class="mybody" style="background-image: url('images/excitatron.png');  background-size:cover; background-repeat: no-repeat; ">

    <?php
    if(isset($_POST['picker'])){
      $path = rand(1,2);
      $message;
      // echo $path;
      if ($path == 1) {
          $message = "Go left!";
      } else {
          $message = "Go right!";
      }
    }
    ?>

    <div class="container text-center">
        <div class="row">
          <div class="col"> </div>
          <div class="col" >
            <form  method="post" >
              <br><br>
              <input class="btn" type="submit" name="picker" value="Choose my path!">
              <br><br>
              <input class="form-control" type="text" name="txt" value=" <?php if(isset($message)){ echo $message;} ?>" disabled>
            </form>
          </div>
          <div class="col"></div>
    </div>
  </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>