

<?php

        define('DB_HOST','localhost');
        define('DB_USER','root');
        define('DB_NAME','mydb');
        define('DB_PASSWORD','');

        $link = mysqli_connect('localhost','root','');

        $cn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD);
        {
            die("Failed to connect database".mysqli_error($link));
        }
        

        $db = mysqli_select_db('mydb',$cn); 
        {
            die("Failed to cennect to MySQL".mysqli_error($link));
        }
        

        if(!$db)
        {
            die("Could not connect to Database".mysqli_error($link));
        }
        else
        {
            echo "Connected Successfully";
            $sql = "CREATE TABLE MyGuests (
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                firstname VARCHAR(30) NOT NULL,
                lastname VARCHAR(30) NOT NULL,
                email VARCHAR(50),
                reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
                )";
        }
        if(!$query)
        {
            die("Could not create table".mysqli_error($link));
        }
        echo "Table created successfully";
        mysqli_close($cn);
?>