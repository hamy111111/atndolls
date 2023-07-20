<?php
$hostname ='localhost';
$username = 'root';
$password ='';
$database ='ATN_Doll';
$conn = mysqli_connect($hostname,$username,$password,$database);
if (!$conn){
    die('Ket noi khong thanh cong'.mysqli_connect_error());
}
// echo 'Ket noi thanh cong';