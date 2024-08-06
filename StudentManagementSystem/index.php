<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
<center><fieldset style='width:300px;background-color:pink'><h2> ADMINISTRATOR LOGIN FORM</h2>
    <form action="" method="post">
       Username<br> <input type="text" name="username" placeholder="Your Username"
       value="<?php    if(isset($_COOKIE['username'])){

echo $_COOKIE['username'];


       } ?>"
       
       
       ><br>
       Password<br><input type="password" name="password1" placeholder="Your Password"
       
       value="<?php    if(isset($_COOKIE['password'])){

echo $_COOKIE['password'];


       } ?>"
       
       ><br>
        <br>
        <input type="submit" name="submit" value="Login" style="cursor:pointer;">
    </form></fieldset>
    <?php
    include("connect.php");
    if($_SERVER['REQUEST_METHOD']=='POST'){


     $username=$_POST['username'];
     $password=$_POST['password1'];
     $select=mysqli_query($conn,"SELECT * FROM account where username='$username' AND password1='$password'");
     if(mysqli_num_rows($select))
     {

        $_COOKIE['username']=$username;
        setcookie('username',$username,time() +1800);
        $_COOKIE['password']=$password;
        setcookie('password',$password,time() +1800);
        echo"<script> alert('Welcome $username');window.location='student.php';</script>";
     }
     else{

        echo"<script> alert('Wrong Password or Username');window.location='index.php';</script>";
     }

    }
    
    
    
    ?>

    
</body>
</html>