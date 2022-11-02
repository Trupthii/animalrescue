<?php

    require '../includes/config.php';

    if(isset($_POST['adminLogin'])){

        $email = $_POST['email'];
        $pass = $_POST['pass'];

        try {

            $user = $auth->getUserByEmail($email);

            $signInResult = $auth->signInWithEmailAndPassword($email, $pass);
           
            $idTokenString = $signInResult->idToken();
            

            try {
                $verifiedIdToken = $auth->verifyIdToken($idTokenString);
                $uid = $verifiedIdToken->claims()->get('sub');
                $_SESSION['id'] = $uid;
                $_SESSION['idTokenString'] = $idTokenString;
                echo "<script>window.location.href='../admin/index.php';</script>";
                
            } catch (InvalidToken $e) {
                echo 'The token is invalid: '.$e->getMessage();
            } catch (\InvalidArgumentException $e) {
                echo 'The token could not be parsed: '.$e->getMessage();
            }

        } catch (Exception $e) {
           
            echo "<script>alert('Yor Email Id or Password is Wrong');
                window.location.href='../admin/login.php';
            </script>";
        }
    }


    if(isset($_POST['userLogin'])){

        $email = $_POST['email'];
        $pass = $_POST['pass'];

        try {

            $user = $auth->getUserByEmail($email);

            $signInResult = $auth->signInWithEmailAndPassword($email, $pass);
           
            $idTokenString = $signInResult->idToken();
            

            try {
                $verifiedIdToken = $auth->verifyIdToken($idTokenString);
                $uid = $verifiedIdToken->claims()->get('sub');
                $_SESSION['id'] = $uid;
                $_SESSION['idTokenString'] = $idTokenString;
                echo "<script>window.location.href='../index.php';</script>";
                
            } catch (InvalidToken $e) {
                echo 'The token is invalid: '.$e->getMessage();
            } catch (\InvalidArgumentException $e) {
                echo 'The token could not be parsed: '.$e->getMessage();
            }

        } catch (Exception $e) {
           
            echo "<script>alert('Yor Email Id or Password is Wrong');
                window.location.href='../index.php';
            </script>";
        }
    }
?>