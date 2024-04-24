<?php
include "connection.php";
$id=$_GET['id'];
$query=mysqli_query($conn,"SELECT * FROM form_register WHERE reg_id='$id'");
$data=mysqli_fetch_assoc($query);
if (isset($_POST['submit'])) {
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $sql=mysqli_query($conn,"UPDATE form_register SET name='$name',phone='$phone',email='$email' WHERE reg_id=$id");
    if ($sql) {
        ?>
        <div class="alert alert-primary" role="alert">
            update syuccessfully
        </div>
        <?php
        header("location:Read.php");
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
            <div class="col-2"></div>
            <div class="col-4 bg-light p-3 mt-5">
                <form method='POST'>
                    <input type="text" value="<?php echo $data['name'] ?>" name=" name" class='form-controller mt-5'><br>
                    <input type="text" value="<?php echo $data['phone'] ?>" name=" phone" class='form-controller mt-5'><br>
                    <input type="text" value="<?php echo $data['email'] ?>" name=" email" class='form-controller mt-5'><br>
                    <input type="submit" name='submit' class='btn btn-primary' value='update'>
                    
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>