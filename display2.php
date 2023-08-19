<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>ATTENDANCE TABLE</title>
  </head>
<body>  




<div class="container my-5">
    <form  action="display2.php" method="POST"> 
    <h2>STUDENTS PRESENT ON SELECTED DATE</h2>      
    <table class="table table-bordered">
    <thead>
      <tr>
        <th>NAME</th>
        <th>SID</th>

       
       
        
       
      </tr>
    </thead>
    <tbody>
      <?php
        include "connection.php";
        
        
if (isset($_POST["add_date"])) {
  
    $attend_date = date('Y-m-d', strtotime($_POST['date1']));


}
      
        $sql = "SELECT Name,attend_sid FROM record1 WHERE Date='$attend_date' ";
        
        $result = $conn->query($sql);
        if(!$result){
          die("Invalid query!");
        }
        while($row=$result->fetch_assoc()){            
          echo "
          <tr>
          <td>$row[Name]</td>
          <td>$row[attend_sid]</td>
        
         
          </tr>
          </div>
          
          " ;
           }  

      ?>  
     
          
     
  
  
  
    </tbody>
    </table>
   
    </div>
    </form>
    
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   
   


    
 

    
   </body>
 </html>

    
 

    
  