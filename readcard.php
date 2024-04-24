<?php
include "connection.php";
$query=mysqli_query($conn,"SELECT * FROM form_register");

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
   
       
       
  <?php
            while($row=mysqli_fetch_assoc($query))
            {
              ?>
              <div class="card  mt-5" style="width: 18rem; ">
               <div class="card-body">
               <h5 class="card-title">name</h5>
    <h5 class="card-title"><?php echo $row['name'];?></h5>
    <p class="card-text">phone</p>
    
    <p class="card-text"><?php echo $row['phone'];?></p>
    <p class="card-text">email</p>

    <p class="card-text"><?php echo $row['email'];?></p>
  </div>
  <div>
            <?php
            }?>
</div>


    </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>