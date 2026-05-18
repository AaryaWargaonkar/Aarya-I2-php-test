<?php
$servername="localhost";
$username="root";
$password="aArya1003#mysql";
$db_name="php";
$port=3307;
$conn=new mysqli($servername,$username,$password,$db_name,$port);
if(!$conn){
    echo ("Not connected");
}
?>