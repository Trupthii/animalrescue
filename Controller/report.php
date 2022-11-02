<?php

    require '../includes/config.php';
    if(isset($_POST['report'])){
        if(is_uploaded_file($_FILES['pet']['tmp_name'])){
            $tar_Dir = "files/";
            $petImage = $tar_Dir . basename($_FILES['pet']['name']);
            move_uploaded_file($_FILES['pet']['tmp_name'],$petImage);
        }else{
            $petImage = "No Image";
        }
        $place = $_POST['place'];
        $desc = $_POST['desc'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $today = date("Y-m-d");
        
        $data = [
            'place' => $place,
            'desc' => $desc,
            'name' => $name,
            'email' => $email,
            'petImage' => $petImage,
            'date' => $today
            ];

      $newPostKey = $database->getReference('reports')->push($data)->getKey();

        if($database){
            echo "<script>alert('Thank You For Reporting we will invastigate and get back to you.');
                          window.location.href='../index.php';
                  </script>";
        }else{
            echo "<script>alert('Somthing Went Wrong!!!.');
                          window.location.href='../index.php';
                  </script>";
        }

    }


?>