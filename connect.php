<?php
    $firtname $_POST['firtname'];
    $email $_POST['email'];
    $password $_POST['password'];

// DATABASE CONNECTION  

    $con = new mysqli('localhost','root','','reg');
    if($conn->connect_error){
            die('Connection Failed   :  '.$connect_error);
    }
    else{
        $stmt = $conn->prepare("insert into registration(firtname,email,password) values(?,?,?)");
        $stmt->bind_param("sssssi",$firtname,$email,$password);
        $stmt->execute();
        echo "Registration Successfully...";
        $stmt->close();
        $con->close();
    }
?>