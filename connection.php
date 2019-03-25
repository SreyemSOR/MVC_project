<?php
session_start();
$server = 'localhost';
$user ="root";
$pwd ="";
$db ="pnc_pracitice_database";

$conn = mysqli_connect($server,$user,$pwd,$db);

//Test connection connect or not
// if(mysqli_connect_errno()!=0){
//     die("error".mysqli_connect_error()) ;
// }else{
//     echo "Connected successfully database";
// }