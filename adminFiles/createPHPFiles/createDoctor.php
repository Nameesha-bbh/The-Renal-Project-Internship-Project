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

        
        $username = $_POST['username'];
        $phone_no = $_POST['phone_no'];
        $password = $_POST['password'];
        $email_id = $_POST['email_id'];
        $speciality = $_POST['speciality'];

        $sql = "INSERT INTO doctorTable (doctor_username ,doctor_email,doctor_password,doctor_phone_no,speciality)
            VALUES ('$username','$email_id','$password',$phone_no,'$speciality');";
        $result = $conn->query($sql);
        if($result == TRUE){
            echo "<b>Insertion was successful</b>";
            header("Refresh:3;url= ../adminAccess.html");
            echo "<br><b>Redirecting to previous page</b>";
        }else{
            echo "error";
        }



        $conn->close();
?>