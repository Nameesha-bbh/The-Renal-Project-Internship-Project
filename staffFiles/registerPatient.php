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

        $id = $_POST['id'];
        $name = $_POST['name'];
        $phone_no = $_POST['phone_no'];
        $admit_date = $_POST['admit_date'];
        $dob = $_POST['dob'];
        $issue = $_POST['issue'];
        $blood_group = $_POST['blood_group'];
        $branch = $_POST['branch'];

        $sql = "select true from patientTable where id=$id";
        $resultC = $conn->query($sql);
        if ($resultC->num_rows > 0){
                echo "No two patient can have the same id";
                header("Refresh:3;url= registerPatient.html");
                echo "<br><b>Redirecting to patient registration page</b>";
        }
        else{
                $sql = "INSERT INTO patientTable (id ,patient_username , patient_phone_no , patient_dob ,patient_admit_date , health_issue , blood_group ,branch_name)
                 VALUES ($id ,'$name' , $phone_no , '$dob' ,'$admit_date' , '$issue' , '$blood_group' , '$branch');";
                $result = $conn->query($sql);
                if($result == TRUE){
                    echo "<b>Insertion was successful</b>";
                    header("Refresh:3;url= registerPatient.html");
                    echo "<br><b>Redirecting to patient registration page</b>";
                }
        }
        


        $conn->close();
?>