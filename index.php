<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>ATTENDANCE TABLE</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="padding-top:-5px;padding-bottom:0px;height:70px;"; >
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php" style="margin-top:-15px;">ATTENDANCE TABLE</a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav mr-auto" >
            <li class="nav-item" >
              <a type="button" class="btn btn-outline-light " style="margin-left:20px;margin-top:20px;" aria-current="page" href="landing_page.html">Home</a>
            </li>
            <li class="nav-item">
              <a type="button" class="btn btn-outline-light " style="margin-left:20px;margin-top:20px;" href="create.php">Add New</a>
            </li>
            <li class="nav-item">
            <input type="button" class="btn btn-outline-light " value="View Attendance" style="margin-left:20px; height:38px; width:150px; border-radius:5px;margin-top:20px;" onclick="document.querySelector('#overlay').setAttribute('style','  height: 100%; width: 100%;visibility=visible; display: flex;justify-content: center;align-items: center;')">
        <div id="overlay" style="visibility: hidden;">
        <form action="display2.php" method="POST">
            <input type="date" name="date1" id="Date">
            <button type="submit" value="Submit" name="add_date" style="height:35px; width:96px;position:center;" class="btn btn-primary">Submit</button>
</form>
        </div>
            </li>

          </ul>
        </div>
      </div>
    </nav>
   
    <div class="container my-5">
     
    <form  action="display1.php" method="POST">
    <div >
      <label for="" class="my-2">Date</label>
        <input type="date" name="date" >
    </div>   
    <table class="table table-bordered">
    <thead>
      <tr>
        <th>NAME</th>
        <th>SID</th>
        <th>Action</th>
        
       
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
          <td>$row[Name]</td>
          <td>$row[SID]</td>
          <td><input class='form-check-input' type='checkbox' name='Present[]' value='$row[id]'>Present</td>
          
          
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
