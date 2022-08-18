<?php
require_once "../config/connect.php";

session_start();

if(isset($_GET)& !empty($_GET)){
    $id=$_GET['id'];
    $sql="DELETE FROM kategori WHERE id='$id'";
    if(mysqli_query($connection,$sql)){
        header('location:Kategorite.php');
    }
}else{
    header('location: Kategorite.php');
}
?>