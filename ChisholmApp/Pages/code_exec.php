<?php
session_start();
include('connection.php');
$StudentID=$_POST['StudentID'];
$fname=$_POST['FirstName'];
$lname=$_POST['Lastname'];
$mname=$_POST['MiddleName'];
$address=$_POST['EmailAdd'];
$contact=$_POST['PhoneNumber'];
$dob=$_POST['DOB'];
$password=$_POST['password'];
mysql_query("INSERT INTO member(StudentID, FirstName, LastName, MiddleName, EmailAdd, PhoneNumber, DOB, password)VALUES('$StudentID', '$fname', '$lname', '$mname', '$address', '$contact', '$pic', '$dob', '$password')");
header("location: index.php?remarks=success");
mysql_close($con);
?>