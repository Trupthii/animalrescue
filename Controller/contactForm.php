<?php

    require '../includes/config.php';

    if(isset($_POST['sendContactForm'])){
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $today = date("Y-m-d");
        
        $data = [
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'message' => $message,
            'c_date' => $today
            ];

      $newPostKey = $database->getReference('contact')->push($data)->getKey();

        if($database){
            echo "<script>alert('Thank You For Contacting Us.');
                          window.location.href='../index.php';
                  </script>";
        }else{
            echo "<script>alert('Somthing Went Wrong!!!.');
                          window.location.href='../index.php';
                  </script>";
        }

    }


?>