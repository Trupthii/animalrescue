<?php

    require '../includes/config.php';

    if(isset($_POST['valant'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $val = $_POST['val'];
        $help = $_POST['help'];
        $pet = $_POST['pet'];
        $sendEmail = $_POST['sendEmail'];
        $today = date("Y-m-d");
        
        $data = [
            'name' => $name,
            'email' => $email,
            'val' => $val, 
            'help' => $help,
            'HavePet' => $pet,
            'sendEmail' => $sendEmail,
            'c_date' => $today
            ];

           
            $newPostKey = $database->getReference('Volunteer')->push($data)->getKey();
                if($database){
                    echo "<script>alert('Thank You For Being with Us.');
                                  window.location.href='../index.php';
                        </script>";
                }else{
                    echo "<script>alert('Somthing Went Wrong!!!.');
                                  window.location.href='../index.php';
                        </script>";
                }

    }


?>