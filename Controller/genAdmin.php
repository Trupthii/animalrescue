<?php

    require '../includes/config.php';

        $name = "admin";
        $email = "admin@mail.com";
        $pass = "admin12345";
        $phoneNumber = "+91 9874563210";
        $today = date("Y-m-d");

        $userProperties = [
            'email' => $email,
            'emailVerified' => false,
            'phoneNumber' => $phoneNumber,
            'password' => $pass,
            'displayName' => $name
        ];
        $createdUser = $auth->createUser($userProperties);
        if($createdUser){
            echo "<script>alert('Admin Details has been added.');
                        //   window.location.href='../admin/index.php';
                  </script>";
        }else{
            echo "<script>alert('Somthing Went Wrong!!!.');
                        //   window.location.href='../admin/index.php';
                  </script>";
        }

   


?>