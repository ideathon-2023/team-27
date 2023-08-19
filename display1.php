<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "crud";


$conn = mysqli_connect($host, $username, $password, $database);


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}





if (isset($_POST['submit'])) {
    
    $atten_date = date('Y-m-d', strtotime($_POST['date']));


    $selectedRows = $_POST['Present'];

    foreach ($selectedRows as $rowId) {
        
        $sql = "SELECT Name,SID FROM crud2 WHERE id = '$rowId'";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            $row = mysqli_fetch_assoc($result);

            
            $insertSql = "INSERT INTO record1(Name,attend_sid,Date) VALUES ('$row[Name]', '$row[SID]','$atten_date')";
            if (mysqli_query($conn, $insertSql)) {
               
               header('location:index.php');
            } else {
                echo "Error uploading data from row $rowId: " . mysqli_error($conn) . "<br>";
            }
        } else {
            echo "Error fetching data from row $rowId: " . mysqli_error($conn) . "<br>";
        }
    }
}


mysqli_close($conn);
?>
