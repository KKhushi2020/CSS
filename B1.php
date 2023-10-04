<?php

    // Connecting to database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "a1";

    // Create a connection
    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
        die("Sorry, We are unable to connect at the moment!");
    } else {
        echo "Connection Successful";
    }

        $sql ="SELECT * FROM 'students' ";
        $result = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result);
         echo "<br/>";
         echo $num;

         while($row=mysqli_fetch_assoc($result)){
             echo"<br/>";
              echo"User details...";
                echo"<br/>";    
                echo"First Name : ". $row['StudentFirstName']."    Father Name : ".$row['Father Name']."   Mother Name : ".$row['Mother Name']."  Date Of Birth : ".$row['date Of Birth']."  Age : ".$row['Age']."  Phone Number: ".$row['Phone Number']."    Email : ".$row['email']."  Address : ".$row['Address'].;
                echo"<br/>";


         }
?>


