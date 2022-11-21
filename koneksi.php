<?php
$conn=mysqli_connect('localhost','root','','db_latihanphp');
if(mysqli_connect_error()){
    printf("connect failed" , mysqli_connect_error());
    exit();
}
?>