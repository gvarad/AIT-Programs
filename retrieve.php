<html>
    <body>
        <center><h1>Stduent's Information</h1></center>
        <table border=2 align=center width=50%>
            <tr><th>Roll No</th> <th>Student Name</th></tr>

       

        <?php
          $hostname = 'localhost';
          $username = 'root';
          $password = '';
          $dbname = 'test';

          $conn = mysqli_connect($hostname,$username,$password,$dbname);
          $sql="select * from student";
          $result = mysqli_query($conn,$sql);
          while($rows=mysqli_fetch_assoc($result))
          {
            echo "<tr> <th>".$rows['rollno']."</th> <th>".$rows['sname']."</th> </tr>";
          }
        ?>
         </table>
    </body>
</html>