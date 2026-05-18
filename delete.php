<?php
include "db.php";
session_start();
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql=$conn->prepare("delete from book4 where id=?");
    $sql->bind_param('i',$id);
    if($sql->execute()){
    header("location:insert.php");

}        
}
?>