
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report</title>
    <style>
        a:hover
        {
        background-color:chocolate;
        }
    </style>
</head>
<body><center>
<a href="student.php" style='text-decoration:none;'>Registration</a>&nbsp;&nbsp;
    <a href="logout.php" style='text-decoration:none;'>Logout</a>
    
<h1>STUDENT REPORT</H1></center><BR>
    <?php
    include('connect.php');
    
    echo"<table border='1' bgcolor='pink'><tr>
    <th>Student ID</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Date of birth</th>
    <th>Gender</th>
    <th>Email</th>
    <th>Phone number</th>
    <th>Address</th>
    <th>Date of Registration</th>
    <th>Updated On</th>
    <th colspan='2'>Action</th>
    
    ";
    $select="SELECT * FROM student";
    $query=mysqli_query($conn,$select);
    while($f=mysqli_fetch_array($query)){

   
        echo"<tr>";
        echo"<td>".$f['sid']."</td>";
        echo"<td>".$f['fname']."</td>";
        echo"<td>".$f['lname']."</td>";
        echo"<td>".$f['dateOfBirth']."</td>";
        echo"<td>".$f['gender']."</td>";
        echo"<td>".$f['email']."</td>";
        echo"<td>".$f['phone']."</td>";
        echo"<td>".$f['address']."</td>";
        echo"<td>".$f['created_at']."</td>";
        echo"<td>".$f['updated_at']."</td>";
        echo"<td> <a href='delete.php?sid=". $f['sid']."' style='text-decoration:none;'>Delete</a></td>";
        echo"<td> <a href='update.php?sid=". $f['sid']."' style='text-decoration:none;'>Update</a></td>";

        echo"</tr>";
        
        



    }
    echo"</table>";
    
    ?>
</body>
</html>