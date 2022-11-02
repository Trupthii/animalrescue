<?php

    require '../includes/config.php';
    
    use Firebase\Auth\Token\Exception\InvalidToken;
    
    if(isset($_SESSION['id'])){
        $uid = $_SESSION['id'];
        $idToken = $_SESSION['idTokenString'];
        try {
            $verifiedIdToken = $auth->verifyIdToken($idToken);
        } catch (InvalidToken $e) {
             echo "<script>alert('Token Has been Expired You Need to Login!!!');
                window.location.href='../admin/login.php?logged_out';
            </script>";
        } catch (\InvalidArgumentException $e) {
            echo 'The token could not be parsed: '.$e->getMessage();
        }


    }else{
        echo "<script>alert('You Need to Login to Access Secured Pages!!!');
                     window.location.href='../admin/login.php?logged_out';
            </script>";

    }