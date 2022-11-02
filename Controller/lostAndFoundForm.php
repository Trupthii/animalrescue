<?php

    require '../includes/config.php';

    if(isset($_POST['sendlostandfoundForm'])){

        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $lostLocation = $_POST['lostLocation'];
        $desc = $_POST['desc'];
        $today = date("Y-m-d");

        $tar_Dir = "files/";
        $petImage = $tar_Dir . basename($_FILES['petImage']['name']);
        move_uploaded_file($_FILES['petImage']['tmp_name'],$petImage);
        
        $data = [
            'name' => $name,
            'phone' => $phone,
            'lostLocation' => $lostLocation,
            'petImage' => $petImage,
            'desc' => $desc,
            'c_date' => $today
            ];

      $newPostKey = $database->getReference('lostAndFound')->push($data)->getKey();

        if($database){
            echo "<script>alert('Report Has Been Posted.');
                          window.location.href='../index.php';
                  </script>";
        }else{
            echo "<script>alert('Somthing Went Wrong!!!.');
                          window.location.href='../index.php';
                  </script>";
        }

    }


?>