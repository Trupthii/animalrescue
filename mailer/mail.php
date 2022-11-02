<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer.php';
require 'SMTP.php';
require 'Exception.php';

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    if(isset($_POST['sendValMail'])){

            $email = $_POST['email'];        
            $name = $_POST['name'];
            $subject = $_POST['subject'];
            $emailBody = $_POST['emailBody'];

        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'prjctwebsite@gmail.com';                     // SMTP username
        $mail->Password   = 'animalrescue';                               // SMTP password
        $mail->SMTPSecure = 'ssl';;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

        //Recipients
        $mail->setFrom('prjctwebsite@gmail.com', 'Animal Resue');
        $mail->addAddress($email, $name);

        // Content
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body    = $emailBody;
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        echo "<script>alert('Email Sent SuccussFully.');
                      window.location.href='../admin/volunteer.php';
        </script>";


    } 
    
    
    if(isset($_POST['sendRepMail'])){

            $email = $_POST['email'];        
            $name = $_POST['name'];
            $subject = $_POST['subject'];
            $emailBody = $_POST['emailBody'];

        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'prjctwebsite@gmail.com';                     // SMTP username
        $mail->Password   = 'animalrescue';                               // SMTP password
        $mail->SMTPSecure = 'ssl';;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

        //Recipients
        $mail->setFrom('prjctwebsite@gmail.com', 'Animal Resue');
        $mail->addAddress($email, $name);

        // Content
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body    = $emailBody;
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        echo "<script>alert('Email Sent SuccussFully.');
                      window.location.href='../admin/report.php';
        </script>";


    }

    if(isset($_POST['sendadMail'])){

            $email = $_POST['email'];        
            $name = $_POST['name'];
            $subject = $_POST['subject'];
            $emailBody = $_POST['emailBody'];

        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'prjctwebsite@gmail.com';                     // SMTP username
        $mail->Password   = 'animalrescue';                               // SMTP password
        $mail->SMTPSecure = 'ssl';;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

        //Recipients
        $mail->setFrom('prjctwebsite@gmail.com', 'Animal Resue');
        $mail->addAddress($email, $name);

        // Content
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body    = $emailBody;
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        echo "<script>alert('Email Sent SuccussFully.');
                      window.location.href='../admin/adaptionreq.php';
        </script>";


    }

   
} catch (Exception $e) {
    
    if(isset($_POST['sendValMail'])){
        echo "<script>alert('Message could not be sent.');
                      window.location.href='../admin/volunteer.php';
        </script>";
    } 
    if(isset($_POST['sendRepMail'])){
        echo "<script>alert('Message could not be sent.');
                      window.location.href='../admin/report.php';
        </script>";
    }
     if(isset($_POST['sendadMail'])){
        echo "<script>alert('Message could not be sent.');
                      window.location.href='../admin/adaptionreq.php';
        </script>";
    }
}
?>
