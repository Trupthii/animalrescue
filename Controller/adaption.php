<?php

    require '../includes/config.php';

    if(isset($_POST['postpet'])){

        $petName = $_POST['petName'];
        $age = $_POST['age'];
        $pettype = $_POST['pettype'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $desc = $_POST['desc'];
        $stutus = "Pending";
        $today = date("Y-m-d");

        $tar_Dir = "files/";
        $petImage = $tar_Dir . basename($_FILES['petImage']['name']);
        move_uploaded_file($_FILES['petImage']['tmp_name'],$petImage);

        $data = [
            'petName' => $petName,
            'age' => $age,
            'pettype' => $pettype,
            'phone' => $phone,
            'address' => $address,
            'desc' => $desc,
            'petImage' => $petImage,
            'stutus' => $stutus,
            'date' => $today
            ];

      $newPostKey = $database->getReference('adaption')->push($data)->getKey();

        if($newPostKey){
            echo "<script>alert('Adoption Details has been Saved.');
                          window.location.href='../admin/adaption.php';
                  </script>";
        }else{
            echo "<script>alert('Something Went Wrong!!!.');
                          window.location.href='../admin/adaption.php';
                  </script>";
        }

    }

    if(isset($_POST['updatepet'])){

        $petName = $_POST['petName'];
        $age = $_POST['age'];
        $pettype = $_POST['pettype'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $desc = $_POST['desc'];
        $today = date("Y-m-d");
        $token = $_POST['token'];

        $data = [
            'petName' => $petName,
            'age' => $age,
            'pettype' => $pettype,
            'phone' => $phone,
            'address' => $address,
            'desc' => $desc,
            'date' => $today
            ];

    
        $ref = "adaption/".$token;

      $newPostKey = $database->getReference($ref)->update($data)->getKey();

        if($newPostKey){
            echo "<script>alert('Adoption Details has been Updated.');
                          window.location.href='../admin/adaption.php';
                  </script>";
        }else{
            echo "<script>alert('Something Went Wrong!!!.');
                          window.location.href='../admin/adaption.php';
                  </script>";
        }

    }


?>