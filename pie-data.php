<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "chart-pie";
$year = $_POST['year'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "Select * FROM stats WHERE year = '$year'";

$result = $conn->query($sql);

if($result->num_rows > 0){
    
    //fetching records
    $final_array = array ();
    while($row = $result->fetch_assoc()){
        $arr = array(
            'branch_name' => $row ['branch_name'],
            'total_number' => $row ['total_number'],
        );
        $final_array [] = $arr;
    }
    //converting data into json format
    echo json_encode ($final_array);
}else{
    echo "FAILURE";
}

$conn->close();
?>
