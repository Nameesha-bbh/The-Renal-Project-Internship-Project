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
        $sql = "select  patient_admit_date,count(*) as count from patientTable group by patient_admit_date;";
        $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));

        $data = array();
        $data = array();
        foreach ($result as $row) {
	$data[] = $row;
        }
        print json_encode($data);
        $conn->close();
?>