<?php

 $stu_name = $_POST['sname'];
 $stu_address = $_POST['saddress'];
 $stu_class = $_POST['class'];
 $stu_phone = $_POST['sphone'];


$conn = mysqli_connect("localhost", "root", "", "crud") or die("Connection failed: ");

                 $sql = "INSERT INTO information (sname, saddress, sclass, sphone) VALUES ('$stu_name', '$stu_address', '$stu_class', '$stu_phone')";

                $result =  mysqli_query($conn, $sql) or die("Query failed:");

header("location: http://localhost/curd/index.php");

mysqli_close($conn);




?>