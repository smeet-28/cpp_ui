<?php
    $conn = mysqli_connect("localhost", "root", "", "cpp");
    if($conn)
    {
        
    }
else
{
    echo "Error: ". mysqli_error($conn);
}
?>