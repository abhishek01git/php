<?php
include "connection.php";
$id=$_GET['id'];
$query=mysqli_query($conn,"DELETE FROM `form_register` WHERE reg_id='$id'");
if ($query) {
    echo '<script>alert("delete successfully");" </script>';
   header("location:Read.php");
}

?>