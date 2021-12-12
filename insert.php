<?php
    $Fname = $_POST['fname'];
    $Lname = $_POST['lname'];
    $Email = $_POST['email'];
    $Address = $_POST['address'];
    $Gender = $_POST['gen'];
    $Birthday = $_POST['birthday'];
    $Grade = $_POST['grade'];
    $Percent = $_POST['percentage'];
    $Hobbies = $_POST['hobby'];

        $con = new mysqli('localhost', 'root', '', 'html');
        if($con->connect_error){
            echo "$con->connect_error";
            die("Connection failed: ".$con->connect_error);
        }else{
            $stmt = $con->prepare("INSERT INTO Table form_data values(?,?,?,?,?,?,?,?,?)");
            $stmt->bind_param("sssssi",$Fname,$Lname,$Email,$Address,$Gender,$Birthday,$Grade,$Percent,$Hobbies);
            $execval = $stmt->execute();
            echo $execval;
            echo "Your application is submitted";
            $stmt->close();
            $con->close();            
        }
?>