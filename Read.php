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
        <div class="col-3 "></div>
        <div class="col-1 mt-5 ">
            <table class="table table-dark table-striped">

            <tr>
                <th>name</th>
                <th>phone</th>
                <th>email</th>
                <th colspan="2">Action</th>
            </tr>

            <?php
            while($row=mysqli_fetch_assoc($query))
            {
              ?>  
            
           
            <tr>
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['phone'];?></td>
                <td><?php echo $row['email'];?></td>
                <td><a href="edit.php?id=<?php echo $row['reg_id'];?>" class="btn-btn-ssuccess">Edit</a></td>
                <td><a href="delete.php?id=<?php echo $row['reg_id'];?>" class="btn-btn-warning"> Delete</a></td>
               
            </tr>
            <?php
            }?>

            </table>

        </div>

    </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>