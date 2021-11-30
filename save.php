<?php
include 'database.php';

//take variable from post and store them
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$phoneNumber = $_POST['phoneNumber'];
$groupName = $_POST['groupName'];

$query = "INSERT INTO `persons` ( `firstname` , `lastname` , `numbers` , `groupname` ) VALUES ( '$firstName', '$lastName', '$phoneNumber','$groupName')";

$query_persons = mysqli_query($connection, $query);
if (!$query_persons) {
    echo 'Error to insert data into database ' . mysqli_error($connection);
}elseif ($query_persons){
    header("Location: index.php");
}


