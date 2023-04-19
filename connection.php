<?php  
    $servername = "localhost";  
    $username = "root";  
    $password = "";  
    $db_name = "test1";
    $con = mysqli_connect($servername, $username, $password, $db_name);
    if($con){
        echo "Database Connected successfully!</br>";
    } else{
        echo "Not Connected successfully!";
    }
?>   