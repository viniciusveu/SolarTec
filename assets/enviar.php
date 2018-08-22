<?php

if (isset($_POST['enviar'])) {
    $assunto = "solicitação de orçamento";
        # alterar a variavel abaixo colocando o seu email

        
        // pegando os dados do form...
    $msg = "Nome: " . $_POST["nome"] . "<br>";
    $msg = "Telefone: " . $_POST["tel"] . "<br>";
    $msg .= "Email: " . $_POST["email"] . "<br>";
    $msg .= "Mensagem:<br>" . $_POST["mensagem"];

    $destinatario = "vinicius_vedovotto@hotmail.com";

    $nome = $_POST['nome'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];

            // headers que prepara a mensagem
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n";
    $headers .= "From: " . $_POST["nome"] . "<" . $_POST["email"] . ">\r\n";
    $headers .= "Reply-To: " . $_POST["email"] . "\r\n";

        // envia o email
    mail($destinatario, $assunto, $msg, $headers);

        // redireciona para a página de obrigado
    header("location:localhost/SolarTec/obrigado.html");
}
?>