<?php
        $servername = "localhost";
        $username = "root";
        $password = "nameesha";
        $dbname = "mainDB";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }

        $email_id = $_POST['email_id'];
        $password = $_POST['password'];

        $sql = "select true from adminTable where admin_email='$email_id';";
        $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
        if ($result->num_rows > 0)
        {
           
        }
        else{
            echo "<b>Entered email-id is not found.</b>";
            echo "<a href='adminLogin.html' > Click to go back</a>";
            exit;
        }

        $sql1 = "select true from adminTable where admin_email='$email_id' and admin_password='$password';";

        $result = mysqli_query($conn, $sql1) or die(mysqli_error($conn));
        if ($result->num_rows > 0)
        {
            header("Refresh:3;url= adminAccess.html");
            echo "The entered details are correct . You will be redirected to the admin  page in 3 seconds";            
            //sleep(10);
            
        }
        else{
            echo "<b>Wrong username or password</b>";
            echo "<a href='adminLogin.html' > Click to go back</a>";
        }

        $conn->close();
?>