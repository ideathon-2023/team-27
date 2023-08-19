<!doctype html>
<html lang="en">
  <head>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>ATTENDANCE TABLE</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">ATTENDANCE TABLE</a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="landing_page.html">Home</a>
            </li>
            <li class="nav-item">
              <a type="button" class="btn btn-primary nav-link active" href="create.php">Add New</a>
            <li class="nav-item">
              <a type="button" class="nav-link" href="display.php">View Attendance</a>  
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div >
      <label for="" class="my-2">Date</label>
        <input type="date" name="date" >
    </div>
    <div class="container my-5">
    <form  action="connection2.php" method="POST">   
    <table class="table table-bordered">
    <thead>
      <tr>
        <th>NAME</th>
        <th>SID</th>
        <th>Actions</th>
        
       
      </tr>
    </thead>
    <tbody>
      <?php
        include "connection.php";
        $sql = "select * from crud2";
        $result = $conn->query($sql);
        if(!$result){
          die("Invalid query!");
        }
        while($row=$result->fetch_assoc()){
          echo "
          <tr>
          <td><input class='form-check-input' type='checkbox' name='Name[]' value='$row[Name]' >$row[Name]</td>
          <td><input class='form-check-input' type='checkbox' name='SID[]' value='$row[SID]' >$row[SID]</td>
          <td>Present</td>
          
          
          </tr>
          </div>
          
          " ;
           }  

      ?>  
     
          
     
  
  
  
    </tbody>
    </table>
    <div class="text-center">
      <input type="submit" name="submit" class="btn btn-success" value="Upload">
          </div>
    </div>
    </form>
    
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   


    
 

    
  </body>
</html>
