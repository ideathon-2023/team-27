<?php
    include "connection.php";
    if(isset($_POST['details'])){
        $name = $_POST['name'];
        $SID = $_POST['sid'];
        
        $q = " INSERT INTO `crud2`(`name`, `sid`) VALUES ( '$name','$SID' )";

        $query = mysqli_query($conn,$q)or die('Query one is failed'.mysqli_error($conn));
       
       

    }
?>
<!DOCTYPE html>
<html>
<head>
 <title>ADD STUDENT</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="create.php">Add New Student</a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="login.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="create.php"><span style="font-size:larger;">Add New</span></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
 <div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-primary">
 <h1 class="text-white text-center">  Add New Student </h1>
 </div><br>

 <label> NAME: </label>
 <input type="text" name="name" class="form-control"> <br>

 <label> SID: </label>
 <input type="number" name="sid" class="form-control"> <br>

 <button class="btn btn-success" type="submit" name="details"><a href='index.php' class="text-white text-center"> Add Details </a></button><br>
 <a class="btn btn-info" type="submit" name="cancel" href="index.php"> Cancel </a><br>

 </div>
 </form>
 </div>
</body>
</html>
