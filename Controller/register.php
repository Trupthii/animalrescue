<?php

    require '../includes/config.php';

    if(isset($_POST['userRegister'])){
      
        $name = $_POST['name'];
        $phone = "+91".$_POST['phone'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $today = date("Y-m-d");
        
        
       $userProperties = [
        'email' => $email,
        'emailVerified' => false,
        'displayName' => $name,
        'phoneNumber' => $phone,
        'password' => $pass,
        'date' => $today,
        ];
        try{
        $createdUser = $auth->createUser($userProperties);
                echo "<script>alert('Registration Succussfull.');
                          window.location.href='../index.php';
                  </script>";
        }catch(Exception $e){
            echo "<script>alert('Your Email-ID or Phone Number has been already used.');
                          window.location.href='../index.php';
                  </script>";
        }
    }


?>