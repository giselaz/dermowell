<?php
session_start();
if(isset($_POST['empty'])){
    unset($_SESSION['cart']);
    echo "<script>
    alert('Shporta eshte bosh');
    window.location.href='Shporta.php';
    </script>
    ";
}
?>