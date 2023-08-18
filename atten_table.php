<?php 

require_once('connect_table.php');
$query = "SELECT * from registration";
$result = mysqli_query($conn,$query); 
?>
  
<!Doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Atten_table</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  </head>
  <body>
   <div class="container">
    <button class="btn btn-primary my-5"><a href="add_student.html" class="text-light">Add New Student</a></button>
</div>
<div class="card-body">
<table class="table table-bordered text-center">
    <tr class="bg-dark text-white">
       <td>S.No.</td>
      <td> Name </td>
      <td> SID </td>
    </tr>
    <tr>
    <?php

      while($row = mysqli_fetch_assoc($result))
       {

    ?>
     <?php echo $row['Name']; ?></td>

    </tr>
    <?php
      }  


    ?>


  </table>
 
 
  
  </body>