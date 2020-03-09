<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "chart-pie";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "Select * FROM fyp";

$result = $conn->query($sql);

if($result->num_rows > 0){
    
    //fetching records
    $final_array = array ();
    while($row = $result->fetch_assoc()){
        $arr = array(
            'total_month' => $row ['Month'],
            'total_stud' => $row ['Student'],
        );
        $final_array [] = $arr;
    }
    //converting data into json format
    return json_encode ($final_array);
}else{
    return "FAILURE";
}

$conn->close();
?>
