<?php

    require '../includes/config.php';

    if(isset($_POST['faqForm'])){
        $faqQ = $_POST['faqQ'];
        $desc = $_POST['desc'];
        $today = date("Y-m-d");
        
        $data = [
            'faqQ' => $faqQ,
            'desc' => $desc,
            'c_date' => $today
            ];

      $newPostKey = $database->getReference('faq')->push($data)->getKey();

        if($database){
            echo "<script>alert('FAQ is Posted.');
                          window.location.href='../admin/faq.php';
                  </script>";
        }else{
            echo "<script>alert('Something Went Wrong!!!.');
                          window.location.href='../admin/faq.php';
                  </script>";
        }

    }


?>