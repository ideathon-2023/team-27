<?php

$conn = mysqli_connect("localhost","root","","crud");

if(isset($_POST['submit']))
{
    $name1= $_POST['Name'];
    $att_sid=$_POST['SID'];

    foreach($name1 as $item)
    foreach($att_sid as $item2)

    {
        
        $query = "INSERT INTO record1(Name,attend_sid) VALUES ('$item','$item2')";
        $query_run = mysqli_query($conn, $query);
    }

    if($query_run)
    {
     
        header("Location: index.php");
    }
    else
    {
       
        header("Location: index.php");     
    }
}
?>

