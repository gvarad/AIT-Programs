<?php
    $link = mysqli_connect('localhost','root','');
    if(!$link)
    {
        die('Could not connect'.mysqli_error($link));
    }
    $sql='create database Sample';
    if(mysqli_query($link,$sql))
    {
        echo "Database is created successfully";
    }
    else
    {
        echo "Error creating database".mysqli_error($link);
    }
?>