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
        $branch_name = $_POST['branch_name'];


        $sql = "INSERT INTO staffTable (staff_username ,staff_email,staff_password,staff_phone_no,branch_name)
            VALUES ('$username','$email_id','$password',$phone_no,'$branch_name');";
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