<?php

    require '../includes/config.php';

    if(isset($_POST['donateMoney'])){
        $name = $_POST['name'];
        $transactionID = $_POST['transactionID'];
        $ammount = $_POST['ammount'];
        $today = date("Y-m-d");
        
        $data = [
            'name' => $name,
            'transactionID' => $transactionID,
            'ammount' => $ammount,
            'date' => $today
            ];

      $newPostKey = $database->getReference('donation')->push($data)->getKey();

        if($database){
            echo "<script>alert('Thank You For Kind Donation.');
                          window.location.href='../index.php';
                  </script>";
        }else{
            echo "<script>alert('Somthing Went Wrong!!!.');
                          window.location.href='../index.php';
                  </script>";
        }

    }


?>