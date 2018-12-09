<?php

    $cpf =  $_POST["inputEmail"];
    $password = $_POST["inputPassword"];

    $con=mysqli_connect("localhost","root","","hackathon_apae");

          // Check connection
    if (mysqli_connect_errno()){
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    } else {
        $query = "SELECT count(*) as number from pessoa where cpf = '$cpf' and senha = '$password' ";
        $result = $con->query($query);
        $number = $result ->fetch_assoc();
        
        if($number["number"] == 0) {
           echo '<script type="text/javascript">alert("3211")</script>';
           header("Location:index.html?check=no");
           exit;
        } else {
          header("Location:menu.html");
           exit;
        }

    }
?>