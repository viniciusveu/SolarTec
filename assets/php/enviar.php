<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/SMTP.php';

header("Content-type: text/html;charset=utf-8");

$nome = $_POST['nome'];
$tel = $_POST['tel'];
$emailform = $_POST['email'];
$msg = $_POST['mensagem'];

$mail = new PHPMailer(true);
/* Open the try/catch block. */
try {
 /* SMTP parameters. */

    $mail->setLanguage('pt-br');
   
   /* Tells PHPMailer to use SMTP. */
    $mail->isSMTP();
   
   /* SMTP server address. */
    $mail->Host = 'smtp.gmail.com';

   /* Use SMTP authentication. */
    $mail->SMTPAuth = true;
   
   /* Set the encryption system. */
    $mail->SMTPSecure = 'tls';
   
   /* SMTP authentication username. */
    $mail->Username = 'viniciusvedovotto@gmail.com';
   
   /* SMTP authentication password. */
    $mail->Password = 'fostonfsgoogle';
   
   /* Set the SMTP port. */
    $mail->Port = 587;

    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );

    /* Set the mail sender. */
    $mail->setFrom('noreply.solartec@gmail.com', utf8_decode('Não responda - SolarTec'));
 
    /* Add a recipient. */
    $mail->addAddress( utf8_decode('viniciusvedovotto@gmail.com'),  utf8_decode('Vedovotto'));
 
    /* Set the subject. */
    $mail->Subject = utf8_decode('Novo contato site SolarTec - ' . $nome);
    $mail->IsHTML(true);  
    /* Set the mail message body. */
    $mail->Body = utf8_decode('Mensagem de: ' . $nome . '.<br> Telefone: ' . $tel . '.<br> E-mail: ' . $emailform . '.<br> Mensagem: ' . $msg );

    // $mail->SMTPDebug = 4; 

    /* Finally send the mail. */
    $mail->send();

    echo "<script>window.location.assign('../../obrigado.html')</script>";
} catch (Exception $e) {
    /* PHPMailer exception. */
    echo $e->errorMessage();
} catch (\Exception $e) {
    /* PHP exception (note the backslash to select the global namespace Exception class). */
    echo $e->getMessage();
}