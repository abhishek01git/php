<?php
include 'connection.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $sql=mysqli_query($conn,"INSERT INTO form_register(`name`,`phone`,`email`) VALUES ('$name','$phone','$email')");
    if ($sql) {
      echo '<script>alert("register successfully");window.location.href="create.php" </script>';
    }else{
        '<script>alert("error occured");</script>';
    }
}
?>




<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4  bg-dark p-3 rouned text-warning mt-5"  >
            <form method="POST">
                <h3 class="text-light">REGISTER</h3>
                <label for="">Enter your name</label>
                <input type="text" name="name" class="form-control">
                <label for="">Enter your phone</label>
                <input type="number" name="phone" class="form-control">
                <label for="">Enter your email</label>
                <input type="email" name="email" class="form-control">
 
                <input type="submit" name="submit" value="register" class="btn-btn-primary mt-3" style="margin-left: 150;" >

            </form>

        </div>

    </div>
  </div>



  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>