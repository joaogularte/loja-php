<?php

    use PHPMailer\PHPMailer\{PHPMailer, Exception};

    require 'vendor/autoload.php';
    require 'conf.php';

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $msg = $_POST["mensagem"];
    
    try{

    
        $mail = new PHPMailer();
        $mail->SMTPDebug = 2;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPSecure = 'tls';
        $mail->SMTPAuth = true;
        $mail->Port = 587;
        $mail->Username = $user;
        $mail->Passwd = $password;

        $mail->setFrom($user, 'Mailer');
        $mail->addAddress($user);
        $mail->Subject = "Email de contato da loja";
        $mail->AltBody = "de: {$nome}\nemail:{$email}\nmensagem:{$msg}";
        if($mail->send()){
            echo "Email enviado";
            header("location: index.php");
        };

        
    }catch(Exception $e){
        echo $e;
    }
?>