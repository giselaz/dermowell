<?php
session_start();
$qty=$_POST['quantity'];
if(isset($_POST['update'])){
    foreach($_SESSION['cart'] as $key=>$value){
        if($value['item_name']==$_POST['item_name']){
            $_SESSION['cart'][$key]['quantity']=$qty;
            echo "<script>
            alert('Sasia u ndryshua');
            window.location.href='Shporta.php';
            </script>
            ";
        }
    }
}
