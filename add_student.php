<?php
include 'connect_table.php';
if(isset($_POST['details'])){
  $name=$_POST['Name'];
  $SID=$_POST['SID'];

  $sql="insert into 'registration' (Name,SID) values('$name','$SID')";
  $result=mysqli_query($con,$sql);
  if($result){
    echo "Data inserted successfully";
  }else{
    die(mysqli_error($con));
  }
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>ADD-STUDENT PAGE</title>
    <link rel="stylesheet" type="text/css" href="bootstrap.css" />
  </head>
  <body>
    <div class="container">
      <div class="row col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
          <div class="panel-heading text-center">
            <h1>STUDENT DETAILS</h1>
          </div>
          <div class="panel-body">
            <form action="#" method="post">
              <div class="form-group">
                <label for="Name">Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="Name"
                  name="Name"
                />
              </div>
              <div class="form-group">
                <label for="SID">SID</label>
                <input
                  type="number"
                  class="form-control"
                  id="SID"
                  name="SID"
                />
              </div>
              <button name="details" type="submit" class="btn btn-primary" value="Add Details">Add Details</button>
            </form>
          </div>
          <div class="panel-footer text-right">
            <small>&copy; pec_chandigarh</small>
          </div>
        </div>
      </div>
    </div>
    
  
  
  </body>
</html>