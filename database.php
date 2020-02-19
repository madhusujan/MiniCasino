<?php

session_start();

if($_SESSION["seconddoor_value"] == $_SESSION["winning_door"]){
    $result = "Won";
}
else{
    $result = "Loss";
}
$switch = $_SESSION["switch_value"];

//connect to database
$con = mysqli_connect("localhost","webuser","d0nkey5","cs3552019");

//check to see if user can connect to database if not then send error message
if($con->connect_error)
{
    die("No Connection" . $con->connect_error);
}

//insert values into table
$sql = "INSERT INTO madhudeal(switch, result)
VALUES ('$switch','$result')";

//output if connection is successful or not
if($con->query($sql) === TRUE)
{
    header("Location:submitted.php");
    exit;
}
else 
{
    echo "Something went wrong!" . $sql . "<br>" . $con->error;
}

// echo "<br> <br>";
// echo "<a href=\"index.html\"><input type=\"button\" value=\"Record another response\"> </a>";
?>

