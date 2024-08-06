<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student</title>
    <style>
        a {
    text-decoration: none;
}
        a:hover
        {
            background-color:chocolate;
        }
 


    </style>
</head>
<body>
 
    
<center>
<a href="Report.php" >Report</a>&nbsp;&nbsp;&nbsp;    
    <a href="logout.php">Logout</a><fieldset style='width:400px;background-color:pink'>
    <h1>STUDENT REGISTRATION FORM</H1><BR>
    <form action=""method="post">

    First name<br><input type="text" name="fname" placeholder="Your First_name"required><br>
    Last name<br><input type="text" name="lname" placeholder="Your Last_name"required><br>
    Date of birth<br><input type="date" name="dateOfBirth"required><br>
    Gender<input type="radio" name="gender" value="Male">M
    <input type="radio" name="gender" value="Female">F
    <br>
    Email<br><input type="email" name="email" placeholder="@gmail.com"required><br>
    Phone number<br><input type="text" name="phone" placeholder="+250"required><br>
    Address<br><input type="text" name="address" placeholder="Your Address"required><br><br>
    <input type="submit" name="submit" value="Register">
    <input type="reset" name="reset" value="Clear">
    </form> </fieldset>
    <?php 
    include('connect.php');
    if($_SERVER['REQUEST_METHOD']=='POST'){

        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $dofb=$_POST['dateOfBirth'];
        $gender=$_POST['gender'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $address=$_POST['address'];
        if(mysqli_query($conn,"INSERT INTO student (fname,lname,dateOfBirth,gender,email,phone,address) 
        values(
        '$fname','$lname',
        '$dofb','$gender',
        '$email','$phone','$address')")){

            echo"<script> alert('$fname  $lname Registered Successfully');window.location='student.php';</script>";
        }
        else{
            echo"<script> alert('Failed  to register ');</script>";

        }
    }
    
    ?>
    </center>
    
</body>
</html>