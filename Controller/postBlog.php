<?php

    require '../includes/config.php';

    if(isset($_POST['postBlog'])){
        $title = $_POST['title'];
        $blog = $_POST['blog'];
        $today = date("Y-m-d");

        $tar_Dir = "files/";
        $file = $tar_Dir . basename($_FILES['file']['name']);
        move_uploaded_file($_FILES['file']['tmp_name'],$file);
        
        $data = [
            'title' => $title,
            'blog' => $blog,
            'posterfile' => $file,
            'date' => $today
            ];

      $newPostKey = $database->getReference('blog')->push($data)->getKey();

        if($database){
            echo "<script>alert('Blog Has Been Posted.');
                          window.location.href='../admin/blog.php';
                  </script>";
        }else{
            echo "<script>alert('Somthing Went Wrong!!!.');
                          window.location.href='../admin/blog.php';
                  </script>";
        }

    }


?>