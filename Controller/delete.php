<?php

    require '../includes/config.php';

    if(isset($_GET['deleteAnnouncementtoken'])){

        $dltToken = $_GET['deleteAnnouncementtoken'];
        $ref = "announcement/".$dltToken;
        $check =  $database->getReference($ref)->remove();

        if($check){
            echo "<script>alert('Announcement has been Deleted Succusfully.');
                          window.location.href='../admin/announcement.php';
                  </script>";
        }else{
            echo "<script>alert('Somthing Went Wrong!!!.');
                          window.location.href='../admin/announcement.php';
                  </script>";
        }

    }
   
    if(isset($_GET['deletepetadaptiontoken'])){

        $dltToken = $_GET['deletepetadaptiontoken'];
        $ref = "adaption/".$dltToken;
        $check =  $database->getReference($ref)->remove();

        if($check){
            echo "<script>alert('Pet Adation Details has been Deleted Succusfully.');
                          window.location.href='../admin/adaption.php';
                  </script>";
        }else{
            echo "<script>alert('Somthing Went Wrong!!!.');
                          window.location.href='../admin/adaption.php';
                  </script>";
        }

    }  
    
    if(isset($_GET['deleteBlogtoken'])){

        $dltToken = $_GET['deleteBlogtoken'];
        $ref = "blog/".$dltToken;
        $check =  $database->getReference($ref)->remove();

        if($check){
            echo "<script>alert('Blog Details has been Deleted Succusfully.');
                          window.location.href='../admin/blog.php';
                  </script>";
        }else{
            echo "<script>alert('Somthing Went Wrong!!!.');
                          window.location.href='../admin/blog.php';
                  </script>";
        }

    } 
    
    
    if(isset($_GET['deleteusertoken'])){

        $dltToken = $_GET['deleteusertoken'];

        try{
$check = $auth->deleteUser($dltToken);
 echo "<script>alert('User has been Deleted Succusfully.');
                          window.location.href='../admin/users.php';
                  </script>";
        }catch(Exception $e){
    echo "<script>alert('Somthing Went Wrong!!!.');
                          window.location.href='../admin/users.php';
                  </script>";
        }

           


    }

?>