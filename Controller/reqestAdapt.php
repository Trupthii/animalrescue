<?php
    require '../includes/config.php';

    if(isset($_POST['petrequest'])){
        $petrequestToken = $_POST['petrequestToken'];
        $email = $_POST['email'];
        $name = $_POST['name'];
        $petAge = $_POST['petAge'];
        $petName = $_POST['petName'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $photoUrl = $_POST['photoUrl'];
        $loc = $_POST['loc'];
        $everadapt = $_POST['everadapt'];
        $desc = $_POST['desc'];

        $id = $_SESSION['id'];
        $today = date("Y-m-d");
        $tokernforUser = $petrequestToken . $id;
        
        $data = [
            'userId' => $id,
            'userEmail' => $email,
            'userName' => $name,
            'petAge' => $petAge,
            'petName' => $petName,
            'address' => $address,
            'phone' => $phone,
            'photoUrl' => $photoUrl,
            'petrequestToken' => $petrequestToken,
            'tokernforUser' => $tokernforUser,
            'location' => $loc,
            'everadapt' => $everadapt,
            'description' => $desc,
            'status' => 'Pending',
            'date' => $today
            ];

          
            $newPostKey = $database->getReference('adaptionRequests')->push($data)->getKey();
                if($database){
                    echo "<script>alert('Thank You For Requesting we will get back to you Please Wiat for the email.');
                                  window.location.href='../viewpet.php?petId=$petrequestToken';
                        </script>";
                }else{
                    echo "<script>alert('Somthing Went Wrong!!!.');
                                  window.location.href='../viewpet.php?petId=$petrequestToken';
                        </script>";
                }
            

    }


?>