<?php
 
 $hostname = 'localhost';
 $username = 'root';
 $password = '';
 $dbname = 'mydb';

 $con=mysqli_connect($hostname,$$username,$password,$dbname);

 @$a=$_POST['txt1'];
 @$b=$_POST['txt2'];
 @$c=$_POST['txt3'];
 @$d=$_POST['txt4'];

 if(@$_POST['inser'])
 {
    $sql="insert into employee_info values ('$a','$b','$c','$d')";

    mysqli_query($con,$sql);
    echo "Record is added in database successfully";
 }

 if(@$_POST['sel;'])
 {
    $selectquery="select * from employee_info";
    $result = mysqli_select_query($con,$selectquery);

    echo "<table border='2'>
    <tr>
    <th colspan=4>Employee Information</th></tr>
    <tr>
    <th>Name</th>
    <th>Designation</th>
    <th>Salary</th>
    <th>Qualification</th>
    </tr>";
    while($row=mysqli_fetch_assoc($result))
    {
        echo"<tr>";
        echo"<th>".$row['name']."</th>";
        echo"<th>".$row['designation']."</th>";
        echo"<th>".$row['sal']."</th>";
        echo"<th>".$row['qualification']."</th>";
        echo"</tr>";
    }
 }
 echo"</table>"?>

<html>
   

