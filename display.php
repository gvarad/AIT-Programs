<?php
  $rollno=$_REQUEST['srollno'];
  $studentname=$_REQUEST['sname'];
  $hostname = 'localhost';
  $username = 'root';
  $password = '';
  $dbname = 'test';

  $conn = mysqli_connect($hostname,$username,$password,$dbname);
  $sql="insert into student (rollno,sname) values ('$rollno','$studentname')";
  mysqli_query($conn,$sql);
  
    if(!$sql)
    {
        echo "ERROR";
    }
    else
    {
        echo "Record is added in database successfully";
    }
  ?>