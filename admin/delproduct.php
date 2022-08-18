<?php
session_start();
require_once '../config/connect.php';
if (isset($_GET['id'])& !empty($_GET['id'])){
    $id=$_GET['id'];
    $sql="SELECT foto FROM produkte WHERE id=$id";
    $res=mysqli_query($connection,$sql);
    $r= mysqli_fetch_assoc($res);
    if(!empty($r['foto'])){
        if(unlink($r['foto'])){
            $delsql="UPDATE produkte SET foto='' WHERE id=$id";
            if(mysqli_query($connection,$delsql)){
                header("location:editproduct.php?id={$id}");
            }
        }
    }else{
        $delsql="DELETE FROM produkte WHERE id=$id";
        if(mysqli_query($connection,$delsql)){
            header("location:produkte.php");
        }
    }
 
}else{
    header('location:produkte.php');
}