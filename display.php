<div class="text-center">
<table class="table table-bordered">
    <thead>
      <tr>
        <th>NAME</th>
        <th>SID</th>
        
       
      </tr>
</thead>
<tbody>




<?php
        include "connection2.php";
        $sql = "select * from record1";
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
          
          " ;
           }  

      ?>  
</tbody>
    </table>
        </div>
