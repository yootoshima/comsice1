<?php
    include "config.inc.php";
    $name=$_POST["name"];
    $surname=$_POST["surname"];
    $username=$_POST["username"];
    $password=$_POST["password"];
    $type_member=$_POST["type_member"];
    $address=$_POST["address"];
    $sql="insert into tb_member (name,surname,username,password,type_member,address) values('$name','$surname','$username','$password','$type_member','$address')";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "<center><h3>บันทึกข้อมูลเรียบร้อย</h3></center>";
        echo "<meta http-equiv='refresh' content='2;url=register.php'>";
    }else{
        echo "<center><h3><font color='red'>ไม่สามารถบันทึกข้อมูลได้</font></h3></center>";
        echo "<meta http-equiv='refresh' content='2;url=register.php'>";
    }
    mysqli_close($conn);
?>