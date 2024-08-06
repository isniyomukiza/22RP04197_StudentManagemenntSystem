<?php
include('connect.php');


$id=$_GET['sid'];
$a=mysqli_query($conn,"DELETE FROM student where sid=$id");

if($a){

    header('location:Report.php');

}





?>