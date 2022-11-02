<?php

    require '../includes/config.php';

    if(isset($_POST['postAnnouncement'])){
        $title = $_POST['title'];
        $desc = $_POST['desc'];
        $today = date("Y-m-d");
        
        $data = [
            'title' => $title,
            'desc' => $desc,
            'a_date' => $today
            ];

      $check = $database->getReference('announcement')->push($data)->getKey();

        if($check){
            echo "<script>alert('Announcement has been Posted Successfully.');
                          window.location.href='../admin/announcement.php';
                  </script>";
        }else{
            echo "<script>alert('Something Went Wrong!!!.');
                          window.location.href='../admin/announcement.php';
                  </script>";
        }

    }

    if(isset($_POST['updateAnnouncement'])){
        $token = $_POST['token'];
        $title = $_POST['title'];
        $desc = $_POST['desc'];
        $today = date("Y-m-d");
        
       $data = [
            'title' => $title,
            'desc' => $desc,
            'a_date' => $today
            ];
        
        $ref = "announcement/".$token;
        $check = $database->getReference($ref)->update($data)->getKey();

        if($check){
            echo "<script>alert('Announcement has been Updated Successfully.');
                          window.location.href='../admin/announcement.php';
                  </script>";
        }else{
            echo "<script>alert('Something Went Wrong!!!.');
                          window.location.href='../admin/announcement.php';
                  </script>";
        }



    }


?>