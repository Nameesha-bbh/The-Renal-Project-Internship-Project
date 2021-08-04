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

        
        $branch_name = $_POST['branch_name'];
        $amount = $_POST['amount'];


        $sql = "INSERT INTO branchTable (branch_name,amount_per_patient)
            VALUES ('$branch_name',$amount);";
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