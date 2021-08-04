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

        $sql = "select true from doctorTable where doctor_email='$email_id';";
        $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
        if ($result->num_rows > 0)
        {
           
        }
        else{
            echo "<b>Entered email-id is not found. Check your email-id again or contact admin to sign up</b>";
            echo "<a href='doctorLogin.html' > Click to go back</a>";
            exit;
        }

        $sql1 = "select true from doctorTable where doctor_email='$email_id' and doctor_password='$password';";

        $result = mysqli_query($conn, $sql1) or die(mysqli_error($conn));
        if ($result->num_rows > 0)
        {
            header("Refresh:2;url= ./graphLogic/linegraph.html");
            echo "The entered details are correct . You will be redirected to the patient statistics page in 2 seconds";            
            //sleep(10);
            
        }
        else{
            echo "<b>Wrong username or password</b>";
            echo "<a href='doctorLogin.html' > Click to go back</a>";
        }

        $conn->close();
?>