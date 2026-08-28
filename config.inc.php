<?php
$user="root";//user เข้าดาต้าเบส
$pass=""; //pass  เข้าดาต้าเบส
$db="data_test";    //ชื่อฐานข้อมูล เบส
$conn=mysqli_connect("localhost",$user,$pass,$db); // เชื่อมต่อ server
if(!$conn){ //กรณีเชื่อต่อไม่ได้
    die("Connection failed".mysqli_connect_error());
}
mysqli_set_charset($conn, "utf8");
?>