<?php


$stu_id = $_GET['id'];

$conn  = mysqli_connect("localhost", "root", "", "crud");

$sql = "delete from information where sid={$stu_id}";

$result = mysqli_query($conn, $sql) or die("Error in deleting");

header("Location: http://localhost/curd/index.php");

mysqli_close($conn);
