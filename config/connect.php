<?php
$connection=mysqli_connect('localhost','root','','detyra');
if(!$connection){
    echo "Error nuk mund te lidheni me databazen.".PHP_EOL;
    echo "Debbuging errno.".mysqli_connect_errno().PHP_EOL;
    echo "Debbuging errno.".mysqli_connect_error().PHP_EOL;
    exit;
}
?>