<?php
include("connect.php");

$sid = $_GET['sid'];

// Validate and sanitize $sid
$sid = mysqli_real_escape_string($conn, $sid);

// Fetch student data
$query = mysqli_query($conn, "SELECT * FROM student WHERE sid='$sid'");

if (mysqli_num_rows($query) > 0) {
    $row = mysqli_fetch_array($query);
?>
<html>
<head>
<title>Update</title>
<style>
        a:hover
        {
            background-color:chocolate;
        }
    </style>
    </head>
<center><fieldset style='width:400px;background-color:pink'><h2>UPDATE STUDENT</h2>

<form action="" method="post">
    First name<br><input type="text" name="fname" value="<?php echo htmlspecialchars($row['fname']); ?>"><br>
    Last name<br><input type="text" name="lname" value="<?php echo htmlspecialchars($row['lname']); ?>"><br>
    Gender<br> <input type="text" name="gender" value="<?php echo htmlspecialchars($row['gender']); ?>"><br>
    Date of Birth<br><input type="date" name="dateOfBirth" value="<?php echo htmlspecialchars($row['dateOfBirth']); ?>"><br>
    Email<br><input type="email" name="email" value="<?php echo htmlspecialchars($row['email']); ?>"><br>
    Phone number<br><input type="text" name="phone" value="<?php echo htmlspecialchars($row['phone']); ?>"><br>
    Address<br><input type="text" name="address" value="<?php echo htmlspecialchars($row['address']); ?>"><br><br>
    <input type="submit" name="submit" value="Update">
</form></fieldset>

<?php
    if (isset($_POST['submit'])) {
        // Validate and sanitize input data
        $fname = mysqli_real_escape_string( $conn,$_POST['fname']);
        $lname = mysqli_real_escape_string($conn,$_POST['lname']);
        $gender = mysqli_real_escape_string($conn,$_POST['gender']);
        $dateOfBirth = mysqli_real_escape_string($conn,$_POST['dateOfBirth']);
        $email = mysqli_real_escape_string( $conn,$_POST['email']);
        $phone = mysqli_real_escape_string( $conn,$_POST['phone']);
        $address = mysqli_real_escape_string($conn,$_POST['address']);

        // Update student information
        $updateQuery = "UPDATE student SET fname='$fname', lname='$lname', dateOfBirth='$dateOfBirth',
                        gender='$gender', email='$email', phone='$phone', address='$address' WHERE sid='$sid'";

        if (mysqli_query($conn, $updateQuery)) {
            echo "<script>alert('Updated successfully');window.location='Report.php';</script>";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
} else {
    echo "ID Not Found.";
}
?>
