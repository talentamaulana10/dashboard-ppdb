<?php

$conn = mysqli_connect('localhost','kevin','123','dashboard');
$sql = mysqli_query($conn,"SELECT * FROM log_users ORDER BY id DESC LIMIT 1");

$print_data = mysqli_fetch_row($sql);

echo $print_data[0];

echo "\n";
echo $print_data[1];

if($print_data[1] == "") {
    header("location:register.php");
}
else{
    
}


?>