<?php

    use PHPMailer\PHPMailer\{PHPMailer, Exception};

    require 'vendor/autoload.php';
    require 'conf.php';

    //$nome = $_POST["nome"];
    //$email = $_POST["email"];
    //$msg = $_POST["mensagem"];
    
    $mail = new PHPMailer();
    $mail->SMTPDebug = 2;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPSecure = 'tls';
    $mail->SMTPAuth = true;
    $mail->Port = 587;
    $mail->Username = $email;
    $mail->Passwd = $password;

?>